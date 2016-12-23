
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
			url:"content_loai.php",
			data: "idCL="+$("#idCL").val(),
			success: function(data){
				$(".ad_loai").html(data);
			}
		});

	}
</script>
<div class="ad_chungloai">
    <label for="idCL">Chủng Loại</label>
    <select name="idCL" id="idCL" class="form-control">
        <?php
        $dscl = $store->getChungLoaiall();
        while($dcl = mysql_fetch_array($dscl)){
            ?>
            <option value="<?php echo $dcl['idCL'];?>"><?php echo $dcl['TenCL'];?></option>
            <?php
        }
        ?>
    </select>
</div>
<div class="ad_loai">

</div>