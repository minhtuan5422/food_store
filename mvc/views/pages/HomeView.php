<?php
$pageTitle = "Trang chủ";
ob_start();
?>

<slider class="slider">
    <div class="slider-single">
        <div class="position-relative">
            <img src=<?php echo IMG_PATH . "slider.png" ?> class="slider-single-img" alt="" srcset="">

            <div class="container-xl">
                <div class="slider__content position-absolute top-0">
                    <p class="slider__content--welcome">Welcome to shopery</p>
                    <h1>Fresh & Healthy Organic Food</h1>
                    <div class="slider__content--sale">
                        <h5 class="slider__content--sale--info">Sale up to <span>30% OFF</span></h5>
                        <p class="slider__content--sale--detail">Free shipping on all your order. we deliver, you enjoy</p>
                    </div>
                    <a href="#" class="slider__content--link">Shop now
                        <i class="icon-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="">
            <img src=<?php echo IMG_PATH . "slider-2.jpg" ?> class="slider-single-img" alt="">
        </div>

        <div class="">
            <img src=<?php echo IMG_PATH . "slider-3.jpg" ?> class="slider-single-img" alt="">
        </div>
    </div>


</slider>

<section class="featured">
    <div class="featured__policy container-xl">
        <div class="featured__policy--box">
            <div class="featured__policy--box--symbol">
                <i class="icon-shipping"></i>
            </div>
            <div class="featured__policy--box--info text-center">
                <p class="featured__policy--box--info--title">Free Shipping</p>
                <p class="mt-2">Free shipping with discount</p>
            </div>
        </div>

        <div class="featured__policy--box">
            <div class="featured__policy--box--symbol">
                <i class="icon-support_agent"></i>
            </div>
            <div class="featured__policy--box--info text-center">
                <p class="featured__policy--box--info--title">Great Support 24/7</p>
                <p class="mt-2">Instant access to Contact</p>
            </div>
        </div>

        <div class="featured__policy--box">
            <div class="featured__policy--box--symbol">
                <i class="icon-clipboard"></i>
            </div>
            <div class="featured__policy--box--info text-center">
                <p class="featured__policy--box--info--title">100% Sucure Payment</p>
                <p class="mt-2">We ensure your money is save</p>
            </div>
        </div>

        <div class="featured__policy--box">
            <div class="featured__policy--box--symbol">
                <i class="icon-package"></i>
            </div>
            <div class="featured__policy--box--info text-center">
                <p class="featured__policy--box--info--title">Money-Back Guarantee</p>
                <p class="mt-2">30 days money-back</p>
            </div>
        </div>
    </div>

    <div class="featured__products">
        <div class="container-xl">
            <div class="featured__products--title d-flex justify-content-between align-items-center">
                <h3>Featured Products</h3>
                <a href="#" class="featured__products--title--link d-flex align-items-center gap-2">View All
                    <i class="icon-arrow-right"></i>
                </a>
            </div>

            <div class="row">
                <?php for ($j = 0; $j < 4; $j++) : ?>
                    <div class="col-6 col-md-4 col-lg-3">
                        <?php include "./mvc/views/partials/product-card.php" ?>
                    </div>
                <?php endfor ?>
            </div>
        </div>
    </div>
</section>

