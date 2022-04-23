function validate(){
    var name=document.getElementById('name').value;
    var surname=document.getElementById('surname').value;
    var email=document.getElementById('email').value;
    var password=document.getElementById('password').value;
    
    if(name=="name" && surname=="surname" && email=="email" && password=="password"){
        alert('Sign in was successful');
        window.open("http://localhost/ProjektiWEB/Web-Project/VINEX%20Website/index.php");
        return false;
    }else{
        alert('Sign in has failed');
    }
}
