<section>
  <div class="oder">
    <div class="container order-container mt-5">
      <div class="text-center">
        <h1 class="order-title">Qu&#x1EA3;n l&yacute; &Dstrok;&#x1A1;n h&agrave;ng</h1>
      </div>
      <form method="POST">
        <div class="tab-pane fade w-100" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="1">
        <ul class="nav nav-pills my-4 btn-class nav-justified rounded-4 order-tabs" role="tablist">
          <?php 
          $listStatus = $data['statuses'];
          foreach ($listStatus as $index => $status) {
            echo '
            <li class="nav-item">
                    <button class="nav-link py-lg-3" type="submit" data-bs-target="#'.$status.'" name="clickStatus" value="'.$status.'" 
                    data-bs-toggle="tab" data-bs-target="#'.$status.'" role="tab">'.ucfirst($status).'</button>
            </li>
            ';
          }
          ?>
          
        </ul>
      </div>
      </form>
      
      <?php

if (isset($data['orderDetails']) && !empty($data['orderDetails'])) {
  $listOrder = $data['orderDetails'];

  foreach ($listOrder as $index => $order) {
      extract($order);
      echo '
      <div class="tab-content order-content mt-3">
      <div class="tab-pane fade show active" id="all" role="tabpanel">
        <div class="d-flex">
          <div class="me-3"><img class="rounded" src="'.$image.'" alt="Product Image"></div>
          <div class="flex-grow-1">
            <h6 class="product-title mb-1">'.$name.'</h6>
            <p class="product-category text-muted mb-1">Loại hàng: '.$tenDanhMuc.'</p>
            <p class="product-quantity text-muted mb-1">x'.$quantity.'</p>
          </div>
          <!-- Order Status-->
          <div class="text-end"><span class="badge bg-warning text-dark order-status">'.$status.'</span>
          </div>
        </div>
        <!-- Order Footer-->
        <div class="border-top pt-3 mt-3">
          <p class="text-muted small mb-2">&Dstrok;&#x1A1;n h&agrave;ng s&#x1EBD; &dstrok;&#x1B0;&#x1EE3;c
            chu&#x1EA9;n b&#x1ECB; v&agrave; chuy&#x1EC3;n &dstrok;i tr&#x1B0;&#x1EDB;c<strong>30-11-2024</strong>.
          </p>
          <div class="d-flex justify-content-between align-items-center">
            <div><span class="text-muted">Th&agrave;nh ti&#x1EC1;n:</span><span
                class="text-danger fs-5 fw-bold">&#x20AB;25.130</span></div>
            <div>
              <button class="btn btn-outline-danger btn-sm me-2">H&#x1EE7;y &Dstrok;&#x1A1;n H&agrave;ng</button>
              <button class="btn btn-outline-primary btn-sm">Li&ecirc;n H&#x1EC7; Ng&#x1B0;&#x1EDD;i
                B&aacute;n</button>
            </div>
          </div>
        </div>
        <!-- Add more order items here-->
      </div>
    </div>
      ';
  }
} else {
  echo '<span class="text-center">Chưa có đơn hàng nào được xử lý</span>';
}
?>

    </div>
  </div>
</section>

<script>
    document.querySelectorAll('.status-btn').forEach(function(button) {
      document.querySelector('.clickStatus').addEventListener('click', function() {
          var status = this.getAttribute('data-status'); // Lấy giá trị từ data-status
          document.querySelector('.set-status').value = status; // Cập nhật giá trị cho input ẩn
      });
});
</script>