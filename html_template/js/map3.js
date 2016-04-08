(function() {
	
	window.onload = function() {
		
		// Creating an object literal containing the properties
		// you want to pass to the map
		var mapDiv = document.getElementById('map');
		
		var latlng = new google.maps.LatLng(39.164371, -86.509417);
		var options = {
			zoom: 14,
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
				var marker0 = new google.maps.Marker({
					position: devCenter,
					map: map,
					icon: 'include/mapicon/my.png',
					animation: google.maps.Animation.BOUNCE
				});
			});
		}
		
		
		var marker17 = new google.maps.Marker({
			position: new google.maps.LatLng(39.170302, -86.536090),
			map: map,
			title: "Bub's Burger & Ice Cream",
			icon: 'include/mapicon/pink.png'
		});
		
		var marker18 = new google.maps.Marker({
			position: new google.maps.LatLng(39.162750, -86.501890),
			map: map,
			title: "McAlister's Deli",
			icon: 'include/mapicon/pink.png'
		});
		
		// Creating an InfoWindow with a content text
		var infowindow17 = new google.maps.InfoWindow({
			content: "Bub's Burger & Ice Cream"
		});
		
		var infowindow18 = new google.maps.InfoWindow({
			content: "McAlister's Deli"
		});

		// Adding a click event to a marker
		
		google.maps.event.addListener(marker17, 'click', function() {
			var content17 = '<div id="info17">' +
				'<img src="include/bubs.jpg" alt="" />' +
				"<h2>Bub's Burger</h2>" +
				'<p>480 N Morton St</p>' +
				'<p>11:00AM - 10:00PM</p>' +
				"<a href='http://cgi.soic.indiana.edu/~team11/bubs.html'>Bub's Burger & Ice Cream</a>" +
				'</div>';
			infowindow17.setContent(content17);
			infowindow17.open(map, marker17);
		});
		
		google.maps.event.addListener(marker18, 'click', function() {
			var content18 = '<div id="info18">' +
				'<img src="include/mcalisters.jpg" alt="" />' +
				"<h2>McAlister's Deli</h2>" +
				'<p>2510 E 3rd St</p>' +
				'<p>10:30AM - 9:30PM</p>' +
				"<a href='http://cgi.soic.indiana.edu/~team11/mcalister.html'>McAlister's Deli</a>" +
				'</div>';
			infowindow18.setContent(content18);
			infowindow18.open(map, marker18);
		});
		
		
	};
	
}) ();