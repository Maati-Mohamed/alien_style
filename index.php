<?php 
  include "includes/header.php"; 
  include "admin/connect.php" ?>

  <header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-main py-3 rounded-0">
  <div class="container-fluid">

    <!-- Brand -->
    <a class="navbar-brand fw-bold" href="/alien_style">Alien Style</a>

    <!-- Toggler for mobile -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar content -->
    <div class="collapse navbar-collapse" id="mainNav">
      <ul class="navbar-nav ms-auto align-items-lg-center me-auto">

        <!-- Cart Dropdown -->
        <li class="nav-item dropdown me-2">
          <a class="nav-link position-relative" href="#" id="cartDropdown" role="button" data-bs-toggle="dropdown">
            <i class="fa fa-shopping-cart fa-lg"></i>
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" id="cart-count">3</span>
          </a>
          <ul class="dropdown-menu dropdown-menu-end p-3 bg-main text-dark" style="min-width: 300px;">
            <li class="mb-2"><strong>سلة المشتريات</strong></li>
            <li><hr class="dropdown-divider"></li>

            <!-- Cart items -->
            <li class="d-flex gap-3 align-items-center mb-2">
              <img src="uploads/1760261190_apparel-1850804_1280.jpg" alt="product" class="me-2 rounded" width="50">
              <div>
                <p class="mb-0">حقيبة جلد فاخرة</p>
                <small>1 × $129.99</small>
              </div>
              <button class="btn btn-sm btn-danger me-auto">×</button>
            </li>

            <li class="d-flex gap-3 align-items-center mb-2">
              <img src="uploads/1760261190_apparel-1850804_1280.jpg" alt="product" class="me-2 rounded" width="50">
              <div>
                <p class="mb-0">ساعة رياضية</p>
                <small>2 × $49.99</small>
              </div>
              <button class="btn btn-sm btn-danger me-auto">×</button>
            </li>

            <li><hr class="dropdown-divider"></li>
            <li class="text-center"><strong>المجموع: 494.99$</strong></li>
            <li class="mt-2">
              <a href="/checkout.html" class="btn btn-primary w-100">إتمام الدفع</a>
            </li>
          </ul>
        </li>

        <!-- Favorites Dropdown -->
        <li class="nav-item dropdown me-3">
          <a class="nav-link position-relative" href="#" id="favoritesDropdown" role="button" data-bs-toggle="dropdown">
            <i class="fa fa-heart fa-lg"></i>
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" id="fav-count">2</span>
          </a>
          <ul class="dropdown-menu dropdown-menu-end p-3 bg-main" style="min-width: 300px;">
            <li class="mb-2"><strong>المفضلة</strong></li>
            <li><hr class="dropdown-divider"></li>

            <!-- Favorite items -->
            <li class="d-flex gap-3 align-items-center mb-2">
              <img src="uploads/1760261190_apparel-1850804_1280.jpg" alt="product" class="me-2 rounded" width="50">
              <div>
                <p class="mb-0">حقيبة جلد فاخرة</p>
                <small>$129.99</small>
              </div>
              <button class="btn btn-sm btn-danger me-auto">×</button>
            </li>

            <li class="d-flex gap-3 align-items-center mb-2">
              <img src="uploads/1760261190_apparel-1850804_1280.jpg" alt="product" class="me-2 rounded" width="50">
              <div>
                <p class="mb-0">ساعة رياضية</p>
                <small>$49.99</small>
              </div>
              <button class="btn btn-sm btn-danger me-auto">×</button>
            </li>

            <li><hr class="dropdown-divider"></li>
            <li class="text-center">
              <a href="/favorites.html" class="btn btn-primary w-100">عرض كل المفضلة</a>
            </li>
          </ul>
        </li>

        <!-- Normal links -->
        <li class="nav-item"><a class="nav-link" href="/alien_style">الرئيسية</a></li>
        <li class="nav-item"><a class="nav-link" href="#">الفئات</a></li>
        <li class="nav-item"><a class="nav-link" href="/alien_style/register.php">إنشاء حساب</a></li>
        <li class="nav-item"><a class="nav-link" href="/alien_style/login.php">تسجيل الدخول</a></li>
        <li class="nav-item"><a class="nav-link" href="/alien_style/cart.php">السلة</a></li>
        <li class="nav-item"><a class="nav-link" href="/alien_style/orders.php">الطلبات</a></li>
        <li class="nav-item"><a class="nav-link" href="admin/">لوحة التحكم</a></li>
      </ul>
    </div>
  </div>
