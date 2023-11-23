function destroyUser (userId) {

    fetch('http://127.0.0.1:8000/api/users/' +  userId, {
        method: 'DELETE'
    })
    .then(response => {

        if (response.ok) {
            let message = "El usuario fue eliminado exitosamente :D";
            location.reload();

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
            location.reload();

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
            //location.reload();

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
            //location.reload();

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