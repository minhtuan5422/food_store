<?php
$pageTitle = "About";
ob_start();
?>

<?php require_once "./mvc/views/partials/breadcrumb.php" ?>

<div class="cart">
    <div class="container-xl">
        <h5>My Shopping Cart</h5>
        <div class="row">
            <div class="col-lg-8">
                <div class="table-responsive-sm">
                    <table class="cart__table">
                        <thead class="rounded">
                            <tr>
                                <th class="cart__table--head">Product</th>
                                <th class="cart__table--head">price</th>
                                <th class="cart__table--head">Quantity</th>
                                <th class="cart__table--head">Subtotal</th>
                                <th class="cart__table--head"></th>
                            </tr>
                        </thead>
    
                        <tbody>
                            <tr class="cart__table--body">
                                <td class="d-flex align-items-center gap-3">
                                    <img src=<?php echo IMG_PATH . "product-img.png" ?> alt="product">
                                    <p>Green Capsicum</p>
                                </td>
                                <td>$14.00</td>
                                <td>
                                    <div class="product-detail__right--action--dispatch d-flex align-items-center">
                                        <button class="product-detail__right--action--btn">-</button>
                                        <input type="text" class="product-detail__right--action--quantity" value="5" readonly>
                                        <button class="product-detail__right--action--btn">+</button>
                                    </div>
                                </td>
                                <td>$70.00</td>
                                <td>
                                    <button class="cart__table--body--action bg-white">
                                        <i class="icon-plus text-center"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr class="cart__table--body">
                                <td>
                                    <img src=<?php echo IMG_PATH . "product-img.png" ?> alt="product">
                                </td>
                                <td>$14.00</td>
                                <td>
                                    <div class="product-detail__right--action--dispatch d-flex align-items-center">
                                        <button class="product-detail__right--action--btn">-</button>
                                        <input type="text" class="product-detail__right--action--quantity" value="5" readonly>
                                        <button class="product-detail__right--action--btn">+</button>
                                    </div>
                                </td>
                                <td>$70.00</td>
                                <td>
                                    <button class="cart__table--body--action bg-white">
                                        <i class="icon-plus"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" class="d-flex">
                                    <a href="#" class="cart__table--body--btn">Return to shop</a>
                                </td>
                                <td colspan="4">
                                    <button class="cart__table--body--btn btn-more">Update Cart</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="cart__code align-items-center justify-content-between">
                    <p>Coupon Code</p>
                    <div class="w-100 footer-child__email">
                        <input type="text" placeholder="Your email address">
                        <button>Apply Coupon</button>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="cart__checkout">
                    <p class="cart__checkout--title">Cart Total</p>
                    <div class="cart__checkout--flex d-flex align-items-center justify-content-between">
                        <p class="cart__checkout--info">Subtotal:</p>
                        <p class="cart__checkout--price">$84.00</p>
                    </div>
                    <div class="cart__checkout--flex d-flex align-items-center justify-content-between">
                        <p class="cart__checkout--info">Shipping:</p>
                        <p class="cart__checkout--price">Free</p>
                    </div>
                    <div class="cart__checkout--flex d-flex align-items-center justify-content-between">
                        <p class="cart__checkout--info">Total:</p>
                        <p class="cart__checkout--price">$84.00</p>
                    </div>
                    <a href="#" class="cart__checkout--link">Proceed to checkout</a>
                </div>
            </div>
        </div>
    </div>

    <?php require_once "./mvc/views/partials/footer-child.php" ?>
</div>

<?php
$content = ob_get_contents();
ob_end_clean();
require_once('./mvc/views/template.php');
?>