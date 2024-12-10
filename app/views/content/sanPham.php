<section>
    <div class="product">
        <div class="container">
            <!-- Category Tabs -->
            <div class="tab-pane fade w-100" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="1">
                <ul class="nav nav-pills my-4 btn-class nav-justified rounded-4 product-tags" role="tablist">
                    <?php
                    $listCate = $data['dsdm'];
                    foreach ($listCate as $cate) {
                        extract($cate);
                        echo '
                            <li class="nav-item" role="presentation">
                                <button class="nav-link py-lg-3" data-bs-toggle="pill" data-bs-target="#referral" 
                                    type="button" onclick="handleClickCate(' . htmlspecialchars($id) . ')" 
                                    role="tab" aria-selected="true">' . htmlspecialchars($name) . '</button>
                            </li>';
                    }
                    ?>
                </ul>
            </div>

            <!-- Carousel Section -->
            <div id="carouselExampleIndicator" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button class="active" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100 carousel-img" src="client/images/banner-1.jpg" alt="Banner 1">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="client/images/banner-1.jpg" alt="Banner 2">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="client/images/banner-1.jpg" alt="Banner 3">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <!-- Product Grid -->
            <div class="container">
                <div class="row">
                    <div class="tab-content my-3">
                        <div class="tab-pane fade show active" id="referral" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                            <div class="row g-4">
                                <?php
                                $listProducts = $data['products'];
                                foreach ($listProducts as $product) {
                                    extract($product);
                                    $formattedName = str_replace(' ', '', $tendanhmuc);
                                    $salePercent = (($price - $sale_price) / $price) * 100;
                                    $ceiled = ceil($salePercent);
                                    echo '
                                            <div class="col-md-6 col-lg-4 col-xl-3">
                                                <div class="rounded position-relative fruite-item">
                                                    <div class="fruite-img">
                                                        <img class="img-fluid w-100 rounded-top" src="../public/client/images/danhmuc/' . htmlspecialchars($formattedName) . '/' . htmlspecialchars($image) . '" alt="' . htmlspecialchars($name) . '">
                                                    </div>
                                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Fruits</div>
                                                    <div class="p-2 border-top-0 rounded-bottom boder-line">
                                                        <div class="px-2">
                                                            <h4 class="fw-normal">' . htmlspecialchars($name) . '</h4>
                                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                        </div>
                                                        <div class="d-flex justify-content-center align-items-center gap-2">
                                                            <del>' . htmlspecialchars($price) . '</del>
                                                            <span class="text-dark fw-semibold">' . htmlspecialchars($sale_price) . '</span>
                                                            <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">' . $ceiled . '% OFF</span>
                                                        </div>
                                                        <div class="d-flex justify-content-between mt-2">
                                                            <a class="btn rounded-pill p-2 btn-apply" href="detail.html">
                                                                <i class="fa-solid fa-magnifying-glass"></i> Xem Nhanh
                                                            </a>
                                                            <a class="btn rounded-pill p-2 btn-apply" href="cart.html">
                                                                <i class="fa fa-shopping-bag"></i> Add to cart
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center py-4">
                    <a class="btn btn-primary py-2 px-4" href="">Xem thêm</a>
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
