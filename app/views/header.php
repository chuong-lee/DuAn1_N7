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
  <nav class="navbar navbar-expand-lg mx-lg-4">
    <div class="container-fluid"><a class="navbar-brand" href="index.html"><img class="img-logo" src="./client/images/logo.png"/></a>
      <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#menu" aria-controls="offcanvasNavbar" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
      <div class="offcanvas offcanvas-start" id="menu" tabindex="-1" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <div class="offcanvas-title"><img class="img-logo" src="../public/client/images/logo.png"/></div>
          <button class="btn-close" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body align-items-center">
          <ul class="navbar-nav justify-content-center flex-grow-1 pe-3 align-items-center">
            <li class="nav-item mx-lg-2">
              <div class="input-group"><span class="input-group-text"><i class="fa-solid fa-magnifying-glass"></i></span>
                <input class="form-control" id="exampleInputEmail1" type="email" placeholder="Serch" aria-describedby="emailHelp" required=""/><span class="input-group-text">Serch</span>
              </div>
            </li>
            <li class="nav-item mx-lg-2"><a class="nav-link" href="index.php">Trang Chủ</a></li>
            <li class="nav-item mx-lg-2"><a class="nav-link" href="index.php?page=product">Sản Phẩm</a></li>
            <li class="nav-item mx-lg-2"><a class="nav-link" href="index.php?page=tintu">Tin tức</a></li>
            <li class="nav-item mx-lg-2"><a class="nav-link" href="index.php?page=gioithieu">Giới thiệu</a></li>
            <li class="nav-item mx-lg-2"><a class="nav-link" href="index.php?page=lienhe">Liên Hệ</a></li>
          </ul>
          <div class="d-grid gap-2 d-md-flex justify-content-md-end"><a class="btn btn-primary me-md-2 btn-log" type="button" href="index.php?page=dangKy">Đăng KÍ</a><a class="btn btn-primary btn-reg" type="button" href="index.php?page=dangNhap">ĐĂng Nhập</a></div><a class="text-black fs-4 align-items-center ms-3" type="button" href="cart.html"><i class="fa-solid fa-cart-shopping"></i></a>
        </div>
      </div>
    </div>
  </nav>
</header>