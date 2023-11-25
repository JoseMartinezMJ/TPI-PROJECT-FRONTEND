import { getCategory } from "./fetch.js";
import { drawCategory } from "./codeHTML.js";

const showCategory = async() => {
    const categories = await getCategory();
    if (categories !== null) {
        drawCategory(categories);
    }
}

showCategory();