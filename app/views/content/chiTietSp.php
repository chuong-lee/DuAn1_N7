  <link rel="stylesheet" href="<?php echo '../public/client/css/detail.css'; ?>">

  <div class="wrapper-container">
    <?php
    // print_r($data['productDetail']);
    extract($data['productDetail']);
    echo '<div class="row">
      <div class="custom-div">
        <div class="row">
          <div class="column anh-sp">
            <div class="san-pham">
              <img src="' . $image . '" alt="#">

            </div>
          </div>
        </div>
      </div>





      <div class="column thong_tin_sp ">
        <div class="product-wrapper">
          <div class=" product-title">
            <h1 style="text-transform: uppercase;">' . $name . '</h1>
            <p>SKU:' . $id_product . '
            </p>
          </div>

          <div class="column gia">
            <span>' . $price . ' VND</span>

          </div>
        </div>
        <div class="info-product">
          <div class=" product-title">
            <div class="header">Kích thước</div>
            <div class="select-swap">
              <label for="" class="sd">
                <span>XS</span>
              </label>
              <label for="" class="sd">
                <span>S</span>
              </label>
              <label for="" class="sd">
                <span>M</span>
              </label>
              <label for="" class="sd">
                <span>L</span>
              </label>

            </div>

          </div>

          <div class=" product-color">
            <div class="header">Màu sắc</div>
            <div class="color-swap">
              <input type="radio" id="black" name="color" value="black" checked>
              <label for="black" class="choose-color">
                <span>Đen</span>
              </label>

              <input type="radio" id="white" name="color" value="white">
              <label for="white" class="choose-color">
                <span>Trắng</span>
              </label>
            </div>

          </div>

          <div class="huong-dan">
            <a href="#" class="btn-choose-size">
              <label class="size-list" style="">
                <span>Hướng dẫn chọn size</span>
              </label></a>
          </div>
      <form method="POST">
          <div class="huong-dan">
            <button type="submit" class="btn-choose-size" name="addProductToCart" >Thêm vào giỏ hàng</button>

        <input type="hidden" value="' . $id_product . '" name="id_product">
        <input type="hidden" value="" class="user-id" name="id_user">
      </form>
            <div>
              <p>
                <b>Chất liệu:</b> vải dạ cao cấp
                <br>
                <b>Kiểu dáng:</b> chân váy thiết kế dáng chữ A, độ dài trên gối
                <br>
                <b>Sản phẩm kết hợp:</b> áo H165
                <br>
                <b>Thông tin người mẫu:</b> cao 1m60, nặng 50kg, số đo 84 - 60 - 90 mặc sản phẩm size S
              </p>
            </div>
          </div>
        </div>


      </div>
      

    </div>'
    ?>

  </div>
  <script>
    const userIdss = sessionStorage.getItem('userId');
    if (userIdss) {
      // Lấy tất cả các thẻ input có class "user-id"
      const inputs = document.querySelector(".user-id");

      // Gán userId vào từng thẻ input
      inputs.value = userIdss;
    } else {
      console.log("Không tìm thấy userId");
    }
  </script>