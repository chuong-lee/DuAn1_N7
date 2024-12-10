<form method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label>Tên sản phẩm</label>
        <input type="text" class="form-control" name="product-name" placeholder="Nhập tên sản phẩm">
    </div>
    <div class="form-group">
        <label>Giá</label>
        <input type="number" class="form-control" name="">
    </div>
    <div class="form-group">
        <label>Mô tả</label>
        <input type="text" class="form-control" name="description" placeholder="Nhập mô tả về sản phẩm">
    </div>

    

    <div class="form-group">
        <label>Số lượng</label>
        <input type="number" name="quantity" class="form-control">
    </div>

    <div class="form-group">
        <label>Giảm giá</label>
        <input type="number" class="form-control" name="sale_price">
    </div>
    
    <div class="form-group">
    <label >Danh mục sản phẩm</label>
    <select class="form-control" id="category" name="id_cate">
    <?php 
    $listCategory = $data['dsdm'];
    foreach($listCategory as $category){
        // print_r($category);
        extract($category);
        echo '<option value="'.$id.'" name="id_category">'.$name.'</option>';
    }
    ?>
      
    </select>
    <input type="text" id="tendanhmuc" name="tendanhmuc" value="">
  </div>
    

    <div class="form-group">
        <label>Hình</label>
        <input type="file" name="image" id="image" class="form-control">
        
    </div>

    <button type="submit" class="btn btn-primary" style="float: right; margin-top:15px" name="addPro">Submit</button>
</form>

<script>
document.getElementById('category').addEventListener('change', function() {
    var selectedCategoryName = this.options[this.selectedIndex].text;
    document.querySelector('#tendanhmuc').value = selectedCategoryName;
});
</script>