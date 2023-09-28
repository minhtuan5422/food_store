<?php
    $pageTitle = "Trang chủ";
    ob_start();
?>

<slider class="slider">
    <div class="slider-single">
        <div class="position-relative">
            <img src=<?php echo IMG_PATH . "slider.png"?> alt="" srcset="">

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
            <img src=<?php echo IMG_PATH . "slider.png"?> alt="" srcset="">
        </div>
    
        <div class="">
            <img src=<?php echo IMG_PATH . "slider.png"?> alt="" srcset="">
        </div>
    </div>

   
</slider>

<?php
    $content = ob_get_contents();
    ob_end_clean(); 
    require_once('./mvc/views/template.php');
?>