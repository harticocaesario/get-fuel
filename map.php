<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Get Fuel - Cari SPBU di sekitar Anda</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/getfuel2.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/main.css" />
    <style>
       /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      .controls {
        margin-top: 10px;
        border: 1px solid transparent;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        height: 32px;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
      }

      #pac-input {
        background-color: #fff;
        margin-top: 16px;
        font-family: Roboto;
        font-size: 14px;
        font-weight: 300;
        margin-left: 64px;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 500px;

      }

      #pac-input:focus {
        border-color: #FF462E;
      }

      .pac-container {
        font-family: Roboto;
      }

      #type-selector {
        color: #fff;
        background-color: #FF462E;
        padding: 5px 11px 0px 11px;
      }

      #type-selector label {
        font-family: Roboto;
        font-size: 13px;
        font-weight: 300;
      }
      #target {
        width: 345px;
      }

        .info-box{
            background-color: white;
            width: 400px;
            /*padding: 20px;*/
            margin: 50px;
            margin-top: 380px;
            z-index: 98;  
            position: absolute; 
        }

        .cek-box{
            width: 600px;
            /*padding: 20px;*/
            margin: 50px;
            margin-top: 100px;
            z-index: 98;  
            position: absolute; 
        }

        table{
            background-color: white;
            table-layout: fixed;
            width: 400px;
        }

        th, td {
            /*overflow: hidden;*/
            width: 200px;
        }

    </style>
</head>
<body>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
<!--
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php"><img src="assets/logo-getfuel.png" style="height: 50px"/></a>
    </div>
            <button id="my-location" input onclick="getData()" ><img src="assets/button-my-location.png"></button>
  

      </div>
    </form>
  </div>
