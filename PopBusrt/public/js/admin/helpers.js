const destroyUser = (user_id) => {

    fetch('http://127.0.0.1:8000/api/users/' +  user_id, {
        method: 'DELETE'
    })
    .then(response => {

        if (response.ok) {
            let message = "El usuario fue eliminado exitosamente :D";

            setTimeout(() => {
                //location.reload();
                window.location.href = "http://127.0.0.1:8001/Admin/Users";
            }, 4000);

            const containerAlert = document.querySelector('[data-alert]');
            let alertContent = '';
            alertContent += `
                <div class="alert alert-success" role="alert">
                    ${message}
                </div>
            `;
            containerAlert.innerHTML = alertContent;

        } else {
            let message = "Parece que tuvimos un problema al intentar eliminar el usuario, por favor intentalo más tarde.";
            setTimeout(() => {
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
    })
    .catch(error => {
        console.error('Error:', error);
    });
}

const detachUserCoupon = (user_id, discount_id) => {
    //ELIMINA LA RELACION ENTRE CUPONES Y USUARIO
    const user_coupon = {
        user_id: user_id,
        discount_id: discount_id
    }
    fetch('http://127.0.0.1:8000/api/users/'+ user_id + '/discount' , {
        method: 'DELETE',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(user_coupon)
    })
    .then(resp => resp.json())
    .then(response => {
        //ELIMINA EL REGISTRO DE LA TABLA DE CUPONES Y EL REGISTRO DE USUARIO
        if (response.message == 'Discount detached successfully') {
            destroyUser(user_id);
            destroyCoupon(discount_id);
        }
        
    })
}

const destroyCoupon = (discount_id) => {
    fetch('http://127.0.0.1:8000/api/discount/' +  discount_id, {
        method: 'DELETE'
    })
    .then(response => {

        if (!response.ok) {
            let message = "Parece que tuvimos un problema al intentar eliminar el registro de descuentos, por favor intentalo más tarde.";
            setTimeout(() => {
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
    })
    .catch(error => {
        console.error('Error:', error);
    });
}

function destroyProduct(productId) {

    fetch('http://127.0.0.1:8000/api/products/' +  productId, {
        method: 'DELETE'
    })
    .then(response => {

        if (response.ok) {
            let message = "El producto fue eliminado exitosamente :D";
            setTimeout(() => {
                location.reload();
            }, 4000);

            const containerAlert = document.querySelector('[data-alert]');
            let alertContent = '';
            alertContent += `
                <div class="alert alert-success" role="alert">
                    ${message}
                </div>
            `;
            containerAlert.innerHTML = alertContent;

        } else {
            let message = "Parece que tuvimos un problema al intentar eliminar el producto, por favor intentalo más tarde.";
            setTimeout(() => {
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
    })
    .catch(error => {
        console.error('Error:', error);
    });
}