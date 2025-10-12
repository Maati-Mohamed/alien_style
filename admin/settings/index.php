<?php   
    include "../includes/header.php";
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
    $setid = isset($_GET['setid']) && is_numeric($_GET['setid']) ? intval($_GET['setid']): 1;
    $stmt =$con->prepare("SELECT * FROM settings WHERE ID = ? ");
    $stmt->execute(array($setid));
    $set = $stmt->fetch();
    $count =$stmt->rowCount();

    if($count > 0) {?>
    <div class="card shadow-sm">
            <div class="card-body">
                <h5 class="card-title text-center mb-4">تحديث الإعدادات</h5>

                <form action="?do=update" method="POST">
                <input type="hidden" name="id" value="<?php echo $set['id']; ?>">

                <div class="mb-3">
                    <label for="name" class="form-label">اسم الموقع</label>
                    <input type="text" class="form-control" name="website_name" value="<?php echo $set['website_name'];?>">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">الوصف</label>
                    <textarea class="form-control" name="website_description" rows="3"><?php echo $set['website_description'];?></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">فيسبوك</label>
                    <input type="text" class="form-control" name="facebook" value="<?php echo $set['facebook'];?>">
                </div>

                <div class="mb-3">
                    <label class="form-label">إنستغرام</label>
                    <input type="text" class="form-control" name="instagram" value="<?php echo $set['instagram'];?>">
                </div>

                <div class="mb-3">
                    <label class="form-label">تويتر / X</label>
                    <input type="text" class="form-control" name="twitter" value="<?php echo $set['twitter'];?>">
                </div>

                <div class="mb-3">
                    <label class="form-label">لينكدإن</label>
                    <input type="text" class="form-control" name="linkedin" value="<?php echo $set['linkedin'];?>">
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
        $name      = $_POST['website_name'];
        $desc      = $_POST['website_description'];
        $facebook  = $_POST['facebook'];
        $insta     = $_POST['instagram'];
        $twitter   = $_POST['twitter'];
        $linkedin  = $_POST['linkedin'];

        $stmt = $con->prepare("UPDATE settings SET website_name = ?, website_description = ?, facebook = ?, instagram = ?, twitter = ?, linkedin = ? WHERE id = ?");
        $stmt->execute(array($name, $desc, $facebook, $insta, $twitter, $linkedin, $id));

        $theMsg = "<div class='alert alert-success'>". $stmt->rowCount() . ' تم تحديث البيانات</div>';
        redirectHome($theMsg);
    }

} elseif ($do == 'Delete') {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id   = $_POST['setId'];

        $statment = $con->prepare("SELECT * FROM settings WHERE id = ?");
        $statment->execute(array($id));
        $count = $statment->rowCount();
        if($count == 0){
            $theMsg =   "<div class='alert alert-danger'>عذراً لا توجد بيانات</div>";
            redirectHome($theMsg);
        } else {    
            $stmt= $con->prepare("DELETE FROM settings WHERE id = :zset");
            $stmt->bindParam(":zset",$id);
            $stmt->execute();

            $theMsg = "<div class='alert alert-success'>". $stmt->rowCount() . ' تم الحذف</div>';
            redirectHome($theMsg);
        }
    }
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
                <input type="hidden" id="setIdToDelete" name="setId">
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
    const setIdInput = document.getElementById('setIdToDelete');

    deleteButtons.forEach(button => {
      button.addEventListener('click', () => {
        const setId = button.getAttribute('data-setid');
        setIdInput.value = setId;
      });
    });
  });
</script>

<?php 
    include "../includes/aside.php"; 
    include "../includes/footer.php"; 
?>
