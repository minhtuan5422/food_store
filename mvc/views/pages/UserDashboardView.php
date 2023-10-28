<?php
$pageTitle = "Login";
ob_start();
?>

<?php require_once "./mvc/views/partials/breadcrumb.php" ?>

<div class="user">
    <div class="container-xl">
        <div class="row">
            <div class="col-lg-3">
                <div class="user__tab">
                    <p class="user__tab--title">Navigation</p>
                    <button class="user__tab--link active" onclick="openUserDashboard(event, 'dashboard')">
                        <i class="icon-dashboard"></i>
                        <span>Dashboard</span>
                    </button>
                    <button class="user__tab--link" onclick="openUserDashboard(event, 'orderHistory')">
                        <i class="icon-repeat"></i>
                        <span>Order History</span>
                    </button>
                    <button class="user__tab--link" onclick="openUserDashboard(event, 'wishlist')">
                        <i class="icon-heart"></i>
                        <span>Wishlist</span>
                    </button>
                    <button class="user__tab--link" onclick="openUserDashboard(event, 'shoppingCart')">
                        <i class="icon-shopping-cart"></i>
                        <span>Shopping Cart</span>
                    </button>
                    <button class="user__tab--link" onclick="openUserDashboard(event, 'settings')">
                        <i class="icon-control"></i>
                        <span>Settings</span>
                    </button>
                    <button class="user__tab--link" onclick="openUserDashboard(event, 'logout')">
                        <i class="icon-enter"></i>
                        <span>Log-out</span>
                    </button>
                </div>
            </div>

            <div class="col-lg-9">
                <div id="dashboard" class="user__content">
                    <div class="user__content--wrap justify-content-between">
                        <div class="user__content--profile">
                            <img src=<?php echo IMG_PATH . "about-avt3.png" ?> alt="avatar">
                            <p class="user__content--profile--name">Dianne Russell</p>
                            <p class="user__content--profile--role">Customer</p>
                            <a href="">Edit Profile</a>
                        </div>

                        <div class="user__content--address">
                            <p>Billing Address</p>
                            <p>Dainne Russell</p>
                            <p>4140 Parker Rd. Allentown, New Mexico 31134</p>
                            <p>dainne.ressell@gmail.com</p>
                            <p>(671) 555-0110</p>
                            <a href="">Edit Address</a>
                        </div>
                    </div>

                    <div class="user__content--order">
                        <div class="user__content--order--header d-flex align-items-center justify-content-between">
                            <p>Recet Order History</p>
                            <a href="#">View All</a>
                        </div>

                        <div class="overflow-auto">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Order ID</th>
                                        <th>Date</th>
                                        <th>Total</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>#738</td>
                                        <td>8 Sep, 2020</td>
                                        <td>$135.00 (5 Products)</td>
                                        <td>Processing</td>
                                        <td>
                                            <a href="#">View Details</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#738</td>
                                        <td>8 Sep, 2020</td>
                                        <td>$135.00 (5 Products)</td>
                                        <td>Processing</td>
                                        <td>
                                            <a href="#">View Details</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div id="orderHistory" class="user__content">
                    <div class="user__content--order">
                        <div class="user__content--order--header d-flex align-items-center justify-content-between">
                            <p>Recet Order History</p>
                            <a href="#">View All</a>
                        </div>

                        <div class="overflow-auto">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Order ID</th>
                                        <th>Date</th>
                                        <th>Total</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php for ($i = 0; $i < 12; $i++) : ?>
                                        <tr>
                                            <td>#738</td>
                                            <td>8 Sep, 2020</td>
                                            <td>$135.00 (5 Products)</td>
                                            <td>Processing</td>
                                            <td>
                                                <a href="#">View Details</a>
                                            </td>
                                        </tr>
                                    <?php endfor ?>
                                </tbody>
                            </table>
                        </div>

                        <?php require_once "./mvc/views/partials/pagination.php" ?>
                    </div>
                </div>

                <div id="wishlist" class="user__content">
                    <h3>Wishlist</h3>
                </div>

                <div id="shoppingCart" class="user__content">
                    <div class="user__content--order">
                        <div class="user__content--order--header d-flex align-items-center justify-content-between">
                            <div class="header-flex align-items-center gap-4">
                                <p>Order Details</p>
                                <p class="user__content--order--header--detail">April 24, 2021</p>
                                <p class="user__content--order--header--detail">3 Products</p>
                            </div>
                            <a href="#">Back to List</a>
                        </div>

                        <div class="user__content--order--detail">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="user__content--order--detail--info">
                                        <p class="info-title">Billing Address</p>
                                        <div class="info-body">
                                            <p>Dainne Russell</p>
                                            <p class="mt-2">4140 Parker Rd. Allentown, New Mexico 31134</p>
                                            <div class="info-body__email">
                                                <p>Email</p>
                                                <p class="mt-1">dainne.ressell@gmail.com</p>
                                            </div>
                                            <div class="info-body__phone">
                                                <p>Phone</p>
                                                <p class="mt-1">(671) 555-0110</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-5">
                                    <div class="user__content--order--detail--total">
                                        <div class="user__content--order--detail--total--header d-flex align-items-center justify-content-between">
                                            <div class="header-title">
                                                <p class="total-title">Order ID:</p>
                                                <p>#4152</p>
                                            </div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="4" height="20" viewBox="0 0 2 40" fill="none">
                                                <path d="M1 0L1 40" stroke="#E6E6E6" />
                                            </svg>
                                            <div class="header-title">
                                                <p class="total-title">Payment Method:</p>
                                                <p>Paypal</p>
                                            </div>
                                        </div>

                                        <div class="user__content--order--detail--total--body">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <p>Subtotal:</p>
                                                <p>$365.00</p>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-3">
                                                <p>Discount</p>
                                                <p>20%</p>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-3">
                                                <p>Shipping</p>
                                                <p>Free</p>
                                            </div>
                                            <div class="last-flex d-flex align-items-center justify-content-between mt-3">
                                                <p>Total</p>
                                                <p>$84.00</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="user__content--order--detail--process">
                                <div class="progress">
                                    <div class="progress-bar" style="width:25%"></div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mt-2">
                                    <p>Order received</p>
                                    <p>Processing</p>
                                    <p>On the way</p>
                                    <p>Delivered</p>
                                </div>
                            </div>

                            <div class="table-responsive-sm">
                                <table class="cart__table">
                                    <thead class="rounded">
                                        <tr>
                                            <th class="cart__table--head">Product</th>
                                            <th class="cart__table--head">price</th>
                                            <th class="cart__table--head">Quantity</th>
                                            <th class="cart__table--head">Subtotal</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr class="cart__table--body">
                                            <td class="d-flex align-items-center gap-3">
                                                <img src=<?php echo IMG_PATH . "product-img.png" ?> alt="product">
                                                <p>Green Capsicum</p>
                                            </td>
                                            <td>$14.00</td>
                                            <td>x5</td>
                                            <td>$70.00</td>
                                        </tr>
                                        <tr class="cart__table--body">
                                            <td class="d-flex align-items-center gap-3">
                                                <img src=<?php echo IMG_PATH . "product-img.png" ?> alt="product">
                                                <p>Green Capsicum</p>
                                            </td>
                                            <td>$14.00</td>
                                            <td>x5</td>
                                            <td>$70.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="settings" class="user__content">
                    <div class="user__content--account">
                        <p class="title">Account Settings</p>
                        <div class="user__content--account--body">
                            <div class="user__content--account--body--left">
                                <div class="w-100 d-flex flex-column gap-2">
                                    <label for="checkout-fullName">Full name</label>
                                    <input type="text" id="checkout-fullName" defaultValue="Dianne" required>
                                </div>
                                <div class="w-100 d-flex flex-column gap-2">
                                    <label for="checkout-fullName">Email</label>
                                    <input type="email" id="checkout-fullName" defaultValue="dianne.russell@gmail.com" required>
                                </div>
                                <div class="w-100 d-flex flex-column gap-2">
                                    <label for="checkout-fullName">Phone Number</label>
                                    <input type="text" id="checkout-fullName" defaultValue="(603) 555-0123" required>
                                </div>
                                <button type="submit" class="">Save Changes</button>
                            </div>

                            <div class="user__content--account--body--right">
                                <img src=<?php echo IMG_PATH . "about-avt3.png" ?> alt="avatar">
                                <input type="file" class="border-0" />
                            </div>
                        </div>
                    </div>

                    <div class="user__content--billing">
                        <p class="title">Billing Address</p>
                        <div class="user__content--billing--form checkout__info--form">
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
                            <button type="submit">Save Changes</button>
                        </div>
                    </div>

                    <div class="user__content--password">
                        <p class="title">Change Password</p>

                        <form class="user__content--password--form">
                            <div class="d-flex flex-column gap-2">
                                <label>Current Password</label>
                                <div class="position-relative">
                                    <input type="password" name="" class="w-100" placeholder="Password">
                                    <button class="border-0 p-0 bg-white position-absolute">
                                        <i class="icon-eye"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="user__content--password--form--flex">
                                <div class="flex-6">
                                    <label for="" class="mb-2">New Password Password</label>
                                    <div class="position-relative">
                                        <input type="password" name="" class="w-100" placeholder="Password">
                                        <button class="border-0 p-0 bg-white position-absolute">
                                            <i class="icon-eye"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="flex-6 flex-6-last">
                                    <label for="" class="mb-2">Confirm Password</label>
                                    <div class="position-relative">
                                        <input type="password" name="" class="w-100" placeholder="Password">
                                        <button class="border-0 p-0 bg-white position-absolute">
                                            <i class="icon-eye"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="mt-4">Change Password</button>
                        </form>
                    </div>
                </div>

                <div id="logout" class="user__content"></div>
            </div>
        </div>
    </div>
</div>

<?php
require_once "./mvc/views/partials/footer-child.php";
$content = ob_get_contents();
ob_end_clean();
require_once('./mvc/views/template.php');
?>