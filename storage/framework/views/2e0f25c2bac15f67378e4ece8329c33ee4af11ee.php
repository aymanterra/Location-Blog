<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>



    <!-- Main Content -->
    <div class="container">

        <div class="form-group share">
            <a href="/posts/create" class="btn btn-info">Share Your Location</a>
        </div>
        
        <br>
        <br>
        <br>
        
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="post-preview">
                        <a href="/posts/<?php echo e($post->id); ?>">
                            <h2 class="post-title">
                                <?php echo e($post->title); ?>

                            </h2>
                            <h3 class="post-subtitle">
                                <?php echo e($post->subtitle); ?>

                            </h3>
                        </a>
                        <p class="post-meta">
                            Posted by 
                            <a href="#"><?php echo e($post->user->name); ?></a> 
                            on <?php echo e($post->created_at->toFormattedDateString()); ?>

                        </p>
                    </div>
                    <hr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        <a href="#">Older Posts &rarr;</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        var draggable = false ; 
        var zoomable = false ;
    </script>
    
    <?php echo $__env->make('layouts.googleapi', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>