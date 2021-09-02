<?php $__env->startSection('content'); ?>

     
      <?php echo $__env->make('admin.includes.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="panel panel-default">
      <div class="panel-heading">
      	Create a New Tag
      </div>

      <div class="panel-body">
      	<form action="<?php echo e(route('tag.store')); ?>" method="POST">
      		
      		<?php echo e(csrf_field()); ?>


            <div class="form-group">
            	<label for="tag">Tag Name</label>
            	<input type="text" name="tag" placeholder="Enter Your Blog Category Name" class="form-control">
            </div>

            <div class="from-group">
            	 <div class="text-right">
            	 	<button class="btn btn-success" type="submit">Create Category</button>
            	 </div>
            </div>



      	</form>
      </div>

  </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>