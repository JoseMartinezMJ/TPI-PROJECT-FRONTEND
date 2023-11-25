//Logica para agregar dinanismo a la vista User.blade.php
// Seleccion de los elementos con las clases "btn-menu" y "sidebar" y los almacena en variables.
const btn_menu = document.querySelector(".btn-menu");
const side_bar = document.querySelector(".sidebar");

// Eventos de clic al elemento "btn_menu".
btn_menu.addEventListener("click", function () {
  // Alterna la clase "expand" en el elemento "side_bar".
  side_bar.classList.toggle("expand");
  // Llama a la función "changebtn".
  changebtn();
});

// Función "changebtn".
function changebtn() {
  // Verifica si la clase "expand" está presente en el elemento "side_bar".
  if (side_bar.classList.contains("expand")) {
    // Reemplaza la clase "bx-menu" con "bx-menu-alt-right" en el elemento "btn_menu".
    btn_menu.classList.replace("bx-menu", "bx-menu-alt-right");
  } else {
    // Reemplaza la clase "bx-menu-alt-right" con "bx-menu" en el elemento "btn_menu".
    btn_menu.classList.replace("bx-menu-alt-right", "bx-menu");
  }
}

// Selecciona los elementos con las clases "theme-btn" y "theme-ball" y los almacena en variables.
const btn_theme = document.querySelector(".theme-btn");
const theme_ball = document.querySelector(".theme-ball");

// Obtiene el tema almacenado en el almacenamiento local.
const localData = localStorage.getItem("theme");

// Establece el tema predeterminado en "light" si no hay ningún tema almacenado en el almacenamiento local.
if (localData == null) {
  localStorage.setItem("theme", "light");
}

// Verifica el tema almacenado y aplica las clases correspondientes al cuerpo y a los elementos "theme-ball".
if (localData == "dark") {
  document.body.classList.add("dark-mode");
  theme_ball.classList.add("dark");
} else if (localData == "light") {
  document.body.classList.remove("dark-mode");
  theme_ball.classList.remove("dark");
}

// Eventos de click al elemento "btn_theme".
btn_theme.addEventListener("click", function () {
  // Alterna la clase "dark-mode" en el cuerpo y la clase "dark" en el elemento "theme-ball".
  document.body.classList.toggle("dark-mode");
  theme_ball.classList.toggle("dark");

  // Actualiza el tema en el almacenamiento local según el estado actual.
  if (document.body.classList.contains("dark-mode")) {
    localStorage.setItem("theme", "dark");
  } else {
    localStorage.setItem("theme", "light");
  }
});
