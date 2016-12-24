<?php

class bh
{
    private $connection = null;

    function connect($host, $user, $password, $database)
    {
        $this->connection = mysql_connect($host, $user, $password);
        mysql_select_db($database);
        mysql_query("set names 'utf8'");
    }
    function getChungLoai($AnHien){
        $query = "SELECT * FROM nn_chungloai WHERE AnHien = $AnHien ORDER BY ThuTu";
        return mysql_query($query);
    }
    function getChungLoaiall(){
        $query = "SELECT * FROM nn_chungloai ORDER BY ThuTu";
        return mysql_query($query);
    }
    function getChungLoaiByID($idCL){
        $query = "SELECT * FROM nn_chungloai WHERE idCL = $idCL";
        return mysql_query($query);
    }
    function getLoaibyidCL($AnHien, $idCL){
        $query = "SELECT * FROM nn_loaisp WHERE idCL = $idCL AND AnHien = $AnHien ORDER BY ThuTu";
        return mysql_query($query);
    }
    function getLoaiallbyidCL($idCL){
        $query = "SELECT * FROM nn_loaisp WHERE idCL = $idCL ORDER BY ThuTu";
        return mysql_query($query);
    }
    function getLoai($AnHien){
        $query = "SELECT * FROM nn_loaisp WHERE AnHien = $AnHien ORDER BY ThuTu";
        return mysql_query($query);
    }
    function dangNhap($email,$password){
        $query = "SELECT * FROM nn_nguoidung WHERE Email = '$email' AND MatKhau = '$password' AND KichHoat =1";
        return mysql_query($query);
    }
    function getUserById($idNguoiDung){
        $query = "SELECT * FROM nn_nguoidung WHERE idNguoiDung = $idNguoiDung AND KichHoat =1";
        return mysql_query($query);
    }
    function getSukien($AnHien, $limit){
        $query = "SELECT * FROM nn_sukien WHERE AnHien= $AnHien ORDER BY ThuTu Limit 0,$limit";
        return mysql_query($query);
    }
    function getSukienbyidSK($idSK){
        $query = "SELECT * FROM nn_sukien WHERE idSukien = $idSK";
        return mysql_query($query);
    }
    function getSanphamByidSK($AnHien, $idSK, $limit){
        $query = "SELECT * FROM nn_sanpham WHERE AnHien= $AnHien AND idSukien=$idSK Limit 0,$limit";
        return mysql_query($query);
    }
    function getLoaiByidLoai($idLoai){
        $query = "SELECT * FROM nn_loaisp WHERE idLoai=$idLoai";
        return mysql_query($query);
    }
    function getSanphamByidLoai($AnHien, $idLoai){
        $query = "SELECT * FROM nn_sanpham WHERE AnHien= $AnHien AND idLoai=$idLoai";
        return mysql_query($query);
    }
    function insertChungLoai($TenCL,$ThuTu,$AnHien){
        $query = "INSERT INTO nn_chungloai VALUES(NULL,'$TenCL',$ThuTu,$AnHien)";
        return mysql_query($query);
    }
    function deleteChungLoai($idCL){
        $query = "DELETE FROM nn_chungloai WHERE idCL = $idCL";
        return mysql_query($query);
    }
    function updateChungLoai($idCL,$TenCL,$ThuTu,$AnHien){
        $query = "UPDATE nn_chungloai SET TenCL = '$TenCL', ThuTu = $ThuTu, AnHien = $AnHien WHERE idCL = $idCL";
        return mysql_query($query);
    }
    function insertLoai($idCL,$TenLoai,$ThuTu,$AnHien){
        $query = "INSERT INTO nn_loaisp VALUES(NULL,$idCL,'$TenLoai',$ThuTu,$AnHien)";
        return mysql_query($query);
    }
    function deleteLoai($idLoai){
        $query = "DELETE FROM nn_loaisp WHERE idLoai = $idLoai";
        return mysql_query($query);
    }
    function updateLoai($idLoai,$idCL,$TenLoai,$ThuTu,$AnHien){
        $query = "UPDATE nn_loaisp SET idCL = $idCL, TenLoai = '$TenLoai', ThuTu = $ThuTu, AnHien = $AnHien WHERE idLoai = $idLoai";
        return mysql_query($query);
    }
    function getSanPhamBangLoai($idLoai,$vitri,$limit){

        $query = "SELECT * FROM nn_sanpham WHERE AnHien = 1 AND idLoai = $idLoai LIMIT $vitri,$limit";
        return mysql_query($query);
    }
    function insertSanPham($idLoai,$idSK,$TenSP,$Gia,$UrlHinh){
        $query = "INSERT INTO nn_sanpham VALUES(NULL,$idLoai,$idSK,'$TenSP',$Gia,NULL,NULL,'$UrlHinh','NULL',100,NULL,0,0,1)";
        return mysql_query($query);
    }
    function deleteSPbyidSP($idSP){
        $query = "DELETE FROM nn_sanpham WHERE idSP = $idSP";
        return mysql_query($query);
    }
}
?>