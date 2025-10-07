<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/alien_style/admin/layouts/css/bootstrap.min.css">
    <link rel="stylesheet" href="/alien_style/admin/layouts/css/font-awsome.css">
    <link rel="stylesheet" href="/alien_style/admin/layouts/css/style.css">
    <link rel="stylesheet" href="/alien_style/admin/layouts/css/dashboard.css">
    <title>Dashboard</title>
</head>
<body>
    <!-- شريط التنقل -->
<nav class="navbar navbar-expand-lg px-2">

<a href="#abc" data-bs-toggle="offcanvas" class="navbar-toggler mx-2">
    <span><i class="fa fa-list fs-4 mt-1 text-muted"></i></span>
</a>

<div class="nav-date">
    <div class="role-name">
        <p class="mb-0 fw-bold name text-secondary">مرحباً، ميادة</p>
        <p class="mb-0 role">مدير</p>
    </div>
</div>

<div class="dropdown me-auto">
    <div class="custom-small-image cursor-pointer" data-bs-toggle="dropdown" id="dropdownBtn">
        <img src="/alien_style/admin/layouts/images/default.jpg" alt="المستخدم">
    </div>
    <ul class="dropdown-menu dropdown-menu-start">
        <li class="dropdown-item"><a href="/alien_style/" class="dropdown-link">الموقع الإلكتروني</a></li>
        <li class="dropdown-item"><a href="#" class="dropdown-link">تغيير كلمة المرور</a></li>
        <li class="dropdown-item"><a href="#" class="dropdown-link">تسجيل الخروج</a></li>
    </ul>
</div>
</nav>

<!-- إشعار -->
<div class="notiy rounded-3" id="notify">
<div class="notiy-content px-4 py-2">
    <div class="d-flex gap-3 align-items-center">
        <span class="ps-2" id="notifyIcon"></span>
        <p class="me-4 mt-2" id="notifyMessage">
            يوجد إشعار جديد.
        </p>
    </div>
</div>
</div>
<!-- نهاية الإشعار -->

<!-- القائمة الجانبية -->
<div class="offcanvas offcanvas-start" id="abc">

<div class="offcanvas-header">
    <h6 class="offcanvas-title text-muted w-100">لوحة التحكم</h6>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
</div>

<div class="header bg-light p-2 text-center rounded-2">
    <h5 class="fw-bold mb-0">Alien Style </h5>
    <span class="fs-10 text-muted">maiada@gmail.com</span>
</div>

<div class="aside-body mt-4">
    <ul class="list-unstyled pe-0">
        <li class="p-3 bg-light"><a href="" class="tex-secondary">
            <span class="ms-3 fs-5"><i class="fa fa-tachometer-alt"></i></span>
            لوحة التحكم</a>
        </li>
        <li class="p-3 bg-light"><a href="/alien_style/admin/products" class="tex-secondary">
            <span class="ms-3 fs-5"><i class="fa fa-box"></i></span>
            المنتجات</a>
        </li>
        <li class="p-3 bg-light"><a href="" class="tex-secondary">
            <span class="ms-3 fs-5"><i class="fa fa-tags"></i></span>
            الفئات</a>
        </li>
        <li class="p-3 bg-light"><a href="" class="tex-secondary">
            <span class="ms-3 fs-5"><i class="fa fa-users"></i></span>
            المستخدمين</a>
        </li>
    </ul>
</div>
</div>
<!-- نهاية القائمة الجانبية -->