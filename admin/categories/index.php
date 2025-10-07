<?php include "../includes/header.php"; ?>

<div class="content">
    <!-- محتوى لوحة التحكم -->
    <h5 class="text-secondary">إضافة فئة جديدة</h5>

    <!-- جدول -->
    <div class="table-responsive shopping-cart">
        <table class="table table-bordered text-center bg-white mt-2">
            <thead>
                <tr class="custom-main-color text-white">
                    <th>#</th>
                    <th>الاسم</th>
                    <th>المنتجات</th>
                    <th>التحكم</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>أحذية</td>
                    <td>5</td>
                    <td>
                        <a href=""><i class="fa fa-edit fs-5 ms-2 cursor-pointer"></i></a>
                        <a href="" data-bs-toggle="modal" data-bs-target="#deleteSome"><i class="fa fa-trash-alt fs-5 cursor-pointer"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
        <a href="/alien_style/admin/categories/create.php" class="custom-btn px-5"><i class="fa fa-plus ms-2"></i>إضافة</a>
    </div>
    <!-- نهاية الجدول -->

    <!-- نهاية محتوى لوحة التحكم -->
</div>

<!-- نافذة الحذف -->
<div class="modal fade" id="deleteSome">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title fw-bold w-100">تأكيد</div>
                <button data-bs-dismiss="modal" type="button" class="btn-close"></button>
            </div>
            <div class="modal-body text-center">
                هل أنت متأكد أنك تريد الحذف؟
            </div>
            <div class="modal-footer">
                <div class="btn btn-danger">حذف</div>
                <button class="btn btn-secondary" data-bs-dismiss="modal">إغلاق</button>
            </div>
        </div>
    </div>
</div>

<?php 
    include "../includes/aside.php"; 
    include "../includes/footer.php"; 
?>
