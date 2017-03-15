function getMaxOfArray(arr) {
  return Math.max.apply(null, arr);
}


//todo сделать модули для всех компонентов
(function () {


})();


function addSelectElement ( event, ratingWrapperId, placeholderId, ratingInputId, removeButtonId ) {
  var ratingWrapper              = document.getElementById( ratingWrapperId );
  var ratingWrapperClone         = ratingWrapper.cloneNode( true );
  document.getElementById( removeButtonId ).removeAttribute('id');
  // Делаем копию рейтинга, при этом id тоже копируется и документ содержит уже два элемента с одним идентификатором для
  // обёртки и для кнопки
  // Пока элемент не вставлен на страницу то идентификатор по прежнему остаётся уникальным



  // var removeButtonInWrapperClone = ratingWrapperClone.getElementById( removeButtonId );

  ratingWrapperClone.removeAttribute('id');

  console.log( ratingWrapper );
  console.log( ratingWrapperClone );
  // console.log( removeButtonInWrapperClone );


  var placeholder                = document.getElementById( placeholderId );
  var ratingInput                = document.getElementById( ratingInputId );


  /*
  1. Пользвователь нажимает на выбранный рейтинг
  2. Скрипт проверяет виден ли placeholder, если виден то прячем - добавляем классс hide
   */

  if ( ratingInput.contains( ratingWrapper ) ) {
    //Чтобы не вставлялись копии уже вставленных ratingWrapper'ов
    return false;
  }

  if ( !placeholder.classList.contains('hide') ) {
    //Если placeholderId виден
   placeholder.classList.add('hide');
  }

  ratingWrapper.removeAttribute('id');


  ratingInput.appendChild( ratingWrapperClone );

  document.getElementById( removeButtonId ).classList.remove('hide');
}



function removeSelectElement( event, ratingWrapperId, placeholderId, ratingInputId ) {
  var ratingWrapper      = document.getElementById( ratingWrapperId );
  var placeholder        = document.getElementById( placeholderId );
  var ratingInput        = document.getElementById( ratingInputId );


  ratingWrapper.parentNode.removeChild( ratingWrapper );



}

