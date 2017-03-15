function getMaxOfArray(arr) {
  return Math.max.apply(null, arr);
}


//todo сделать модули для всех компонентов
(function () {


})();


function addSelectElement ( event, ratingWrapperId, placeholderId, ratingInputId, removeButtonId ) {
  console.log( 'start addSelectElement' );
  /*
   1. Пользвователь нажимает на выбранный рейтинг
   2. Скрипт проверяет виден ли placeholder, если виден то прячем - добавляем классс hide
   */
  var ratingInput                = document.getElementById( ratingInputId );


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

  //Запоминаем событие которое было установлено для item'a в dropdown и удаляем это событие из клона ( Часть 3/3 )
  // var ratingWrapperIdEventInDropdown = ratingWrapper.getAttribute('onclick');
  ratingWrapperClone.removeAttribute('onclick');
  // console.log( ratingWrapperIdEventInDropdown );


  // addSelectElement.REMOVE_BUTTON_ID_IN_DROPDOWN        = removeButtonIdInDropdown;
  // addSelectElement.RATING_WRAPPER_ID_IN_DROPDOWN       = ratingWrapperIdInDropdown;
  // addSelectElement.RATING_WRAPPER_ID_EVENT_IN_DROPDOWN = ratingWrapperIdEventInDropdown;
  
  
  //После удаления повторяющихся id вставляем клона
  ratingInput.appendChild( ratingWrapperClone );


  //снимаем фиксированную высоту с контейнеру куда вставился клон и устанавливаем минимальную выслоту
  //todo: т.к. используем flex то можно задавать высоту только  родителю для input, но тогда будут увеличиваться по высоте все input в родителе у которого меняется высота
  var ratingInputBeforeAddtem = ratingInput.offsetHeight;
  ratingInput.style.height = 'auto';
  ratingInput.style.minHeight = ratingInputBeforeAddtem + 'px';


  //показываем кнопку удаления
  document.getElementById( removeButtonId ).classList.remove('hide');

  //Пересчитываем высоту вкладки ( tab height )
  recalculationTabHeight();
}

//ratingWrapperIdInDropdown, removeButtonIdInDropdown

function removeSelectElement( event, ratingWrapperId, placeholderId, dropdownId ) {
  var removeButton              = document.getElementById( event.target.id );
  var ratingWrapperIdInDropdown = ratingWrapperId + '-in-dropdown';
  var placeholder               = document.getElementById( placeholderId );
  var dropdown                  = document.getElementById( dropdownId );


  console.log( ratingWrapperId );

  var ratingWrapper

  /*
    1. Удаляем элемент из родителя
    2. Заменяем id у обёртки и кнопки на оригинальные
   */




  ratingWrapper.parentNode.removeChild( ratingWrapper );

  // recalculationTabHeight();

}




function recalculationTabHeight() {
  var tabcontent  = document.getElementsByClassName("tabs__content");
  var tabsWrapper = document.getElementById("tabs-wrapper-id");


  var i, tabcontentHeights = [];
  for (i = 0; i < tabcontent.length; i++) {
    tabcontentHeights[i] = tabcontent[i].offsetHeight;
  }

  tabsWrapper.style.height = getMaxOfArray(tabcontentHeights) + 'px';
}