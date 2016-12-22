<?php
	require_once("../DB.php");
	$mysql = new DB;
	$mysql->connect("localhost","root","","doan_web");
	if(isset($_GET['key']) && $_GET['key'] == "theml"){
		$dscl = $mysql->getChungLoai();
?>
<form action="xuly.php" method="POST">
	<table border="0">
    	<tr>
        	<td>Chủng Loại : </td>
            <td>
            	<select name="idCL" id="idCL">
					<?php
                        while($dcl = mysql_fetch_array($dscl)){
                    ?>
                    <option <?php if(isset($_GET['idCL']) && $_GET['idCL'] == $dcl['idCL']){ echo 'selected="selected"'; }?> value="<?php echo $dcl['idCL'];?>"><?php echo $dcl['TenCL'];?></option>
                    <?php
                        }
                    ?>
                </select>
            </td>
        </tr>
    	<tr>
        	<td width="10%"><label for="TenCL">Tên Loại</label></td>
            <td><input type="text" name="TenLoai" id="TenLoai" ></td>
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
        	<td><input type="submit" name="ThemL" id="ThemL" value="Thêm"></td>
            <td><input type="reset" name="button2" id="button2" value="Làm Lại"></td>
        </tr>
    </table>
</form>
<?php
	}
?>