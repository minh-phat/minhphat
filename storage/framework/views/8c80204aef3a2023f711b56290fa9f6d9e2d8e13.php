<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Product List</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?php echo e(asset('img/logoWebsite.ico')); ?>" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

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
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="" class="app-brand-link"> <!--! Input link here -->
              <span class="app-brand-text menu-text fw-bolder ms-2"><img src="<?php echo e(asset('img/android-icon-36x36.png')); ?>"></span>
              <span class="app-brand-text menu-text fw-bolder ms-2">MF Manager</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
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
            <li class="menu-item">
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
            <li class="menu-item active">
              <a href="<?php echo e(url('listProduct')); ?>" class="menu-link">
                <i class="menu-icon tf-icons fa-solid fa-shirt"></i>
                <div data-i18n="Products">Products</div>
              </a>
            </li>
          </ul>
        </aside>
        <!-- / Menu -->
    <div class="layout-page">
        <div class="container" style="margin-top: 20px;">
            <div class="row">
                <div class="col-md-12">
                    
                    <?php if(Session::has('success')): ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo e(Session::get('success')); ?>

                        </div>
                    <?php endif; ?>
                    <?php if(!empty($notify)): ?>
                        <div class="alert alert-primary" role="alert">
                            <?php echo e($notify); ?>

                        </div>
                    <?php endif; ?>
                    <?php if(!empty($fail)): ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo e($fail); ?>

                        </div>
                    <?php endif; ?>
                    
                    
                    <?php if(Session::has('LoginID')): ?>
                        <div style="margin-right: 1%; float:right;box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;">
                            <a href="<?php echo e(url('addProduct')); ?>" class="btn btn-success">
                            <i class="fas fa-plus-circle"></i> Add</a>
                        </div>

                        
                        <div style="margin-right: 1%; float:right;">
                            <form action="<?php echo e(url('searchProduct')); ?>" method="GET" style="box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;">
                                <div class="input-group mb-3">
                                    <select name="searchType" class="form-control form-select">
                                        <option value="none">Search by...</option>
                                        <option value="product">Product Name</option>
                                        <option value="category">Category Name</option>
                                    </select>
                                    <input type="text" class="form-control" placeholder="Search products" name="search">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit"><i
                                                class="fa fa-search" aria-hidden="true"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    <?php endif; ?>

                    
                    <div style="margin-left: 5%; float:left;">
                        <h2>Product List</h2>
                    </div>

                    <?php if(Session::has('LoginID')): ?>
                    
                        <?php if($data->isNotEmpty()): ?>
                            
                            <table class="table table-hover" style="box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;">
                                <thead>
                                    
                                    <tr style="text-align: center; vertical-align:middle">
                                        <th>ID</th>
                                        <th>Product Name</th>
                                        <th>Category</th>
                                        <th>Price</th>
                                        <th style="width: 15%">Details</th>
                                        <th>Images</th>
                                        <th>Size</th>
                                        <th>Available</th>
                                        <th style="width: 10%">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr style="text-align: center; vertical-align:middle">
                                            <td><?php echo e($row->Product_ID); ?></td>
                                            <td><?php echo e($row->Product_Name); ?></td>
                                            <td><?php echo e($row->Category_Name); ?></td>
                                            <td>$<?php echo e($row->Price); ?></td>
                                            <td><?php echo e($row->Details); ?></td>
                                            <td>
                                                <?php
                                                $path = 'img/products/';
                                                $ImagesAll = explode('@@@', $row->Images);
                                                foreach ($ImagesAll as $item) {
                                                    $img = $path . $item;
                                                    echo "<img src='$img' width='100px' height='100px' style='margin-left:5px;border-radius: 10px;border: 1px solid #ced4da;'>";
                                                }
                                                ?>
                                            </td>
                                            <td><?php echo e($row->Size); ?></td>
                                            <td><?php echo e($row->Available); ?></td> <img src="" alt="">
                                            <td>
                                                <a href="<?php echo e(url('editProduct/' . $row->Product_ID)); ?>" class="btn btn-info">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <a href="<?php echo e(url('deleteProduct/' . $row->Product_ID)); ?>" class="btn btn-danger"
                                                    onclick="return confirm('Confirm delete?')">
                                                    <i class="fas fa-trash-alt"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        <?php else: ?>
                        
                            <br><br>
                            <hr>
                            <div class="text-danger">Error ! No data found !</div>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\Assignment\resources\views/Admin/Products/list.blade.php ENDPATH**/ ?>