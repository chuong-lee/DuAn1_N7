<link rel="stylesheet" href="<?php echo '../public/client/css/trangChu.css'; ?>"
    <section>
<div class="cart my-lg-4">
    <div class="container">
        <div class="checkout-form">
            <h4 class="mb-3">Chi Tiết Giỏ Hàng</h4>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping-cart-table mb-5 rounded-4 p-3 bg-box">
                    <div class="table-responsive">
                        <table class="table mb-0 table-borderless">
                            <thead>
                                <tr>
                                    <th class="fw-lighter text-white text-uppercase text-center" scope="col">Sản phẩm</th>
                                    <th class="text-center fw-lighter text-white text-uppercase" scope="col">Tên sản phẩm</th>
                                    <th class="text-center fw-lighter text-white text-uppercase" scope="col">Giá</th>
                                    <th class="text-center fw-lighter text-white text-uppercase" scope="col">Số lượng</th>
                                    <th class="text-center fw-lighter text-white text-uppercase" scope="col">Tổng tiền</th>
                                    <th class="text-center fw-lighter text-white text-uppercase" scope="col">Hành động</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $listProductToCart = $data['cartProduct'];
                                foreach ($listProductToCart as $product) {
                                    // print_r($product);
                                    extract($product);
                                    $formattedName = str_replace(' ', '', $tendanhmuc);
                                    $totalPrice=$price*$quantity;
                                    echo '<tr>
                                    <td class="py-3 table-img"><img class="w-100" src="../public/client/images/danhmuc/'.$formattedName.'/'.$image.'"></td>
                                    <td class="py-3 text-center text-highline-2 fw-bold">'.$name.'</td>
                                    <td class="py-3 text-center text-highline-2 fw-bold">'.$price.'</td>
                                    <td>
                                        <div class="info-product">
                                            <div class=" product-title">
                                                <div class="select-swap d-flex justify-content-around align-items-center">
                                                    <button class="btn btn-light"> - </button>
                                                    <div id="quantity">
                                                        <label for="" class="sd">
                                                            <span>'.$quantity.'</span>
                                                        </label>
                                                    </div>

                                                    <button class="btn btn-light"> + </button>

                                                </div>

                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-3 text-center text-highline-2">'.$totalPrice.'</td>
                                    <td class="py-3 text-center text-highline-2">
                                        <a href="index.php?page=delProductInCart&id_product='.$id_product.'"><i class="fa-regular fa-trash"></i></a>
                                    </td>
                                </tr>';
                                }

                                ?>



                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping-cart-btns d-flex justify-content-between"><a class="primary-btn cart-btn">Tiếp Tục Mua Hàng</a>
                    <button class="cart-update primary-btn p-3">Cập Nhật Đơn Hàng</button>
                </div>
            </div>
            <div class="col-lg-6"></div>
            <div class="col-lg-6">
                <div class="shoping-checkout">
                    <h5>Giá trị giỏ hàng</h5>
                    <ul>
                        <?php
                        $listProductToCart = $data['cartProduct'];
                        $tongTien = 0;
                        foreach ($listProductToCart as $product) {
                            extract($product);
                            $totalPrice=$price*$quantity;
                            $tongTien += $totalPrice;
                        }
                        echo '<li>Tổng cộng: <span class="cart-subtotal">'.$tongTien.'</span></li>';
                        ?>
                    </ul><a class="primary-btn" href="checkout.html">THANH TOÁN</a>
                </div>
            </div>
        </div>
    </div>
</div>
</section>