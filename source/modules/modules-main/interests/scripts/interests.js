/*Set height for tabs-wrapper block*/
(function () {
  var i, tabcontent, tabcontentHeights = [], tabsWrapper;


  tabcontent  = document.getElementsByClassName("tabcontent");
  tabsWrapper = document.getElementById("tabs-wrapper-id");


  for (i = 0; i < tabcontent.length; i++) {
    tabcontentHeights[i] = tabcontent[i].clientHeight;
  }

  tabsWrapper.style.height = getMaxOfArray(tabcontentHeights) + 'px';
})();




function openTab(evt, tabId) {
  // Declare all variables
  var i, tabcontent, tablinks, marker, markers;


  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.top = "-10000px";
		tabcontent[i].className = tabcontent[i].className.replace(" tabcontent--active", "");
  }


  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tabs__titles");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace("  active", "");
  }


  //Find markers elements and remove the class "fadein"
  /*
  markers = document.getElementsByClassName("tabs__titles-marker--bottom");
  for (i = 0; i < markers.length; i++) {
    markers[i].className = markers[i].className.replace("  fadein", "");
  }
  */
  //Find marker element
  // marker = find( evt.target.childNodes, 'tabs__titles-marker--bottom' );

  // console.log ( evt.target.childNodes[marker] );

  // evt.target.childNodes[marker].className += "  fadein";



  // Show the current tab, and add an "active" class to the link that opened the tab
  document.getElementById(tabId).style.top = "0px";
	document.getElementById(tabId).className += "  tabcontent--active";
  evt.currentTarget.className += "  active";
}




function getMaxOfArray(arr) {
  return Math.max.apply(null, arr);
}

/*
function getArray(arr) {
  return [].apply(null, arr);
}
*/

function find(array, value) {

  for (var i = 0; i < array.length; i++) {
    if (array[i].className == value) return i;
  }

  return -1;
}