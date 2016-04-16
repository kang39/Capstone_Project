(function() {
	
	window.onload = function() {
		
		// Creating an object literal containing the properties
		// you want to pass to the map
				
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
				var distanceDiv2 = document.getElementById('distance2');
					var d2 = new google.maps.LatLng(39.163543, -86.499001);
					document.getElementById('distance2').innerHTML = (google.maps.geometry.spherical.computeDistanceBetween(devCenter, d2) / 1000).toFixed(2) + 'km';
					
				var distanceDiv3 = document.getElementById('distance3');
					var d3 = new google.maps.LatLng(39.166113, -86.526904);
					document.getElementById('distance3').innerHTML = (google.maps.geometry.spherical.computeDistanceBetween(devCenter, d3) / 1000).toFixed(2) + 'km';
					
				var distanceDiv7 = document.getElementById('distance7');
					var d7 = new google.maps.LatLng(39.154162, -86.492636);
					document.getElementById('distance7').innerHTML = (google.maps.geometry.spherical.computeDistanceBetween(devCenter, d7) / 1000).toFixed(2) + 'km';
					
				var distanceDiv8 = document.getElementById('distance8');
					var d8 = new google.maps.LatLng(39.171582, -86.510302);
					document.getElementById('distance8').innerHTML = (google.maps.geometry.spherical.computeDistanceBetween(devCenter, d8) / 1000).toFixed(2) + 'km';
					
			});
		}
		
		
		var marker1 = new google.maps.Marker({
			position: new google.maps.LatLng(39.165660, -86.498623),
			map: map,
			title: 'Starbucks 3rd St & 46 Bypass',
			icon: 'include/mapicon/green.png'
		});
		
		var marker2 = new google.maps.Marker({
			position: new google.maps.LatLng(39.167550, -86.523879),
			map: map,
			title: 'Starbucks-Indiana Memorial Union',
			icon: 'include/mapicon/green.png'
		});
		
		var marker3 = new google.maps.Marker({
			position: new google.maps.LatLng(39.161752, -86.494205),
			map: map,
			title: 'Starbucks-Target Bloomington',
			icon: 'include/mapicon/green.png'
		});
		
		var marker4 = new google.maps.Marker({
			position: new google.maps.LatLng(39.166113, -86.526904),
			map: map,
			title: 'Starbucks-Indiana University',
			icon: 'include/mapicon/green.png'
		});
		
		var marker5 = new google.maps.Marker({
			position: new google.maps.LatLng(39.168504, -86.573092),
			map: map,
			title: 'Starbucks-SR 48 & SR 37',
			icon: 'include/mapicon/green.png'
		});
			
		var marker12 = new google.maps.Marker({
			position: new google.maps.LatLng(39.171582, -86.510302),
			map: map,
			title: 'Red Mango',
			icon: 'include/mapicon/green.png'
		});
		
		var marker14 = new google.maps.Marker({
			position: new google.maps.LatLng(39.163543, -86.499001),
			map: map,
			title: 'Panera Bread',
			icon: 'include/mapicon/green.png'
		});
		
		var marker19 = new google.maps.Marker({
			position: new google.maps.LatLng(39.154162, -86.492636),
			map: map,
			title: "Stone Cutter's Cafe & Roastery",
			icon: 'include/mapicon/green.png'
		});
		
		// Creating an InfoWindow with a content text
		var infowindow1 = new google.maps.InfoWindow({
			content: 'Starbucks 3rd St & 46 Bypass'
		});
		
		var infowindow2 = new google.maps.InfoWindow({
			content: 'Starbucks-Indiana Memorial Union'
		});
		
		var infowindow3 = new google.maps.InfoWindow({
			content: 'Starbucks-Target Bloomington'
		});
		
		var infowindow4 = new google.maps.InfoWindow({
			content: 'Starbucks-Indiana University'
		});
		
		var infowindow5 = new google.maps.InfoWindow({
			content: 'Starbucks-SR 48 & SR 37'
		});
		
		var infowindow12 = new google.maps.InfoWindow({
			content: 'Red Mango'
		});
		
		var infowindow14 = new google.maps.InfoWindow({
			content: 'Panera Bread'
		});
		
		var infowindow19 = new google.maps.InfoWindow({
			content: "Stone Cutter's Cafe & Roastery"
		});
		
		// Adding a click event to a marker
		google.maps.event.addListener(marker1, 'click', function() {
			var content1 = '<div id="info1">' +
				'<img src="include/starbucks.jpg" alt="" />' +
				'<h2>Starbucks</h2>' +
				'<p>115 S SR 46 Bypass</p>' +
				'<p>5:00 AM - 11:00 PM</p>' +
				'<a href="http://cgi.soic.indiana.edu/~team11/starbucks.html">Starbucks 3rd St & 46 Bypass</a>' +
				'</div>';
			infowindow1.setContent(content1);
			// Calling the open method of the infowindow
			infowindow1.open(map, marker1);	
		});
		
		google.maps.event.addListener(marker2, 'click', function() {
			var content2 = '<div id="info2">' +
				'<img src="include/starbucks.jpg" alt="" />' +
				'<h2>Starbucks</h2>' +
				'<p>900 E 7th St</p>' +
				'<p>7:00 AM - 11:00PM</p>' +
				'<a href="http://cgi.soic.indiana.edu/~team11/starbucks.html">Starbucks-Indiana Memorial Union</a>' +
				'</div>';
			infowindow2.setContent(content2);
			infowindow2.open(map, marker2);
		});
		
		google.maps.event.addListener(marker3, 'click', function() {
			var content3 = '<div id="info3">' +
				'<img src="include/starbucks.jpg" alt="" />' +
				'<h2>Starbucks</h2>' +
				'<p>2966 E 3rd St</p>' +
				'<p>8:00AM - 9:00PM</p>' +
				'<a href="http://cgi.soic.indiana.edu/~team11/starbucks.html">Starbucks-Target Bloomington</a>' +
				'</div>';
			infowindow3.setContent(content3);
			infowindow3.open(map, marker3);
		});
		
		google.maps.event.addListener(marker4, 'click', function() {
			var content4 = '<div id="info4">' +
				'<img src="include/starbucks.jpg" alt="" />' +
				'<h2>Starbucks</h2>' +
				'<p>110 S Indiana Ave</p>' +
				'<p>6:00AM - 12:00AM</p>' +
				'<a href="http://cgi.soic.indiana.edu/~team11/starbucks.html">Starbucks-Indiana University</a>' +
				'</div>';
			infowindow4.setContent(content4);
			infowindow4.open(map, marker4);
		});

		google.maps.event.addListener(marker5, 'click', function() {
			var content5 = '<div id="info5">' +
				'<img src="include/starbucks.jpg" alt="" />' +
				'<h2>Starbucks</h2>' +
				'<p>284 N Jacob Dr</p>' +
				'<P>5:00AM - 11:00PM</p>' +
				'<a href="http://cgi.soic.indiana.edu/~team11/starbucks.html">Starbucks-SR 48 & SR 37</a>' +
				'</div>';
			infowindow5.setContent(content5);
			infowindow5.open(map, marker5);
		});
		
		google.maps.event.addListener(marker12, 'click', function() {
			var content12 = '<div id="info12">' +
				'<img src="include/redmango.jpg" alt="" />' +
				'<h2>Red Mango</h2>' +
				'<p>1793 E 10th St</p>' +
				'<p>12:00PM - 10:00PM</p>' +
				'<a href="http://cgi.soic.indiana.edu/~team11/redmango.html">Red Mango</a>' +
				'</div>';
			infowindow12.setContent(content12);
			infowindow12.open(map, marker12);
		});
		
		google.maps.event.addListener(marker14, 'click', function() {
			var content14 = '<div id="info14">' +
				'<img src="include/panerabread.jpg" alt="" />' +
				'<h2>Panera Bread</h2>' +
				'<p>322 S College Mall Rd</p>' +
				'<p>6:00AM - 10:00PM</p>' +
				'<a href="http://cgi.soic.indiana.edu/~team11/panera.html">Panera Bread</a>' +
				'</div>';
			infowindow14.setContent(content14);
			infowindow14.open(map, marker14);
		});
		
		google.maps.event.addListener(marker19, 'click', function() {
			var content19 = '<div id="info19">' +
				'<img src="include/stonecutters.jpg" alt="" />' +
				"<h2>Stone Cutter's Cafe</h2>" +
				'<p>3297 E Covenanter Dr</p>' +
				'<p>6:30AM - 4:00PM</p>' +
				"<a href='http://cgi.soic.indiana.edu/~team11/stone.html'>Stone Cutter's Cafe & Roastery</a>" +
				'</div>';
			infowindow19.setContent(content19);
			infowindow19.open(map, marker19);
		});
		
	};
	
}) ();