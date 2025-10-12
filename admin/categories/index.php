<?php   include "../includes/header.php";
        include "../includes/functions.php";
        include "../connect.php";
 
?> 
<div class="content">

<?php
session_start();

if (isset($_SESSION['redirect_msg'])) {
    echo  $_SESSION['redirect_msg'];
    unset($_SESSION['redirect_msg']);
}

$do = isset($_GET['do']) ? $_GET['do'] : 'Manage';
if($do == 'Manage'){ 
    
    $stmt = $con->prepare("SELECT * FROM categories");
    $stmt->execute();
    $cats = $stmt->fetchAll(); 
    // echo "<pre>";
    // print_r($cats);
    // echo "</pre>";
    ?>

    <!-- محتوى لوحة التحكم -->
    <h5 class="text-secondary">إضافة فئة جديدة</h5>
    <!-- جدول -->
    <div class="table-responsive shopping-cart">
        <table class="table table-bordered text-center bg-white mt-2">
            <thead>
                <tr class="custom-main-color text-white">
                    <th>#</th>
                    <th>الاسم</th>
                    <th>Description</th>
                    <th>التحكم</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($cats as $cat){
                    echo '<tr>
                    <th scope="row">'.$cat["id"].'</th>
                    <td>'.$cat["name"].'</td>
                    <td>'.$cat["description"].'</td>
                    <td>
                        <a href="?do=edit&catid='.$cat['id'].'"><i class="fa fa-edit fs-5 ms-2 cursor-pointer"></i></a>
                        <a href="?do=delete" class="delete-btn" data-bs-toggle="modal" data-bs-target="#deleteSome" data-catid="'.$cat["id"].'"><i class="fa fa-trash-alt fs-5 cursor-pointer"></i></a>
                    </td>
                </tr>';
                }
                ?>
            </tbody>
        </table>
        <a href="?do=add" class="custom-btn px-5"><i class="fa fa-plus ms-2"></i>إضافة</a>
    </div>
    <!-- نهاية الجدول -->

    <!-- نهاية محتوى لوحة التحكم -->
</div>

<!-- نافذة الحذف -->

<?php
} elseif ($do =='add') { ?>
        <div class="row">
            <div class="col-md-6">
            <form action="?do=insert" method="post">
                <label for="n">Name</label>
                <input type="text" name="name"  class="form-control" id="name">
                <label for="">Description</label>
                <textarea name="description" class="form-control"></textarea>
                <button type="submit" class="btn btn-primary mt-3"><i class="fa fa-plus"></i> Add</button>
            </form>
            </div>
        </div>
        
    </div>
<?php
} elseif ($do == 'insert') {
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $name      = $_POST['name'];
        $desc      = $_POST['description'];
        if(!empty($name && !empty($desc))){
            //check if user Category in database
            $stmt = $con->prepare("SELECT * FROM  categories WHERE name = ?");
            $stmt->execute(array($name));
            $count = $stmt->rowCount();
           if ($count == 1) {
               $theMsg = "<div class='alert alert-danger'> Sorry this Categories is exsit in database</div>";
               redirectHome($theMsg);
           } else {
               //Insert userinfo into database
                $stmt=$con->prepare("INSERT INTO 
                            categories(name,description)
                              VALUES(:zname,:zdesc)");
                $stmt->execute(array(
                  'zname'    => $name,
                  'zdesc'    => $desc,
                ));
               // echo success messege
               $theMsg =  "<div class='alert alert-success'>". $stmt->rowCount() . ' Record Insert</div>';
                redirectHome($theMsg);
               }
        } else {
            $theMsg = "<div class='alert alert-danger'> All feild is required</div>";
            redirectHome($theMsg);

        }
            
         }
        echo "</div>";
} elseif ($do == 'edit') { 
    $catid = isset($_GET['catid']) && is_numeric($_GET['catid']) ? intval($_GET['catid']): 0;
        // select all data depent on this id
        $stmt =$con->prepare("SELECT * FROM categories WHERE ID = ? ");

        //execute query 
        $stmt->execute(array($catid));
        // fetch the data
        $cat = $stmt->fetch();

        $count =$stmt->rowCount();
        if($count > 0) {?>
        <div class="card shadow-sm">
            <div class="card-body">
                <h5 class="card-title text-center mb-4">تحديث البيانات</h5>

                <form action="?do=update" method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label">الاسم</label>
                    <input type="text" class="form-control" id="name" placeholder="أدخل الاسم" value="<?php echo $cat['name'];?>">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">الوصف</label>
                    <textarea class="form-control" id="description" rows="3" placeholder="أدخل الوصف"><?php echo $cat['description'];?></textarea>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">تحديث</button>
                </div>
                </form>

            </div>
            </div>
        
<?php }
} elseif ($do =='Update') {

} elseif ($do == 'Delete') {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id   = $_POST['catId'];

        $statment = $con->prepare("SELECT * FROM  categories WHERE id = ?");
        $statment->execute(array($id));
        $count = $statment->rowCount();
        if($count == 0){
            $theMsg =   "<div class='alert alert-danger'> sorry no category exsit in database </div>";
            redirectHome($theMsg);
        } else {    
            $stmt= $con->prepare("DELETE FROM categories WHERE id = :zcat");
            $stmt->bindParam(":zcat",$id);
            $stmt->execute();

            $theMsg = "<div class='alert alert-success'>". $stmt->rowCount() . ' Record Deleted</div>';
            redirectHome($theMsg);
        }
    }

} elseif ($do == 'Activate') {

}

?>

</div>

<!-- نافذة الحذف -->
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
                <input type="hidden" id="userIdToDelete" name="catId">
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
    const userIdInput = document.getElementById('userIdToDelete');

    deleteButtons.forEach(button => {
      button.addEventListener('click', () => {
        const catId = button.getAttribute('data-catid');
        userIdInput.value = catId;
      });
    });
  });
</script>
<?php 
    include "../includes/aside.php"; 
    include "../includes/footer.php"; 
?>
