var map;
var markers = [];
function initialize() {
  var mapOptions = {
    zoom: 13,
    center: new google.maps.LatLng(-6.917464, 107.619123)
  };
  var myLatlng = new google.maps.LatLng(-6.917464,107.619123);
 
  map = new google.maps.Map(document.getElementById('map-canvas'),  mapOptions);

 addMarker(myLatlng);
 
}
function addMarker(location){
  var marker = new google.maps.Marker({
    position: location,
    map: map,
    title: 'Hello World!'
  });
  markers.push(marker);
}
function setAllMap(map) {
  for (var i = 0; i < markers.length; i++) {
    markers[i].setMap(map);
  }
}

$("#filter").on("click",function(){
    setAllMap(null);
    var haightAshbury = new google.maps.LatLng(-6.918801, 107.589283);
    addMarker(haightAshbury);
});
google.maps.event.addDomListener(window, 'load', initialize);


 
