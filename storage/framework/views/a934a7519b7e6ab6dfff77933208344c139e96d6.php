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
    <link rel="stylesheet" href=<?php echo e(asset('css/login_style.css')); ?>>
    <link rel="stylesheet" href=<?php echo e(asset('css/button_style.css')); ?>>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
</head>

<body>
    <!-- partial:index.partial.html -->
    <div class="container">
        <div id="login-form">
            <div class="row" style="justify-content: center;">
                <div class="col-lg-7">
                    <form action="<?php echo e(url('saveCustomer')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <?php if (Session::has('data')) {
                            $data = Session::get('data');
                            $_SESSION['social'] = 'You seem to have a new account, please add in your details first!';
                        } ?>
                        <h3 class="login-header" style="text-align: center; font-size:40px">Create a new account</h3>
                        <?php if(Session::has('success')): ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo e(Session::get('success')); ?>

                            </div>
                        <?php endif; ?>
                        <?php if(!empty($social)): ?>
                            <div class="alert alert-primary" role="alert">
                                <?php echo e($social); ?>

                            </div>
                        <?php endif; ?>
                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input id="username" type="text" class="form-control" placeholder="Username"
                                name="userName" value="<?php echo e(old('userName')); ?>">
                        </div>
                        <?php $__errorArgs = ['userName'];
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
                            <label for="password">Password:</label>
                            <input id="password" type="password" class="form-control" placeholder="Password"
                                name="password">
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

                        <div class="form-group">
                            <label for="confPass">Confirm password:</label>
                            <input id="confPass" type="password" class="form-control" placeholder="Confirm Password"
                                name="confirmPassword">
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

                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input id="name" type="text" class="form-control" placeholder="Name" name="name"
                                value="<?php echo e(old('name')); ?>">
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

                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input id="email" type="email" class="form-control" placeholder="Demo@gmail.com"
                                name="email" value="<?php echo e(old('email')); ?>">
                        </div>
                        <?php $__errorArgs = ['email'];
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
                            <label for="phone">Phone number:</label>
                            <input id="phone" type="text" class="form-control" placeholder="0123456789"
                                name="phone" value="<?php echo e(old('phone')); ?>">
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

                        <div class="form-group">
                            <label for="address">Address:</label>
                            <input id="address"type="text" class="form-control" placeholder="Address"
                                name="address" value="<?php echo e(old('address')); ?>">
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

                        <p>Gender :
                            <input type="radio" id="male" name="gender" value="male">
                            <label for="male">Male</label>
                            <input type="radio" id="female" name="gender" value="female">
                            <label for="male">Female</label>
                            <input type="radio" id="other" name="gender" value="other">
                            <label for="male">Other</label>
                        </p>
                        <?php $__errorArgs = ['gender'];
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
                            <label for="dob">Date of birth:</label>
                            <input id="dob" type="date" class="form-control" placeholder="Birth Day"
                                name="DoB" value="<?php echo e(old('DoB')); ?>">
                        </div>
                        <?php $__errorArgs = ['DoB'];
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
                                up</span></button>
                    </form>
                    <div class="row">
                        <div class="col text-center ">
                            <a href="<?php echo e(url('customerLogin')); ?>" class="home">
                                <button class="custom-btn btn-1" style="text-decoration: none">Login now</button>
                            </a>
                            
                        </div>
                        <div class="col text-center">
                            
                            <a href="<?php echo e(url('/')); ?>" class="home" style="text-decoration: none">
                                <button class="custom-btn btn-1">To home
                                    page</button>
                            </a>
                        </div>
                    </div>

                </div>
                
            </div>
        </div>
    </div>
    <!-- partial -->

</body>

</html>
<?php /**PATH C:\xampp\htdocs\MaleFashion\resources\views/Customer/customerRegister.blade.php ENDPATH**/ ?>