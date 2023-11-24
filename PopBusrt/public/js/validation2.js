document.addEventListener("DOMContentLoaded", function () {
    // Escucha el evento submit del formulario
    document.querySelector("form").addEventListener("submit", function (event) {
        // Realiza las validaciones cuando se envía el formulario
        if (!validateName() || !validateLastName() || !validateAge() || !validateUsername() || !validateCountry()) {
            // Detiene el envío del formulario si las validaciones fallan
            event.preventDefault();
        }
    });

    function validateName() {
        // Validación del nombre (debe contener solo letras)
        let name = document.querySelector("#name").value;
        let regex = /^[A-Za-z]+$/;
        if (!regex.test(name)) {
            alert("El nombre solo debe contener letras");
            return false;
        }
        return true;
    }

    function validateLastName() {
        // Validación del apellido (debe contener solo letras)
        let lastName = document.querySelector("#lastName").value;
        let regex = /^[A-Za-z]+$/;
        if (!regex.test(lastName)) {
            alert("El apellido solo debe contener letras");
            return false;
        }
        return true;
    }

    function validateAge() {
        // Validación de la edad (no debe ser negativa)
        let age = document.querySelector("#age").value;
        if (parseInt(age) < 0) {
            alert("La edad no puede ser negativa");
            return false;
        }
        return true;
    }

    function validateUsername() {
        // Validación del usuario (máximo 8 caracteres)
        let username = document.querySelector("#username").value;
        if (username.length > 8) {
            alert("El usuario debe tener como máximo 8 caracteres");
            return false;
        }
        return true;
    }

    function validateCountry() {
        // Validación del país (solo letras, sin números ni caracteres especiales)
        let country = document.querySelector("#country").value;
        let regex = /^[A-Za-z]+$/;
        if (!regex.test(country)) {
            alert("El país solo debe contener letras");
            return false;
        }
        return true;
    }
});
