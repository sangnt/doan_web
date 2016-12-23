<?php
	require_once("../controller.php");
	$store = new bh;
	$store->connect("localhost","root","","doan_web");
	if(isset($_POST['SuaCL'])){
		$idCL = $_POST['idCL'];
		$TenCL = $_POST['TenCL'];
		$ThuTu = $_POST['ThuTu'];
		$AnHien = ($_POST['AnHien'] == "on") ? 1 : 0;
		if($store->updateChungLoai($idCL,$TenCL,$ThuTu,$AnHien))
			header("location:index.php?key=cl");
		else
			echo $query;
	}
	
	if(isset($_GET['action']) && $_GET['action'] == "xoacl"){
		
		$idCL = $_GET['idCL'];
		if($store->deleteChungLoai($idCL))
			header("location:index.php?key=cl");
		else
			echo $query;
			
	}
	
	if(isset($_POST['ThemCL'])){

		$TenCL = $_POST['TenCL'];
		$ThuTu = $_POST['ThuTu'];
		$AnHien = ($_POST['AnHien'] == "on") ? 1 : 0;
		if($store->insertChungLoai($TenCL,$ThuTu,$AnHien))
			header("location:index.php?key=cl");
		else
			echo $query;
			
	}
	
	if(isset($_GET['action']) && $_GET['action'] == "xoal"){
		
		$idLoai = $_GET['idLoai'];
		if($store->deleteLoai($idLoai))
			header("location:index.php?key=lsp");
		else
			echo $query;
			
	}
	
	if(isset($_POST['ThemL'])){

		$idCL = $_POST['idCL'];
		$TenLoai = $_POST['TenLoai'];
		$ThuTu = $_POST['ThuTu'];
		$AnHien = ($_POST['AnHien'] == "on") ? 1 : 0;
		if($store->insertLoai($idCL,$TenLoai,$ThuTu,$AnHien))
			header("location:index.php?key=lsp");
		else
			echo $query;
			
	}
	
	if(isset($_POST['SuaL'])){
		$idLoai = $_POST['idLoai'];
		$idCL = $_POST['idCL'];	
		$TenLoai = $_POST['TenLoai'];
		$ThuTu = $_POST['ThuTu'];
		$AnHien = ($_POST['AnHien'] == "on") ? 1 : 0;
		if($store->updateLoai($idLoai,$idCL,$TenLoai,$ThuTu,$AnHien))
			header("location:index.php?key=lsp");
		else
			echo $query;
	}
	
?>