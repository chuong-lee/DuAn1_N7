<body>
    <section>
        <div class="new-post">
            <div class="container">
                <ol class="breadcrumb py-4 fs-6">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Tin Tức </a></li>
                    <li class="breadcrumb-item active css-ilends" aria-current="page">
                    </li>
                </ol>
                <div class="row gy-5">
                    <?php
                        $trsp = '';
                        foreach ($sp->mangsp as $key => $value) {
                            // Kiểm tra dữ liệu trước khi sử dụng
                            $id = htmlspecialchars($value['id'] ?? '');
                            $title = htmlspecialchars($value['title'] ?? '');
                            $created_at = htmlspecialchars($value['created_at'] ?? '');

                            $trsp .= '
                                <div class="col-lg-4 col-md-6">
                                    <div class="border border-light border-1 rounded-3 hvr-float">
                                        <div class="w-100 p-2">
                                            <!-- Hình ảnh bài viết -->
                                            <div class="post-img w-100">
                                                <img class="img-fluid w-100 rounded-3" 
                                                     src="../public/client/images/blog/blog-' . $id . '.jpg" 
                                                     alt="' . $title . '">
                                            </div>
                            
                                            <!-- Thông tin bài viết -->
                                            <div class="meta-top">
                                                <ul class="p-0 text-start">
                                                    <li class="d-flex align-items-center">
                                                        <a class="text-black" href="index.php?page=ctbaiviet&id=' . $id . '">Xem</a>
                                                    </li>
                                                    <li class="d-flex align-items-center">
                                                        <i class="bi bi-dot"></i>
                                                        <a class="text-black" href="">
                                                            <time datetime="' . $created_at . '">' . $created_at . '</time>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                            
                                            <!-- Tiêu đề bài viết -->
                                            <p class="title text-start fs-4 text-clamp">' . $title . '</p>
                            
                                            <!-- Nút hành động -->
                                            <div class="btn btn-primari p-3 hvr-float">READ MORE</div>
                                        </div>
                                    </div>
                                </div>
                            ';
                        }
                        echo $trsp;
                    ?>
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
    $(function() {
        if ($(window).width() > 769) {
            $('.menu .dropdown > a').click(function() {
                location.href = this.href;
            });
        }
    })
    </script>
</body>