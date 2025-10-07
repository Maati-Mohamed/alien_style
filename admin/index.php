<?php include "includes/header.php"; ?>


<!-- المحتوى الرئيسي -->
<div class="content">
    <!-- محتوى لوحة التحكم -->
    <h5 class="text-secondary mt-3">لوحة التحكم</h5>
    <div class="row mt-3">
        <div class="col-md-3">
            <div class="mb-2 text-white dashboard-box-one py-3 d-flex gap-4 justify-content-center align-items-center">
                <span class="fs-1"><i class="fa fa-chart-line"></i></span>
                <div>
                    <p class="m-0 mt-2">الطلبات</p>
                    <h5 class="m-0 text-center fw-bold">19</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="mb-2 text-white dashboard-box-two py-3 d-flex gap-4 justify-content-center align-items-center">
                <span class="fs-1"><i class="fa fa-chart-pie"></i></span>
                <div>
                    <p class="m-0 mt-2">المنتجات</p>
                    <h5 class="m-0 text-center fw-bold">34</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="mb-2 text-white dashboard-box-three py-3 d-flex gap-4 justify-content-center align-items-center">
                <span class="fs-1"><i class="fa fa-chart-bar"></i></span>
                <div>
                    <p class="m-0 mt-2">المبيعات</p>
                    <h5 class="m-0 text-center fw-bold">126</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="mb-2 text-white dashboard-box-four py-3 d-flex gap-4 justify-content-center align-items-center">
                <span class="fs-1"><i class="fa fa-chart-bar"></i></span>
                <div>
                    <p class="m-0 mt-2">المبيعات</p>
                    <h5 class="m-0 text-center fw-bold">87</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
    <div class="card mt-5">
    <div class="card-body">
        <h5 class="card-title text-center mb-3">مخطط المبيعات</h5>
        <canvas id="salesChart" height="100"></canvas>
    </div>
    </div>

    </div>

        


    
    <!-- نهاية محتوى لوحة التحكم -->
</div>
<!-- نهاية المحتوى الرئيسي -->

<?php include "includes/aside.php"; 
    include "includes/footer.php"; 
    
    ?>
    <script>
    const ctx = document.getElementById('salesChart').getContext('2d');
    const salesChart = new Chart(ctx, {
        type: 'bar', // change to 'line', 'pie', etc.
        data: {
            labels: ['يناير', 'فبراير', 'مارس', 'أبريل', 'مايو'],
            datasets: [{
                label: 'المبيعات',
                data: [120, 190, 300, 500, 200],
                backgroundColor: 'rgba(54, 162, 235, 0.7)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    </script>
