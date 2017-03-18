
(function () {
	var modal = document.getElementById('modal-windows__regions-list');

// Get the button that opens the modal
	var btn = document.getElementById("regions__modal-window--button");

// Get the <span> element that closes the modal
	var span = document.getElementById("regions__modal-window--close-button");

// When the user clicks the button, open the modal
	btn.onclick = function() {
		modal.style.display = "block";
	}

// When the user clicks on <span> (x), close the modal
	span.onclick = function() {
		modal.style.display = "none";
	}

// When the user clicks anywhere outside of the modal, close it
	/*
	window.onclick = function(event) {
		// console.log( 'Regions - ' + event.target );
		// console.log( 'Regions - ' + modal );
//todo: onclick для cities перезаписывается???

		if (event.target == modal) {
			modal.style.display = "none";
		}
	};
	*/
})();


//todo: добавить дерево регионов и стран
var RegionsAndCountries = {
	'australia-and-oceania' : {
		'regionName' : 'Австралия и Океания',
		'regionCountries' : {
			'australia' : 'Австралия',
			'fiji' : 'Фиджи',
			'hawaii' : 'Гавайи',
			'new-zealand' : 'Новая Зеландия'
		}
	},
	'asia' : {
		'regionName' : 'Азия',
		'regionCountries' : {
			'izrail' : 'Изра́иль',
			'oae' : 'Объединённые Ара́бские Эмира́ты',
			's-aravia' : 'Сау́довская Ара́вия',
			'turkey' : 'Турция'
		}
	},
	'america' : {
		'regionName' : 'Америка',
		'regionCountries' : {
			'amerika' : 'Америка',
			'dominic-republic' : 'Доминиканская Республика',
			'canada' : 'Канада',
			'cuba' : 'Куба',
			// 'brazil' : 'Бразилия',
			// 'mexica' : 'Мексика'
		}
	},
	'africa' : {
		'regionName' : 'Африка',
		'regionCountries' : {
			'aljir' : 'Алжир',
			'egipet' : 'Еги́пет',
			'madagaskar' : 'Мадагаскар'
		}
	},
	'europe' : {
		'regionName' : 'Европа',
		'regionCountries' : {
			'great-britan' : 'Великобритания',
			'ireland' : 'Ирландия',
			'northland' : 'Норвегия ',
			'finland' : 'Финляндия '
		}
	},
	'euroasia' : {
		'regionName' : 'Евразия',
		'regionCountries' : {
			'france' : 'Франция ',
			'germany' : 'Германия ',
			'china' : 'КНР ',
			'japan' : ' Япония ',
			'singapur' : ' Сингапур ',
		}
	}
};