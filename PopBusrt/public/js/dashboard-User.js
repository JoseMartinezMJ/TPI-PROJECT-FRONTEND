//Logica para agregar dinanismo a la vista User.blade.php
document.addEventListener("DOMContentLoaded", function() {
    // Selecciona el cuerpo del documento
    const body = document.querySelector("body");
    
    // Encuentra el elemento con la clase "sidebar" dentro del cuerpo
    sidebar = body.querySelector(".sidebar");

    // Encuentra el elemento con la clase "toggle" dentro del cuerpo
    toggle = body.querySelector(".toggle");

    // Encuentra el elemento con la clase "search-box" dentro del cuerpo
    searchBtn = body.querySelector(".search-box");

    // Encuentra el elemento con la clase "toggle-switch" dentro del cuerpo
    modeSwitch = body.querySelector(".toggle-switch");

    // Encuentra el elemento con la clase "mode-text" dentro del cuerpo
    modeText = body.querySelector(".mode-text");

    // Añade un event listener al elemento con la clase "toggle" (botón de menú)
    toggle.addEventListener("click", () => {
        // Alterna la clase "close" en el elemento con la clase "sidebar"
        sidebar.classList.toggle("close");
    });

    // Añade un event listener al elemento con la clase "toggle-switch" (interruptor de modo oscuro)
    modeSwitch.addEventListener("click", () => {
        // Alterna la clase "dark" en el elemento con la etiqueta "body"
        body.classList.toggle("dark");

        // Comprueba si la clase "dark" está presente en el cuerpo
        if(body.classList.contains("dark")){
            // Si está presente, actualiza el texto del elemento con la clase "mode-text" a "Light Mode"
            modeText.innerText = "Light Mode"
        } else {
            // Si no está presente, actualiza el texto del elemento con la clase "mode-text" a "Dark Mode"
            modeText.innerText = "Dark Mode"
        }
    });
});