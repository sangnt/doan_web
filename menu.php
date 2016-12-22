<div id="navbar">
    <nav class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">
                <span class="font_1"><b>Souvenir</b></span>
            </a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle title_menus" data-toggle="dropdown">Danh mục</a>
                    <ul class="dropdown-menu">
                        <?php
                        $cl = $store->getChungLoai(1);
                        while ($dcl = mysql_fetch_array($cl)) {
                            ?>
                            <li class="dropdown dropdown-submenu">
                                <a href="#" class="dropdown-toggle"
                                   data-toggle="dropdown"><?php echo $dcl['TenCL']; ?></a>
                                <ul class="dropdown-menu">
                                    <?php
                                    $loai = $store->getLoaibyidCL(1, $dcl['idCL']);
                                    while ($dloai = mysql_fetch_array($loai)) {
                                        ?>
                                        <li><a href="index.php?key=loaisp&idLoai=<?php echo $dloai['idLoai'];?>"><?php echo $dloai['TenLoai']; ?></a></li>
                                    <?php } ?>
                                </ul>

                            </li>
                        <?php } ?>

                    </ul>
                </li>
                <li class="dropdown">
                    <a href="our-products.php" class="dropdown-toggle title_menus " data-toggle="dropdown">Chủ Đề</a>
                    <ul class="dropdown-menu">
                        <?php
                            $kqsk=$store->getSukien(1,5);
                            while($dsk=mysql_fetch_array($kqsk)){
                        ?>
                        <li><a href="index.php?sk=<?php echo $dsk['idSukien'];?>"><?php echo $dsk['TieuDe']; ?></a></li>
                        <?php }?>
                    </ul>
                </li>
                <li><a href="index.php?key=find-us" class="title_menus">Liên Hệ</a></li>
                <li><a href="index.php?key=our-products" class="title_menus">Dịch Vụ</a></li>
                <li><a href="index.php?key=our-story" class="title_menus">Giới Thiệu</a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>
</div>