function ChangeInputValueMore( e, inputId, outputId, textId ) {
  var buttonMore = document.getElementById( e.target.id );
  var input      = document.getElementById( inputId );

  if ( input && buttonMore ) {
    var inputValue = input.getAttribute("value");

    inputValue = inputValue*1 + 1;
    input.setAttribute( "value", inputValue );

    setValuePassengers( inputId, inputValue, outputId, textId );
  };
};




function ChangeInputValueLess( e, inputId, outputId, textId ) {
  var buttonLess = document.getElementById( e.target.id );
  var input      = document.getElementById( inputId );

  if ( input && buttonLess ) {
    var inputValue = input.getAttribute("value");

    if ( inputValue > 0 ) {
      // console.log( inputValue );
      inputValue = inputValue*1 - 1;
      input.setAttribute( "value", inputValue );
    }
      inputValue = inputValue*1;

    setValuePassengers( inputId, inputValue, outputId, textId );
  };
};





function setValuePassengers( inputId, inputValue, outputId, textId ) {
  //Поле в которое будет вставляться числовое значение
  var output = document.getElementById( outputId );
  //Поле в которое будет вставляться строка содержащая текст для родителей или детей
  var text   = document.getElementById( textId );

  output.setAttribute( "value", inputValue );

  text.innerHTML = '';

  switch ( inputId ) {
    case 'widget__passengers-range-parents--input':
      text.innerHTML = setTextPassengersParents( inputValue );
      break;
    case 'widget__passengers-range-childs--input':
      text.innerHTML = setTextPassengersChilds( inputValue );
      break;
  }

}

function setTextPassengersParents ( inputValue ) {
  switch ( inputValue ) {
    case 1:
      return 'взрослый';
      break;
    default:
      return 'взрослых';
      break;
  }
}

function setTextPassengersChilds ( inputValue ) {
  switch ( inputValue ) {
    case 1:
      return 'ребёнок';
      break;
    default:
      return 'детей';
      break;
  }
}