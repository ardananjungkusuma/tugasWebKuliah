<!DOCTYPE html>
<html>
    <head><title>Maps Bootstrap</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <script src="assets/js/bootstrap.bundle.js"></script>
        <style>
            .imgMe {
                height: 300px;
                background: #aaa;
            }
        </style>
    </head>
    <body>
        <header>
            <nav id="webMaps" class="navbar-dark bg-dark" style="padding-left:16px;">
                <a href="ardananjungkusuma.blogspot.com" target="_blank" class="navbar-brand">
                    <img src="img/group.png" alt="logo" width="30px" height="30px"> Ardan Maps
                </a>
            </nav>
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="color: black;">
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="indexBoot.html" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                                <a href="mapsBoot.html" class="nav-link">Maps</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.freecodecamp.org/" class="nav-link">Free Code Camp</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <main>
            <div class="container" style="padding: 20px;">
                <div class="row">
                    <div class="col-lg-12" style="padding-left: 20px;" style="width: 1200px;">
                        <h1>Address</h1>
                            <div id="map" style="width:100%;height:380px"></div>
                                <script>
                                function initMap() {
                                    var mapOptions = {
                                        zoom: 10,
                                        center: new google.maps.LatLng(-8.5830695,116.3202515),
                                        mapTypeId: 'roadmap'
                                    };
                                    var map = new google.maps.Map(document.getElementById('map'), mapOptions);

                                    var lombok = {lat:-8.5830695,lng: 116.3202515};
                                    var marker = new google.maps.Marker({
                                        position: lombok,
                                        map: map,
                                        title: 'Lombok'
                                });
                                    var contentString = '<h2>Hello Dunia!</h2>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    marker.addListener('click', function() {
                                        infowindow.open(map, marker);
                                    });
                                }
                                </script>
                                <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDNRP3dQJiaOL6zIMr-PidUiql5SqGX51o&callback=initMap"></script>  
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>