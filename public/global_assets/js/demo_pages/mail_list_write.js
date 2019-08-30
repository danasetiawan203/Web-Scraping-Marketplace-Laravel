/* ------------------------------------------------------------------------------
*
*  # Inbox page - Writing
*
*  Demo JS code for mail_list_write.html page
*
* ---------------------------------------------------------------------------- */

document.addEventListener('DOMContentLoaded', function() {


    // Plugins
    // ------------------------------

    // Summernote editor
    $('.summernote').summernote({
        height: 1240
    });


    // Related form components
    // ------------------------------

    // Styled checkboxes/radios
    $(".link-dialog input[type=checkbox], .note-modal-form input[type=radio]").uniform();

    // Styled file input
    $(".note-image-input").uniform({
        fileButtonClass: 'action btn bg-warning-400'
    });

});
