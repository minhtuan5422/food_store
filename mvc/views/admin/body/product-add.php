<div class="container-xl">
    <form method="GET" action="">
        <div class="product-add admin__content--products--header">
            <div class="product-add__header d-flex align-items-center justify-content-between">
                <p class="admin__content--products--header--title">Add Product</p>
                <div class="d-flex align-items-center gap-4">
                    <button class="admin__content--products--header--add user__tab--link" onclick="openUserDashboard(event, 'productListManagement')">
                        <i class="icon-plus rotate-90"></i>
                        <span>Cancel</span>
                    </button>
                    <button type="submit" class="admin__content--products--header--add user__tab--link" name="addProductBtn" onclick="openUserDashboard(event, 'addProduct')">
                        <i class="icon-plus"></i>
                        <span>Add Product</span>
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
                                <input type="text" name="productName" placeholder="Type product name here. . .">
                            </div>
                            <div class="d-flex flex-column gap-1">
                                <label>Description</label>
                                <textarea rows="6" col="80" name="productDescription" placeholder="Type product description here. . ."></textarea>
                            </div>
                        </div>
    
                        <div class="product-add__body--info">
                            <p class="info-title">Media</p>
                            <div class="d-flex flex-column gap-1">
                                <label>Avatar</label>
                                <input type="file" name="productAvatar">
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
                                <input type="text" name="productPrice" placeholder="Type base price here. . .">
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
                                        <input type="text" name="productBrand" placeholder="Type product brand here. . .">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="d-flex flex-column gap-1">
                                        <label>Weight</label>
                                        <input type="text" name="productWeight" placeholder="Type product weight here. . .">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="d-flex flex-column gap-1">
                                        <label>Quantity</label>
                                        <input type="text" name="productQuantity" placeholder="Type product quantity here. . .">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="d-flex flex-column gap-1">
                                        <label>Origin</label>
                                        <input type="text" name="productOrigin" placeholder="Type product origin here. . .">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="d-flex flex-column gap-1">
                                        <label>Date manufacture</label>
                                        <input type="date" name="productDateManufacture" placeholder="Type product weight here. . .">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="d-flex flex-column gap-1">
                                        <label>Date expiry</label>
                                        <input type="date" name="productDateExpiry" placeholder="Type product quantity here. . .">
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
    </form>
</div>