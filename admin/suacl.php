<?php
$dscl = $store->getChungLoaiall();
if (isset($_GET['idCL'])) {
    $idCL = $_GET['idCL'];
    $dscl = $store->getChungLoaiByID($idCL);
    $dcl = mysql_fetch_array($dscl);
}
?>
<div class="ad_chungloai">
    <form action="xuly.php" method="POST" class="form-horizontal">
        <div class="form-group">
            <legend>Sửa chủng loại</legend>
        </div>

        <div class="form-group">
            <label for="TenCL" class="col-sm-2 control-label">Tên chủng loại:</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="TenCL" id="TenCL" value="<?php echo $dcl['TenCL']; ?>">
            </div>
        </div>

        <div class="form-group">
            <label for="ThuTu" class="col-sm-2 control-label">Thứ Tự:</label>
            <div class="col-sm-10">
                <input class="form-control" type="number" name="ThuTu" id="ThuTu" value="<?php echo $dcl['ThuTu']; ?>">
            </div>
        </div>

        <div class="form-group">
            <label for="AnHien" class="col-sm-2 control-label">Trạng Thái : </label>
            <div class="col-sm-10">
                <input type="checkbox" name="AnHien" id="AnHien" <?php if ($dcl['AnHien']) {
                    echo 'checked="checked"';
                } ?> >
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-1 col-sm-offset-2">
                <button type="reset" class="btn btn-primary">Làm mới</button>
            </div>
            <div class="col-sm-1">
                <button type="submit" class="btn btn-primary" name="SuaCL">Sửa</button>
            </div>
        </div>

        <input type="hidden" name="idCL" value="<?php echo $dcl['idCL']; ?>"/>
    </form>
</div>

