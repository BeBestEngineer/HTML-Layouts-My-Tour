//todo сделать модули для всех компонентов
(function () {
	var ratings = document.getElementsByClassName('rating');
	var iconOriginal;
	var iconCloneColor, iconCloneNoColor;

	var i;
	for (i = 0; i < ratings.length; i++) {
		var singleRatingElement = ratings[i];

		// console.log ( singleRatingElement );

		if ( singleRatingElement.classList.contains('rating--5-stars') ) {
			// console.log ( singleRatingElement.firstElementChild );

			iconOriginal = singleRatingElement.firstElementChild;

			// console.log(iconOriginal);

			iconCloneColor = iconOriginal.cloneNode(true);
			iconCloneColor.classList.add('icons__svg--color');

			iconCloneNoColor = iconOriginal.cloneNode(true);
			iconCloneNoColor.classList.add('icons__svg--nocolor');

			// console.log(iconCloneColor);
			// console.log(iconCloneNoColor);

			// singleRatingElement.innerHTML = '';

			var j;
			for ( j = 1; j <= 4; j++) {
				console.log( singleRatingElement.appendChild( iconCloneColor ) );
			}
		}
	}
})();