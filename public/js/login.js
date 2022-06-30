//verifica che l'username non esista
function checkUsername(event) {
    const input = document.querySelector('.username input');

    if(!/^[a-zA-Z0-9_]{1,15}$/.test(input.value)) {
        input.parentNode.parentNode.querySelector('span').textContent = "Inserisci correttamente l'username";
        input.parentNode.parentNode.classList.add('valid');
        formStatus.username = false;
        checkForm();
    } else {
        fetch(REGISTRAZIONE_ROUTE+"/username/"+encodeURIComponent(input.value)).then(fetchResponse).then(jsonCheckUsername);
    }    
}

function jsonCheckUsername(json) {
    // Controllo il campo exists ritornato dal JSON
    if (formStatus.username = !json.exists) {
        document.querySelector('.username').classList.remove('valid');
    } else {
        document.querySelector('.username span').textContent = "Username corretto";
        document.querySelector('.username').classList.add('valid');
    }
    checkForm();
}


function fetchResponse(response) {
    if (!response.ok) return null;
    return response.json();
}

function checkForm() {
    // Controlla che tutti i campi siano pieni
    Object.keys(formStatus).length !== 2 || 
    // Controlla che i campi non siano false
    Object.values(formStatus).includes(false);
}


function checkPassword(event) {
    const passwordInput = document.querySelector('.password input');
    if (formStatus.password = passwordInput.value.length >= 8) {
        document.querySelector('.password').classList.remove('notvalid');
    } else {
        document.querySelector('.password').classList.add('notvalid');
    }
    checkForm();
}

const formStatus = {'nome': true};
document.querySelector('.username input').addEventListener('blur', checkUsername);
document.querySelector('.password input').addEventListener('blur', checkPassword);