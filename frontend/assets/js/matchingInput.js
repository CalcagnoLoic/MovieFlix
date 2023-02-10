let form = document.getElementById("form");
let email = document.getElementById("email");
let password = document.getElementById("password");
let password2 = document.getElementById("password2");
let address = document.getElementById("address");
let lastname = document.getElementById("nom");
let firstname = document.getElementById("prenom");

form.addEventListener("submit", e => {
    e.preventDefault();

    validateInputs();
})

const setError = (elem, message) => {
    const inputTag = elem.parentElement;
    const displayError = inputTag.querySelector(".error");

    displayError.innerText = message;
    inputTag.classList.add('error');
    inputTag.classList.remove('success');
}

const setSucces = (elem) => {
    const inputTag = elem.parentElement;
    const displayError = inputTag.querySelector(".error");

    displayError.innerText = "";
    inputTag.classList.remove('error');
    inputTag.classList.add('success');
}

const isValidEmail = email => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

const validateInputs = () => {
    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();
    const passwordVerif = password2.value.trim();
    const addressValue = address.value.trim();
    const firstnameValue = firstname.value.trim();
    const lastnameValue = lastname.value.trim();

    if (emailValue === "") {
        setError(email, "L'email est requis!")
    } else if (!isValidEmail(emailValue)) {
        setError(email, "Votre adresse mail n'est pas valide!");
    } else {
        setSucces(email)
    }

    if (passwordValue === "") {
        setError(password, "Le mot de passe est requis!");
    } else if (passwordValue.length < 8) {
        setError(password, "Le mot de passe doit comporter plus de 8 caractères!");
    } else {
        setSucces(password)
    }

    if (passwordVerif === "") {
        setError(password2, "La vérification du mot de passe est obligatoire!");
    } else if (passwordVerif !== passwordValue) {
        setError(password2, "Les mots de passe ne correspondent pas!");
    } else {
        setSucces(password2);
    }

    if(addressValue === "") {
        setError(address, "L'adresse est requise!");
    } else {
        setSucces(address);
    }

    if (firstnameValue === "" | lastnameValue === "") {
        setError(firstname, "Le nom et/ou le prénom est/sont manquant(s)!");
    } else {
        setSucces(firstname);
    }
}