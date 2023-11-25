import { createProduct, attachProductCategory, attachProductSupplier } from "./fetch.js";

const btnSave = document.querySelector('[data-save]');

btnSave.addEventListener('click', async(e) => {
    e.preventDefault();

    
    let name_product = document.querySelector('[data-name]').value;
    let description_product = document.querySelector('[data-description]').value;
    let img_product = document.querySelector('[data-img_product]').value;
    let product_price = document.querySelector('[data-price]').value;
    let product_stock = document.querySelector('[data-stock]').value;
    let product_cost = document.querySelector('[data-cost]').value;
    let supplier_id = document.querySelector('[data-supplier]').value;
    let category_id = document.querySelector('[data-category]').value;
   
    const newProduct = {
        name_product: name_product,
        description_product: description_product,
        img_product: img_product,
        product_price: product_price,
        product_stock: product_stock,
        product_cost: product_cost
    }

    //----> DESPUES DE VALIDAR TODO <----
    const productCreated = await createProduct(newProduct);
    console.log(productCreated);

    if (productCreated !== null) {
        //CREA LA RELACION ENTRE PRODUCTO Y EL PROVEEDOR Y LA CATEGORIA
        const attachCategory = await attachProductCategory(category_id, productCreated.product.id);
        const attachSupplier = await attachProductSupplier(supplier_id, productCreated.product.id);

        if (attachCategory !== null & attachSupplier !== null) {
            let message = "El producto fue creado exitosamente :D";
            const containerAlert = document.querySelector('[data-alert]');
            let alertContent = '';
            alertContent += `
                <div class="alert alert-success" role="alert">
                    ${message}
                </div>
            `;
            containerAlert.innerHTML = alertContent;
            setTimeout(() => {
                window.location.href = "http://127.0.0.1:8001/Admin/Products";
                //location.reload();
            }, 4000);
        } else {
            let message = "Parece que tuvimos un problema al intentar crear la relación del producto, por favor intentalo más tarde.";
            setTimeout(() => {
               // window.location.href = "http://127.0.0.1:8001/Admin/Products";

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
        let message = "Parece que tuvimos un problema al intentar crear el producto, por favor intentalo más tarde.";
        setTimeout(() => {
            window.location.href = "http://127.0.0.1:8001/Admin/Products";

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