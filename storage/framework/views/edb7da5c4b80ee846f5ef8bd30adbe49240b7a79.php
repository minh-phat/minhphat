<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Category List</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?php echo e(asset('img/logoWebsite.ico')); ?>" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="<?php echo e(asset('vendor/fonts/boxicons.css')); ?>" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('vendor/css/core.css')); ?>" class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?php echo e(asset('vendor/css/theme-default.css')); ?>" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?php echo e(asset('vendor/css/demo.css')); ?>" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('vendor/css/perfect-scrollbar.css')); ?>" />

    <link rel="stylesheet" href="<?php echo e(asset('vendor/css/apex-charts.css')); ?>" />

    <!-- Kit code for icons -->
    <script src="https://kit.fontawesome.com/1c6258baf1.js" crossorigin="anonymous"></script>

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="<?php echo e(asset('vendor/js/helpers.js')); ?>"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="<?php echo e(asset('vendor/js/config.js')); ?>"></script>
    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="<?php echo e(asset('vendor/js/jquery.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/js/popper.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/js/bootstrap.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/js/perfect-scrollbar.js')); ?>"></script>

    <script src="<?php echo e(asset('vendor/js/menu.js')); ?>"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="<?php echo e(asset('vendor/js/apexcharts.js')); ?>"></script>

    <!-- Main JS -->
    <script src="<?php echo e(asset('vendor/js/main.js')); ?>"></script>

    <!-- Page JS -->
    <script src="<?php echo e(asset('vendor/js/dashboards-analytics.js')); ?>"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <!-- JS and CSS for charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="https://cdn.anychart.com/releases/8.10.0/js/anychart-core.min.js"></script>
    <script src="https://cdn.anychart.com/releases/8.10.0/js/anychart-pie.min.js"></script>
    <link rel="stylesheet" href="<?php echo e(asset('vendor/css/chart.css')); ?>" />
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="" class="app-brand-link">
                        <!--! Input link here -->
                        <span class="app-brand-text menu-text fw-bolder ms-2"><img
                                src="<?php echo e(asset('img/android-icon-36x36.png')); ?>"></span>
                        <span class="app-brand-text menu-text fw-bolder ms-2">MF Manager</span>
                    </a>

                    <a href="javascript:void(0);"
                        class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>

                <div class="app-brand-1 demo-1">
                    <?php if(Session()->has('LoginID')): ?>
                        <div class="welcome"
                            style="magin-top: 12px; background-color: white; color:rgb(35, 179, 90); display:inline-block">
                            <p style="margin-right: 1px"><i class="fas fa-user-tie"></i> | <?php echo session()->get('Name'); ?></p>
                            
                        </div>
                        <a style="margin-left: 10px;" class="nav-icon position-relative text-decoration-none"
                            href="<?php echo e(url('adminLogOut')); ?>">
                            <i class="fas fa-sign-out-alt fa-lg"></i>
                        </a>
                    <?php else: ?>
                        <a class="nav-icon position-relative text-decoration-none" href="<?php echo e(url('loginAdmin')); ?>">
                            <i class="fa fa-fw fa-user text-dark mr-3"></i>
                        </a>
                    <?php endif; ?>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">
                    <!-- Dashboard -->
                    <li class="menu-item active">
                        <a href="<?php echo e(url('dashboard')); ?>" class="menu-link">
                            <i class="menu-icon tf-icons fa-solid fa-house"></i>
                            <div data-i18n="Dashboard">Dashboard</div>
                        </a>
                    </li>

                    <!-- Accounts -->
                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Accounts</span>
                    </li>
                    
                    <li class="menu-item">
                        <a href="<?php echo e(url('listAdmin')); ?>" class="menu-link">
                            <i class="menu-icon tf-icons fa-solid fa-user"></i>
                            <div data-i18n="Admins">Admins</div>
                        </a>
                    </li>
                    
                    <li class="menu-item">
                        <a href="<?php echo e(url('listCustomer')); ?>" class="menu-link">
                            <i class="menu-icon tf-icons fa-solid fa-people-group"></i>
                            <div data-i18n="Customers">Customers</div>
                        </a>
                    </li>

                    <!-- Products -->
                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Products</span>
                    </li>
                    <!-- Categories -->
                    <li class="menu-item">
                        <a href="<?php echo e(url('listCategory')); ?>" class="menu-link">
                            <i class="menu-icon tf-icons fa-solid fa-arrow-down-short-wide"></i>
                            <div data-i18n="Categories">Categories</div>
                        </a>
                    </li>
                    <!-- Products -->
                    <li class="menu-item">
                        <a href="<?php echo e(url('listProduct')); ?>" class="menu-link">
                            <i class="menu-icon tf-icons fa-solid fa-shirt"></i>
                            <div data-i18n="Products">Products</div>
                        </a>
                    </li>
                </ul>
            </aside>
            <!-- / Menu -->
            <div class="layout-page">
                <div class="container-xxl flex-grow-1 container-p-y">
                    <div class="row">
                        <div class="col-lg-6 mb-4 order-0" id="container" style="background-color: #fff;">
                            <canvas id="myChart" style="width:100%;max-width:600px"></canvas>

                            <?php

                            

                            ?>

                            <script>
                                function color() {
                                    var r = () => Math.random() * 256 >> 0;
                                    var color = `rgb(${r()}, ${r()}, ${r()})`;
                                    return color;
                                }
                                var xValues = ["<?php echo 'a'; ?>", "France", "Spain", "USA", "Argentina"];
                                var yValues = [55, 49, 44, 24, 15];
                                var barColors = [
                                    color(),
                                    color(),
                                    color(),
                                    color(),
                                    color()
                                ];

                                new Chart("myChart", {
                                    type: "doughnut",
                                    data: {
                                        labels: xValues,
                                        datasets: [{
                                            backgroundColor: barColors,
                                            data: yValues
                                        }]
                                    },
                                    options: {
                                        title: {
                                            display: true,
                                            text: "Precentage of products in category"
                                        }
                                    }
                                });
                            </script>
                        </div>
                        <div class="col-lg-6 mb-4 order-0" style="background-color: #fff;">
                            <table class="graph">
                                <caption>Bar Chart HTML From HTML Table</caption>
                                <thead>
                                    <tr>
                                        <th scope="col">Item</th>
                                        <th scope="col">Percent</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr style="height:85%">
                                        <th scope="row">Your Blog</th>
                                        <td><span>85%</span></td>
                                    </tr>
                                    <tr style="height:23%">
                                        <th scope="row">Medium</th>
                                        <td><span>23%</span></td>
                                    </tr>
                                    <tr style="height:7%">
                                        <th scope="row">Tumblr</th>
                                        <td><span>7%</span></td>
                                    </tr>
                                    <tr style="height:38%">
                                        <th scope="row">Facebook</th>
                                        <td><span>38%</span></td>
                                    </tr>
                                    <tr style="height:35%">
                                        <th scope="row">Youtube</th>
                                        <td><span>35%</span></td>
                                    </tr>
                                    <tr style="height:30%">
                                        <th scope="row">LinkedIn</th>
                                        <td><span>30%</span></td>
                                    </tr>
                                    <tr style="height:5%">
                                        <th scope="row">Twitter</th>
                                        <td><span>5%</span></td>
                                    </tr>
                                    <tr style="height:20%">
                                        <th scope="row">Other</th>
                                        <td><span>20%</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


            
            <?php
            // Tổng sản phẩm = tổng Available của tất cả sản phẩm
            $totalProduct = 0;
            foreach ($products as $product) {
                $totalProduct += $product->Available;
            }
            echo "Total products: $totalProduct\n";
            
            // Tổng sản phẩm của từng category
            foreach ($categories as $category) {
                $number = 0;
                foreach ($products as $product) {
                    if ($product->Category_ID == $category->Category_ID) {
                        $number += $product->Available;
                    }
                }
                echo "<br>$category->Category_Name has $number products";
            }
            
            echo '<br>';
            
            // Tổng lợi nhuận Này chưa test nha
            $bigIncome = 0;
            $smallIncome = 0;
            foreach ($order_details as $orderDetail) {
                $smallIncome = $orderDetail->Price * $order_detail->Quantity;
                $bigIncome += $smallIncome;
            }
            echo $bigIncome;
            ?>
<?php /**PATH C:\xampp\htdocs\Assignment\resources\views/Admin/Dashboard.blade.php ENDPATH**/ ?>