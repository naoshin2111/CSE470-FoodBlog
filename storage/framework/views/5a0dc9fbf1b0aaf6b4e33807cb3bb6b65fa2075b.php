<?php $__env->startSection('content'); ?>

     
     <?php echo $__env->make('admin.includes.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="panel panel-default">
      <div class="panel-heading">
      	Edit  Post : <?php echo e($posts->title); ?>

      </div>

      <div class="panel-body">
      	<form action="<?php echo e(route('posts.update',['id'=>$posts->id])); ?>" method="POST" enctype="multipart/form-data">
      		
      		<?php echo e(csrf_field()); ?>


            <div class="form-group">
            	<label for="title">Title</label>
            	<input type="text" name="title" value="<?php echo e($posts->title); ?>" placeholder="Enter Your Blog Title" class="form-control">
            </div>

            <div class="form-group">
            	<label for="category">Select a Category</label>
            	<select name="category_id" id="category_id" class="form-control">
                     <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                      <option value="<?php echo e($category->id); ?>"
                          <?php if($posts->category->id == $category->id): ?>
                             selected 
                          <?php endif; ?>

                        ><?php echo e($category->name); ?></option>

                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>     
                  </select>
            </div>
            <div class="form-group">
               <label for="tags">Select Tag</label>
               <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   <div class="checkbox">
                     <label for=""><input name="tags[]" value="<?php echo e($tag->id); ?>" type="checkbox"
                         
                         <?php $__currentLoopData = $posts->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($tag->id == $t->id): ?>
                               checked 
                            <?php endif; ?>
                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                        ><?php echo e($tag->tag); ?></label>
                   </div>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    

            </div>
            <div class="form-group">
                  <label for="featured">Featured Image</label>
                  <input type="file" name="featured"  class="form-control">
            </div>


			 <div class="form-group">
            	<label for="body">Content</label>
            	<textarea name="body" id="body" cols="30" rows="10" placeholder="Enter your blog content" class="form-control"><?php echo e($posts->body); ?></textarea>
              
        </div>
            <div class="from-group">
            	 <div class="text-right">
            	 	<button class="btn btn-success" type="submit">Update Post</button>
            	 </div>
            </div>



      	</form>
      </div>

  </div>



<?php $__env->stopSection(); ?>


<?php $__env->startSection('styles'); ?>
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.css" rel="stylesheet">

<?php $__env->stopSection(); ?>




<?php $__env->startSection('scripts'); ?>
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.js"></script>

<script>
  
  $(document).ready(function() {
  $('#body').summernote();
});

</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>