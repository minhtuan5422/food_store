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
                    <h3>Shopping Cart</h3>
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