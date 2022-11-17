<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="<?php echo e(asset('img/apple-icon.png')); ?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('img/logoWebsite.ico')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/templatemo.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/custom.css')); ?>">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="<?php echo e(asset('css/fontawesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/admin.css')); ?>">

    <!--
        
    TemplateMo 559 Zay Shop
    
    https://templatemo.com/tm-559-zay-shop
    
    -->
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">
            
            <a class="navbar-brand text-success logo h2 align-self-center" href="<?php echo e(url('dashboard')); ?>">
                MF manager
                <img src="../img/logoWebsite.png" style="width: 50px; height: 50px;" />
            </a>
            

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill d-lg-flex justify-content-lg-between"
                id="templatemo_main_nav">
                
                <div class="flex-fill">
                    <nav id="primary_nav_wrap">
                        <ul class="nav navbar-nav">
                            <li class="nav-item">
                                <p class="nav-link">Accounts
                                    <i class="fas fa-angle-down"></i>
                                </p>
                                <ul style='box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;z-index: 10'>
                                    <li><a href="<?php echo e(url('listAdmin')); ?>">
                                            <p class="nav-link">Admins</p>
                                        </a></li>
                                    <li><a href="<?php echo e(url('listCustomer')); ?>">
                                            <p class="nav-link">Customers</p>
                                        </a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(url('listProduct')); ?>">
                                    <p class="nav-link">
                                        Products
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(url('listCategory')); ?>">
                                    <p class="nav-link">
                                        Categories
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <p class="nav-link" href="<?php echo e(url('')); ?>">Analytics 
                                    <i class="fas fa-angle-down"></i>
                                </p>
                                <ul style='box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;z-index: 10'>
                                    <li><a href="<?php echo e(url('')); ?>"> 
                                            <p class="nav-link">Orders</p>
                                        </a></li>
                                    <li><a href="<?php echo e(url('')); ?>"> 
                                            <p class="nav-link">Sales</p>
                                        </a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                
                <div class="navbar align-self-center d-flex">

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
            </div>

        </div>
    </nav>
<?php /**PATH C:\xampp\htdocs\Assignment\resources\views/Admin/Navigation_bar.blade.php ENDPATH**/ ?>