<?php
	require_once("../DB.php");
	$mysql = new DB;
	$mysql->connect("localhost","root","","doan_web");
	if(isset($_GET['key']) && $_GET['key'] == "themcl"){
?>
<form action="xuly.php" method="POST">
	<table border="0">
    	<tr>
        	<td width="10%"><label for="TenCL">Tên Chủng Loại</label></td>
            <td><input type="text" name="TenCL" id="TenCL" ></td>
        </tr>
        <tr>
        	<td><label for="ThuTu">Thứ Tự</label></td>
            <td><input type="number" name="ThuTu" id="ThuTu"></td>
        </tr>
        <tr>
        	<td><label for="AnHien">Trạng Thái : </label></td>
            <td><input type="checkbox" name="AnHien" id="AnHien"></td>
        </tr>
        <tr>
        	<td><input type="submit" name="ThemCL" id="ThemCL" value="Thêm"></td>
            <td><input type="reset" name="button2" id="button2" value="Làm Lại"></td>
        </tr>
    </table>
</form>
<?php
	}
?>