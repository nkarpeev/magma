  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC7EyWO0-ocuXmv-k8h3SIE8_UybiJWpQ8&amp;callback=initMap" defer=""></script>
  <script>
    function initMap() {

        var address        = {lat: 55.781257, lng: 49.115040},
            centerMap      = {lat: 55.781257, lng: 49.115040},
            addressDom     = {lat: 55.854709, lng: 49.017377},
            centerMapDom   = {lat: 55.854709, lng: 49.017377}, 
            zoom           = 15,
            marker         = '/img/svg/marker.svg',
            title          = 'КамаСтройИнвест',
            markerDom      = '/img/svg/marker.svg',
            titleDom       = 'Казань, ул. Тэцевская 201, оф. 203',
            text           = "on",

            accent         = "#CC9933",
            main           = "#01C2D2",
            mainDark       = "#336699",

            administrative = "#000000"  // Граница
            landscape      = "#EBE3CD", // Земля
            poi            = "#DFD2AE", // Земля
            water          = "#60B5C4",  // Вода
            street         = "#FFFFFF", // Улицы
            road           = '#FFFFFF',    // Дороги
            highway        = "#FFFFFF",    // Шоссе
            transit        = accent,    // Железная дорога 
            textStreet     = "#000000", // Текст
            textStroke     = "#ffffff"; // Обводка текста

        // var map = new google.maps.Map(document.getElementById('contact-map'), {
        //     center: centerMap,
        //     scrollwheel: false,
        //     mapTypeControl: false,
        //     zoom: zoom,
        // });
        
        var mapDom = new google.maps.Map(document.getElementById('map'), {
            center: centerMapDom,
            scrollwheel: false,
            mapTypeControl: false,
            zoom: zoom,
        });
        
        var imageDom = new google.maps.MarkerImage( markerDom,      
            new google.maps.Size(45, 60),      
            new google.maps.Point(0, 0),      
            new google.maps.Point(22.5, 30));

        var markerDom = new google.maps.Marker({
            map: mapDom,
            position: addressDom,
            title: titleDom,
            icon: imageDom,
        });
        
        // var image = new google.maps.MarkerImage( marker,      
        //     new google.maps.Size(60, 90),      
        //     new google.maps.Point(0, 0),      
        //     new google.maps.Point(0, 90));

        // var marker = new google.maps.Marker({
        //     map: map,
        //     position: address,
        //     title: title,
        //     icon: image,
        // });
        
        var mapOptions     = {styles:

            [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#ca2031"}]},{"featureType":"administrative.province","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"all","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","elementType":"all","stylers":[{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"all","stylers":[{"saturation":-100},{"lightness":30},{"visibility":"on"}]},{"featureType":"road.local","elementType":"all","stylers":[{"saturation":-100},{"lightness":40},{"visibility":"on"}]},{"featureType":"transit","elementType":"all","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":-25},{"saturation":-100}]}]
        };
        mapDom.setOptions(mapOptions);
        // map.setOptions(mapOptions);

        };
  </script>