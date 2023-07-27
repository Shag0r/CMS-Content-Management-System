


<?php $__env->startSection('main-content'); ?>
<div class="container-fluid px-4">
                        <h1 class="mt-4">Edit Break Fast Items</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Update BreakFast</li>
                        </ol>

                        <div class="row">
                            <div class="col-lg-12">
                                <form action="<?php echo e(Route('updatesavebreak',$food->id)); ?>" method="post" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <div class="from-group mb-3">
                                        <input type="text" name="breakfastname" class="form-control" placeholder="Breakfast Item Name" value=" <?php echo e($food->breakfastname); ?>">
                                        <?php $__errorArgs = ['breakfastname'];
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
                                        <textarea name="breakfastsummary" id="breakfastsummary" cols="100" rows="3" class="form-control" > <?php echo e($food->breakfastsummary); ?> </textarea>
                                        <?php $__errorArgs = ['breakfastsummary'];
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
                                                <input type="number" name="price" placeholder="Set the price for the item" class="form-control" value="<?php echo e($food->price); ?>">
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
                                            
                                            <select class="form-select  form-control" name="breakstatus" id="">
                                                <option selected>-----------------------Select Food Status--------------</option>

                                                <option value="1" <?php if( $food->breakstatus==1): ?>  selected
                                                    
                                                <?php endif; ?>>Published</option>
                                                <option value="0" <?php if( $food->breakstatus==0): ?> selected
                                                    
                                                <?php endif; ?>>Unpublished</option>
                                            </select>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="col-lg-10">
                                        <div class="form-group mb-3">
                                        <input type="file" name="breakfoobimg" id="breakfoobimg" class="form-control">

                                           
                                        </div>
                                        <?php if( $food->breakfoobimg): ?>
                                            <div class="mb-3">
                                                <img src="<?php echo e(asset('images/breakfast/'.  $food->breakfoobimg)); ?>" alt="" width="150px" height="150px">
                                            </div>
                                            
                                        <?php endif; ?>
                                    </div>
                                    <div class="form-group mb-3">
                                        <button class="btn btn-primary  w-100">
                                            Update  Information
                                        </button>
                                    </div>
                                   
                                </form>
                            </div>
                        </div>
                      
                        
                      
        </div>
    
<?php $__env->stopSection(); ?>


                                            
                                 
<?php echo $__env->make('Back.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Complete Laravel\projects\victory\resources\views/Back/editbreak.blade.php ENDPATH**/ ?>