/* When the user clicks on the button,
 toggle between hiding and showing the dropdown content */
function openDropdownMenu( event, menuId, menuClass ) {
	openDropdownMenu.EVENT = event;
	openDropdownMenu.MENU_ID = menuId;
	openDropdownMenu.MENU_CLASS = menuClass;

	if ( !document.getElementById( openDropdownMenu.MENU_ID ).classList.contains('show')) {
		closeDropdownMenu();
	}

  document.getElementById( menuId ).classList.toggle("show");

}




// Close the dropdown if the user clicks outside of it

window.onclick = function( event ) {
	if ( !openDropdownMenu.EVENT && !openDropdownMenu.MENU_ID && event.target.type !== 'submit' ) {
		return false;
	}

  if ( !event.target.matches( '#' + openDropdownMenu.EVENT.target.id ) && !document.getElementById( openDropdownMenu.MENU_ID ).contains( event.target ) ) {

    closeDropdownMenu();

  }
}



function closeDropdownMenu () {
	if ( !openDropdownMenu.MENU_CLASS ) {
		return false;
	}

  var dropdowns = document.getElementsByClassName( openDropdownMenu.MENU_CLASS );

  var i;
  for (i = 0; i < dropdowns.length; i++) {
    var openDropdown = dropdowns[i];
    if (openDropdown.classList.contains('show')) {
      openDropdown.classList.remove('show');
    }
  }
}