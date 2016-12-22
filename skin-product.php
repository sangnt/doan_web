<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Page Description">
    <meta name="author" content="Nguyen Thanh Sang">
    <title>Skin-product</title>
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Anton|Noticia+Text|Open+Sans|Open+Sans+Condensed:300"
          rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">

    <!-- Bootstrap + CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/header.css" rel="stylesheet">
    <link href="css/skin-product.css" rel="stylesheet">
    <link href="css/footer.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/detail-product.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Important Owl stylesheet -->
    <link rel="stylesheet" href="css/owl.carousel.css">

    <!-- Default Theme -->
    <link rel="stylesheet" href="css/owl.theme.css">

    <!--  jQuery 1.7+  -->
    <script src="js/jquery-1.9.1.min.js"></script>

    <!-- Include js plugin -->
    <script src="js/owl.carousel.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
<!--header-->
<div id="header">
    <div class="container-fluid">
        <div class="cart s35label col-sm-offset-11"><a href="cart.html">Cart:</a></div>
        <div class="navbar">
            <div class="navbar-header">
                <!-- Button show menu -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                        aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- End Button -->

                <!-- Logo -->
                <a class="navbar-brand" href="index.html">
                    <span class="font_1"><b>Enchanter</b></span>
                </a>
                <!-- End Logo -->
            </div>
            <!-- Menu -->
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.html" class="title_menus">HOME</a>
                    </li>
                    <li>
                        <a href="our-story.html" class="title_menus">OUR STORY</a>
                    </li>
                    <li class="dropdown">
                        <a href="our-products.html" class="title_menus">OUR PRODUCTS</a>
                        <ul class="dropdown-content">
                            <li><a href="skin-product.html">SKIN PRODUCTS</a></li>
                            <li><a href="hair-product.html">HAIR PRODUCTS</a></li>
                            <li><a href="holistic-remedies.html">HOLISTIC REMEDIES</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="find-us.html" class="title_menus">FIND US</a>
                    </li>
                    <li>
                        <a href="talk-to-us.html" class="title_menus">TALK TO US</a>
                    </li>
                </ul>
            </div>
            <!-- End Menu -->
        </div>
    </div>
</div>
<!-- End header-->

<!-- Content -->
<div id="skin-product">
    <!-- Content header -->
    <div class="jumbotron">
        <div class="container_content">
            <!-- skin-product Info -->
            <div class="skin-product-info col-sm-12">
                <div>
                    <div>
                        <img src="images/icon.jpg">
                    </div>
                    <h5 class="font_2">SKIN PRODUCTS</h5>
                    <h5 class="font_4" style="margin-top: -10px;">CLEANSE<i class="fa fa-star" aria-hidden="true"></i>TONE<i
                            class="fa fa-star" aria-hidden="true"></i>MOISTURIZE</h5>
                    <h5 class="font_7">ALL OUR PRODUCTS ARE ALWAYS RESPONSIBLY SOURCED, ETHICALLY<br>CREATED AND NEVER
                        TESTED ON ANIMALS</h5>

                    <p class="line_1"></p>
                    <h5 class="font_8" style="margin-top:15px;"><em>Only the purest ingredients create holistic remedies
                        for</em></h5>

                    <div class="title-line">
                        <h3 class="font_5">BODY, MIND & SOUL</h3>
                    </div>
                </div>
            </div>
            <!-- End skin-product Info -->
        </div>
    </div>
    <!-- End Content header -->
    <!-- Content product -->
    <div class="product_skin">
        <div class="container-fluid">
            <div class="row">
                <div class="container_content">
                    <div class="img-skin">
                        <a><img src="images/skin-product002.jpg"></a>

                        <div class="sale">ON SALE!</div>
                        <div class="detail-product" id="myBtn">
                            <h5 class="font_6" style="border-bottom: solid 1px;">I'm a product</h5>
                            <h5 class="font_8">I'm a product detail. I'm a great place to add more details about your
                                product such as sizing, material, care instructions and cleaning instructions.</h5>
                            <h5 class="font_8"><strong style="font-weight: bold;">Read More &gt;&gt;</strong></h5>
                            <span class="font_6">$9.99 </span>
                            <span class="font_7"><strike style="text-decoration: line-through;"> $12.99</strike></span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Content product -->
</div>
<!-- End Content  -->

<!-- Footer  -->
<div id="footer">
    <div class="container-fluid">
        <div class="contact">
            <div class="social_network">
                <a href="#"><img src="images/fb.JPG"></a>
                <a href="#"><img src="images/tw.JPG"></a>
                <a href="#"><img src="images/gp.JPG"></a>
            </div>
            <span class="phone_number font_8">
               <font> 0908031394 || 0966964880</font>
            </span>
        </div>
    </div>
</div>

