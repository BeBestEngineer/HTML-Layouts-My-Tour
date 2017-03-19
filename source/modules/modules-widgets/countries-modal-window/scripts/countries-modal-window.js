function openModal( event ) {
	console.log( event.target.id );

	var modal = document.getElementById( 'modal-windows__regions--' + event.target.id.slice( 11, -21 ) + '-list' );

	var span = document.getElementById( 'countries--' + event.target.id.slice( 11, -21 ) + '__modal-window-close-button' );


	modal.style.display = "block";

	span.onclick = function() {
		modal.style.display = "none";
	}
};


