<?php include "../includes/header.php"; 
       include "../connect.php";

       
    $do = isset($_GET['do']) ? $_GET['do'] : false;
    
      ?>

<div class="content">
    <?php 
    if($do == "delete"){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id   = $_POST['userId'];

            $statment = $con->prepare("SELECT * FROM  users WHERE id = ?");
            $statment->execute(array($id));
            $count = $statment->rowCount();
            if($count == 0){
                echo  "<div class='alert alert-danger'> sorry no user exsit in database </div>";
            } else {    
                $stmt= $con->prepare("DELETE FROM users WHERE id = :zuser");
                $stmt->bindParam(":zuser",$id);
                $stmt->execute();

                    // echo success messege

                echo "<div class='alert alert-success'>". $stmt->rowCount() . ' Record Deleted</div>';
        }
    }
} ?>
    <!-- محتوى لوحة التحكم -->
    <h5 class="text-secondary">إضافة مستخدم جديد</h5>

    <!-- جدول -->
     <?php 
     
        $stmt = $con->prepare("SELECT * FROM users");
        $stmt->execute();
        $rows = $stmt->fetchAll();
     ?>
    <div class="table-responsive shopping-cart">
        <table class="table table-bordered text-center bg-white mt-2">
            <thead>
                <tr class="custom-main-color text-white">
                    <th>#</th>
                    <th>الاسم</th>
                    <th>البريد الإلكتروني</th>
                    <th>التحكم</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($rows as $row){
                    echo '
                    <tr>
                    <th scope="row">'.$row["id"].'</th>
                    <td>'.$row["name"].' </td>
                    <td>'.$row["email"].'</td>
                    <td>
                        <a href="" data-bs-toggle="modal" data-bs-target="#deleteSome" class="delete-btn btn btn-danger" data-userid="'.$row["id"].'"><i class="fa fa-trash-alt fs-5 cursor-pointer"></i></a>
                    </td>
                </tr>
                    
                    ';
                } ?>
                
            </tbody>
        </table>
        <a href="/alien_style/admin/users/create.php" class="custom-btn px-5"><i class="fa fa-plus ms-2"></i>إضافة</a>
    </div>
    <!-- نهاية الجدول -->

    <!-- نهاية محتوى لوحة التحكم -->
</div>

<!-- نافذة الحذف -->
<div class="modal fade" id="deleteSome">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="?do=delete" method="post">
            <div class="modal-header">
                <div class="modal-title fw-bold w-100">تأكيد</div>
                <button data-bs-dismiss="modal" type="button" class="btn-close"></button>
            </div>
            <div class="modal-body text-center">
                هل أنت متأكد أنك تريد الحذف؟
                <input type="hidden" id="userIdToDelete" name="userId">
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
        const userId = button.getAttribute('data-userid');
        userIdInput.value = userId;
      });
    });
  });
</script>
<?php 
    include "../includes/aside.php"; 
    include "../includes/footer.php"; 
?>
