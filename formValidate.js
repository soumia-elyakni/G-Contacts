//Session fermée


const passInput = document.getElementById('password');
const conpasswordInput = document.getElementById('conpassword');
const nameInput = document.getElementById('username');
const signUpform = document.getElementById('signupform');
const loginform = document.getElementById('loginform');
const messageName = document.getElementById('messagename');
const messagePass = document.getElementById('messagepassword');
const messageConPass = document.getElementById('messageconfpass');

//function validation of LOGIN page
if(loginform) {

    loginform.addEventListener('submit', (e) => {
        if (nameInput.value == "") {
            e.preventDefault()
            messageName.textContent = "Ce Champ est obligatoire";
            nameInput.style.borderColor = "red";
        } else {
            messageName.textContent = "";
            nameInput.style.borderColor = "green";
        }
        if (passInput.value == "") {
            e.preventDefault()
            messagePass.textContent = "Ce Champ est obligatoire";
            passInput.style.borderColor = "red";
    
        } else {
            messagePass.textContent = "";
            passInput.style.borderColor = "green";
        }
    })
}


//function validation of Registration page

if(signUpform) {

    signUpform.addEventListener('submit', (e) => {
    
        if (nameInput.value == "") {
            e.preventDefault()
            messageName.textContent = "Ce Champ est obligatoire";
            nameInput.style.borderColor = "red"; 
        } else if (!/^[a-z0-9]{3,}$/i.test(nameInput.value)) {
            e.preventDefault()
            messageName.textContent = "Le nom doit comporter au moins 3 caractères et être alphanumérique";
            nameInput.style.borderColor = "red"; 
        } else {
            messageName.textContent = "";
            nameInput.style.borderColor = "green";
        }
       
        if (passInput.value == "") {
            e.preventDefault()
            messagePass.textContent = "Ce Champ est obligatoire";
            passInput.style.borderColor = "red";
    
        } else if (passInput.value.length < 6 || passInput.value.length > 20 ) {
            e.preventDefault()
            messagePass.textContent = "Le mot de passe doit être entre 6 et 20 caractères";
            passInput.style.borderColor = "red";
    
        } else {
            messagePass.textContent = "";
            passInput.style.borderColor = "green";
        }
        if(conpasswordInput.value == ""){
            e.preventDefault()
            messageConPass.textContent = "Ce Champ est obligatoire";
            conpasswordInput.style.borderColor = "red";
        } else if (conpasswordInput.value != passInput.value){
            e.preventDefault()
            messageConPass.textContent = "Les mots de passe ne sont pas identiques ";
            passInput.style.borderColor = "red";
            conpasswordInput.style.borderColor = "red";
        } else {
            messagePass.textContent = "";
            conpasswordInput.style.borderColor = "green"; 
        }
    })
}