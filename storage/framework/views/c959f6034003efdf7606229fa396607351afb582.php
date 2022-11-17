<?php echo $__env->make('Header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<head>
    <title>Shop</title>
</head>

<!-- Start Content -->
<div class="container py-5">
    <div class="row">

        <div class="col-lg-3">
            <h1 class="h2 pb-4">Categories</h1>
            <ul class="list-unstyled templatemo-accordion">
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a class="d-flex justify-content-between h3" style="text-decoration:none"
                        href="<?php echo e(url('category/' . $row->Category_ID)); ?>">
                        <li class="pb-3">
                            <?php echo e($row->Category_Name); ?>

                            <i class="fa fa-fw fa-chevron-circle-right mt-1"></i>
                        </li>
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>

        <div class="col-lg-9">
            <div class="row">
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $showProducts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-4">
                        <a href="<?php echo e(url('shopSingle/' . $showProducts->Product_ID)); ?>"
                            style="text-decoration: none;color:black;">
                            <div class="card mb-4 product-wap rounded-0">
                                <div class="card rounded-0">
                                    <?php
                                    $path = '../img/products/';
                                    $ImagesAll = explode('@@@', $showProducts->Images);
                                    $item = reset($ImagesAll);
                                    $img = $path . $item;
                                    echo "<img class='card-img rounded-0 img-fluid' src='$img'>";
                                    ?>
                                    <div
                                        class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                        <ul class="list-unstyled">
                                            <li>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                                <div class="card-body">
                                    <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                        <li><?php echo e($size = implode(' / ', $sizes = explode(' ', $showProducts->Size))); ?>

                                        </li> 
                                    </ul>
                                    <ul class="list-unstyled d-flex justify-content-center mb-1">
                                        <li>
                                        </li>
                                    </ul>
                                    <p class="text-center mb-0" style="color: #59ab6e; font-size: 25px !important;">
                                        $<?php echo e($showProducts->Price); ?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</div>
<!-- End Content -->

<?php echo $__env->make('Footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- Start Script -->
<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/templatemo.js"></script>
<script src="js/custom.js"></script>
<!-- End Script -->
</body>

</html>
<?php /**PATH C:\xampp\htdocs\Assignment\resources\views/Navigate/shop.blade.php ENDPATH**/ ?>