<?php 
  include "includes/header.php"; 
  include "admin/connect.php" 
?>
<!-- جدول الطلبات -->
<h5 class="custom-text-color text-center my-3">تفاصيل الطلبات</h5>
<div class="col-md-12">
    <!-- الجدول -->
    <div class="table-responsive shopping-cart">
        <table class="table table-bordered text-center bg-white">
            <thead>
                <tr class="custom-main-color text-white">
                    <th>رقم الطلب</th>
                    <th>الكمية</th>
                    <th>إجمالي السعر</th>
                    <th>حالة الطلب</th>
                    <th>حالة الدفع</th>
                    <th>التحكم</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">20230002</th>
                    <td>12</td>
                    <td>1638</td>
                    <td>قيد التوصيل</td>
                    <td>مدفوع</td>
                    <td>
                        <a href="show-order.php" class="mx-2"><i class="fa fa-eye fs-5 cursor-pointer"></i></a>
                        <a href=""><i class="fa fa-trash-alt fs-5 cursor-pointer"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- نهاية الجدول -->
</div> 

<?php
  include "includes/footer.php";
?>
