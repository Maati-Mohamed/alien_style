<?php 
  include "includes/header.php"; 
  include "admin/connect.php" 
?>

<div class="container">
    <h5 class="custom-text-color text-center my-3">سلة التسوق</h5>
    <div class="col-md-12">
        <!-- الجدول -->
        <div class="table-responsive">
            <table class="table table-bordered text-center bg-white">
                <thead>
                    <tr class="custom-main-color text-white">
                        <th>الصورة</th>
                        <th>الاسم</th>
                        <th>الكمية</th>
                        <th>اللون</th>
                        <th>المقاس</th>
                        <th>السعر</th>
                        <th>التحكم</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="d-flex justify-content-center">
                            <div class="shopping-cart-img">
                                <img src="images/4.png">
                            </div>
                        </td>
                        <td>اسم المنتج</td>
                        <td>1</td>
                        <td>أحمر</td>
                        <td>M</td>
                        <td>$50</td>
                        <td data-bs-toggle="modal" data-bs-target="#deleteSome">
                            <i class="fa fa-trash fs-4 custom-text-color cursor-pointer"></i>
                        </td>
                    </tr>
                    <tr>
                        <td class="d-flex justify-content-center">
                            <div class="shopping-cart-img">
                                <img src="images/5.png">
                            </div>
                        </td>
                        <td>اسم المنتج</td>
                        <td>2</td>
                        <td>أسود</td>
                        <td>L</td>
                        <td>$100</td>
                        <td><i class="fa fa-trash fs-4 custom-text-color cursor-pointer"></i></td>
                    </tr>
                    <tr>
                        <td class="d-flex justify-content-center">
                            <div class="shopping-cart-img">
                                <img src="images/3.png">
                            </div>
                        </td>
                        <td>اسم المنتج</td>
                        <td>1</td>
                        <td>أبيض</td>
                        <td>S</td>
                        <td>$60</td>
                        <td><i class="fa fa-trash fs-4 custom-text-color cursor-pointer"></i></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- نهاية الجدول -->

        <div class="row d-flex justify-content-center my-3">
            <div class="col-md-6 text-center">
                <div>
                    <span class="text-muted">الإجمالي</span>
                    <div class="h4 text-success fw-bold">$3450</div>
                    <div class="custom-btn px-5">إتمام الشراء</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- نافذة الحذف -->
<div class="modal fade" id="deleteSome">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title fw-bold">تأكيد الحذف</div>                        
                <button data-bs-dismiss="modal" type="button" class="btn-close"></button>
            </div>
            <div class="modal-body text-center">
                هل أنت متأكد من الحذف؟
            </div>
            <div class="modal-footer">
                <div class="btn btn-danger">حذف</div>
                <button class="btn btn-secondary" data-bs-dismiss="modal">إغلاق</button>
            </div>
        </div>
    </div>
</div>

<?php
  include "includes/footer.php";
?>
