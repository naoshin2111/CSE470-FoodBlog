<?php $__env->startSection('content'); ?>




	 <div class="panel panel-default">
	 	<div class="panel-body">
	 		
			<table class="table table-hover">
		 		<thead>
					<th>Tag Name</th>

					<th>Editing</th>
					<th>Deleting</th>

					<tbody>

						<?php if($tags->count()): ?>
						 <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

			              <tr>
			              	<td>
			              		<?php echo e($tag->tag); ?>

			              	</td>

			              	<td>
			              	<a class="btn btn-info" href="<?php echo e(route('tag.edit',['id'=>$tag->id])); ?>">
			              	
			              			<span class="glyphicon glyphicon-pencil"></span>
			              	</a>
			              	</td>
			              	<td>
			              	<a class="btn btn-danger" href="<?php echo e(route('tag.delete',['id'=>$tag->id])); ?>">
			              	
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