</nav>

    <div class="container h-100 d-flex align-items-center justify-content-end">
            <div class="position-relative text-center bg-main p-5">
                <h1 class="text-white">
                مرحبًا بكِ في عالم الأناقة والرقي ✨
                </h1>
                <p class="text-white mb-0">يسرّنا في [Alien style] أن نرحّب بكِ في وجهتكِ الأولى للفخامة والتميّز.
                </p>
               
                <div class="btn-group mt-2">
                    <div class="py-2 px-5 custom-btn" data-bs-toggle="modal" data-bs-target="#websiteVideo">
                        <span><i class="fa fa-play-circle ms-1"></i></span>مشاهدة
                    </div>
                </div>
            </div>
        </div>
  </header>
  <div class="main mt-5">
    <section class="sec-one">
        <h3 class="text-center my-3">الموضة</h3>
        <div class="row px-4">
          <div class="col-md-4">
            <div class="img-contant">
              <img src="layouts/images/business-1817472_1280.jpg" alt="" srcset="">
            </div>
          </div>
          <div class="col-md-4">
            <div class="img-contant mid">
            <img src="layouts/images/fashion-1284496_640.jpg" alt="" srcset="">

            </div>
          </div>
          <div class="col-md-4"> 
            <div class="img-contant">
            <img src="layouts/images/beauty-6837031_640.jpg" alt="" srcset="">

            </div>
          </div>
        </div>
    </section>
    <section>
        <div class="row text-center d-flex justify-content-center my-4">
            <div class=" mt-5">
                <h3 class="mt-2">منتجاتنا</h3>
                <p class=" mb-0">اكتشفي الآن تشكيلتنا الحصرية من الأزياء</p>
                <p class=" mb-0"> الحقائب، والإكسسوارات التي تضيف لمسة فريدة على إطلالتكِ.</p>
            </div>
        </div>
    </section>

    <!-- Products -->
    <div class="container mt-3">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-12 col-md-12">
            <div class="filter d-md-flex gap-4" dir="rtl">
    <input type="search" class="form-control mb-1" placeholder="ابحثي بالاسم...">
    
    <select name="category" class="form-control mb-1">
        <option value="">الفئة</option>
        <option value="">الكل</option>
        <option value="">أزياء</option>
        <option value="">حقائب</option>
        <option value="">أحذية</option>
        <option value="">إكسسوارات</option>
        <option value="">مستحضرات تجميل</option>
        <option value="">عطور</option>
        <option value="">عناية بالبشرة</option>
    </select>
    
    <select name="Price" class="form-control mb-1">
        <option value="">السعر</option>
        <option value="">الكل</option>
        <option value="">1 - 20</option>
        <option value="">50 - 70</option>
        <option value="">70 - 90</option>
        <option value="">90 - 110</option>
        <option value="">أكثر من 110</option>
    </select>
