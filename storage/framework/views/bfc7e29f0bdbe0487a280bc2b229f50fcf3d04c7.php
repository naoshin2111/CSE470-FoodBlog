<?php $__env->startSection('content'); ?>




	 <div class="panel panel-default">
	 	<div class="panel-body">
	 		
			<table class="table table-hover">
		 		<thead>
					<th>Category Name</th>

					<th>Editing</th>
					<th>Deleting</th>

					<tbody>

						<?php if($categories->count()): ?>
						 <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

			              <tr>
			              	<td>
			              		<?php echo e($category->name); ?>

			              	</td>

			              	<td>
			              	<a class="btn btn-info" href="<?php echo e(route('category.edit',['id'=>$category->id])); ?>">
			              	
			              			<span class="glyphicon glyphicon-pencil"></span>
			              	</a>
			              	</td>
			              	<td>
			              	<a class="btn btn-danger" href="<?php echo e(route('category.delete',['id'=>$category->id])); ?>">
			              	
			              			Delete
			              	</a>
			              	</td>

			              </tr>
			             

						 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

						 <?php else: ?> 
                              <tr>
                              	<th colspan="5" style="background-color: rgb(23,45,67);color: white;" class="text-center">
                              		No Category Create yet 
                              	</th>
                              </tr>

						 <?php endif; ?>
					</tbody>
				</thead>
			</table>
	 	</div>
	 </div>
	

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>