<?php $__env->startSection('content'); ?>




	 <div class="panel panel-default">
	 	<div class="panel-body">
	 		
			<table class="table table-hover">
		 		<thead>
					<th>Post Image</th>

					<th>Post Title</th>
					<th>Edit</th>
					<th>Restore</th> 
					<th>Destroy</th>

					<tbody>

						<?php if($posts->count()>0): ?>
                            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

			              <tr>
			              	<td>
			              		<img style="width: 90px;height: 50px;" src="<?php echo e($post->featured); ?>" alt="<?php echo e($post->title); ?>">
			              	</td>

			              	<td>
			              	      <?php echo e($post->title); ?>

			              	</td>
			              	 <td>Edit</td>
			              	 <td><a class="btn btn-xs btn-success" href="<?php echo e(route('posts.restore', ['id'=>$post->id])); ?>">Restore</a>
			              	 </td>
			              	 <td><a class="btn btn-xs btn-danger" href="<?php echo e(route('post.kill', ['id'=>$post->id])); ?>">Delete</a>
			              	 </td>

			              </tr>
			             

						   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

						<?php else: ?>

                                  <tr>
                                  	<th colspan="5" style="background-color: rgb(23,45,67);color: white;" class="text-center">No Trashed Post Here</th>
                                  </tr>

						<?php endif; ?>


						 
					</tbody>
				</thead>
			</table>
	 	</div>
	 </div>
	

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>