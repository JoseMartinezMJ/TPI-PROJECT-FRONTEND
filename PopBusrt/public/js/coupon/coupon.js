import { getCoupon } from "./fetch.js";
import { drawCoupon } from "./codeHTML.js";

const showCoupon = async() => {
    const coupon = await getCoupon();
    if (coupon !== null) {
        drawCoupon(coupon);
    }
}

showCoupon();