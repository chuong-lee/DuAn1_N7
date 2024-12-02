<style>
  .text{
    padding-left:80px;
    padding-right:80px;
  }
</style>
<body>
    <section>
      <div class="contact">
        <div class="header-content">
          <div class="contact-title w-100 text-center">       </div>
        </div>
        <div class="contact spad my-5">
            <div class="text">
            <?php
                        $trsp = '';
                        foreach ($sp->mangsp as $key => $value) {
                            $trsp .= '
                            <div class="col-lg-4 col-md-9">
                                <article>
                                    '.$value['name'].'
                                </article>
                            </div>';
                        }
                        echo $trsp;
                        ?>
            </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                <div class="contact-profile"><span class="icon_phone"><i class="fa-solid fa-phone"></i></span>
                  <h4> Điện Thoại</h4>
                  <p>+84-000-000-676</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                <div class="contact-profile"><span class="icon_pin_alt"><i class="fa-solid fa-location-dot"></i></span>
                  <h4>Địa Chỉ ;</h4>
                  <p>Quận 12 - TP.HCM</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                <div class="contact-profile"><span class="icon_clock_alt"><i class="fa-regular fa-clock"></i></span>
                  <h4>Thơi Gian</h4>
                  <p>10:00 am to 22:00 pm</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                <div class="contact-profile"><span class="icon_mail_alt"><i class="fa-regular fa-envelope"></i></span>
                  <h4>Email</h4>
                  <p>team7@gmail.com</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="contact-form spad mb-4">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="contact-form-title">
                  <h2 class="text-black">Lien He</h2>
                </div>
              </div>
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