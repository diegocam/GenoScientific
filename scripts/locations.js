function initialize() {
  var myLatlng = new google.maps.LatLng(40.541207, -74.395216);
  var mapCanvas = document.getElementById('map-canvas');
  var mapOptions = {
    center: myLatlng,
    zoom: 15,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  }
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({
    position: myLatlng,
    map: map
  });
  var infowindow = new google.maps.InfoWindow({
    content: "GenoScientific Molecular Diagnostics Laboratory"
  });
  google.maps.event.addListener(marker, 'click', function() {
   infowindow.open(map,marker);
 });
  infowindow.open(map,marker);
}
google.maps.event.addDomListener(window, 'load', initialize);