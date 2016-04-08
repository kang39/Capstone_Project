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
		
		var marker9 = new google.maps.Marker({
			position: new google.maps.LatLng(39.171848, -86.529589),
			map: map,
			title: 'Revolution Bike & Bean',
			icon: 'include/mapicon/noservice.png'
		});
		
		var marker10 = new google.maps.Marker({
			position: new google.maps.LatLng(39.167327, -86.529073),
			map: map,
			title: 'Runcible Spoon',
			icon: 'include/mapicon/noservice.png'
		});
		
		var marker11 = new google.maps.Marker({
			position: new google.maps.LatLng(39.166365, -86.532873),
			map: map,
			title: 'Blu Boy Chocolate Cafe & Cakery',
			icon: 'include/mapicon/noservice.png'
		});
		
		var marker12 = new google.maps.Marker({
			position: new google.maps.LatLng(39.171582, -86.510302),
			map: map,
			title: 'Red Mango',
			icon: 'include/mapicon/green.png'
		});
		
		var marker13 = new google.maps.Marker({
			position: new google.maps.LatLng(39.162781, -86.533425),
			map: map,
			title: 'Chocolate Moose',
			icon: 'include/mapicon/blue.png'
		});
		
		var marker14 = new google.maps.Marker({
			position: new google.maps.LatLng(39.163543, -86.499001),
			map: map,
			title: 'Panera Bread',
			icon: 'include/mapicon/green.png'
		});
		
		var marker15 = new google.maps.Marker({
			position: new google.maps.LatLng(39.167401, -86.535228),
			map: map,
			title: 'Scholars Inn Bake House',
			icon: 'include/mapicon/noservice.png'
		});
		
		var marker16 = new google.maps.Marker({
			position: new google.maps.LatLng(39.156178, -86.496994),
			map: map,
			title: 'Bloomington Bagel Company',
			icon: 'include/mapicon/noservice.png'
		});
		
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
		
		var infowindow6 = new google.maps.InfoWindow({
			content: 'Soma-Downtown Bloomington'
		});
		
		var infowindow7 = new google.maps.InfoWindow({
			content: 'Soma-3rd Bloomington'
		});
		
		var infowindow8 = new google.maps.InfoWindow({
			content: 'The Pour House Cafe'
		});
		
		var infowindow9 = new google.maps.InfoWindow({
			content: 'Revolution Bike & Bean'
		});
		
		var infowindow10 = new google.maps.InfoWindow({
			content: 'Runcible Spoon'
		});
		
		var infowindow11 = new google.maps.InfoWindow({
			content: 'Blu Boy Chocolate Cafe & Cakery'
		});
		
		var infowindow12 = new google.maps.InfoWindow({
			content: 'Red Mango'
		});
		
		var infowindow13 = new google.maps.InfoWindow({
			content: 'Chocolate Moose'
		});
		
		var infowindow14 = new google.maps.InfoWindow({
			content: 'Panera Bread'
		});
		
		var infowindow15 = new google.maps.InfoWindow({
			content: 'Scholars Inn Bake House'
		});
		
		var infowindow16 = new google.maps.InfoWindow({
			content: 'Bloomington Bagel Company'
		});
		
		var infowindow17 = new google.maps.InfoWindow({
			content: "Bub's Burger & Ice Cream"
		});
		
		var infowindow18 = new google.maps.InfoWindow({
			content: "McAlister's Deli"
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
		
		google.maps.event.addListener(marker9, 'click', function() {
			var content9 = '<div id="info9">' +
				'<img src="include/revolution.jpg" alt="" />' +
				'<h2>Revolution Bike & Bean</h2>' +
				'<p>401 E 10th St</p>' +
				'<p>10:00AM - 6:00PM</p>' +
				'<a href="http://cgi.soic.indiana.edu/~team11/store.html">Revolution Bike & Bean</a>' +
				'</div>';
			infowindow9.setContent(content9);
			infowindow9.open(map, marker9);
		});
		
		google.maps.event.addListener(marker10, 'click', function() {
			var content10 = '<div id="info10">' +
				'<img src="include/runcible.jpg" alt="" />' +
				'<h2>Runcible Spoon</h2>' +
				'<p>425 E 6th St</p>' +
				'<p>8:00AM - 10:00PM</p>' +
				'<a href="http://cgi.soic.indiana.edu/~team11/store.html">Runcible Spoon</a>' +
				'</div>';
			infowindow10.setContent(content10);
			infowindow10.open(map, marker10);
		});
		
		google.maps.event.addListener(marker11, 'click', function() {
			var content11 = '<div id="info11">' +
				'<img src="include/bluboy.png" alt="" />' +
				'<h2>Blu Boy</h2>' +
				'<p>112 E Kirkwood Ave</p>' +
				'<p>10:00AM - 10:00PM</p>' +
				'<a href="http://cgi.soic.indiana.edu/~team11/store.html">Blue Boy Chocolate Cafe & Cakery</a>' +
				'</div>';
			infowindow11.setContent(content11);
			infowindow11.open(map, marker11);
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
		
		google.maps.event.addListener(marker15, 'click', function() {
			var content15 = '<div id="info15">' +
				'<img src="include/scholarsinnbakehouse.jpg" alt="" />' +
				'<h2>Scholars Inn Bakehouse</h2>' +
				'<p>125 N College Ave</p>' +
				'<p>7:30AM - 9:00PM</p>' +
				'<a href="http://cgi.soic.indiana.edu/~team11/store.html">Scholars Inn Bakehouse</a>' +
				'</div>';
			infowindow15.setContent(content15);
			infowindow15.open(map, marker15);
		});
		
		google.maps.event.addListener(marker16, 'click', function() {
			var content16 = '<div id="info16">' +
				'<img src="include/bloomingtonbagelco.gif" alt="" />' +
				'<h2>Bloomington Bagel Co</h2>' +
				'<p>113 N Dunn St</p>' +
				'<p>6:00AM - 7:00PM</p>' +
				'<a href="http://cgi.soic.indiana.edu/~team11/store.html">Bloomington Bagel Company</a>' +
				'</div>';
			infowindow16.setContent(content16);
			infowindow16.open(map, marker16);
		});
		
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