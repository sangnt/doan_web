<?php
require_once ("../controller.php");
$store = new bh;
$store->connect("localhost", "root", "", "doan_web");
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Anton|Noticia+Text|Open+Sans|Open+Sans+Condensed:300"
          rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"/>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</head>
<body>
<div class="banner">
    <nav class="nav navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header" href="#">
                <a href="../index.php" class="navbar-brand">SOUVENIR</a>
            </div>
            <form action="" method="post" role="form" class="navbar-form navbar-right" style="margin-right: 10px;">
                <div class="form-group navbar-right">
                    <label for="search"></label>
                    <input type="text" class="form-control" name="search" id="search" placeholder="Search">
                    <button><i class="fa fa-search" aria-hidden="true" style="font-size: 18px;"></i></button>
                </div>
            </form>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-md-2 sidebar">
                <ul class="nav nav-sidebar">
                    <li><a href="index.php">Trang chủ</a></li>
                    <li><a href="index.php?key=cl">Chủng loại</a></li>
                    <li><a href="index.php?key=lsp">Loai sản phẩm</a></li>
                    <li><a href="index.php?key=sp">Sản phẩm</a></li>
                </ul>
            </div>
            <div class="col-md-10 col-md-offset-2">
                <div class="col-xs-12">
                    <div>
                        <?php

                        if (isset($_GET['key'])) {

                            switch ($_GET['key']) {

                                case "cl":
                                    include_once("chungloai.php");
                                    break;
                                case "lsp":
                                    include_once("loai.php");
                                    break;
                                case "sp":
                                    include_once("sanpham.php");
                                    break;
                                case "themcl":
                                    include_once("themcl.php");
                                    break;
                                case "theml":
                                    include_once("theml.php");
                                    break;
                                case "themsp":
                                    include_once("themsp.php");
                                    break;
                                case "suacl":
                                    include_once("suacl.php");
                                    break;
                                case "sual":
                                    include_once("sual.php");
                                    break;
                                case "suasp":
                                    include_once("suasp.php");
                                    break;
                            }

                        }
                        ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<script src="js/jquery-1.9.1.min.js"></script>
</body>
</html>
