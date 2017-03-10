/* When the user clicks on the button,
 toggle between hiding and showing the dropdown content */
function openDropdownMenu( event, menuId, menuClass ) {
	document.getElementById( menuId ).classList.toggle("show");

	openDropdownMenu.EVENT = event;
	openDropdownMenu.MENU_ID = menuId;
	openDropdownMenu.MENU_CLASS = menuClass;
}




// Close the dropdown if the user clicks outside of it
window.onclick = function( event ) {
	if ( !event.target.matches( '#' + openDropdownMenu.EVENT.target.id ) && ( event.target.offsetParent.id !== openDropdownMenu.MENU_ID ) ) {

		var dropdowns = document.getElementsByClassName( openDropdownMenu.MENU_CLASS );
		var i;
		for (i = 0; i < dropdowns.length; i++) {
			var openDropdown = dropdowns[i];
			if (openDropdown.classList.contains('show')) {
				openDropdown.classList.remove('show');
			}
		}
	}
}



