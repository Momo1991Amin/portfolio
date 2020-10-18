'use strict'; // Mode strict du javaScript

// Input field
const form = document.getElementById('form');

const firstName = document.getElementById('firstName');
const name = document.getElementById('name');
const email = document.getElementById('email');
const message = document.getElementById('message');
const errorName = document.getElementById('errorName');
const errorFirstName = document.getElementById('errorFirstName');
const errorEmail = document.getElementById('errorEmail');
const errorMsg = document.getElementById('errorMsg');
const regexEmail = new RegExp(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/g);

/*************************************************************************************************/
/* ************************************** CODE PRINCIPAL *************************************** */
/*************************************************************************************************/
window.addEventListener('DOMContentLoaded', function () {

    form.addEventListener('submit', function (e) {

        if(firstName.value.trim() == '') {
            errorFirstName.innerHTML = 'Veuillez entrez votre prénom';
            errorFirstName.style.color = 'red';
            e.preventDefault();
        } else {
            errorFirstName.innerHTML = '';
        }

        if(name.value.trim() == '') {
            errorName.innerHTML = 'Veuillez entrez votre nom';
            errorName.style.color = 'red';
            e.preventDefault();
        } else {
            errorName.innerHTML = '';
        }

        if(email.value.trim() !== '' && regexEmail.test(email.value)) {
            errorEmail.innerHTML = '';
        } else {
            errorEmail.innerHTML = ' Veuillez entrez une adresse email valide';
            errorEmail.style.color = 'red';
            e.preventDefault();
        }

        if(message.value.trim() == '') {
            errorMsg.innerHTML = 'Veuillez écrire votre message'
            errorMsg.style.color = 'red';
            e.preventDefault();
        } else {
            errorMsg.innerHTML = '';
        }
    });
})