<?php
	require_once("../DB.php");
	$mysql = new DB;
	$mysql->connect("localhost","root","","doan_web");
	$dscl = $mysql->getChungLoai();
?>

<script>
	$(document).ready(function(e) {
		getLoai();
        $("#idCL").change(function(){
			getLoai();	
		});
    });
	
	function getLoai(){
		
		$.ajax({		
			type:"GET",
			url:"process.php",
			data: "idCL="+$("#idCL").val(),
			success: function(data){					
				$("#data").html(data);						
			}						
		});
			
	}
	
</script>

<select name="idCL" id="idCL">
	<?php
		while($dcl = mysql_fetch_array($dscl)){
	?>
	<option value="<?php echo $dcl['idCL'];?>"><?php echo $dcl['TenCL'];?></option>
    <?php
		}
	?>
</select>
<div id="data"></div>