// Función para cargar y renderizar una plantilla
function loadAndRenderTemplate(templatePath, targetElementId) {
    fetch(templatePath)
      .then(response => response.text())
      .then(html => {
        document.getElementById(targetElementId).innerHTML = html;
      });
  }
  
  // Cargar las plantillas en sus respectivos contenedores
  loadAndRenderTemplate('views/templates/header.html', 'header-container');
  loadAndRenderTemplate('views/templates/main.html', 'main-container');
  loadAndRenderTemplate('views/templates/footer.html', 'footer-container');
  