<?php
 //   include_once('index.php');
    include_once('functions.php');
  ?>
  <section name="map" style="width: 100%;">

  <div id="googleMap" style="width:100%;height:500px;">
    <script>
    function myMap(){
  
        var uluru = {lat: <?php echo $lat; ?>, lng: <?php echo $lng; ?>};
  
      var map = new google.maps.Map(document.getElementById('googleMap'), {
        zoom: 13,
        center: uluru
      });
      var greenIcon = 'img/marker.png';
  
      var marker = new google.maps.Marker({position: uluru, map: map});

      var infowindow = new google.maps.InfoWindow({content:"I have finally found you!"});
      marker.infowindow = infowindow;
      marker.addListener('onmouseover', function() {
      return this.infowindow.open(map, this);
    });
  
  /*  function myFunction() {
  var x = document.getElementById("");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}*/

    google.maps.event.addListener(marker, 'mouseover', function() {
       this.infowindow.open(map, this);
    });
    }

      </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCikysarNLm6L-wRtg0CakgJAnxizWAnho&callback=myMap"></script>
    <script type="text/javascript">
  
        </div>
    </div>
  </div>
  </section>
 /*$get->AllInfo(); */



//  $unos = new Map();
//  $unos->getMap();

//  $unos2 = new Map();
//  $unos2->getMarker();

// echo $mapCoordinate = "var " . $ul ." = {lat: " . $latitude . ", lng: " . $longitude ."};" . '<br><br>';

 //echo $mapMarker = "var marker = new google.maps.Marker({ position: " . $ul . ", map: map, icon: greenIcon });";




