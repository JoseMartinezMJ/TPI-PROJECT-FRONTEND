// public/js/validation.js

document.addEventListener('DOMContentLoaded', function () {
    const loginForm = document.querySelector('.form-box.login form');

    loginForm.addEventListener('submit', function (event) {
        event.preventDefault();

        if (validateLoginForm()) {
            loginForm.submit();
        } else {
            alert('Por favor, completa el formulario correctamente.');
        }
    });

    function validateLoginForm() {
        const emailInput = loginForm.querySelector('input[type="email"]');
        const passwordInput = loginForm.querySelector('input[type="password"]');
        const passwordValue = passwordInput.value.trim();

        if (emailInput.value.trim() === '' || passwordValue === '') {
            alert('Por favor, completa todos los campos.');
            
            // Si el campo de correo está vacío, borrar los datos
            if (emailInput.value.trim() === '') {
                emailInput.value = '';
            }
            
            return false;
        }

        // Validación de contraseña
        if (passwordValue.length < 8) {
            alert('La contraseña debe tener al menos 8 caracteres.');
            return false;
        }

        if (/\s/.test(passwordValue)) {
            alert('La contraseña no debe contener espacios.');
            return false;
        }

        if (!/[+*.-]/.test(passwordValue)) {
            alert('La contraseña debe incluir al menos un símbolo (+*.-).');
            return false;
        }



        return true;
    }
});
