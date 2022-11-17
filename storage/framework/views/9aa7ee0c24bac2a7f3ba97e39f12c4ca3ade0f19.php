<?php echo $__env->make('Header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<head>
    <title>Cart</title>
</head>

<!-- Open Content -->
<section class="bg-light" style="background-color: #eee;">
    <div class="container py-5">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-10">

                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3 class="fw-normal mb-0 text-black">Order Cart</h3>
                </div>

                
                <?php if(!empty(session('OrderIDArray'))): ?>   
                    <?php $__currentLoopData = $OrderDetailsIDDistinct; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $OrderDetailsIDDistinctRow): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="card rounded-3 mb-4">
                            <?php $total = 0; $i = 0; ?>
                            <?php $__currentLoopData = session('OrderIDArray'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($OrderDetailsIDDistinctRow->Order_ID === $row['OrderID']): ?>                                  

                                    <div class="card-body p-4" style="padding: 10px 10px 0px 10px !important;">                   
                            
                                        <div class="row d-flex justify-content-between align-items-center">
                                                
                                            
                                            
                                            <div class="col-md-2 col-lg-2 col-xl-2">
                                                <img src="img/products/<?php
                                                
                                                $ImagesFirst = explode('@@@', $row['img']);
                                                
                                                $item = reset($ImagesFirst);
                                                echo $item; ?>" class="img-fluid rounded-3"
                                                    alt="Cotton T-shirt">
                                            </div>
                                            <div class="col-md-3 col-lg-3 col-xl-3">
                                                <p class="lead fw-normal mb-2"><?php echo e($row['name']); ?></p>
                                                <p>
                                                    <span class="text-muted">Size: </span>
                                                    <?php echo e($row['size']); ?>

                                                </p>
                                            </div>
                                            <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                                <p>Ammount: <?php echo e($row['quantity']); ?></p>
                                            </div>
                                            <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                                <h5 class="mb-0">$<?php echo e($row['price']); ?></h5>
                                            </div>
                                            <div class="col-md-1 col-lg-1 col-xl-1  ">
                                                <a href="removeItem/<?php echo e($i); ?>" class="text-danger"
                                                    onclick="return confirm('Confirm delete?')">
                                                    <i class="fas fa-trash fa-lg"></i>
                                                </a>
                                            </div>
                                        </div>                                       
                                        <hr>
                                        <?php $total += $row['price'] * $row['quantity'];
                                        $i++; ?>
                                    
                                         
                                            
                                                
                                                                                                                  
                                    </div>  
                                <?php endif; ?>                          
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            <div class="" style ="display:flex; float:left; padding-bottom:10px; ">                            
                                    <button type="button" class="btn btn-outline-success" style="margin-right: 100px; margin-left:10px; width:100px;">Buy again</button>                       
                                    <h5 class="" style="width: 150px; ">Total: $<?php echo e($total); ?></h5> 
                                                   
                                
                            </div>
                        </div>                      
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            
                <?php else: ?>   
                <p>Looks like your cart is empty! You can get some items <a href="<?php echo e('shop'); ?>"
                    style="color: #23B35A">Here</a></p>
                <?php endif; ?>
                
                
            </div>
        </div>
</section>

<?php echo $__env->make('Footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\Assignment\resources\views/Navigate/orderCart.blade.php ENDPATH**/ ?>