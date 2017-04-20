function getPlaces(getUrl){
    return $.getJSON(getUrl).then(function(data){
        return data['features'];
    });
}

function initMap() {

    locations = [];
    var myOptions = {
        zoom: 7,
    };

    getPlaces('/json.php').then(function(places){

        $.each(places, function(i, place) {
            var arr = [];
            arr[0] = '"'+place.id+'"';
            arr[1] = place.geometry.coordinates[1];
            arr[2] = place.geometry.coordinates[0];

            $.each(place.properties, function(key, val){
                arr[3] += '<p><b>'+key+':</b> '+val+'</p>';
            });
            locations.push(arr);
        });

        var map = new google.maps.Map( document.getElementById("map"), myOptions);
        setMarkers(map,locations);
    });
}

function setMarkers(map,locations){

    var marker, i;

    for (i = 0; i < locations.length; i++)
    {

        var id = locations[i][0]
        var lat = locations[i][1]
        var long = locations[i][2]
        var bubble =  locations[i][3]

        var marker = new google.maps.Marker({
            map: map, title: id , position: new google.maps.LatLng(lat, long)
        });
        map.setCenter(marker.getPosition())


        var content = "<label>ID: " + id +  '</label>' + bubble;

        var infowindow = new google.maps.InfoWindow()

        google.maps.event.addListener(marker,'click', (function(marker,content,infowindow){
        return function() {
            infowindow.setContent(content);
            infowindow.open(map,marker);
        };
        })(marker,content,infowindow));
    }
}
