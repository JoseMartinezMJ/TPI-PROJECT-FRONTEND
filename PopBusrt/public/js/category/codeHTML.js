export const drawCategory = (categorys) => {
    const Tbody = document.querySelector('[data-categorys]');
    categorys.forEach(categories => {
        const tr = document.createElement('tr');
        tr.classList.add('table-primary');

        let row = '';

        row += `
            <td scope="row">${categories.id}</td>
            <td>${categories.category_name}</td>
            <td scope="row">${categories.created_at}</td>
            <td>${categories.updated_at}</td>

            <td>
                <a href="http://127.0.0.1:8001/Admin/Users/${categories.id}" class="btn btn-outline-success m-1">Editar</a>
                <button type="submit" class="btn btn-outline-danger" onclick="detachUserCoupon(${categories.id})">Eliminar</button>
            </td>
        `;

        tr.innerHTML = row;
        Tbody.appendChild(tr);
    });
}

export const showAlert = (type, message) => {
    switch (type) {
        case 'success':
            const containerAlert = document.querySelector('[data-alert]');
            let alertContent = '';
            alertContent += `
                <div class="alert alert-success" role="alert">
                    ${message}
                </div>
            `;
            containerAlert.innerHTML = alertContent;
            break;
    
        default:
            break;
    }
}