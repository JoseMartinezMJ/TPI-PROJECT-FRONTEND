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

    const userCreated = await createUser(user);

    if (userCreated !== null) {
        //CREAMOS REGISTRO EN LA TABLA DE DESCUENTOS Y SU TABLA PIVOTE
        const coupon = await createCoupon(true, 0);
        if (coupon !== null) {
            //coupon.discount.id
            const attach = await attachUserCoupon(userCreated.user.id, coupon.discount.id);
            if (attach !== null) {
                //MUESTRA QUE SE HA REGISTRADO CON EXITO
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
                    //window.location.href = "../../../resources/views/Admin_Users.blade.php";
                    location.reload();
                }, 4000);
            } else {
                let message = "Parece que tuvimos un problema al intentar asignarle el cupon al usuario, por favor intentalo más tarde.";
                setTimeout(() => {
                    //window.location.href = "{{route('admin.users')}}";
                    //location.reload();
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
            let message = "Parece que tuvimos un problema al intentar crear el cupon del usuario, por favor intentalo más tarde.";
            setTimeout(() => {
                //window.location.href = "{{route('admin.users')}}";
                location.reload();
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
        let message = "Parece que tuvimos un problema al intentar crear el usuario, por favor intentalo más tarde.";
        setTimeout(() => {
            //window.location.href = "{{route('admin.users')}}";
            location.reload();
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