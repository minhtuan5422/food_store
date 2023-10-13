<section class="company">
    <div class="container-xl">
        <div class="company__logo">
            <?php for ($i = 1; $i <= 6; $i++) : ?>
                <div class="company__logo--img">
                    <img src=<?php echo IMG_PATH . "company-" . $i . ".png" ?> alt="">
                </div>
            <?php endfor; ?>
        </div>

        <div class="company__info">
            <div class="row">
                <div class="col-md-3">
                    <div class="company__info--box">
                        <i class="icon-location2"></i>
                        <div class="company__info--box--detail">
                            <p>Our Location</p>
                            <p class="company__info--box--detail--text">1901 Thornridge Cir. Shiloh, Washington DC 20020, United States</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="company__info--box">
                        <i class="icon-phone-call"></i>
                        <div class="company__info--box--detail">
                            <p>Call Us 24/7</p>
                            <p class="company__info--box--detail--num">(303) 555-0105</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="company__info--box">
                        <i class="icon-mail"></i>
                        <div class="company__info--box--detail">
                            <p>Our Location</p>
                            <div class="company__info--box--detail--action">
                                <input type="text" placeholder="Your email address">
                                <button>Subscribe</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>