<section class="top-categories">
    <div class="container-xl">
        <div class="featured__products--title d-flex justify-content-between align-items-center">
            <h3>Shop by Top Categories</h3>
            <a href="#" class="featured__products--title--link d-flex align-items-center gap-2">View All
                <i class="icon-arrow-right"></i>
            </a>
        </div>

        <div class="top-categories__item">
            <div class="top-categories__item--box">
                <div class="top-categories__item--box--top">
                    <img src=<?php echo IMG_PATH . "Vegetable.svg" ?> alt="">
                </div>
                <div class="top-categories__item--box--body">
                    <p class="top-categories__item--box--body--title">Vegetables</p>
                    <p class="top-categories__item--box--body--detail">165 Products</p>
                </div>
            </div>

            <div class="top-categories__item--box">
                <div class="top-categories__item--box--top">
                    <img src=<?php echo IMG_PATH . "fruits.svg" ?> alt="">
                </div>
                <div class="top-categories__item--box--body">
                    <p class="top-categories__item--box--body--title">Fresh Fruit</p>
                    <p class="top-categories__item--box--body--detail">137 Products</p>
                </div>
            </div>

            <div class="top-categories__item--box">
                <div class="top-categories__item--box--top">
                    <img src=<?php echo IMG_PATH . "fish.svg" ?> alt="">
                </div>
                <div class="top-categories__item--box--body">
                    <p class="top-categories__item--box--body--title">Fish</p>
                    <p class="top-categories__item--box--body--detail">34 Products</p>
                </div>
            </div>

            <div class="top-categories__item--box">
                <div class="top-categories__item--box--top">
                    <img src=<?php echo IMG_PATH . "meat.svg" ?> alt="">
                </div>
                <div class="top-categories__item--box--body">
                    <p class="top-categories__item--box--body--title">Meat</p>
                    <p class="top-categories__item--box--body--detail">165 Products</p>
                </div>
            </div>

            <div class="top-categories__item--box">
                <div class="top-categories__item--box--top">
                    <img src=<?php echo IMG_PATH . "soft-drink.svg" ?> alt="">
                </div>
                <div class="top-categories__item--box--body">
                    <p class="top-categories__item--box--body--title">Water and Drinks</p>
                    <p class="top-categories__item--box--body--detail">48 Products</p>
                </div>
            </div>

            <div class="top-categories__item--box">
                <div class="top-categories__item--box--top">
                    <img src=<?php echo IMG_PATH . "snacks.svg" ?> alt="">
                </div>
                <div class="top-categories__item--box--body">
                    <p class="top-categories__item--box--body--title">Vegetables</p>
                    <p class="top-categories__item--box--body--detail">165 Products</p>
                </div>
            </div>

            <?php for ($i = 0; $i < 6; $i++) : ?>
                <div class="top-categories__item--box">
                    <div class="top-categories__item--box--top">
                        <img src=<?php echo IMG_PATH . "Vegetable.svg" ?> alt="">
                    </div>
                    <div class="top-categories__item--box--body">
                        <p class="top-categories__item--box--body--title">Snacks</p>
                        <p class="top-categories__item--box--body--detail">165 Products</p>
                    </div>
                </div>
            <?php endfor ?>
        </div>
    </div>
</section>

