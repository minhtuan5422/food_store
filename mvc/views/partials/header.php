<header class="header">
   <div class="header__top">
      <div class="header__top--flex container-xl d-flex justify-content-between align-content-center">
         <a href="#" class="header__top--flex--maps">
            <i class="icon-map-pin"></i>
            <span>Store Location: Lincoln- 344, Illinois, Chicago, USA</span>
         </a>

         <div class="header__top--flex--action">
            <select class="border-0" name="" id="">
               <option value="eng">Eng</option>
               <option value="vie">Vie</option>
            </select>

            <select class="border-0" name="" id="">
               <option value="usd">USD</option>
               <option value="vnd">VND</option>
            </select>
         </div>
      </div>
   </div>

   <nav class="navbar navbar-expand-xl">
      <div class="container-xl">
         <div class="d-block position-relative">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#header-navbar">
               <span class="navbar-toggler-icon border-0"></span>
            </button>

            <div class="collapse navbar-collapse" id="header-navbar">
               <ul class="navbar-nav me-auto">
                  <li class="nav-item">
                     <a class="nav-link" href=<?php echo PUBLIC_URL . "" ?>>Home</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href=<?php echo PUBLIC_URL . "about" ?>>About Us</a>
                  </li>
                  <li class="nav-item dropdown">
                     <div class="d-flex">
                        <a href=<?php echo PUBLIC_URL . "product" ?> class="nav-link">
                           Shop
                        </a>
                        <button class="icon-chevron-right border-0 bg-transparent" data-bs-toggle="collapse" data-bs-target="#shopDropdown"></button>
                     </div>
                     <ul id="shopDropdown" class="dropdown-menu border-0 collapse">
                        <li><a class="dropdown-item" href="#">Link 1</a></li>
                        <li><a class="dropdown-item" href="#">Link 2</a></li>
                        <li><a class="dropdown-item" href="#">Link 3</a></li>
                     </ul>
                  </li>

                  <li class="nav-item dropdown">
                     <div class="d-flex">
                        <a href=<?php echo PUBLIC_URL . "article" ?> class="nav-link">Blog</a>
                        <button class="icon-chevron-right border-0 bg-transparent" data-bs-toggle="collapse" data-bs-target="#blogDropdown"></button>
                     </div>
                     <ul id="blogDropdown" class="dropdown-menu border-0">
                        <li><a class="dropdown-item" href="#">Link 1</a></li>
                        <li><a class="dropdown-item" href="#">Link 2</a></li>
                        <li><a class="dropdown-item" href="#">Link 3</a></li>
                     </ul>
                  </li>

                  <li class="nav-item">
                     <a class="nav-link" href=<?php echo PUBLIC_URL . "contact" ?>>Contact</a>
                  </li>
               </ul>
            </div>
         </div>

         <a class="navbar-brand" href="./">
            <img src=<?php echo IMG_PATH . "Logo.png" ?> alt="" srcset="">
         </a>

         <div class="navbar__icon">
            <a href="#" class="navbar__contact">
               <i class="icon-phone-call"></i>
               <span>(219) 555-0114</span>
            </a>

            <div class="navbar__action d-flex align-items-center">
               <div class="navbar__action--expands">
                  <button type="button" class="border-0 navbar__action--expands--btn" data-bs-toggle="modal" data-bs-target="#header-search">
                     <i class="icon-search"></i>
                  </button>
                  <!-- The Modal -->
                  <div class="modal fade" id="header-search">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <!-- Modal Header -->
                           <div class="modal-header border-0">
                              <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                           </div>

                           <!-- Modal body -->
                           <div class="modal-body">
                              <form class="modal__form d-flex" action="" type="GET">
                                 <input type="text" class="modal__form--inp" placeholder="Enter search product...">
                                 <button type="submit" class="modal__form--submit border-0">
                                    <i class="icon-search"></i>
                                 </button>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <a href="#" class="res-none">
                  <i class="icon-heart"></i>
               </a>

               <div class="navbar__action--expands">
                  <button type="button" class="navbar__action--expands--btn js-btn-cart border-0" data-bs-toggle="modal" data-bs-target="#header-cart">
                     <i class="icon-shopping-cart"></i>
                  </button>

                  <!-- The Modal -->
                  <div class="modal modal-cart fade" id="header-cart">
                     <div class="modal-dialog modal-offcanvas">
                        <div class="modal-offcanvas__content modal-content">
                           <!-- Modal Header -->
                           <div class="modal-offcanvas__content--header modal-header border-0">
                              <h4 class="modal-title">Shopping Card <span>(<?php echo count($data['productsInCart']) ?>)</span></h4>
                              <button type="button" class="modal-offcanvas__content--header--close btn-close" data-bs-dismiss="modal"></button>
                           </div>

                           <!-- Modal body -->
                           <div class="modal-offcanvas__content--body modal-body">
                              <?php
                              $total = 0;
                              foreach ($data['productsInCart'] as $product) :
                                 $pathUrl = "D:Projectsfood_storepublicimgs";
                                 $imageFileName = substr($product['img'], strlen($pathUrl));
                                 $subTotal = $product['price'] * $product['total_quantity'];
                                 $total += $subTotal;
                              ?>
                                 <div class="modal-offcanvas__content--item d-flex align-items-center">
                                    <div class="modal-offcanvas__content--item--img">
                                       <img src=<?php echo IMG_PATH . $imageFileName ?> alt="image">
                                    </div>
                                    <div class="d-flex justify-content-between w-100">
                                       <div class="modal-offcanvas__content--item--info">
                                          <p class="modal-offcanvas__content--item--name"><?php echo $product['name'] ?></p>
                                          <p class="modal-offcanvas__content--item--text">
                                             <span><?php echo $product['weight'] . "kg" ?></span>x <strong><?php echo $product['total_quantity'] ?></strong>
                                          </p>
                                       </div>

                                       <button class="modal-offcanvas__content--item--action border-0 bg-white">
                                          <i class="icon-plus"></i>
                                       </button>
                                    </div>
                                 </div>

                                 <div class="modal-offcanvas__content--body--divider"></div>
                              <?php endforeach ?>
                           </div>

                           <!-- Modal footer -->
                           <div class="modal-offcanvas__content--footer modal-footer border-0">
                              <div class="w-100">
                                 <div class="modal-offcanvas__content--footer--wrap d-flex justify-content-between">
                                    <p class="modal-offcanvas__content--footer--info d-flex gap-2">
                                       <span><?php echo count($data['productsInCart']) ?></span>Products
                                    </p>
                                    <p class="fw-bold"><?php echo number_format($total, 0, '.', ',') . "đ"; ?></p>
                                 </div>

                                 <div class="modal-offcanvas__content--footer--link d-block">
                                    <a href=<?php echo PUBLIC_URL . "checkout" ?> class="w-100">Checkout</a>
                                    <a href=<?php echo PUBLIC_URL . "cart" ?> class="w-100">Go To Cart</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <?php
               if (!isset($_SESSION['email'])) {
                  echo '<a href="' . PUBLIC_URL . 'login" class="res-none">
                           <i class="icon-user"></i>
                        </a>';
               } else {
                  echo '
                  <div class="dropdown dropstart">
                      <button class="res-none border-0 rounded-5 text-success" data-bs-toggle="dropdown">
                          <i class="icon-user"></i>
                      </button>
                      <ul class="dropdown-menu mt-1">
                          <li>
                              <a class="dropdown-item d-flex align-items-center" href="' . PUBLIC_URL . 'admin' . '">
                                  <i class="icon-spinner"></i>
                                  <span class="ms-2">Back to Admin</span>
                              </a>
                          </li>
                          <li>
                              <a class="dropdown-item d-flex align-items-center" href="' . PUBLIC_URL . 'userdashboard' . '">
                                  <i class="icon-document-text"></i>
                                  <span class="ms-2">Profile</span>
                              </a>
                          </li>
                          <li>
                              <a class="dropdown-item d-flex align-items-center" href="./mvc/controllers/Logout.php">
                                  <i class="icon-enter"></i>
                                  <span class="ms-2">Logout</span>
                              </a>
                          </li>
                      </ul>
                  </div>
              ';
               }
               ?>
            </div>
         </div>
      </div>
   </nav>
</header>