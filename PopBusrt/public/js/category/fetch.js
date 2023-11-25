export const getCategory = async() => {
    try {
        const response = await fetch('http://127.0.0.1:8000/api/categories');
        //Verifica si la respuesta NO es correcta
        if (!response.ok) {
            throw new Error("Error 404");//En caso de no haberse recuelto, genera un error
        }
        return response.json();//Si se la promesa fue resuelta, retorna la respuesta con formato JSON
    } catch {
        return null;//Si ocurre algún error, retorna null
    }
}
export const createCategory = async(category) => {
    const newCategory = {
        category_name: category.category_name


    };

    try {
        const response = await fetch('http://127.0.0.1:8000/api/categories', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(newCategory)
        });
        //Verifica si la respuesta NO es correcta
        if (!response.ok) {
            throw new Error("Error 404");//En caso de no haberse recuelto, genera un error
        }
        return response.json();//Si se la promesa fue resuelta, retorna la respuesta con formato JSON
    } catch {
        return null;//Si ocurre algún error, retorna null
    }
}

export const updateCategory = (category) => {
    const newUser = {
        id: category.id,
        category_name: category.name,

    };

    // Enviar la solicitud POST
    fetch('http://127.0.0.1:8000/api/categories/' + category.id, {
        method: 'PUT',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(newUser)
    })
    .then(response => {

        if (response.ok) {

            //CREA EL REGISTRO EN LA TABLA DE DESCUENTOS Y ASOCIA AL NUEVO USUARIO


            //MUESTRA QUE SE HA REGISTRADO CON EXITO
            let message = "La categoria fue actualizado exitosamente :D";
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
            let message = "Parece que tuvimos un problema al intentar actualizar la categoria, por favor intentalo más tarde.";
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
    })
    .catch(error => {
        console.error('Error:', error);
    });
}
