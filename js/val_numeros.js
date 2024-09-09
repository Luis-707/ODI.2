function numeros(event){
  var numeros = event.keyCode;
  //alert(numeros);
  if((numeros > 47 && numeros < 58) || (numeros === 8)){
    return true;
  }else{
    return false;
  }
}