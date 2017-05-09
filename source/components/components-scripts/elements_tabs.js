/*Set height for tabs-wrapper block*/
(function () {

	// recalculationTabHeight();

})();




function openTab(evt, tabId) {
	// Declare all variables
	var i, tabcontent, tablinks;


	// Get all elements with class="tabcontent" and hide them
	tabcontent = document.getElementsByClassName("tabs__content");
	for (i = 0; i < tabcontent.length; i++) {
		tabcontent[i].style.top = "-10000px";
		//todo переделать через classList.contains
		tabcontent[i].className = tabcontent[i].className.replace("  active", "");
	}


	// Get all elements with class="tablinks" and remove the class "active"
	tablinks = document.getElementsByClassName("tabs__title");
	for (i = 0; i < tablinks.length; i++) {
		//todo переделать через classList.contains
		tablinks[i].className = tablinks[i].className.replace("  active", "");
	}


	// Show the current tab, and add an "active" class to the link that opened the tab
	document.getElementById(tabId).style.top = "0px";
	//todo переделать через classList.contains
	document.getElementById(tabId).className += "  active";
	//todo переделать через classList.contains
	evt.currentTarget.className += "  active";
}