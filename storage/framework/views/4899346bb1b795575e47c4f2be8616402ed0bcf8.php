<?php $__env->startSection('content'); ?>




	 <div class="panel panel-default">
	 	<div class="panel-body">
	 		
			<table class="table table-hover">
		 		<thead>
					<th>Post Image</th>

					<th>Post Title</th>
					<th>Edit</th>
					<th>Trash</th>

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
			              	 <td>
			              	 	<a class="btn btn-primary" href="<?php echo e(route('posts.edit', ['id'=>$post->id])); ?>">Edit</a>
			              	 </td>

			              	 <td><a class="btn btn-danger" href="<?php echo e(route('posts.delete', ['id'=>$post->id])); ?>">Trash</a></td>

			              </tr>
			             

						 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                          <?php else: ?>

                          <tr>
                          	<th colspan="5" style="background-color: rgb(23,45,67);color: white;" class="text-center">Post Create Not yet</th>
                          </tr>

                          <?php endif; ?>

					</tbody>
				</thead>
			</table>
	 	</div>
	 </div>
	

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>