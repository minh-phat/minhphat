<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Product list</title>
  </head>
  <body>
    <div class="container" stule="margin-top: 20px;" >
        <div class = "row">
            <div class = "col-md-12">
                <h2>Product List</h2>
                <?php if(Session::has('success')): ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo e(Session::get('success')); ?>

                    </div>
                <?php endif; ?>
                <div style="margin-right:10%; float: right;">
                    <a href="<?php echo e(url('add')); ?>  " class="btn btn-primary">Add New</a> <!-- <?php echo e(url('add')); ?> use to move views.add folder -->
                </div>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Action</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($row->productID); ?></td>
                                <td><?php echo e($row->productName); ?></td>
                                <td><?php echo e($row->productPrice); ?></td>
                                <td>
                                    <img src="images/products/<?php echo e($row->productImage1); ?>" alt=" " style ="height 80px; width: 60px;">
                                </td>
                                <td >
                                    <a href="<?php echo e(url('edit/'.$row->productID)); ?>" class="btn btn-outline-primary btn-lg">Edit</a>
                                    <a href="<?php echo e(url('delete/'.$row->productID)); ?>" class="btn btn-outline-info"
                                        onclick="return confirm('Are yoou sure?');">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  </body>
</html><?php /**PATH C:\xampp\htdocs\laravel0905a\resources\views/list.blade.php ENDPATH**/ ?>