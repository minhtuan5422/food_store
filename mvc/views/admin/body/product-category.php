<div class="admin__content--products--category admin__content--products">
    <div class="container-xl">
        <div class="admin__content--products--header">
            <div class="d-flex align-items-center justify-content-between">
                <p class="admin__content--products--header--title">Categories</p>
                <button class="admin__content--products--header--add user__tab--link" data-bs-toggle="modal" data-bs-target="#addProductCategory">
                    <i class="icon-plus"></i>
                    <span>Add Category</span>
                </button>
                <!-- Modal Add Category -->
                <div id="addProductCategory" class="modal fade">
                    <div class="product-category-add product-add modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="product-add__body modal-body">
                                <div class="d-flex gap-3 align-items-center mb-3">
                                    <label>Category name</label>
                                    <input type="text" placeholder="Enter category name">
                                </div>
                                <div class="d-flex gap-4">
                                    <button type="button" class="btn btn-danger w-100" data-bs-dismiss="modal">No</button>
                                    <button class="btn w-100">Yes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
                <div class="admin__content--products--header--search d-flex gap-1">
                    <button class="icon-search bg-white border-0"></button>
                    <input type="text" placeholder="Search category...">
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
                            <th>ID</th>
                            <th>Category</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php 
                        foreach ($data['productCategories'] as $category) {
                        ?>
                            <tr>
                                <td><?php echo "#" . $category['id_category']?></td>
                                <td><?php echo $category['name']?></td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <button class="border-0 bg-white action-btn" data-bs-toggle="modal" data-bs-toggle="modal" data-bs-target="#addProductCategory">
                                            <i class="icon-edit"></i>
                                        </button>
                                        <?php include "./mvc/views/admin/body/product-detail.php" ?>
                                        <button class="border-0 bg-white action-btn" data-bs-toggle="modal" data-bs-target="#removeProductCategory">
                                            <i class="icon-bin"></i>
                                        </button>
                                        <!-- Confirm Modal -->
                                        <div class="modal fade" id="removeProductCategory">
                                            <div class="product-category-add modal-dialog modal-dialog-centered">
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
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="my-4">
            <?php include "./mvc/views/partials/pagination.php" ?>
        </div>
    </div>
</div>