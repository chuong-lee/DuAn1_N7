    <section>
        <div class="check-out mt-5">
            <div class="container">
                <div class="checkout-form">
                    <h4>Thông Tin Giao Hàng</h4>

                    <form method="post" class="mt-5" onsubmit="return validateForm()">
                        <div class="row">
                            <?php
                            // print_r($data['userDetail']);
                            extract($data['userDetail']);
                            echo '<div class="col-md-12">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="checkout-input mb-5">
                                            <label>Họ Tên ;<span>*</span></label>
                                            <input required="" name="name" type="text" value="' . $name . '">
                                            <!-- <p class="hidden text-danger">Mã giảm giá không hợp lệ</p>-->
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="checkout-input mb-5">
                                            <label>Số điện thoại;<span>*</span></label>
                                            <input required="" name="phone" type="text" value="' . $phone . '">
                                        </div>
                                    </div>
                                    <div class="checkout-input">
                                        <label>Email</label>
                                        <input name="email" type="email" value="' . $email . '">
                                    </div>
                                </div>
                                <div class="checkout-input">
                                    <label>Địa chỉ</label>
                                    <input class="checkout-input-add" required="" name="address" type="text" value="' . $address . '">
                                    <!-- <input type="text" placeholder="Apartment, suite, unite ect (optinal)">-->
                                </div>
                            </div>';
                            ?>

                            <div class="col-md-12 mt-5">
                                <div class="checkout-order p-3 bg-light">
                                    <h4 class="text-highline">Giỏ hàng</h4>
                                    <div
                                        class="checkout-order-products mt-3 d-flex justify-content-between fw-bold fs-5 mb-3">
                                        <div class="text-highline col-md-7">Sản phẩm</div>
                                        <div class="text-highline col-md-2">Số lượng</div>
                                        <div class="into-money col-md-3 flex-end"><span>Thành tiền</span></div>

                                    </div>
                                </div>
                                <?php
                                $listProduct = $data['cartProduct'];
                                $tongTien = 0;
                                foreach ($listProduct as $product) {
                                    // print_r($product);
                                    extract($product);
                                    $totalPrice = $quantity * $price;
                                    $tongTien += $totalPrice;
                                    echo '<div class="checkout-order-products d-flex justify-content-between align-items-center fw-bold fs-5 mb-3">
                                        <div class="d-flex align-items-center">
                                            <img src="' . $image . '" alt=""
                                                style="width:50px; height:50px">
                                            <span class="ml-2">' . $name . '</span>
                                        </div>
                                        <div>' . $quantity . '</div>
                                        <div>' . $totalPrice . '</div>
                                        <input type="hidden" value="' . $id_product . '" name="productId[]">
                                        <input type="hidden" value="' . $quantity . '" name="quantity[]">
                                    </div>';
                                }
                                echo '
                                    <div class="mt-5 checkout-order-subtotal d-flex justify-content-between fw-bold fs-5 mb-3">
                                        <span class="text-highline">Phương thức thanh toán</span>
                                        <span>Thanh toán sau khi nhận hàng</span>
                                    </div>
                                    <div class="mt-5 checkout-order-subtotal d-flex justify-content-between fw-bold fs-5 mb-3">
                                        <span class="text-highline">Tổng tiền</span><span>' . $tongTien . '</span>
                                    </div>';

                                ?>
                                <button class="site-btn btn-submit border-0 rounded-4 mt-3 py-2 px-4 " style="float: right;"
                                    type="submit" name="orderProduct">Đặt
                                    Hàng</button>

                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>
        </div>
        
        <script>
            function validateForm() {
                const productIds = document.querySelectorAll('input[name="productId[]"]');
                const quantities = document.querySelectorAll('input[name="quantity[]"]');
                for (let i = 0; i < productIds.length; i++) {
                    if (productIds[i].value.trim() === '' || quantities[i].value.trim() === '') {
                        alert('Vui lòng điền đầy đủ thông tin sản phẩm và số lượng.');
                        return false;
                    }
                }
                return true; 
            }
        </script>
