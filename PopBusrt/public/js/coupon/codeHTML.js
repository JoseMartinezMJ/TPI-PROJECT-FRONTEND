import { discount_coupon } from "./CouponClass.js";

export const drawCoupon = (coupons) => {
    const Tbody = document.querySelector('[data-coupons]');
    coupons.forEach(coupon => {
        const tr = document.createElement('tr');
        tr.classList.add('table-primary');

        let row = '';

        row += `
            <td scope="row">${coupon.first_disc}</td>
            <td>${coupon.available_coupon}</td>
            <td>${coupon.created_at}</td>
            <td>${coupon.updated_at}</td>
            <td>
                <a href="#" class="btn btn-outline-success m-1">Editar</a>
                <button type="submit" class="btn btn-outline-danger" onclick="destroyUser(${coupon.id})">Eliminar</button>
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
            break;
    
        default:
            break;
    }
}