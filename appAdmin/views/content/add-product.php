
<div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="form-container card shadow">
          <div class="card-header text-center">
            <h1 class="form-title">Thêm Sản Phẩm</h1>
          </div>
          <div class="card-body">
            <form class="form-content">
              <div class="form-group mb-3">
                <label class="form-label" for="product-name">Tên Sản Phẩm</label>
                <input class="form-input form-control" type="text" id="product-name" name="product-name" placeholder="Nhập tên sản phẩm" required>
              </div>
              <div class="form-group mb-3">
                <label class="form-label" for="product-price">Giá Sản Phẩm</label>
                <input class="form-input form-control" type="number" id="product-price" name="product-price" placeholder="Nhập giá sản phẩm" required>
              </div>
              <div class="form-group mb-3">
                <label class="form-label" for="product-description">Mô Tả</label>
                <textarea class="form-textarea form-control" id="product-description" name="product-description" placeholder="Nhập mô tả sản phẩm" rows="4" required></textarea>
              </div>
              <div class="form-group mb-3">
                <label class="form-label" for="product-category">Danh Mục</label>
                <select class="form-select form-control" id="product-category" name="product-category" required>
                  <option value="" disabled selected>Chọn danh mục</option>
                  <option value="electronics">Điện tử</option>
                  <option value="fashion">Thời trang</option>
                  <option value="home-appliances">Đồ gia dụng</option>
                </select>
              </div>
              <div class="form-group mb-3">
                <label class="form-label" for="product-image">Hình Ảnh</label>
                <input class="form-input-file form-control" type="file" id="product-image" name="product-image" accept="image/*" required>
              </div>
              <div class="text-center">
                <button class="form-button btn btn-primary w-100" type="submit">Thêm Sản Phẩm</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>