</nav> -->
<!--
    <div class="container">
        <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php"><img src="assets/logo-getfuel.png" style="height: 40px"/></a>
                </div>
                
                <div class="col-md-6">
                <form class="navbar-form" role="search">
                    <div class="searchBar">
                        <input id="pac-input" class="form-control" type="text" placeholder="Search Box">
                     <div class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                        </div>
                    </div> 
                </form>
                </div>
                   <!-- 
                  <div class="col-md-2">
                        <label style="font-size:30px"><a href="index.php"><img src="assets/logo_getfuel.png" style="height: 40px"/>
                    </div>
                    <div class="col-md-4">
                        <div id="search-box">
                            <input id="pac-input" class="controls" type="text" placeholder="Search Box">
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
-->
<!--
    <div class="container">
        <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header col-md-12">
                    <div class="col-md-2">
                        <label style="font-size:30px"><a href="index.php"><img src="assets/logo_getfuel.png" style="height: 40px"/> </label>                            
                    </div>
                                        
                 
                </div>

            </div>
        </nav>

    </div> -->
    <div class="container">
        <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header col-md-12">
                    <div class="col-md-2">
                        <label style="font-size:30px"><img src="assets/logo-getfuel.png" style="height: 40px; margin-top: 10px"/> </label><a href="index.php"></a>
                    </div>
                    
                    <div class="col-md-4" style="left: 350px; margin-top: 15px">   
                        <button id="my-location" input onclick="getData()" ><img src="assets/button-my-location.png"></button>
                    </div>

                    <div class="col-md-5" style="left: 550px; margin-top: 15px">
                            <label style="font-size:10px"><a href="logout.php">LOG OUT </a></label>
                    </div>                      
                </div>

            </div>
        </nav>

    </div>

    <div class="home">

    <!--    <div class="sidebar">
            <div id="search-box">
                <input id="pac-input" class="controls" type="text" placeholder="Search Box">
            </div>
        </div> -->
        <div class="search-box">

            <input id="pac-input" class="controls" type="text"  placeholder=" enter gas station name, or location " >
        </div>

        <div class="cek-box"> 
                    <button input onclick="showCB()" >Filter</button>
                    <div id="check-box" style="display: none;">
                        <form action="map.php" method="get">
                        <TABLE>
                            <tr>
                                <td>
                                    <input type="checkbox" name="vehicle" value="Bike">Pertamina<br>
                                    <input type="checkbox" name="vehicle" value="Car">Shell<br>
                                </td>
                                <td>
                                    <input type="checkbox" name="vehicle" value="Bik">Pertamax<br>
                                    <input type="checkbox" name="vehicle" value="Ca">Pertamina Dex<br>
                                    <input type="checkbox" name="vehicle" value="Bi">Premium<br>
                                    <input type="checkbox" name="vehicle" value="C">Pertalite<br>
                                    <input type="checkbox" name="vehicle" value="B">Dexlite<br>
                                    <input type="checkbox" name="vehicle" value="Cr">Bio Solar<br>
                                </td>
                                <td>
                                    <input type="submit" value="Submit">
                                </td>
                            </tr>
                        </TABLE>
                        </form>                        
                    </div> 

                    <script>
                        function showCB() {
                            if(document.getElementById('check-box').style.display == "block"){
                                document.getElementById('check-box').style.display = "none";
                            }
                            else{
                                document.getElementById('check-box').style.display = "block";
                            }
                        }
                    </script>    
        </div>

        <div class="info-box">

            <select id='purpose'>
                <option selected disabled>Fuel Type</option>
                <option value="0">Pertamina</option>
                <option value="1">Shell</option>
                <option value="2">Total</option>
            </select>

            <div style='display:none;' id='pertamina'>
                <table>
                    <tr>
                        <td>Pertamax Plus<br>Pertamax<br>Pertalite</td>
                        <td>Rp. 10.000<br>Rp. 9.000<br>Rp. 8.000</td>
                    </tr>
                </table>
            </div>

            <div style='display:none;' id='shell'>
                <table>
                    <tr>
                        <td>a<br>b<br>c</td>
                        <td>Rp. 10.000<br>Rp. 9.000<br>Rp. 8.000</td>
                    </tr>
                </table>
            </div>

            <div style='display:none;' id='total'>
                <table>
                    <tr>
                        <td>d<br>e<br>f</td>
                        <td>Rp. 10.000<br>Rp. 9.000<br>Rp. 8.000</td>
                    </tr>
                </table>
            </div>

            <script>
                $(document).ready(function(){
                    $('#purpose').on('change', function() {
                        $("#pertamina").hide();
                        $("#shell").hide();
                        $("#total").hide();
                      if ( this.value == '0')
                      {
                        $("#pertamina").show();
                      }
                      else if ( this.value == '1')
                      {
                        $("#shell").show();
                      }
                      else if ( this.value == '2')
                      {
                        $("#total").show();
                      }
                    });
                });
            </script>
        </div>



        <div id="map">             

        </div>

        <div id="side">                  
            <div id="dvDistance">                    
            </div>
            <div id="dvPanel">                
            </div>                
        </div> 
    </div>
    <script>
        var markers = [];
        var global;
        var startLat;
        var startLong;
        var map;
        var tmp;
        var radius = 4;
        function initAutocomplete() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: -6.4025, lng: 106.7942},
                zoom: 16,
                mapTypeId: 'roadmap'
            });
            var opt = {minZoom: 14, maxZoom: 17};
            map.setOptions(opt);
            var infoWindow = new google.maps.InfoWindow({map: map});
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function (position) {
                    var pos = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };
                    global = position;
                    startLat = position.coords.latitude;
                    startLong = position.coords.longitude;
                    var icons = 'assets/loc64.png';
                    infoWindow.setPosition(pos);
                    infoWindow.setContent('Your Location');
                    map.setCenter(pos);
                    var marker = new google.maps.Marker({
                        map: map,
                        position: pos,
                        icon: icons,
                    });
                }, function () {
                    /*handleLocationError(true, infoWindow, map.getCenter());*/
                });
            } else {
                    // Browser doesn't support Geolocation
                    /*handleLocationError(false, infoWindow, map.getCenter());*/
                }

