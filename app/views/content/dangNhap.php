<section>
    <link rel="stylesheet" href="<?php echo '../public/client/css/trangChu.css'; ?>">

    <div class="login">
        <div class="container custom-login-container">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-12 col-md-9 custom-card-wrapper">
                    <div class="card o-hidden border-0 shadow-lg my-5 custom-card">
                        <div class="card-body p-0">
                            <div class="row custom-row">
                                <!-- Hình ảnh logo -->
                                <div class="col-lg-6 d-none d-lg-block bg-login-image">
                                    <img class="w-100 h-100" src="../public/client/images/logo.png" alt="Logo">
                                </div>

                                <div class="col-lg-6">
                                    <div class="p-5 custom-form-container">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4 custom-welcome-title">Đăng Nhập</h1>
                                        </div>

                                        <form class="user custom-login-form" method="POST">
                                            <div class="form-group custom-input-group">
                                                <input class="form-control form-control-user custom-input" id="exampleInputEmail" type="email" name="email" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                                            </div>

                                            <div class="form-group custom-input-group">
                                                <input class="form-control form-control-user custom-input" id="exampleInputPassword" type="password" name="password" placeholder="Password">
                                            </div>

                                            <div class="form-group custom-checkbox-group">
                                                <div class="custom-control custom-checkbox small">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck" name="remember_me">
                                                    <label class="custom-control-label" for="customCheck">Remember Me</label>
                                                </div>
                                            </div>

                                            <button class="btn btn-primary btn-user btn-block w-100 mt-3 py-3" name="login" type="submit">Login</button>

                                            <hr>

                                            <div class="d-flex justify-content-between my-3">
                                                <a class="btn btn-google custom-google-btn text-white p-3" href="index.html">
                                                    <i class="fab fa-google fa-fw"></i> Login with Google
                                                </a>
                                                <a class="btn btn-facebook custom-facebook-btn text-white p-3" href="index.html">
                                                    <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                                </a>
                                            </div>
                                        </form>

                                        <hr>

                                        <div class="text-center">
                                            <a class="small custom-forgot-password" href="forgot-password.html">Forgot Password?</a>
                                        </div>

                                        <div class="text-center">
                                            <a class="small custom-create-account" href="index.php?page=dangKy">Create an Account!</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
