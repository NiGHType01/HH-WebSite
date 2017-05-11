function liveRadio( tmp ) {
	var setPrice = document.getElementById( tmp ).value;
	document.getElementById( tmp.slice( 0, 5 ) + "pr" ).innerHTML=setPrice;
	totalPrice = totalPrice + parseInt( document.getElementById( tmp ).value );				
	document.getElementById( tmp.slice( 0, 5 ) + "hr" ).selected=true;
	document.getElementById( tmp.slice( 0, 5 ) + "hr" ).value=0;	
	document.getElementById( 'saveForm' ).value='Click to add to cart, total to be paid is &#163;' + totalPrice;
}

function liveSelect( tmp ) {
	document.getElementByID( tmp ).checked=true;
	document.getElementById( tmp.slice( 0, 5 ) + "pr" ).innerHTML='&#163;' + document.getElementById( tmp ).value;
}