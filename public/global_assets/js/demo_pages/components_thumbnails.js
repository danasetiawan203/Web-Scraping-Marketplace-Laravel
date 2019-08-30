/* ------------------------------------------------------------------------------
*
*  # Thumbnails
*
*  Demo JS code for components_thumbnails.html page
*
* ---------------------------------------------------------------------------- */

document.addEventListener('DOMContentLoaded', function() {

	// Switchery toggle
    var elems = Array.prototype.slice.call(document.querySelectorAll('.switch'));
    elems.forEach(function(html) {
		var switchery = new Switchery(html);
    });


    // Styled checkboxes/radios
    $('.styled').uniform();


    // Image lightbox
    $('[data-popup="lightbox"]').fancybox({
	    padding: 3
    });

});
