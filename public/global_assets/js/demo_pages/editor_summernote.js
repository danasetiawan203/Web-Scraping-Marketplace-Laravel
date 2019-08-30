/* ------------------------------------------------------------------------------
*
*  # Summernote editor
*
*  Demo JS code for editor_summernote.html page
*
* ---------------------------------------------------------------------------- */

document.addEventListener('DOMContentLoaded', function() {


    // Basic editors
    // ------------------------------

    // Default initialization
    $('.summernote').summernote({
        disableDragAndDrop: false
    });


    // Control editor height
    $('.summernote-height').summernote({
        height: 400
    });


    // Air mode
    $('.summernote-airmode').summernote({
        airMode: true
    });



    // Click to edit
    // ------------------------------

    // Edit
    $('#edit').on('click', function() {
        $('.click2edit').summernote({focus: true});
    })

    // Save
    $('#save').on('click', function() {
        var aHTML = $('.click2edit').summernote('code');
        $('.click2edit').summernote('destroy');
    })



    // Related form components
    // ------------------------------

    // Styled checkboxes/radios
    $(".link-dialog input[type=checkbox], .note-modal-form input[type=radio]").uniform();


    // Styled file input
    $(".note-image-input").uniform({
        fileButtonClass: 'action btn bg-warning-400'
    });

});
