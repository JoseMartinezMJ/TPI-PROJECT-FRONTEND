import { User } from "./UserClass.js";
import { createUser } from "./fetch.js";

const btnSave = document.querySelector('[data-save]');

btnSave.addEventListener('click', (e) => {
    e.preventDefault();

    
    let name = document.querySelector('[data-name]').value;
    name += ' ' + document.querySelector('[data-lastname]').value;
    let email = document.querySelector('[data-email]').value;
    let password = document.querySelector('[data-password]').value;
    let age = document.querySelector('[data-age]').value;
    let gender = document.querySelector('[data-gender]').value;
    let username = document.querySelector('[data-user]').value;
    let country = document.querySelector('[data-country]').value;
    let main_addr = document.querySelector('[data-mainaddr]').value;
    let shipping_addr = document.querySelector('[data-shippingaddr]').value;
    let rol = false;



    if (document.querySelector('[data-rol]').value == 'Administrador') {
        rol = true;
    }

    //----> DESPUES DE VALIDAR TODO <----

    const user = User(
        null,
        name,
        username,
        email,
        age,
        gender,
        password,
        country,
        main_addr,
        shipping_addr,
        rol
    );

    console.log('El usuario ' + name + ' fue agregado, con el cargo de: ' + rol );
    createUser(user);
});