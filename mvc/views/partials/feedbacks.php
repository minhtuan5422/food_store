<section class="feedbacks">
    <div class="container-xl">
        <div class="feedbacks__content">
            <div class="feedbacks__content--top">
                <p>Testimonial</p>
                <h3>What Our Customer Says</h3>
            </div>

            <div class="feedbacks__content--body">
                <?php for ($i = 0; $i < 6; $i++) : ?>
                    <div class="slick-slide">
                        <div class="feedbacks__content--body--box">
                            <div class="feedbacks__content--body--box-label">
                                <img src=<?php echo IMG_PATH . "Vector.svg" ?> alt="" srcset="">
                            </div>

                            <p class="feedbacks__content--body--box--desc">
                                Pellentesque eu nibh eget mauris congue mattis mattis nec tellus. Phasellus imperdiet elit eu magna dictum,
                                bibendum cursus velit sodales. Donec sed neque eget
                            </p>

                            <div class="feedbacks__content--body--box--info d-flex justify-content-between align-items-center w-100">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="avatar">
                                        <img src=<?php echo IMG_PATH . "avt.png" ?> alt="" srcset="">
                                    </div>

                                    <div class="detail">
                                        <p class="name">Robert Fox</p>
                                        <p class="role">Customer</p>
                                    </div>
                                </div>

                                <div class="review">
                                    <?php for ($j = 0; $j < 5; $j++) : ?>
                                        <i class="icon-star1"></i>
                                    <?php endfor; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</section>