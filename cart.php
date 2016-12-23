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
                if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0){
                for ($i = 0; $i < count($_SESSION['cart']); $i++) {
//                    $_SESSION['cart'][$i]['idSP'];
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


                                <tr class="tbody">
                                    <td>
                                        <div>
                                            <img src="images/<?php echo $_SESSION['cart'][$i]['UrlHinh']; ?>">
                                        </div>
                                    </td>
                                    <td>
                                        <span class="font_9"><?php echo $_SESSION['cart'][$i]['TenSP']; ?></span>
                                    </td>
                                    <td><span class="font_9">Size</span>Loại lớn</td>
                                    <td>
                                        <form action="" method="post">
                                            <div>
                                                <input type="number" name="" id="quantity" min="1"
                                                       value="<?php echo $_SESSION['cart'][$i]['soluong']; ?>">
                                            </div>
                                        </form>
                                    </td>
                                    <td><?php echo $_SESSION['cart'][$i]['Gia']; ?></td>
                                    <td><i class="fa fa-times" aria-hidden="true"></i></td>
                                </tr>

                            </table>
                        </div>
                        <div class="total">
                            <div class="money">
                                <span style="float: left">TOTAL</span>
                                <span>102000</span>
                            </div>
                            <div>
                                <button class="btn btn-primary arrow_box">THANH TOÁN</button>
                            </div>
                        </div>
                    </div>
                    <!--End Cart Content-->
                <?php }}
                else{
                ?>
                <!-- Cart empty -->
                <h2 class="font_8">Your shopping cart is empty</h2>
                <i class="fa fa-shopping-cart" aria-hidden="true" style="font-size: 100px;   "></i>
                <!-- End Cart empty -->
                <?php }?>
                <!--cart head-->
            </div>
            <!-- End cart Info -->
        </div>
    </div>
    <!-- End Content header -->

</div>
<!-- End Content  -->