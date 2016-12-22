<?php
	require_once("../DB.php");
	$mysql = new DB;
	$mysql->connect("localhost","root","","doan_web");
	if(isset($_GET['idCL'])){
		$idCL = $_GET['idCL'];
		$dsl = $mysql->getLoai($idCL);		
?>
<script>
	$(document).ready(function(e) {
		getSanPham(1);
        $("#idLoai").change(function(){
			getSanPham(1);	
		});
    });
	
	function getSanPham(page){
		$.ajax({		
			type:"GET",
			url:"process2.php",
			data: "idLoai="+$("#idLoai").val()+"&page="+page,
			success: function(data){					
				$("#sanpham").html(data);						
			}						
		});
	}
	
</script>
<label for="idLoai">Loại SP: </label>
<select name="idLoai" id="idLoai">
<?php
	while($dl = mysql_fetch_array($dsl)){
?>
	<option value="<?php echo $dl['idLoai'];?>"><?php echo $dl['TenLoai'];?></option>
<?php
	}
?>
</select>	
<?php
	}
?>
<div id="sanpham"></div>