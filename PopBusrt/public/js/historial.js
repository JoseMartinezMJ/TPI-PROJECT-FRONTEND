let jsonData;  // Variable para almacenar los datos JSON

// Hacer una solicitud GET a la API /purchases
//http://127.0.0.1:8000/api/purchases
//http://127.0.0.1:8000/api/users'


    fetch('http://127.0.0.1:8000/api/purchases')
    .then(response => {
        // Verificar si la respuesta es exitosa (código de estado 200-299)
        if (!response.ok) {
            throw new Error(`Error: ${response.status}`);
        }
        // Parsear la respuesta como JSON
        return response.json();
    })
    .then(data => {
        // Almacenar los datos en la variable
        jsonData = data;

        // Mostrar los datos en la vista
        const historialContainer = document.getElementById('historialContainer');

        data.forEach(purchase => {
            const purchaseInfo = document.createElement('div');
            purchaseInfo.innerHTML = `
                <p>ID: ${purchase.id}</p>
                <p>Producto Cantidad: ${purchase.product_quantity}</p>
                <p>Monto: ${purchase.amount}</p>
                <!-- Agrega más información según la estructura de tus datos -->
                <hr>
            `;
            historialContainer.appendChild(purchaseInfo);
        });
    })
    .catch(error => {
        // Manejar errores
        console.error('Error al obtener y almacenar datos:', error);
    });
