    
    <?php 

    	$googleAPIKey = config('services.google.key');

    ?>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=<?php echo e($googleAPIKey); ?>&callback=initMap">
    </script>