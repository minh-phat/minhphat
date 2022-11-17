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
                    <h3 class="fw-normal mb-0 text-black">Shopping Cart</h3>
                </div>

                <form action="<?php echo e(url('purchase')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php if(Session::has('success')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(Session::get('success')); ?>

                        </div>
                    <?php endif; ?>
                    <div class="container py-5">
                        <div class="row py-5">                          
                            <div class="row">
                                <div class="mb-3">
                                    <label for="inputname">Recieve Address</label>
                                    <input type="text" class="form-control mt-1" name="address"
                                        placeholder="Address">
                                </div>
                                <?php $__errorArgs = ['address'];
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
                                <div class="mb-3">
                                    <label for="inputemail">Recieve Phone</label>
                                    <input type="text" class="form-control mt-1" name="phone"
                                        placeholder="Phone">
                                </div>
                                <?php $__errorArgs = ['phone'];
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
                                <div class="mb-3">
                                    <label for="inputmessage">Note</label>
                                    <textarea class="form-control mt-1" id="message" name="note" placeholder="Note" rows="8"></textarea>
                                </div>
                            </div>          
                        </div>
                    </div>                        
                    

                    <div class="card rounded-3 mb-4">
                        <div class="card-body p-4">
                            <?php if(!empty(session('cart'))): ?>
                                <?php $total = 0;
                                $i = 0; ?>
                                <?php $__currentLoopData = session('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="row d-flex justify-content-between align-items-center">
                                        <div class="col-md-2 col-lg-2 col-xl-2">
                                            <img src="<?php echo e('img/products/' . $row['img']); ?>" class="img-fluid rounded-3"
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
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                                <p>Looks like your cart is empty! You can get some items <a href="<?php echo e('shop'); ?>"
                                        style="color: #23B35A">Here</a></p>
                            <?php endif; ?>
                            <div class="row d-flex justify-content">
                                <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-10">
                                    <?php if(!empty(session('cart'))): ?>
                                        <h5 class="mb-0">Total: $<?php echo e($total); ?></h5>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php if(!empty(session('cart'))): ?>
                        <div class="card rounded-3 mb-4">
                            <div class="card-body p-3">
                                
                                <button class="btn btn-block btn-primary" type="submit" style="margin-top: 10px">Purchase</button>
                                <a href="<?php echo e(url()->previous()); ?>" class="btn btn-outline-danger"
                                    style="float: right; margin-right: 1%">Back</a>
                            </div>
                        </div>
                    <?php endif; ?>
                </form>
            </div>
        </div>
</section>

<?php echo $__env->make('Footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\MaleFashion\resources\views/Navigate/cart.blade.php ENDPATH**/ ?>