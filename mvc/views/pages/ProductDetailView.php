<?php
$pageTitle = "About";
ob_start();
?>

<?php require_once "./mvc/views/partials/breadcrumb.php" ?>

<div class="product-detail">
    <div class="container-xl">
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

            </div>
        </div>
    </div>
</div>

<?php
$content = ob_get_contents();
ob_end_clean();
require_once('./mvc/views/template.php');
?>