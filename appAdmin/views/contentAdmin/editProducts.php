
<h1>Cập nhật sản phẩm</h1>
<form method="POST" enctype="multipart/form-data">
    <?php 
        // print_r($data['pro_detail']);
        extract($data['pro_detail']);
        echo'<div class="form-group">
            <label>Tên sản phẩm</label>
            <input type="text" class="form-control" name="product-name" value="'.$name.'" placeholder="Nhập tên sản phẩm">
        </div>
        <div class="form-group">
            <label>Giá</label>
            <input type="number" class="form-control" name="price" value="'.$price.'">
        </div>
        <div class="form-group">
            <label>Mô tả</label>
            <input type="text" class="form-control" name="description" placeholder="Nhập mô tả về sản phẩm" value="'.$description.'">
        </div>

        

        <div class="form-group">
            <label>Số lượng</label>
            <input type="number" name="quantity" class="form-control" value="'.$quantity.'">
        </div>

        <div class="form-group">
            <label>Giảm giá</label>
            <input type="number" class="form-control" name="sale_price" value="'.$sale_price.'">
        </div>
        <img src="'.$image.'" height = "150px" width = "150px" alt="">
        <div class="form-group">
            <label>Hình</label>
            <input type="file" name="image" id="image" class="form-control" value="'.$image.'">
            <input type="hidden" name="image_old" value="'.$image.'">
            <input type="hidden" name="idpro" value="'.$id.'">
            
        </div>
        ';

        
    ?>
    
    
    <div class="form-group">
    <label >Danh mục sản phẩm</label>
    <select class="form-control" id="category" name="id_cate">
    <?php 
    $listCategory = $data['listcate'];
    foreach($listCategory as $category){
        // print_r($category);
        extract($category);
        echo '<option value="'.$id.'" name="id_category">'.$name.'</option>';
    }
    ?>
      
    </select>
    <input type="hidden" id="tendanhmuc" name="tendanhmuc" value="">
  </div>
    

    

    <button type="submit" class="btn btn-primary" style="float: right; margin-top:15px" name="editPro">Submit</button>
</form>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var categorySelect = document.getElementById('category');
        var defaultCategoryName = categorySelect.options[categorySelect.selectedIndex].text;
        document.querySelector('#tendanhmuc').value = defaultCategoryName;
    });

    document.getElementById('category').addEventListener('change', function() {
        var selectedCategoryName = this.options[this.selectedIndex].text;
        document.querySelector('#tendanhmuc').value = selectedCategoryName;
    });
</script>