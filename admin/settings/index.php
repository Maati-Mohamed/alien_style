<?php include "../includes/header.php"; ?>

<div class="content">
    <!-- محتوى لوحة التحكم -->
    <h5 class="text-secondary">إعدادات الموقع</h5>

    <form action="" enctype="multipart/form-data" method="POST">
        <div class="row mt-3">
            <div class="col-md-6">
                <!-- اسم الموقع -->
                <div class="form-group mb-2">
                    <label for="">اسم الموقع</label>
                    <input type="text" name="site_name" class="form-control">
                </div>

                <!-- وصف الموقع -->
                <div class="form-group mb-2">
                    <label for="">وصف الموقع</label>
                    <textarea name="site_description" class="form-control" rows="3"></textarea>
                </div>

                <!-- روابط التواصل الاجتماعي -->
                <div class="form-group mb-2">
                    <label for="">رابط فيسبوك</label>
                    <input type="url" name="facebook" class="form-control">
                </div>

                <div class="form-group mb-2">
                    <label for="">رابط تويتر / X</label>
                    <input type="url" name="twitter" class="form-control">
                </div>

                <div class="form-group mb-2">
                    <label for="">رابط إنستغرام</label>
                    <input type="url" name="instagram" class="form-control">
                </div>

                <div class="form-group mb-2">
                    <label for="">رابط لينكدإن</label>
                    <input type="url" name="linkedin" class="form-control">
                </div>
            </div>
        </div>

        <!-- زر الحفظ -->
            <button type="submit" class="custom-btn px-4 mt-2">
                <i class="fa fa-save ms-2"></i>حفظ التغييرات
            </button>
        </div>
    </form>
    <!-- نهاية محتوى لوحة التحكم -->
</div>

<?php 
    include "../includes/aside.php"; 
    include "../includes/footer.php"; 
?>
