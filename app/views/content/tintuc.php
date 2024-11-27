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
                            $trsp .= '
                            <div class="col-lg-4 col-md-6">
                                <article>
                                    <div class="post-img"><a href="index.php?page=ctbaiviet&id='.$value['id'].'"><img src="../public/client/images/post'.$value['id'].'.jpg" alt="post'.$value['id'].'" width="350" height="150"></a></div>
                                    <div class="meta-top">
                                        <ul>
                                            <li class="d-flex align-items-center"><i class="bi bi-dot"></i><h6>Ngày xuất bản: '.$value['created_at'].'</h6></li>
                                        </ul>
                                    </div>
                                    <h2 class="title"><a href="index.php?page=ctbaiviet&id='.$value['id'].'">'.$value['title'].'</a></h2>
                                </article>
                            </div>';
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