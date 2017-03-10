/* When the user clicks on the button,
 toggle between hiding and showing the dropdown content */
function openDropdownMenu( event, menuId, menuClass ) {
	openDropdownMenu.EVENT = event;
	openDropdownMenu.MENU_ID = menuId;
	openDropdownMenu.MENU_CLASS = menuClass;

	//Закрыть все открытые dropdown меню
  console.log('start closeDropdownMenu... from openDropdownMenu');

	// если сделан клик по кнопке под которой открыто выпадающее меню( присвоен класс show ) то не выполнять closeDropdownMenu
	//иначе если сделан клик по кнопке под которой не открыто меню то выполнить closeDropdownMenu
	if ( !document.getElementById( openDropdownMenu.MENU_ID ).classList.contains('show')) {
		closeDropdownMenu();
	}

  document.getElementById( menuId ).classList.toggle("show");

}




// Close the dropdown if the user clicks outside of it
window.onclick = function( event ) {
  //todo: переделать через Методы contains или compareDocumentPosition
	if ( !openDropdownMenu.EVENT && !openDropdownMenu.MENU_ID ) {
		return false;
	}
  if ( !event.target.matches( '#' + openDropdownMenu.EVENT.target.id ) && ( event.target.offsetParent.id !== openDropdownMenu.MENU_ID ) ) {

		console.log('start closeDropdownMenu... from window.onclick');
    closeDropdownMenu();

  }
}



function closeDropdownMenu () {
	if ( !openDropdownMenu.MENU_CLASS ) {
		return false;
	}

  var dropdowns = document.getElementsByClassName( openDropdownMenu.MENU_CLASS );

  console.log( openDropdownMenu.MENU_ID );

  var i;
  for (i = 0; i < dropdowns.length; i++) {
    var openDropdown = dropdowns[i];
    if (openDropdown.classList.contains('show')) {
      openDropdown.classList.remove('show');
    }
  }
}