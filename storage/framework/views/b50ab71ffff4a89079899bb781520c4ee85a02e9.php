<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('css/toastr.min.css')); ?>">

     <?php echo $__env->yieldContent('styles'); ?>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                        <?php echo e(config('app.name', 'Laravel')); ?>

                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <li><a href="<?php echo e(route('login')); ?>">Login</a></li>
                            <li><a href="<?php echo e(route('register')); ?>">Register</a></li>
                        <?php else: ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="<?php echo e(route('logout')); ?>"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                            <?php echo e(csrf_field()); ?>

                                        </form>
                                    </li>
                                </ul>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

         <div class="container">
             <div class="row">

                <?php if(auth::check()): ?>

                 <div class="col-lg-4">
                     <ul class="list-group">

                        <li class="list-group-item">
                            <a href="<?php echo e(route('home')); ?>">Home</a>
                        </li>

                         <li class="list-group-item">
                             <a href="<?php echo e(route('post.create')); ?>">Create a new post</a>
                         </li>
                         <li class="list-group-item">
                             <a href="<?php echo e(route('category.create')); ?>">Create a new category</a>
                         </li>
                         <li class="list-group-item">
                             <a href="<?php echo e(route('categories')); ?>">All categories</a>
                         </li>
                         <li class="list-group-item">
                             <a href="<?php echo e(route('tag.create')); ?>">Create a new tag</a>
                         </li>
                         <li class="list-group-item">
                             <a href="<?php echo e(route('tags')); ?>">All tags</a>
                         </li> 
                    
                         <li class="list-group-item">
                             <a href="<?php echo e(route('posts')); ?>">All posts</a>
                         </li>
                        <li class="list-group-item">
                             <a href="<?php echo e(route('posts.trashed')); ?>">All trashed posts</a>
                         </li>

                         <?php if(Auth::user()->admin): ?>
                         <li class="list-group-item">
                             <a href="<?php echo e(route('users')); ?>">Users</a>
                         </li>
                         <li class="list-group-item">
                             <a href="<?php echo e(route('user.create')); ?>">Create a new user</a>
                         </li>

                         <?php endif; ?>

                          <li class="list-group-item">
                             <a href="<?php echo e(route('user.profile')); ?>">My profile</a>
                         </li>


                         <?php if(Auth::user()->admin): ?>

                          <li class="list-group-item">
                             <a href="<?php echo e(route('settings')); ?>">Blog settings</a>
                         </li>
                         <?php endif; ?>

                     </ul>
                 </div>

                 <?php endif; ?>

                 <div class="col-lg-8">

                       
                     <?php echo $__env->yieldContent('content'); ?>
                 </div>
             </div>
         </div>

        
    </div>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
    <script src="<?php echo e(asset('js/toastr.min.js')); ?>"></script>

     <script>
          <?php if(Session::has('success')): ?>
                toastr.success("<?php echo e(Session::get('success')); ?>")
          <?php endif; ?>
          <?php if(Session::has('info')): ?>
                toastr.info("<?php echo e(Session::get('info')); ?>")
          <?php endif; ?>
     </script>

     <?php echo $__env->yieldContent('scripts'); ?>
</body>
</html>
