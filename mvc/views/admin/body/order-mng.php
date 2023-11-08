<div class="admin__content--products">
    <div class="container-xl">
        <div class="admin__content--products--header">
            <div class="d-flex align-items-center justify-content-between">
                <p class="admin__content--products--header--title">Order</p>
                <button class="admin__content--products--header--add user__tab--link" onclick="openUserDashboard(event, 'addProduct')">
                    <i class="icon-plus"></i>
                    <span>Add Order</span>
                </button>
            </div>
            <div class="admin__content--dashboard--header d-flex align-items-center justify-content-between">
                <div class="button-group d-flex align-items-center">
                    <button class="active">All Time</button>
                    <button>12 Months</button>
                    <button>30 Days</button>
                    <button>7 Days</button>
                    <button>24 Hour</button>
                </div>
                <div class="admin__content--products--header--filter d-flex gap-4">
                    <button class="icon-printer d-flex align-items-cer gap-2 border-0">Export</button>
                    <button class="admin__content--dashboard--selling--filter">
                        <i class="icon-adjust"></i>
                        <span>Filters</span>
                    </button>
                </div>
            </div>
        </div>

        <div class="admin__content--dashboard--orders admin__content--dashboard--selling">
            <div class="user__content--order overflow-auto">
                <table>
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Product</th>
                            <th>Date</th>
                            <th>Customer</th>
                            <th>Total</th>
                            <th>Payment</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php for ($i = 0; $i < 10; $i++) : ?>
                            <tr>
                                <td>#302012</td>
                                <td class="d-flex align-items-center gap-3">
                                    <img src=<?php echo IMG_PATH . "product-img.png" ?> alt="product">
                                    <p>Green Capsicum</p>
                                </td>
                                <td>5 hour ago</td>
                                <td>
                                    <p>John Bushmill</p>
                                    <p>Johnb@mail.com</p>
                                </td>
                                <td>$121.00</td>
                                <td>Transfer</td>
                                <td>
                                    <p>Published</p>
                                </td>
                                <td>
                                    <div class="d-flex gap-2 align-items-center">
                                        <button class="border-0 bg-white action-btn" data-bs-toggle="modal" data-bs-target="#orderDetailManagement">
                                            <i class="icon-edit"></i>
                                        </button>
                                        <?php require_once "./mvc/views/admin/body/order-detail.php" ?>
                                    </div>
                                </td>
                            </tr>
                        <?php endfor ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="my-4">
            <?php include "./mvc/views/partials/pagination.php" ?>
        </div>
    </div>
</div>