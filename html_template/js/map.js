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
				var marker0 = new google.maps.Marker({
					position: devCenter,
					map: map,
					icon: 'http://gmaps-samples.googlecode.com/svn/trunk/markers/blue/blank.png',
					animation: google.maps.Animation.BOUNCE
				});
			});
		}
		
		
		var marker1 = new google.maps.Marker({
			position: new google.maps.LatLng(39.165660, -86.498623),
			map: map,
			title: 'Starbucks 3rd St & 46 Bypass',
			icon: 'http://gmaps-samples.googlecode.com/svn/trunk/markers/orange/blank.png'
		});
		
		var marker2 = new google.maps.Marker({
			position: new google.maps.LatLng(39.167550, -86.523879),
			map: map,
			title: 'Starbucks-Indiana Memorial Union',
			icon: 'http://gmaps-samples.googlecode.com/svn/trunk/markers/red/blank.png'
		});
		
		var marker3 = new google.maps.Marker({
			position: new google.maps.LatLng(39.161752, -86.494205),
			map: map,
			title: 'Starbucks-Target Bloomington',
			icon: 'http://gmaps-samples.googlecode.com/svn/trunk/markers/circular/greencirclemarker.png'
		});
		
		var marker4 = new google.maps.Marker({
			position: new google.maps.LatLng(39.166113, -86.526904),
			map: map,
			title: 'Starbucks-Indiana University',
			icon: 'http://gmaps-samples.googlecode.com/svn/trunk/markers/circular/greencirclemarker.png'
		});
		
		var marker5 = new google.maps.Marker({
			position: new google.maps.LatLng(39.168504, -86.573092),
			map: map,
			title: 'Starbucks-SR 48 & SR 37',
			icon: 'http://gmaps-samples.googlecode.com/svn/trunk/markers/circular/greencirclemarker.png'
		});
			
		var marker6 = new google.maps.Marker({
			position: new google.maps.LatLng(39.166254, -86.530078),
			map: map,
			title: 'Soma-Downtown Bloomington',
			icon: 'http://gmaps-samples.googlecode.com/svn/trunk/markers/red/blank.png'
		});	
		
		var marker7 = new google.maps.Marker({
			position: new google.maps.LatLng(39.163986, -86.516127),
			map: map,
			title: 'Soma-3rd Bloomington',
			icon: 'http://gmaps-samples.googlecode.com/svn/trunk/markers/orange/blank.png'
		});
		
		var marker8 = new google.maps.Marker({
			position: new google.maps.LatLng(39.166342, -86.530272),
			map: map,
			title: 'The Pour House Cafe',
			icon: 'http://gmaps-samples.googlecode.com/svn/trunk/markers/orange/blank.png'
		});
		
		var marker9 = new google.maps.Marker({
			position: new google.maps.LatLng(39.171848, -86.529589),
			map: map,
			title: 'Revolution Bike & Bean',
			icon: 'http://gmaps-samples.googlecode.com/svn/trunk/markers/circular/greencirclemarker.png'
		});
		
		var marker10 = new google.maps.Marker({
			position: new google.maps.LatLng(39.167327, -86.529073),
			map: map,
			title: 'Runcible Spoon',
			icon: 'http://gmaps-samples.googlecode.com/svn/trunk/markers/circular/greencirclemarker.png'
		});
		
		var marker11 = new google.maps.Marker({
			position: new google.maps.LatLng(39.166365, -86.532873),
			map: map,
			title: 'Blu Boy Chocolate Cafe & Cakery',
			icon: 'http://gmaps-samples.googlecode.com/svn/trunk/markers/circular/greencirclemarker.png'
		});
		
		var marker12 = new google.maps.Marker({
			position: new google.maps.LatLng(39.171582, -86.510302),
			map: map,
			title: 'Red Mango',
			icon: 'http://gmaps-samples.googlecode.com/svn/trunk/markers/circular/greencirclemarker.png'
		});
		
		var marker13 = new google.maps.Marker({
			position: new google.maps.LatLng(39.162781, -86.533425),
			map: map,
			title: 'Chocolate Moose',
			icon: 'http://gmaps-samples.googlecode.com/svn/trunk/markers/orange/blank.png'
		});
		
		var marker14 = new google.maps.Marker({
			position: new google.maps.LatLng(39.163543, -86.499001),
			map: map,
			title: 'Panera Bread',
			icon: 'http://gmaps-samples.googlecode.com/svn/trunk/markers/orange/blank.png'
		});
		
		var marker15 = new google.maps.Marker({
			position: new google.maps.LatLng(39.167401, -86.535228),
			map: map,
			title: 'Scholars Inn Bake House',
			icon: 'http://gmaps-samples.googlecode.com/svn/trunk/markers/circular/greencirclemarker.png'
		});
		
		var marker16 = new google.maps.Marker({
			position: new google.maps.LatLng(39.156178, -86.496994),
			map: map,
			title: 'Bloomington Bagel Company',
			icon: 'http://gmaps-samples.googlecode.com/svn/trunk/markers/circular/greencirclemarker.png'
		});
		
		var marker17 = new google.maps.Marker({
			position: new google.maps.LatLng(39.170302, -86.536090),
			map: map,
			title: 'Bub's Burger & Ice Cream',
			icon: 'http://gmaps-samples.googlecode.com/svn/trunk/markers/circular/greencirclemarker.png'
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
		
		var infowndow17 = new google.maps.InfoWindow({
			content: 'Bub's Burger & Ice Cream'
		});
		
		// Adding a click event to a marker
		google.maps.event.addListener(marker1, 'click', function() {
			// Calling the open method of the infowindow
			infowindow1.open(map, marker1);
		});
		
		google.maps.event.addListener(marker2, 'click', function() {
			infowindow2.open(map, marker2);
		});
		
		google.maps.event.addListener(marker3, 'click', function() {
			infowindow3.open(map, marker3);
		});
		
		google.maps.event.addListener(marker4, 'click', function() {
			infowindow4.open(map, marker4);
		});

		google.maps.event.addListener(marker5, 'click', function() {
			infowindow5.open(map, marker5);
		});
		
		google.maps.event.addListener(marker6, 'click', function() {
			infowindow6.open(map, marker6);
		});
		
		google.maps.event.addListener(marker7, 'click', function() {
			infowindow7.open(map, marker7);
		});
		
		google.maps.event.addListener(marker8, 'click', function() {
			infowindow8.open(map, marker8);
		});
		
		google.maps.event.addListener(marker9, 'click', function() {
			infowindow9.open(map, marker9);
		});
		
		google.maps.event.addListener(marker10, 'click', function() {
			infowindow10.open(map, marker10);
		});
		
		google.maps.event.addListener(marker11, 'click', function() {
			infowindow11.open(map, marker11);
		});
		
		google.maps.event.addListener(marker12, 'click', function() {
			infowindow12.open(map, marker12);
		});
		
		google.maps.event.addListener(marker13, 'click', function() {
			infowindow13.open(map, marker13);
		});
		
		google.maps.event.addListener(marker14, 'click', function() {
			infowindow14.open(map, marker14);
		});
		
		google.maps.event.addListener(marker15, 'click', function() {
			infowindow15.open(map, marker15);
		});
		
		google.maps.event.addListener(marker16, 'click', function() {
			infowindow16.open(map, marker16);
		});
		
		google.maps.event.addListener(marker17, 'click', function() {
			infowindow17.open(map, marker17);
		});
		
	};
	
}) ();