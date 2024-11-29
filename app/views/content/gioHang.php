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
                                    $totalPrice = $price * $quantity;
                                    echo '<tr>
                                    <td class="py-3 table-img"><img class="w-100" src="../public/client/images/danhmuc/' . $formattedName . '/' . $image . '"></td>
                                    <td class="py-3 text-center text-highline-2 fw-bold">' . $name . '</td>
                                    <td class="py-3 text-center text-highline-2 fw-bold" id="price-product" data-product-id="' . $id_product . '">' . $price . '</td>
                                    <td>
                                        <div class="info-product">
                                            <div class=" product-title">
                                                <div class="select-swap d-flex justify-content-around align-items-center">
                                                    <button class="btn btn-light" onclick="handleDownQuantity(' . $id_product . ')"> - </button>
                                                    <div id="quantity">
                                                        <label for="" class="sd">
                                                            <span id="quantity-value" data-product-id="' . $id_product . '" value="' . $quantity . '">' . $quantity . '</span>
                                                        </label>
                                                    </div>

                                                    <button class="btn btn-light" onclick="handleUpQuantity(' . $id_product . ')"> + </button>

                                                </div>

                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-3 text-center text-highline-2 total-price" id="total-price"  data-product-id="' . $id_product . '">' . $totalPrice . '</td>
                                    <td class="py-3 text-center text-highline-2">
                                        <a href="index.php?page=delProductInCart&id_product=' . $id_product . '" id="deleted_product"><i class="fa-regular fa-trash"></i></a>
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
                            $totalPrice = $price * $quantity;
                            $tongTien += $totalPrice;
                        }
                        echo '<li>Tổng cộng: <span class="cart-subtotal" id="tong-tien" data-product-id="' . $id_product . '">' . $tongTien . '</span></li>';
                        ?>
                    </ul><a class="primary-btn" href="checkout.html">THANH TOÁN</a>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<script>
    let idUser = sessionStorage.getItem('userId');
    document.querySelector('#deleted_product').addEventListener('click', function(e) {
        const deletedProduct = document.querySelector('#deleted_product');
        const currentHref = deletedProduct.href;
        const url = new URL(currentHref);
        url.searchParams.set('userId', idUser);
        deletedProduct.href = url.toString();
        console.log(deletedProduct.href);
        window.location.href = deletedProduct.href;
    })



    function handleDownQuantity(id_product) {
        let quantityElement = document.querySelector(`#quantity-value[data-product-id='${id_product}']`);
        let totalPrice = document.querySelector(`#total-price[data-product-id='${id_product}']`);
        let priceProduct = document.querySelector(`#price-product[data-product-id='${id_product}']`);
        let tongTien = document.querySelector(`#tong-tien[data-product-id='${id_product}']`);
        let listTongTien = document.querySelectorAll(`.total-price`);
        let newTongTien = 0;
        listTongTien.forEach(function(item) {
            newTongTien += parseInt(item.textContent);
        });
        console.log("Button clicked for product ID:", id_product);
        console.log('listTongTien', listTongTien);

        if (quantityElement) {
            let quantity = parseInt(quantityElement.textContent);
            if (quantity > 1) {
                quantity--;
                let newTotalPrice = parseInt(priceProduct.textContent) * parseInt(quantityElement.textContent);
                quantityElement.textContent = quantity;
                totalPrice.textContent = newTotalPrice;
                tongTien.textContent = newTongTien
            }
        }
    }


    function handleUpQuantity(id_product) {
        // Tìm phần tử span có data-product-id trùng với id_product
        let quantityElement = document.querySelector(`#quantity-value[data-product-id='${id_product}']`);
        let totalPrice = document.querySelector(`#total-price[data-product-id='${id_product}']`);
        let priceProduct = document.querySelector(`#price-product[data-product-id='${id_product}']`);
        let tongTien = document.querySelector(`#tong-tien[data-product-id='${id_product}']`);

        // Cập nhật giá trị mới cho tổng tiền
        let newTongTien = 0; // Khởi tạo lại biến tổng tiền
        let listTongTien = document.querySelectorAll('.total-price'); // Lấy tất cả các giá trị giá tiền tổng
        listTongTien.forEach(function(item) {
            newTongTien += parseInt(item.textContent); // Cộng dồn giá trị của từng phần tử
        });
        if (quantityElement) {
            // Lấy giá trị hiện tại từ span
            let quantity = parseInt(quantityElement.textContent); // Đảm bảo là số nguyên
            // Tăng giá trị
            quantity++; // Tăng đi 1
            quantityElement.textContent = quantity; // Cập nhật lại giá trị trong span

            // Tính toán giá mới cho mỗi sản phẩm
            let newTotalPrice = parseInt(priceProduct.textContent) * quantity;
            totalPrice.textContent = newTotalPrice; // Cập nhật lại giá trị trong span

            // Cập nhật lại tổng tiền
            // Hiển thị tổng tiền mới
            tongTien.textContent = newTongTien;

        }

        console.log("New Total Price: " + newTongTien); // In ra tổng tiền mới sau khi thay đổi
    }
</script>