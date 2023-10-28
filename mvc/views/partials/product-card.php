<div class="product-card position-relative">
    <div class="product-card__top">
        <img src=<?php echo IMG_PATH . "product-img.png" ?> class="product-card__top--img" alt="">
    </div>

    <div class="product-card__label position-absolute top-0 d-flex flex-column-reverse">
        <i class="icon-eye"></i>
        <i class="icon-heart"></i>
    </div>

    <div class="product-card__body">
        <p class="product-card__body--name">Chanise Cabbage</p>

        <div class="product-card__body--content justify-content-between align-items-center">
            <p class="product-card__body--price">$14.99<span class="ms-1">$20.99</span></p>
            <button type="button" class="product-card__body--btn d-flex flex-column-reverse align-items-center" data-bs-toggle="modal" data-bs-target="#productDetail">
                <i class="icon-shopping-cart"></i>
            </button>
            <!-- The Modal -->
            <div class="modal fade" id="productDetail">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header border-0">
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="product-detail__left">
                                        <ul id="lightSliderVertical">
                                            <li class="product-detail__left--img" data-thumb=<?php echo IMG_PATH . "product-img.png" ?>>
                                                <a href=<?php echo IMG_PATH . "product-img.png" ?> data-fancybox="gallery" data-width="800" data-height="800">
                                                    <img src=<?php echo IMG_PATH . "product-img.png" ?> />
                                                </a>
                                            </li>
                                            <li class="product-detail__left--img" data-thumb=<?php echo IMG_PATH . "product-img2.png" ?>>
                                                <a href=<?php echo IMG_PATH . "product-img2.png" ?> data-fancybox="gallery" data-width="800" data-height="800">
                                                    <img src=<?php echo IMG_PATH . "product-img2.png" ?> />
                                                </a>
                                            </li>
                                            <li class="product-detail__left--img" data-thumb=<?php echo IMG_PATH . "product-img3.png" ?>>
                                                <a href=<?php echo IMG_PATH . "product-img3.png" ?> data-fancybox="gallery" data-width="800" data-height="800">
                                                    <img src=<?php echo IMG_PATH . "product-img3.png" ?> />
                                                </a>
                                            </li>
                                            <li class="product-detail__left--img" data-thumb=<?php echo IMG_PATH . "product-img4.png" ?>>
                                                <a href=<?php echo IMG_PATH . "product-img4.png" ?> data-fancybox="gallery" data-width="800" data-height="800">
                                                    <img src=<?php echo IMG_PATH . "product-img4.png" ?> />
                                                </a>
                                            </li>
                                            <li class="product-detail__left--img" data-thumb=<?php echo IMG_PATH . "product-img5.png" ?>>
                                                <a href=<?php echo IMG_PATH . "product-img5.png" ?> data-fancybox="gallery" data-width="800" data-height="800">
                                                    <img src=<?php echo IMG_PATH . "product-img5.png" ?> />
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="product-detail__right">
                                        <div class="product-detail__right--heading">
                                            <div class="d-flex gap-2 align-items-center mb-3">
                                                <h4>Chinese Cabbage</h4>
                                                <p class="product-detail__right--heading--label">In Stock</p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <?php for ($i = 0; $i < 5; $i++) : ?>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19" fill="none">
                                                        <path d="M9.31008 13.9111L12.8566 16.1577C13.31 16.4446 13.8725 16.0177 13.7381 15.4884L12.7138 11.4581C12.6848 11.3458 12.6882 11.2276 12.7234 11.1172C12.7586 11.0067 12.8243 10.9085 12.9129 10.8337L16.0933 8.18711C16.5106 7.83949 16.2958 7.14593 15.7586 7.11105L11.6056 6.84105C11.4938 6.83312 11.3866 6.79359 11.2964 6.72707C11.2061 6.66055 11.1367 6.56977 11.096 6.4653L9.5469 2.56493C9.50471 2.45408 9.42984 2.35867 9.33219 2.29136C9.23455 2.22404 9.11875 2.18799 9.00015 2.18799C8.88155 2.18799 8.76574 2.22404 8.6681 2.29136C8.57046 2.35867 8.49558 2.45408 8.4534 2.56493L6.90427 6.4653C6.86372 6.56988 6.79429 6.66077 6.70406 6.7274C6.61383 6.79402 6.50652 6.83364 6.39465 6.84161L2.24171 7.11161C1.70508 7.14593 1.48908 7.83949 1.90702 8.18711L5.0874 10.8342C5.17588 10.909 5.2415 11.0072 5.27673 11.1175C5.31195 11.2278 5.31534 11.3459 5.28652 11.4581L4.33702 15.1959C4.17558 15.8309 4.85115 16.3434 5.39452 15.9986L8.69077 13.9111C8.78342 13.8522 8.89093 13.8209 9.00071 13.8209C9.11049 13.8209 9.218 13.8522 9.31065 13.9111H9.31008Z" fill="#FF8A00" />
                                                    </svg>
                                                <?php endfor ?>
                                                <p class="ms-1 product-detail__right--heading--review">4 Review</p>
                                            </div>
                                            <div class="ms-1 product-detail__right--heading--price">
                                                <p>$48.00</p>
                                                <p class="ms-1">$17.28</p>
                                                <p>64% Off</p>
                                            </div>
                                        </div>

                                        <div class="product-detail__right--body">
                                            <div class="product-detail__right--body--label align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <p>Brand:</p>
                                                    <img src=<?php echo IMG_PATH . "brand.svg" ?> class="ms-2" alt="brand" />
                                                </div>
                                                <div class="product-detail__right--body--share d-flex align-items-center gap-2">
                                                    <p>Share item:</p>
                                                    <div class="product-detail__right--body--link">
                                                        <a href=""><i class="icon-facebook"></i></a>
                                                        <a href=""><i class="icon-youtube"></i></a>
                                                        <a href=""><i class="icon-instagram"></i></a>
                                                        <a href=""><i class="icon-twitter"></i></a>
                                                    </div>
                                                </div>
                                            </div>

                                            <p>
                                                Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos
                                                himenaeos. Nulla nibh diam, blandit vel consequat nec, ultrices et ipsum. Nulla
                                                varius magna a consequat pulvinar.
                                            </p>
                                        </div>

                                        <div class="product-detail__right--action">
                                            <div class="product-detail__right--action--flex align-items-center">
                                                <div class="product-detail__right--action--dispatch d-flex align-items-center">
                                                    <button class="product-detail__right--action--btn">-</button>
                                                    <input type="text" class="product-detail__right--action--quantity" value="5" readonly>
                                                    <button class="product-detail__right--action--btn">+</button>
                                                </div>

                                                <button class="btn-primary border-0">
                                                    <span>Add to Cart</span>
                                                    <i class="icon-shopping-cart"></i>
                                                </button>

                                                <button class="product-detail__right--action--wish icon-heart"></button>
                                            </div>
                                        </div>

                                        <div class="product-detail__right--footer">
                                            <p>Category: <span>Vegetables</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="product-card__body--star d-flex">
            <?php for ($i = 0; $i < 5; $i++) : ?>
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="13" viewBox="0 0 12 13" fill="none">
                    <path d="M6.20672 9.44078L8.5711 10.9385C8.87335 11.1298 9.24835 10.8452 9.15872 10.4923L8.47585 7.80541C8.45656 7.73057 8.45878 7.6518 8.48227 7.57816C8.50575 7.50453 8.54954 7.43902 8.6086 7.38916L10.7288 5.62478C11.0071 5.39303 10.8638 4.93066 10.5057 4.90741L7.7371 4.72741C7.66255 4.72212 7.59105 4.69577 7.5309 4.65142C7.47075 4.60707 7.42444 4.54656 7.39735 4.47691L6.3646 1.87666C6.33648 1.80276 6.28656 1.73916 6.22146 1.69428C6.15636 1.6494 6.07916 1.62537 6.0001 1.62537C5.92103 1.62537 5.84383 1.6494 5.77873 1.69428C5.71364 1.73916 5.66372 1.80276 5.6356 1.87666L4.60285 4.47691C4.57581 4.54663 4.52952 4.60722 4.46937 4.65164C4.40922 4.69606 4.33768 4.72246 4.2631 4.72778L1.49447 4.90778C1.13672 4.93066 0.992723 5.39303 1.27135 5.62478L3.3916 7.38953C3.45059 7.43936 3.49434 7.50481 3.51782 7.57837C3.5413 7.65193 3.54356 7.73062 3.52435 7.80541L2.89135 10.2973C2.78372 10.7207 3.2341 11.0623 3.59635 10.8324L5.79385 9.44078C5.85561 9.40152 5.92728 9.38066 6.00047 9.38066C6.07366 9.38066 6.14533 9.40152 6.2071 9.44078H6.20672Z" fill="#FF8A00" />
                </svg>
            <?php endfor ?>
        </div>
    </div>
</div>