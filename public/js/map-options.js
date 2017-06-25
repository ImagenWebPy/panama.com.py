(function(window, mapster) {

	mapster.MAP_OPTIONS = {
    center: {
      lat: 37.791350,
      lng: -122.435883
    },
    zoom: 14,
    disableDefaultUI: true,
    scrollwheel: false,
    draggable: false,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    zoomControlOptions: {
    	position: google.maps.ControlPosition.LEFT_BOTTOM,
    	style: google.maps.ZoomControlStyle.DEFAULT
    },
    panControlOptions: {
    	position: google.maps.ControlPosition.LEFT_BOTTOM
    }
  };

}(window, window.Mapster || (window.Mapster = {})));