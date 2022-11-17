<?php echo $__env->make('Admin.Navigation_bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<head>
    <title>Edit product</title>
</head>

<div class="container" style="margin-top: 20px;">
    <div class="row">
        <div class="col-md-12">
            <h2>Edit product</h2>
            <hr style="width: 500px;">
            
            <?php if(Session::has('success')): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo e(Session::get('success')); ?>

                </div>
            <?php endif; ?>

            <form action="<?php echo e(url('updateProduct')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="id" value="<?php echo e($data->Product_ID); ?>">

                
                <div class="md-3">
                    <label for="name" class="form-label">Product Name</label>
                    <textarea type="number" name="name" class="form-control" style="width: 500px; height:75px"><?php echo e($data->Product_Name); ?></textarea>
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
                    <select name="category" class="form-control form-select" value="<?php echo e($data->Category_ID); ?>"
                        style="width: 200px">
                        <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                        value="<?php echo e($data->Price); ?>" style="width: 150px">
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
                        style="width: 500px; height:150px"><?php echo e($data->Details); ?></textarea>
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

                    <?php
                    $imgArr = explode('@@@', $data->Images);    //split data images up for display
                    ?>
                    <label for="current">Current images:</label>
                    <div id="current" style="width:fit-content; " class="form-control">
                        <?php $__currentLoopData = $imgArr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <img src=<?php echo e('../img/products/' . $img); ?> width="210" height="210"
                                style="border-radius: 10px;border: 1px solid #ced4da; margin: 2px;">
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <label for="preview">New images: </label>
                    <div id="preview" style="width:240px;height:228px;margin-bottom:5px" class="form-control"></div>                      
                    <input type="file" name="images[]" class="form-control" multiple style="width: 350px"   
                    id="file-input">
                    

                    <script>
                        function previewImages() {
                            var preview = document.querySelector('#preview');
                            preview.innerHTML = ''; //clear previous previews
                            preview.style =
                                "width:fit-content;margin-bottom:5px"; //change the preview <div> style to fit the new childs (images in this case)
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
                                    image.style = "border-radius: 10px; margin: 2px; border: 1px solid #ced4da" //image attributes
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
                        <input class="form-check-input" type="checkbox" id="CheckboxS" value="S" name="size[]">
                        <label class="form-check-label" for="CheckboxS">S</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="CheckboxM" value="M" name="size[]">
                        <label class="form-check-label" for="CheckboxM">M</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="CheckboxL" value="L" name="size[]">
                        <label class="form-check-label" for="CheckboxL">L</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="CheckboxXL" value="XL"
                            name="size[]">
                        <label class="form-check-label" for="CheckboxXL">XL</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="CheckboxXXL" value="XXL"
                            name="size[]">
                        <label class="form-check-label" for="CheckboxXXL">XXL</label>
                    </div>
                    
                    <?php
                    $SizesAll = explode(' ', $data->Size);
                    foreach ($SizesAll as $size) {
                        if ($size == 'S') {
                            echo '<script type="text/javascript">document.getElementById("CheckboxS").checked=true;</script>';
                        }
                        if ($size == 'M') {
                            echo '<script type="text/javascript">document.getElementById("CheckboxM").checked=true;</script>';
                        }
                        if ($size == 'L') {
                            echo '<script type="text/javascript">document.getElementById("CheckboxL").checked=true;</script>';
                        }
                        if ($size == 'XL') {
                            echo '<script type="text/javascript">document.getElementById("CheckboxXL").checked=true;</script>';
                        }
                        if ($size == 'XXL') {
                            echo '<script type="text/javascript">document.getElementById("CheckboxXXL").checked=true;</script>';
                        }
                    }
                    ?>
                </div>

                <div class="md-3">
                    <label for="available" class="form-label">Available</label>
                    <input type="number" name="available" class="form-control" placeholder="Enter available"
                        value="<?php echo e($data->Available); ?>" style="width: 160px">
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
</body>



</html>
<?php /**PATH C:\xampp\htdocs\Assignment\resources\views/Admin/Products/edit.blade.php ENDPATH**/ ?>