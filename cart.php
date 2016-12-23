<?php
session_start();
ob_start();
?>

<!-- Content -->
<div id="cart">
    <!-- Content header -->
    <div class="jumbotron">
        <div class="container_content">
            <!-- Our cart -->
            <div class="cart-info">
                <div class="cart-header">
                    <div>
                        <h4 style="border-top: solid 3px; margin-bottom: -15px;"></h4>
                        <h3 class="font_2" style="border-top: solid 1px;border-bottom: solid 1px;">GIỎ HÀNG</h3>
                    </div>
                </div>
                <?php
                if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
                    ?>
                    <!-- Cart content-->
                    <div class="cart-content">
                        <div style="overflow-x:auto;">
                            <table class="table">

                                <tr class="thead" style="text-transform: uppercase">
                                    <th class="font_8" colspan="2">Sản phẩm</th>
                                    <th class="font_8">Tùy chọn</th>
                                    <th class="font_8">Số lượng</th>
                                    <th class="font_8">Giá</th>
                                    <th class="font_8">Xóa</th>
                                </tr>

                                <?php
                                $tongtien = 0;
                                for ($i = 0; $i < count($_SESSION['cart']); $i++) {
                                    $tongtien += ($_SESSION['cart'][$i]['Gia'] * $_SESSION['cart'][$i]['soluong']);
                                    ?>
                                    <tr class="tbody">
                                        <td>
                                            <div>
                                                <img src="images/<?php echo $_SESSION['cart'][$i]['UrlHinh']; ?>">
                                            </div>
                                        </td>
                                        <td>
                                            <span class="font_9"><?php echo $_SESSION['cart'][$i]['TenSP']; ?></span>
                                        </td>
                                        <td><span class="font_9">Ship</span></td>
                                        <td>
                                            <form name="fromupdate" action="xulygiohang.php" method="post">
                                                <input type="number" name="soluong<?php echo $i; ?>" id="quantity"
                                                       min="1"
                                                       value="<?php echo $_SESSION['cart'][$i]['soluong']; ?>">
                                                <input type="hidden" name="capnhat">
                                                <i onclick="fromupdate.submit();" class="fa fa-cloud-upload"
                                                   aria-hidden="true" style="font-size: 18px; cursor: pointer;"></i>
                                            </form>
                                        </td>
                                        <td><?php echo $_SESSION['cart'][$i]['Gia']; ?> ₫</td>
                                        <td>
                                            <a href="xulygiohang.php?action=xoa&vitri=<?php echo $i; ?>">
                                                <i class="fa fa-times" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </table>
                        </div>
                        <div class="total">
                            <div class="money">
                                <span style="float: left">TỔNG TIỀN:</span>
                                <span><?php echo $tongtien; ?> ₫</span>
                            </div>
                            <div>
                                <form action="xulydonhang.php" method="post" name="donhang">
                                    <button type="submit" class="btn btn-primary arrow_box">THANH TOÁN</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--End Cart Content-->
                    <?php
                } else {
                    ?>
                    <!-- Cart empty -->
                    <h2 class="font_8" style="font-size: 15px;">Your shopping cart is<strong> Empty</strong></h2>
                    <i class="fa fa-shopping-cart" aria-hidden="true" style="font-size: 200px;"></i>
                    <!-- End Cart empty -->
                <?php } ?>
                <!--cart head-->
            </div>
            <!-- End cart Info -->
        </div>
    </div>
    <!-- End Content header -->

</div>
<!-- End Content  -->