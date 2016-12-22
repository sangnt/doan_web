<?php
	require_once("../DB.php");
	$mysql = new DB;
	$mysql->connect("localhost","root","","doan_web");
	if(isset($_GET['idCL'])){
		$idCL = $_GET['idCL'];
		$dsl = $mysql->getLoai($idCL);		
?>
<table border="1">
	<tr>
    	<th>STT</th>
        <th>Tên Loại</th>
        <th>Trạng Thái</th>
        <th><a href="?key=theml&idCL=<?php echo $_GET['idCL'];?>"><i class="fa fa-plus-circle" aria-hidden="true"></i></a></th>
    </tr>
    <?php
		while($loai = mysql_fetch_array($dsl)){
	?>
    <tr>
    	<td><?php echo $loai['ThuTu']?></td>
        <td><?php echo $loai['TenLoai']?></td>
        <td>
			<?php
				if($loai['AnHien'])
					echo "Hiện";
				else
					echo "Ẩn";
			?>
        </td>
        <td>
			<a href="?key=sual&idLoai=<?php echo $loai['idLoai'];?>">
            	<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
            </a>&nbsp;/&nbsp;
            <a href="xuly.php?action=xoal&idLoai=<?php echo $loai['idLoai'];?>"><i class="fa fa-trash" aria-hidden="true"></i></a>
        </td>
    </tr>
    <?php
		}
	?>
</table>	
<?php
	}
?>