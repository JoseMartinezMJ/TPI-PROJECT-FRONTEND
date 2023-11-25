import { getSupplier } from "./fetch.js";
import { drawSuppliers } from "./codeHTML.js";

const showSuppliers = async() => {
    const suppliers = await getSupplier();
    if (suppliers !== null) {
        drawSuppliers(suppliers);
    }
}

showSuppliers();