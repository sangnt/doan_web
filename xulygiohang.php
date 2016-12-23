<?php
    session_start();
    ob_start();
    if(!isset($_SESSION['cart']))
        $_SESSION['cart']=array();
    if(isset($_POST['andtocart'])){
        $flag=false;
        for($i=0; $i<count($_SESSION['cart']);$i++){
            if($_POST['idSP'] == $_SESSION['cart'][$i]['idSP']){
                $_SESSION['cart'][$i]['soluong']+=$_POST['soluong'];
                $flag=true; break;
            }
        }
        if($flag=false){
            $i=count($_SESSION['cart']);
            $_SESSION['cart'][$i]['idSP']=$_POST['idSP'];
            $_SESSION['cart'][$i]['TenSP']=$_POST['TenSP'];
            $_SESSION['cart'][$i]['soluong']=$_POST['soluong'];
            $_SESSION['cart'][$i]['Gia']=$_POST['Gia'];
            $_SESSION['cart'][$i]['UrlHinh']=$_POST['UrlHinh'];
        }
        header("location:index.php?key=cart");
    }
?>