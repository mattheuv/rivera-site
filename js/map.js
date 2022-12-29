var map;
        var bolivar = {lat: 3.2651663, lng: -76.5375671};
        var sanJorge = {lat: 3.2636198, lng: -76.5381822};
        function initMap() {
          map = new google.maps.Map(document.getElementById('map'), {
            center: bolivar,
            zoom: 17
          });
          var marker = new google.maps.Marker({position: bolivar, map: map, title: "Bolivar"});
          var marker2 = new google.maps.Marker({position: sanJorge, map: map, title: "San Jorge"});
          marker.setMap(map);
          marker2.setMap(map);
        }

        

