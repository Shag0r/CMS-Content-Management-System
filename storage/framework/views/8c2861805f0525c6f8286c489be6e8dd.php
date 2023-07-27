<?php echo $__env->make('Back.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
       <?php echo $__env->make('Back.layouts.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div id="layoutSidenav">
          <?php echo $__env->make('Back.layouts.sidenav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div id="layoutSidenav_content">
                <main>
                    <?php echo $__env->yieldContent('main-content'); ?>
                </main>
                <?php echo $__env->make('Back.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
       <?php echo $__env->make('Back.layouts.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;<?php /**PATH E:\Complete Laravel\projects\victory\resources\views/Back/master.blade.php ENDPATH**/ ?>