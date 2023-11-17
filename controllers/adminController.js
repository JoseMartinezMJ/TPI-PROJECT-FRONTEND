// controllers/adminController.js
function renderAdminDashboard() {
    loadAndRenderTemplate('views/templates/header.html', 'header-container');
    loadAndRenderTemplate('views/templates/main.html', 'main-container');
    loadAndRenderTemplate('views/templates/footer.html', 'footer-container');
    loadAndRenderTemplate('views/admin/dashboard.html', 'main-container');
}

