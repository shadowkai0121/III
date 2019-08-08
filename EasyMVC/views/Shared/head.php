<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>

    <!--   RWD-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--    線上bootstrap 4.0-->
    <link rel='stylesheet'
        href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css' />

    <!--    iconfont-->
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css'
        integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--     此網站的css-->
    <link rel="stylesheet" href="./asset/css/master.css">

    <!-- jquery plugins here-->
    <!-- jquery -->
    <script src="./asset/js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="./asset/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="./asset/js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="./asset/js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="./asset/js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="./asset/js/masonry.pkgd.js"></script>
    <!-- particles js -->
    <script src="./asset/js/owl.carousel.min.js"></script>
    <!-- swiper js -->
    <script src="./asset/js/slick.min.js"></script>
    <script src="./asset/js/gijgo.min.js"></script>
    <script src="./asset/js/jquery.nice-select.min.js"></script>
    <!-- custom js -->
    <script src="./asset/js/custom.js"></script>

    <!--此網站的js-->
    <script src="./asset/js/masterPage.js"></script>

    <!-- 各頁面的資源 -->
    <?php

if (strpos($_SERVER['REQUEST_URI'], "head")) {
    echo "here is head";
} else {
    echo '
    <!--start  此頁增加的css，其他頁暫不用 -->
    <!-- animate CSS -->
    <link rel="stylesheet" href="./asset/css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="./asset/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./asset/css/classy-nav.css" />
    <!--sample檔的css-->
    <link rel="stylesheet" href="./asset/css/OrgIndex.css" />
    <!--修改sample檔後的css-->
    <link rel="stylesheet" href="./asset/css/index.css" />
    <!--end  此頁增加的css，其他頁暫不用 -->';
}
?>
</head>

<body>

    <!--start  navbar-->
    <!--網頁版的nav-->
    <div class="topMenu">
        <div id="navLogo">
            <a href="masterPage.html"><img src="./asset/img/logo.png" alt=""></a>
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
                            <img src="./asset/img/food_menu/3.jpg" />
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
                            <img src="./asset/img/food_menu/single_food_1.png" />
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
                            <img src="./asset/img/food_menu/single_food_1.png" />
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