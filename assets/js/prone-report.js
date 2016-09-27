var markers = [];

var map = new google.maps.Map(document.getElementById('map'), {
zoom: 9,
center: new google.maps.LatLng(14.8302664,121.1126421),
mapTypeId: google.maps.MapTypeId.ROADMAP
});

var locations_prone = prone;


var infowindow = new google.maps.InfoWindow();
var marker, i;


for (i = 0; i < locations_prone.length; i++) {
  marker = new google.maps.Marker({
    icon: 'http://maps.google.com/mapfiles/ms/icons/red-dot.png',
    position: new google.maps.LatLng(locations_prone[i][0], locations_prone[i][1]),
    map: map
  });

  google.maps.event.addListener(marker, 'click', (function(marker, i) {
    return function() {
      infowindow.setContent("<b>Latitude: "+locations_prone[i][0]+"<br>Longitude: "+locations_prone[i][1]+"<br>Messagew: "+locations_prone[i][2]+"</b>");
      infowindow.open(map, marker);
    }
  })(marker, i));
    markers.push(marker);

}
