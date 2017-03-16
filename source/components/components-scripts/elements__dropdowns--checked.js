function addCheckedElement( event, labelTextId, pillWrapperId, pillTextId, pillButtonId, dropdownButtonId, placeholderId ) {
	var dropdownButton = document.getElementById( dropdownButtonId );
  var placeholder = document.getElementById( placeholderId );

  var checkbox = document.getElementById( event.target.id );
  // console.log( checkbox );

  if ( checkbox.checked ) {
    //Запоинаем текст
    var labelText = document.getElementById( labelTextId );
    //Ищем пилюлю
    var pillWrapper 					   = document.getElementById( pillWrapperId );
    //Делаем клона
    var pillWrapperClone         = pillWrapper.cloneNode( true );
    // ratingWrapper.parentNode.removeChild( ratingWrapper );
    //Обрабатываем клона
    //Меняем id оболочки
    pillWrapperClone.id = pillWrapperClone.id.slice( 0, -3 ) + event.target.id.slice( 9, -9 ) + event.target.id.slice( -2 );

    var i;
    for (i = 0; i < pillWrapperClone.children.length; i++) {
      var pillWrapperCloneChildren = pillWrapperClone.children[i];

      if ( pillWrapperCloneChildren.id === pillTextId ) {
        //Меняем id текста
        pillWrapperCloneChildren.id = pillWrapperCloneChildren.id.slice( 0, -3 ) + event.target.id.slice( 9, -9 ) + event.target.id.slice( -2 );
        // console.log( pillWrapperCloneChildren.id );
        //Вставляем клону текст
        pillWrapperCloneChildren.innerHTML = labelText.innerHTML;
      }
      if ( pillWrapperCloneChildren.id === pillButtonId ) {
        //Меняем id кнопки
        pillWrapperCloneChildren.id = pillWrapperCloneChildren.id.slice( 0, -3 ) + event.target.id.slice( 9, -9 ) + event.target.id.slice( -2 );
        // console.log( pillWrapperCloneChildren.id );
      }
    }

    //Убираем placeholder
    placeholder.classList.add('hide');

    //Показываем клона
    pillWrapperClone.classList.remove('hide');
    //Вставляем клона
    pillWrapper.parentNode.appendChild( pillWrapperClone );

    //снимаем фиксированную высоту с контейнера
    var containerHeightBeforeAddItem = dropdownButton.offsetHeight;
		dropdownButton.style.height = 'auto';
		dropdownButton.style.minHeight = containerHeightBeforeAddItem + 'px';

    //Пересчитываем высоту вкладки ( tab height )
    recalculationTabHeight();
  }

}




function removeCheckedElement( event, placeholderId ) {
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
  var pillWrapperClass = pillWrapper.classList[0];
  var pillWrappersCollection = dropDownButton.getElementsByClassName( pillWrapperClass );

  var i;
  for ( i = 0; i < pillWrappersCollection.length; i++ ) {
    var pillWrappersCollectionItem = pillWrappersCollection[i];
    var visibleElementsCounter = 0;

    console.log( getComputedStyle( pillWrapperCollectionItem ).display );


  }



  function makeCounter() {
    var currentCount = 0;

    return function() {
      return currentCount++;
    };
  }

  var counter = makeCounter();


  
  // console.log( visibleElementsCounter );

  if ( visibleElementsCounter === 0 ) {
    placeholder.classList.remove('hide');
  }


  recalculationTabHeight();

}