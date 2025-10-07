<!-- الشريط الجانبي الثانوي -->
<?php
       $url = ltrim($_SERVER['REQUEST_URI'], '/');
       $urlParts = explode('/', $url);

?>
<div class="aside p-3">
    <div class="header bg-light p-2 text-center rounded-2"> 
        <h5 class="fw-bold mb-0">Alien Style</h5>
        <span class="fs-10 text-muted">maiada@gmail.com</span>
    </div>
    <div class="aside-body mt-4">
        <ul class="list-unstyled pe-0">
            <li class="p-3 bg-light ">
                <a href="/alien_style/admin" class="tex-secondary">
                <span class="ms-3 fs-5"><i class="fa fa-tachometer-alt"></i></span>
                لوحة التحكم</a>
            </li>
            <li class="p-3 bg-light <?php  echo in_array('products', $urlParts) ? "active" : "" ;?>"><a href="/alien_style/admin/products/index.php" class="tex-secondary">
                <span class="ms-3 fs-5"><i class="fa fa-home"></i></span>
                المنتجات</a>
            </li>
            <li class="p-3 bg-light  <?php  echo in_array('categories', $urlParts) ? "active" : "" ;?>"><a href="/alien_style/admin/categories/index.php" class="tex-secondary">
                <span class="ms-3 fs-5"><i class="fa fa-users"></i></span>
                الأقسام</a>
            </li>
            <li class="p-3 bg-light <?php  echo in_array('users', $urlParts) ? "active" : "" ;?>"><a href="/alien_style/admin/users/index.php" class="tex-secondary">
                <span class="ms-3 fs-5"><i class="fa fa-users"></i></span>
                المستخدمين</a>
            </li>
            <li class="p-3 bg-light <?php  echo in_array('settings', $urlParts) ? "active" : "" ;?>"><a href="/alien_style/admin/settings/index.php" class="tex-secondary">
                <span class="ms-3 fs-5"><i class="fa fa-users"></i></span>
                الإعدادات</a>
            </li>
        </ul>
    </div>
</div>
<!-- نهاية الشريط الجانبي -->