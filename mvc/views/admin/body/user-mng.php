<div class="admin__content--products">
    <div class="container-xl">
        <div class="admin__content--products--header">
            <div class="d-flex align-items-center justify-content-between">
                <p class="admin__content--products--header--title">User</p>
                <button class="admin__content--products--header--add user__tab--link" onclick="openUserDashboard(event, 'addProduct')">
                    <i class="icon-plus"></i>
                    <span>Add User</span>
                </button>
            </div>
            <div class="d-flex align-items-center justify-content-between">
                <div class="admin__content--products--header--search d-flex gap-1">
                    <button class="icon-search bg-white border-0"></button>
                    <input type="text" placeholder="Search user...">
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
                            <th>Role</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Orders</th>
                            <th>Balance</th>
                            <th>Status</th>
                            <th>Created</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php for ($i = 0; $i < 10; $i++) : ?>
                            <tr>
                                <td>Customer</td>
                                <td class="d-flex align-items-center gap-3">
                                    <img src=<?php echo IMG_PATH . "about-avt3.png" ?> alt="product">
                                    <p>John Bushmill</p>
                                </td>
                                <td>johnbush111@gmail.com</td>
                                <td>0987654321</td>
                                <td>45</td>
                                <td>$121.00</td>
                                <td>
                                    <div class="published">
                                        <p>Active</p>
                                    </div>
                                </td>
                                <td>29 Dec 2022</td>
                                <td>
                                    <div class="d-flex gap-2 align-items-center">
                                        <a href="#" class="ms-4 action-btn">
                                            <i class="icon-eye"></i>
                                        </a>
                                        <button class="border-0 bg-white action-btn">
                                            <i class="icon-edit"></i>
                                        </button>
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