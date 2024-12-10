<link rel="stylesheet" href="<?php echo '../public/client/css/trangChu.css'; ?>">
<section>
    <div class="cart my-lg-4">
        <div class="container py-5">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr class="text-black">
                            <th class="text-dark " scope="col">Hình</th>
                            <th class="text-dark " scope="col">Tên sản phẩm</th>
                            <th class="text-dark " scope="col">Giá</th>
                            <th class="text-dark " scope="col">Số lượng</th>
                            <th class="text-dark " scope="col">Tổng tiền</th>
                            <th class="text-dark " scope="col">Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Khởi tạo biến tổng tiền
                        $tongTien = 0;

                        // Lấy danh sách sản phẩm từ dữ liệu giỏ hàng
                        $listProductToCart = $data['cartProduct'] ?? [];

                        foreach ($listProductToCart as $product) {
                            $id_product = $product['id_product'] ?? 0;
                            $name = $product['name'] ?? 'Không có tên';
                            $price = $product['price'] ?? 0;
                            $quantity = $product['quantity'] ?? 0;
                            $image = $product['image'] ?? 'default.jpg';
                            $tendanhmuc = $product['tendanhmuc'] ?? 'default';

                            $formattedName = str_replace(' ', '', $tendanhmuc);
                            $totalPrice = $price * $quantity;
                            $tongTien += $totalPrice;

                            echo '
                            <tr>
                                <th scope="row">
                                    <div class="d-flex align-items-center">
                                        <img class="img-fluid me-5 rounded-circle" src="' . $image . '" style="width: 100px; height: 100px;" alt="">
                                    </div>
                                </th>
                                <td>
                                    <p class="mb-0 mt-4 text-dark">' . $name . '</p>
                                </td>
                                <td>
                                    <p class="mb-0 mt-4 text-dark price-product" data-product-id="' . $id_product . '">' . number_format($price, 0, ',', '.') . ' VND</p>
                                </td>
                                <td>
                                    <div class="input-group quantity mt-4 border-0" style="width: 100px;">
                                        <div class="input-group-btn">
                                            <button class="btn btn-sm btn-minus rounded-circle bg-light border" onclick="handleDownQuantity(' . $id_product . ')"><i class="fa fa-minus"></i></button>
                                        </div>
                                        <input class="form-control form-control-sm text-center quantity-value border-0" data-product-id="' . $id_product . '" type="text" value="' . $quantity . '">
                                        <div class="input-group-btn">
                                            <button class="btn btn-sm btn-plus rounded-circle bg-light border" onclick="handleUpQuantity(' . $id_product . ')"><i class="fa fa-plus"></i></button>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="mb-0 mt-4 text-dark total-price" data-product-id="' . $id_product . '">' . number_format($totalPrice, 0, ',', '.') . ' VND</p>
                                </td>
                                <td>
                                    <button class="btn btn-md rounded-circle bg-light border mt-4" onclick="handleDeleted(' . $id_product . ')"><i class="fa fa-times text-danger"></i></button>
                                </td>
                            </tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-sm-8 col-md-7 col-lg-12">
                    <div class="bg-light rounded">
                        <div class="p-4">
                            <h1 class="display-6 mb-4 title">Cart <span class="fw-normal">Total</span></h1>
                            <div class="d-flex justify-content-between mb-4">
                                <h5 class="mb-0 me-4">Tạm tính:</h5>
                                <p class="mb-0" id="tong-tien"><?php echo number_format($tongTien, 0, ',', '.'); ?> VND</p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <h5 class="mb-0 me-4">Phí vận chuyển</h5>
                                <p class="mb-0">Flat rate: 3.00 VND</p>
                            </div>
                        </div>
                        <div class="py-4 mb-4 line-border d-flex justify-content-between">
                            <h5 class="mb-0 ps-4 me-4">Tổng hoá đơn</h5>
                            <p class="mb-0 pe-4" id="total"><?php echo number_format($tongTien + 3, 0, ',', '.'); ?> VND</p>
                        </div>
                        <a class="btn btn-apply rounded-pill px-4 py-3 text-uppercase mb-4 ms-4 hvr-float" type="button" id="navigate-transaction-page" href="index.php?page=thanhtoan">Thanh toán</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    let idUser = sessionStorage.getItem('userId');
    function addHref(tag) {
        const currentHref = tag.href;
        const url = new URL(currentHref);
        url.searchParams.set('userId', idUser);
        tag.href = url.toString();
        console.log(tag.href);
        window.location.href = tag.href;
    }
    const navigatePage = document.querySelector('#navigate-transaction-page');
    navigatePage.addEventListener('click', (e) => {
        addHref(navigatePage)
    })

    function handleDeleted(id_product) {
        document.querySelector(`.total-price[data-product-id='${id_product}']`).closest('tr').remove();
        updateTotal();
    }

    function handleDownQuantity(id_product) {
        const quantityInput = document.querySelector(`.quantity-value[data-product-id='${id_product}']`);
        const totalPriceElement = document.querySelector(`.total-price[data-product-id='${id_product}']`);
        const priceProduct = parseFloat(document.querySelector(`.price-product[data-product-id='${id_product}']`).innerText.replace(/[^0-9.-]+/g, ""));

        let quantity = parseInt(quantityInput.value);
        if (quantity > 1) {
            quantity--;
            quantityInput.value = quantity;
            totalPriceElement.innerText = (priceProduct * quantity).toFixed(2) + " VND";
        }

        updateTotal();
    }

    function handleUpQuantity(id_product) {
        const quantityInput = document.querySelector(`.quantity-value[data-product-id='${id_product}']`);
        const totalPriceElement = document.querySelector(`.total-price[data-product-id='${id_product}']`);
        const priceProduct = parseFloat(document.querySelector(`.price-product[data-product-id='${id_product}']`).innerText.replace(/[^0-9.-]+/g, ""));

        let quantity = parseInt(quantityInput.value);
        quantity++;
        quantityInput.value = quantity;
        totalPriceElement.innerText = (priceProduct * quantity).toFixed(2) + " VND";

        updateTotal();
    }

    function updateTotal() {
        let total = 0;
        document.querySelectorAll('.total-price').forEach(priceElement => {
            total += parseFloat(priceElement.innerText.replace(/[^0-9.-]+/g, ""));
        });

        document.getElementById('tong-tien').innerText = `$${total.toFixed(2)}`;
        document.getElementById('total').innerText = `$${(total + 3).toFixed(2)}`;
    }
</script>