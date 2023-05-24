<?php $__env->startSection('title', 'ChapsChat'); ?>

<?php $__env->startSection('content'); ?>


<div class="container d-flex justify-content-center align-items-center vh-100" style="margin-top:-10%;">
    <div class="row justify-content-center">
        <div class="col-md-12 m-3 mx-auto mt-5">
            <h2 class="lead mb-5">OFFICEX Feedback-Form</h2>
            <?php if(auth()->guard()->guest()): ?>
            <h4 class="lead">Login or Register To start Survey!</h4>  
            <?php endif; ?>

            <?php if(auth()->guard()->check()): ?>
            <div class="text-center pt-3">
                <a class="nav-link <?php echo e((request()->is('/')) ? 'active' : ''); ?>" aria-current="page" href="<?php echo e(url('/feedback')); ?>">
                    <button class="btn btn-lg btn-primary">
                        Umfrage Wiederholen
                    </button>
                </a>
            </div>
            <?php endif; ?>
            <div class="text-center mt-3">
                <ul class="navbar-nav me-auto">
                    <?php if(Route::has('login')): ?>
                    <?php if(auth()->guard()->check()): ?>
                    <li class="nav-item">
                        <a href="<?php echo e(url('/home')); ?>" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    </li>            
                    <?php else: ?>
                    <li class="nav-item">
                        <a href="<?php echo e(route('login')); ?>" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
                    </li>
                    <?php if(Route::has('register')): ?>
                    <li class="nav-item">
                        <a href="<?php echo e(route('register')); ?>" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                    </li>
                    <?php endif; ?>
                    <?php endif; ?>
                    <?php endif; ?>
                </ul>
            </div>
            
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/welcome.blade.php ENDPATH**/ ?>