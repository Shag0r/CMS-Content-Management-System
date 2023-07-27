


<?php $__env->startSection('main-content'); ?>
<div class="container-fluid px-4">
                        <h1 class="mt-4"> <i class="fa-solid fa-bowl-rice"></i>&#8209;Lunch Items Arrangement</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Lunch</li>
                        </ol>

                        <div class="card mb-4">
                            <div class="card-header">
                            
                                <a href="<?php echo e(Route('lunch')); ?>" class="btn btn-success"><i class="fa-solid fa-bowl-rice"></i>&#8209;ADD Items</a>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>SL.NO</th>
                                            <th>Name</th>
                                            <th>Picture</th>
                                            <th>Price</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>SL.NO</th>
                                            <th>Name</th>
                                            <th>Picture</th>
                                            <th>Price</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                            $l=1;

                                        ?>
                                        <?php if(count($lunchfood)>0): ?>
                                            <?php $__currentLoopData = $lunchfood; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lunch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                    <td><?php echo e($l++); ?></td>
                                                    <td><?php echo e($lunch->lunchname); ?></td>
                                                    <th>
                                                        <img src="<?php echo e(asset('images/lunch/'.  $lunch->lunchfoobimg)); ?>" alt="" width="150px" height="150px">
                                                    </th>
                                                    <td> <?php echo e($lunch->price); ?> TK</td>
                                                    <td>
                                                        <?php if( $lunch->lunchstatus==1): ?>
                                                            <a href="<?php echo e(Route('inactivelunch',$lunch->id)); ?>" class="btn btn-success  btn-sm">
                                                                <i class="fas fa-check"></i>Active
                                                            </a>
            
                                                        <?php else: ?>
                                                            <a href="<?php echo e(Route('activelunch',$lunch->id)); ?>" class="btn btn-warning  btn-sm">
                                                                <i class="fas fa-warning"></i>InActive
                                                            </a>    
                                                        <?php endif; ?>
                                                    </td>
                                                    <td>
                                                    <a href="#" class="btn btn-primary btn-sm"><i class="fas fa-edit me-1"></i>Edit </a>
                                                    <a href="<?php echo e(Route('deletelunch',$lunch->id)); ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash me-1"></i>Delete </a>

                                                        
                                                    </td>

                                                </tr>
                                                
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            
                                        <?php endif; ?>
                                       
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                      
                        
                      
        </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Back.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Complete Laravel\projects\victory\resources\views/Back/managelunch.blade.php ENDPATH**/ ?>