'use strict'; // Mode strict du javaScript

const formLogin = document.getElementById('form_login');


const email = document.getElementById('email');
const password = document.getElementById('password');
const errorEmail = document.getElementById('errorEmail');
const errorPassword = document.getElementById('errorPassword');

const regexEmail = new RegExp(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/g);


/*************************************************************************************************/
/* ************************************** CODE PRINCIPAL *************************************** */
/*************************************************************************************************/
window.addEventListener('DOMContentLoaded', function () {

    formLogin.addEventListener('submit', function (e) {

        if(email.value.trim() !== '' && regexEmail.test(email.value)) {
            errorEmail.innerHTML = '';
        } else {
            errorEmail.innerHTML = ' Veuillez entrez une adresse mail valide';
            errorEmail.style.color = 'red';
            e.preventDefault();
        }

        if(password.value.trim() == '') {
            errorPassword.innerHTML = 'Veuillez écrire votre mot de passe'
            errorPassword.style.color = 'red';
            e.preventDefault();
        } else {
            errorPassword.innerHTML = '';
        }
    });
})