/* When the user clicks on the button,
 toggle between hiding and showing the dropdown content */
function openDropdownMenu( event, menuId ) {
	document.getElementById( menuId ).classList.toggle("show");

	openDropdownMenu.EVENT = event;
	openDropdownMenu.MENUID = menuId;
}







// Close the dropdown if the user clicks outside of it
window.onclick = function( event ) {




	var dropdowns = document.getElementById( openDropdownMenu.MENUID );

	if (!event.target.matches(openDropdownMenu.EVENT.target.id ) && ( dropdowns.id !== event.target.offsetParent.id ) ) {
		var i;
		for (i = 0; i < dropdowns.length; i++) {
			var openDropdown = dropdowns[i];
			if (openDropdown.classList.contains('show')) {
				openDropdown.classList.remove('show');
			}
		}

	}
};







function scope( event, menuId ) {
	return [ event, menuId ]
}