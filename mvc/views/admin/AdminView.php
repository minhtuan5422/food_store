<?php
$pageTitle = "Admin Dashboard";
ob_start();
?>

<div class="admin d-flex">
    <div class="admin__sidebar">
        <div class="admin__sidebar--label d-flex gap-3">
            <img src=<?php echo IMG_PATH . "Dashlab.svg" ?> alt="label">
            <p>Admin</p>
        </div>

        <div class="tab">
            <button class="user__tab--link" data-view="dashboard">
                <i class="icon-grid"></i>
                <span>Dashboard</span>
            </button>
            <div class="tab__product">
                <button data-bs-toggle="collapse" data-bs-target="#tabProduct" class="tab__product--expand d-flex align-items-center justify-content-between w-100 border-0">
                    <div class="d-flex align-items-center gap-2">
                        <i class="icon-align-justify"></i>
                        <span>Product</span>
                    </div>
                    <i class="tab__product--icon icon-chevron-right"></i>
                </button>
                <div id="tabProduct" class="collapse">
                    <button class="user__tab--link user__tab--product" data-view="productListManagement">Product List</button>
                    <button class="user__tab--link user__tab--product" data-view="productCategoryManagement">Product Category</button>
                </div>
            </div>
            <button class="user__tab--link" data-view="orderManagement">
                <i class="icon-shopping-cart"></i>
                <span>Orders</span>
            </button>
            <button class="user__tab--link" data-view="userManagement">
                <i class="icon-user"></i>
                <span>User</span>
            </button>
            <button class="user__tab--link" data-view="accountManagement">
                <i class="icon-lock"></i>
                <span>Account</span>
            </button>
            <button class="user__tab--link" data-view="articleManagement">
                <i class="icon-file-text"></i>
                <span>Article</span>
            </button>
            <button class="user__tab--link" data-view="providerManagement">
                <i class="icon-support_agent"></i>
                <span>Provider</span>
            </button>
            <button class="user__tab--link" data-view="sellerManagement">
                <i class="icon-sale"></i>
                <span>Seller</span>
            </button>
        </div>

        <div class="">

        </div>
    </div>

    <div class="admin__content">
        <div class="admin__content--header">
            <div class="d-flex align-items-center gap-4">
                <div class="dropdown dropdown-menu-end">
                    <button type="button" class="icon-search border-0 bg-white" data-bs-toggle="dropdown"></button>
                    <div class="dropdown-menu mt-2">
                        <form class="admin__content--header--search d-flex">
                            <input type="text" class="admin__content--header--search" placeholder="Search...">
                            <button type="submit" class="icon-search"></button>
                        </form>
                    </div>
                </div>
                <button class="border-0 bg-transparent">
                    <i class="icon-bell1"></i>
                </button>
            </div>
            <div class="admin__content--header--divider"></div>
            <div class="admin__content--header--info d-flex align-items-center gap-3">
                <?php
                $db = new DB();
                if (isset($_SESSION['email'])) :
                    $email = $_SESSION['email'];
                ?>
                    <img src=
                    <?php 
                        $sql = "SELECT img_avatar FROM user
                        JOIN account ON account.email = '$email'
                        AND account.id_user = user.id_user";
                        $image = $db->selectSingleItem($sql);
                        echo $image[0] ? $image[0] : "https://cdn-icons-png.flaticon.com/512/3541/3541871.png";
                    ?> alt="avatar">
                    <div class="admin__content--header--info--detail">
                        <p>
                            <?php
                            $sql = "SELECT name FROM user
                            JOIN account ON account.email = '$email'
                            AND account.id_user = user.id_user";
                            $fullName = $db->selectSingleItem($sql);
                            echo $fullName[0] ? $fullName[0] : $email;
                            ?>
                        </p>
                        <p class="text-capitalize">
                            <?php
                            $sql = "SELECT name FROM role
                            JOIN account ON account.email = '$email'
                            AND account.id_role = role.id_role";
                            $roleName = $db->selectSingleItem($sql);
                            echo $roleName[0];
                            ?>
                        </p>
                    <?php endif ?>
                    </div>
                    <div class="dropdown dropdown-menu-end">
                        <button type="button" class="icon-chevron-right bg-white border-0 rotate-90" data-bs-toggle="dropdown"></button>
                        <ul class="dropdown-menu mt-1">
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="<?php echo PUBLIC_URL ?>">
                                    <i class="icon-spinner"></i>
                                    <span class="ms-2">Back to website</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="./mvc/controllers/Logout.php">
                                    <i class="icon-enter"></i>
                                    <span class="ms-2">Logout</span>
                                </a>
                            </li>
                        </ul>
                    </div>
            </div>
        </div>

        <div class="container-xl">
            <div id="dashboard" class="user__content">
                <?php require_once './mvc/views/admin/body/dashboard.php' ?>
            </div>

            <div id="productListManagement" class="user__content">
                <?php require_once './mvc/views/admin/body/products-list.php' ?>
            </div>

            <div id="addProduct" class="user__content">
                <?php require_once './mvc/views/admin/body/product-add.php' ?>
            </div>

            <div id="productCategoryManagement" class="user__content">
                <?php require_once './mvc/views/admin/body/product-category.php' ?>
            </div>

            <div id="orderManagement" class="user__content">
                <?php require_once './mvc/views/admin/body/order-mng.php' ?>
            </div>

            <div id="userManagement" class="user__content">
                <?php require_once './mvc/views/admin/body/user-mng.php' ?>
            </div>

            <div id="userDetailManagement" class="user__content">
                <?php require_once './mvc/views/admin/body/user-detail.php' ?>
            </div>

            <div id="accountManagement" class="user__content">
                <?php require_once './mvc/views/admin/body/account-mng.php' ?>
            </div>

            <div id="articleManagement" class="user__content">
                <?php require_once './mvc/views/admin/body/article-mng.php' ?>
            </div>

            <div id="providerManagement" class="user__content">
                <?php require_once './mvc/views/admin/body/supplier-mng.php' ?>
            </div>

            <div id="sellerManagement" class="user__content">
                <h3>sellerManagement</h3>
            </div>
        </div>
    </div>
</div>

<?php
$content = ob_get_contents();
ob_end_clean();
require_once('./mvc/views/clear-template.php');
?>