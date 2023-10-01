<article class="article-item">
    <div class="article-item__top position-relative">
        <img src=<?php echo IMG_PATH . $img?> class="article-item__top--img" alt="">
        <div class="article-item__top--date position-absolute">
            <p><?php echo $day ?></p>
            <p><?php echo $month ?></p>
        </div>
    </div>

    <div class="article-item__body">
        <div class="article-item__body--info d-flex align-items-center gap-4">
            <div class="article-item__body--info--detail d-flex gap-2 align-items-center">
                <i class="icon-tag"></i>
                <p><?php echo $category ?></p>
            </div>
            <div class="article-item__body--info--detail d-flex gap-2 align-items-center">
                <i class="icon-user"></i>
                <p>By<span class="ms-1"></span><?php echo $author ?></span></p>
            </div>
            <div class="article-item__body--info--detail d-flex gap-2 align-items-center">
                <i class="icon-message"></i>
                <p><span class="me-1"><?php echo $numComments ?></span>Comments</p>
            </div>
        </div>

        <p class="article-item__body--title mt-2"><?php echo $title ?></p>

        <a href="#" class="article-item__body--link">Read More
            <i class="icon-arrow-right"></i>
        </a>
    </div>
</article>

