


<?php $__env->startSection('main-content'); ?>
<div class="container-fluid px-4">
                        <h1 class="mt-4">Lunch  Items</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"><i class="fa-solid fa-bowl-rice"></i>&#8209;Lunch</li>
                        </ol>

                        <div class="row">
                            <div class="col-lg-12">
                                <form action="<?php echo e(Route('addlunchitem')); ?>" method="post" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <div class="from-group mb-3">
                                        <input type="text" name="lunchname" class="form-control" placeholder="lunchname Item Name">
                                        <?php $__errorArgs = ['lunchname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger"><?php echo e(message); ?></span>
                                            
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="form-group mb-3">
                                        <textarea name="lunchsummary" id="lunchsummary" cols="100" rows="3" class="form-control" > </textarea>
                                        <?php $__errorArgs = ['lunchsummary'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger"><?php echo e(message); ?></span>
                                            
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group mb-3">
                                                <input type="number" name="price" placeholder="Set the price for the item" class="form-control">
                                                <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="text-danger"><?php echo e(message); ?></span>
                                                    
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mb-3">
                                            
                                            <select class="form-select  form-control" name="lunchstatus" id="">
                                                <option selected>-----------------------Select Food Status--------------</option>

                                                <option value="1">Published</option>
                                                <option value="0">Unpublished</option>
                                            </select>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="col-lg-10">
                                        <div class="form-group mb-3">
                                        <input type="file" name="lunchfoobimg" id="lunchfoobimg" class="form-control">

                                           
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <button class="btn btn-primary  w-100">
                                            Add Lunch  Item
                                        </button>
                                    </div>
                                   
                                </form>
                            </div>
                        </div>
                      
                        
                      
        </div>
    
<?php $__env->stopSection(); ?>


                                            
                                 
<?php echo $__env->make('Back.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Complete Laravel\projects\victory\resources\views/Back/addlunch.blade.php ENDPATH**/ ?>