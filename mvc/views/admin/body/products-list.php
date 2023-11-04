<div class="admin__content--products">
    <div class="container-xl">
        <div class="admin__content--products--header">
            <div class="d-flex align-items-center justify-content-between">
                <p class="admin__content--products--header--title">Product</p>
                <button class="admin__content--products--header--add user__tab--link" onclick="openUserDashboard(event, 'addProduct')">
                    <i class="icon-plus"></i>
                    <span>Add Product</span>
                </button>
            </div>
            <div class="d-flex align-items-center justify-content-between">
                <div class="admin__content--products--header--search d-flex gap-1">
                    <button class="icon-search bg-white border-0"></button>
                    <input type="text" placeholder="Search product...">
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
                            <th>Product</th>
                            <th>Brand</th>
                            <th>Category</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Weight</th>
                            <th>Rate</th>
                            <th>Added</th>
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
                                <td>Brand</td>
                                <td>Vegetable</td>
                                <td>100</td>
                                <td>$121.00</td>
                                <td>1kg</td>
                                <td>
                                    <div class="d-flex align-items-center gap-1">
                                        <p>4.2</p>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="13" viewBox="0 0 12 13" fill="none">
                                            <path d="M6.20672 9.44078L8.5711 10.9385C8.87335 11.1298 9.24835 10.8452 9.15872 10.4923L8.47585 7.80541C8.45656 7.73057 8.45878 7.6518 8.48227 7.57816C8.50575 7.50453 8.54954 7.43902 8.6086 7.38916L10.7288 5.62478C11.0071 5.39303 10.8638 4.93066 10.5057 4.90741L7.7371 4.72741C7.66255 4.72212 7.59105 4.69577 7.5309 4.65142C7.47075 4.60707 7.42444 4.54656 7.39735 4.47691L6.3646 1.87666C6.33648 1.80276 6.28656 1.73916 6.22146 1.69428C6.15636 1.6494 6.07916 1.62537 6.0001 1.62537C5.92103 1.62537 5.84383 1.6494 5.77873 1.69428C5.71364 1.73916 5.66372 1.80276 5.6356 1.87666L4.60285 4.47691C4.57581 4.54663 4.52952 4.60722 4.46937 4.65164C4.40922 4.69606 4.33768 4.72246 4.2631 4.72778L1.49447 4.90778C1.13672 4.93066 0.992723 5.39303 1.27135 5.62478L3.3916 7.38953C3.45059 7.43936 3.49434 7.50481 3.51782 7.57837C3.5413 7.65193 3.54356 7.73062 3.52435 7.80541L2.89135 10.2973C2.78372 10.7207 3.2341 11.0623 3.59635 10.8324L5.79385 9.44078C5.85561 9.40152 5.92728 9.38066 6.00047 9.38066C6.07366 9.38066 6.14533 9.40152 6.2071 9.44078H6.20672Z" fill="#FF8A00" />
                                        </svg>
                                    </div>
                                </td>
                                <td>21 Oct 2023</td>
                                <td>
                                    <p>Published</p>
                                </td>
                                <td>
                                    <div class="d-flex gap-2 align-items-center">
                                        <a href="#" class="ms-4 action-btn me-1">
                                            <i class="icon-eye"></i>
                                        </a>
                                        <button class="border-0 bg-white action-btn">
                                            <i class="icon-edit"></i>
                                        </button>
                                        <button class="border-0 bg-white action-btn">
                                            <i class="icon-bin"></i>
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