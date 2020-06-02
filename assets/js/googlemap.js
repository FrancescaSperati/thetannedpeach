// Initialize and add the map
function initMap() {
  // The location of AIT
  var ait = {lat: -37.818188, lng: 144.954208};

  // The map, centered at AIT
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 13, center: ait});
    
  // The marker, positioned at AIT
  var marker = new google.maps.Marker({position: ait, map: map});


marker.setMap(map);
    
}
 