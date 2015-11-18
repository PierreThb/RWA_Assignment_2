/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/* global google */

function Map() {

}

Map.prototype = {
    beforeLoad: function () {
    },
    afterLoad: function () {
        google.maps.event.trigger(this.map, 'resize');
    },
    loadMap: function () {
        var key = 'AIzaSyB4wcYndpXCDGPxRRm5r5yhIJOfoyE8Fi8',
                url = 'https://maps.googleapis.com/maps/api/geocode/json',
                myLatLng = {lat: 49.253306, lng: 4.033800}, origin,
                directionsService = new google.maps.DirectionsService,
                directionsDisplay = new google.maps.DirectionsRenderer;

        var image = {
            url: 'assets/images/bottle64.png',
            // This marker is 20 pixels wide by 32 pixels high.
            size: new google.maps.Size(64, 67),
            origin: new google.maps.Point(0, 0),
            anchor: new google.maps.Point(32, 64)
        };
        // Shapes define the clickable region of the icon. The type defines an HTML
        // <area> element 'poly' which traces out a polygon as a series of X,Y points.
        // The final coordinate closes the poly by connecting to the first coordinate.
        var shape = {
            coords: [16, 0, 64, 0, 48, 64, 0, 64],
            type: 'poly'
        };

        this.map = new google.maps.Map(document.getElementById('map_container'), {
            zoom: 10,
            center: myLatLng
        });


        var contentString = '<div id="content" style="color : black;" >' +
                '<img width="100" class="img-responsive" src="assets/images/bottle.png" />' +
                '</div>';

        var infowindow = new google.maps.InfoWindow({
            content: contentString
        });
        var marker = new google.maps.Marker({position: myLatLng,
            map: this.map,
            icon: image,
            shape: shape,
            title: 'Champagne houses quarters'
        });

        directionsDisplay.setMap(this.map);
        directionsDisplay.setPanel(document.getElementById('map_direction'));

        //marker.addListener('mouseover', addAnimation);
        marker.addListener('click', function () {
            infowindow.open(this.map, marker);
        });


        function travelFrom(formatedAdress) {
            directionsService.route({
                origin: formatedAdress,
                destination: new google.maps.LatLng(myLatLng.lat, myLatLng.lng),
                travelMode: google.maps.TravelMode.DRIVING
            }, function (response, status) {
                if (status === google.maps.DirectionsStatus.OK) {
                    directionsDisplay.setDirections(response);
                } else {
                    window.alert('Directions request failed due to ' + status);
                }
            });
        }

        google.maps.event.addListener(this.map, "click", function (event) {
            travelFrom(event.latLng);
        });


    }
};

window.map = new Map();

function initMap() {
    window.map.loadMap();
}