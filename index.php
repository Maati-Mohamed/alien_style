<?php 
  include "includes/header.php"; ?>

  <header>
    <nav>
    <div class="brand">Alien Style</div>

      <ul>
        <li>
          <a href=""><i class="fa fa-shopping-cart fa-fw fs-4"></i></a>
        </li>
        <li> <a href=""><i class="fa fa-heart fa-fw fs-4"></i></a>
        </li>
        <li><a href="/alien_style">الرئيسية</a></li>
        <li><a href="#">الفئات</a></li>
        <li><a href="/alien_style/register.php">إنشاء حساب</a></li>
        <li><a href="/alien_style/login.php">تسجيل الدخول</a></li>
        <li><a href="admin/">لوحة التحكم</a></li>

        </ul>
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

                <div class="row my-3 pt-3 product-container">
                <div class="col-md-4 col-sm-6 mb-3">
                        <div class="card bg-main"><a href="/show-product.html">
                                <div class="custom-card-img">
                                    <img src="layouts/images/business-1817472_1280.jpg">
                                </div>
                            </a>
                            <div class="card-body">
                                
                                <div class="card-detail d-flex justify-content-between">
                                    <div class="d-flex gap-2">
                                        <div class="price text-success fw-bold">$500</div>
                                        <small><del class="compare-price text-muted ">$170</del></small>
                                    </div>
                                    <div class="fav-card d-flex gap-2">
                                        <span class="favorite"
                                            onclick="alertMessage('success', 'Add to favorite successfly!')">
                                            <i class="fa fa-heart"></i>
                                        </span>
                                        <span class="shopping-card">
                                            <i class="fa fa-shopping-bag"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-3">
                        <div class="card bg-main"><a href="/show-product.html">
                                <div class="custom-card-img">
                                    <img src="layouts/images/business-1817472_1280.jpg">
                                </div>
                            </a>
                            <div class="card-body">
                                
                                <div class="card-detail d-flex justify-content-between">
                                    <div class="d-flex gap-2">
                                        <div class="price text-success fw-bold">$500</div>
                                        <small><del class="compare-price text-muted ">$170</del></small>
                                    </div>
                                    <div class="fav-card d-flex gap-2">
                                        <span class="favorite"
                                            onclick="alertMessage('success', 'Add to favorite successfly!')">
                                            <i class="fa fa-heart"></i>
                                        </span>
                                        <span class="shopping-card">
                                            <i class="fa fa-shopping-bag"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-3">
                        <div class="card bg-main"><a href="/show-product.html">
                                <div class="custom-card-img">
                                    <img src="layouts/images/business-1817472_1280.jpg">
                                </div>
                            </a>
                            <div class="card-body">
                                
                                <div class="card-detail d-flex justify-content-between">
                                    <div class="d-flex gap-2">
                                        <div class="price text-success fw-bold">$500</div>
                                        <small><del class="compare-price text-muted ">$170</del></small>
                                    </div>
                                    <div class="fav-card d-flex gap-2">
                                        <span class="favorite">
                                            <i class="fa fa-heart"></i>
                                        </span>
                                        <span class="shopping-card">
                                            <i class="fa fa-shopping-bag"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                    <div class="col-md-4 col-sm-12 ">
                        <div class="gust p-4 bg-main">
                            <div class="text-white custom-first d-flex justify-content-center align-items-center mb-3">
                                <span><i class="fa fa-credit-card fs-1"></i></span></i>
                            </div>
                            <h5 class="my-4">بطاقة ائتمان</h5>
                            نوفّر لكِ خيارات دفع آمنة وسهلة باستخدام بطاقات الائتمان المعتمدة. تسوّقي بثقة وراحة تامة.
                            <div class="custom-btn my-3 rounded-3">اعرفي المزيد</div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 ">
                        <div class="gust p-4 bg-main">
                            <div class="text-white custom-first d-flex justify-content-center align-items-center mb-3">
                                <span><i class="fa fa-truck fs-1"></i></span></i>
                            </div>
                            <h5 class="my-4">توصيل سريع</h5>
                            نوصلك أينما كنتِ بسرعة وكفاءة. تسوّقي اليوم واستلمي طلبيتك في وقت قياسي.
                            <div class="custom-btn my-3 rounded-3">اعرفي المزيد</div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 ">
                        <div class="gust p-4 bg-main">
                            <div class="text-white custom-first d-flex justify-content-center align-items-center mb-3">
                                <span><i class="fa fa-cash-register fs-1"></i></span></i>
                            </div>
                            <h5 class="my-4">خصومات</h5>
                            استمتعي بعروض حصرية وخصومات موسمية على أحدث صيحات الموضة. التميز لا يعني الغلاء!
                            <div class="custom-btn my-3 rounded-3">اعرفي المزيد</div>
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