<?php
ob_start();
require_once("../controller.php");
$store = new bh;
$store->connect("localhost", "root", "", "doan_web");
if (isset($_POST['SuaCL'])) {
    $idCL = $_POST['idCL'];
    $TenCL = $_POST['TenCL'];
    $ThuTu = $_POST['ThuTu'];
    $AnHien = ($_POST['AnHien'] == "on") ? 1 : 0;
    if ($store->updateChungLoai($idCL, $TenCL, $ThuTu, $AnHien))
        header("location:index.php?key=cl");
    else
        echo $query;
}

if (isset($_GET['action']) && $_GET['action'] == "xoacl") {

    $idCL = $_GET['idCL'];
    if ($store->deleteChungLoai($idCL))
        header("location:index.php?key=cl");
    else
        echo $query;

}

if (isset($_POST['ThemCL'])) {

    $TenCL = $_POST['TenCL'];
    $ThuTu = $_POST['ThuTu'];
    $AnHien = ($_POST['AnHien'] == "on") ? 1 : 0;
    if ($store->insertChungLoai($TenCL, $ThuTu, $AnHien))
        header("location:index.php?key=cl");
    else
        echo $query;

}

if (isset($_GET['action']) && $_GET['action'] == "xoal") {

    $idLoai = $_GET['idLoai'];
    if ($store->deleteLoai($idLoai))
        header("location:index.php?key=lsp");
    else
        echo $query;

}

if (isset($_POST['ThemL'])) {

    $idCL = $_POST['idCL'];
    $TenLoai = $_POST['TenLoai'];
    $ThuTu = $_POST['ThuTu'];
    $AnHien = ($_POST['AnHien'] == "on") ? 1 : 0;
    if ($store->insertLoai($idCL, $TenLoai, $ThuTu, $AnHien))
        header("location:index.php?key=lsp");
    else
        echo $query;

}

if (isset($_POST['SuaL'])) {
    $idLoai = $_POST['idLoai'];
    $idCL = $_POST['idCL'];
    $TenLoai = $_POST['TenLoai'];
    $ThuTu = $_POST['ThuTu'];
    $AnHien = ($_POST['AnHien'] == "on") ? 1 : 0;
    if ($store->updateLoai($idLoai, $idCL, $TenLoai, $ThuTu, $AnHien))
        header("location:index.php?key=lsp");
    else
        echo $query;
}

if (isset($_POST['ThemSP'])) {

    $idLoai = $_POST['idLoai'];
    $idSK = $_POST['idSK'];
    $TenSP = $_POST['tensp'];
    $Gia = $_POST['Gia'];
    if(isset($_FILES['ufile']))
    {
        $link="../images/";
        $filename=basename($_FILES['ufile']['name']);
        $link.=$filename;

        //Quy dinh dang file:
        //if(preg_match("/\.(jpg|gif)$/i",$filename)) echo "Day la file anh!";
        //else echo "Day khong phai la file anh!";



        //xu ly upfile:
        if(move_uploaded_file($_FILES['ufile']['tmp_name'],$link))
        {
            if($query = $store->insertSanPham($idLoai,$idSK,$TenSP,$Gia,$filename))
                header("location:index.php?key=sp");
            else
                echo $query;
        }
        else echo "Up file that bai!";
    }

}


if (isset($_GET['action']) && $_GET['action'] == "xoasp") {

    $idSP = $_GET['idSP'];
    if ($store->deleteSPbyidSP($idSP))
        header("location:index.php?key=sp");
    else
        echo $query;

}
?>