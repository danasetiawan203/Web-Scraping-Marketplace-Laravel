/* ------------------------------------------------------------------------------
*
*  # User list
*
*  Demo JS code for user_pages_list.html page
*
* ---------------------------------------------------------------------------- */

document.addEventListener('DOMContentLoaded', function() {

    // Scroll to the bottom of the chat
    $('.modal').on('shown.bs.modal', function() {
        $('.chat-list').animate({
            scrollTop: $(this).height()
        }, 500)
    });
    
});
