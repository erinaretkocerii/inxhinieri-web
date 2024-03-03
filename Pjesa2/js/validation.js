const name =document.getElementById("name");
const username =document.getElementById("username");
const email =document.getElementById("email");
const password =document.getElementById("password");


name.addEventListener("blur", validateName);
username.addEventListener("blur", validateUsername);
email.addEventListener("blur", validateEmail);
password.addEventListener("blur", validatePassword);

function validateName(){
    const regexName = /^[a-zA-Z]{2,20}( )[a-zA-Z]{2,20}(( )[a-zA-Z]{2,20})?$/;

    if(!regexName.test(name.value)){
        name.classList.add("notValid");
        name.classList.remove("Valid");
    }
    else{
        name.classList.add("Valid");
        name.classList.remove("notValid");
    }
    
}
function validateUsername(){
    const regexUsername = /^[a-zA-Z]{4,20}$/;

    if(!regexUsername.test(username.value)){
        username.classList.add("notValid");
        username.classList.remove("Valid");
    }
    else{
        username.classList.add("Valid");
        username.classList.remove("notValid");
    }
    
}

function validateEmail(){
    const regexEmail = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;

    if(!regexEmail.test(email.value)){
        email.classList.add("notValid");
        email.classList.remove("Valid");
    }
    else{
        email.classList.add("Valid");
        email.classList.remove("notValid");
    }
    
}
function validatePassword(){
    const regexPassword = /^([a-zA-Z0-9]){8,999}$/;

    if(!regexPassword.test(password.value)){
        password.classList.add("notValid");
        password.classList.remove("Valid");
    }
    else{
        password.classList.add("Valid");
        password.classList.remove("notValid");
    }
    
}


document.querySelector('form').addEventListener('submit', (event) =>{
    event.preventDefault();

    validateForm();
})

function validateForm() {
    const input = document.querySelectorAll('form input');
    console.log(input);

    if(
        email.classList.contains("Valid")&&
        password.classList.contains("Valid")
    ){
        document.querySelector("form").submit;
    }else{
        alert("Fill all fields")
    }
}


