<div class="product-review d-flex align-items-center">
    <div class="product-review__img">
        <img src=<?php echo IMG_PATH . "product-img.png" ?> alt="" srcset="">
    </div>
    <div class="product-review__info">
        <p class="product-review__info--name"><?php echo $name ?></p>
        <div class="hover-hide">
            <p class="product-review__info--price"><?php echo $price ?></p>
            <div class="product-review__info--star d-flex align-items-center">
                <?php for ($i = 0; $i < 5; $i++) : ?>
                    <i class="icon-star1"></i>
                <?php endfor ?>
            </div>
        </div>
        <div class="product-review__info--action gap-3 align-items-center">
            <button class="product-review__info--action--icon icon-shopping-cart"></button>
            <button class="product-review__info--action--icon icon-eye"></button>
            <button class="product-review__info--action--icon icon-heart"></button>
        </div>
    </div>
</div>