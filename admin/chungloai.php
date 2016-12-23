<?php
$dscl = $store->getChungLoaiall();
?>
<div class="ad_chungloai">
    <div class="container-fluid">
        <div class="row">
            <div class="table-responsive">
                <table class="table table-hover table-bordered">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên Chủng Loại</th>
                        <th>Trạng Thái</th>
                        <th><a href="?key=themcl"><i class="fa fa-plus-circle" aria-hidden="true"></i></a></th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php
                    while ($dcl = mysql_fetch_array($dscl)){
                        ?>
                    <tr>
                        <td><?php echo $dcl['ThuTu']; ?></td>
                        <td><?php echo $dcl['TenCL']; ?></td>
                        <td>
                            <?php
                            if ($dcl['AnHien'])
                                echo "Hiện";
                            else
                                echo "Ẩn";
                            ?>
                        </td>
                        <td>
                            <a href="?key=suacl&idCL=<?php echo $dcl['idCL']; ?>">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            </a>&nbsp;/&nbsp;
                            <a href="xuly.php?action=xoacl&idCL=<?php echo $dcl['idCL']; ?>"><i class="fa fa-trash"
                                                                                                aria-hidden="true"></i></a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
