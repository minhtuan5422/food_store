<div class="admin__content--products--category admin__content--products">
    <div class="container-xl">
        <div class="admin__content--products--header">
            <div class="d-flex align-items-center justify-content-between">
                <p class="admin__content--products--header--title">Supplier</p>
                <button class="admin__content--products--header--add user__tab--link" onclick="openUserDashboard(event, 'addProduct')">
                    <i class="icon-plus"></i>
                    <span>Add Supplier</span>
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
                            <th>Serial</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php for ($i = 0; $i < 10; $i++) : ?>
                            <tr>
                                <td><?php echo $i + 1?></td>
                                <td>Fresh Food</td>
                                <td>f**********@gmail.com</td>
                                <td>0987654321</td>
                                <td>HCM</td>
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