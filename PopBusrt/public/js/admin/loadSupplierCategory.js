import { getSupplier } from "./fetch.js";
import { getCategory } from "../category/fetch.js";

const loadCategories = async() => {
    const categoriesContainer = document.querySelector('[data-category]');

    const categories = await getCategory();
    if (categories !== null) {
        categories.forEach(category => {
            const option = document.createElement('option');
            option.setAttribute('value', `${category.id}`);
            option.text = category.category_name;
            categoriesContainer.appendChild(option);
        });
    }
}

const loadSuppliers = async() => {
    const suppliersContainer = document.querySelector('[data-supplier]');
    const suppliers = await getSupplier();

    if (suppliers !== null) {
        suppliers.forEach(supplier => {
            const option = document.createElement('option');
            option.setAttribute('value', `${supplier.id}`);
            option.text = supplier.name_supplier;
            suppliersContainer.appendChild(option);
        });
    }
}

loadSuppliers();
loadCategories();