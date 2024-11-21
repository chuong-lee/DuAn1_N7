<section>
<?php
require_once 'banner.header.php';
?>
    <div class="check-out">
        <div class="container">
            <ol class="breadcrumb py-4 fs-6">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Điền thông tin</a></li>
                <li class="breadcrumb-item"><a href="#">Xác nhận</a></li>
                <li class="breadcrumb-item active " aria-current="page">
                    <p>Hoàn tất đơn hàng</p>
                </li>
            </ol>
            <div class="checkout-form">
                <h4>Thông Tin Giao Hàng</h4>
                <form action="xac-nhan" method="post">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout-input mb-5">
                                        <label>Họ Tên ;<span>*</span></label>
                                        <input required="" name="name" type="text" value="">
                                        <!-- <p class='hidden text-danger'>Mã giảm giá không hợp lệ</p>-->
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout-input mb-5">
                                        <label>Số điện thoại;<span>*</span></label>
                                        <input required="" name="phone" type="text" value="">
                                    </div>
                                </div>
                                <div class="checkout-input">
                                    <label>Email</label>
                                    <input name="email" type="email" value="">
                                </div>
                            </div>
                            <div class="checkout-input">
                                <label>Địa chỉ*;<span>*</span><span class="label-note">&nbsp;(S&#x1ED1; nh&agrave;, C&abreve;n h&#x1ED9;, T&ecirc;n &dstrok;&#x1B0;&#x1EDD;ng, ng&otilde;...)</span></label>
                                <input class="checkout-input-add" required="" name="address" type="text" value="">
                                <!-- <input type="text" placeholder="Apartment, suite, unite ect (optinal)">-->
                            </div>
                            <div class="checkout-input">
                                <label>Tỉnh/Thành phố ;<span>*</span></label>
                                <select name="province" required>
                                    <option value="" hidden>Chọn thành phố</option>
                                    <option value="An Giang">An Giang</option>
                                    <option value="Bà Rịa-Vũng Tàu">Bà Rịa-Vũng Tàu</option>
                                    <option value="Bắc Giang">Bắc Giang</option>
                                    <option value="Bắc Kạn">Bắc Kạn</option>
                                    <option value="Bạc Liêu">Bạc Liêu</option>
                                    <option value="Bắc Ninh">Bắc Ninh</option>
                                    <option value="Bến Tre">Bến Tre</option>
                                    <option value="Bình Định">Bình Định</option>
                                    <option value="Bình Dương">Bình Dương</option>
                                    <option value="Bình Phước">Bình Phước</option>
                                    <option value="Bình Thuận">Bình Thuận</option>
                                    <option value="Cà Mau">Cà Mau</option>
                                    <option value="Cần Thơ">Cần Thơ</option>
                                    <option value="Cao Bằng">Cao Bằng</option>
                                    <option value="Đà Nẵng">Đà Nẵng</option>
                                    <option value="Đắk Lắk">Đắk Lắk</option>
                                    <option value="Đắk Nông">Đắk Nông</option>
                                    <option value="Điện Biên">Điện Biên</option>
                                    <option value="Đồng Nai">Đồng Nai</option>
                                    <option value="Đồng Tháp">Đồng Tháp</option>
                                    <option value="Gia Lai">Gia Lai</option>
                                    <option value="Hà Giang">Hà Giang</option>
                                    <option value="Hà Nam">Hà Nam</option>
                                    <option value="Hà Nội">Hà Nội</option>
                                    <option value="Hà Tĩnh">Hà Tĩnh</option>
                                    <option value="Hải Dương">Hải Dương</option>
                                    <option value="Hải Phòng">Hải Phòng</option>
                                    <option value="Hậu Giang">Hậu Giang</option>
                                    <option value="Hòa Bình">Hòa Bình</option>
                                    <option value="Hưng Yên">Hưng Yên</option>
                                    <option value="Khánh Hòa">Khánh Hòa</option>
                                    <option value="Kiên Giang">Kiên Giang</option>
                                    <option value="Kon Tum">Kon Tum</option>
                                    <option value="Lai Châu">Lai Châu</option>
                                    <option value="Lâm Đồng">Lâm Đồng</option>
                                    <option value="Lạng Sơn">Lạng Sơn</option>
                                    <option value="Lào Cai">Lào Cai</option>
                                    <option value="Long An">Long An</option>
                                    <option value="Nam Định">Nam Định</option>
                                    <option value="Nghệ An">Nghệ An</option>
                                    <option value="Ninh Bình">Ninh Bình</option>
                                    <option value="Ninh Thuận">Ninh Thuận</option>
                                    <option value="Phú Thọ">Phú Thọ</option>
                                    <option value="Phú Yên">Phú Yên</option>
                                    <option value="Quảng Bình">Quảng Bình</option>
                                    <option value="Quảng Nam">Quảng Nam</option>
                                    <option value="Quảng Ngãi">Quảng Ngãi</option>
                                    <option value="Quảng Ninh">Quảng Ninh</option>
                                    <option value="Quảng Trị">Quảng Trị</option>
                                    <option value="Sóc Trăng">Sóc Trăng</option>
                                    <option value="Sơn La">Sơn La</option>
                                    <option value="Tây Ninh">Tây Ninh</option>
                                    <option value="Thái Bình">Thái Bình</option>
                                    <option value="Thái Nguyên">Thái Nguyên</option>
                                    <option value="Thanh Hóa">Thanh Hóa</option>
                                    <option value="Thừa Thiên-Huế">Thừa Thiên-Huế</option>
                                    <option value="Tiền Giang">Tiền Giang</option>
                                    <option value="TP Hồ Chí Minh">TP Hồ Chí Minh</option>
                                    <option value="Trà Vinh">Trà Vinh</option>
                                    <option value="Tuyên Quang">Tuyên Quang</option>
                                    <option value="Vĩnh Long">Vĩnh Long</option>
                                    <option value="Vĩnh Phúc">Vĩnh Phúc</option>
                                    <option value="Yên Bái">Yên Bái</option>
                                </select>
                            </div>
                            <div class="checkout-input">
                                <label>Quận/Huyện;<span>*</span></label>
                                <select required="" name="district">
                                    <option hidden="">Chọn Quận/Huyện</option>
                                </select>
                            </div>
                            <div class="checkout-input">
                                <p>Phường/Xã;<span>*</span></p>
                                <select required="" name="ward">
                                    <option value="" hidden="">Chọn Phường/Xã;</option>
                                </select>
                            </div>
                            <div class="checkout-input">
                                <p>Ghi chú ;</p>
                                <textarea name="notes" id="" cols="30" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout-order p-3 bg-light">
                                <h4 class="text-highline">Giỏ hàng</h4>
                                <div class="checkout-order-products d-flex justify-content-between fw-bold fs-5 mb-3">
                                    <div class="text-highline">Sản phẩm</div><span>Thành tiền</span>
                                </div>
                                <ul>
                                    <li>tên sản phẩm <span>15.000 &dstrok;</span></li>
                                </ul>
                                <div class="checkout-order-subtotal d-flex justify-content-between fw-bold fs-5 mb-3"><span class="text-highline">Tiền hàng</span><span>15.000</span></div>
                                <div class="checkout-order-shipping d-flex justify-content-between fw-bold fs-5 mb-3"><span class="text-highline">Phí vận chuyển</span><span class="delivery-fee">0</span></div>
                                <div class="checkout-order-discount d-flex justify-content-between fw-bold fs-5 mb-3"><span class="text-highline"> Phí vận chuyển đ;</span><span class="discount">0</span></div>
                                <div class="checkout-order-total d-flex justify-content-between fw-bold fs-5 mb-3"><span class="text-highline">Tổng D</span><span class="order_total">15.000</span></div>
                                <div class="shoping-continue">
                                    <label class="mb-3 text-highline fw-bold fs-5 mb-3">Mã giảm giá;</label>
                                    <div class="input-group mb-3">
                                        <input class="form-control" name="coupon" type="text" value="">
                                        <button class="btn btn-outline-secondary" name="coupon_submit">ÁP Dụng</button>
                                    </div>
                                    <div class="coupon-notification"></div>
                                </div>
                                <button class="site-btn btn-submit border-0 rounded-4 py-2 px-4" type="submit">Đặt Hàng</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<script>
    async function loadDistricts() {
        const province = document.getElementById('province').value;

        if (!province) return;

        const response = await fetch(`/api/get-districts?province=${province}`);
        const districts = await response.json();

        const districtSelect = document.getElementById('district');
        districtSelect.innerHTML = '<option value="" hidden>Chọn Quận/Huyện</option>';
        districts.forEach((district) => {
            districtSelect.innerHTML += `<option value="${district}">${district}</option>`;
        });


        document.getElementById('ward').innerHTML =
            '<option value="" hidden>Chọn Phường/Xã</option>';
    }

    async function loadWards() {
        const district = document.getElementById('district').value;

        if (!district) return;

        const response = await fetch(`/api/get-wards?district=${district}`);
        const wards = await response.json();

        const wardSelect = document.getElementById('ward');
        wardSelect.innerHTML = '<option value="" hidden>Chọn Phường/Xã</option>';
        wards.forEach((ward) => {
            wardSelect.innerHTML += `<option value="${ward}">${ward}</option>`;
        });
    }

</script>
<?php
require_once '../public/link.php';
?>