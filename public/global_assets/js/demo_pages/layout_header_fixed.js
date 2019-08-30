/* ------------------------------------------------------------------------------
*
*  # Fixed page header area
*
*  Specific JS code additions for layout_header_fixed.html page
*
* ---------------------------------------------------------------------------- */

document.addEventListener('DOMContentLoaded', function() {

    // Add to padding to body
    $('body').css('padding-top', $('.page-header-fixed').outerHeight());

});
