
    document.addEventListener('DOMContentLoaded', function () {
        // Agrega un evento 'submit' al formulario
        document.querySelector('form').addEventListener('submit', function (event) {
            // Llama a la función de validación antes de enviar el formulario
            if (!validateForm()) {
                // Si la validación falla, evita que el formulario se envíe
                event.preventDefault();
            }
        });

        function validateForm() {

            var name = document.querySelector('[data-name]').value;
            var email = document.querySelector('[data-email]').value;
            var password = document.querySelector('[data-password]').value;
            // Agrega más campos según sea necesario

            // Verifica si algún campo requerido está vacío
            if (name === '' || email === '' || password === '') {
                // Muestra un mensaje de error
                alert('Por favor, completa todos los campos obligatorios.');
                return false; // La validación falla
            }
            // Obtiene el valor de la contraseña
            var password = document.querySelector('[data-password]').value;

            // Verifica si la contraseña tiene al menos 9 caracteres
            if (password.length <= 8) {
                alert('La contraseña debe tener más de 8 caracteres.');
                return false; // La validación falla
            }

            // Verifica si la contraseña contiene espacios
            if (/\s/.test(password)) {
                alert('La contraseña no debe contener espacios.');
                return false; // La validación falla
            }

            // Verifica si la contraseña contiene al menos un símbolo
            var symbols = /[!@#$%^&*()_+{}\[\]:;<>,.?~\\/-]/;
            if (!symbols.test(password)) {
                alert('La contraseña debe contener al menos un símbolo.');
                return false; // La validación falla
            }

            // Puedes agregar más lógica de validación aquí según tus necesidades

            return true; // La validación es exitosa
        }
    });
