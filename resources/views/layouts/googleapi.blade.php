    
    <?php 

    	$googleAPIKey = config('services.google.key');

    ?>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key={{ $googleAPIKey }}&callback=initMap">
    </script>