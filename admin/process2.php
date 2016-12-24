<?php
require_once("../controller.php");
$store = new bh;
$store->connect("localhost", "root", "", "doan_web");
if (isset($_GET['idLoai'])) {
    $idLoai = $_GET['idLoai'];
    $vitri = 0;
    $dssp = $store->getSanphamByidLoai(1, $idLoai);
    $tst = ceil(mysql_num_rows($dssp) / 10);
    if (isset($_GET['page']))
        $page = $_GET['page'];
    else
        $page = 1;
    $vitri = 10 * ($page - 1);
    $dssp = $store->getSanPhamBangLoai($idLoai, $vitri, 10);
}
?>
<div class="table-responsive">
    <h4>Sản phẩm</h4>
    <table class="table table-hover table-bordered">
        <thead>
        <tr>
            <th>STT</th>
            <th>Hình</th>
            <th>Tên Sản Phẩm</th>
            <th>Giá</th>
            <th>Mô Tả</th>
            <th><a href="?key=themsp&idLoai=<?php echo $_GET['idLoai']; ?>"><i class="fa fa-plus-circle"
                                                                               aria-hidden="true"></i></a></th>
        </tr>
        </thead>
        <tbody>
        <?php
        while ($sp = mysql_fetch_array($dssp)) {
            ?>
            <tr>
                <td><?php echo $sp['idSP']; ?></td>
                <td><img src="../images/<?php echo $sp['UrlHinh']; ?>" width="100px"/></td>
                <td><?php echo $sp['TenSP']; ?></td>
                <td><?php echo $sp['Gia']; ?></td>
                <td><?php echo $sp['MoTa']; ?></td>
                <td><a href="?key=suasp&idSP=<?php echo $sp['idSP']; ?>">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                    </a>&nbsp;/&nbsp;
                    <a href="xuly.php?action=xoasp&idSP=<?php echo $sp['idSP']; ?>"><i class="fa fa-trash"
                                                                                        aria-hidden="true"></i></a></td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
</div>
<div class="phantrang" style="clear:both;text-align: center;cursor: pointer;">
    <ul class="pagination">
        <li><a href="#">«</a></li>
        <?php
        for ($i = 1; $i <= $tst; $i++) {
            ?>
            <li><a onClick="getSanPham(<?php echo $i; ?>);"><?php echo $i; ?></a></li>
            <?php
        }
        ?>
        <li><a href="#">»</a></li>
    </ul>
</div>