/* ------------------------------------------------------------------------------
*
*  # Horizontal mega menu
*
*  Demo JS code for navigation_horizontal_mega.html page for 4th/5th layouts
*
* ---------------------------------------------------------------------------- */

document.addEventListener('DOMContentLoaded', function() {


    // Components
    // ------------------------------

    // Styled checkboxes and radios
    $(".styled").uniform();


	// Select2 select
	$('.select').select2({
	    minimumResultsForSearch: Infinity
	});


	// Switchery toggles
	var elems = Array.prototype.slice.call(document.querySelectorAll('.switchery'));
	elems.forEach(function(html) {
		var switchery = new Switchery(html);
	});
	
});
