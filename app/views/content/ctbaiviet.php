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
                        if (!empty($sp->onesp)) {
                            $value = $sp->onesp[0]; 

                            echo '
                            <div class="mainsp">
                                <div class="spsp1">
                                    <a href="index.php?page=ctbaiviet&id=' . $value['id'] . '">
                                        <p>Tác giả: ' . ($value['author']) . '</p>
                                        <div class="ten">' . ($value['name']) . '</div>
                                        <p>Nội dung: ' . ($value['content']) . '</p>
                                        <p>Lượt Xem: ' . (int)$value['view'] . '</p>
                                    </a>
                                </div>
                            </div>';
                        } else {
                            echo '<p>Không có bài viết nào để hiển thị.</p>';
                        }
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
    $(function() {
        if ($(window).width() > 769) {
            $('.menu .dropdown > a').click(function() {
                location.href = this.href;
            });
        }
    })
    </script>
</body>