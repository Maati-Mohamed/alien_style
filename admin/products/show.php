<?php include "../includes/header.php"; ?>

<div class="content">
    <!-- محتوى لوحة التحكم -->
    <h5 class="text-secondary">تفاصيل المنتج</h5>

    <!-- جدول -->
    <div class="table-responsive shopping-cart">
        <table class="table table-bordered text-center bg-white mt-2">
            <thead>
                <tr class="custom-main-color text-white">
                    <th>الاسم</th>
                    <th>السعر</th>
                    <th>المخزون</th>
                    <th>الفئة</th>
                    <th>الألوان</th>
                    <th>كمية الألوان</th>
                    <th>المقاسات</th>
                    <th>سعر المقاسات</th>
                    <th>كمية المقاسات</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Nike</td>
                    <td>235</td>
                    <td>15</td>
                    <td>أحذية</td>
                    <!-- الألوان -->
                    <td>
                        <p>أحمر</p>
                        <p>أخضر</p>
                        <p>أصفر</p>
                    </td>
                    <td>
                        <p>100</p>
                        <p>200</p>
                        <p>400</p>
                    </td>
                    <!-- المقاسات -->
                    <td>
                        <p>L</p>
                        <p>M</p>
                        <p>XL</p>
                    </td>
                    <td>
                        <p>80</p>
                        <p>95</p>
                        <p>73</p>
                    </td>
                    <td>
                        <p>18</p>
                        <p>12</p>
                        <p>23</p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- نهاية الجدول -->

    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card mb-2">
                <div class="card-header">
                    <img src="../../images/3.png" class="card-img" />
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-2">
                <div class="card-header">
                    <img src="../../images/4.png" class="card-img" />
                </div>
            </div>
        </div>
    </div>
    <!-- نهاية محتوى لوحة التحكم -->
</div>

<?php 
    include "../includes/aside.php"; 
    include "../includes/footer.php"; 
?>
