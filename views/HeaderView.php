 
<header>
    <!-- Header desktop -->
    <div class="container-menu-desktop">
        <!-- Topbar -->
        <div class="top-bar">
            <div class="content-topbar flex-sb-m h-full container">
                <div class="left-top-bar">
                    Free shipping for standard order over $100
                </div>

                <div class="right-top-bar flex-w h-full">
                    <?php if(isset($_SESSION["customer_email"]) == false): ?>
                        <a href="index.php?controller=account&action=login" class="flex-c-m trans-04 p-lr-25">
                            Đăng nhập
                        </a>
                        <a href="index.php?controller=account&action=register" class="flex-c-m trans-04 p-lr-25">
                            Đăng ký
                        </a>
                    <?php else: ?>
                        <a style="margin-top: 10px;" href="#">Xin chào <?php echo $_SESSION["customer_email"]; ?>   
                        <a href="index.php?controller=account&action=logout" class="flex-c-m trans-04 p-lr-25">
                            Đăng xuất
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <div class="wrap-menu-desktop">
            <nav class="limiter-menu-desktop container">

                <!-- Logo desktop -->       
                <a href="index.php" class="logo">
                    <img src="assets/frontend/images/icons/logo-01.png" alt="IMG-LOGO">
                </a>

                <!-- Menu desktop -->
                <div class="menu-desktop">
                    <ul class="main-menu">
                        <li class="active-menu">
                            <a href="trang-chu">Trang chủ</a>
                        </li>

                        <li>
                            <a href="">Sản phẩm</a>
                            <ul class="sub-menu">
                                <?php $categories = $this->modelGetCategories(); ?>
                                <?php foreach($categories as $rows): ?>
                                    <li style="width: 1200px;"><a href="index.php?controller=products&action=categories&category_id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></li>
                                    <?php $categoriesSub = $this->modelGetCategoriesSub($rows->id); ?>
                                    <?php foreach($categoriesSub as $rowsSub): ?>
                                        <li style="margin-left: 30px;"><a href="index.php?controller=products&action=categories&category_id=<?php echo $rowsSub->id; ?>"><?php echo $rowsSub->name; ?></a></li>
                                    <?php endforeach; ?>
                                <?php endforeach; ?>
                            </ul>
                        </li>

                        <li>
                            <a href="gio-hang">Giỏ hàng</a>
                        </li>
                        <li>
                            <a href="san-pham-yeu-thich">Sản phẩm yêu thích</a>
                        </li>

                        <li>
                            <a href="tin-tuc">Tin tức</a>
                        </li>

                        <li>
                            <a href="lien-he">Liên hệ</a>
                        </li>
                    </ul>
                </div>  

                <!-- Icon header -->
                <div class="wrap-icon-header flex-w flex-r-m">
                    <!-- search -->
                    <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
                        <i class="zmdi zmdi-search">                               
                        </i>
                    </div>
                    <!-- search -->
                    <!-- icon cart -->
                    <?php 
                    $numCart = 0;
                    if(isset($_SESSION["cart"])){
                        foreach($_SESSION["cart"] as $product)
                        {
                            $numCart++;
                        }
                    } 
                    ?>
                    <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="<?php echo $numCart; ?>"  >
                        <i class="zmdi zmdi-shopping-cart"></i>
                    </div>

                    <!-- icon cart -->
                    <?php 
                    $numWhidhlist = 0;
                    if(isset($_SESSION["Wishlist"])){
                        foreach($_SESSION["Wishlist"] as $product)
                        {
                            $numWhidhlist++;
                        }
                    } 
                    ?>
                    <!-- icon withlist -->
                    <a href="index.php?controller=wishlist" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti"  data-notify="<?php echo $numWhidhlist; ?>">
                        <i class="zmdi zmdi-favorite-outline"></i>
                    </a>
                    <!-- icon withlist -->
                </div>
                <!-- Icon header -->

            </nav>
        </div>  
    </div>

    <!-- Header Mobile -->
    <div class="wrap-header-mobile">
        <!-- Logo moblie -->        
        <div class="logo-mobile">
            <a href="assets/frontend/index.html"><img src="assets/frontend/images/icons/logo-01.png" alt="IMG-LOGO"></a>
        </div>

        <!-- Icon header -->
        <div class="wrap-icon-header flex-w flex-r-m m-r-15">
            <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
                <i class="zmdi zmdi-search">

                </i>
            </div>

            <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="2">
                <i class="zmdi zmdi-shopping-cart"></i>
            </div>

            <a href="assets/frontend/#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti" data-notify="0">
                <i class="zmdi zmdi-favorite-outline"></i>
            </a>
        </div>

        <!-- Button show menu -->
        <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </div>
    </div>


    <!-- Menu Mobile -->
    <div class="menu-mobile">
        <ul class="topbar-mobile">
            <li>
                <div class="left-top-bar">
                    Free shipping for standard order over $100
                </div>
            </li>

            <li>
                <div class="right-top-bar flex-w h-full">
                    <a href="assets/frontend/#" class="flex-c-m p-lr-10 trans-04">
                        Help & FAQs
                    </a>

                    <a href="index.php?controller=account&action=login" class="flex-c-m p-lr-10 trans-04">
                        My Account
                    </a>

                    <a href="assets/frontend/#" class="flex-c-m p-lr-10 trans-04">
                        EN
                    </a>

                    <a href="assets/frontend/#" class="flex-c-m p-lr-10 trans-04">
                        USD
                    </a>
                </div>
            </li>
        </ul>

        <ul class="main-menu-m">
            <li>
                <a href="assets/frontend/index.html">Home</a>
                <ul class="sub-menu-m">
                    <li><a href="assets/frontend/index.html">Homepage 1</a></li>
                    <li><a href="assets/frontend/home-02.html">Homepage 2</a></li>
                    <li><a href="assets/frontend/home-03.html">Homepage 3</a></li>
                </ul>
                <span class="arrow-main-menu-m">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                </span>
            </li>

            <li>
                <a href="assets/frontend/product.html">Shop</a>
            </li>

            <li>
                <a href="assets/frontend/shoping-cart.html" class="label1 rs1" data-label1="hot">Features</a>
            </li>

            <li>
                <a href="assets/frontend/blog.html">Blog</a>
            </li>

            <li>
                <a href="assets/frontend/about.html">About</a>
            </li>

            <li>
                <a href="assets/frontend/contact.html">Contact</a>
            </li>
        </ul>
    </div>

    <!-- Modal Search -->
    <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
        <div class="container-search-header" style="position: relative;">
            <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
                <img src="assets/frontend/images/icons/icon-close2.png" alt="CLOSE">
            </button>
            <!-- search header -->
            <form class="wrap-search-header flex-w p-l-15" >
                <input class="plh3" type="text" value="" name="search" placeholder="Search..." id="key" class="input-control">
                <button class="flex-c-m trans-04" tyle="submit">
                    <i class="zmdi zmdi-search" onclick="return search();" style="position: absolute;">                           
                    </i>
                </button>
                <div class="smart-search">
                  <ul>
                  </ul>
              </div>
          </div>
          <style type="text/css">
            .container-search-header{
                margin-top: -300px;
            }
            .smart-search img{width: 70px; margin-right: 5px;}
            .smart-search{position: absolute; width: 100%; z-index: 1; display: none; max-height: 350px; overflow: scroll; margin-top: 120px;}
            .smart-search ul{padding:0px; margin:0px; list-style: none;}
            .smart-search ul li{background: white; border-bottom: 1px solid #dddddd;}
        </style>
        <script type="text/javascript">
            $(document).ready(function(){
                          //khi go phim vao o textbox
                          $("#key").keyup(function(){
                            //lay gia tri vua nhap vao
                            var strKey = $("#key").val();
                            //ham trim() loai bo khoang trang
                            strKey = strKey.trim();
                            if(strKey != ""){
                              //hien thi the html co class=smart-search
                              $(".smart-search").attr("style","display:block");
                              //---
                              //ajax de lay du lieu
                              $.ajax({
                                url: "index.php?controller=products&action=ajax&key="+strKey,
                                success: function( result ) {
                                  //clear tat ca cac the li
                                  $(".smart-search ul").empty();
                                  //them ket qua vua tim thay
                                  $(".smart-search ul").append(result);
                              }
                          });
                              //---
                          }else
                          $(".smart-search").attr("style","display:none");
                      });
                      });
                  </script>
                  <!--</form>--> 
              </div>
              <?php 
              $numberProduct = 0;
              if(isset($_SESSION["cart"])){
                foreach($_SESSION["cart"] as $product){
                  $numberProduct++;
              }
          }
          ?>
      </form>
      <!-- search header -->
  </div>
</div>
</header>

<!-- Cart -->
<div class="wrap-header-cart js-panel-cart">
    <div class="s-full js-hide-cart"></div>

    <div class="header-cart flex-col-l p-l-65 p-r-25">
        <div class="header-cart-title flex-w flex-sb-m p-b-8">
            <span class="mtext-103 cl2">
                Your Cart
            </span>

            <div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
                <i class="zmdi zmdi-close"></i>
            </div>
        </div>

        <div class="header-cart-content flex-w js-pscroll">
            <?php if(isset($_SESSION["cart"])): ?>
                <?php foreach($_SESSION["cart"] as $product): ?>
                    <ul class="header-cart-wrapitem w-full">
                        <li class="header-cart-item flex-w flex-t m-b-12">
                            <div class="header-cart-item-img">
                                <img src="assets/upload/products/<?php echo $product['photo']; ?>" alt="IMG">
                            </div>

                            <div class="header-cart-item-txt p-t-8">
                                <a href="index.php?controller=products&action=detail&id=<?php echo $product['id']; ?>" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                                    <?php echo $product['name']; ?>
                                </a>

                                <span class="header-cart-item-info">
                                    <?php echo number_format($product['price']); ?>
                                </span>
                            </div>
                        </li>
                    </ul>
                <?php endforeach; ?>
            <?php endif; ?>
            <?php if($numCart > 0): ?>
                <div class="w-full">
                    <div class="header-cart-buttons flex-w w-full">
                        <a href="index.php?controller=cart" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
                            Xem hóa đơn
                        </a>
                    </div>
                </div>
            <?php endif; ?>
        </div>

    </div>
</div>
<!-- Cart -->
