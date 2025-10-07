<?php include "../includes/header.php"; ?>

<div class="content">
    <!-- محتوى لوحة التحكم -->
    <h5 class="text-secondary">إضافة فئة جديدة </h5>

    <form action="" enctype="multipart/form-data">
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="form-group mb-2">
                    <label for="">الاسم</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <!-- الوصف -->
                <div class="form-group mb-2">
                    <label for="">الوصف</label>
                    <input type="text" name="description" class="form-control">
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
