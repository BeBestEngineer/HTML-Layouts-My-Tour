//todo сделать модули для всех компонентов
(function () {
	var ratings = document.getElementsByClassName('rating');
	var iconCloneColor, iconCloneNoColor;
	var iconsColor 	 = document.createDocumentFragment(),
			iconsNoColor = document.createDocumentFragment();

	var i;
	for (i = 0; i < ratings.length; i++) {
		var singleRatingElement = ratings[i];


		if ( singleRatingElement.classList.contains('rating--5-stars') ) {
			insertElements( 5, 5 );
		} else if ( singleRatingElement.classList.contains('rating--4-stars') ) {
			insertElements( 4, 5 );
		} else if ( singleRatingElement.classList.contains('rating--3-stars') ) {
			insertElements( 3, 5 );
		} else if ( singleRatingElement.classList.contains('rating--2-stars') ) {
			insertElements( 2, 5 );
		} else if ( singleRatingElement.classList.contains('rating--1-stars') ) {
			insertElements( 1, 5 );
		}

	}




	function insertElements( stars, allStars ) {
		var iconOriginal = singleRatingElement.firstElementChild;
		var starsColor = stars*1;
		var starsNoColor = allStars*1 - starsColor*1;

		var iconCloneColorNumbers;
		for ( iconCloneColorNumbers = 1; iconCloneColorNumbers <= starsColor; iconCloneColorNumbers++) {

			iconCloneColor = iconOriginal.cloneNode(true);
			iconCloneColor.classList.add('icons__svg--color');
			iconsColor.appendChild( iconCloneColor );
		}

		var iconCloneNoColorNumbers;
		for ( iconCloneNoColorNumbers = 1; iconCloneNoColorNumbers <= starsNoColor; iconCloneNoColorNumbers++) {

			iconCloneNoColor = iconOriginal.cloneNode(true);
			iconCloneNoColor.classList.add('icons__svg--nocolor');
			iconsNoColor.appendChild( iconCloneNoColor );
		}

		singleRatingElement.innerHTML = '';
		singleRatingElement.appendChild( iconsColor );
		singleRatingElement.appendChild( iconsNoColor );
	}
})();