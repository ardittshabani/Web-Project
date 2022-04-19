function plate() {
  var x=  document.getElementsByClassName("con-prod");
  for (let  i = 0;  i < x.length;  i++) {
    document.getElementsByClassName("con-prod")[i].style.display = 'none';   
  }
  document.getElementById("plate").style.display = 'flex';
}

function coil() {
    var x=  document.getElementsByClassName("con-prod");
    for (let  i = 0;  i < x.length;  i++) {
        document.getElementsByClassName("con-prod")[i].style.display = 'none';   
    }
    document.getElementById("coil").style.display = 'flex';
   // document.getElementsByClassName("product").style.display = 'none';
    //document.getElementsByClassName("coil").style.display = 'block';  
}
