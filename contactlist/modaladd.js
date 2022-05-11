// let modal = document.getElementById('modaladd');
// var span = document.getElementsByClassName("close")[0];
// modal.addEventListener("click" , function(){
// document.querySelector('.model').classList.toggle('hidden')
// })
// span.onclick = function() {
// document.querySelector('.model').classList.add("hidden")
//   }

//  form validation 

  // Call by Id  
const addForm      = document.getElementById('addform');
const editForm     = document.getElementById('editForm');
const contactName  = document.getElementById('name');
const messageName  = document.getElementById('messagename');
const contactEmail = document.getElementById('email');
const messageEmail = document.getElementById('messagemail');
const contactPhone = document.getElementById('phone');
const messagePhone = document.getElementById('messagephone');
const contactAdress = document.getElementById('adress');
const messageAdress = document.getElementById('messageadress');

  // add

  if(addForm) {

    addForm.addEventListener('submit', (e) => {
        if (contactName.value == "") {
            e.preventDefault()
            messageName.textContent = "Ce Champ est Obligatoire";
            contactName.style.borderColor = "red";
        } else if (contactName.value.length < 2) {
          messageName.textContent = "Le nom doit comporter au moins 2 caractères";
          contactName.style.borderColor = "red";
        } else {
            messageName.textContent = "";
            contactName.style.borderColor = "green";
        }

        if (contactEmail.value == "") {
            e.preventDefault()
            messageEmail.textContent = "Ce Champ est obligatoire";
            contactEmail.style.borderColor = "red";
        } else if (!/[^@ \t\r\n]+@[^@ \t\r\n]+.[^@ \t\r\n]+/.test(contactEmail.value)){
            e.preventDefault()
            messageEmail.textContent = "E-mail non validé";
            contactEmail.style.borderColor = "red";
        } else {
            messageEmail.textContent = "";
            contactEmail.style.borderColor = "green";
        }

        if (!/^[+]?[(]?[0-9]{3}[)]?[-\s.]?[0-9]{3}[-\s.]?[0-9]{4,6}$/.test(contactPhone.value)){
            e.preventDefault()
            messagePhone.textContent = "Numero de téléphone non validé";
            contactPhone.style.borderColor = "red";
        } else {
            messagePhone.textContent = "";
            contactPhone.style.borderColor = "green";
        }

        if(contactAdress.value.length > 255 ){
            e.preventDefault()
            messageAdress.textContent = "Ne doit pas dépasser 255 caractères";
            contactAdress.style.borderColor = "red";          
        } else {
            messageAdress.textContent = "";
            contactAdress.style.borderColor = "green"; 
        }
    })
}  

  // edit

  if(editForm) {

    editForm.addEventListener('submit', (e) => {
        if (contactName.value == "") {
            e.preventDefault()
            messageName.textContent = "Ce Champ est Obligatoire";
            contactName.style.borderColor = "red";
        } else if (contactName.value.length < 2) {
          messageName.textContent = "Le nom doit comporter au moins 2 caractères";
          contactName.style.borderColor = "red";
        } else {
            messageName.textContent = "";
            contactName.style.borderColor = "green";
        }

        if (contactEmail.value == "") {
            e.preventDefault()
            messageEmail.textContent = "Ce Champ est obligatoire";
            contactEmail.style.borderColor = "red";
        } else if (!/[^@ \t\r\n]+@[^@ \t\r\n]+.[^@ \t\r\n]+/.test(contactEmail.value)){
            e.preventDefault()
            messageEmail.textContent = "E-mail non validé";
            contactEmail.style.borderColor = "red";
        } else {
            messageEmail.textContent = "";
            contactEmail.style.borderColor = "green";
        }

        if (!/^[+]?[(]?[0-9]{3}[)]?[-\s.]?[0-9]{3}[-\s.]?[0-9]{4,6}$/.test(contactPhone.value)){
            e.preventDefault()
            messagePhone.textContent = "Numero de téléphone non validé";
            contactPhone.style.borderColor = "red";
        } else {
            messagePhone.textContent = "";
            contactPhone.style.borderColor = "green";
        }

        if(contactAdress.value.length > 255 ){
            e.preventDefault()
            messageAdress.textContent = "Ne doit pas dépasser 255 caractères";
            contactAdress.style.borderColor = "red";          
        } else {
            messageAdress.textContent = "";
            contactAdress.style.borderColor = "green"; 
        }
    })
}  




