<?php $__env->startSection('content'); ?>

       
            <div class="col-md-3">
                <div class="panel panel-info">
                    <div class="panel-heading text-center">
                         Posted:
                    </div>


                    <div class="panel-body">
                        <h1 class="text-center">
                            <?php echo e($posts_count); ?>

                        </h1>
                    </div>
                </div>


                

            </div>
         <div class="col-md-3">
                <div class="panel panel-danger">
                    <div class="panel-heading text-center">
                         Trashed Posts:
                    </div>


                    <div class="panel-body">
                        <h1 class="text-center">
                            <?php echo e($trashed_count); ?>

                        </h1>
                    </div>
                </div>


                

            </div>
         <div class="col-md-3">
                <div class="panel panel-primary">
                    <div class="panel-heading text-center">
                         Users:
                    </div>


                    <div class="panel-body">
                        <h1 class="text-center">
                            <?php echo e($users_count); ?>

                        </h1>
                    </div>
                </div>


                

            </div>
         <div class="col-md-3">
                <div class="panel panel-success">
                    <div class="panel-heading text-center">
                         Categories:
                    </div>


                    <div class="panel-body">
                        <h1 class="text-center">
                            <?php echo e($categories_count); ?>

                        </h1>
                    </div>
                </div>


                

            </div>
        
   
<?php $__env->stopSection(); ?>
 
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>