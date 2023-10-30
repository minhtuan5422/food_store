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
            <button class="user__tab--link" onclick="openUserDashboard(event, 'dashboard')">
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
                    <button class="user__tab--link user__tab--product" onclick="openUserDashboard(event, 'productListManagement')">Product List</button>
                    <button class="user__tab--link user__tab--product" onclick="openUserDashboard(event, 'productCategoryManagement')">Product Category</button>
                </div>
           </div>
            <button class="user__tab--link" onclick="openUserDashboard(event, 'orderManagement')">
                <i class="icon-shopping-cart"></i>
                <span>Orders</span>
            </button>
            <button class="user__tab--link" onclick="openUserDashboard(event, 'userManagement')">
                <i class="icon-user"></i>
                <span>User</span>
            </button>
            <button class="user__tab--link" onclick="openUserDashboard(event, 'accountManagement')">
                <i class="icon-lock"></i>
                <span>Account</span>
            </button>
            <button class="user__tab--link" onclick="openUserDashboard(event, 'articleManagement')">
                <i class="icon-file-text"></i>
                <span>Article</span>
            </button>
            <button class="user__tab--link" onclick="openUserDashboard(event, 'providerManagement')">
                <i class="icon-support_agent"></i>
                <span>Provider</span>
            </button>
            <button class="user__tab--link" onclick="openUserDashboard(event, 'sellerManagement')">
                <i class="icon-sale"></i>
                <span>Seller</span>
            </button>
        </div>

        <div class="">

        </div>
    </div>

    <div class="admin__content">
        <div class="container-xl">
            <div id="dashboard" class="user__content">
                <h3>London</h3>
                <p>London is the capital city of England.</p>
            </div>

            <div id="productListManagement" class="user__content">
                <h3>productListManagement</h3>
            </div>

            <div id="productCategoryManagement" class="user__content">
                <h3>productCategoryManagement</h3>
            </div>

            <div id="orderManagement" class="user__content">
                <h3>orderManagement</h3>
            </div>

            <div id="userManagement" class="user__content">
                <h3>userManagement</h3>
            </div>

            <div id="accountManagement" class="user__content">
                <h3>accountManagement</h3>
            </div>

            <div id="articleManagement" class="user__content">
                <h3>articleManagement</h3>
            </div>

            <div id="providerManagement" class="user__content">
                <h3>providerManagement</h3>
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