<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Male Fashion - Sign in</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="img/logoWebsite.ico">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js"
        integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous">
    </script>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css'>
    <link rel="stylesheet" href="css/login_style.css">
    <link rel="stylesheet" href="css/button_style.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
</head>

<body>
    <!-- partial:index.partial.html -->
    <div class="container">
        <div id="login-form">
            <a href="<?php echo e(url('/')); ?>" class="btn"
                style="margin-top: -60px;margin-left: -45px; font-size:1.2rem; color:#59ab6e; border:none;">
                <i class="fa fa-angle-double-left"></i> Back
            </a>
            <div class="row" style="align-items: center;">
                <div class="col-lg-7">
                    <form action="<?php echo e(url('customerSignIn')); ?>" method="POST">

                        <h3 class="login-header">Sign in</h3>

                        
                        <?php if(Session::has('success')): ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo e(Session::get('success')); ?>

                            </div>
                        <?php else: ?>
                            <?php if(Session::has('fail')): ?>
                                <div class="alert alert-danger" role="alert">
                                    <?php echo e(Session::get('fail')); ?>

                                </div>
                            <?php endif; ?>
                        <?php endif; ?>
                        <?php echo csrf_field(); ?>
                        

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Username or Email" name="username">
                        </div>
                        <?php $__errorArgs = ['username'];
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

                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" name="password">
                        </div>
                        <?php $__errorArgs = ['password'];
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
                        <button class="btn btn-primary btn-lg btn-block submit custom-btn btn-3"><span>Sign
                                in</span></button>
                    </form>
                    <div class="row">
                        <div class="col text-center ">
                            <p style="text-align: center">OR</p>
                            <button class="btn btn-primary btn-lg btn-block submit custom-btn btn-3"><a
                                    href="<?php echo e(url('registerCustomer')); ?>" class="home"
                                    style="text-decoration: none"><span>Register
                                        now</span></a></button>
                            
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-5">
                    <a class="btn btn-block social-login google" href="<?php echo e(route('googleRedirect')); ?>">
                        <span class="social-icons">
                            <i class="fab fa-google fa-lg">
                            </i>
                        </span>
                        <span class="align-middle">Login with Google</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- partial -->

</body>

</html>
<?php /**PATH C:\xampp\htdocs\Assignment\resources\views/Customer/customerLogin.blade.php ENDPATH**/ ?>