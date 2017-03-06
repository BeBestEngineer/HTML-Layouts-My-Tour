(function () {
  var i, tabcontent, tabcontentHeights = [], tabsWrapper;


  tabcontent  = document.getElementsByClassName("tabcontent");
  tabsWrapper = document.getElementById("tabs-wrapper-id");


  for (i = 0; i < tabcontent.length; i++) {
    tabcontentHeights[i] = tabcontent[i].clientHeight;
  }


  function getMaxOfArray(arr) {
    return Math.max.apply(null, arr);
  }
  tabsWrapper.style.height = getMaxOfArray(tabcontentHeights) + 'px';
})();




function openCity(evt, tabId) {
  // Declare all variables
  var i, tabcontent, tablinks;


  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.top = "-10000px";
		tabcontent[i].className = tabcontent[i].className.replace(" tabcontent--active", "");
  }


  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace("  tablinks--active", "");
  }


  // Show the current tab, and add an "active" class to the link that opened the tab
  document.getElementById(tabId).style.top = "0px";
	document.getElementById(tabId).className += "  tabcontent--active";
  evt.currentTarget.className += "  tablinks--active";
}