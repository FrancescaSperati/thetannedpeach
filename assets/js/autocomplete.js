var placeSearch, autocomplete;

function initAutocomplete() {
  autocomplete = new google.maps.places.Autocomplete(
      /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
      {types: ['geocode']});
  autocomplete.setComponentRestrictions( {'country': 'au'});
  autocomplete.addListener('place_changed', fillInAddress);
}

function fillInAddress() {
  var place = autocomplete.getPlace();

  var address = '';
  
  for (var i = 0; i < place.address_components.length; i++) {
    var addressType = place.address_components[i].types[0];
    switch (addressType){
      case 'subpremise':
        address = place.address_components[i]['short_name'] + '/' + address;
      break;
      case 'street_number':
        address = address + place.address_components[i]['short_name'] + ' ';
      break;
      case 'route':
        address += place.address_components[i]['long_name'];
      break;
      case 'locality':
        document.getElementById('suburb').value = place.address_components[i]['long_name'];
      break;
      case 'administrative_area_level_1':
        document.getElementById('region').value = place.address_components[i]['short_name'];
      break;
      case 'country':
        document.getElementById('country').value = place.address_components[i]['long_name'];
      break;
      case 'postal_code':
        document.getElementById('postal_code').value = place.address_components[i]['short_name'];
      break;
    }
  }
  
  document.getElementById('address').value = address;
  $('#address').trigger("change");
  
  jQuery('#locationField').slideUp();
  jQuery('#form').slideDown();
  
}

function geolocate() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var geolocation = {
        lat: position.coords.latitude,
        lng: position.coords.longitude
      };
      var circle = new google.maps.Circle({
        center: geolocation,
        radius: position.coords.accuracy
      });
      autocomplete.setBounds(circle.getBounds());
    });
  }
}