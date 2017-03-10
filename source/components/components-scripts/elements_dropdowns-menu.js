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
  // console.log( event.target );
  // console.log( openDropdownMenu.EVENT.target.id );
  // console.log( event.target.matches( '#' + openDropdownMenu.EVENT.target.id ) );
  // console.log( openDropdownMenu.MENU_CLASS );

	// не является элементом openDropdownMenu.MENU_CLASS
  if ( !event.target.matches( '#' + openDropdownMenu.EVENT.target.id ) && ( '' ) ) {

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



