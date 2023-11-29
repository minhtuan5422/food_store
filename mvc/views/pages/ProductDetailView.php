<?php
$pageTitle = "About";
ob_start();
$pathUrl = "D:Projectsfood_storepublicimgs";
$imageFileName = substr($data['productDetailInfo'][0]['img'], strlen($pathUrl));
?>

<?php require_once "./mvc/views/partials/breadcrumb.php" ?>

<div class="product-detail">
    <div class="container-xl">
        <div class="row">
            <div class="col-sm-6">
                <div class="product-detail__left">
                    <ul id="lightSliderVertical">
                        <li class="product-detail__left--img" data-thumb=<?php echo IMG_PATH . $imageFileName ?>>
                            <a href=<?php echo IMG_PATH . $imageFileName ?> data-fancybox="gallery" data-width="800" data-height="800">
                                <img src=<?php echo IMG_PATH . $imageFileName ?> />
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
                            <h4><?php echo $data['productDetailInfo'][0]['product_name'] ?></h4>
                            <p class="product-detail__right--heading--label">In Stock</p>
                        </div>
                        <div class="d-flex align-items-center">
                            <?php for ($i = 0; $i < $data['productDetailInfo'][0]['rate']; $i++) : ?>
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19" fill="none">
                                    <path d="M9.31008 13.9111L12.8566 16.1577C13.31 16.4446 13.8725 16.0177 13.7381 15.4884L12.7138 11.4581C12.6848 11.3458 12.6882 11.2276 12.7234 11.1172C12.7586 11.0067 12.8243 10.9085 12.9129 10.8337L16.0933 8.18711C16.5106 7.83949 16.2958 7.14593 15.7586 7.11105L11.6056 6.84105C11.4938 6.83312 11.3866 6.79359 11.2964 6.72707C11.2061 6.66055 11.1367 6.56977 11.096 6.4653L9.5469 2.56493C9.50471 2.45408 9.42984 2.35867 9.33219 2.29136C9.23455 2.22404 9.11875 2.18799 9.00015 2.18799C8.88155 2.18799 8.76574 2.22404 8.6681 2.29136C8.57046 2.35867 8.49558 2.45408 8.4534 2.56493L6.90427 6.4653C6.86372 6.56988 6.79429 6.66077 6.70406 6.7274C6.61383 6.79402 6.50652 6.83364 6.39465 6.84161L2.24171 7.11161C1.70508 7.14593 1.48908 7.83949 1.90702 8.18711L5.0874 10.8342C5.17588 10.909 5.2415 11.0072 5.27673 11.1175C5.31195 11.2278 5.31534 11.3459 5.28652 11.4581L4.33702 15.1959C4.17558 15.8309 4.85115 16.3434 5.39452 15.9986L8.69077 13.9111C8.78342 13.8522 8.89093 13.8209 9.00071 13.8209C9.11049 13.8209 9.218 13.8522 9.31065 13.9111H9.31008Z" fill="#FF8A00" />
                                </svg>
                            <?php endfor ?>
                            <p class="ms-1 product-detail__right--heading--review">4 Review</p>
                        </div>
                        <div class="ms-1 product-detail__right--heading--price">
                            <p></p>
                            <p class="ms-1"><?php echo number_format($data['productDetailInfo'][0]['price'], 0, ',', '.') . "đ" ?></p>
                            <p>64% Off</p>
                        </div>
                    </div>

                    <div class="product-detail__right--body">
                        <div class="product-detail__right--body--label align-items-center justify-content-between">
                            <div class="d-flex align-items-center gap-1">
                                <p>Brand:</p>
                                <p class="mt-0"><?php echo $data['productDetailInfo'][0]['category_name'] ?></p>
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

                        <p><?php echo $data['productDetailInfo'][0]['description'] ?></p>
                    </div>

                    <div class="product-detail__right--action">
                        <div class="product-detail__right--action--flex align-items-center">
                            <form method="POST" class="d-flex w-100">
                                <input type="hidden" class="js-cart-user-id" name="cartUserEmail" value="<?php echo $_SESSION['email'] ?>">
                                <input type="hidden" class="js-cart-product-id" name="cartProductId" value="<?php echo $data['productDetailInfo'][0]['id_product'] ?>">
                                <div class="product-detail__right--action--dispatch d-flex align-items-center">
                                    <button class="product-detail__right--action--btn js-decrement-quantity">-</button>
                                    <input type="text" class="product-detail__right--action--quantity" name="cartProductQuantity" value="1" readonly>
                                    <button class="product-detail__right--action--btn js-increment-quantity">+</button>
                                </div>

                                <button type="submit" class="btn-primary border-0 js-add-to-cart" name="addToCart">
                                    <span>Add to Cart</span>
                                    <i class="icon-shopping-cart"></i>
                                </button>
                            </form>

                            <button class="product-detail__right--action--wish icon-heart"></button>
                        </div>
                    </div>

                    <div class="product-detail__right--footer">
                        <p>Category: <span><?php echo $data['productDetailInfo'][0]['category_name'] ?></span></p>
                    </div>
                </div>
            </div>
        </div>

        <section id="wrapper">
            <div class="content">
                <!-- Tab links -->
                <div class="tabs">
                    <button class="tablinks active" data-section="descriptions">
                        <p data-title="Descriptions">Descriptions</p>
                    </button>
                    <button class="tablinks" data-section="information">
                        <p data-title="Information">Additional Information</p>
                    </button>
                    <button class="tablinks" data-section="feedback">
                        <p data-title="Feedback">Customer Feedback</p>
                    </button>
                </div>

                <!-- Tab content -->
                <div class="wrapper_tabcontent">
                    <div id="descriptions" class="tabcontent active">
                        <h3>Descriptions</h3>
                        <p><?php echo $data['productDetailInfo'][0]['description'] ?></p>
                    </div>

                    <div id="information" class="tabcontent">
                        <h3>Information</h3>
                        <div class="row">
                            <div class="col-sm-2">
                                <p>Weight:</p>
                                <p>Origin:</p>
                                <p>Date manufacture</p>
                                <p>Date expiry</p>
                                <p>Stock Status:</p>
                            </div>
                            <div class="col-sm-5">
                                <p><?php echo $data['productDetailInfo'][0]['weight'] . "kg" ?></p>
                                <p><?php echo $data['productDetailInfo'][0]['origin'] ?></p>
                                <p><?php echo $data['productDetailInfo'][0]['date_manufacture'] ?></p>
                                <p><?php echo $data['productDetailInfo'][0]['date_expiry'] ?></p>
                                <p><?php echo $data['productDetailInfo'][0]['quantity'] ?></p>
                            </div>
                            <div class="col-sm-5">
                                <iframe width="536" height="300" src="https://www.youtube.com/embed/yZqe48siHf8?si=i6SNW9m5f-J34LVo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>

                    <div id="feedback" class="tabcontent">
                        <h3>Feedback</h3>
                        <div class="feedbacks-wraper">
                            <?php for ($i = 0; $i < 3; $i++) : ?>
                                <div class="customer-feedbacks">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="customer-feedbacks__header d-flex align-items-center gap-3">
                                            <img src=<?php echo IMG_PATH . "about-avt1.png" ?> class="customer-feedbacks__header--img" alt="avatar">
                                            <div class="">
                                                <p class="customer-feedbacks__header--name">Kristin Watson</p>
                                                <div class="d-flex">
                                                    <?php for ($j = 0; $j < 5; $j++) : ?>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                            <path d="M8.27563 11.9209L11.4281 13.9179C11.8311 14.1729 12.3311 13.7934 12.2116 13.3229L11.3011 9.74042C11.2754 9.64063 11.2784 9.53561 11.3097 9.43743C11.341 9.33925 11.3994 9.2519 11.4781 9.18542L14.3051 6.83292C14.6761 6.52392 14.4851 5.90742 14.0076 5.87642L10.3161 5.63642C10.2167 5.62937 10.1214 5.59424 10.0412 5.53511C9.961 5.47598 9.89925 5.39528 9.86313 5.30242L8.48613 1.83542C8.44864 1.73689 8.38208 1.65209 8.29528 1.59225C8.20849 1.53241 8.10555 1.50037 8.00013 1.50037C7.89471 1.50037 7.79177 1.53241 7.70498 1.59225C7.61818 1.65209 7.55163 1.73689 7.51413 1.83542L6.13713 5.30242C6.10109 5.39538 6.03937 5.47618 5.95916 5.5354C5.87896 5.59462 5.78358 5.62983 5.68413 5.63692L1.99263 5.87692C1.51563 5.90742 1.32363 6.52392 1.69513 6.83292L4.52213 9.18592C4.60079 9.25236 4.65911 9.33962 4.69042 9.4377C4.72173 9.53578 4.72475 9.64071 4.69913 9.74042L3.85513 13.0629C3.71163 13.6274 4.31213 14.0829 4.79513 13.7764L7.72513 11.9209C7.80748 11.8686 7.90305 11.8408 8.00063 11.8408C8.09822 11.8408 8.19378 11.8686 8.27613 11.9209H8.27563Z" fill="#FF8A00" />
                                                        </svg>
                                                    <?php endfor ?>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="customer-feedbacks__header--time">2 min ago</p>
                                    </div>
                                    <p class="customer-feedbacks__content">Duis at ullamcorper nulla, eu dictum eros.</p>
                                </div>
                            <?php endfor ?>
                        </div>
                        <button class="customer-feedbacks__load">Load More</button>
                    </div>
                </div>
            </div>
        </section>

        <section class="product-detail__footer">
            <h5 class="text-center">Related Products</h5>
            <div class="featured__products--carousel">
                <?php
                foreach ($data['productList'] as $product) :
                    $pathUrl = "D:Projectsfood_storepublicimgs";
                    $imageFileName = substr($product['img'], strlen($pathUrl));
                ?>
                    <div class="slick-slide">
                        <?php include "./mvc/views/partials/product-card.php" ?>
                    </div>
                <?php endforeach ?>
            </div>
        </section>
    </div>

    <?php require_once "./mvc/views/partials/footer-child.php" ?>
</div>

<?php
$content = ob_get_contents();
ob_end_clean();
require_once('./mvc/views/template.php');
?>