(function() {
  window.onload = function() {

var c = function(pos) {
			var lat = pos.coords.latitude,
				long = pos.coords.longitude,
				acc = pos.coords.accuracy,
				coords = lat + ', ' + long;
				
			document.getElementById('google_map').setAttribute('src', 'https://maps.google.com/?q=' + coords + '0&z=16&output=embed');
		}
		
		var e = function(error) {
			if (error.code === 1) {
				alert('Unable to get location');
			}
		}	
		
		document.getElementById('get_location').onclick = function() {
			navigator.geolocation.getCurrentPosition(c, e, {
				enableHighAccuracy: true,
			});
			return false;
		}
		
  }
})();