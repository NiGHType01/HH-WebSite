<?php
$hostname = 'localhost'; 
$dbname = 'db'; // Your database name.
$username = 'root'; // Your database username.
$password = ''; // Your database password. If your database has no password, leave it empty.
mysql_connect("$hostname", "$username", "$password") or DIE("Connection to host is  failed, perhaps the service is down!");
mysql_select_db("$dbname") or DIE("database not available");

$loc = "N1433.704483,E12100.012501";
?>

<!DOCTYPE html>
<html> 
<head> 
<meta http-equiv="content-type" content="text/html; charset=UTF-8" /> 
<title>DLTI Locator</title> 
<script src="http://maps.google.com/maps/api/js?sensor=false" 
      type="text/javascript"></script>
</head> 
 <body>
<div id="map" style="width: 500px; height: 500px;"></div>

<script type="text/javascript">



var locations = [
  ['Bondi Beach', latitude,longitude ],



var map = new google.maps.Map(document.getElementById('map'), {
  zoom: 10,
  center: new google.maps.LatLng(14.5833, 120.9667),
  mapTypeId: google.maps.MapTypeId.ROADMAP
});

var infowindow = new google.maps.InfoWindow();

var marker, i;

for (i = 0; i < locations.length; i++) {  
  marker = new google.maps.Marker({
    position: new google.maps.LatLng(locations[i][1], locations[i][2]),
    map: map
  });

  google.maps.event.addListener(marker, 'click', (function(marker, i) {
    return function() {
      infowindow.setContent(locations[i][0]);
      infowindow.open(map, marker);
    }
  })(marker, i));
}
</script>


</body>
</html>