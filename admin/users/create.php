<?php include "../includes/header.php"; 
include "../connect.php"; ?>

<div class="content">

<?php 

$do = isset($_GET['do']) ? $_GET['do'] : false;

if($do == "insert"){
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $pass   = $_POST['password'];
        $email  = $_POST['email'];
        $name   = $_POST['name'];
    }

    $formErrors =array();
   if (empty($pass)) {
        $formErrors[] = "Password can not be<strong> Empty</strong>";
   }
    if (empty($email)) {
        $formErrors[] = "Email can not be<strong> Empty</strong>";
   }
    if (empty($name)) {
        $formErrors[] = "FullName can not be<strong> Empty</strong>";
   }

   foreach ($formErrors as $error) {
    echo '<div class="alert alert-danger">'.$error."</div>";
    } 

    if(empty($formErrors)){

        $statment = $con->prepare("SELECT * FROM  users WHERE email = ?");
		$statment->execute(array($email));
		$count = $statment->rowCount();
        if($count == 1){
            echo  "<div class='alert alert-danger'> sorry this user is exsit in database </div>";
        } else {
            $hashdpass = sha1($_POST['password']);

            //Insert userinfo into database
            $stmt=$con->prepare("INSERT INTO 
            users(name,password,email)
            VALUES(:zname,:zpass, :zemail)");
            $stmt->execute(array(

            'zpass'		=> $hashdpass,
            'zemail'	=> $email,
            'zname'		=> $name,

            ));
            // echo success messege
             echo "<div class='alert alert-success'>User added Successfly</div>";
            }

    }
} ?>
    <!-- محتوى لوحة التحكم -->
    <h5 class="text-secondary">إضافة مستخدم جديد</h5>

    <form action="?do=insert" enctype="multipart/form-data" method="POST">
        <div class="row mt-3">
            <div class="col-md-6">
                <!-- الاسم -->
                <div class="form-group mb-2">
                    <label for="">الاسم</label>
                    <input type="text" name="name" class="form-control">
                </div>

                <!-- البريد الإلكتروني -->
                <div class="form-group mb-2">
                    <label for="">البريد الإلكتروني</label>
                    <input type="email" name="email" class="form-control">
                </div>

                <!-- كلمة المرور -->
                <div class="form-group mb-2">
                    <label for="">كلمة المرور</label>
                    <input type="password" name="password" class="form-control">
                </div>
            </div>
        </div>

        <!-- زر الإضافة -->
          <button type="submit" class="custom-btn mt-2 text-center">
            <i class="fa fa-plus ms-2"></i>إضافة   
        </button>
    </form>
    <!-- نهاية محتوى لوحة التحكم -->
</div>

<?php 
    include "../includes/aside.php"; 
    include "../includes/footer.php"; 
?>
