<div class="container my-5">
    <h2 class="text-center mb-4">Update Products</h2>
    <div class="table-container">
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Tên Sản Phẩm</th>
                    <th>Giá</th>
                    <th>Trạng Thái</th>
                    <th>Ngày Cập Nhật</th>
                    <th>Hành Động</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>001</td>
                    <td><input type="text" class="form-control" value="Laptop Dell"></td>
                    <td><input type="number" class="form-control" value="20000000"></td>
                    <td>
                        <select class="form-select">
                            <option value="active" selected>Hoạt động</option>
                            <option value="inactive">Không hoạt động</option>
                        </select>
                    </td>
                    <td>22/11/2024</td>
                    <td class="action-buttons">
                        <button class="btn btn-success btn-sm"><i class="fas fa-save"></i> Lưu</button>
                        <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Xóa</button>
                    </td>
                </tr>
                <tr>
                    <td>002</td>
                    <td><input type="text" class="form-control" value="Điện Thoại"></td>
                    <td><input type="number" class="form-control" value="15000000"></td>
                    <td>
                        <select class="form-select">
                            <option value="active">Hoạt động</option>
                            <option value="inactive" selected>Không hoạt động</option>
                        </select>
                    </td>
                    <td>21/11/2024</td>
                    <td class="action-buttons">
                        <button class="btn btn-success btn-sm"><i class="fas fa-save"></i> Lưu</button>
                        <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Xóa</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>