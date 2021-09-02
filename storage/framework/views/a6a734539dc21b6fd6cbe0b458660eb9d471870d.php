<?php $__env->startSection('content'); ?>


<div class="stunning-header stunning-header-bg-lightviolet">
    <div class="stunning-header-content">
        <h1 class="stunning-header-title"><?php echo e($post->title); ?></h1>
    </div>
</div>


<div class="container">
    <div class="row medium-padding120">
        <main class="main">
            <div class="col-lg-10 col-lg-offset-1">
                <article class="hentry post post-standard-details">

                    <div class="post-thumb">
                        <img src="<?php echo e($post->featured); ?>" alt="<?php echo e($post->title); ?>">
                    </div>

                    <div class="post__content">


                        <div class="post-additional-info">

                            

                            <span class="post__date">

                                <i class="seoicon-clock"></i>

                                <time class="published" datetime="2016-03-20 12:00:00">
                                    <?php echo e($post->created_at->toFormattedDateString()); ?>

                                </time>

                            </span>

                            <span class="category">
                                <i class="seoicon-tags"></i>
                                <a href="<?php echo e(route('category.single',['id'=>$post->category->id])); ?>"><?php echo e($post->category->name); ?></a>
                              
                            </span>

                        </div>

                        <div class="post__content-info">
                               

                               <?php echo $post->body; ?>

                           
                        

                           <div class="widget w-tags">
                                <div class="tags-wrap">
                                	<?php $__currentLoopData = $post->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a href="<?php echo e(route('tag.single',['id'=>$tag->id])); ?>" class="w-tags-item"><?php echo e($tag->tag); ?></a>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="socials text-center">Share:
                        <!-- Go to www.addthis.com/dashboard to customize your tools --> <div class="addthis_inline_share_toolbox_jd8q"></div>
                    </div>

                </article>

                <div class="blog-details-author">

                    <div class="blog-details-author-thumb">

                    </div>

                    <div class="blog-details-author-content">
                        <div class="author-info">
                            <h5 class="author-name"><?php echo e($post->user->name); ?></h5>
                            
                        </div>

                        <div class="socials">



                        </div>
                    </div>
                </div>

                <div class="pagination-arrow">

                              <?php if($prev): ?>
                                    <a href="<?php echo e(route('post.single', ['slug' => $prev->slug ])); ?>" class="btn-next-wrap">
                                          <div class="btn-content">
                                          <div class="btn-content-title">Next Post</div>
                                          <p class="btn-content-subtitle"><?php echo e($prev->title); ?></p>
                                          </div>
                                          <svg class="btn-next">
                                          <use xlink:href="#arrow-right"></use>
                                          </svg>
                                    </a>
                              <?php endif; ?>

                              <?php if($next): ?>
                                    <a href="<?php echo e(route('post.single', ['slug' => $next->slug ])); ?>" class="btn-prev-wrap">
                                          <svg class="btn-prev">
                                          <use xlink:href="#arrow-left"></use>
                                          </svg>
                                          <div class="btn-content">
                                          <div class="btn-content-title">Previous Post</div>
                                          <p class="btn-content-subtitle"><?php echo e($next->title); ?></p>
                                          </div>
                                    </a>
                              <?php endif; ?>

                        </div>


                <div class="comments">


                </div>

                <div class="row">

                </div>


            </div>

            <!-- End Post Details -->

            <!-- Sidebar-->

            <div class="col-lg-12">
                <aside aria-label="sidebar" class="sidebar sidebar-right">
                    <div  class="widget w-tags">
                        <div class="heading text-center">
                            <h4 class="heading-title">ALL BLOG TAGS</h4>
                            <div class="heading-line">
                                <span class="short-line"></span>
                                <span class="long-line"></span>
                            </div>
                        </div>

                        <div class="tags-wrap">

                        	<?php $__currentLoopData = $post->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a href="<?php echo e(route('tag.single',['id'=>$tag->id])); ?>" class="w-tags-item"><?php echo e($tag->tag); ?></a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
                        </div>
                    </div>
                </aside>
            </div>




            <!-- End Sidebar-->

        </main>
    </div>
</div>
<!-- form-->




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>