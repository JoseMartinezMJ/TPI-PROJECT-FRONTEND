export const getUsers = async() => {
    try {
        const response = await fetch('http://127.0.0.1:8000/api/users');
        //Verifica si la respuesta NO es correcta
        if (!response.ok) {
            throw new Error("Error 404");//En caso de no haberse recuelto, genera un error
        }
        return response.json();//Si se la promesa fue resuelta, retorna la respuesta con formato JSON
    } catch {
        return null;//Si ocurre algún error, retorna null
    }
}

export const createUser = (user) => {
    const newUser = {
        name: user.name,
        username: user.username,
        email: user.email,
        age: user.age,
        gender: user.gender,
        password: user.password,
        country: user.country,
        main_addr: user.main_addr,
        shipping_addr: user.shipping_addr,
        rol: user.rol
    };

    // Enviar la solicitud POST
    fetch('http://127.0.0.1:8000/api/users', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(newUser)
    })
    .then(response => {

        if (response.ok) {

            let message = "El usuario fue creado exitosamente :D";

            setTimeout(() => {
                window.location.href = "../../../resources/views/Admin_Users.blade.php";
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
            let message = "Parece que tuvimos un problema al intentar crear el usuario, por favor intentalo más tarde.";
            setTimeout(() => {
                window.location.href = "{{route('admin.users')}}";
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

export const getProducts = async() => {
    try {
        const response = await fetch('http://127.0.0.1:8000/api/products');
        //Verifica si la respuesta NO es correcta
        if (!response.ok) {
            throw new Error("Error 404");//En caso de no haberse recuelto, genera un error
        }
        return response.json();//Si se la promesa fue resuelta, retorna la respuesta con formato JSON
    } catch {
        return null;//Si ocurre algún error, retorna null
    }
}