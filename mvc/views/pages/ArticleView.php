<?php
$pageTitle = "About";
ob_start();
?>

<?php require_once "./mvc/views/partials/breadcrumb.php" ?>

<div class="article">
    <div class="container-xl">
        <div class="row">
            <div class="col-sm-4">
                <button type="button" class="btn-primary product__sidebar--action">
                    <span>Filter</span>
                    <i class="icon-filter2"></i>
                </button>

                <div class="js-add-modal">
                    <form method="GET" action="" class="form-horizontal">
                        <button type="submit" class="border-0">
                            <i class="icon-search"></i>
                        </button>
                        <input type="text" class="" placeholder="Search...">
                    </form>

                    <div class="article__category">
                        <p class="article__category--title">Top Categories</p>
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="article__category--name">Fresh Fruit</p>
                            <p class="article__category--quantity">(134)</p>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="article__category--name">Vegetables</p>
                            <p class="article__category--quantity">(134)</p>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="article__category--name">Cooking</p>
                            <p class="article__category--quantity">(134)</p>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="article__category--name">Snacks</p>
                            <p class="article__category--quantity">(134)</p>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="article__category--name">Beverages</p>
                            <p class="article__category--quantity">(134)</p>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="article__category--name">Bread & Bakery</p>
                            <p class="article__category--quantity">(134)</p>
                        </div>
                    </div>

                    <div class="article__category">
                        <p class="article__category--title">Our Gallery</p>
                        <div class="article__category--gallery d-flex flex-wrap gap-2">
                            <img src=<?php echo IMG_PATH . "gallery.png" ?> alt="gallery" />
                            <img src=<?php echo IMG_PATH . "gallery1.png" ?> alt="gallery" />
                            <img src=<?php echo IMG_PATH . "gallery2.png" ?> alt="gallery" />
                            <img src=<?php echo IMG_PATH . "gallery3.png" ?> alt="gallery" />
                            <img src=<?php echo IMG_PATH . "gallery4.png" ?> alt="gallery" />
                            <img src=<?php echo IMG_PATH . "gallery5.png" ?> alt="gallery" />
                            <img src=<?php echo IMG_PATH . "gallery6.png" ?> alt="gallery" />
                            <img src=<?php echo IMG_PATH . "gallery7.png" ?> alt="gallery" />
                        </div>
                    </div>

                    <div class="article__category">
                        <p class="article__category--title">Recently Added</p>
                        <?php for ($i = 0; $i < 3; $i++) : ?>
                            <div class="article__category--recently">
                                <img src=<?php echo IMG_PATH . "article-avt.png" ?> alt="article-recently">
                                <div class="article__category--recently--info">
                                    <p>Curabitur porttitor orci eget nequ accumsan.</p>
                                    <div class="article__category--recently--info--date">
                                        <i class="icon-calendar"></i>
                                        <p>Apr 25, 2021</p>
                                    </div>
                                </div>
                            </div>
                        <?php endfor ?>
                    </div>
                </div>
            </div>

            <div class="col-sm-8">
                <div class="res-sidebar-action">
                    <button type="button" class="btn-primary product__sidebar--action js-action-gallery" data-bs-toggle="modal" data-bs-target="#galleryModal">
                        <span>Filter</span>
                        <i class="icon-filter2"></i>
                    </button>
                    <!-- The Modal -->
                    <div class="modal" id="galleryModal">
                        <div class="galleryModal modal-dialog position-absolute m-0">
                            <div class="modal-content">
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <!-- Modal body -->
                                <div class="modal-body filter-body"></div>
                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="d-flex align-items-center justify-content-between">
                    <select name="" class="product__filter--action">
                        <option value="">Latest</option>
                        <option value="">A -> Z</option>
                        <option value="">Z -> A</option>
                        <option value="">Blog from new to old</option>
                        <option value="">Blog from old to new</option>
                    </select>
                    <p class="product__filter--result"><span>52</span> Results Found</p>
                </div>
                <div class="article__list">
                    <?php
                    $img = "article-avt.png";
                    $day = 18;
                    $month = "nov";
                    $category = "Food";
                    $author = "Admin";
                    $numComments = "65";
                    $title = "Curabitur porttitor orci eget neque accumsan venenatis. Nunc fermentum.";
                    for ($i = 0; $i < 6; $i++) :
                        include "./mvc/views/partials/article-item.php";
                    endfor ?>
                </div>
                <?php include "./mvc/views/partials/pagination.php" ?>
            </div>
        </div>
    </div>

    <?php require_once "./mvc/views/partials/footer-child.php" ?>
</div>

<?php
$content = ob_get_contents();
ob_end_clean();
require_once('./mvc/views/template.php');
?>