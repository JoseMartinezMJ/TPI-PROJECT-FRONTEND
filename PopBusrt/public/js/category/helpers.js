const destroyCategory = (category_id) => {

    fetch('http://127.0.0.1:8000/api/categories/' +  category_id, {
        method: 'DELETE'
    })
    .then(response => {

        if (response.ok) {
            let message = "La categoria fue eliminado exitosamente :D";

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
            let message = "Parece que tuvimos un problema al intentar eliminar la categoria, por favor intentalo más tarde.";
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

const detachCategory = (category_id, discount_id) => {
    //ELIMINA LA RELACION ENTRE CUPONES Y USUARIO
    const user_coupon = {
        category_id: category_id,
        discount_id: discount_id
    }
    fetch('http://127.0.0.1:8000/api/categories/'+ category_id + '/discount' , {
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
            destroyCategory(user_id);
            destroyCoupon(discount_id);
        }
        
    })
}