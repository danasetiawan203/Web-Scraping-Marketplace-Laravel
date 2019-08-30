/* ------------------------------------------------------------------------------
*
*  # Job search - apply
*
*  Demo JS code for job search page kit - apply
*
* ---------------------------------------------------------------------------- */

document.addEventListener('DOMContentLoaded', function() {


    // Select2 select
    // ------------------------------

    // With search
    $('.select').select2();

    // Without search
    $('.select-simple').select2({
        minimumResultsForSearch: Infinity
    });


    // Date picker
    // ------------------------------

    // Default functionality
    $(".datepicker").datepicker();


    // Styled form components
    // ------------------------------

    // Checkboxes, radios
    $(".styled").uniform();

    // File input
    $(".file-styled").uniform({
        fileButtonClass: 'action btn bg-pink-400'
    });
  
});
