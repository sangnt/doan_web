<div class="loai_them">
    <form action="xuly.php" method="post" class="form-horizontal" role="form">
        <div class="form-group">
            <legend>Thêm loại</legend>
        </div>
        <div class="form-group">
            <label for="idCL" class="col-sm-2 control-label">Chủng Loại</label>
            <div class="col-sm-10">
                <select name="idCL" id="idCL" class="form-control">
                    <?php
                    $dscl = $store->getChungLoaiall();
                    while ($dcl = mysql_fetch_array($dscl)) {
                        ?>
                        <option <?php if (isset($_GET['idCL']) && $_GET['idCL'] == $dcl['idCL']) {
                            echo 'selected="selected"';
                        } ?> value="<?php echo $dcl['idCL']; ?>"><?php echo $dcl['TenCL']; ?></option>
                        <?php
                    }
                    ?>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="TenLoai" class="col-sm-2 control-label">Tên loại:</label>
            <div class="col-sm-10">
                <input type="text" name="TenLoai" class="form-control" value="" title="" required="required">
            </div>
        </div>
        <div class="form-group">
            <label for="ThuTu" class="col-sm-2 control-label">Thứ tự:</label>
            <div class="col-sm-10">
                <input type="number" name="ThuTu" class="form-control" value="" title="" required="required">
            </div>
        </div>
        <div class="form-group">
            <label for="AnHien" class="col-sm-2 control-label">Ẩn hiện:</label>
            <div class="col-sm-10">
                <input type="checkbox" name="AnHien" value="" title="" required="required" checked>
            </div>

        </div>

        <div class="form-group">
            <div class="col-sm-1 col-sm-offset-2">
                <button type="reset" class="btn btn-primary">reset</button>
            </div>
            <div class="col-sm-1">
                <button type="submit" class="btn btn-primary" name="ThemL">Submit</button>
            </div>
        </div>
    </form>
</div>
