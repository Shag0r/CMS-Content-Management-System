


<?php $__env->startSection('main-content'); ?>
<div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                       <?php echo $__env->make('Back.layouts.cards', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        
                      
        </div>
    
<?php $__env->stopSection(); ?>
      
<?php echo $__env->make('Back.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Complete Laravel\projects\victory\resources\views/Back/index.blade.php ENDPATH**/ ?>