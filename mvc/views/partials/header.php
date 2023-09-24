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
                     <a class="nav-link" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">About Us</a>
                  </li>
                  <li class="nav-item dropdown">
                     <a href="#" class="nav-link" id="shopDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span>Shop</span>
                        <p class="icon-chevron-right"></p>
                     </a>
                     <ul class="dropdown-menu border-0 dropdown-expands" aria-labelledby="shopDropdown">
                        <li><a class="dropdown-item" href="#">Link 1</a></li>
                        <li><a class="dropdown-item" href="#">Link 2</a></li>
                        <li><a class="dropdown-item" href="#">Link 3</a></li>
                     </ul>
                  </li>
   
                  <li class="nav-item dropdown">
                     <a href="#" class="nav-link" data-bs-toggle="dropdown">
                        <span>Blog</span>
                        <i class="icon-chevron-right"></i>
                     </a>
                     <ul class="dropdown-menu border-0">
                        <li><a class="dropdown-item" href="#">Link 1</a></li>
                        <li><a class="dropdown-item" href="#">Link 2</a></li>
                        <li><a class="dropdown-item" href="#">Link 3</a></li>
                     </ul>
                  </li>
   
                  <li class="nav-item">
                     <a class="nav-link" href="#">Contact</a>
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
                  <button type="button" class="navbar__action--expands--btn border-0" data-bs-toggle="modal" data-bs-target="#header-search">
                     <i class="icon-shopping-cart"></i>
                  </button>
                  <!-- The Modal -->
                  <div class="modal fade" id="header-search">
                     <div class="modal-dialog">
                        <div class="modal-content">
   
                           <!-- Modal Header -->
                           <div class="modal-header">
                              <h4 class="modal-title">Modal Heading</h4>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                           </div>
   
                           <!-- Modal body -->
                           <div class="modal-body">
                              Modal body..
                           </div>
   
                           <!-- Modal footer -->
                           <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                           </div>
   
                        </div>
                     </div>
                  </div>
               </div>
   
               <a href="#" class="res-none">
                  <i class="icon-user"></i>
               </a>
            </div>
         </div>
      </div>
   </nav>
</header>