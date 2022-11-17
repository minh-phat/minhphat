<?php echo $__env->make('Header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<head>
    <title>Contact</title>
</head>



<?php if(Session::has('customerLoginID')): ?>
    <section style="background-color: #eee;">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <?php if($data->Gender == 'male'): ?>
                                <img src="../img/ProfilePics/Placeholder_PFP_Male.jpg" class="rounded-circle img-fluid"
                                    style="width: 273px;">
                            <?php elseif($data->Gender == 'female'): ?>
                                <img src="../img/ProfilePics/Placeholder_PFP_Female.jpg" class="rounded-circle img-fluid"
                                    style="width: 273px;">
                            <?php else: ?>
                                <img src="../img/ProfilePics/Placeholder_PFP_Other.png" class="rounded-circle img-fluid"
                                    style="width: 273px;">
                            <?php endif; ?>
                            <h2 class="my-3"><?php echo e($data->Customer_Name); ?></h2>
                            <h3 class="text-muted mb-1"><?php echo e($data->Customer_Username); ?></h3>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <a class="btn btn-primary" href="<?php echo e(url('editProfile')); ?>">Update information</a>
                            <?php if(session()->get('loggedWith' !== 'google')): ?>
                                <a class="btn btn-primary" href="<?php echo e(url('customerEditPassword')); ?>">Change password</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-body" style="font-size:20px;">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0"><i class="fas fa-address-card"></i> | Full Name</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?php echo e($data->Customer_Name); ?></p>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0"><i class="fas fa-envelope"></i> | Email</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?php echo e($data->Email); ?></p>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0"><i class="fas fa-phone"></i> | Phone</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?php echo e($data->Phone); ?></p>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0"><i class="fas fa-home"></i> | Address</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?php echo e($data->Address); ?></p>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0"><i class="fas fa-user"></i> | Gender</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?php echo e($data->Gender); ?></p>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0"><i class="fas fa-birthday-cake"></i> | Birthday</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?php echo e(date('d/m/Y', strtotime($data->Date_of_Birth))); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </section>
<?php else: ?>
    <p>Looks like you have not logged in yet! To see your own profile you need to
        <a href="<?php echo e(url('customerLogin')); ?>" style="color: #23B35A">Login here</a> or
        <a href="<?php echo e(url('customerRegister')); ?>"style="color: #23B35A">Sign up here</a>.
    </p>
<?php endif; ?>






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
<?php /**PATH C:\xampp\htdocs\MaleFashion\resources\views/Customer/profile.blade.php ENDPATH**/ ?>