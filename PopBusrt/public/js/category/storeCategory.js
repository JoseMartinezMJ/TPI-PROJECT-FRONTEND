import { Category } from "./CategoryClass.js";
import { createCategory} from "./fetch.js";

const btnSave = document.querySelector('[data-save]');

btnSave.addEventListener('click', async(e) => {
    e.preventDefault();

    
    let category_name = document.querySelector('[data-category_name]').value;



    
    //----> DESPUES DE VALIDAR TODO <----

    const category = Category(
        null,
        category_name,
        
    );

    const CategoryCreated = await createCategory(category);

    if (CategoryCreated !== null) {
        //CREAMOS REGISTRO EN LA TABLA DE DESCUENTOS Y SU TABLA PIVOTE
        let message = "La categoria fue creado exitosamente :D";
                const containerAlert = document.querySelector('[data-alert]');
                let alertContent = '';
                alertContent += `
                    <div class="alert alert-success" role="alert">
                        ${message}
                    </div>
                `;
                containerAlert.innerHTML = alertContent;
                setTimeout(() => {
                    //window.location.href = "../../../resources/views/Admin_Users.blade.php";
                    location.reload();
                }, 4000);
        
    } else {
        let message = "ups, hubo un problema.";
                setTimeout(() => {
                    //window.location.href = "{{route('admin.users')}}";
                    //location.reload();
                }, 4000);
        
                const containerAlert = document.querySelector('[data-alert]');
                let alertContent = '';
                alertContent += `
                    <div class="alert alert-danger" role="alert">
                        ${message}
                    </div>
                `;
                containerAlert.innerHTML = alertContent;
    }
});