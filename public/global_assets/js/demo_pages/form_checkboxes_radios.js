/* ------------------------------------------------------------------------------
*
*  # Styled checkboxes, radios and file input
*
*  Demo JS code for form_checkboxes_radios.html page
*
* ---------------------------------------------------------------------------- */

document.addEventListener('DOMContentLoaded', function() {


    // Switchery
    // ------------------------------

    // Initialize multiple switches
    var elems = Array.prototype.slice.call(document.querySelectorAll('.switchery'));
    elems.forEach(function(html) {
        var switchery = new Switchery(html);
    });

    // Colored switches
    var primary = document.querySelector('.switchery-primary');
    var switchery = new Switchery(primary, { color: '#2196F3' });

    var danger = document.querySelector('.switchery-danger');
    var switchery = new Switchery(danger, { color: '#EF5350' });

    var warning = document.querySelector('.switchery-warning');
    var switchery = new Switchery(warning, { color: '#FF7043' });

    var info = document.querySelector('.switchery-info');
    var switchery = new Switchery(info, { color: '#00BCD4'});



    // Checkboxes/radios (Uniform)
    // ------------------------------

    // Default initialization
    $(".styled").uniform();

    // File input
    $(".file-styled").uniform({
        wrapperClass: 'bg-blue',
        fileButtonHtml: '<i class="icon-file-plus"></i>'
    });


    //
    // Contextual colors
    //

    // Primary
    $(".control-primary").uniform({
        wrapperClass: 'border-primary-600 text-primary-800'
    });

    // Danger
    $(".control-danger").uniform({
        wrapperClass: 'border-danger-600 text-danger-800'
    });

    // Success
    $(".control-success").uniform({
        wrapperClass: 'border-success-600 text-success-800'
    });

    // Warning
    $(".control-warning").uniform({
        wrapperClass: 'border-warning-600 text-warning-800'
    });

    // Info
    $(".control-info").uniform({
        wrapperClass: 'border-info-600 text-info-800'
    });

    // Custom color
    $(".control-custom").uniform({
        wrapperClass: 'border-indigo-600 text-indigo-800'
    });



    // Bootstrap switch
    // ------------------------------

    $(".switch").bootstrapSwitch();
    
});
