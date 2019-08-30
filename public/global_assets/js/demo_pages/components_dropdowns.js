/* ------------------------------------------------------------------------------
*
*  # Dropdown menus
*
*  Demo JS code for components_dropdowns.html page
*
* ---------------------------------------------------------------------------- */

document.addEventListener('DOMContentLoaded', function() {

	// Styled checkboxes/radios
	$('.styled').uniform();


	// Switchery toggles
	var toggle = Array.prototype.slice.call(document.querySelectorAll('.switchery'));
	
	toggle.forEach(function(html) {
		var switchery = new Switchery(html);
    });

});
