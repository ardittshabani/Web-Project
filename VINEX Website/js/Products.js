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
}

function bolts() {
  var x=  document.getElementsByClassName("con-prod");
  for (let  i = 0;  i < x.length;  i++) {
      document.getElementsByClassName("con-prod")[i].style.display = 'none';   
  }
  document.getElementById("bolts").style.display = 'flex';
}

function nuts(){
  var x=  document.getElementsByClassName("con-prod");
  for (let  i = 0;  i < x.length;  i++) {
      document.getElementsByClassName("con-prod")[i].style.display = 'none';   
  }
  document.getElementById("nuts").style.display = 'flex';
}