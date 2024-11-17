<section>
  <?php
  require_once 'banner.header.php';
  ?>
  <div class="team team-box pb-4 my-5" id="team">
    <div class="team-content pb-3 pb-lg-5">
      <div class="container">
        <div class="wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="0.3s">
          <div class="justify-content-center my-5 w-100">
            <div class="text-center justify-content-center mb-2">
              <div class="page-title">
                <h1 class="text-center service-title text-uppercase color-titlel">Sản Phẩm Hot</h1>
                <div class="fs-5 text-center service-title text-uppercase text-while justify-content-center"> Meet of Professionals</div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="row">
          <?php
          $listProducts = $data['dssp'];
          foreach ($listProducts as $product) {
            extract($product);
            echo '
            <div class="col-md-3 col-lg-3 py-3 wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="0.3s">
                        <div class="card team-card hvr-float">
                        <div class="card-body">
                    <div class="card-img w-100 justify-content-center team-banner"><img class="team-img" src="../public/client/images/danhmuc/'.$tendanhmuc.'/'.$image.'"></div>
                    <div class="pt-2 text-start d-flex align-items-center"><i class="fa-solid fa-user"></i>
                        <p class="mb-0 mx-3">' . $buying . ' Buying</p>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                      <h5 class="mt-2 text-center mb-0" id="rating-display">' . $name . '</h5>
                      <div class="star-rating d-flex justify-content-center pt-2"><span class="star" data-value="5">&#9733;</span><span class="star" data-value="4">&#9733;</span><span class="star" data-value="3">&#9733;</span><span class="star" data-value="2">&#9733;</span><span class="star" data-value="1">&#9733;</span></div>
                    </div>
                  </div>
                  <div class="line-team d-flex text-start my-2">
                    <h4 class="text-highline ms-3 mb-0">' . $price . ' VNĐ</h4>
                    <p class="ms-3 text-decoration-line-through mb-0">' . $sale_price . ' VNĐ</p>
                  </div>
                  <div class="align-items-center text-start mx-3 mb-2">
                    <button class="btn btn-submit text-white" type="submit">Mua ngay</button>
                  </div>
                  </div>
                </div>';
          }
          ?>
        </div>
      </div>
    </div>
  </div>
  <div class="featured spad" id="sell">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="text-center mb-3 text-highline">
            <h2>Featured Product</h2>
          </div>
          <div class="featured-controls">
            <ul class="controls-list">
              <li class="active list-nav" data-filter="*">All</li>
              <li class="list-nav" data-filter=". ">Nhẫn</li>
              <li class="list-nav" data-filter=".">Dây Chuyền</li>
              <li class="list-nav" data-filter=".">Lăc tay</li>
              <li class="list-nav" data-filter=".">Dây Lưng</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="featured-filter">
        <div class="row">
          <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="featured-item mb-4">
              <div class="featured-item-pic set-bg" data-setbg><img src="../public/client/images/featured/feature-1.jpeg">
                <ul class="featured-item-pic-hover">
                  <li class="featured-item-list"><a href="#"><i class="fa fa-heart"></i></a></li>
                  <li class="featured-item-list"><a href="#"><i class="fa fa-retweet"></i></a></li>
                  <li class="featured-item-list"><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
              </div>
              <div class="featured-item-text text-highline text-center">
                <h6 class="text"><a href="#">Crab Pool Security</a></h6>
                <h5 class="text-price">$30.00</h5>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="featured-item mb-4">
              <div class="featured-item-pic set-bg" data-setbg><img src="../public/client/images/featured/feature-2.jpeg">
                <ul class="featured-item-pic-hover">
                  <li class="featured-item-list"><a href="#"><i class="fa fa-heart"></i></a></li>
                  <li class="featured-item-list"><a href="#"><i class="fa fa-retweet"></i></a></li>
                  <li class="featured-item-list"><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
              </div>
              <div class="featured-item-text text-highline text-center">
                <h6 class="text"><a href="#">Crab Pool Security</a></h6>
                <h5 class="text-price">$30.00</h5>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="featured-item mb-4">
              <div class="featured-item-pic set-bg" data-setbg><img src="../public/client/images/featured/feature-3.jpeg">
                <ul class="featured-item-pic-hover">
                  <li class="featured-item-list"><a href="#"><i class="fa fa-heart"></i></a></li>
                  <li class="featured-item-list"><a href="#"><i class="fa fa-retweet"></i></a></li>
                  <li class="featured-item-list"><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
              </div>
              <div class="featured-item-text text-highline text-center">
                <h6 class="text"><a href="#">Crab Pool Security</a></h6>
                <h5 class="text-price">$30.00</h5>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="featured-item mb-4">
              <div class="featured-item-pic set-bg" data-setbg><img src="../public/client/images/featured/feature-4.jpeg">
                <ul class="featured-item-pic-hover">
                  <li class="featured-item-list"><a href="#"><i class="fa fa-heart"></i></a></li>
                  <li class="featured-item-list"><a href="#"><i class="fa fa-retweet"></i></a></li>
                  <li class="featured-item-list"><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
              </div>
              <div class="featured-item-text text-highline text-center">
                <h6 class="text"><a href="#">Crab Pool Security</a></h6>
                <h5 class="text-price">$30.00</h5>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="featured-item mb-4">
              <div class="featured-item-pic set-bg" data-setbg><img src="../public/client/images/featured/feature-5.jpeg">
                <ul class="featured-item-pic-hover">
                  <li class="featured-item-list"><a href="#"><i class="fa fa-heart"></i></a></li>
                  <li class="featured-item-list"><a href="#"><i class="fa fa-retweet"></i></a></li>
                  <li class="featured-item-list"><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
              </div>
              <div class="featured-item-text text-highline text-center">
                <h6 class="text"><a href="#">Crab Pool Security</a></h6>
                <h5 class="text-price">$30.00</h5>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="featured-item mb-4">
              <div class="featured-item-pic set-bg" data-setbg><img src="../public/client/images/featured/feature-6.jpeg">
                <ul class="featured-item-pic-hover">
                  <li class="featured-item-list"><a href="#"><i class="fa fa-heart"></i></a></li>
                  <li class="featured-item-list"><a href="#"><i class="fa fa-retweet"></i></a></li>
                  <li class="featured-item-list"><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
              </div>
              <div class="featured-item-text text-highline text-center">
                <h6 class="text"><a href="#">Crab Pool Security</a></h6>
                <h5 class="text-price">$30.00</h5>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="featured-item mb-4">
              <div class="featured-item-pic set-bg" data-setbg><img src="../public/client/images/featured/feature-7.jpeg">
                <ul class="featured-item-pic-hover">
                  <li class="featured-item-list"><a href="#"><i class="fa fa-heart"></i></a></li>
                  <li class="featured-item-list"><a href="#"><i class="fa fa-retweet"></i></a></li>
                  <li class="featured-item-list"><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
              </div>
              <div class="featured-item-text text-highline text-center">
                <h6 class="text"><a href="#">Crab Pool Security</a></h6>
                <h5 class="text-price">$30.00</h5>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="featured-item mb-4">
              <div class="featured-item-pic set-bg" data-setbg><img src="../public/client/images/featured/feature-8.jpeg">
                <ul class="featured-item-pic-hover">
                  <li class="featured-item-list"><a href="#"><i class="fa fa-heart"></i></a></li>
                  <li class="featured-item-list"><a href="#"><i class="fa fa-retweet"></i></a></li>
                  <li class="featured-item-list"><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
              </div>
              <div class="featured-item-text text-highline text-center">
                <h6 class="text"><a href="#">Crab Pool Security</a></h6>
                <h5 class="text-price">$30.00</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="from-blog spad" id="blogsection">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-title from-blog-title text-center mb-4 text-highline">
            <h2>From The Blog</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6">
          <div class="blog-item">
            <div class="blog-item-pic"><img class="w-100" src="../public/client/images/blog/blog-1.png" alt=""></div>
            <div class="blog-item-text">
              <div class="d-flex text-start">
                <p class="mb-0"><i class="fa-regular fa-calendar"></i> May 4,2019</p>
                <p class="mb-0 ms-3"><i class="fa-regular fa-comment"></i> 5</p>
              </div>
              <h5><a href="#">Cooking tips make cooking simple</a></h5>
              <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
          <div class="blog-item">
            <div class="blog-item-pic"><img class="w-100" src="../public/client/images/blog/blog-2.png" alt=""></div>
            <div class="blog-item-text">
              <div class="d-flex text-start">
                <p class="mb-0"><i class="fa-regular fa-calendar"></i> May 4,2019</p>
                <p class="mb-0 ms-3"><i class="fa-regular fa-comment"></i> 5</p>
              </div>
              <h5><a href="#">6 ways to prepare breakfast for 30</a></h5>
              <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
          <div class="blog-item">
            <div class="blog-item-pic"><img class="w-100" src="../public/client/images/blog/blog-3.png" alt=""></div>
            <div class="blog-item-text">
              <div class="d-flex text-start">
                <p class="mb-0"><i class="fa-regular fa-calendar"></i> May 4,2019</p>
                <p class="mb-0 ms-3"><i class="fa-regular fa-comment"></i> 5</p>
              </div>
              <h5><a href="#">Visit the clean farm in the US</a></h5>
              <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="news" id="ecosystem">
    <div class="container">
      <div class="text-center justify-content-center mb-4 mb-lg-5">
        <div class="page-title wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="0.3s">
          <h1 class="text-center service-title color-titlel mb-2">Top Sản Phẩm Được Yêu Thích Nhất</h1>
          <div class="fs-5 text-center service-title justify-content-center"> Những sản phẩm được thiết kế riêng biệt giúp nâng tầm phong cách của phái mạnh.</div>
        </div>
      </div>
      <?php
      require_once 'banner.footer.php';
      ?>
    </div>
  </div>
  <div class="shirt my-5 pb-4" id="shirt">
    <div class="shirt-new">
      <div class="container">
        <div class="wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="0.3s">
          <div class="justify-content-center my-5 w-100">
            <div class="text-center justify-content-center mb-2">
              <div class="page-title">
                <h1 class="text-center service-title text-uppercase color-titlel">Sản Phẩm Mới Trend</h1>
                <div class="fs-5 text-center service-title text-uppercase text-while justify-content-center"> Meet of Professionals</div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4 col-lg-4">
            <div class="shirt-new-product"><a class="product-roll" href=""><img class="shirt-img w-100" data-sizes="auto" src="../public/client/images/love-product-1.jpeg" data-src="" alt="Áo Sơ Mi"></a></div>
            <div class="shirt-img-Home align-items-center text-start">
              <h2><a href="" target="_self"> Shirt</a></h2><a class="shirt-img-View btn-buy" href="" target="_self">
                Xem
                Chi Tiet</a>
            </div>
          </div>
          <div class="col-sm-4 col-lg-4">
            <div class="shirt-new-product"><a class="product-roll" href=""><img class="shirt-img w-100" data-sizes="auto" src="../public/client/images/love-product-1.jpeg" data-src="" alt="Áo Sơ Mi"></a></div>
            <div class="shirt-img-Home align-items-center text-start">
              <h2><a href="" target="_self"> Shirt</a></h2><a class="shirt-img-View btn-buy" href="" target="_self">
                Xem
                Chi Tiet</a>
            </div>
          </div>
          <div class="col-sm-4 col-lg-4">
            <div class="shirt-new-product">
              <div class="product-roll"><img class="shirt-img w-100" data-sizes="auto" src="../public/client/images/love-product-1.jpeg" data-src="" alt="Áo Sơ Mi"></div>
            </div>
            <div class="shirt-img-Home align-items-center text-start">
              <h2> Shirt</h2><a class="shirt-img-View btn-buy" href="" target="_self">
                Xem
                Chi Tiet</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
require_once '../public/link.php';
?>