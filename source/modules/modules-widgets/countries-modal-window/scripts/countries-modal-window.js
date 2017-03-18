
(function () {
	var modalWindowId, buttonForOpenWindowId, buttonForCloseWindowId;
	
	var modal = document.getElementById( modalWindowId );

// Get the button that opens the modal
	var btn = document.getElementById( buttonForOpenWindowId );

// Get the <span> element that closes the modal
	var span = document.getElementById( buttonForCloseWindowId );

	if ( btn && span ) {
	// When the user clicks the button, open the modal
		btn.onclick = function() {
			modal.style.display = "block";
		}

	// When the user clicks on <span> (x), close the modal
		span.onclick = function() {
			modal.style.display = "none";
		}
	}
// When the user clicks anywhere outside of the modal, close it
	/*
	window.onclick = function(event) {
		// console.log( 'countries - ' + event.target );
		// console.log( 'countries - ' + modal );
//todo: onclick для cities перезаписывается, поэтому не закрываются dropdowsn

		if (event.target == modal) {
			modal.style.display = "none";
		}
	};
	*/
})();