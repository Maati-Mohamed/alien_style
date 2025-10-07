<?php include "../includes/header.php"; ?>

<div class="content">
    <!-- محتوى لوحة التحكم -->
    <h5 class="text-secondary">إضافة منتج جديد</h5>

    <form action="" enctype="multipart/form-data">
        <div class="row mt-3">
            <div class="col-md-6">
                <!-- اسم المنتج -->
                <div class="form-group mb-2">
                    <label for="">الاسم</label>
                    <input type="text" name="name" class="form-control">
                </div>

                <!-- السعر -->
                <div class="form-group mb-2">
                    <label for="">السعر</label>
                    <input type="text" name="price" class="form-control">
                </div>

                <!-- الوصف -->
                <div class="form-group mb-2">
                    <label for="">الوصف</label>
                    <input type="text" name="description" class="form-control">
                </div>

                <!-- الكمية في المخزون -->
                <div class="form-group mb-2">
                    <label for="">الكمية في المخزون</label>
                    <input type="text" name="inStock" class="form-control">
                </div>

                <!-- الصور -->
                <div class="form-group mb-2">
                    <label for="">الصور</label>
                    <input type="file" name="images[]" class="form-control">
                </div>

                <!-- الفئة -->
                <div class="form-group mb-2">
                    <label for="">الفئة</label>
                    <select name="category" class="form-control">
                        <option value="">2</option>
                        <option value="">3</option>
                        <option value="">4</option>
                        <option value="">5</option>
                    </select>
                </div>
            </div>

            <div class="col-md-6">
                <!-- خيارات إضافية -->
                <div class="form-group mb-2">
                    <label for=""></label>
                    <input type="text" class="form-control text-center" value="خيارات إضافية" disabled>
                </div>

                <!-- الألوان -->
                <div class="form-group mb-2">
                    <label for="">الألوان</label>
                    <input type="text" name="colors" class="form-control" placeholder="أحمر،أخضر،أزرق">
                </div>

                <!-- الكمية من كل لون -->
                <div class="form-group mb-2">
                    <label for="">الكمية المتوفرة من الألوان</label>
                    <input type="text" name="colors-in-stock" class="form-control" placeholder="12،15،24">
                </div>

                <!-- المقاسات -->
                <div class="form-group mb-2">
                    <label for="">المقاسات</label>
                    <input type="text" name="sizes" class="form-control" placeholder="M،L،XL">
                </div>

                <!-- سعر المقاسات -->
                <div class="form-group mb-2">
                    <label for="">سعر المقاسات</label>
                    <input type="text" name="price-of-sizes" class="form-control" placeholder="30،40،50">
                </div>

                <!-- الكمية من كل مقاس -->
                <div class="form-group mb-2">
                    <label for="">الكمية المتوفرة من المقاسات</label>
                    <input type="text" name="sizes-in-stock" class="form-control" placeholder="11،70،142">
                </div>
            </div>
        </div>

        <!-- زر الإضافة -->
        <div class="custom-btn mt-2 text-center">
            <i class="fa fa-plus ms-2"></i>إضافة المنتج
        </div>
    </form>
    <!-- نهاية محتوى لوحة التحكم -->
</div>

<?php 
    include "../includes/aside.php"; 
    include "../includes/footer.php"; 
?>
