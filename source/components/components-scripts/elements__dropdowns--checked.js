function addCheckedElement( event, labelTextId, pillWrapperId, pillTextId, pillButtonId, dropdownButtonId, placeholderId, countriesPillsContainerId ) {
	//контейнер, куда вставляются пилюли
  var dropdownButton = document.getElementById( dropdownButtonId );
  var placeholder = document.getElementById( placeholderId );

  var checkbox = document.getElementById( event.target.id );

  if ( checkbox.checked ) {
    //todo: Добавить проверку на существующие в контейнере пилюли

    //Запоминаем текст
    var labelText = document.getElementById( labelTextId );
    //Ищем пилюлю
    //Когда создаётся несколько регионов то в каждом из них находятся скрытые контейнеры для стран, т.е. создаётся несколько контейнеров с id="pills__wrapper--countries-id"
    var pillWrapper 					   = document.getElementById( pillWrapperId );
    //Делаем клона
    var pillWrapperClone         = pillWrapper.cloneNode( true );

    //Обрабатываем клона
    //Меняем id оболочки
    pillWrapperClone.id = pillWrapperClone.id.slice( 0, 16 ) + event.target.id.slice( 0, -10 ) + event.target.id.slice( -3 );

    var i;
    for (i = 0; i < pillWrapperClone.children.length; i++) {
      var pillWrapperCloneChildren = pillWrapperClone.children[i];

      if ( pillWrapperCloneChildren.id === pillTextId ) {
        //Меняем id текста
        pillWrapperCloneChildren.id = pillWrapperCloneChildren.id.slice( 0, 13 ) + event.target.id.slice( 0, -10 ) + event.target.id.slice( -3 );
        //Вставляем клону текст
        pillWrapperCloneChildren.innerHTML = labelText.innerHTML;
      }
      if ( pillWrapperCloneChildren.id === pillButtonId ) {
        //Меняем id кнопки
        pillWrapperCloneChildren.id = pillWrapperCloneChildren.id.slice( 0, 15 ) + event.target.id.slice( 0, -10 ) + event.target.id.slice( -3 );
      }
      if ( pillWrapperCloneChildren.id === countriesPillsContainerId ) {
        //Меняем id контейнера для внутренних пилюль, если такой есть
        pillWrapperCloneChildren.id = countriesPillsContainerId.slice( 0, 11 ) + labelTextId.slice( -15 ) + countriesPillsContainerId.slice( -16 );
        console.log( pillWrapperCloneChildren.id );
      }
    }




    //Убираем placeholder
    placeholder.classList.add('hide');

    //Показываем клона
    pillWrapperClone.classList.remove('hide');
    //Вставляем клона
    dropdownButton.appendChild( pillWrapperClone );

    //снимаем фиксированную высоту с контейнера
    var containerHeightBeforeAddItem = dropdownButton.offsetHeight;
		dropdownButton.style.height = 'auto';
		dropdownButton.style.minHeight = containerHeightBeforeAddItem + 'px';

    //Пересчитываем высоту вкладки ( tab height )
    recalculationTabHeight();
  }

}




function removeCheckedElement( event, placeholderId, pillWrapperClass ) {
//todo: исправить названия js файлов по БЭМ
  /*
  При нажатии на кнопку удаления:
  1. Удалить пилюлю    pills__button--nutrition-room-only-id    из контейнера
  2. Найти соответсвующий checkbox    nutrition-room-only--input-id    и деактивировать его
  3. Пересчитать высоту
  4. Показывапм placeholder
   */

  //Удаляем пилюлю
  var pillWrapper = event.target.parentNode;
  pillWrapper.parentNode.removeChild( pillWrapper );


  //Ищем checkbox
  var checkBoxId = event.target.id.slice( 15, -3 ) + '--input-id';
  var checkBox = document.getElementById( checkBoxId );
  checkBox.checked = false;


  //Пересчитываем высоту
  var placeholder = document.getElementById( placeholderId );
  var dropDownButton = document.getElementById( placeholder.parentNode.id );
  //устанавливаем высоту для dropDownButton
  dropDownButton.style.minHeight = '';
  dropDownButton.style.height = '';

  removeCheckedElement.DROPDOWN_BUTTON_ORIGINAL_HEIGHT = parseInt( getComputedStyle( dropDownButton ).height, 10);

  dropDownButton.style.height = 'auto';

  if ( dropDownButton.offsetHeight < removeCheckedElement.DROPDOWN_BUTTON_ORIGINAL_HEIGHT ) {
    dropDownButton.style.height = removeCheckedElement.DROPDOWN_BUTTON_ORIGINAL_HEIGHT + 'px';
  }


  //показываем placeholder
  //Берём коллексию с элементами содержащими нужный класс
  //В этой коллекции находим видимые элементы с нужным классом,
  //если количество таких элементов равно 0 то показываем placeholder

  //Получаем коллекцию после удаления пилюли в которой также находиться оригинальная скрытая пилюля
  var pillWrappersCollection = dropDownButton.getElementsByClassName( pillWrapperClass );

  var i;
  var pillWrappersItemVisible = 0;
  for ( i = 0; i < pillWrappersCollection.length; i++ ) {
    //Получаем элемент коллекции
    var pillWrappersItem = pillWrappersCollection[i];

    //Считаем видимые элементы
    if ( getComputedStyle( pillWrappersItem ).display !== 'none' ) {
      pillWrappersItemVisible +=1;
    }
  }

  if ( pillWrappersItemVisible === 0 ) {
    placeholder.classList.remove('hide');
  }

  recalculationTabHeight();
}