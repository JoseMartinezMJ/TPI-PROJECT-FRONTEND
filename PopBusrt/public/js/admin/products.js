import { getProducts } from "./fetch.js";
import { drawProducts } from "./codeHTML.js";

const showProduct = async() => {
    const products = await getProducts();
    if (products !== null) {
        drawProducts(products);
    }
}

showProduct();