/* ------------------------------------------------------------------------------
*
*  # Vertical navigation sizing
*
*  Demo JS code for navigation_vertical_sizing.html page
*
* ---------------------------------------------------------------------------- */

document.addEventListener('DOMContentLoaded', function() {

    // Initialize Select2 select
    $('.select').select2({
        width: 180,
        minimumResultsForSearch: Infinity
    });


    // Apply size on change
    $('.select').on('change', function(){

        // Value of selected item
        var vals = $(this).val();


        // Large
        if ((vals == 'large')) {
            $('.navigation-main').addClass('navigation-lg');
        }
        else {
            $('.navigation-main').removeClass('navigation-lg');
        }

        // Small
        if ((vals == 'small')) {
            $('.navigation-main').addClass('navigation-sm');
        }
        else {
            $('.navigation-main').removeClass('navigation-sm');
        }

        // Mini
        if ((vals == 'mini')) {
            $('.navigation-main').addClass('navigation-xs');
        }
        else {
            $('.navigation-main').removeClass('navigation-xs');
        }
    });
    
});
