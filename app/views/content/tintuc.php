<body>
    <section>
      <div class="new-post">
        <div class="container">
          <ol class="breadcrumb py-4 fs-6">
            <li class="breadcrumb-item"><a href="index.php?page=trangChu">Home</a></li>
            <li class="breadcrumb-item"><a href="index.php?page=tintuc">Tin Tức</a></li>
          </ol>
          <div class="row gy-5">
            <div class="col-lg-4 col-md-6">
            <?php
            $trsp ='';
            foreach ($sp->mangsp as $key => $value) {
                $trsp .= '
                <div class="mainsp">
                    <div class="spsp1">
                        <a href="index.php?page=ctbaiviet&id='.$value['id'].'"></a>
                        <h6>Tác giả: '.$value['author'].'</h6>
                         <a href="index.php?page=ctbaiviet&id='.$value['id'].'"><img src="../public/client/images/post'.$value['id'].'.jpg" alt="post'.$value['id'].'" width="450" height="150" ></a>
                        <div class="ten"><a href="index.php?page=ctbaiviet&id='.$value['id'].'">'.$value['title'].'</a></div>
                        <h6>Ngày xuất bản: '.$value['created_at'].'</h6>
                    </div>
                </div>
                ';
            }
            echo $trsp;
        ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- main js-->
    <script src="client/js/all.min.js"></script>
    <script src="client/js/jquery.min.js"></script>
    <script src="client/js/bootstrap.bundle.min.js"></script>
    <script src="client/js/moment.js"></script>
    <script src="client/slick/slick.js"></script>
    <script src="client/js/main.js"></script>
    <script>
      $(function () {
          if ($(window).width() > 769) {
              $('.menu .dropdown > a').click(function () {
                  location.href = this.href;
              });
          }
      })
    </script>
  </body>