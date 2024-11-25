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
                        if (!empty($article)) {
                            // Thay thế các tiêu đề phụ bắt đầu bằng '##' với thẻ <strong> để in đậm
                            $content = nl2br($article['content']); // Chuyển các xuống dòng thành <br>

                            // Ví dụ: Tìm tất cả các tiêu đề phụ bắt đầu bằng '##' và bao bọc chúng trong <strong>
                            $content = preg_replace('/^## (.*?)$/m', '<strong>$1</strong>', $content);

                            echo '
                                <p>Tác giả: ' . $article['author'] . '</p>
                                <div>' . $article['title'] . '</div>
                                <p>Nội dung: ' . $content . '</p>
                                <p>Lượt Xem: ' . (int)$article['views'] . '</p>
                            ';
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