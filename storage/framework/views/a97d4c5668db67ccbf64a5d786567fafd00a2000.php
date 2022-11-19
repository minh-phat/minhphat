<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Product add</title>
  </head>
  <body>
    <div class ="container">
        <div class = "row">
            <div class = "col-md-12">
                <h2>Add a new product</h2>

                <!-- use to run notification for save success -->
                <?php if(Session::has('success')): ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo e(Session::get('success')); ?>

                    </div>
                <?php endif; ?>
                    
                
                <form action="<?php echo e(url('save')); ?>" method="POST">
                  <?php echo csrf_field(); ?>
                  <div class="md-3">
                    <label for="id" class="form-label">ID</label>
                    <input type="text" name="id" class="form-control" 
                           placeholder="Enter product id">
                    <?php $__errorArgs = ['id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class= "alert alert-danger" role ="alert">
                            <?php echo e($message); ?>

                        </div>                        
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                  </div>
                  <div class="md-3">
                    <label for="name" class="form-label">Product Name</label>
                    <input type="text" name="name" class="form-control" 
                           placeholder="Enter product name">
                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class= "alert alert-danger" role ="alert">
                            <?php echo e($message); ?>

                        </div>                        
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                  </div>
                  <div class="md-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" name="price" class="form-control" 
                           placeholder="Enter product price">
                    <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class= "alert alert-danger" role ="alert">
                            <?php echo e($message); ?>

                        </div>                        
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>                        
                  </div>
                  <div class="md-3">
                    <label for="details" class="form-label">Details</label>
                    <textarea type="number" name="details" class="form-control" 
                              placeholder="Enter product details"></textarea>
                    <?php $__errorArgs = ['details'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class= "alert alert-danger" role ="alert">
                            <?php echo e($message); ?>

                        </div>                        
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                  </div>
                  <div class="md-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" name="image1" class="form-control">
                    <?php $__errorArgs = ['image1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class= "alert alert-danger" role ="alert">
                            <?php echo e($message); ?>

                        </div>                        
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                  </div>
                  <div class="md-3">
                    <label for="producer" class="form-label">Producer</label>
                    <input type="number" name="producer" class="form-control" 
                           placeholder="Enter producer">
                    <?php $__errorArgs = ['producer'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class= "alert alert-danger" role ="alert">
                            <?php echo e($message); ?>

                        </div>                        
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                  </div> <br>
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="<?php echo e(url('list')); ?>" class="btn btn-danger">Back</a>

                </form>
            </div>
        </div>

    </div>
  </body>
</html><?php /**PATH C:\xampp\htdocs\laravel0905a\resources\views/add.blade.php ENDPATH**/ ?>