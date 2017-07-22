<?php $__env->startSection('content'); ?>

	<div id="map"></div>

	<div class="container">
    
        <div class="row">
	
			<div class="col-sm-8 blog-main">

				<h1>Share Your Location</h1>

				<hr>

				<form method="post" action="/posts">

					<?php echo e(csrf_field()); ?>


				  <div class="form-group">
				    <label for="postTitle">Title :</label>
				    <input type="text" class="form-control" id="postTitle" name="title">
				  </div>

				  <div class="form-group">
				    <label for="postSubtitle">Sub-Title :</label>
				    <input type="text" class="form-control" id="postSubtitle" name="subtitle">
				  </div>

				  <div class="form-group">
				    <label for="postBody">Body :</label>
				    <textarea class="form-control" id="postBody" name="body"></textarea>
				  </div>

				  <div class="form-group">
				    <label for="postLat">Lat :</label>
				    <input type="text" class="form-control" id="postLat" name="lat">
				  </div>

				  <div class="form-group">
				    <label for="postLng">Lng :</label>
				    <input type="text" class="form-control" id="postLng" name="lng">
				  </div>

				  <div class="form-group">
					  <button type="submit" class="btn btn-primary">Share</button>
				  </div>

				  

				  <?php echo $__env->make('layouts.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


				</form>
				
			</div>

		</div>

	</div>

	<script type="text/javascript">
        // var draggable = false ; 
        var zoomable = false ;
    </script>

	<?php echo $__env->make('layouts.googleapi', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>