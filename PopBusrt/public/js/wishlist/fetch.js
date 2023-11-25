
export const getProductsInUserWishlist = async (userId) => {
    try {
        // Obtener la wishlist del usuario
        const userWishlistResponse = await fetch(`http://127.0.0.1:8000/api/users/${userId}/wishlist`);
        const userWishlist = await userWishlistResponse.json();

        // Verificar si se obtuvo la wishlist del usuario
        if (!userWishlist || !userWishlist.id) {
            throw new Error("Error al obtener la wishlist del usuario");
        }

        // Obtener los productos asociados a la wishlist del usuario
        const wishlistId = userWishlist.id;
        const productsInWishlistResponse = await fetch(`http://127.0.0.1:8000/api/wishlist/${wishlistId}/products`);
        const productsInWishlist = await productsInWishlistResponse.json();

        return productsInWishlist;
    } catch {
        return null;
    }
}

export const createWishlist = async (name_wishlist) => {

    const wish_list = {
        name_wishlist: name_wishlist
    }

    try {
        const response = await fetch('http://127.0.0.1:8000/api/wishlist', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(wish_list)
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

export const attachUserWishlist = async(user_id, wishlist_id) => {
    const user_wishlist = {
        user_id: user_id,
        wishlist_id: wishlist_id
    }

    try {
        const response = await fetch('http://127.0.0.1:8000/api/users/wishlist', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(user_wishlist)
        });

        if (!response.ok) {
            throw new Error("Error 404");
        }

        // Después de asociar el usuario con la wishlist, recupera la wishlist del usuario
        const userWishlistResponse = await fetch(`http://127.0.0.1:8000/api/users/${user_id}/wishlist`);
        const userWishlist = await userWishlistResponse.json();

        return userWishlist;
    } catch {
        return null;
    }
}


export const attachWishlistproduct = async(wishlist_id, product_id) => {
    const wishlist_product = {
        wishlist_id: wishlist_id,
        product_id: product_id
    }

    try {
        const response = await fetch('http://127.0.0.1:8000/api//wishlist/product', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(wishlist_product)
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