
// Note: This example requires that you consent to location sharing when
// prompted by your browser. If you see the error "The Geolocation service
// failed.", it means you probably did not give permission for the browser to
// locate you.

var map, infoWindow;

  if (typeof draggable == 'undefined') {
    var draggable = true;
  };

  if (typeof zoomable == 'undefined') {
    var zoomable = true;
  };

  if (typeof postPos == 'undefined') {
    var postPos = {lat: -34.397, lng: 150.644};
  };

function initMap() {
  
  map = new google.maps.Map(document.getElementById('map'), {
    center: postPos,
    zoom: 18 ,
    draggable: draggable,
    scrollwheel: zoomable,
  });
  infoWindow = new google.maps.InfoWindow;

  // Try HTML5 geolocation.
  if (navigator.geolocation && postPos.lat == -34.397) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var pos = {
        lat: position.coords.latitude,
        lng: position.coords.longitude
      };

      map.setCenter(pos);

      var marker = new google.maps.Marker({
        position: pos,
        map: map,
        draggable: draggable
      });


      if (document.getElementById('postLat') != null ) {
        document.getElementById('postLat').value = marker.getPosition().lat();
        document.getElementById('postLng').value = marker.getPosition().lng();
        

        google.maps.event.addListener(marker , 'position_changed' , function() {

          document.getElementById('postLat').value = marker.getPosition().lat();
          document.getElementById('postLng').value = marker.getPosition().lng();

        })
      }


    }, function() {
      handleLocationError(true, infoWindow, map.getCenter());
    });


  } else if (postPos.lat != -34.397) {
      
      var marker = new google.maps.Marker({
        position: postPos,
        map: map,
        draggable: draggable
      });


  } else {
    // Browser doesn't support Geolocation
    handleLocationError(false, infoWindow, map.getCenter());
  }
}

function handleLocationError(browserHasGeolocation, infoWindow, pos) {
  infoWindow.setPosition(pos);
  infoWindow.setContent(browserHasGeolocation ?
                        'Error: The Geolocation service failed.' :
                        'Error: Your browser doesn\'t support geolocation.');
  infoWindow.open(map);
}