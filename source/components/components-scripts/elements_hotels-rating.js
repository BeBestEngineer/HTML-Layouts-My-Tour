//todo сделать модули для всех компонентов
(function () {
  var ratingListOriginal 			= document.getElementById('hotels-rating-select__list-id');
  var ratingItemOriginal 		  = document.getElementById('hotels-rating-select__item-id');
	var ratingItemOriginalValue 	= document.getElementById('hotels-rating-select__value-id');
  var ratingItemModified;
  var ratingItemsFragment  		= document.createDocumentFragment();


  ratingItemOriginal.classList.add('hotels-rating-list__item', 'li');
	ratingItemOriginal.removeAttribute('id');
	ratingItemOriginalValue.removeAttribute('id');

  var i;
  for ( i = 1; i <= 5; i++) {
		ratingItemOriginalValue.innerHTML = i;
		ratingItemModified = ratingItemOriginal.cloneNode(true);
		ratingItemsFragment.appendChild( ratingItemModified );
  }

	ratingListOriginal.innerHTML = '';
  ratingListOriginal.appendChild( ratingItemsFragment );

})();