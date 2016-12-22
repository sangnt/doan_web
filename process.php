<?php
    session_start();
    ob_start();
    require_once("controller.php");
    $store = new bh;
    $store->connect("localhost", "root", "", "doan_web");
    //đăng nhập
    if (isset($_POST['login'])) {

        $email = $_POST['email'];
        $password = sha1($_POST['password']);
        $remember = $_POST['remember'];
        $slus = $store->dangNhap($email, $password);
        if (mysql_num_rows($slus) > 0) {
            $user = mysql_fetch_array($slus);
            $_SESSION['user'] = $user['idNguoiDung'];
            if ($remember == 1) {
                setcookie("user", $user['idNguoiDung'], time() + 60 * 60 * 24);
            }
            header("location:index.php");
        } else {
            $_SESSION['alert'] = "Password or email incorrect !";
            header("location:index.php");
        }
    }
    //đăng xuât
    if (isset($_GET['key']) && $_GET['key'] == "logout") {

        setcookie("user", "", time() - 1);
        unset($_SESSION['user']);
        header("location:index.php");
    }
?>