<div class="sp_them">
    <form action="xuly.php" method="post" class="form-horizontal" role="form" enctype="multipart/form-data">
        <div class="form-group">
            <legend>Thêm Sản phẩm</legend>
        </div>
        <div class="form-group">
            <label for="idLoai" class="col-sm-2 control-label">Loại Sản phẩm</label>
            <div class="col-sm-10">
                <select name="idLoai" id="idLoai" class="form-control">
                    <?php
                    $dsl = $store->getLoai(1);
                    while ($dloai = mysql_fetch_array($dsl)) {
                        ?>
                        <option <?php if (isset($_GET['idLoai']) && $_GET['idLoai'] == $dloai['idLoai']) {
                            echo 'selected="selected"';
                        } ?> value="<?php echo $dloai['idLoai']; ?>"><?php echo $dloai['TenLoai']; ?></option>
                        <?php
                    }
                    ?>
                </select>
            </div>
        </div>


        <div class="form-group">
            <label for="idSK" class="col-sm-2 control-label">Sự Kiện</label>
            <div class="col-sm-10">
                <select name="idSK" id="idSK" class="form-control">
                    <?php
                    $kqsk=$store->getSukien(1,5);
                    while($dsk=mysql_fetch_array($kqsk)){
                        ?>
                        <option <?php if (isset($_GET['idSK']) && $_GET['idSK'] == $dsk['idSukien']) {
                            echo 'selected="selected"';
                        } ?> value="<?php echo $dsk['idSukien']; ?>"><?php echo $dsk['TieuDe']; ?></option>
                        <?php
                    }
                    ?>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="tensp" class="col-sm-2 control-label">Tên sản phẩm:</label>
            <div class="col-sm-10">
                <input type="text" name="tensp" class="form-control" value="" title="" required="required">
            </div>
        </div>
        <div class="form-group">
            <label for="Gia" class="col-sm-2 control-label">Giá:</label>
            <div class="col-sm-10">
                <input type="number" name="Gia" class="form-control" value="" title="" required="required">
            </div>
        </div>
        <div class="form-group">
            <label for="UrlHinh" class="col-sm-2 control-label">UrlHinh</label>
            <div class="col-sm-10">
                <input type="file" name="ufile" id="ufile" value="" title="" required="required" class="btn-default" accept="image/*">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-1 col-sm-offset-2">
                <button type="reset" class="btn btn-primary">reset</button>
            </div>
            <div class="col-sm-1">
                <button type="submit" class="btn btn-primary" name="ThemSP">Submit</button>
            </div>
        </div>
    </form>
</div>
