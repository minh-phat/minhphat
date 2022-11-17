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

    <title>Add new Product</title>

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
                    <h2>Add a new product</h2>
                    <hr style="width: 500px;">
                    
                    <?php if(Session::has('success')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(Session::get('success')); ?>

                        </div>
                    <?php endif; ?>
                    <form action="<?php echo e(url('saveProduct')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="md-3">
                            <label for="name" class="form-label">Product Name</label>
                            <textarea type="number" name="name" class="form-control" placeholder="Enter product name"
                                style="width: 500px; height:75px"><?php echo e(old('name')); ?></textarea>
                        </div>
                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo e($message); ?>

                            </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        <div class="md-3">
                            <label for="category" class="form-label">Category</label>
                            <select name="category" class="form-control form-select" value="<?php echo e(old('category')); ?>"
                                style="width: 200px">
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($row->Category_ID); ?>"><?php echo e($row->Category_Name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <?php $__errorArgs = ['category'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo e($message); ?>

                            </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        <div class="md-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="number" name="price" class="form-control" placeholder="Product price"
                                value="<?php echo e(old('price')); ?>" style="width: 150px">
                        </div>
                        <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo e($message); ?>

                            </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        <div class="md-3">
                            <label for="details" class="form-label">Details</label>
                            <textarea type="number" name="details" class="form-control" placeholder="Enter product details"
                                style="width: 500px; height:150px"><?php echo e(old('details')); ?></textarea>
                        </div>
                        <?php $__errorArgs = ['details'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo e($message); ?>

                            </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        <div class="md-3">
                            <label for="images" class="form-label">Images</label>
                            <input type="file" name="images[]" class="form-control" multiple value="<?php echo e(old('images[]')); ?>"
                                style="width: 350px" id="file-input">
                            <br>
                            <label for="preview">Previews</label>
                            <div id="preview" style="width:220px;height:220px" class="form-control" ></div> 
                            <br>
                            

                            <script>
                                function previewImages() {
                                    var preview = document.querySelector('#preview');
                                    preview.innerHTML = '';     //clear previous previews
                                    preview.style = "width:fit-content";    //change the preview <div> style to fit the new childs (images in this case)
                                    if (this.files) {
                                        [].forEach.call(this.files, readAndPreview);
                                    }
                                    function readAndPreview(file) {
                                        // Make sure `file.name` matches our extensions criteria
                                        if (!/\.(jpe?g|png|gif)$/i.test(file.name)) {
                                            return alert(file.name + " is not an image");
                                        }
                                        var reader = new FileReader();
                                        reader.addEventListener("load", function() {
                                            var image = new Image();
                                            image.height = 210;
                                            image.width = 210;
                                            image.title = file.name;
                                            image.style = "border-radius: 10px; margin: 5px"    //image attributes
                                            image.src = this.result;
                                            preview.appendChild(image);
                                        });
                                        reader.readAsDataURL(file);
                                    }
                                }
                                document.querySelector('#file-input').addEventListener("change", previewImages);
                            </script>

                            

                        </div>
                        <?php $__errorArgs = ['images'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo e($message); ?>

                            </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        
                        <div class="md-3">
                            <label>Sizes</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="S"
                                    name="size[]">
                                <label class="form-check-label" for="inlineCheckbox1">S</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="M"
                                    name="size[]">
                                <label class="form-check-label" for="inlineCheckbox2">M</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="L"
                                    name="size[]">
                                <label class="form-check-label" for="inlineCheckbox3">L</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="XL"
                                    name="size[]">
                                <label class="form-check-label" for="inlineCheckbox4">XL</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="XXL"
                                    name="size[]">
                                <label class="form-check-label" for="inlineCheckbox5">XXL</label>
                            </div>
                        </div>

                        <div class="md-3">
                            <label for="available" class="form-label">Available</label>
                            <input type="number" name="available" class="form-control" placeholder="Enter available"
                                value="<?php echo e(old('available')); ?>" style="width: 160px">
                        </div>
                        <?php $__errorArgs = ['available'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo e($message); ?>

                            </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <br>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="<?php echo e(url('listProduct')); ?>" class="btn btn-danger">Back</a>
                        <br><br><br><br><br><br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\Assignment\resources\views/Admin/Products/add.blade.php ENDPATH**/ ?>