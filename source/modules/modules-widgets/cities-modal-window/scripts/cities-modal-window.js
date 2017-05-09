(function () {
	var modal = document.getElementById('modal-windows__city-list');

// Get the button that opens the modal
	var btn = document.getElementById("cities__modal-window--button");

// Get the <span> element that closes the modal
	var span = document.getElementById("cities__modal-window--close-button");

// When the user clicks the button, open the modal
	btn.onclick = function() {
		// modal.style.display = "block";
	}

// When the user clicks on <span> (x), close the modal
	span.onclick = function() {
		// modal.style.display = "none";
	}

// When the user clicks anywhere outside of the modal, close it
	/*
	window.onclick = function(event) {
		console.log( event.target );
		console.log( modal );

		if (event.target == modal) {
			modal.style.display = "none";
		}
	};
	 */

	//todo: добавить дерево городов
	var cities = {
		'moscow' : {
			'cityName' : 'Москва'
		},
		'spb' : {
			'cityName' : 'Санкт-Петербург'
		},
		'ekaterinburg' : {
			'cityName' : 'Екатеринбург'
		},
		'n-novgorod' : {
			'cityName' : 'Нижний Новгород'
		},
		'krasnodar' : {
			'cityName' : 'Краснодар'
		},
		'tumen' : {
			'cityName' : 'Тюмень'
		},
		'omsk' : {
			'cityName' : 'Омск'
		},
		'nsk' : {
			'cityName' : 'Новосибирск'
		},
		'krasnoyarsk' : {
			'cityName' : ' Красноярск'
		},
		'vladivostoc' : {
			'cityName' : 'Владивосток'
		}
	};

})();