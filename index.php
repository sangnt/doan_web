<?php
session_start();
ob_start();
require_once("controller.php");
$store = new bh;
$store->connect("localhost", "root", "", "doan_web");
if (isset($_COOKIE['user'])) {
    $_SESSION['user'] = $_COOKIE['user'];
    setcookie("user", $_SESSION['user'], time() + 60 * 60 * 24);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Page Description">
    <meta name="author" content="Nguyen Thanh Sang">
    <title>Souvenir</title>

    <!-- Bootstrap + CSS -->
        <link href="https://fonts.googleapis.com/css?family=Anton|Noticia+Text|Open+Sans|Open+Sans+Condensed:300"
              rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link href="css/header2.css" rel="stylesheet">
        <link href="css/header.css" rel="stylesheet">
        <link href="css/content.css" rel="stylesheet">
        <link href="css/footer.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/swiper.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/find-us.css" rel="stylesheet">
        <link href="css/our-products.css" rel="stylesheet">
        <link href="css/cart.css" rel="stylesheet">
        <link href="css/our-story.css" rel="stylesheet">

        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

</head>
<body>
<!--header-->
<div id="header">
    <div class="container-fluid">
        <div class="row">
            <div class="top-header">
                <ul>
                    <?php
                    $user = "";
                    if (isset($_SESSION['user'])) {
                        $kquser = $store->getUserById($_SESSION['user']);
                        $duser = mysql_fetch_array($kquser);
                        $user = $duser['HoTen'];
                    ?>
                    <li>
                        <a href="admin/index.php" class="s35label"><i class="fa fa-home" aria-hidden="true"></i><?php echo $user; ?>
                        </a></li><?php }else{?>
                    <li>
                        <a href="#" class="s35label"><i class="fa fa-home" aria-hidden="true"></i>Tài Khoản
                        </a></li><?php }?>
                    <li>
                        <a href="index.php?key=cart" class="s35label"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Giỏ
                            hàng</a>
                    </li>
                    <?php
                    if (!isset($_SESSION['user'])) {
                        ?>
                        <li>
                            <a class="s35label" data-toggle="modal" href="#myModal"><i class="fa fa-user"
                                                                                       aria-hidden="true"></i> Đăng nhập</a>
                        </li>
                    <?php } else {
                        ?>
                        <li>
                            <a class="s35label" href="process.php?key=logout"><i class="fa fa-user"
                                                                                 aria-hidden="true"></i> Đăng Xuất</a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <?php
        include_once("menu.php");
        ?>
    </div>
</div>
<!-- End header-->
<!-- Content -->
<?php
    if(isset($_GET['key'])){
        $key=$_GET['key'];
        switch($key){
            case 'loaisp'	    : include("products_loai.php")	; break;
            case 'find-us'	    : include("find-us.php")	    ; break;
            case 'our-products'	: include("our-products.php")	; break;
            case 'cart'	        : include("cart.php")           ; break;
            case 'our-story'    : include("our-story.php")		; break;
        }
    }
    else{
?>
<div id="content">
    <!-- Swiper -->
    <div class="slideshow">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="images/slideshow1.jpg"></div>
                <div class="swiper-slide"><img src="images/slideshow2.jpg"></div>
                <div class="swiper-slide"><img src="images/slideshow3.jpg"></div>

            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>

    <!-- Content main -->
    <?php
    include_once("products.php");
    ?>
    <!-- End Content main -->
</div>
<!-- End Content  -->
<?php }?>
<!-- Footer  -->
<div id="footer">
    <div class="container-fluid">
        <div class="contact">
            <div class="social_network">
                <a href="https://www.facebook.com/sangnt1905"><img src="images/fb.JPG"></a>
                <a href="#"><img src="images/tw.JPG"></a>
                <a href="#"><img src="images/gp.JPG"></a>
            </div>
            <span class="phone_number font_8">
               <font> 0963226785 || 0963226785</font>
            </span>
        </div>
    </div>
</div>
<!-- End Footer  -->

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
            </div>
            <div class="modal-body" style="padding:20px 50px;">
                <form action="process.php" method="post" role="form">
                    <div class="form-group">
                        <label for="email"><span class="glyphicon glyphicon-user"></span> Email</label>
                        <input name="email" type="text" class="form-control" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="password"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                        <input name="password" type="password" class="form-control" placeholder="Enter password">
                    </div>
                    <div class="checkbox">
                        <label><input name="remember" type="checkbox" value="1" checked>Remember me</label>
                    </div>
                    <button name="login" type="submit" class="btn btn-success btn-block"><span
                                class="glyphicon glyphicon-off"></span> Login
                    </button>
                </form>
            </div>
            <div class="modal-footer">
                <p><a href="#">Sign Up</a></p>
                <p>Forgot <a href="#">Password?</a></p>
            </div>
        </div>

    </div>
</div>
<script>
    $(document).ready(function () {
        $("#myBtn").click(function () {
            $("#myModal").modal();
        });
    });
</script>
<!-- Swiper JS -->
<script src="js/swiper.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        paginationClickable: true,
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: 2500,
        autoplayDisableOnInteraction: false
    });
</script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.9.1.min.js"></script>


</body>
</html>