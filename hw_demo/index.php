<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>

    <!--   RWD-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--    線上bootstrap 4.0-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!--    iconfont-->
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--     此網站的css-->
    <link rel="stylesheet" href="./css/master.css">
    <link rel="stylesheet" href="css/member.css">
    <link rel="stylesheet" href="css/member_sub.css ">
</head>

<body>

    <!--start  navbar-->
    <!--網頁版的nav-->
    <div class="topMenu">
        <div id="navLogo">
            <a href="masterPage.html"><img src="./img/logo.png" alt=""></a>
        </div>
        <p id="navTitleFont">Restaurant</p>
        <div class="navlinkGroup">
            <a class="a-trigger" href="" id="navTitle">&nbsp;</a>
            <a class="navShopCart a-trigger" href="#"><i class="fas fa-shopping-cart"></i>[0]</a>
            <a class="a-trigger" href="#"><i class="fas fa-user"></i>會員</a>
            <a class="a-trigger" href="productClass.html"><i class="fas fa-utensils"></i>菜單</a>
            <a class="a-trigger" href="#"><i class="fas fa-store"></i>簡介</a>
            <button id="rwdMenu" onclick="toggleClass()">
                <span>menu</span>
            </button>
        </div>
    </div>
    
    <!--行動裝置的nav-->
    <div class="bottomMenu">
        <div class="row">
            <a class="a-trigger col-sm-3" href="#"><i class="fas fa-store"></i>簡介</a>
            <a class="a-trigger col-sm-3" href="productClass.html"><i class="fas fa-utensils"></i>菜單</a>
            <a class="a-trigger col-sm-3" href="#"><i class="fas fa-user"></i>會員</a>
            <a class="navShopCart a-trigger col-sm-3" href="#"><i class="fas fa-shopping-cart"></i>[0]</a>
        </div>
    </div>
    <!--end  navbar-->

    <div class="wrapper">

        <!--start 購物車-->
        <div class="container-fluid">
            <div class="shopCart">
                <p></p>
                <div id="shopCartContent">
                    <p class="noItem">購物車內目前沒有商品</p>
                    <!--購物內容 1-->
                    <div class="shopCartItem">
                        <a href="#">
                            <img src="./img/food_menu/3.jpg" />
                            <div>
                                <p>油醋燻鮭魚</p>
                                <span>$270</span>
                            </div>
                        </a>
                        <span class="ItemQuantity">1份</span>
                        <button class="DelBtn btn btn-outline-secondary"><span class="fas fa-trash-alt"></span></button>
                    </div>

                    <!--購物內容 2-->
                    <div class="shopCartItem">
                        <a href="#">
                            <img src="./img/food_menu/single_food_1.png" />
                            <div>
                                <p>天使巧克力蛋糕</p>
                                <span>$120</span>
                            </div>
                        </a>
                        <span class="ItemQuantity">1份</span>
                        <button class="DelBtn btn btn-outline-secondary"><span class="fas fa-trash-alt"></span></button>
                    </div>

                    <!--購物內容 3-->
                    <div class="shopCartItem">
                        <a href="#">
                            <img src="./img/food_menu/single_food_1.png" />
                            <div>
                                <p>天使巧克力蛋糕</p>
                                <span>$120</span>
                            </div>
                        </a>
                        <span class="ItemQuantity">1份</span>
                        <button class="DelBtn btn btn-outline-secondary"><span class="fas fa-trash-alt"></span></button>
                    </div>
                </div>


                <div class="shopCartFooter row">
                    <p>合計：$510</p>
                    <a href="checkOut.html">立即結帳</a>
                </div>
            </div>

        </div>
        <!--end 購物車-->

        <!--start content -->
        <?php
        
        switch (isset($_GET['page'])) {
            case 'menu':
            break;
            case 'member':
            break;
            case 'newMember':
            break;
            default:
            break;
        }
        
        ?>
        <!--end content-->
        <!--必要! 為了把footer置底用-->
        <div class="push"></div>
    </div>

    <!--start Footer -->
    <footer class="bs-footer">
        <!-- Copyright -->
        <div class="py-3">
            © 2019 Copyright
            <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Big Champion&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            <!--社群icon連結-->
            <ul class="social-network social-circle">
                <li><a href="#" class="icoFacebook" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#" class="icoInstagram" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#" class="icoTwitter" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#" class="icoYoutube" title="Youtube"><i class="fab fa-youtube"></i></a></li>
            </ul>
        </div>


    </footer>
    <!--end Footer -->
    <!-- jquery plugins here-->
    <!-- jquery -->
    <script src="./js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="./js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="./js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="./js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="./js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="./js/masonry.pkgd.js"></script>
    <!-- particles js -->
    <script src="./js/owl.carousel.min.js"></script>
    <!-- swiper js -->
    <script src="./js/slick.min.js"></script>
    <script src="./js/gijgo.min.js"></script>
    <script src="./js/jquery.nice-select.min.js"></script>
    <!-- custom js -->
    <script src="./js/custom.js"></script>

    <!--此網站的js-->
    <script src="./js/masterPage.js"></script>


</body>

</html>