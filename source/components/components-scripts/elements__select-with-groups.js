/*
Исходные данные:
	1. Две кнопки: "Добавить регион" и "Добавить страну"
	2. Поле для визуализации результатов выбора

	1. При нажатии на кнопку  "Добавить регион" открывается модальное окно и выбитрается регион
	2. При нажатии на кнопку  "Добавить страну" открывается модальное окно и выбитрается страна с учётом региона
*/

(function () {

	// function Log() {
	// 	console.log('module log');
	// }
	//
	// Log();

	var addRegionButton = document.getElementById( 'form__add-region-button-id' );




})();




function addRegion( event, labelTextId, pillWrapperId, pillTextId, pillButtonId, dropdownButtonId, placeholderId, FirstLevelDependentButtonId, countriesPillsContainerId ) {

	addCheckedElement( event, labelTextId, pillWrapperId, pillTextId, pillButtonId, dropdownButtonId, placeholderId, countriesPillsContainerId );

	//Создаём новый id для кнопки "Добавления страны" для соответствующего региона
	var FirstLevelDependentButtonNewId = FirstLevelDependentButtonId.slice(0, 11) + labelTextId.slice(8, -15) + FirstLevelDependentButtonId.slice(-21);

	// перезаписываем id добавленного региона на id региона который добавляем
	document.querySelector( '[data-first-level-dependent-button-id=' + FirstLevelDependentButtonId + ']' ).id = FirstLevelDependentButtonNewId;

}




function removeRegion ( event, placeholderId, pillWrapperClass ) {

	removeCheckedElement( event, placeholderId, pillWrapperClass );


}




function addCountry( event ) {

	openModal( event );
}