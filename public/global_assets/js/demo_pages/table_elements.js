/* ------------------------------------------------------------------------------
*
*  # Table elements
*
*  Demo JS code for table_elements.html page
*
* ---------------------------------------------------------------------------- */

document.addEventListener('DOMContentLoaded', function() {


    // Selects
    // ------------------------------

    // Multiselect
    $('.multiselect').multiselect({
        buttonWidth: '100%'
    });


    // SelectBoxIt selects
    $(".selectbox").selectBoxIt({
        autoWidth: false 
    });


    // Select2 basic
    $('.select').select2({
        minimumResultsForSearch: Infinity
    });


    //
    // Select2 with icons
    //

    // Format icon
    function iconFormat(icon) {
        var originalOption = icon.element;
        if (!icon.id) { return icon.text; }
        var $icon = "<i class='icon-" + $(icon.element).data('icon') + "'></i>" + icon.text;

        return $icon;
    }

    // Initialize with options
    $(".select-actions").select2({
        templateResult: iconFormat,
        minimumResultsForSearch: Infinity,
        templateSelection: iconFormat,
        escapeMarkup: function(m) { return m; }
    });


    //
    // "Display controls" select2 select
    //

    // Initialize Switchery
    var controls = document.querySelector('.display-controls');
    var controlsInit = new Switchery(controls);

    // Change select state on toggle
    controls.onchange = function() {
        if(controls.checked) {
            $('#available_controls').prop("disabled", false);
        }
        else {
            $('#available_controls').prop("disabled", true);
        }
    };



    // Sparklines
    // ------------------------------

    // Intialization
    $(".spark-line").sparkline('html', {
        type: 'line',
        lineColor: '#aaa',
        spotRadius: 2,
        enableTagOptions: true,
        minSpotColor: '',
        maxSpotColor: '',
        height: 22,
        fillColor: '#f5f5f5',
        width: 150,
        lineWidth: 1.1
    });


    // Composite
    $('.spark-comoposite').sparkline('html', {
        type: 'bar',
        barColor: '#aaf',
        barWidth: 6,
        height: 22,
        barColor: '#009AD6'
    });
    $('.spark-comoposite').sparkline([4,1,5,7,9,9,8,7,6,6,4,7,8,4,3,2,2,5,6,7], {
        composite: true,
        fillColor: false,
        lineColor: 'red'
    });


    // Bar charts
    $('.spark-bars').sparkline('html', {
        type: 'bar',
        height: 22,
        negBarColor: '#f65f5f',
        stackedBarColor: ['#009AD6','#f65f5f'],
        barWidth: 6,
        barColor: '#009AD6'
    });


    // Pie charts
    $('.spark-pies').sparkline('html', {
        type: 'pie',
        height: 22,
        sliceColors: ['#2CA02C', '#FF7F0E', '#1F77B4']
    });


    // Bullet charts
    $('.spark-bullet').sparkline('html', {
        type: 'bullet',
        width: 150,
        height: 22
    });



    // Form components
    // ------------------------------

    // Touchspin spinners
    $(".touchspin").TouchSpin({
        min: 0,
        max: 100,
        step: 0.1,
        decimals: 2,
        prefix: '$'
    });


    // Multiple files uploader
    $('.bootstrap-uploader').fileinput({
        browseLabel: 'Browse',
        browseIcon: '<i class="icon-file-plus"></i>',
        uploadIcon: '<i class="icon-file-upload2"></i>',
        removeIcon: '<i class="icon-cross3"></i>',
        layoutTemplates: {
            icon: '<i class="icon-file-check"></i>'
        },
        initialCaption: "No file selected"
    });


    // Switchery toggle
    var elems = Array.prototype.slice.call(document.querySelectorAll('.switchery'));
    elems.forEach(function(html) {
        var switchery = new Switchery(html);
    });


    // Styled checkboxes, radios
    $('.styled').uniform({
        wrapperClass: 'border-primary text-primary'
    });


    // Styled file input
    $('.file-styled').uniform({
        fileButtonClass: 'action btn bg-warning-400'
    });
    
});
