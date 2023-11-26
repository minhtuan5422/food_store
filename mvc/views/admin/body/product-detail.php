<div class="modal fade" id="productDetailManagement">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Product Details</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="container-xl">
                    <?php if($data['productUpdateSelected']) {?>
                    <form method="POST">
                        <div class="product-add admin__content--products--header">
                            <div class="product-add__header d-flex align-items-center justify-content-end">
                                <div class="d-flex align-items-center gap-4">
                                    <button class="d-none"></button>
                                    <button type="submit" name="updateProductBtn" class="admin__content--products--header--add user__tab--link js-update-product">
                                        <i class="icon-download"></i>
                                        <span>Save Product</span>
                                    </button>
                                </div>
                            </div>
    
                            <div class="product-add__body">
                                <div class="row">
                                    <div class="col-md-9">
                                        <div class="product-add__body--info">
                                            <p class="info-title">General Information</p>
                                            <div class="d-flex flex-column gap-1">
                                                <label>Product Name</label>
                                                <input type="text" name="editProductName" value="<?php echo $data['productUpdateSelected']['name']; ?>" placeholder="Type product name here. . .">
                                            </div>
                                            <div class="d-flex flex-column gap-1">
                                                <label>Description</label>
                                                <textarea rows="6" col="80" placeholder="Type product description here. . ."></textarea>
                                            </div>
                                        </div>
    
                                        <div class="product-add__body--info">
                                            <p class="info-title">Media</p>
                                            <div class="d-flex flex-column gap-1">
                                                <label>Avatar</label>
                                                <input type="file">
                                                <input type="text" readonly>
                                            </div>
                                            <div class="d-flex flex-column gap-1">
                                                <label>Images group</label>
                                                <input type="file">
                                            </div>
                                        </div>
    
                                        <div class="product-add__body--info">
                                            <p class="info-title">Pricing</p>
                                            <div class="d-flex flex-column gap-1">
                                                <label>Base price</label>
                                                <input type="text" placeholder="Type base price here. . .">
                                            </div>
                                            <div>
                                                <label>Discount Type</label>
                                                <select name="" id="" class="ms-2">
                                                    <option value="" selected>0%</option>
                                                    <option value="">15%</option>
                                                    <option value="">20%</option>
                                                    <option value="">25%</option>
                                                    <option value="">30%</option>
                                                    <option value="">35%</option>
                                                    <option value="">40%</option>
                                                    <option value="">45%</option>
                                                    <option value="">50%</option>
                                                    <option value="">55%</option>
                                                    <option value="">60%</option>
                                                    <option value="">65%</option>
                                                    <option value="">70%</option>
                                                    <option value="">75%</option>
                                                </select>
                                            </div>
                                        </div>
    
                                        <div class="product-add__body--info">
                                            <p class="info-title">Inventory</p>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="d-flex flex-column gap-1">
                                                        <label>Brand</label>
                                                        <input type="text" placeholder="Type product brand here. . .">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="d-flex flex-column gap-1">
                                                        <label>Weight</label>
                                                        <input type="text1" placeholder="Type product weight here. . .">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="d-flex flex-column gap-1">
                                                        <label>Quantity</label>
                                                        <input type="text" placeholder="Type product quantity here. . .">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="d-flex flex-column gap-1">
                                                        <label>Origin</label>
                                                        <input type="text" placeholder="Type product origin here. . .">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="d-flex flex-column gap-1">
                                                        <label>Date manufacture</label>
                                                        <input type="date"  placeholder="Type product weight here. . .">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="d-flex flex-column gap-1">
                                                        <label>Date expiry</label>
                                                        <input type="date" placeholder="Type product quantity here. . .">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col-md-3">
                                        <div class="product-add__body--info">
                                            <p class="info-title">Category</p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <label>Product Category</label>
                                                <select name="" id="" class="ms-2">
                                                    <?php foreach ($data['productCategories'] as $category) { ?>
                                                        <option value="<?php echo $category['id_category'] ?>" <?php echo $category['id_category'] === $product['id_category'] ? 'selected' : ''; ?>>
                                                            <?php echo $category['name'] ?>
                                                        </option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <?php } ?>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>