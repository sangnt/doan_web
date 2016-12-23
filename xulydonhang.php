<?php
session_start();
ob_start();
if (!isset($_SESSION['bill'])) {
    $_SESSION['bill'] = array();
}
if(isset($_POST['donhang'])){

        $idCL = $_POST['idCL'];
        $TenLoai = $_POST['TenLoai'];
        $ThuTu = $_POST['ThuTu'];
        $AnHien = ($_POST['AnHien'] == "on") ? 1 : 0;
        if($mysql->insertLoai($idCL,$TenLoai,$ThuTu,$AnHien))
            header("location:index.php?key=l");
        else
            echo $query;

}
?>