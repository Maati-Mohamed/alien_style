<?php 
  include "includes/header.php"; 
  include "admin/connect.php" 
?>

<div class="container">
    <div class="row my-4 d-flex justify-content-center">
        <div class="col-md-6">
            <!-- الجدول -->
            <div class="table-responsive">
                <table class="table table-bordered">
                    <tr class="custom-main-color">
                        <td colspan="2" class="text-center text-secondary">تفاصيل الطلب</td>
                    </tr>
                    <tr>
                        <td>التاريخ</td>
                        <td>31-11-2023</td>
                    </tr>
                    <tr>
                        <td>من</td>
                        <td>
                            Alien Style.com
                        </td>
                    </tr>
                    <tr>
                        <td>رقم الطلب</td>
                        <td>20230002</td>
                    </tr>
                    <tr>
                        <td>العميل</td>
                        <td>Maati Mohamed</td>
                    </tr>
                    <tr>
                        <td>إجمالي المنتجات</td>
                        <td>24</td>
                    </tr>
                    <tr>
                        <td>إجمالي السعر</td>
                        <td>3450</td>
                    </tr>
                    <tr>
                        <td>حالة الطلب</td>
                        <td>قيد المعالجة</td>
                    </tr>
                    <tr>
                        <td>حالة الدفع</td>
                        <td>غير مدفوع</td>
                    </tr>
                    <tr>
                        <td>الخصم</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td>الضريبة</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>طريقة الدفع</td>
                        <td>PayPal</td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div class="d-flex gap-2"> 
                                <button class="btn btn-outline-primary btn-sm">
                                    <span><i class="fa fa-download "></i></span>
                                    تحميل PDF
                                </button>
                                <button class="btn btn-outline-success btn-sm">
                                    <span><i class="fa fa-download"></i></span>
                                    تحميل Excel
                                </button>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            <!-- نهاية الجدول -->
        </div> 
    </div>
</div>

<?php
  include "includes/footer.php";
?>
