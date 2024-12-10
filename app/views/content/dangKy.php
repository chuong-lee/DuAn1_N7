<section>
    <link rel="stylesheet" href="<?php echo '../public/client/css/trangChu.css'; ?>">
    <?php require_once 'banner.header.php'; ?>

    <div class="register">
        <div class="container">
            <div class="card o-hidden border-0 shadow-lg my-5 register-card">
                <div class="card-body p-0">
                    <div class="row">
                        <!-- Hình ảnh logo -->
                        <div class="col-lg-5 d-none d-lg-block">
                            <img class="w-100 h-100" src="../public/client/images/logo.png" alt="Logo">
                        </div>

                        <div class="col-lg-7">
                            <div class="p-5 form-section">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4 welcome-title">Đăng Kí</h1>
                                </div>

                                <form class="user registration-form" method="POST">
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input class="form-control form-control-user first-name-input" id="exampleFirstName" type="text" name="first_name" placeholder="First Name">
                                        </div>
                                        <div class="col-sm-6">
                                            <input class="form-control form-control-user last-name-input" id="exampleLastName" type="text" name="last_name" placeholder="Last Name">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <input class="form-control form-control-user email-input" id="exampleInputEmail" type="email" name="email" placeholder="Email Address">
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input class="form-control form-control-user password-input" id="exampleInputPassword" type="password" name="password" placeholder="Password">
                                        </div>
                                        <div class="col-sm-6">
                                            <input class="form-control form-control-user repeat-password-input" id="exampleRepeatPassword" type="password" name="confirm_password" placeholder="Repeat Password">
                                        </div>
                                    </div>

                                    <button class="btn btn-primary btn-user btn-block register-btn w-100" name="register" type="submit">Register Account</button>

                                    <hr class="divider">

                                    <div class="social-login-buttons d-flex justify-content-between">
                                        <a class="btn btn-google btn-user btn-block google-btn" href="index.html">
                                            <i class="fab fa-google fa-fw"></i> Register with Google
                                        </a>
                                        <a class="btn btn-facebook btn-user btn-block facebook-btn" href="index.html">
                                            <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                        </a>
                                    </div>
                                </form>

                                <hr class="divider">

                                <div class="text-center">
                                    <a class="small forgot-password-link" href="forgot-password.html">Forgot Password?</a>
                                </div>

                                <div class="text-center">
                                    <a class="small login-link" href="index.php?page=dangNhap">Already have an account? Login!</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
