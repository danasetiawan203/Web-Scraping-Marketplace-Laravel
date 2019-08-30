/* ------------------------------------------------------------------------------
*
*  # Fixed secondary sidebar
*
*  Demo JS code for layout_navbar_secondary_fixed.html page
*
* ---------------------------------------------------------------------------- */

document.addEventListener('DOMContentLoaded', function() {


    // Affix sidebar
    // ------------------------------

    // When affixed
    $('#navbar-second').on('affixed.bs.affix', function() {
        $(this).next().css('margin-top', $(this).outerHeight());
        $('body').addClass('navbar-affixed-top');
    });

    // When on top
    $('#navbar-second').on('affixed-top.bs.affix', function() {
        $(this).next().css('margin-top', '');
        $('body').removeClass('navbar-affixed-top');
    });

    // Init
    $('#navbar-second').affix({
        offset: {
            top: $('#navbar-second').offset().top
        }
    });

});
