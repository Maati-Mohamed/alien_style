<?php include "../includes/header.php"; ?>

<div class="content">
    <!-- محتوى لوحة التحكم -->
    <h5 class="text-secondary">إضافة مستخدم جديد</h5>

    <form action="" enctype="multipart/form-data" method="POST">
        <div class="row mt-3">
            <div class="col-md-6">
                <!-- الاسم -->
                <div class="form-group mb-2">
                    <label for="">الاسم</label>
                    <input type="text" name="name" class="form-control">
                </div>

                <!-- البريد الإلكتروني -->
                <div class="form-group mb-2">
                    <label for="">البريد الإلكتروني</label>
                    <input type="email" name="email" class="form-control">
                </div>

                <!-- كلمة المرور -->
                <div class="form-group mb-2">
                    <label for="">كلمة المرور</label>
                    <input type="password" name="password" class="form-control">
                </div>
            </div>
        </div>

        <!-- زر الإضافة -->
          <div class="custom-btn mt-2 text-center">
            <i class="fa fa-plus ms-2"></i>إضافة   
        </div>
    </form>
    <!-- نهاية محتوى لوحة التحكم -->
</div>

<?php 
    include "../includes/aside.php"; 
    include "../includes/footer.php"; 
?>
