<?php 
  include "includes/header.php"; 
?>

<div class="row login">
  <div class="col-md-6">
    <div class="form-container">

      <form action="#" method="post">
        <h2>إنشاء حساب</h2>

        <input type="text" name="name" placeholder="الاسم">
        <input type="text" name="email" placeholder="البريد الإلكتروني">
        <input type="password" name="password" placeholder="كلمة المرور">
        <input type="password" name="confirm-password" placeholder="تأكيد كلمة المرور">

        <input type="submit" class="custom-btn" value="تسجيل">
      </form> 

    </div>
  </div>
</div>

<?php  
  include "includes/footer.php"; 
?>
