<?php
	require_once("../DB.php");
	$mysql = new DB;
	$mysql->connect("localhost","root","","doan_web");
	if(isset($_GET['idLoai'])){
		$idLoai = $_GET['idLoai'];
		$vitri=0;
		$dssp = $mysql->getSanPhamBangLoai($idLoai,$vitri,0);	
		$tst = ceil(mysql_num_rows($dssp)/10);
		if(isset($_GET['page']))
			$page = $_GET['page'];
		else
			$page = 1;
		$vitri = 10 *($page-1);
		$dssp = $mysql->getSanPhamBangLoai($idLoai,$vitri,10);
?>
<table>
	<tr>
    	<th>STT</th>
        <th>Hình</th>
        <th>Tên Sản Phẩm</th>
        <th>Giá</th>
        <th>Mô Tả</th>
        <th><a href="?key=themsp&idLoai=<?php echo $_GET['idLoai'];?>"><i class="fa fa-plus-circle" aria-hidden="true"></i></a></th>
    </tr>
    <?php
		while($sp = mysql_fetch_array($dssp)){
	?>
    <tr>
    	<td><?php echo $sp['idSP'];?></td>
        <td><img src="../images/<?php echo $sp['UrlHinh'];?>" width="100px"/></td>
        <td><?php echo $sp['TenSP'];?></td>
        <td><?php echo $sp['Gia'];?></td>
        <td><?php echo $sp['MoTa'];?></td>
        <td>Xóa/Sửa</td>
    </tr>
    <?php
		}
	?>
</table>
<div class="phantrang" style="clear:both;margin:30px 5px;">
	<ul>
		<?php
            for($i=1;$i<=$tst;$i++){
        ?>
                <li><a onClick="getSanPham(<?php echo $i;?>);"><?php echo $i;?></a></li>
        <?php
            }
        ?>
	</ul>
</div>
<?php
	}
?>
<style>
	
	table tr{
		text-align:center;	
	}
	
	.phantrang ul{
		list-style:none;	
	}
	
	.phantrang ul li{
		float:left;	
	}
	
	.phantrang ul li a{
		cursor:pointer;
		padding:10px;
		border:solid 1px #ccc;	
	}
	
	.phantrang ul li a:hover{
		background-color:#666;
		color:white;	
	}
</style>