<!-- End Footer  -->
<!-- The Modal -->
<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <span class="close">&times;</span>
            <h2 class="font_6">I'm a product</h2>
        </div>
        <div class="modal-body">
            <div id="owl-demo" class="owl-carousel owl-theme" >
                <div class="item">
                    <div class="row">
                        <div class="col-xs-12">

                            <div class="col-sm-2"></div>
                            <div class="col-sm-6">
                                <div class="on-sale"><p class="font_6">ON SALE!</p></div>
                                <img class="img-responsive" src="images/skin-product001-detail.jpg" alt="...">
                            </div>

                            <div class="col-sm-4">
                                <div>
                                    <h5 class="font_4" style="color: #000;">$9.99</h5>
                                    <h5 class="font_8"><strike style="color: #000;">$12.99</strike>
                                    </h5>
                                </div>
                                <h5 class="line"></h5>
                                <h5 class="font_8" style="color: #000;">I'm a product overview. Here you can
                                    write
                                    more information about your
                                    product. Buyers like to know what they’re getting before they purchase.</h5>
                                <h5 class="font_8"><span>Sizes</span></h5>
                                <span class="size-info">S</span>
                                <span class="size-info">M</span>
                                <span class="size-info">L</span>
                                <h5 class="line"></h5>

                                <div>
                                    <a href="#" class="btn btn-primary arrow_box">ADD TO CART</a>
                                </div>
                                <h5 class="font_8" style="color: #000;">I'm a product overview. Here you can
                                    write
                                    more information about your
                                    product. Buyers like to know what they’re getting before they purchase.</h5>

                                <h5 class="brand-icons">
                                    <i class="fa fa-google-plus-official" aria-hidden="true"></i>
                                    <i class="fa fa-snapchat-square" aria-hidden="true"></i>
                                    <i class="fa fa-pinterest-square" aria-hidden="true"></i>
                                    <i class="fa fa-twitter-square" aria-hidden="true"></i>
                                    <i class="fa fa-facebook-official" aria-hidden="true"></i>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item active">
                    <div class="row">
                        <div class="col-xs-12">

                            <div class="col-sm-2"></div>
                            <div class="col-sm-6">
                                <div class="on-sale"><p class="font_6">ON SALE!</p></div>
                                <img class="img-responsive" src="images/skin-product002-detail.jpg" alt="...">
                            </div>

                            <div class="col-sm-4">
                                <div>
                                    <h5 class="font_4" style="color: #000;">$9.99</h5>
                                    <h5 class="font_8"><strike style="color: #000;">$12.99</strike>
                                    </h5>
                                </div>
                                <h5 class="line"></h5>
                                <h5 class="font_8" style="color: #000;">I'm a product overview. Here you can
                                    write
                                    more information about your
                                    product. Buyers like to know what they’re getting before they purchase.</h5>
                                <h5 class="font_8"><span>Sizes</span></h5>
                                <span class="size-info">S</span>
                                <span class="size-info">M</span>
                                <span class="size-info">L</span>
                                <h5 class="line"></h5>

                                <div>
                                    <a href="#" class="btn btn-primary arrow_box">ADD TO CART</a>
                                </div>
                                <h5 class="font_8" style="color: #000;">I'm a product overview. Here you can
                                    write
                                    more information about your
                                    product. Buyers like to know what they’re getting before they purchase.</h5>

                                <h5 class="brand-icons">
                                    <i class="fa fa-google-plus-official" aria-hidden="true"></i>
                                    <i class="fa fa-snapchat-square" aria-hidden="true"></i>
                                    <i class="fa fa-pinterest-square" aria-hidden="true"></i>
                                    <i class="fa fa-twitter-square" aria-hidden="true"></i>
                                    <i class="fa fa-facebook-official" aria-hidden="true"></i>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item active">
                    <div class="row">
                        <div class="col-xs-12">

                            <div class="col-sm-2"></div>
                            <div class="col-sm-6">
                                <div class="on-sale"><p class="font_6">ON SALE!</p></div>
                                <img class="img-responsive" src="images/skin-product003-detail.jpg" alt="...">
                            </div>

                            <div class="col-sm-4">
                                <div>
                                    <h5 class="font_4" style="color: #000;">$9.99</h5>
                                    <h5 class="font_8"><strike style="color: #000;">$12.99</strike>
                                    </h5>
                                </div>
                                <h5 class="line"></h5>
                                <h5 class="font_8" style="color: #000;">I'm a product overview. Here you can
                                    write
                                    more information about your
                                    product. Buyers like to know what they’re getting before they purchase.</h5>
                                <h5 class="font_8"><span>Sizes</span></h5>
                                <span class="size-info">S</span>
                                <span class="size-info">M</span>
                                <span class="size-info">L</span>
                                <h5 class="line"></h5>

                                <div>
                                    <a href="#" class="btn btn-primary arrow_box">ADD TO CART</a>
                                </div>
                                <h5 class="font_8" style="color: #000;">I'm a product overview. Here you can
                                    write
                                    more information about your
                                    product. Buyers like to know what they’re getting before they purchase.</h5>

                                <h5 class="brand-icons">
                                    <i class="fa fa-google-plus-official" aria-hidden="true"></i>
                                    <i class="fa fa-snapchat-square" aria-hidden="true"></i>
                                    <i class="fa fa-pinterest-square" aria-hidden="true"></i>
                                    <i class="fa fa-twitter-square" aria-hidden="true"></i>
                                    <i class="fa fa-facebook-official" aria-hidden="true"></i>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<script>
    // Get the modal
    var modal = document.getElementById('myModal');

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function () {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    $(document).ready(function() {

        $("#owl-demo").owlCarousel({

            navigation : true, // Show next and prev buttons
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem:true

            // "singleItem:true" is a shortcut for:
            // items : 1,
            // itemsDesktop : false,
            // itemsDesktopSmall : false,
            // itemsTablet: false,
            // itemsMobile : false

        });

    });
</script>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Include all compiled plugins (below), or include individual files as needed -->

</body>
</html>