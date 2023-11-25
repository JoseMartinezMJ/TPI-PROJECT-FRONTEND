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