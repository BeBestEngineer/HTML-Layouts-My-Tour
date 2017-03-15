function getMaxOfArray(arr) {
  return Math.max.apply(null, arr);
}


//todo сделать модули для всех компонентов
(function () {


})();


function addSelectElement ( event, ratingWrapperId, placeholderId, ratingInputId, removeButtonId ) {
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

  //После клонирования удаляем id для обёртки и для кнопки удаления из оригинальных HTML тегов - которые существуют в разметке ( Часть 1/2 )
  document.getElementById( removeButtonId ).removeAttribute('id');


  if ( ratingInput.contains( ratingWrapper ) ) {
    // Если ratingInput содержит обёртку на которую ликнули то выходим из функции
    // Чтобы не вставлялись копии уже вставленных ratingWrapper'ов
    return false;
  }

  //После клонирования удаляем id для обёртки и для кнопки удаления из оригинальных HTML тегов - которые существуют в разметке ( Часть 2/2 )
  ratingWrapper.removeAttribute('id');


  //После удаления повторяющихся id вставляем клона
  ratingInput.appendChild( ratingWrapperClone );

  //снимаем фиксированную высоту с контейнеру куда вставился клон и устанавливаем минимальную выслоту
  //todo: т.к. используем flex то можно задавать высоту только  родителю для input, но тогда будут увеличиваться по высоте все input в родителе у которого меняется высота
  var ratingInputBeforeAddtem = ratingInput.offsetHeight;
  ratingInput.style.height = 'auto';
  ratingInput.style.minHeight = ratingInputBeforeAddtem + 'px';
  // console.log( ratingInput.offsetHeight );


  //показываем кнопку удаления
  document.getElementById( removeButtonId ).classList.remove('hide');

  //Пересчитываем высоту вкладки ( tab height )
  recalculationTabHeight( ratingInput.offsetHeight );
}



function removeSelectElement( event, ratingWrapperId, placeholderId, ratingInputId ) {
  var ratingWrapper      = document.getElementById( ratingWrapperId );
  var placeholder        = document.getElementById( placeholderId );
  var ratingInput        = document.getElementById( ratingInputId );


  ratingWrapper.parentNode.removeChild( ratingWrapper );



}




function recalculationTabHeight( inputHeight ) {
  
}