(function() {
	
	window.onload = function() {
		
		// Creating an object literal containing the properties
		// you want to pass to the map
		var mapDiv = document.getElementById('map');
		
		var latlng = new google.maps.LatLng(39.164371, -86.509417);
		var options = {
			zoom: 16,
			mapTypeId: google.maps.MapTypeId.ROADMAP,
			draggableCursor: 'move',
			draggingCursor: 'move',
			streetViewControl: true,
			disableDoubleClickZoom: false,
			draggable: true,
			scaleControl: true,
			scrollwheel: true,
			navigationControl: true,
			disableDefaultUI: false,
			navigationControl: true,
			mapTypeControl: true,
			mapTypeControlOptions: {
				style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
				position: google.maps.ControlPosition.TOP_LEFT,
				mapTypeIds: [
					google.maps.MapTypeId.ROADMAP,
					google.maps.MapTypeId.SATELLITE
				]
			}	
		};
		
		// Creating the map
		 var map = new google.maps.Map(document.getElementById('map'), options);
		 
		 if (navigator.geolocation) {
			navigator.geolocation.getCurrentPosition(
			function(position) {
				var lat = position.coords.latitude;
				var lng = position.coords.longitude;
				// Creating LatLng object with latitude and longitude.
				var devCenter = new google.maps.LatLng(lat, lng);
				map.setCenter(devCenter);
			});
		}		
		
		// Creating an array that will contain the coordinates
		var places = [];
		
		// Adding a LatLng object for each store
		places.push(new google.maps.LatLng(39.165660, -86.498623));
		places.push(new google.maps.LatLng(39.167772, -86.522478));
		places.push(new google.maps.LatLng(39.161752, -86.494205));
		
		var marker1 = new google.maps.Marker({
			position: places[0],
			map: map,
			title: 'Starbucks 3rd St & 46 Bypass',
			animation: google.maps.Animation.BOUNCE			
		});
			
				// Creating an InfoWindow with a content text
		var infowindow1 = new google.maps.InfoWindow({
			content: 'Starbucks 3rd St & 46 Bypass'
		});
		
		// Adding a click event to a marker
		google.maps.event.addListener(marker1, 'click', function() {
			// Calling the open method of the infowindow
			infowindow1.open(map, marker1);
		});

		
	};
	
}) ();