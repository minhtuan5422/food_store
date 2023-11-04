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
                    <div class="product-add admin__content--products--header">
                        <div class="product-add__header d-flex align-items-center justify-content-end">
                            <div class="d-flex align-items-center gap-4">
                                <button class="admin__content--products--header--add user__tab--link" onclick="openUserDashboard(event, 'productListManagement')">
                                    <i class="icon-plus rotate-90"></i>
                                    <span>Cancel</span>
                                </button>
                                <button class="admin__content--products--header--add user__tab--link" onclick="openUserDashboard(event, 'addProduct')">
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
                                            <label for="">Product Name</label>
                                            <input type="text" placeholder="Type product name here. . .">
                                        </div>
                                        <div class="d-flex flex-column gap-1">
                                            <label for="">Description</label>
                                            <textarea rows="6" col="80" placeholder="Type product description here. . ."></textarea>
                                        </div>
                                    </div>

                                    <div class="product-add__body--info">
                                        <p class="info-title">Media</p>
                                        <div class="d-flex flex-column gap-1">
                                            <label for="">Avatar</label>
                                            <input type="file">
                                        </div>
                                        <div class="d-flex flex-column gap-1">
                                            <label for="">Images group</label>
                                            <input type="file">
                                        </div>
                                    </div>

                                    <div class="product-add__body--info">
                                        <p class="info-title">Pricing</p>
                                        <div class="d-flex flex-column gap-1">
                                            <label for="">Base price</label>
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
                                                    <label for="">Brand</label>
                                                    <input type="text" placeholder="Type product brand here. . .">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="d-flex flex-column gap-1">
                                                    <label for="">Weight</label>
                                                    <input type="text" placeholder="Type product weight here. . .">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="d-flex flex-column gap-1">
                                                    <label for="">Quantity</label>
                                                    <input type="text" placeholder="Type product quantity here. . .">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="d-flex flex-column gap-1">
                                                    <label for="">Origin</label>
                                                    <input type="text" placeholder="Type product origin here. . .">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="d-flex flex-column gap-1">
                                                    <label for="">Date manufacture</label>
                                                    <input type="date" placeholder="Type product weight here. . .">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="d-flex flex-column gap-1">
                                                    <label for="">Date expiry</label>
                                                    <input type="date" placeholder="Type product quantity here. . .">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="product-add__body--info">
                                        <p class="info-title">Category</p>
                                        <div>
                                            <label>Product Category</label>
                                            <select name="" id="" class="ms-2">
                                                <option value="" selected>0%</option>
                                                <option value="">15%</option>
                                                <option value="">20%</option>
                                                <option value="">25%</option>
                                                <option value="">30%</option>
                                                <option value="">35%</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="product-add__body--info">
                                        <p class="info-title">Category</p>
                                        <div>
                                            <label>Product Status</label>
                                            <select name="" id="" class="ms-2">
                                                <option value="" selected>Publish</option>
                                                <option value="">Draft</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>