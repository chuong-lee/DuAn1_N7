<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow category-form-container">
                <div class="card-header text-center">
                    <h1 class="category-form-title">Thêm Danh Mục</h1>
                </div>
                <div class="card-body">
                    <form class="category-form-content">
                        <!-- Tên Danh Mục -->
                        <div class="form-group mb-3 category-form-group">
                            <label class="form-label category-form-label" for="category-name">Tên Danh Mục</label>
                            <input class="form-input category-form-input form-control" type="text" id="category-name" name="category-name" placeholder="Nhập tên danh mục" required>
                        </div>
                        <!-- Mô Tả Danh Mục -->
                        <div class="form-group mb-3 category-form-group">
                            <label class="form-label category-form-label" for="category-description">Mô Tả</label>
                            <textarea class="form-textarea category-form-textarea form-control" id="category-description" name="category-description" placeholder="Nhập mô tả danh mục" rows="4"></textarea>
                        </div>
                        <!-- Trạng Thái -->
                        <div class="form-group mb-3 category-form-group">
                            <label class="form-label category-form-label" for="category-status">Trạng Thái</label>
                            <select class="form-select category-form-select form-control" id="category-status" name="category-status" required>
                                <option value="" disabled selected>Chọn trạng thái</option>
                                <option value="active">Hoạt động</option>
                                <option value="inactive">Không hoạt động</option>
                            </select>
                        </div>
                        <!-- Nút Thêm -->
                        <div class="text-center">
                            <button class="form-button category-form-button btn btn-primary w-100" type="submit">Thêm Danh Mục</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>