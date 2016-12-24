<?php
if (isset($_GET['idLoai'])) {
    $idLoai = $_GET['idLoai'];
}
?>
<div class="album">
    <!-- PRODUCT -->
    <div class="title-line" style="margin-top: 15px;">
        <?php
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
        } else $page = 1;
        $kqdmloai = $store->getLoaiByidLoai($idLoai);
        $dloaisp = mysql_fetch_array($kqdmloai);
        ?>
        <h3 class="font_3" style="text-transform: uppercase;font-size: 40px;">
            <i class="fa fa-tree" aria-hidden="true"></i>
                <?php echo $dloaisp['TenLoai']; ?>
            <i class="fa fa-tree" aria-hidden="true"></i>
        </h3>
    </div>
    <div class="container-fluid">
        <div class="row">
            <?php

            $kqsploai = $store->getSanphamByidLoai(1, $idLoai);
            $sanpham_page = 8;
            $tong_sp = mysql_num_rows($kqsploai);
            $so_page = ceil($tong_sp / $sanpham_page);
            $vitri = ($page - 1) * $sanpham_page;
            $kqsp_page = mysql_query("SELECT * FROM nn_sanpham WHERE idLoai = $idLoai limit $vitri,$sanpham_page");
            while ($dsp = mysql_fetch_array($kqsp_page)) {
                ?>
                <div class="card col-sm-3">
                    <div class="thumbnail">
                        <a href="javascript:void(0);">
                            <img width="366" height="340"
                                 src="images/<?php echo $dsp['UrlHinh']; ?>"
                                 class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                 alt=""
                                 sizes="(max-width: 366px) 100vw, 366px"></a>
                        <div class="caption">
                            <p class="font_7"><?php echo $dsp['TenSP']; ?></p>
                            <p class="font_7"><b><em><?php echo $dsp['Gia']; ?> ₫</em></b></p>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default">And to cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
    <!--        END PRODUCT-->
</div>
<div class="pag" style="text-align: center;">
    <ul class="pagination">
        <li><a href="#">«</a></li>
        <?php
        for ($i = 1; $i <= $so_page; $i++) {
            if ($i == $page)
                echo "<li><span><b>$i</b></span></b>" . " ";
            else
                echo "<li><a href='index.php?key=loaisp&idLoai=$idLoai&page=$i'>$i</a></li>" . " ";
        }
        ?>
        <li><a href="#">»</a></li>
    </ul>
</div>