//               
                // Create the search box and link it to the UI element.
                var input = document.getElementById('pac-input');
                var searchBox = new google.maps.places.SearchBox(input);
                map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

                // Bias the SearchBox results towards current map's viewport.
                map.addListener('bounds_changed', function () {
                    searchBox.setBounds(map.getBounds());
                });

                var markers = [];
                // Listen for the event fired when the user selects a prediction and retrieve
                // more details for that place.
                searchBox.addListener('places_changed', function () {
                    var places = searchBox.getPlaces();
                    if (places.length == 0) {
                        return;
                    }

                    // Clear out the old markers.
                    markers.forEach(function (marker) {
                        marker.setMap(null);
                    });
                    markers = [];

                    // For each place, get the icon, name and location.
                    var bounds = new google.maps.LatLngBounds();
                    places.forEach(function (place) {
                        if (!place.geometry) {
                            console.log("Returned place contains no geometry");
                            return;
                        }
                        startLat = place.geometry.location.lat();
                        startLong = place.geometry.location.lng();
                        var icon = {
                            url: place.icon,
                            size: new google.maps.Size(71, 71),
                            origin: new google.maps.Point(0, 0),
                            anchor: new google.maps.Point(17, 34),
                            scaledSize: new google.maps.Size(25, 25)
                        };

                        // Create a marker for each place.
                        markers.push(new google.maps.Marker({
                            map: map,
                            icon: icon,
                            title: place.name,
                            position: place.geometry.location
                        }));
                        if (place.geometry.viewport) {
                            // Only geocodes have viewport.
                            bounds.union(place.geometry.viewport);
                        } else {
                            bounds.extend(place.geometry.location);
                        }
                    });
                    map.fitBounds(bounds);
                });
            }

            function handleLocationError(browserHasGeolocation, infoWindow, pos) {
                infoWindow.setPosition(pos);
                infoWindow.setContent(browserHasGeolocation ?
                    'Error: The Geolocation service failed.' :
                    'Error: Your browser doesn\'t support geolocation.');
            }

            function directionFunction(lat, long) {
                var iconstart = 'assets/loc64.png';
                var iconfinish = 'assets/hsp64.png';
                var infoWindow = new google.maps.InfoWindow({map: map});
                var pointA = new google.maps.LatLng(startLat, startLong),
                pointB = new google.maps.LatLng(lat, long),
                myOptions = {
                    zoom: 15,
                    center: pointA
                },
                map = new google.maps.Map(document.getElementById('map'), myOptions),
                        // Instantiate a directions service.
                        directionsService = new google.maps.DirectionsService,
                        directionsDisplay = new google.maps.DirectionsRenderer({
                            map: map
                        }),
                        markerA = new google.maps.Marker({
                            position: pointA,
                            title: "Your Location",
                            map: map,
                            icon: iconstart
                        }),
                        markerB = new google.maps.Marker({
                            position: pointB,
                            title: "Destination",
                            map: map,
                            icon: iconfinish
                        });

                        var opt = {minZoom: 14, maxZoom: 17};
                        map.setOptions(opt);
                //directionsDisplay.setMap(map);                
                var string = "https://maps.googleapis.com/maps/api/directions/json?origin=" + startLat + "," + startLong + "&destination=" + lat + "," + long + "&key=AIzaSyDnx6V7Xv10H-bjBbjmMRyldc2qq7x72NQ";

                $.getJSON(string, function (data) {
                    tmp = data;
                });

                // get route from A to B
                calculateAndDisplayRoute(directionsService, directionsDisplay, pointA, pointB);
                showDiv()
            }

            function calculateAndDisplayRoute(directionsService, directionsDisplay, pointA, pointB) {
                directionsDisplay.setPanel(document.getElementById('dvPanel'));
                directionsService.route({
                    origin: pointA,
                    destination: pointB,
                    travelMode: google.maps.TravelMode.DRIVING
                }, function (response, status) {
                    if (status == google.maps.DirectionsStatus.OK) {
                        directionsDisplay.setDirections(response);
                        var distance = tmp.routes[0].legs[0].distance.text;
                        var duration = tmp.routes[0].legs[0].duration.text;
                        //console.log(distance, duration)
                        var dvDistance = document.getElementById("dvDistance");
                        dvDistance.innerHTML += "<div style='width:100%;background-color:white;font-size: 20px;padding:10px;text-align:center;'>Distance : " + distance + "<br>Duration : " + duration + "<br><br><a href='map.php' class='btn btn-primary'>Exit Direction Mode</a></div>";
                    } else {
                        window.alert('Directions request failed due to ' + status);
                    }
                });

            }

            function showDiv() {
                var x = document.getElementById("side");
                var y = document.getElementById("dvDistance");
                x.style.visibility = "visible";
                y.style.visibility = "visible";
            }

            function getData() {
                deleteMarkers();
                markers = [];                
                var count = 0;
                $.getJSON("data.json", function (json) {
                    var i = 0;
                    for (var key in json) {
                        if (json.hasOwnProperty(key)) {
                            var icons = 'assets/hsp64.png';
                            var geoLat = json[key].geometry.location.lat;
                            var geoLng = json[key].geometry.location.lng;
                            var distance = Math.round(getDistance(geoLat, geoLng, startLat, startLong)).toFixed(2);                            
                            var content =
                            "<div style='width:280px;'><h4>" + json[key].name + "</h4>\n\
                            <p>" + json[key].formatted_address + "</p><p style='text-align:center;color:grey'>" + geoLat + " , " + geoLng +
                            "<h3 style='text-align:center;margin-top:-10px'>+- "+distance+" km</h3><p style='text-align:center'><button class='btn btn-primary' onclick='directionFunction(" + geoLat + "," + geoLng + ")'>Direction</button></p>";

                            var infowindow = new google.maps.InfoWindow()
                            infowindow.open();                            
                            if (distance < radius) {
                                var marker = new google.maps.Marker({
                                    map: map,
                                    position: new google.maps.LatLng(json[key].geometry.location.lat, json[key].geometry.location.lng),
                                    icon: icons,
                                });
                                markers.push(marker);
                                count += 1;
                                google.maps.event.addListener(marker, 'click', (function (marker, content, infowindow) {
                                    return function () {
                                        infowindow.setContent(content);
                                        infowindow.open(map, marker);
                                    };
                                })(marker, content, infowindow));
                            }
                        }
                    }
                    if (count < 1) {
                        alert("Tidak Ditemukan SPBU Terdekat");
                    } else {
                        alert("Ditemukan " + count + " SPBU di Sekitar Anda")
                    }                    
                });
                deleteMarkers();
            }

            function clearMarkers() {
                setMapOnAll(null);
            }

            function deleteMarkers() {
                clearMarkers();
                markers = [];
            }

            function setMapOnAll(map) {
                for (var i = 0; i < markers.length; i++) {
                  markers[i].setMap(map);
              }
          }

          function getDistance(p1, p2, p3, p4) {
            var R = 6378137;
            //console.log(p1, p2, p3, p4);
            var dLat = rad(p1 - p3);
            var dLong = rad(p2 - p4);
            var a = Math.sin(dLat / 2) * Math.sin(dLat / 2) +
            Math.cos(rad(p1)) * Math.cos(rad(p3)) *
            Math.sin(dLong / 2) * Math.sin(dLong / 2);
            var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
            var d = (R * c) / 1000;;
                //console.log(a, c, d);
                return d;
            }

            var rad = function (x) {
                return x * Math.PI / 180;
            };

        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnx6V7Xv10H-bjBbjmMRyldc2qq7x72NQ&libraries=places&callback=initAutocomplete"
        async defer></script> 

    </body>

    </html>