import { User } from "./UserClass.js";
import { createUser, createCoupon, attachUserCoupon } from "./fetch.js";

const btnSave = document.querySelector('[data-save]');

btnSave.addEventListener('click', async(e) => {
    e.preventDefault();

    // Agrega las validaciones aquí
    if (!validateForm()) {
        return;
    }

    let name = document.querySelector('[data-name]').value;
    let email = document.querySelector('[data-email]').value;
    let password = document.querySelector('[data-password]').value;
    let age = document.querySelector('[data-age]').value;
    let gender = document.querySelector('[data-gender]').value;
    let username = document.querySelector('[data-user]').value;
    let country = document.querySelector('[data-country]').value;
    let main_addr = document.querySelector('[data-mainaddr]').value;
    let shipping_addr = document.querySelector('[data-shippingaddr]').value;

    // Validación adicional para el campo de nombre
    if (!isValidName(name)) {
        alert('El nombre debe contener solo letras y tener al menos 3 caracteres.');
        return;
    }

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
        false
    );

    const userCreated = await createUser(user);

    if (userCreated !== null) {
        const coupon = await createCoupon(true, 0);
        if (coupon !== null) {
            const attach = await attachUserCoupon(userCreated.user.id, coupon.discount.id);
            if (attach !== null) {
                let message = "El usuario fue creado exitosamente :D";
                handleAlert('success', message);
                setTimeout(() => {
                    // Redirección a la página de inicio
                    window.location.href = "/";
                }, 4000);
            } else {
                let message = "Parece que tuvimos un problema al intentar asignarle el cupón al usuario, por favor inténtalo más tarde.";
                handleAlert('danger', message);
            }
        } else {
            let message = "Parece que tuvimos un problema al intentar crear el cupón del usuario, por favor inténtalo más tarde.";
            handleAlert('danger', message);
        }
    } else {
        let message = "Parece que tuvimos un problema al intentar crear el usuario, por favor inténtalo más tarde.";
        handleAlert('danger', message);
    }
});

function validateForm() {
    // Obtiene el valor del correo electrónico y contraseña
    var email = document.querySelector('[data-email]').value;
    var password = document.querySelector('[data-password]').value;

    // Expresión regular para validar el formato del correo electrónico
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    // Verifica si el correo electrónico tiene un formato válido
    if (!emailRegex.test(email)) {
        alert('Ingresa un correo electrónico válido.');
        return false; // La validación falla
    }

    // Verifica la longitud de la contraseña y si contiene un símbolo
    if (password.length <= 8 || /\s/.test(password) || !/[!@#$%^&*()_+{}\[\]:;<>,.?~\\/-]/.test(password)) {
        alert('La contraseña debe tener más de 8 caracteres, no debe contener espacios y debe contener al menos un símbolo.');
        return false; // La validación falla
    }

    // Puedes agregar más lógica de validación aquí según tus necesidades

    return true; // La validación es exitosa
}

function isValidName(name) {
    // Expresión regular para validar que el nombre solo contiene letras y espacios, y tiene al menos 3 caracteres
    var nameRegex = /^[a-zA-Z\s]{3,}$/;
    return nameRegex.test(name);
}


function handleAlert(type, message) {
    setTimeout(() => {
        // Puedes agregar lógica adicional o redireccionar a otra página
    }, 4000);

    const containerAlert = document.querySelector('[data-alert]');
    let alertContent = '';
    alertContent += `
        <div class="alert alert-${type}" role="alert">
            ${message}
        </div>
    `;
    containerAlert.innerHTML = alertContent;
}
