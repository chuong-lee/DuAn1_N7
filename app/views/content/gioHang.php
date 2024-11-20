
<link rel="stylesheet" href="<?php echo '../public/client/css/trangChu.css'; ?>"
<?php
    require_once 'banner.header.php';
?>
<section>
    <div class="cart my-lg-4">
        <div class="container">
            <ol class="breadcrumb py-4 fs-6">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Điền thông tin</a></li>
                <li class="breadcrumb-item"><a href="#">Xác nhận</a></li>
                <li class="breadcrumb-item active css-ilends" aria-current="page">
                    <p>Hoàn tất đơn hàng</p>
                </li>
            </ol>
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
                                        <th class="fw-lighter text-white text-uppercase" scope="col">BTN</th>
                                        <th class="text-center fw-lighter text-white text-uppercase" scope="col">Amount</th>
                                        <th class="text-center fw-lighter text-white text-uppercase" scope="col">Note</th>
                                        <th class="text-center fw-lighter text-white text-uppercase" scope="col">Time</th>
                                        <th class="text-center fw-lighter text-white text-uppercase" scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($product as $product): ?>
                                        <tr>
                                            <td class="py-3 table-img">
                                                <img class="w-100" src="<?= htmlspecialchars($product['image']) ?>" alt="<?= htmlspecialchars($product['name']) ?>">
                                            </td>
                                            <td class="py-3 text-center text-highline-2 fw-bold"><?= htmlspecialchars($product['amount']) ?>k</td>
                                            <td class="py-3 text-center text-highline-2"><?= htmlspecialchars($product['note']) ?></td>
                                            <td class="py-3 text-center text-highline-2"><?= htmlspecialchars($product['time']) ?></td>
                                            <td class="py-3 text-center">
                                                <!-- Nút sửa -->
                                                <a href="edit_product.php?id=<?= $product['id'] ?>" class="btn btn-warning btn-sm">Sửa</a>
                                                <!-- Nút xóa -->
                                                <form action="delete_product.php" method="POST" style="display: inline-block;">
                                                    <input type="hidden" name="id" value="<?= $product['id'] ?>">
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?');">Xóa</button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
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
                            <!-- <li>Subtotal <span>$454.98</span></li>-->
                            <li>Tổng cộng<span class="cart-subtotal">115.000k;</span></li>
                        </ul><a class="primary-btn" href="checkout.html">THANH TOÁN</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
require_once '../public/link.php';
?>