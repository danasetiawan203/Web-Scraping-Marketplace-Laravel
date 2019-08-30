/* ------------------------------------------------------------------------------
*
*  # Media objects and lists
*
*  Demo JS code for components_media.html page
*
* ---------------------------------------------------------------------------- */

document.addEventListener('DOMContentLoaded', function() {

	// Switchery toggles
	var elems = Array.prototype.slice.call(document.querySelectorAll('.switch'));

	elems.forEach(function(html) {
		var switchery = new Switchery(html);
	});


    // Styled checkboxes/radios
	$(".styled").uniform();

});
