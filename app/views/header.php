<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <title>Ubrand-shop</title>
  <link rel="icon" href="../public/client/images/logo.png" type="image/gif" sizes="16x16">
  <!-- main css-->
  <link rel="stylesheet" href="../public/client/css/bootstrap.min.css">
  <link rel="stylesheet" href="../public/client/css/all.min.css">
  <link rel="stylesheet" href="../public/client/css/hover-min.css">
  <link rel="stylesheet" href="../public/client/css/flag-icons.min.css">
  <link rel="stylesheet" href="../public/client/css/style.css">
  <link rel="stylesheet" href="../public/client/slick/slick.css">
  <!--link(rel='stylesheet' href='client/fonts/fontstyle.css')-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700&amp;subset=latin,latin-ext" type="text/css" media="all">
</head>

<body>
  <script src="../public/client/js/jquery.min.js"></script>
  <script src="../public/client/js/all.min.js"></script>
  <script src="../public/client/js/bootstrap.bundle.min.js"></script>
  <script src="../public/client/js/moment.min.js"></script>
  <script src="../public/client/slick/slick.js"></script>
  <script src="../public/client/js/main.js"></script>
  <script>
    $(document).ready(function() {
        if ($(window).width() > 769) {
            $('.menu .dropdown > a').click(function() {
                location.href = this.href;
            });
        }
    });
</script>
  <header>
    <nav class="navbar navbar-expand-lg menu">
      <div class="container"><a class="navbar-brand" href="index.php?page=trangChu"><img class="img-logo" src="../public/client/images/logo.png"></a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#menu" aria-controls="offcanvasNavbar" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="search-home-page">
          <button type="button" class="">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
              <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
            </svg>
          </button>
          <input type="text" placeholder="Tìm kiếm sản phẩm">
        </div>
        <div class="offcanvas offcanvas-start" id="menu" tabindex="-1" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <div class="offcanvas-title"><img class="img-logo" src="../public/client/images/logo.png"></div>
            <button class="btn-close" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>

          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-center flex-grow-1 pe-3 text-uppercase">
              <li class="nav-item mx-lg-4"><a class="nav-link" href="index.php?page=trangChu">Trang Chủ</a></li>
              <li class="nav-item mx-lg-4"><a class="nav-link" href="product.html">Sản Phẩm</a></li>
              <li class="nav-item mx-lg-4"><a class="nav-link" href="index.php?page=tintuc">Tin tức</a></li>
              <li class="nav-item mx-lg-4"><a class="nav-link" href="index.php?page=gioithieu">Giới thiệu</a></li>
              <li class="nav-item mx-lg-4"><a class="nav-link" href="contact.html">Liên Hệ</a></li>
            </ul>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
              <button class="btn btn-primary me-md-2" type="button">Đăng KÍ</button>
              <button class="btn btn-primary" type="button">ĐĂng Nhập</button>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>