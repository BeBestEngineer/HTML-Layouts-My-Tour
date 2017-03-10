//todo сделать модули для всех компонентов
(function () {
	var ratings = document.getElementsByClassName('rating');
	var iconOriginal;
	var iconCloneColor, iconCloneNoColor;
	var iconsColor 	 = document.createDocumentFragment(),
			iconsNoColor = document.createDocumentFragment();

	var i;
	for (i = 0; i < ratings.length; i++) {
		var singleRatingElement = ratings[i];

		if ( singleRatingElement.classList.contains('rating--5-stars') ) {
			iconOriginal = singleRatingElement.firstElementChild;

			var iconCloneColorNumbers;
			for ( iconCloneColorNumbers = 1; iconCloneColorNumbers <= 4; iconCloneColorNumbers++) {

				iconCloneColor = iconOriginal.cloneNode(true);
				iconCloneColor.classList.add('icons__svg--color');
				iconsColor.appendChild( iconCloneColor );
			}

			var iconCloneNoColorNumbers;
			for ( iconCloneNoColorNumbers = 1; iconCloneNoColorNumbers <= 1; iconCloneNoColorNumbers++) {

				iconCloneNoColor = iconOriginal.cloneNode(true);
				iconCloneNoColor.classList.add('icons__svg--nocolor');
				iconsNoColor.appendChild( iconCloneNoColor );
			}


			singleRatingElement.innerHTML = '';
			singleRatingElement.appendChild( iconsColor );
			singleRatingElement.appendChild( iconsNoColor );
		}
	}
})();