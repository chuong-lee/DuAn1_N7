<section>
    <div class="product">
        <div class="container">
            <?php require_once 'banner.header.php';?>

            <!-- Category Tabs -->
            <div class="tab-pane fade w-100" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="1">
                <!-- <?php
                // Lấy ID danh mục hiện tại từ URL hoặc đặt mặc định nếu không có
                $currentCategoryId = isset($_GET['id_danhmuc']) ? intval($_GET['id_danhmuc']) : null;
                ?> -->

                <ul class="nav nav-pills my-4 btn-class nav-justified  product-tags" role="tablist">
                    <?php
                    $listCate = $data['dsdm'];
                    foreach ($listCate as $cate) {
                        extract($cate); // Trích xuất biến $id và $name từ mảng
                        // So sánh $id với danh mục hiện tại để xác định class "active"
                        $isActive = ($id === $currentCategoryId) ? 'active' : '';
                        echo '
                            <li class="nav-item" role="presentation">
                                <button class="nav-link py-lg-3 ' . $isActive . '" data-bs-toggle="pill" data-bs-target="#referral" 
                                    type="button" onclick="handleClickCate(' . htmlspecialchars($id) . ')" 
                                    role="tab" aria-selected="' . ($isActive ? 'true' : 'false') . '">' . htmlspecialchars($name) . '</button>
                            </li>';
                    }
                    ?>
                </ul>

            </div>

            <!-- Carousel Section -->

            <!-- Product Grid -->
            <div class="container">
                <div class="row">
                    <div class="tab-content my-3">
                        <div class="tab-pane fade show active" id="referral" role="tabpanel"
                             aria-labelledby="pills-home-tab" tabindex="0">
                            <div class="row g-4">
                                <?php
                                    $listProducts = $data['products'];
                                    foreach ($listProducts as $product) {
                                        // print_r($product);
                                        extract($product);
                                            echo '
                                            <div class="col-md-6 col-lg-4 col-xl-3">
                                            <form method="POST">
                                            <div class="border border-light border-1">                                  
                                                    <div class="rounded position-relative fruite-item">
                                                        <!-- Hình ảnh sản phẩm -->
                                                        <div class="fruite-img">
                                                            <img class="img-fluid w-100 rounded-top" 
                                                                 src="'.$image . '" 
                                                                 alt="' . $name . '">
                                                        </div>
                                                        
                                                        <!-- Thông tin sản phẩm -->
                                                        <div class="p-2 border-top-0 rounded-bottom border-line">
                                                            <div class="px-2">
                                                                <h4 class="fw-normal text-clamp">' . $name . '</h4>
                                                                <p class="text-clamp">Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                            </div>
                                                            
                                                            <!-- Giá sản phẩm -->
                                                            <div class="d-flex justify-content-center align-items-center gap-2">
                                                                <span class="text-dark fw-semibold">' . number_format($price, 0, ',', '.') . 'đ</span>
                                                            </div>
                                                            <input type="hidden" value="' . $id_product . '" name="id_product">
                                                            <input type="hidden" value="" class="user-id" name="id_user">
                                                            <!-- Hành động -->
                                                            <div class="d-flex justify-content-between mt-2">
                                                                <a class="btn rounded-pill p-2 btn-apply" href="index.php?page=chiTietSp&id= '.$id_product.'">
                                                                    <i class="fa-solid fa-magnifying-glass"></i> Xem Nhanh
                                                                </a>
                                                                <button class="btn rounded-pill p-2 btn-apply" name="addProductToCart">
                                                                    <i class="fa fa-shopping-bag"></i> Add to cart
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                                
                                            </div>
                                            ';


                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center py-4">
                    <a class="btn btn-primari py-2 px-4" href="">Xem thêm</a>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
        function handleClickCate(id) {
            history.pushState(null, "", "index.php?page=sanPham&id_danhmuc=" + id);
            location.reload();
        }

        const userIds = sessionStorage.getItem('userId');
        if (userIds) {
            document.querySelectorAll(".user-id").forEach(input => input.value = userIds);
        } else {
            console.log("Không tìm thấy userId");
        }
    </script>
</section>
