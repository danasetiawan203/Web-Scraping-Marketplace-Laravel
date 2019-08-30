/* ------------------------------------------------------------------------------
*
*  # Inbox page - Reading
*
*  Demo JS code for mail_list_read.html page
*
* ---------------------------------------------------------------------------- */

document.addEventListener('DOMContentLoaded', function() {


    // Grab first letter from sender name and add it to avatar
    // ------------------------------

    // Title
    var $title = $('.letter-icon-title'),
        letter = $title.eq(0).text().charAt(0).toUpperCase();

    // Icon
    var $icon = $title.parent().parent().find('.letter-icon');
        $icon.eq(0).text(letter);

});
