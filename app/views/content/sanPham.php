
<section>
  <div class="product">
    <div class="container">
      <div class="tab-pane fade w-100" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="1">
        <ul class="nav nav-pills my-4 btn-class nav-justified rounded-4 product-tags" role="tablist">
          <?php
              $listCate = $data['dsdm'];
              foreach ($listCate as $cate) {
                // print_r($cate);
                extract($cate);
                echo
                    '
                        <li class="nav-item" role="presentation">
                            <button class="nav-link py-lg-3 active " data-bs-toggle="pill" data-bs-target="#referral" type="button" onclick="handleClickCate(' . $id . ')" role="tab" aria-selected="true">' . $name . '</button>
                        </li>
                      '
                ;
              }
          ?>

      </div>
      <div class="carousel slide" id="carouselExampleIndicator" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button class="active" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active"><img class="d-block w-100 carousel-img" src="client/images/banner-1.jpg"></div>
          <div class="carousel-item"><img class="d-block w-100" src="client/images/banner-1.jpg"></div>
          <div class="carousel-item"><img class="d-block w-100" src="client/images/banner-1.jpg"></div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next</span></button>
      </div>
      <div class="container">
        <div class="row">
          <div class="tab-content my-3">
            <div class="tab-pane fade show active" id="referral" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
              <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                <?php
                $listProducts = $data['products'];
                foreach ($listProducts as $product) {
                  // print_r($product);
                  extract($product);
                  $formattedName = str_replace(' ', '', $tendanhmuc);
                  $salePercent = (($price - $sale_price) / $price) * 100;
                  $ceiled = ceil($salePercent);
                  echo '
              <form method="POST">
                <div class="col p-3">
                  <div class="product-item">
                    <figure><a href="" title="Product Title"><img class="card-img-topimg w-100" src="../public/client/images/danhmuc/' . $formattedName . '/' . $image . '"></a></figure>
                    <div class="d-flex flex-column text-center">
                      <h3 class="fs-6 fw-normal">' . $name . '</h3>
                      <div><span class="rating d-flex justify-content-center">
                          <div class="text-warning" width="18" height="18"><i class="fa-solid fa-star"></i></div>
                          <div class="text-warning" width="18" height="18"><i class="fa-solid fa-star"></i></div>
                          <div class="text-warning" width="18" height="18"><i class="fa-solid fa-star"></i></div>
                          <div class="text-warning" width="18" height="18"><i class="fa-solid fa-star"></i></div>
                          <div class="text-warning" width="18" height="18"><i class="fa-solid fa-star"></i></div>
                        </span><span>(41)</span></div>
                      <div class="d-flex justify-content-center align-items-center gap-2">
                        <del>' . $price . '</del><span class="text-dark fw-semibold">' . $sale_price . '</span><span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">' . $ceiled . '% OFF</span>
                      </div>
                      <div class="button-area">
                        <div class="row g-1 mt-2">
                          <div class="col-3">
                            <input class="form-controll border-dark-subtle input-number quantity" type="number" name="quantity" value="1">
                          </div>
                          <div class="button-area">
                            <div class="row g-1 mt-2">
                              <div class="col-3">
                                <input class="form-controll border-dark-subtle input-number quantity p-3" type="number" name="quantity" value="1">
                              </div>
                              <div class="col-7"><button type="submit" name="addProductToCart"">Thêm vào giỏ hàng</button></div>
                              <div class="col-2"><a class="btn btn-outline-dark rounded-1 p-3 fs-6" href="#"><i class="fa-solid fa-heart"></i></a></div>
                            </div>
                          </div>                         
                        </div>
                      </div>
                      <input type="text" value="' . $id_product . '" name="id_product">
                      <input type="text" value="" class="user-id" name="id_user">
                    </div>
                  ';
                    }
                ?>
                <!-- 
Tạo ra button có hành động onclick được gán tên hàm handleAddProduct
Trong handleAddProduct lấy được giá trị id
mảng = [];
[1,2,3];
show dữ liệu theo dữ liệu trong mảng 
-->

              </div>
              <div class="col-12 text-center py-4"><a class="btn btn-primari py-2 px-4" href="">Xem thêm</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script>
  function handleClickCate(id) {
    history.pushState(null, "", "index.php?page=sanPham&id_danhmuc=" + id);
    location.reload();
    const urlParams = new URLSearchParams(window.location.search);
    const idDanhmuc = urlParams.get('id_danhmuc');
    console.log(id);

  }

  const userIds = sessionStorage.getItem('userId');
  if (userIds) {
    // Lấy tất cả các thẻ input có class "user-id"
    const inputs = document.querySelectorAll(".user-id");

    // Gán userId vào từng thẻ input
    inputs.forEach(input => {
        input.value = userIds;
    });
} else {
    console.log("Không tìm thấy userId");
}
  
  
</script>