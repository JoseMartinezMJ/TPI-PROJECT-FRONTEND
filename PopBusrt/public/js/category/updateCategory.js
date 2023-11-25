import { Category } from "./CategoryClass.js";
import { updateCategory} from "./fetch.js";

const btnSave = document.querySelector('[data-save]');

btnSave.addEventListener('click', async(e) => {
    e.preventDefault();

    let id = document.querySelector('[data-id]').value;
    let category_name = document.querySelector('[data-category_name]').value;
    let created_at = document.querySelector('[data-created]').value;
    let updated_at = document.querySelector('[data-updated]').value;

    //----> DESPUES DE VALIDAR TODO <----

    const category = Category(
        id,
        category_name,
        created_at,
        updated_at
    );

    updateCategory(category);
});