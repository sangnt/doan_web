<div class="chungloai_them">
    <form action="xuly.php" method="post" class="form-horizontal" role="form">
        <div class="form-group">
            <legend>Thêm chủng loại</legend>
        </div>
    
        <div class="form-group">
        	<label for="TenCL" class="col-sm-2 control-label">Tên chủng loại:</label>
        	<div class="col-sm-10">
        		<input type="text" name="TenCL" class="form-control" value="" title="" required="required" >
        	</div>
        </div>
        <div class="form-group">
            <label for="ThuTu" class="col-sm-2 control-label">Thứ tự:</label>
            <div class="col-sm-10">
                <input type="number" name="ThuTu" class="form-control"  value="" title="" required="required" >
            </div>
        </div>
        <div class="form-group">
            <label for="AnHien" class="col-sm-2 control-label">Ẩn hiện:</label>
            <div class="col-sm-10">
                <input type="checkbox" name="AnHien" value="" title="" required="required" checked >
            </div>

        </div>
        
        <div class="form-group">
            <div class="col-sm-1 col-sm-offset-2">
                <button type="reset" class="btn btn-primary">reset</button>
            </div>
            <div class="col-sm-1">
                <button type="submit" class="btn btn-primary" name="ThemCL">Submit</button>
            </div>
        </div>
    </form>
</div>


