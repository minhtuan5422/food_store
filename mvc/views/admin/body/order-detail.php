<div class="modal fade" id="orderDetailManagement">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Order Details</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="container-xl">
                    <div class="product-add admin__content--products--header">
                        <div class="product-add__header d-flex align-items-center justify-content-end">
                            <div class="d-flex align-items-center gap-4">
                                <button class="admin__content--products--header--add user__tab--link" data-bs-dismiss="modal">
                                    <i class="icon-plus rotate-90"></i>
                                    <span>Cancel</span>
                                </button>
                                <button class="admin__content--products--header--add user__tab--link" onclick="openUserDashboard(event, 'addProduct')">
                                    <i class="icon-download"></i>
                                    <span>Save Order</span>
                                </button>
                            </div>
                        </div>

                        <div class="product-add__body">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="product-add__body--info">
                                        <p class="info-title">General Information</p>
                                        <div class="d-flex flex-column gap-1">
                                            <label for="">Customer full name</label>
                                            <input type="text">
                                        </div>
                                        <div class="d-flex flex-column gap-1">
                                            <label for="">Description</label>
                                            <textarea rows="6" col="80"></textarea>
                                        </div>
                                    </div>

                                    <div class="product-add__body--info">
                                        <p class="info-title">Detail Information</p>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="d-flex flex-column gap-1">
                                                    <label for="">Email</label>
                                                    <input type="email">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="d-flex flex-column gap-1">
                                                    <label for="">Phone number</label>
                                                    <input type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="d-flex flex-column gap-1">
                                                    <label for="">Address</label>
                                                    <input type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="d-flex flex-column gap-1">
                                                    <label for="">Discount</label>
                                                    <input type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="d-flex flex-column gap-1">
                                                    <label for="">Shipping</label>
                                                    <input type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="d-flex flex-column gap-1">
                                                    <label for="">Total</label>
                                                    <input type="text">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="overflow-auto">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Product</th>
                                                    <th>Unit price</th>
                                                    <th>Quantity</th>
                                                    <th>Sub total</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php for ($i = 0; $i < 5; $i++) : ?>
                                                    <tr>
                                                        <td class="d-flex align-items-center gap-3">
                                                            <img src=<?php echo IMG_PATH . "product-img.png" ?> alt="product">
                                                            <p>Green Capsicum</p>
                                                        </td>
                                                        <td>$121.00</td>
                                                        <td>1</td>
                                                        <td>$121.00</td>
                                                    </tr>
                                                <?php endfor ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="product-add__body--info">
                                        <p class="info-title">Order Status</p>
                                        <select name="" id="" class="ms-2">
                                            <option value="" selected>Order received</option>
                                            <option value="">Processing</option>
                                            <option value="">On the way</option>
                                            <option value="">Delivered</option>
                                        </select>
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