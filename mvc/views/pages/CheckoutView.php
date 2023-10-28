<?php
$pageTitle = "Checkout";
ob_start();
$currentPage="Checkout";
require_once "./mvc/views/partials/breadcrumb.php"
?>

<div class="checkout">
    <div class="container-xl">
        <div class="row">
            <div class="col-lg-8">
                <div class="checkout__info">
                    <p class="checkout__info--title">Billing Information</p>
                    <div class="checkout__info--form">
                        <div class="checkout__info--form--double">
                            <div class="w-100 d-flex flex-column gap-2">
                                <label for="checkout-fullName">Full name</label>
                                <input type="text" id="checkout-fullName" placeholder="Your full name" required>
                            </div>
                            <div class="checkout__info--form--double--more w-100 d-flex flex-column gap-2">
                                <label for="checkout-company">Company Name (optional)</label>
                                <input type="text" id="checkout-company" placeholder="Your Company name">
                            </div>
                        </div>
                        <div class="d-flex flex-column gap-2">
                            <label for="checkout-address">Street Address</label>
                            <input type="text" id="checkout-address" placeholder="Your address" required>
                        </div>
                        <div class="checkout__info--form--double">
                            <div class="w-100 d-flex flex-column gap-2">
                                <label for="checkout-name">Email</label>
                                <input type="email" id="checkout-name" placeholder="Email" required>
                            </div>
                            <div class="w-100 d-flex flex-column gap-2">
                                <label for="checkout-phone">Phone</label>
                                <input type="text" id="checkout-phone" placeholder="Phone number" required>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="checkout__notes checkout__info">
                    <p class="checkout__info--title">Additional Info</p>
                    <div class="d-flex flex-column gap-2">
                        <label for="checkout-notes">Order Notes (Optional)</label>
                        <textarea name="" id="checkout-notes" cols="50" rows="4" placeholder="Notes about your order, e.g. special notes for delivery"></textarea>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="checkout__summary">
                    <div class="checkout__summary--order">
                        <p class="checkout__summary--order--title">Order Summery</p>
                        <div class="checkout__summary--order--list">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="checkout__summary--order--list--item">
                                    <img src=<?php echo IMG_PATH . "product-img.png"?> alt="product">
                                    <p>Green Capsicum</p>
                                    <p>x5</p>
                                </div>
                                <p>$70.00</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="checkout__summary--order--list--item">
                                    <img src=<?php echo IMG_PATH . "product-img.png"?> alt="product">
                                    <p>Green Capsicum</p>
                                    <p>x5</p>
                                </div>
                                <p>$70.00</p>
                            </div>
                        </div>
                        <div class="checkout__summary--order--info mt-3 d-flex align-items-center justify-content-between">
                            <p>Subtotal:</p>
                            <p class="checkout__summary--order--info--subtotal">$84.00</p>
                        </div>
                        <div class="checkout__summary--order--info d-flex align-items-center justify-content-between">
                            <p>Shipping:</p>
                            <p class="checkout__summary--order--info--subtotal">Free</p>
                        </div>
                        <div class="checkout__summary--order--info d-flex align-items-center justify-content-between">
                            <p>Total:</p>
                            <p class="checkout__summary--order--info--total">$84.00</p>
                        </div>
                    </div>

                    <div class="checkout__summary--payment">
                        <p class="checkout__summary--payment--title">Payment Method</p>
                        <div class="checkout__summary--payment--options">
                            <div class="d-flex align-items-center">
                                <input type="radio" name="" id="firstPayment">
                                <label for="firstPayment">Cash on Delivery</label>
                            </div>
                            <div class="d-flex align-items-center">
                                <input type="radio" name="" id="secondPayment">
                                <label for="secondPayment">ATM</label>
                            </div>
                            <div class="d-flex align-items-center">
                                <input type="radio" name="" id="thirdPayment">
                                <label for="thirdPayment">Electronic wallet</label>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="checkout__summary--btn btn-primary border-0">Place Order</button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
$content = ob_get_contents();
ob_end_clean();
require_once('./mvc/views/template.php');
?>