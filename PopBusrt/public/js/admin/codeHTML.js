import { User } from "./UserClass.js";

export const drawUsers = (users) => {
    const Tbody = document.querySelector('[data-users]');
    users.forEach(user => {
        const tr = document.createElement('tr');
        tr.classList.add('table-primary');
        let rol = "Cliente";

        if (user.rol) {
            rol = "Administrador";
        }

        let row = '';

        row += `
            <td scope="row">${user.id}</td>
            <td>${user.name}</td>
            <td>${user.username}</td>
            <td>${user.email}</td>
            <td>${user.age}</td>
            <td>${user.gender}</td>
            <td>${user.country}</td>
            <td>${user.main_addr}</td>
            <td>${rol}</td>
            <td>
                <a href="#" class="btn btn-outline-success m-1">Editar</a>
                <button type="submit" class="btn btn-outline-danger" onclick="destroyUser(${user.id})">Eliminar</button>
            </td>
        `;

        tr.innerHTML = row;
        Tbody.appendChild(tr);
    });
}

export const drawProducts = (products) => {
    const Tbody = document.querySelector('[data-products]');

    products.forEach(product => {
        const tr = document.createElement('tr');
        tr.classList.add('table-primary');

        let rowContent = '';
        rowContent += `
            <td scope="row">${product.id}</td>
            <td>${product.name_product}</td>
            <td>${product.description_product}</td>
            <td>${product.product_price}</td>
            <td>${product.product_stock}</td>
            <td>${product.product_cost}</td>
            <td>${product.supplier[0].name_supplier}</td>
            <td>
                <a href="#" class="btn btn-outline-success m-1">Editar</a>
                <button type="submit" class="btn btn-outline-danger" onclick="destroyProduct(${product.id})">Eliminar</button>
            </td>
        `;
        tr.innerHTML = rowContent;
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