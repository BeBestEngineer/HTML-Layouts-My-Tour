function addCheckedElement( event, labelTextId, pillWrapperId, pillTextId ) {

	var checkbox = document.getElementById( event.target.id );
	// console.log( checkbox );

	if ( checkbox.checked ) {
		//Запоинаем текст
		var labelText = document.getElementById( labelTextId );
		//Ищем пилюлю
		var pillWrapper 					   = document.getElementById( pillWrapperId );
		//Делаем клона
		var pillWrapperClone         = pillWrapper.cloneNode( true );
		pillWrapperClone.id =
		// console.log( pillWrapperClone.id.slice( 0, -3 ) + event.target.id.slice( 10, -9 ) + event.target.id.slice( 0, -2 )  );
		console.log( pillWrapperClone.id.slice( 0, -3 ));
		console.log( event.target.id.slice( 9, -9 ) );
		console.log( event.target.id.slice( -2 )  );
		//Вставляем клону текст
		var pillText 					   = document.getElementById( pillTextId );
		pillText.innerHTML 			 = labelText.innerHTML;
		//Показываем клона
		pillWrapperClone.classList.remove('hide');
		//Вставляем клона
		pillWrapper.parentNode.appendChild( pillWrapperClone );
		
		
		
	}

}




function removeCheckedElement() {
//todo: исправить названия js файлов по БЭМ

}