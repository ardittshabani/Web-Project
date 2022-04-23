function sendMessage(){
    var email=document.getElementById('email');
    var password=documnet.getElementById('password');
    var message=document.getElementById('message')

    if(email=='email' && password=='password'&& message=='message'){
         window.open('http://localhost/Web-Project/VINEX%20Website/index.php');
    }
   else{
       alert("Fill in the boxes");
   }
}