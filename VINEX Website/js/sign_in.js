newFunction();

function newFunction() {
    const name = document.getElementById("name");
    const surname = document.getElementById("surname");
    const email = document.getElementById("email");
    const password = document.getElementById("password");
    const form = document.getElementById("form");
    const error = document.getElementById("error");
    form.addEventListener('submit', (e) => {
        
        let mesages = [];

        if (name.value === '' || name.value == null) {
            mesages.push('name is required');

        }

        if(password.value === '' || password.value == null || password.value < 6){
            mesages.push('incorret password');
        }
        
        if(mesages.length > 0){
            e.preventDefault();
            error.innerText = mesages.join(', ');
        }
    });
}
