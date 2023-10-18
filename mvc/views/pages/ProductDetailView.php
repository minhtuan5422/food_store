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
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <p>Brand:</p>
                                <img src=<?php echo IMG_PATH . "brand.svg" ?> class="ms-2" alt="brand" />
                            </div>
                            <div class="d-flex align-items-center gap-2">
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
                        <div class="d-flex align-items-center">
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

        <section id="wrapper">
            <div class="content">
                <!-- Tab links -->
                <div class="tabs">
                    <button class="tablinks active" data-country="London">
                        <p data-title="London">London</p>
                    </button>
                    <button class="tablinks" data-country="Paris">
                        <p data-title="Paris">Paris</p>
                    </button>
                    <button class="tablinks" data-country="Barcelona">
                        <p data-title="Barcelona">Barcelona</p>
                    </button>
                    <button class="tablinks" data-country="Madrid">
                        <p data-title="Madrid">Madrid</p>
                    </button>
                </div>

                <!-- Tab content -->
                <div class="wrapper_tabcontent">
                    <div id="London" class="tabcontent active">
                        <h3>London</h3>
                        <p>London is the capital of Great Britain. It is one of the greatest cities in the world. It is an important business and financial centre. It is an intellectual centre, too. Everywhere in London, there are open spaces: Hyde Park and Regent Park are the largest. The City is the oldest part of London. </p>
                    </div>

                    <div id="Paris" class="tabcontent">
                        <h3>Paris</h3>
                        <p>Paris is in the Paris department of the Paris-Isle-of-France region The French historic, political and economic capital, with a population of only 2.5 million is located in the northern part of France. One of the most beautiful cities in the world. Home to historical monuments such as Notre Dame, the Eiffel tower (320m), Bastille, Louvre and many more. </p>
                    </div>

                    <div id="Barcelona" class="tabcontent">
                        <h3>Barcelona</h3>
                        <p>Barcelona has been an urban laboratory since the high Medieval Ages. A place of diversity, a backdrop for a multiplicity of social and cultural processes on multiple scales that reflect different ways of constructing the future, a city with a long experience of urban life and social innovations. </p>
                    </div>

                    <div id="Madrid" class="tabcontent">
                        <h3>Madrid</h3>
                        <p>Madrid is in the middle of Spain, in the Community of Madrid. The Community is a large area that includes the city as well as small towns and villages outside the city. 7 million people live in the Community. More than 3 million live in the city itself.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<?php
$content = ob_get_contents();
ob_end_clean();
require_once('./mvc/views/template.php');
?>