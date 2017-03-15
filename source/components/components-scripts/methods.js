function getMaxOfArray(arr) {
  return Math.max.apply(null, arr);
}


//todo сделать модули для всех компонентов
(function () {


})();


function addSelectElement ( event, ratingWrapperId, placeholderId, ratingInputId, removeButtonId ) {
  var ratingWrapper              = document.getElementById( ratingWrapperId );

  var ratingWrapperClone         = ratingWrapper.cloneNode( true );


  var removeButton = document.getElementById( removeButtonId );

  var placeholder                = document.getElementById( placeholderId );
  var ratingInput                = document.getElementById( ratingInputId );


  /*
  1. Пользвователь нажимает на выбранный рейтинг
  2. Скрипт проверяет содержит ли контейнер выбранный рейтинг, если содержит, то выходим из функции
                                                               если не содержит прячем placeholder
   */

  // console.log( ratingInput ); 

  if ( ratingInput.contains( ratingWrapper ) ) {
    //Чтобы не вставлялись копии уже вставленных ratingWrapper'ов
    return false;
  }


  if ( !placeholder.classList.contains('hide') ) {
    //Если placeholderId виден
   placeholder.classList.add('hide');
  }

  ratingWrapper.removeAttribute('id');
  removeButton.classList.remove('hide');

  ratingInput.appendChild( ratingWrapperClone );
}



function removeSelectElement( event, ratingWrapperId, placeholderId, ratingInputId ) {
  var ratingWrapper      = document.getElementById( ratingWrapperId );
  var placeholder        = document.getElementById( placeholderId );
  var ratingInput        = document.getElementById( ratingInputId );


  ratingWrapper.parentNode.removeChild( ratingWrapper );



}