<section class="why-choose">
    <div id="leaves">
        <?php for ($i = 0; $i < 15; $i++) : ?>
            <i></i>
        <?php endfor; ?>
    </div>

    <div class="container-xl">
        <div class="row">
            <div class="col-7">
                <div class="card ms-5">
                    <div class="circle">
                        <img src=<?php echo IMG_PATH . "book-cover.jpg" ?> class="logo">
                    </div>
                    <div class="content">
                        <h3>100% Trusted Organic Food Store</h3>
                        <p class="d-flex gap-2 align-items-center">
                            <i class="icon-check"></i>
                            Healthy & natural food for lovers of healthy food.
                        </p>
                        <p class="d-flex gap-2 align-items-center">
                            <i class="icon-check"></i>
                            Every day fresh and quality products for you.
                        </p>
                        <a href="#" class="slider__content--link d-flex align-items-center gap-2">Shop now
                            <i class="icon-arrow-right"></i>
                        </a>
                    </div>
                    <img src=<?php echo IMG_PATH . "fashion-handbook.png" ?> class="product_img">
                </div>
            </div>

            <div class="col-5">
                <div class="row">
                    <div class="why-choose__right col-6">
                        <div class="why-choose__right--box">
                            <p class="why-choose__right--box--title">37+</p>
                            <p class="why-choose__right--box--detail">Years of Hard Work</p>
                        </div>
                    </div>

                    <div class="why-choose__right col-6">
                        <div class="why-choose__right--box">
                            <p class="why-choose__right--box--title">500k</p>
                            <p class="why-choose__right--box--detail">Happy Customer</p>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="why-choose__right col-6">
                        <div class="why-choose__right--box">
                            <p class="why-choose__right--box--title">28</p>
                            <p class="why-choose__right--box--detail">Qualified Team Member</p>
                        </div>
                    </div>

                    <div class="why-choose__right col-6">
                        <div class="why-choose__right--box">
                            <p class="why-choose__right--box--title">750k+</p>
                            <p class="why-choose__right--box--detail">Monthly Orders</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="best-seller">
    <div class="container-xl">
        <div class="best-seller__banner">
            <div class="row">
                <div class="col-6">
                    <div class="best-seller__banner--item">
                        <div class="best-seller__banner--item--info">
                            <p>100% Organic</p>
                            <h4>Fruit & Vegetable</h4>
                            <p class="d-flex align-items-center gap-2">Starting at:<span>$11.99</span></p>
                        </div>

                        <a href="#" class="best-seller__banner--item--link">Shop now
                            <i class="icon-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <div class="col-6">
                    <div class="best-seller__banner--item best-seller__banner--second">
                        <div class="best-seller__banner--item--info">
                            <p>sale off the week</p>
                            <h4>Sales of the Year</h4>
                            <div class="d-flex gap-2 text-white">
                                <div class="timer text-center">
                                    <p class="timer-num">00</p>
                                    <p class="timer-text text-uppercase mt-1 ms-1">Days</p>
                                </div>
                                <div class="">:</div>
                                <div class="timer text-center">
                                    <p class="timer-num">02</p>
                                    <p class="timer-text text-uppercase mt-1 ms-1">Hours</p>
                                </div>
                                <div class="">:</div>
                                <div class="timer text-center">
                                    <p class="timer-num">18</p>
                                    <p class="timer-text text-uppercase mt-1 ms-1">Mins</p>
                                </div>
                                <div class="">:</div>
                                <div class="timer text-center">
                                    <p class="timer-num">46</p>
                                    <p class="timer-text text-uppercase mt-1 ms-1">Secs</p>
                                </div>
                            </div>
                        </div>

                        <a href="#" class="best-seller__banner--item--link">Shop now
                            <i class="icon-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="featured__products">
            <div class="featured__products--title d-flex justify-content-between align-items-center">
                <h3>Best Seller Products</h3>
                <a href="#" class="featured__products--title--link d-flex align-items-center gap-2">View All
                    <i class="icon-arrow-right"></i>
                </a>
            </div>

            <div class="best-seller__products">
                <?php for ($j = 0; $j < 10; $j++) : ?>
                    <div class="slick-slide">
                        <?php include "./mvc/views/partials/product-card.php" ?>
                    </div>
                <?php endfor ?>
            </div>
        </div>

        <div class="best-seller__rank">
            <div class="row">
                <div class="col-lg-3 best-seller__rank--col">
                    <p class="best-seller__rank--col--title">Hot Deals</p>
                    <?php
                    $name = "Chanise Cabbage";
                    $price = "$14.99";
                    for ($j = 0; $j < 3; $j++) :
                        include "./mvc/views/partials/product-review.php";
                    endfor
                    ?>
                </div>

                <div class="col-lg-3 best-seller__rank--col">
                    <p class="best-seller__rank--col--title">Best Seller</p>
                    <?php
                    $name = "Chanise Cabbage";
                    $price = "$14.99";
                    for ($j = 0; $j < 3; $j++) :
                        include "./mvc/views/partials/product-review.php";
                    endfor
                    ?>
                </div>

                <div class="col-lg-3 best-seller__rank--col">
                    <p class="best-seller__rank--col--title">Top Rated</p>
                    <?php
                    $name = "Chanise Cabbage";
                    $price = "$14.99";
                    for ($j = 0; $j < 3; $j++) :
                        include "./mvc/views/partials/product-review.php";
                    endfor
                    ?>
                </div>

                <div class="col-lg-3 best-seller__rank--col best-seller__rank--news">
                    <img src=<?php echo IMG_PATH . "hot-sale.png" ?> class="best-seller__rank--news--img" alt="" srcset="">
                    <p>HOt Sale</p>
                    <h5><span class="fw-bold">Save 37%</span> on Every Order</h5>
                    <div class="d-flex justify-content-center">
                        <a href="#" class="">Shop now
                            <i class="icon-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="latest-article">
    <div class="container-xl">
        <div class="latest-article__title text-center">
            <p class="latest-article__title--label">Blog</p>
            <h3>Latest News</h3>
        </div>

        <div class="latest-article__wrapper">
            <?php
            $img = "article-avt.png";
            $day = 18;
            $month = "nov";
            $category = "Food";
            $author = "Admin";
            $numComments = "65";
            $title = "Curabitur porttitor orci eget neque accumsan venenatis. Nunc fermentum.";
            for ($i = 0; $i < 6; $i++) { ?>
                <div class="slick-slide">
                    <?php include "./mvc/views/partials/article-item.php"; ?>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php include "./mvc/views/partials/feedbacks.php" ?>

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

<?php
$content = ob_get_contents();
ob_end_clean();
require_once('./mvc/views/template.php');
?>