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
					title: 'My Location',
					icon: 'include/mapicon/my.png',
					animation: google.maps.Animation.BOUNCE
				});
				// Distance
				var distanceDiv1 = document.getElementById('distance1');
					var d1 = new google.maps.LatLng(39.166254, -86.530078);
					document.getElementById('distance1').innerHTML = (google.maps.geometry.spherical.computeDistanceBetween(devCenter, d1) / 1000).toFixed(2) + 'km';
					
				var distanceDiv6 = document.getElementById('distance6');
					var d6 = new google.maps.LatLng(39.162781, -86.53342);
					document.getElementById('distance6').innerHTML = (google.maps.geometry.spherical.computeDistanceBetween(devCenter, d6) / 1000).toFixed(2) + 'km';
					
				var distanceDiv9 = document.getElementById('distance9');
					var d9 = new google.maps.LatLng(39.166342, -86.530272);
					document.getElementById('distance9').innerHTML = (google.maps.geometry.spherical.computeDistanceBetween(devCenter, d9) / 1000).toFixed(2) + 'km';
			});
		}
		
		var marker6 = new google.maps.Marker({
			position: new google.maps.LatLng(39.166254, -86.530078),
			map: map,
			title: 'Soma-Downtown Bloomington',
			icon: 'include/mapicon/blue.png'
		});	
		
		var marker7 = new google.maps.Marker({
			position: new google.maps.LatLng(39.163986, -86.516127),
			map: map,
			title: 'Soma-3rd Bloomington',
			icon: 'include/mapicon/blue.png'
		});
		
		var marker8 = new google.maps.Marker({
			position: new google.maps.LatLng(39.166342, -86.530272),
			map: map,
			title: 'The Pour House Cafe',
			icon: 'include/mapicon/blue.png'
		});
		
		var marker13 = new google.maps.Marker({
			position: new google.maps.LatLng(39.162781, -86.533425),
			map: map,
			title: 'Chocolate Moose',
			icon: 'include/mapicon/blue.png'
		});
		
		// Creating an InfoWindow with a content text

		var infowindow6 = new google.maps.InfoWindow({
			content: 'Soma-Downtown Bloomington'
		});
		
		var infowindow7 = new google.maps.InfoWindow({
			content: 'Soma-3rd Bloomington'
		});
		
		var infowindow8 = new google.maps.InfoWindow({
			content: 'The Pour House Cafe'
		});
		
		var infowindow13 = new google.maps.InfoWindow({
			content: 'Chocolate Moose'
		});

		// Adding a click event to a marker
		google.maps.event.addListener(marker6, 'click', function() {
			var content6 = '<div id="info6">' +
				'<img src="include/soma.jpg" alt="" />' +
				'<h2>Soma</h2>' +
				'<p>322 E Kirkwood Ave</p>' +
				'<p>6:30AM - 10:00PM</p>' +
				'<a href="http://cgi.soic.indiana.edu/~team11/soma.html">Soma-Downtown Bloomington</a>' +
				'</div>';
			infowindow6.setContent(content6);
			infowindow6.open(map, marker6);
		});
		
		google.maps.event.addListener(marker7, 'click', function() {
			var content7 = '<div id="info7">' +
				'<img src="include/soma.jpg" alt="" />' +
				'<h2>Soma</h2>' +
				'<p>1400 E 3rd St</p>' +
				'<p>6:00AM - 9:00PM</p>' +
				'<a href="http://cgi.soic.indiana.edu/~team11/soma.html">Soma-3rd Bloomington</a>' +
				'</div>';
			infowindow7.setContent(content7);
			infowindow7.open(map, marker7);
		});
		
		google.maps.event.addListener(marker8, 'click', function() {
			var content8 = '<div id="info8">' +
				'<img src="include/thepourhousecafe.jpg" alt="" />' +
				'<h2>The Pour House Cafe</h2>' +
				'<p>314 E Kirkwood Ave</p>' +
				'<p>8:00AM - 9:00PM</p>' +
				'<a href="http://cgi.soic.indiana.edu/~team11/pourhouse.html">The Pour House Cafe</a>' +
				'</div>';
			infowindow8.setContent(content8);
			infowindow8.open(map, marker8);
		});
		google.maps.event.addListener(marker13, 'click', function() {
			var content13 = '<div id="info13">' +
				'<img src="include/ChocoMoose.png" alt="" />' +
				'<h2>Chocolate Moose</h2>' +
				'<p>401 S Walnut St</p>' +
				'<p>11:00AM - 11:00PM</p>' +
				'<a href="http://cgi.soic.indiana.edu/~team11/chocomoose.html">Chocolate Moose</a>' +
				'</div>';
			infowindow13.setContent(content13);
			infowindow13.open(map, marker13);
		});
		
	};
	
}) ();