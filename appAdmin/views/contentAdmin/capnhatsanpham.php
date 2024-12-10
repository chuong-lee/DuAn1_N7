<div class="container my-4">
    <h2 class="text-center mb-4">Danh sách sản phẩm</h2>
    <div class="add-products " style="float: right;">
    <button class="btn btn-primary " ><a href="indexAdmin.php?page=addProducts" style="color: #fff;">Thêm sản phẩm</a></button>
    </div>
    <div class="table-container" style="margin-top: 15px;">
        <table class="table table-striped table-bordered table-hover align-middle">
            <thead class="table-dark">
            <tr>
                <th>TÊN</th>
                <th>GIÁ</th>
                <th>HÌNH</th>
                <th>SỐ LƯỢNG</th>
                <th>LƯỢT MUA</th>
                <th>CHỨC NĂNG</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $showPro = $data['dssp'];
            foreach ($showPro as $product){
                // print_r($product);
                extract($product);
                $formattedName = str_replace(' ', '', $tendanhmuc);
                echo '<tr>
                <td>'.$name.'</td>
                <td>'.$price.'</td>
                <td><figure><a href="" title="Product Title"><img class="card-img-topimg w-100" src="' . $image . '"></a></figure></td>
                <td>'.$quantity.'</td>
                <td>'.$buying.'</td>
                <td><button type="button" class="btn btn-success"><a href="indexAdmin.php?page=editpro&id='.$id_product.'">Sửa</a></button><button type="button" class="btn btn-danger"><a href="indexAdmin.php?page=delpro&id='.$id_product.'">Xóa</a></button></td>
            </tr>';
            }
            ?>
            
            </tbody>
        </table>
    </div>
</div>
