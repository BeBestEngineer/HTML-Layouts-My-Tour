function getMaxOfArray(arr) {
  return Math.max.apply(null, arr);
}


//todo сделать модули для всех компонентов
(function () {


})();







function recalculationTabHeight() {
  var tabcontent  = document.getElementsByClassName("tabs__content");
  var tabsWrapper = document.getElementById("tabs-wrapper-id");


  var i, tabcontentHeights = [];
  for (i = 0; i < tabcontent.length; i++) {
    tabcontentHeights[i] = tabcontent[i].offsetHeight;
  }

  tabsWrapper.style.height = getMaxOfArray(tabcontentHeights) + 'px';
}