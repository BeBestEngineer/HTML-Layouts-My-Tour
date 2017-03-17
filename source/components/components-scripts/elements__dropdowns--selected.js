function addSelectElement ( event, ratingWrapperId, placeholderId, ratingInputId, removeButtonId, ratingContainerId, checkboxIdPattern ) {
	//todo: исправить названия функций на addSelectedElement
	// console.log( 'start addSelectElement' );
	/*
	 1. Пользвователь нажимает на выбранный рейтинг
	 2. Скрипт проверяет виден ли placeholder, если виден то прячем - добавляем классс hide
	 */
	var ratingInput                = document.getElementById( ratingInputId );
	var ratingContainer            = document.getElementById( ratingContainerId );

	var placeholder                = document.getElementById( placeholderId );
	if ( !placeholder.classList.contains('hide') ) {
		//Если placeholderId виден
		placeholder.classList.add('hide');
	}


	var ratingWrapper              = document.getElementById( ratingWrapperId );
	var ratingWrapperClone         = ratingWrapper.cloneNode( true );
	// Делаем копию рейтинга, при этом id тоже копируется и документ содержит уже два элемента с одним идентификатором для
	// обёртки и для кнопки удаления
	// Пока элемент не вставлен на страницу то идентификатор по прежнему остаётся уникальным

	//После клонирования обновляем id для обёртки и для кнопки удаления из оригинальных HTML тегов - которые существуют в разметке ( Часть 1/3 )
	var removeButtonIdInDropdown = removeButtonId + '-in-dropdown';
	document.getElementById( removeButtonId ).setAttribute( 'id', removeButtonIdInDropdown );


	if ( ratingInput.contains( ratingWrapper ) ) {
		// Если ratingInput содержит обёртку на которую ликнули то выходим из функции
		// Чтобы не вставлялись копии уже вставленных ratingWrapper'ов
		return false;
	}

	//После клонирования обновляем id для обёртки и для кнопки удаления из оригинальных HTML тегов - которые существуют в разметке ( Часть 2/3 )
	var ratingWrapperIdInDropdown = ratingWrapperId + '-in-dropdown';
	ratingWrapper.setAttribute( 'id', ratingWrapperIdInDropdown );

	//Удаляем событие которое было установлено для item'a в dropdown из клона ( Часть 3/3 )
	ratingWrapperClone.removeAttribute('onclick');


	//После удаления повторяющихся id вставляем клона
	ratingInput.appendChild( ratingWrapperClone );


	//снимаем фиксированную высоту с контейнеру куда вставился клон и устанавливаем минимальную выслоту
	//todo: т.к. используем flex то можно задавать высоту только  родителю для input, но тогда будут увеличиваться по высоте все input в родителе у которого меняется высота
	//т.к. элементы из dropdown могут вставляться в любой контейнер, т.е. такой контейнер нужно дополнительно объявить и определить.
	var ratingInputBeforeAddtem = ratingContainer.offsetHeight;
	ratingContainer.style.height = 'auto';
	ratingContainer.style.minHeight = ratingInputBeforeAddtem + 'px';


	//показываем кнопку удаления
	document.getElementById( removeButtonId ).classList.remove('hide');

	//Пересчитываем высоту вкладки ( tab height )
	recalculationTabHeight();


	//Активируем нужный checkbox
	//Узнаём количество звёзд
	var ratingValue = ratingWrapperClone.id.replace(/\D+/g,"");
	var checkboxIdFirstPart= checkboxIdPattern.slice( 0, -1 );
	var checkbox = document.getElementById( checkboxIdFirstPart + ratingValue );
	checkbox.checked = true;
}





function removeSelectElement( event, ratingWrapperId, placeholderId, ratingWrapperClass, checkboxIdPattern ) {
	//todo: исправить названия функций на removeSelectedElement
	var removeButtonIdInDropdown  = event.target.id + '-in-dropdown';
	var ratingWrapperIdInDropdown = ratingWrapperId + '-in-dropdown';
	var ratingWrapper             = document.getElementById( ratingWrapperId );
	var placeholder               = document.getElementById( placeholderId );



	var ratingWrapperInDropdown = document.getElementById( ratingWrapperIdInDropdown );
	// console.log( ratingWrapperInDropdown );
	ratingWrapperInDropdown.setAttribute('id', ratingWrapperId );
	// console.log( ratingWrapperInDropdown );

	var removeButtonInDropdown = document.getElementById( removeButtonIdInDropdown );
	// console.log( removeButtonInDropdown );
	removeButtonInDropdown.setAttribute('id', event.target.id );
	// console.log( removeButtonInDropdown );

	ratingWrapper.parentNode.removeChild( ratingWrapper );


	var placeholder = document.getElementById( placeholderId );
	var ratingInput = document.getElementById( placeholder.parentNode.id );

	//устанавливаем высоту для input, когда в нём есть рейтинг
	ratingInput.style.minHeight = '';
	ratingInput.style.height = '';

	removeSelectElement.RATING_INPUT_ORIGINAL_HEIGHT = parseInt( getComputedStyle( ratingInput ).height, 10);

	ratingInput.style.height = 'auto';

	if ( ratingInput.offsetHeight < removeSelectElement.RATING_INPUT_ORIGINAL_HEIGHT ) {
		ratingInput.style.height = removeSelectElement.RATING_INPUT_ORIGINAL_HEIGHT + 'px';
	}


	//показываем placeholder
	if ( ratingInput.getElementsByClassName( ratingWrapperClass ).length == 0 ) {
		placeholder.classList.remove('hide');
	}

	//Пересчитываем высоту вкладки ( tab height )
	recalculationTabHeight();


	//Деактивируем нужный checkbox
	//Узнаём количество звёзд
	var ratingValue = ratingWrapper.id.replace(/\D+/g,"");
	var checkboxIdFirstPart= checkboxIdPattern.slice( 0, -1 );
	var checkbox = document.getElementById( checkboxIdFirstPart + ratingValue );
	checkbox.checked = false;
}