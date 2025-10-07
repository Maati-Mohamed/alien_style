<?php include "../includes/header.php"; ?>

<div class="content">
    <!-- محتوى لوحة التحكم -->
    <h5 class="text-secondary">المنتجات</h5>

    <!-- جدول -->
    <div class="table-responsive shopping-cart">
        <table class="table table-bordered text-center bg-white mt-2">
            <thead>
                <tr class="custom-main-color text-white">
                    <th>#</th>
                    <th>الاسم</th>
                    <th>السعر</th>
                    <th>المخزون</th>
                    <th>الفئة</th>
                    <th>التحكم</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Nike</td>
                    <td>235</td>
                    <td>15</td>
                    <td>أحذية</td>
                    <td>
                        <a href="/alien_style/admin/products/show.php" class="ms-2"><i class="fa fa-eye fs-5 cursor-pointer"></i></a>
                        <a href=""><i class="fa fa-edit fs-5 ms-2 cursor-pointer"></i></a>
                        <a href="" data-bs-toggle="modal" data-bs-target="#deleteSome"><i class="fa fa-trash-alt fs-5 cursor-pointer"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
        <a href="/alien_style/admin/products/create.php" class="custom-btn px-5"><i class="fa fa-plus ms-2"></i>إضافة منتج جديد</a>
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
