function ChangeInputValueMore( e, inputId ) {
  var buttonMore = document.getElementById( e.target.id );
  var input      = document.getElementById( inputId );

  if ( input && buttonMore ) {
    var inputValue;

    inputValue = input.getAttribute("value");		
    inputValue = inputValue*1 + 1;
    input.setAttribute( "value", inputValue );
  };
};




function ChangeInputValueLess( e, inputId ) {
  var buttonLess = document.getElementById( e.target.id );
  var input      = document.getElementById( inputId );

  if ( input && buttonLess ) {
    var inputValue;

    inputValue = input.getAttribute("value");
    
    if ( inputValue >= 2 ) {
      inputValue = inputValue*1 - 1;
      input.setAttribute( "value", inputValue );
    }

    // setValueOuterInput( inputValue );
  };
};





function setValueOuterInput( inputValue ) {
  var outerInput = document.getElementById( e.target.id );
};