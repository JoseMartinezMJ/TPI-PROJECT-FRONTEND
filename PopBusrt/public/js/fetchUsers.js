export const getUsers = async() => {
    try {
        const response = await fetch('http://127.0.0.1:8000/api/users');
        //Verifica si la respuesta NO es correcta
        if (!response.ok) {
            throw new Error("Error 404");//En caso de no haberse recuelto, genera un error
        }
        return response.json();//Si se la promesa fue resuelta, retorna la respuesta como un archivo JSON
    } catch {
        return null;//Si ocurre algún error, retorna null
    }
}