(function() {
  window.onload = function() {

    // Creating a map
    var options = {
      zoom: 16,
      center: new google.maps.LatLng(39.166107, -86.526934),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    var map = new google.maps.Map(document.getElementById('map'), options);

	var Starbucks_IU = new google.maps.LatLng(39.166107, -86.526934);
	var Starbucks_IMU = new google.maps.LatLng(39.167876, -86.524164);
	var Starbucks_B = new google.maps.LatLng(39.165677, -86.498640);
	var Starbucks_J = new google.maps.LatLng(39.168504, -86.573092);
	var Starbucks_W = new google.maps.LatLng(39.145492, -86.531586);
	var Starbucks_C = new google.maps.LatLng(39.161752, -86.494205);
	var Soma_3rd = new google.maps.LatLng(39.163889, -86.516263);
	var Soma_d = new google.maps.LatLng(39.166187, -86.529961);
	var ThePourHouseCafe = new google.maps.LatLng(39.166342, -86.53072);
	var RuncibleSpoon = new google.maps.LatLng(39.167327, -86.529073);

    // Creating the marker
    var marker = new google.maps.Marker({
      position: Starbucks_IU,
      map: map,
    });
	var marker = new google.maps.Marker({
		position: Starbucks_IMU,
		map: map,
	});
	var marker = new google.maps.Marker({
		position: Starbucks_B,
		map: map,
	});
	var marker = new google.maps.Marker({
		position: Starbucks_J,
		map: map,
	});
	var marker = new google.maps.Marker({
		position: Starbucks_W,
		map: map,
	});
	var marker = new google.maps.Marker({
		position: Starbucks_C,
		map: map,
	});
	var marker = new google.maps.Marker({
		position: Soma_3rd,
		map: map,
	});
	var marker = new google.maps.Marker({
		position: Soma_d,
		map: map,
	});
	var marker = new google.maps.Marker({
		position: ThePourHouseCafe,
		map: map,
	});
	var marker = new google.maps.Marker({
		position: RuncibleSpoon,
		map: map,
	});

  }
})();

