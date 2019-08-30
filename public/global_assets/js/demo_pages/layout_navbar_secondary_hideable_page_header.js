/* ------------------------------------------------------------------------------
*
*  # Page layout with hideable secondary navbar
*
*  Specific JS code additions for layout_navbar_secondary_hideable.html page
*
* ---------------------------------------------------------------------------- */

document.addEventListener('DOMContentLoaded', function() {


    // Init headroom
    // ------------------------------

    // Hide navbar with Headroom.js library
    $("#navbar-second").headroom({
        classes: {
            pinned: "headroom-top-pinned",
            unpinned: "headroom-top-unpinned"
        },
        offset: $('#navbar-second').offset().top,

        // callback when unpinned, `this` is headroom object
        onUnpin: function() {
            $('.navbar .dropdown-menu').parent().removeClass('open');
        }
    });


    // Affix sidebar
    // ------------------------------

    // When affixed
    $('#navbar-second').on('affixed.bs.affix', function() {
        $(this).parent().children('.page-header-content').css('margin-bottom', $(this).outerHeight());
        $('body').addClass('navbar-affixed-top');
    });

    // When on top
    $('#navbar-second').on('affixed-top.bs.affix', function() {
        $(this).parent().children('.page-header-content').css('margin-bottom', '');
        $('body').removeClass('navbar-affixed-top');
    });

    // Init
    $('#navbar-second, .page-header > .fab-menu').affix({
        offset: {
            top: $('#navbar-second').offset().top
        }
    });

});
