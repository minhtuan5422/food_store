<?php
$pageTitle = "About";
ob_start();
?>

<?php require_once "./mvc/views/partials/breadcrumb.php" ?>

<div class="about">
    <div class="about-us">
        <div class="container-xl">
            <div class="row">
                <div class="col-sm-6">
                    <div class="about-us__content">
                        <h1>100% Trusted Organic Food Store</h1>
                        <p>Morbi porttitor ligula in nunc varius sagittis. Proin dui nisi, laoreet ut
                            tempor ac, cursus vitae eros. Cras quis ultricies elit. Proin ac lectus arcu.
                            Maecenas aliquet vel tellus at accumsan. Donec a eros non massa vulputate
                            ornare. Vivamus ornare commodo ante, at commodo felis congue vitae.
                        </p>
                    </div>
                </div>

                <div class="col-sm-6">
                    <img src=<?php echo IMG_PATH . "about-1.png" ?> class="about-us-img" alt="about-us">
                </div>
            </div>
        </div>
    </div>

    <div class="about-me">
        <div class="container-xl">
            <div class="row">
                <div class="col-sm-6">
                    <img src=<?php echo IMG_PATH . "about-man.png" ?> class="about-me-img" alt="">
                </div>

                <div class="col-sm-6">
                    <div class="about-me__content">
                        <div class="about-me__content--text">
                            <h1>100% Trusted Organic Food Store</h1>
                            <p>Pellentesque a ante vulputate leo porttitor luctus sed eget eros. Nulla
                                t rhoncus neque. Duis non diam eget est luctus tincidunt a a mi. Nulla
                                eu eros consequat tortor tincidunt feugiat.
                            </p>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="about-me__content--col d-flex align-items-center">
                                    <div class="about-me__content--col--icon">
                                        <i class="icon-leaf"></i>
                                    </div>
                                    <div class="">
                                        <p>100% Organic food</p>
                                        <p>100% healthy & Fresh food.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="res-col col-sm-6">
                                <div class="about-me__content--col d-flex align-items-center">
                                    <div class="about-me__content--col--icon">
                                        <i class="icon-support_agent"></i>
                                    </div>
                                    <div class="">
                                        <p>Great Support 24/7</p>
                                        <p>Instant access to Contact</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="about-me__content--col d-flex align-items-center">
                                    <div class="about-me__content--col--icon">
                                        <i class="icon-star"></i>
                                    </div>
                                    <div class="">
                                        <p>Customer Feedback</p>
                                        <p>Our happy customer</p>
                                    </div>
                                </div>
                            </div>
                            <div class="res-col col-sm-6">
                                <div class="about-me__content--col d-flex align-items-center">
                                    <div class="about-me__content--col--icon">
                                        <i class="icon-clipboard"></i>
                                    </div>
                                    <div class="">
                                        <p>100% Sucure Payment</p>
                                        <p>We ensure your money is save</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="about-me__content--col d-flex align-items-center">
                                    <div class="about-me__content--col--icon">
                                        <i class="icon-transport"></i>
                                    </div>
                                    <div class="">
                                        <p>Free Shipping</p>
                                        <p>Free shipping with discount</p>
                                    </div>
                                </div>
                            </div>
                            <div class="res-col col-sm-6">
                                <div class="about-me__content--col d-flex align-items-center">
                                    <div class="about-me__content--col--icon">
                                        <i class="icon-package"></i>
                                    </div>
                                    <div class="">
                                        <p>100% Organic Food</p>
                                        <p>100% healthy & Fresh food.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="about-enjoy">
        <div class="container-xl">
            <div class="row">
                <div class="col-sm-5">
                    <div class="about-enjoy__content">
                        <h2 class="fw-bold">We Delivered, You Enjoy Your Order.</h2>
                        <p class="about-enjoy__content--desc">Ut suscipit egestas suscipit. Sed posuere pellentesque nunc, ultrices
                            consectetur velit dapibus eu. Mauris sollicitudin dignissim diam, ac
                            mattis eros accumsan rhoncus. Curabitur auctor bibendum nunc eget
                            elementum.
                        </p>
                        <div class="about-enjoy__content--feature">
                            <div class="d-flex gap-2 align-items-center">
                                <i class="icon-check"></i>
                                <p>Sed in metus pellentesque.</p>
                            </div>
                            <div class="d-flex gap-2 align-items-center">
                                <i class="icon-check"></i>
                                <p>Fusce et ex commodo, aliquam nulla efficitur, tempus lorem.</p>
                            </div>
                            <div class="d-flex gap-2 align-items-center">
                                <i class="icon-check"></i>
                                <p>Maecenas ut nunc fringilla erat varius.</p>
                            </div>
                        </div>
                        <a href="#" class="btn-primary">Shop now
                            <i class="icon-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <div class="about-enjoy__img col-sm-7">
                    <img src=<?php echo IMG_PATH . "about-person.png" ?> class="about-enjoy-img" alt="" srcset="">
                </div>
            </div>
        </div>
    </div>

    <div class="about-team">
        <div class="container-xl">
            <div class="about-team__title">
                <h2>Our Awesome Team</h2>
                <p>Pellentesque a ante vulputate leo porttitor luctus sed eget eros. Nulla et
                    rhoncus neque. Duis non diam eget est luctus tincidunt a a mi.
                </p>
            </div>

            <div class="about-team__members">
                <div class="slick-slide">
                    <div class="card">
                        <img src=<?php echo IMG_PATH . "about-avt1.png" ?> class="card-img-top" alt="member">
                        <div class="card-body">
                            <div class="card-title">Jenny Wilson</div>
                            <div class="card-text">Ceo & Founder</div>
                        </div>
                    </div>
                </div>

                <div class="slick-slide">
                    <div class="card">
                        <img src=<?php echo IMG_PATH . "about-avt2.png" ?> class="card-img-top" alt="member">
                        <div class="card-body">
                            <div class="card-title">Jenny Wilson</div>
                            <div class="card-text">Ceo & Founder</div>
                        </div>
                    </div>
                </div>

                <div class="slick-slide">
                    <div class="card">
                        <img src=<?php echo IMG_PATH . "about-avt3.png" ?> class="card-img-top" alt="member">
                        <div class="card-body">
                            <div class="card-title">Jenny Wilson</div>
                            <div class="card-text">Ceo & Founder</div>
                        </div>
                    </div>
                </div>

                <div class="slick-slide">
                    <div class="card">
                        <img src=<?php echo IMG_PATH . "about-avt4.png" ?> class="card-img-top" alt="member">
                        <div class="card-body">
                            <div class="card-title">Jenny Wilson</div>
                            <div class="card-text">Ceo & Founder</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once "./mvc/views/partials/feedbacks.php" ?>
<?php include "./mvc/views/partials/company.php" ?>

<?php
$content = ob_get_contents();
ob_end_clean();
require_once('./mvc/views/template.php');
?>