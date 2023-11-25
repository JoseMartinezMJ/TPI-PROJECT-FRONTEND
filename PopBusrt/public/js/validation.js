document.addEventListener("DOMContentLoaded", function () {
    // Selecciona el formulario y agrega un evento de escucha para el envío
    var form = document.querySelector('form');
    form.addEventListener('submit', function (event) {
        // Detiene el envío del formulario
        event.preventDefault();

        // Obtiene los valores de usuario y contraseña
        var username = document.querySelector('input[type="text"]').value;
        var password = document.querySelector('input[type="password"]').value;

        // Valida el tamaño de la contraseña
        if (password.length < 8) {
            alert("La contraseña debe tener al menos 8 caracteres");
        } else {
            // Si la contraseña es válida, puedes enviar el formulario o realizar otras acciones
            form.submit();
        }
    });
});
