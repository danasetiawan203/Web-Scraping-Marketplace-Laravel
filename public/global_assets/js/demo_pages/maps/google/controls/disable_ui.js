/* ------------------------------------------------------------------------------
*
*  # Disable default UI
*
*  Demo JS code for maps_google_controls.html page
*
*  Version: 1.0
*  Latest update: Aug 1, 2015
*
* ---------------------------------------------------------------------------- */

document.addEventListener('DOMContentLoaded', function() {

	// Initialize
	function initialize() {

		// Options
		var mapOptions = {
			zoom: 12,
			center: new google.maps.LatLng(48.858, 2.347),
			disableDefaultUI: true
		}

		// Apply options
		var map = new google.maps.Map($('.map-ui-disabled')[0], mapOptions);
	}

	// Load map
	google.maps.event.addDomListener(window, 'load', initialize);

});
