<?php
 //   include_once('index.php');
    include_once('functions.php');
  ?>

   <!-- #googleMap {
  position: relative;
  z-index: 1;
}

#googleMap > #googleMap::before {
  content: '';
  position: absolute;
  z-index: 999;
  background-color: red;
  height: 100%;
  width: 30%;

  transform: translateY(-50%);
}  -->
  <section name="map" style="width: 100%;">
  <div id="googleMap" style="width:100%;height:500px;">
    <script>
    function myMap(){
  
        var uluru = {lat: <?php echo $lat; ?>, lng: <?php echo $lng; ?>};
  
      var map = new google.maps.Map(document.getElementById('googleMap'), {
        zoom: 1.2,
        center: uluru,
        mapTypeControl: false,
        draggable: false,
        scaleControl: false,
        scrollwheel: false,
        navigationControl: false,
        streetViewControl: false,
        disableDefaultUI: true,
        styles : [
  {
    "elementType": "labels",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "administrative",
    "elementType": "geometry",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "administrative.land_parcel",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "administrative.neighborhood",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "landscape",
    "stylers": [
      {
        "color": "#a0a1a3"
      }
    ]
  },
  {
    "featureType": "poi",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "road",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "labels.icon",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "transit",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "water",
    "stylers": [
      {
        "color": "#ca7272"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#fcf3f4"
      }
    ]
  }
]
      });
      var customMarker = 'img/home.png';
  
      var marker = new google.maps.Marker({position: uluru, map: map, icon: customMarker});

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

    google.maps.event.addListener(marker, 'click', function() {
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




