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
    function getLoaibyidCL($AnHien, $idCL){
        $query = "SELECT * FROM nn_loaisp WHERE idCL = $idCL AND AnHien = $AnHien ORDER BY ThuTu";
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
}
?>