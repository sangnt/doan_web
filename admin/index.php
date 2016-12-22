<?php
session_start();
ob_start();
require_once("../DB.php");
$mysql = new DB;
$mysql->connect("localhost", "root", "", "doan_web");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Dashboard - Admin Template</title>
    <link rel="stylesheet" type="text/css" href="css/theme1.css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"/>
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="js/doanhthu.js"></script>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

</head>

<body>
<div id="container">

    <!--menu-->
    <div id="header">

        <div id="topmenu">
            <ul>
                <li <?php if (!isset($_GET['key'])) { ?> class="current" <?php } ?>><a href="index.php">TRANG CHỦ</a>
                </li>
                <li <?php if (isset($_GET['key']) && $_GET['key'] == 'cl') { ?> class="current" <?php } ?> ><a
                            href="index.php?key=cl">CHỦNG LOẠI</a></li>
                <li <?php if (isset($_GET['key']) && $_GET['key'] == 'l') { ?> class="current" <?php } ?>><a
                            href="index.php?key=l">LOẠI</a></li>
                <li <?php if (isset($_GET['key']) && $_GET['key'] == 'sp') { ?> class="current" <?php } ?>><a
                            href="index.php?key=sp">SẢN PHẨM</a></li>
                <li><a href="#">USERS</a></li>

            </ul>
        </div>
    </div>
    <!--//menu-->

    <div id="wrapper">
        <div id="content">
            <?php
            if (isset($_SESSION['user'])) {
                ?>
                <p>Chào bạn <?php echo $_SESSION['user']; ?></p>
                <?php
            }
            ?>

            <div>
                <?php

                if (isset($_GET['key'])) {

                    switch ($_GET['key']) {

                        case "cl":
                            include_once("chungloai.php");
                            break;
                        case "l":
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

                } else {
                    ?>

                    <div id="columnchart_values2016"></div>
                    <div id="columnchart_values2015"></div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>
</body>
</html>
