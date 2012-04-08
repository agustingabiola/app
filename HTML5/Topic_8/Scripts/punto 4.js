/* 
 * Show location punto 4
 */
var initialLocation;
var mdq = new google.maps.LatLng(-38, -57.55);
var map;
var infowindow = new google.maps.InfoWindow();

var mapOptions = {
      zoom: 8,
      center: mdq,
      mapTypeId: google.maps.MapTypeId.ROADMAP
};

$("#geoLocation").click( function (){
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(showPosition, onError);
    } else {
      onError();
    }

    function showPosition(position) {
      map = new google.maps.Map(document.getElementById("Gmap"), mapOptions);
      
      var lat = position.coords.latitude;
      var lng = position.coords.longitude;
      
      initialLocation = new google.maps.LatLng(lat, lng);
      map.setCenter(initialLocation);
      infowindow.setContent("You are here:<br/>lat: "+lat + "<br/>" +"lng: " +lng);
      infowindow.setPosition(initialLocation);
      infowindow.open(map);
    }

    function onError() {
      if (navigator.geolocation) {
          initialLocation = mdq;
          contentString = "Error: The Geolocation service failed.";
      } else {
          initialLocation = mdq;
          contentString = "Error: Your browser doesn't support geolocation.";
      }
      mapOptions.zoom = 4;
      map = new google.maps.Map(document.getElementById("Gmap"), mapOptions);
      map.setCenter(initialLocation);
      infowindow.setContent(contentString);
      infowindow.setPosition(initialLocation);
      infowindow.open(map);
    }
});





