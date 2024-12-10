<body>
    <section>
        <div class="new-post">
            <div class="container">
                <ol class="breadcrumb py-4 fs-6">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="index.php?page=tintuc">Tin Tức </a></li>
                    <li class="breadcrumb-item active css-ilends" aria-current="page">
                    </li>
                </ol>
                <div class="row gy-5">
                    <?php
                    $trsp = '';
                    foreach ($sp->mangsp as $key => $value) {
                        $trsp .= '
                                    <div class="col-lg-4 col-md-6">
                                        <div class="border border-light border-1 rounded-3 hvr-float">
                                            <div class="w-100 p-2">
                                            <a href="index.php?page=ctbaiviet&id='.$value['id'].'"><div class="post-img w-100"><img class="img-fluid w-100 rounded-3" src="../public/client/images/blog/img'.$value['id'].'.jpg" alt=""></div></a>
                                            <div class="meta-top">
                                                <ul class="p-0 text-start">
                                                <li class="d-flex align-items-center"><a class="text-black" href="index.php?page=ctbaiviet&id='.$value['id'].'">Mới</a></li>
                                                <li class="d-flex align-items-center"><i class="bi bi-dot"></i><a class="text-black" href="">
                                                    <time datetime="2022-01-01">'.$value['created_at'].'</time></a></li>
                                                </ul>
                                            </div>
                                        <a href="index.php?page=ctbaiviet&id='.$value['id'].'"><p class="title text-start text-black fs-4">'.$value['title'].'</p></a>
                                        <a href="index.php?page=ctbaiviet&id='.$value['id'].'">
                                    <div class="btn btn-primari p-3 hvr-float">Xem Thêm</div></a>
                                    </div>
                                </div>
                                </div>
                            ';
                    }
                    echo $trsp;
                    ?>

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