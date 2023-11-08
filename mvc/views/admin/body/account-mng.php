<div class="admin__content--products--category admin__content--products">
    <div class="container-xl">
        <div class="admin__content--products--header">
            <div class="d-flex align-items-center justify-content-between">
                <p class="admin__content--products--header--title">Account</p>
                <button class="admin__content--products--header--add user__tab--link">
                    <i class="icon-plus"></i>
                    <span>Add Account</span>
                </button>
            </div>
            <div class="d-flex align-items-center justify-content-between">
                <div class="admin__content--products--header--search d-flex gap-1">
                    <button class="icon-search bg-white border-0"></button>
                    <input type="text" placeholder="Search account...">
                </div>
                <div class="admin__content--products--header--filter d-flex gap-4">
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
                            <th>ID</th>
                            <th>Role</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Created</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php for ($i = 0; $i < 10; $i++) : ?>
                            <tr>
                                <td><?php echo $i + 1 ?></td>
                                <td>#1</td>
                                <td>Admin</td>
                                <td>Nguyen Minh Tuan</td>
                                <td>minhtuannguyen0504@gmai.com</td>
                                <td>123456789</td>
                                <td>11/08/2023</td>
                                <td><div class="published">Active</div></td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <button class="border-0 bg-white action-btn" data-bs-toggle="modal" data-bs-target="#productDetailManagement">
                                            <i class="icon-edit"></i>
                                        </button>
                                        <?php include "./mvc/views/admin/body/product-detail.php" ?>
                                        <button class="border-0 bg-white action-btn" data-bs-toggle="modal" data-bs-target="#removeConfirm">
                                            <i class="icon-bin"></i>
                                        </button>
                                        <!-- Confirm Modal -->
                                        <div class="modal fade" id="removeConfirm">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <i class="icon-info"></i>
                                                        <p class="mt-2 mb-4">Are you sure you want to delete?</p>
                                                        <div class="d-flex gap-4">
                                                            <button type="button" class="btn btn-danger w-100" data-bs-dismiss="modal">No</button>
                                                            <button class="btn w-100">Yes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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