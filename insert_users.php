<?php 
include "includes/header.php";
include "admin/connect.php";
session_start();
require 'includes/functions.php'; 

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['import_users'])){

    $json_data = '{
      "users": [
        {
          "name": "أميرة محمد",
          "email": "amira@example.com",
          "password": "password123"
        },
        {
          "name": "سارة أحمد",
          "email": "sara@example.com",
          "password": "password123"
        },
        {
          "name": "فاطمة خالد",
          "email": "fatima@example.com",
          "password": "password123"
        },
        {
          "name": "لمى عبدالله",
          "email": "lama@example.com",
          "password": "password123"
        },
        {
          "name": "نورة سعيد",
          "email": "nora@example.com",
          "password": "password123"
        },
        {
          "name": "هناء محمود",
          "email": "haneen@example.com",
          "password": "password123"
        },
        {
          "name": "ريم علي",
          "email": "reem@example.com",
          "password": "password123"
        },
        {
          "name": "أسماء حسن",
          "email": "asma@example.com",
          "password": "password123"
        },
        {
          "name": "جواهر ناصر",
          "email": "jawaher@example.com",
          "password": "password123"
        },
        {
          "name": "دعاء كمال",
          "email": "doaa@example.com",
          "password": "password123"
        }
      ]
    }';

    // Decode JSON data
    $data = json_decode($json_data, true);
    
    $insertedCount = 0;
    $errorCount = 0;
    
    if (json_last_error() !== JSON_ERROR_NONE) {
        $theMsg = "<div class='alert alert-danger'>JSON decode error: " . json_last_error_msg() . "</div>";
        redirectHome($theMsg);
    }

    foreach ($data['users'] as $user) {
        $name = $user['name'];
        $email = $user['email'];
        $password = $user['password'];

        // Validate required fields
        if(!empty($name) && !empty($email) && !empty($password)){
            
            // Check if user already exists
            $statment = $con->prepare("SELECT * FROM users WHERE email = ?");
            $statment->execute(array($email));
            $count = $statment->rowCount();
            
            if ($count == 1) {
                $theMsg = "<div class='alert alert-danger'>Sorry, this user already exists in database: " . $email . "</div>";
                redirectHome($theMsg);
                $errorCount++;
            } else {
                // Hash password using sha1 (same as your original code)
                $hashdpass = sha1($password);

                // Insert user into database
                $stmt = $con->prepare("INSERT INTO users(name, password, email, created_at) 
                                      VALUES(:zname, :zpass, :zemail, NOW())");
                
                $stmt->execute(array(
                    'zpass'  => $hashdpass,
                    'zemail' => $email,
                    'zname'  => $name
                ));

                $insertedCount++;
                
                $theMsg = "<div class='alert alert-success'>User " . $name . " added successfully!</div>";
                redirectHome($theMsg);
            }
        } else {
            $theMsg = "<div class='alert alert-danger'>All fields are required for user: " . $name . "</div>";
            redirectHome($theMsg);
            $errorCount++;
        }
    }

    // Final summary message
    $summaryMsg = "<div class='alert alert-info'><strong>Import Summary:</strong><br>
                  ✅ Successfully inserted: " . $insertedCount . " users<br>
                  ⚠️ Errors/Skipped: " . $errorCount . " users</div>";
    redirectHome($summaryMsg);
}
?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3>Import Users from JSON Data</h3>
                </div>
                <div class="card-body">
                    <p>This will import 10 users from JSON data into the database.</p>
                    
                    <div class="alert alert-info">
                        <h5>Users to be imported:</h5>
                        <ul>
                            <li>أميرة محمد (amira@example.com)</li>
                            <li>سارة أحمد (sara@example.com)</li>
                            <li>فاطمة خالد (fatima@example.com)</li>
                            <li>لمى عبدالله (lama@example.com)</li>
                            <li>نورة سعيد (nora@example.com)</li>
                            <li>هناء محمود (haneen@example.com)</li>
                            <li>ريم علي (reem@example.com)</li>
                            <li>أسماء حسن (asma@example.com)</li>
                            <li>جواهر ناصر (jawaher@example.com)</li>
                            <li>دعاء كمال (doaa@example.com)</li>
                        </ul>
                    </div>
                    
                    <form method="post">
                        <button type="submit" name="import_users" class="btn btn-primary" 
                                onclick="return confirm('Are you sure you want to import 10 users?')">
                            📥 Import Users
                        </button>
                        
                        <a href="/alien_style" class="btn btn-secondary">← Back to Home</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "includes/footer.php"; ?>