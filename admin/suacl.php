<?php
	require_once("../DB.php");
	$mysql = new DB;
	$mysql->connect("localhost","root","","doan_web");
	$dscl = $mysql->getChungLoai();
	if(isset($_GET['idCL'])){
		$idCL = $_GET['idCL'];
		$dscl = $mysql->getChungLoaiByID($idCL);
		$dcl = mysql_fetch_array($dscl);
?>

<form action="xuly.php" method="POST">
	<table border="0">
    	<tr>
        	<td width="10%"><label for="TenCL">Tên Chủng Loại</label></td>
            <td><input type="text" name="TenCL" id="TenCL" value="<?php echo $dcl['TenCL'];?>"></td>
        </tr>
        <tr>
        	<td><label for="ThuTu">Thứ Tự</label></td>
            <td><input type="number" name="ThuTu" id="ThuTu" value="<?php echo $dcl['ThuTu'];?>"></td>
        </tr>
        <tr>
        	<td><label for="AnHien">Trạng Thái : </label></td>
            <td><input type="checkbox" name="AnHien" id="AnHien" <?php if($dcl['AnHien']){ echo 'checked="checked"'; } ?>  ></td>
        </tr>
        <tr>
        	<td><input type="submit" name="SuaCL" id="SuaCL" value="Sửa"></td>
            <td><input type="reset" name="button2" id="button2" value="Làm Lại"></td>
        </tr>
    </table>
    <input type="hidden" name="idCL" value="<?php echo $dcl['idCL'];?>"/>
</form>

<?php
	}
?>