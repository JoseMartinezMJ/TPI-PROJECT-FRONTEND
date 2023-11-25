import { getProductsInUserWishlist } from "./fetch.js";
import { showProductsInWishlist } from "./codeHTML.js";

const showWishlist = async() => {
    const wishlist = await getProductsInUserWishlist();
    if (wishlist !== null) {
        showProductsInWishlist(wishlist);
    }
}

showWishlist();