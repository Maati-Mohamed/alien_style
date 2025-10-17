<?php 
  include "includes/header.php"; 
  include "admin/connect.php";
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $pid = isset($_GET['id']) && is_numeric($_GET['id']) ? intval($_GET['id']): 0;
    if(isset($_GET['do']) && $_GET['do'] == "add_to_cart"){
      
    }
  }
  ?>
  <style>
    body {
      background-color: #f8f9fa;
      font-family: "Tahoma", sans-serif;
    }
    .product-img {
      border-radius: 10px;
      max-height: 400px;
      object-fit: cover;
      width: 100%;
    }
    .price {
      color: #28a745;
      font-size: 1.8rem;
      font-weight: bold;
    }
    .btn-add-cart {
      background-color: #000;
      color: #fff;
    }
    .btn-add-cart:hover {
      background-color: #333;
    }
  </style>
</head>
<body>
  <?php   
      $product_id = isset($_GET['id']) && is_numeric($_GET['id']) ? intval($_GET['id']): 0;

      $stmt = $con->prepare("SELECT * FROM products WHERE id = ?");
            $stmt->execute(array($product_id));
            $count = $stmt->rowCount(); 
            if($count > 0){
              $product = $stmt->fetch(); 
              $images = json_decode($product['images'], true);
              // Get the first image
              $firstImage = $images[0];?> 
                <div class="container my-5">
              <form action="?do=add_to_cart&id=<?php echo $product['id'] ?>" method="post">
                <div class="row g-4">
                  <!-- صورة المنتج -->
                  <div class="col-md-6">
                    <img src="<?php echo $firstImage ?>" alt="صورة المنتج" class="product-img img-fluid shadow">
                  </div>
            
                  <!-- تفاصيل المنتج -->
                  <div class="col-md-6">
                    <h2 class="fw-bold"><?php echo $product['name'] ?></h2>
                    <p class="price">$<?php echo $product['price'] ?></p>
                    <p class="text-muted">
                    <?php echo $product['description'] ?>
                    </p>
                    
                    <div class="mb-3">
                      <label for="size" class="form-label">اختر المقاس</label>
                      <select class="form-select" id="size">
                        <option selected>اختر...</option>
                        <option>صغير</option>
                        <option>متوسط</option>
                        <option>كبير</option>
                      </select>
                    </div>
            
                    <div class="d-flex align-items-center mb-3">
                      <label for="quantity" class="me-2">الكمية:</label>
                      <input type="number" id="quantity" name="quantity" class="form-control w-auto" min="1" value="1">
                    </div>
            
                    <button class="btn btn-success btn-lg w-100" type="submit"> 🛒 أضف إلى السلة</button>
            
                    <div class="mt-4">
                      <h6>المميزات:</h6>
                      <ul>
                        <li>مصنوع من الجلد الطبيعي</li>
                        <li>ضمان لمدة سنة</li>
                        <li>شحن مجاني لجميع الدول</li>
                      </ul>
                    </div>
                  </div>
                  
                </div>
              </form>
  </div>
          <?php  } ?>
  

<?php
  include "includes/footer.php";
