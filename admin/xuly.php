<?php
	require_once("../DB.php");
	$mysql = new DB;
	$mysql->connect("localhost","root","","doan_web");
	$dscl = $mysql->getChungLoai();
	if(isset($_POST['SuaCL'])){
		$idCL = $_POST['idCL'];	
		$TenCL = $_POST['TenCL'];
		$ThuTu = $_POST['ThuTu'];
		$AnHien = ($_POST['AnHien'] == "on") ? 1 : 0;
		if($mysql->updateChungLoai($idCL,$TenCL,$ThuTu,$AnHien))
			header("location:index.php?key=cl");
		else
			echo $query;
	}
	
	if(isset($_GET['action']) && $_GET['action'] == "xoacl"){
		
		$idCL = $_GET['idCL'];
		if($mysql->deleteChungLoai($idCL))
			header("location:index.php?key=cl");
		else
			echo $query;
			
	}
	
	if(isset($_POST['ThemCL'])){
		
		$idCL = $_POST['idCL'];	
		$TenCL = $_POST['TenCL'];
		$ThuTu = $_POST['ThuTu'];
		$AnHien = ($_POST['AnHien'] == "on") ? 1 : 0;
		if($mysql->insertChungLoai($idCL,$TenCL,$ThuTu,$AnHien))
			header("location:index.php?key=cl");
		else
			echo $query;
			
	}
	
	if(isset($_GET['action']) && $_GET['action'] == "xoal"){
		
		$idLoai = $_GET['idLoai'];
		if($mysql->deleteLoai($idLoai))
			header("location:index.php?key=l");
		else
			echo $query;
			
	}
	
	if(isset($_POST['ThemL'])){
		
		$idCL = $_POST['idCL'];	
		$TenLoai = $_POST['TenLoai'];
		$ThuTu = $_POST['ThuTu'];
		$AnHien = ($_POST['AnHien'] == "on") ? 1 : 0;
		if($mysql->insertLoai($idCL,$TenLoai,$ThuTu,$AnHien))
			header("location:index.php?key=l");
		else
			echo $query;
			
	}
	
	if(isset($_POST['SuaL'])){
		$idLoai = $_POST['idLoai'];
		$idCL = $_POST['idCL'];	
		$TenLoai = $_POST['TenLoai'];
		$ThuTu = $_POST['ThuTu'];
		$AnHien = ($_POST['AnHien'] == "on") ? 1 : 0;
		if($mysql->updateLoai($idLoai,$idCL,$TenLoai,$ThuTu,$AnHien))
			header("location:index.php?key=l");
		else
			echo $query;
	}
	
?>