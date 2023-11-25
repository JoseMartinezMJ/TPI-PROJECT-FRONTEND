import { createSupplier } from "./fetch.js";

const btnSave = document.querySelector('[data-save]');

btnSave.addEventListener('click', async(e) => {
    e.preventDefault();

    
    let name = document.querySelector('[data-name]').value;
    let email = document.querySelector('[data-contact]').value;

    //----> DESPUES DE VALIDAR TODO <----

    const supplierCreated = await createSupplier(name, email);
    console.log(supplierCreated)

    if (supplierCreated !== null) {
        let message = "El proveedor fue creado exitosamente :D";
        const containerAlert = document.querySelector('[data-alert]');
        let alertContent = '';
        alertContent += `
            <div class="alert alert-success" role="alert">
                ${message}
            </div>
        `;
        containerAlert.innerHTML = alertContent;
        setTimeout(() => {
            window.location.href = "http://127.0.0.1:8001/Admin/Supplier";
            //location.reload();
        }, 4000);
        
    } else {
        let message = "Parece que tuvimos un problema al intentar crear el proveedor, por favor intentalo más tarde.";
        setTimeout(() => {
            window.location.href = "http://127.0.0.1:8001/Admin/Supplier";
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
});