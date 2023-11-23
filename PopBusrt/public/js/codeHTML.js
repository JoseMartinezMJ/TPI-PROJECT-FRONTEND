export const drawUsers = (users) => {
    const Tbody = document.querySelector('[data-users]');
    users.forEach(user => {
        const tr = document.createElement('tr');
        tr.classList.add('table-primary');

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
            <td>
                <a href="#" class="btn btn-info">Editar</a>
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </td>
        `;

        tr.innerHTML = row;
        Tbody.appendChild(tr);
    });
}