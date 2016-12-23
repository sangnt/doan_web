<?php
require_once("../controller.php");
$store = new bh;
$store->connect("localhost", "root", "", "doan_web");
if (isset($_GET['idCL'])) {
    $idCL = $_GET['idCL'];
    $dsl = $store->getLoaibyidCL(1, $idCL);
}
?>
    <script>
        $(document).ready(function (e) {
            getSanPham(1);
            $("#idLoai").change(function () {
                getSanPham(1);
            });
        });

        function getSanPham(page) {
            $.ajax({
                type: "GET",
                url: "process2.php",
                data: "idLoai=" + $("#idLoai").val() + "&page=" + page,
                success: function (data) {
                    $(".ad_sanpham").html(data);
                }
            });
        }

    </script>
    <div class="ad_loai">
        <label for="idLoai">Loại SP: </label>
        <select name="idLoai" id="idLoai" class="form-control">
            <?php
            while ($dl = mysql_fetch_array($dsl)) {
                ?>
                <option value="<?php echo $dl['idLoai']; ?>"><?php echo $dl['TenLoai']; ?></option>
                <?php
            }
            ?>
        </select>
    </div>
<div class="ad_sanpham"></div>