<?php
session_start();
ob_start();
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}
if (isset($_POST['addtocart'])) {
    $flag = false;
    for ($i = 0; $i < count($_SESSION['cart']); $i++) {
        echo "them sp";
        if ($_POST['idSP'] == $_SESSION['cart'][$i]['idSP']) {
            $_SESSION['cart'][$i]['soluong'] += $_POST['soluong'];
            $flag = true;
            break;
        }
    }
    if ($flag == false) {
        $i = count($_SESSION['cart']);
        $_SESSION['cart'][$i]['idSP'] = $_POST['idSP'];
        $_SESSION['cart'][$i]['TenSP'] = $_POST['TenSP'];
        $_SESSION['cart'][$i]['soluong'] = $_POST['soluong'];
        $_SESSION['cart'][$i]['Gia'] = $_POST['Gia'];
        $_SESSION['cart'][$i]['UrlHinh'] = $_POST['UrlHinh'];
    }
    header("location:index.php?key=cart");
} else
    echo "Mua hang that bai";

if (isset($_GET['action']) && $_GET['action'] == "xoa") {

    if (count($_SESSION['cart']) == 1) {
        unset($_SESSION['cart'][0]);
    } else {
        $vitri = $_GET['vitri'];
        for ($i = $vitri; $i < (count($_SESSION['cart']) - 1); $i++) {
            $_SESSION['cart'][$i] = $_SESSION['cart'][$i + 1];
        }
        $vitrixoa = count($_SESSION['cart']) - 1;
        unset($_SESSION['cart'][$vitrixoa]);
    }
    header("location:index.php?key=cart");
}
if(isset($_POST['capnhat'])){

    for($i=0;$i<count($_SESSION['cart']);$i++){
        $_SESSION['cart'][$i]['soluong'] = $_POST['soluong'.$i];
    }
    header("location:index.php?key=cart");
}
?>