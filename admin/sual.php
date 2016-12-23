<?php
if (isset($_GET['key']) && $_GET['key'] == "sual") {
    $idLoai = $_GET['idLoai'];
    $dscl = $store->getChungLoaiall();
    $dsl = $store->getLoaiByidLoai($idLoai);
    $loai = mysql_fetch_array($dsl);
    ?>
    <form action="xuly.php" method="POST" class="form-horizontal">
        <div class="form-group">
            <legend>Sửa chủng loại</legend>
        </div>
        <div class="form-group">
            <label for="idCL" class="col-sm-2 control-label">Tên chủng loại:</label>
            <div class="col-sm-10">
                <select name="idCL" id="idCL" class="form-control">
                    <?php
                    while ($dcl = mysql_fetch_array($dscl)) {
                        ?>
                        <option <?php if ($loai['idCL'] == $dcl['idCL']) {
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
                <input class="form-control" type="text" name="TenLoai" id="TenLoai" value="<?php echo $loai['TenLoai']; ?>">
            </div>
        </div>

        <div class="form-group">
            <label for="ThuTu" class="col-sm-2 control-label">Thứ Tự:</label>
            <div class="col-sm-10">
                <input class="form-control" type="number" name="ThuTu" id="ThuTu" value="<?php echo $loai['ThuTu']; ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="AnHien" class="col-sm-2 control-label">Trạng Thái : </label>
            <div class="col-sm-10">
                <input type="checkbox" name="AnHien" id="AnHien" <?php if ($loai['AnHien']) {
                    echo 'checked="checked"';
                } ?>>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-1 col-sm-offset-2">
                <button type="reset" class="btn btn-primary">Làm mới</button>
            </div>
            <div class="col-sm-1">
                <button name="SuaL" type="submit" class="btn btn-primary">Sửa</button>
            </div>
        </div>


        <input type="hidden" name="idLoai" value="<?php echo $loai['idLoai']; ?>"/>
    </form>
    <?php
}
?>