</div>

                <div class="row my-3 pt-3 product-container"> <?php 
                    $stmt = $con->prepare("SELECT * FROM products WHERE category_id = 13 LIMIT 9");
                            $stmt->execute();
                            $products = $stmt->fetchAll(); 
                            
                            if($products) {
                                foreach($products as $product){ 
                                    $images = json_decode($product['images'], true);
                                    // Get the first image
                                    $firstImage = $images[0]; ?>
                                
                                    <div class="col-md-4 col-sm-6 mb-3">
                                        <div class="card bg-main"><a href="show-product.php?id=<?php echo $product['id'] ?>">
                                                <div class="custom-card-img">
                                                    <img src="<?php echo $firstImage; ?>">
                                                </div>
                                            </a>
                                            <div class="card-body">
                                                
                                                <div class="card-detail d-flex justify-content-between">
                                                    <div class="d-flex gap-2">
                                                        <div class="price text-success fw-bold">$<?php echo $product['price']; ?></div>
                                                        <small><del class="compare-price text-muted ">$<?php echo $product['price'] + 7; ?></del></small>
                                                    </div>
                                                    <div class="fav-card d-flex gap-2">
                                                        <span class="favorite fs-5" style="cursor: pointer" >
                                                            <i class="fa fa-heart" style=""></i>
                                                        </span>
                                                        <span class="shopping-card fs-5" style="cursor: pointer">
                                                            <i class="fa fa-shopping-bag" style=""></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            <?php } 
                        }?>
                
                </div>
                <a href="all-products.html" class="custom-btn px-4 rounded-3">عرض المزيد ...</a>
            </div>
        </div>
    </div>

    <section>
        <div class="row text-center d-flex justify-content-center">
            <div class=" mt-5">
                <h3 class="mt-2">مميزاتنا</h3>
                تسوّق فاخر بخدمة راقية، توصيل سريع، خيارات دفع آمنة، وعروض حصرية تُلائم ذوقكِ الرفيع.
        </div>
    </section>
    <div class="container section text-center d-flex justify-content-center align-items-center">
        <div class="row my-3">
            <div class="col-lg-12 col-md-12 d-flex justify-content-center align-items-center gap-4">
                <div class="row mt-4">
                    <div class="col-md-4 col-sm-12 mb-3">
                        <div class="gust p-4 bg-main">
                            <div class="text-white custom-first d-flex justify-content-center align-items-center mb-3">
                                <span><i class="fa fa-credit-card fs-1"></i></span></i>
                            </div>
                            <h5 class="my-4">بطاقة ائتمان</h5>
                            نوفّر لكِ خيارات دفع آمنة وسهلة باستخدام بطاقات الائتمان المعتمدة. تسوّقي بثقة وراحة تامة.
                            <div class="custom-btn my-3 rounded-3"><a href="credit-card.php" style="text-decoration: none; color: #fff">
                                اعرفي المزيد
                    </a></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 mb-3">
                        <div class="gust p-4 bg-main">
                            <div class="text-white custom-first d-flex justify-content-center align-items-center mb-3">
                                <span><i class="fa fa-truck fs-1"></i></span></i>
                            </div>
                            <h5 class="my-4">توصيل سريع</h5>
                            نوصلك أينما كنتِ بسرعة وكفاءة. تسوّقي اليوم واستلمي طلبيتك في وقت قياسي.
                            <div class="custom-btn my-3 rounded-3"><a href="fast-delivery.php"  style="text-decoration: none; color: #fff">
                                اعرفي المزيد
                    </a></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 mb-3">
                        <div class="gust p-4 bg-main">
                            <div class="text-white custom-first d-flex justify-content-center align-items-center mb-3">
                                <span><i class="fa fa-cash-register fs-1"></i></span></i>
                            </div>
                            <h5 class="my-4">خصومات</h5>
                            استمتعي بعروض حصرية وخصومات موسمية على أحدث صيحات الموضة. التميز لا يعني الغلاء!
                            <div class="custom-btn my-3 rounded-3"><a href="discounts.php"  style="text-decoration: none; color: #fff">
                                اعرفي المزيد
                    </a></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
  </div>

  <!-- Website video Modal -->
  <div class="modal fade websiteVideo" id="websiteVideo">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title fw-bold w-100">Alien Style</div>
                    <button data-bs-dismiss="modal" type="button" class="btn-close"></button>
                </div>
                <div class="modal-body text-center">
                <video controls controls class="w-100 h-100" id="modalVideo">
                    <source src="layouts/videos/quran.mp4" type="video/mp4">
                    not support
                </video>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-main">
    <div class="row">
        <div class="col-md-3 col-sm-6 mb-1">
            <h5 class="text-center">العنوان</h5>
            <div class="address d-flex justify-content-center">
                <ul class="list-unstyled">
                    <li>
                        <span><i class="fa fa-map-marker me-2"></i></span> أم درمان، السودان
                    </li>
                    <li><span><i class="fa fa-envelope me-2"></i></span> maiada@gmail.com</li>
                    <li><span><i class="fa fa-phone me-2"></i></span> 09123456789</li>
                    <li><span><i class="fa fa-map-marked me-2"></i></span> شارع الوادي</li>
                </ul>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-1">
            <h5 class="text-center">فريق العمل</h5>
            <div class="co-workers d-flex justify-content-center">
                <ul class="list-unstyled">
                <li>Maiada Dev</li>
                        <li>Mona Dev</li>
                        <li>Halima Dev</li>
                        <li>@j Dev</li>
                </ul>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-1">
            <h5 class="text-center">وسائل التواصل</h5>
            <div class="social d-flex justify-content-center">
                <ul class="list-unstyled">
                    <li><span><i class="fab fa-facebook-square ms-1"></i></span>فيسبوك</li>
                    <li><span><i class="fab fa-youtube-square ms-1"></i></span>يوتيوب</li>
                    <li><span><i class="fab fa-instagram-square ms-1"></i></span>إنستغرام</li>
                    <li><span><i class="fab fa-twitter ms-1"></i></span>تويتر</li>
                </ul>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-1">
            <h5 class="text-center">الدعم</h5>
            <div class="d-flex justify-content-center">
                <ul class="list-unstyled">
                    <li>إبلاغ عن مشكلة</li>
                    <li>اتصل بنا</li>
                    <li>اقتراح</li>
                    <li>مشاركة</li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<?php
  include "includes/footer.php";