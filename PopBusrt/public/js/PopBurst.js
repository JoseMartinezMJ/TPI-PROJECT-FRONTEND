// Evento click que se ejecuta cuando el usuario da click al icono hamburguesa (icon-menu) y se ejecuta la función de mostrar_menu
document.getElementById("icon-menu").addEventListener("click", mostrar_menu);

// Función que muestra el menú responsive
function mostrar_menu() {
// Toggle para agregar o quitar la clase 'move-container-all' al elemento con id 'move-content'
    document.getElementById("move-content").classList.toggle('move-container-all');

// Toggle para agregar o quitar la clase 'show-lateral' al elemento con id 'show-menu'
    document.getElementById("show-menu").classList.toggle('show-lateral');
}

// Selecciona el elemento con el atributo '[reset]'
const coma = document.querySelector('[reset]');

// Verifica si el elemento con el atributo '[reset]' existe
if (coma) {
// Configura el estilo del cursor del elemento '[reset]' a 'pointer'
    coma.style.cursor = 'pointer';
// Añade un evento de click al elemento '[reset]' que ejecuta la función para limpiar el localStorage
    coma.addEventListener('click', function(){
        localStorage.clear();
    });
}
