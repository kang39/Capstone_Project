		var getDistance = function(p1, p2) {
		  var R = 6378137; // Earth’s mean radius in meter
		  var dLat = rad(p2.lat(39.165660) - p1.lat(39.167550));
		  var dLong = rad(p2.lng(-86.498623) - p1.lng(-86.523879));
		  var a = Math.sin(dLat / 2) * Math.sin(dLat / 2) +
			Math.cos(rad(p1.lat(39.167550))) * Math.cos(rad(p2.lat(39.165660))) *
			Math.sin(dLong / 2) * Math.sin(dLong / 2);
		  var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
		  var d = R * c;
		  return d; // returns the distance in meter
		};
