import { User } from "./UserClass.js";
import { createUser, createCoupon, attachUserCoupon } from "./fetch.js";

const btnSave = document.querySelector('[data-save]');

btnSave.addEventListener('click', async(e) => {
    e.preventDefault();

    let name = document.querySelector('[data-name]').value;
    let email = document.querySelector('[data-email]').value;
    let password = document.querySelector('[data-password]').value;
    let age = document.querySelector('[data-age]').value;
    let gender = document.querySelector('[data-gender]').value;
    let username = document.querySelector('[data-user]').value;
    let country = document.querySelector('[data-country]').value;
    let main_addr = document.querySelector('[data-mainaddr]').value;
    let shipping_addr = document.querySelector('[data-shippingaddr]').value;

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
                const containerAlert = document.querySelector('[data-alert]');
                let alertContent = '';
                alertContent += `
                    <div class="alert alert-success" role="alert">
                        ${message}
                    </div>
                `;
                containerAlert.innerHTML = alertContent;
                setTimeout(() => {
                    // Redirección a la página de inicio
                    window.location.href = "/PopBurst";
                }, 4000);
            } else {
                let message = "Parece que tuvimos un problema al intentar asignarle el cupon al usuario, por favor inténtalo más tarde.";
                setTimeout(() => {
                    // Puedes agregar lógica adicional o redireccionar a otra página
                }, 4000);
        
                const containerAlert = document.querySelector('[data-alert]');
                let alertContent = '';
                alertContent += `
                    <div class="alert alert-danger" role="alert">
                        ${message}
                    </div>
                `;
                containerAlert.innerHTML = alertContent;
            }
        } else {
            let message = "Parece que tuvimos un problema al intentar crear el cupon del usuario, por favor inténtalo más tarde.";
            setTimeout(() => {
                // Puedes agregar lógica adicional o redireccionar a otra página
            }, 4000);
    
            const containerAlert = document.querySelector('[data-alert]');
            let alertContent = '';
            alertContent += `
                <div class="alert alert-danger" role="alert">
                    ${message}
                </div>
            `;
            containerAlert.innerHTML = alertContent;
        }
    } else {
        let message = "Parece que tuvimos un problema al intentar crear el usuario, por favor inténtalo más tarde.";
        setTimeout(() => {
            // Puedes agregar lógica adicional o redireccionar a otra página
        }, 4000);

        const containerAlert = document.querySelector('[data-alert]');
        let alertContent = '';
        alertContent += `
            <div class="alert alert-danger" role="alert">
                ${message}
            </div>
        `;
        containerAlert.innerHTML = alertContent;
    }
});
