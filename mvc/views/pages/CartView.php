<?php
$pageTitle = "Cart";
ob_start();
$currentPage = "Cart";
require_once "./mvc/views/partials/breadcrumb.php"
?>

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
                            <?php
                            $total = 0;
                            foreach ($data['productsInCart'] as $product) :
                                $pathUrl = "D:Projectsfood_storepublicimgs";
                                $imageFileName = substr($product['img'], strlen($pathUrl));
                                $subTotal = $product['price'] * $product['total_quantity'];
                                $total += $subTotal;
                            ?>
                                <tr class="cart__table--body">
                                    <td class="d-flex align-items-center gap-3">
                                        <img src=<?php echo IMG_PATH . $imageFileName ?> class="p-3 rounded-5" alt="product">
                                        <p class="cart__table--body--name"><?php echo $product['name'] ?></p>
                                    </td>
                                    <td><?php echo number_format($product['price'], 0, ',', '.') . "đ" ?></td>
                                    <td>
                                        <div class="product-detail__right--action--dispatch d-flex align-items-center">
                                            <button class="product-detail__right--action--btn">-</button>
                                            <input type="text" class="product-detail__right--action--quantity" value="<?php echo $product['total_quantity'] ?>" readonly>
                                            <button class="product-detail__right--action--btn">+</button>
                                        </div>
                                    </td>
                                    <td><?php echo number_format($subTotal, 0, ',', '.') . "đ" ?></td>
                                    <td>
                                        <button class="cart__table--body--action bg-white">
                                            <i class="icon-plus text-center"></i>
                                        </button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>

                            <tr>
                                <td colspan="2" class="d-flex">
                                    <a href=<?php echo PUBLIC_URL . "product" ?> class="cart__table--body--btn">Return to shop</a>
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
                        <p class="cart__checkout--price"><?php echo $total ?></p>
                    </div>
                    <div class="cart__checkout--flex d-flex align-items-center justify-content-between">
                        <p class="cart__checkout--info">Shipping:</p>
                        <p class="cart__checkout--price">Free</p>
                    </div>
                    <div class="cart__checkout--flex d-flex align-items-center justify-content-between">
                        <p class="cart__checkout--info">Total:</p>
                        <p class="cart__checkout--price"><?php echo $total ?></p>
                    </div>
                    <a href=<?php echo PUBLIC_URL . "checkout" ?> class="cart__checkout--link">Proceed to checkout</a>
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