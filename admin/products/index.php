<?php   
    include "../includes/header.php";
    include "../includes/functions.php";
    include "../connect.php";
?> 

<div class="content">
<?php
session_start();

if (isset($_SESSION['redirect_msg'])) {
    echo $_SESSION['redirect_msg'];
    unset($_SESSION['redirect_msg']);
}

$do = isset($_GET['do']) ? $_GET['do'] : 'Manage';

if($do == 'Manage'){ 
    
    $stmt = $con->prepare("SELECT products.*, categories.name AS category_name FROM products 
                            INNER JOIN categories ON categories.id = products.category_id");
    $stmt->execute();
    $products = $stmt->fetchAll(); 
    ?>

    <h5 class="text-secondary">إضافة منتج جديد</h5>
    <div class="table-responsive shopping-cart">
        <table class="table table-bordered text-center bg-white mt-2">
            <thead>
                <tr class="custom-main-color text-white">
                    <th>#</th>
                    <th>الاسم</th>
                    <th>الصور</th>
                    <th>السعر</th>
                    <th>المخزون</th>
                    <th>الوصف</th>
                    <th>الفئة</th>
                    <th>تاريخ الإضافة</th>
                    <th>التحكم</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($products as $product){
                    echo '<tr>
                        <th scope="row">'.$product["id"].'</th>
                        <td>'.$product["name"].'</td>
                        <td>';
                            if (!empty($product['images'])) {
                                $imgs = json_decode($product['images'], true);
                                foreach($imgs as $img){
                                    echo '<img src="../../uploads/'.$img.'" style="width:50px;height:50px;border-radius:5px;margin:2px;">';
                                }
                            }
                    echo    '</td>
                        <td>'.$product["price"].'</td>
                        <td>'.$product["stock"].'</td>
                        <td>'.$product["description"].'</td>
                        <td>'.$product["category_name"].'</td>
                        <td>'.$product["created_at"].'</td>
                        <td>
                            <a href="?do=edit&prodid='.$product['id'].'"><i class="fa fa-edit fs-5 ms-2 cursor-pointer"></i></a>
                            <a href="?do=delete" class="delete-btn" data-bs-toggle="modal" data-bs-target="#deleteSome" data-prodid="'.$product["id"].'"><i class="fa fa-trash-alt fs-5 cursor-pointer"></i></a>
                        </td>
                    </tr>';
                }
                ?>
            </tbody>
        </table>
        <a href="?do=add" class="custom-btn px-5"><i class="fa fa-plus ms-2"></i>إضافة</a>
    </div>

<?php
} elseif ($do =='add') { 
    $cats = $con->prepare("SELECT * FROM categories");
    $cats->execute();
    $allCats = $cats->fetchAll();
?>
    <div class="row">
    <div class="col-md-6">
        <form action="?do=insert" method="post" enctype="multipart/form-data">
            <label for="n">الاسم</label>
            <input type="text" name="name" class="form-control" id="name">

            <label for="">السعر</label>
            <input type="number" name="price" class="form-control" step="0.01">

            <label for="">المخزون</label>
            <input type="number" name="stock" class="form-control" step="1" min="0">

            <label for="">الوصف</label>
            <textarea name="description" class="form-control"></textarea>

            <label for="">الفئة</label>
            <select name="category_id" class="form-control">
                <?php foreach($allCats as $c){ echo "<option value='".$c['id']."'>".$c['name']."</option>"; } ?>
            </select>

            <label for="">الصور</label>
            <input type="file" name="images[]" multiple class="form-control">

            <button type="submit" class="btn btn-primary mt-3">
                <i class="fa fa-plus"></i> إضافة
            </button>
        </form>
    </div>
</div>

<?php
} elseif ($do == 'insert') {
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name      = $_POST['name'];
        $price     = $_POST['price'];
        $stock     = $_POST['stock'];
        $desc      = $_POST['description'];
        $cat_id    = $_POST['category_id'];
        $user_id   = $_SESSION['user_id'] ?? 1;

        // Handle Images
        $uploadedImages = [];
        if (!empty($_FILES['images']['name'][0])) {
            $uploadDir = "../../uploads/";
            foreach ($_FILES['images']['tmp_name'] as $key => $tmp_name) {
                $fileName = time() . "_" . basename($_FILES['images']['name'][$key]);
                $targetFile = $uploadDir . $fileName;
                if (move_uploaded_file($tmp_name, $targetFile)) {
                    $uploadedImages[] = $fileName;
                }
            }
        }

        if(!empty($name) && !empty($price) && !empty($desc)){
            $stmt = $con->prepare("SELECT * FROM products WHERE name = ?");
            $stmt->execute(array($name));
            $count = $stmt->rowCount();
           if ($count == 1) {
               $theMsg = "<div class='alert alert-danger'> Sorry this product already exists in database</div>";
               redirectHome($theMsg);
           } else {
               $stmt=$con->prepare("INSERT INTO 
                            products(name,price,stock,description,images,category_id,user_id,created_at)
                              VALUES(:zname,:zprice,:zstock,:zdesc,:zimages,:zcat,:zuser,now())");
                $stmt->execute(array(
                  'zname'  => $name,
                  'zprice' => $price,
                  'zstock' => $stock,
                  'zdesc'  => $desc,
                  'zimages'=> json_encode($uploadedImages),
                  'zcat'   => $cat_id,
                  'zuser'  => $user_id
                ));

               $theMsg =  "<div class='alert alert-success'>". $stmt->rowCount() . ' Record Inserted</div>';
               redirectHome($theMsg);
           }
        } else {
            $theMsg = "<div class='alert alert-danger'> All fields are required</div>";
            redirectHome($theMsg);
        }
    }
    echo "</div>";

} elseif ($do == 'edit') { 
    $prodid = isset($_GET['prodid']) && is_numeric($_GET['prodid']) ? intval($_GET['prodid']): 0;
    $stmt =$con->prepare("SELECT * FROM products WHERE ID = ? ");
    $stmt->execute(array($prodid));
    $product = $stmt->fetch();
    $count =$stmt->rowCount();

    $cats = $con->prepare("SELECT * FROM categories");
    $cats->execute();
    $allCats = $cats->fetchAll();

    if($count > 0) {
        $oldImages = json_decode($product['images'], true) ?? [];
?>
        <div class="card shadow-sm" style="position: static">
            <div class="card-body">
                <h5 class="card-title text-center mb-4">تحديث المنتج</h5>

                <form action="?do=update" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $product['id']; ?>">
                    <div class="mb-3">
                        <label for="name" class="form-label">الاسم</label>
                        <input type="text" class="form-control" name="name" value="<?php echo $product['name'];?>">
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">السعر</label>
                        <input type="number" class="form-control" name="price" value="<?php echo $product['price'];?>">
                    </div>

                    <div class="mb-3">
                        <label for="stock" class="form-label">المخزون</label>
                        <input type="number" class="form-control" name="stock" value="<?php echo $product['stock'];?>">
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">الوصف</label>
                        <textarea class="form-control" name="description" rows="3"><?php echo $product['description'];?></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="category" class="form-label">الفئة</label>
                        <select name="category_id" class="form-control">
                            <?php 
                                foreach($allCats as $c){ 
                                    $selected = $c['id'] == $product['category_id'] ? 'selected' : '';
                                    echo "<option value='".$c['id']."' $selected>".$c['name']."</option>"; 
                                } 
                            ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="images" class="form-label">الصور الحالية</label><br>
                        <?php foreach($oldImages as $img){ ?>
                            <img src="../../uploads/<?php echo $img; ?>" style="width:50px;height:50px;border-radius:5px;margin:2px;">
                        <?php } ?>
                    </div>

                    <div class="mb-3">
                        <label for="images" class="form-label">تحديث الصور (اختياري)</label>
                        <input type="file" name="images[]" multiple class="form-control">
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">تحديث</button>
                    </div>
                </form>
            </div>
        </div>
<?php }

} elseif ($do =='update') {
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $id        = $_POST['id'];
        $name      = $_POST['name'];
        $price     = $_POST['price'];
        $stock     = $_POST['stock'];
        $desc      = $_POST['description'];
        $cat_id    = $_POST['category_id'];

        // fetch old images
        $stmt = $con->prepare("SELECT images FROM products WHERE id = ?");
        $stmt->execute([$id]);
        $old = $stmt->fetch();
        $oldImages = json_decode($old['images'], true) ?? [];

        // upload new images if any
        $uploadedImages = $oldImages;
        if (!empty($_FILES['images']['name'][0])) {
            $uploadDir = "../../uploads/";
            foreach ($_FILES['images']['tmp_name'] as $key => $tmp_name) {
                $fileName = time() . "_" . basename($_FILES['images']['name'][$key]);
                $targetFile = $uploadDir . $fileName;
                if (move_uploaded_file($tmp_name, $targetFile)) {
                    $uploadedImages[] = $fileName;
                }
            }
        }

        $stmt = $con->prepare("UPDATE products SET name = ?, price = ?, stock = ?, description = ?, images = ?, category_id = ? WHERE id = ?");
        $stmt->execute(array($name, $price, $stock, $desc, json_encode($uploadedImages), $cat_id, $id));

        $theMsg = "<div class='alert alert-success'>". $stmt->rowCount() . ' Record Updated</div>';
        redirectHome($theMsg);
    }

} elseif ($do == 'Delete') {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id   = $_POST['prodId'];

        $statment = $con->prepare("SELECT * FROM  products WHERE id = ?");
        $statment->execute(array($id));
        $count = $statment->rowCount();
        if($count == 0){
            $theMsg =   "<div class='alert alert-danger'> sorry no product exists in database </div>";
            redirectHome($theMsg);
        } else {    
            $stmt= $con->prepare("DELETE FROM products WHERE id = :zprod");
            $stmt->bindParam(":zprod",$id);
            $stmt->execute();

            $theMsg = "<div class='alert alert-success'>". $stmt->rowCount() . ' Record Deleted</div>';
            redirectHome($theMsg);
        }
    }
}
?>

</div>

<!-- Modal Delete -->
<div class="modal fade" id="deleteSome">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="?do=Delete" method="post">
            <div class="modal-header">
                <div class="modal-title fw-bold w-100">تأكيد</div>
                <button data-bs-dismiss="modal" type="button" class="btn-close"></button>
            </div>
            <div class="modal-body text-center">
                هل أنت متأكد أنك تريد الحذف؟
                <input type="hidden" id="prodIdToDelete" name="prodId">
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-danger">حذف</button>
                <button class="btn btn-secondary" data-bs-dismiss="modal">إغلاق</button>
            </div>
            </form>
        </div>
    </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    const deleteButtons = document.querySelectorAll('.delete-btn');
    const prodIdInput = document.getElementById('prodIdToDelete');

    deleteButtons.forEach(button => {
      button.addEventListener('click', () => {
        const prodId = button.getAttribute('data-prodid');
        prodIdInput.value = prodId;
      });
    });
  });
</script>

<?php 
    include "../includes/aside.php"; 
    include "../includes/footer.php"; 
?>
