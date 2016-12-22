<?php
	class DB{
		private $connection = null;
				
		function connect($host,$user,$pass,$db){
			
			$this->connection = mysql_connect($host,$user,$pass);
			mysql_select_db($db);
			mysql_query("set names 'utf8'");
				
		}
		
		function getMenuCha($AnHien=1){
			$query = "SELECT * FROM nn_menus WHERE idCapCha = 0 AND AnHien = $AnHien ORDER BY ThuTu";
			return mysql_query($query);	
		}
		
		function getMenuCon($idMenu,$AnHien=1){
			$query = "SELECT * FROM nn_menus WHERE idCapCha = $idMenu AND AnHien = $AnHien ORDER BY ThuTu";
			return mysql_query($query);		
		}
		
		function getSieuCap(){
			$query = "SELECT * FROM nn_sanpham WHERE AnHien = 1 AND Gia > 10000000 AND TonKho > 0 Order By idSP LIMIT 0,13";
			return mysql_query($query);	
		}
		
		function getCaoCap(){
			$query = "SELECT * FROM nn_sanpham WHERE AnHien = 1 AND (Gia BETWEEN 5000000 AND 10000000) AND TonKho > 0 Order By idSP LIMIT 0,19";
			return mysql_query($query);	
		}
	
		function getTrungCap(){
			$query = "SELECT * FROM nn_sanpham WHERE AnHien = 1 AND (Gia BETWEEN 2000000 AND 5000000) AND TonKho > 0 Order By idSP LIMIT 0,19";
			return mysql_query($query);	
		}
		
		function getDanhMuc(){
			$query = "SELECT * FROM nn_chungloai WHERE AnHien = 1 Order By ThuTu";
			return mysql_query($query);		
		}
		
		function getDanhMucCon($idCL){
			$query = "SELECT * FROM nn_loaisp WHERE idCL = $idCL AND AnHien = 1 Order By ThuTu";
			return mysql_query($query);
		}
		
		function getHangSanXuat(){
			$query = "SELECT * FROM nn_hangsanxuat WHERE AnHien = 1 Order By ThuTu";
			return mysql_query($query);		
		}
		
		function getThongTinLoaiBangIdLoai($idLoai){
			$query = "SELECT * FROM nn_loaisp WHERE idLoai = $idLoai";
			return mysql_query($query);	
		}
		
		function getSanPhamBangLoai($idLoai,$vitri,$limit){
			if($limit == 0)
				$query = "SELECT * FROM nn_sanpham WHERE AnHien = 1 AND idLoai = $idLoai";
			else
				$query = "SELECT * FROM nn_sanpham WHERE AnHien = 1 AND idLoai = $idLoai LIMIT $vitri,$limit";
			return mysql_query($query);	
		}
		
		function getSanPhamByID($idSP){
			$query = "SELECT * FROM nn_sanpham WHERE idSP = $idSP";
			return mysql_query($query);	
		}
		
		function getSanPhamGiaTuongDuong($idSP,$Gia){
			$query = "SELECT * FROM nn_sanpham WHERE idSP != $idSP AND (Gia BETWEEN (($Gia*95)/100) AND (($Gia*105)/100)) LIMIT 0,5";	
			return mysql_query($query);
		}
		
		function dangNhap($email,$password){
			$query = "SELECT * FROM nn_nguoidung WHERE Email = '$email' AND MatKhau = '$password'";	
			return mysql_query($query);
		}
		
		function getUserById($idNguoiDung){
			$query = "SELECT * FROM nn_nguoidung WHERE idNguoiDung = $idNguoiDung";
			return mysql_query($query);	
		}
		
		// admin
		
		function getChungLoai(){
			$query = "SELECT * FROM nn_chungloai Order By ThuTu";
			return mysql_query($query);		
		}
		
		function getChungLoaiByID($idCL){
			$query = "SELECT * FROM nn_chungloai WHERE idCL = $idCL";
			return mysql_query($query);	
		}
		
		function insertChungLoai($idCL,$TenCL,$ThuTu,$AnHien){
			$query = "INSERT INTO nn_chungloai VALUES(NULL,'$TenCL',$ThuTu,$AnHien)";
			return mysql_query($query);	
		}
		
		function updateChungLoai($idCL,$TenCL,$ThuTu,$AnHien){
			$query = "UPDATE nn_chungloai SET TenCL = '$TenCL', ThuTu = $ThuTu, AnHien = $AnHien WHERE idCL = $idCL";
			return mysql_query($query);	
		}
		
		function deleteChungLoai($idCL){
			$query = "DELETE FROM nn_chungloai WHERE idCL = $idCL";
			return mysql_query($query);	
		}
		
		function getLoai($idCL){
			$query = "SELECT * FROM nn_loaisp WHERE idCL = $idCL Order By ThuTu";
			return mysql_query($query);		
		}
		
		function deleteLoai($idLoai){
			$query = "DELETE FROM nn_loaisp WHERE idLoai = $idLoai";
			return mysql_query($query);	
		}
		
		function insertLoai($idCL,$TenLoai,$ThuTu,$AnHien){
			$query = "INSERT INTO nn_loaisp VALUES(NULL,$idCL,'$TenLoai',$ThuTu,$AnHien)";
			return mysql_query($query);	
		}
		
		function getLoaiByID($idLoai){
			$query = "SELECT * FROM nn_loaisp WHERE idLoai = $idLoai";
			return mysql_query($query);	
		}
		
		function updateLoai($idLoai,$idCL,$TenLoai,$ThuTu,$AnHien){
			$query = "UPDATE nn_loaisp SET idCL = $idCL, TenLoai = '$TenLoai', ThuTu = $ThuTu, AnHien = $AnHien WHERE idLoai = $idLoai";
			return mysql_query($query);	
		}
	
		function getLoaiSP(){
			$query = "SELECT * FROM nn_loaisp Order By ThuTu";
			return mysql_query($query);	
		}
		
		function getDoanhThu($nam,$thang){
			$query = "SELECT MONTH(ThoiGianDat) as Thang,SUM(TongTien) as TongTien FROM nn_donhang WHERE YEAR(ThoiGianDat) = $nam AND MONTH(ThoiGianDat) = $thang GROUP BY MONTH(ThoiGianDat) ORDER BY MONTH(ThoiGianDat)";
			return mysql_query($query);	
		}
		
		function tangluot(){
			$query = "UPDATE nn_count SET count = count + 1";
			mysql_query($query);
			return mysql_query("SELECT * FROM nn_count");	
		}
				
	}
?>