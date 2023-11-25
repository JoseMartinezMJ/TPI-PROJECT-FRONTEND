import { Category } from "./CategoryClass.js";
import { updateCategory} from "./fetch.js";

const btnSave = document.querySelector('[data-save]');

btnSave.addEventListener('click', async(e) => {
    e.preventDefault();

    let id = document.querySelector('[data-id]').value;
    let category_name = document.querySelector('[data-category_name]').value;



    if (document.querySelector('[data-rol]').value == 'Administrador') {
        rol = true;
    }

    //----> DESPUES DE VALIDAR TODO <----

    const category = Category(
        id,
        category_name
    );

    updateCategory(category);
});