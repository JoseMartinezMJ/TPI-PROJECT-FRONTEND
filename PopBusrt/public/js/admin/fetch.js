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

export const createUser = async(user) => {
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

    try {
        const response = await fetch('http://127.0.0.1:8000/api/users', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(newUser)
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

export const createCoupon = async (first_disc, available_coupon) => {

    const discount_coupon = {
        first_disc: first_disc,
        available_coupon: available_coupon
    }

    try {
        const response = await fetch('http://127.0.0.1:8000/api/discount', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(discount_coupon)
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

export const attachUserCoupon = async(user_id, discount_id) => {
    const user_coupon = {
        user_id: user_id,
        discount_id: discount_id
    }

    try {
        const response = await fetch('http://127.0.0.1:8000/api/users/discount', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(user_coupon)
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

export const updateUser = (user) => {
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
    fetch('http://127.0.0.1:8000/api/users/' + user.id, {
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
            let message = "El usuario fue actualizado exitosamente :D";
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
            let message = "Parece que tuvimos un problema al intentar actualizar el usuario, por favor intentalo más tarde.";
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

export const getSupplier = async() => {
    try {
        const response = await fetch('http://127.0.0.1:8000/api/supplier');
        //Verifica si la respuesta NO es correcta
        if (!response.ok) {
            throw new Error("Error 404");//En caso de no haberse recuelto, genera un error
        }
        return response.json();//Si se la promesa fue resuelta, retorna la respuesta con formato JSON
    } catch {
        return null;//Si ocurre algún error, retorna null
    }
}

export const createSupplier = async(name, email) => {
    const newSupplier = {
        name_supplier: name,
        supplier_contact: email
    };

    try {
        const response = await fetch('http://127.0.0.1:8000/api/supplier', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(newSupplier)
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

export const createProduct = async(newProduct) => {
    try {
        const response = await fetch('http://127.0.0.1:8000/api/products', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(newProduct)
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

export const attachProductCategory = async(category_id, product_id) => {
    const product_category = {
        category_id: category_id,
        product_id: product_id
    }

    try {
        const response = await fetch('http://127.0.0.1:8000/api/products/category', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(product_category)
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

export const attachProductSupplier = async(supplier_id, product_id) => {
    const product_supplier = {
        product_id: product_id,
        supplier_id: supplier_id
    }

    try {
        const response = await fetch('http://127.0.0.1:8000/api/products/supplier', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(product_supplier)
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