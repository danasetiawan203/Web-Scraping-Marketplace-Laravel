/* ------------------------------------------------------------------------------
*
*  # Modal dialogs and extensions
*
*  Demo JS code for components_modals.html page
*
* ---------------------------------------------------------------------------- */

document.addEventListener('DOMContentLoaded', function() {


    // Basic modals
    // ------------------------------

    // Load remote content
    $('#modal_remote').on('show.bs.modal', function() {
        $(this).find('.modal-body').load('../../../../global_assets/demo_data/wizard/education.html', function() {

            // Init Select2 when loaded
            $('.select').select2({
                minimumResultsForSearch: Infinity
            });
        });
    });


    // Bootbox extension
    // ------------------------------

    // Alert dialog
    $('#alert').on('click', function() {
        bootbox.alert({
            title: 'Check this out!',
            message: 'Native alert dialog has been replaced with Bootbox alert box.'
        });
    });

    // Confirmation dialog
    $('#confirm').on('click', function() {
        bootbox.confirm({
            title: 'Confirm dialog',
            message: 'Native confirm dialog has been replaced with Bootbox confirm box.',
            buttons: {
                confirm: {
                    label: 'Yes',
                    className: 'btn-primary'
                },
                cancel: {
                    label: 'Cancel',
                    className: 'btn-link'
                }
            },
            callback: function (result) {
                bootbox.alert({
                    title: 'Confirmation result',
                    message: 'Confirm result: ' + result
                });
            }
        });
    });

    // Prompt dialog
    $('#prompt').on('click', function() {
        bootbox.prompt({
            title: 'Please enter your name',
            buttons: {
                confirm: {
                    label: 'Yes',
                    className: 'btn-primary'
                },
                cancel: {
                    label: 'Cancel',
                    className: 'btn-link'
                }
            },
            callback: function (result) {
                if (result === null) {
                    bootbox.alert({
                        title: 'Prompt dismissed',
                        message: 'You have cancelled this damn thing'
                    });
                } else {
                    bootbox.alert({
                        title: 'Hi <strong>' + result + '</strong>',
                        message: 'How are you doing today?'
                    });
                }
            }
        });
    });

    // Prompt dialog with default value
    $('#prompt_value').on('click', function() {
        bootbox.prompt({
            title: 'What is your real name?',
            value: 'Eugene Kopyov',
            buttons: {
                confirm: {
                    label: 'Yes',
                    className: 'btn-primary'
                },
                cancel: {
                    label: 'Cancel',
                    className: 'btn-link'
                }
            },
            callback: function(result) {
                if (result === null) {
                    bootbox.alert({
                        title: 'Prompt dismissed',
                        message: 'You have cancelled this damn thing'
                    });
                } else {
                    bootbox.alert({
                        title: 'Hi <strong>' + result + '</strong>',
                        message: 'How are you doing today?'
                    });
                }
            }
        });
    });

    // Custom bootbox dialog
    $('#bootbox_custom').on('click', function() {
        bootbox.dialog({
            message: 'I am a custom dialog',
            title: 'Custom title',
            buttons: {
                success: {
                    label: 'Success!',
                    className: 'btn-success',
                    callback: function() {
                        bootbox.alert({
                            title: 'Success!',
                            message: 'This is a great success!'
                        });
                    }
                },
                danger: {
                    label: 'Danger!',
                    className: 'btn-danger',
                    callback: function() {
                        bootbox.alert({
                            title: 'Ohh noooo!',
                            message: 'Uh oh, look out!'
                        });
                    }
                },
                main: {
                    label: 'Click ME!',
                    className: 'btn-primary',
                    callback: function() {
                        bootbox.alert({
                            title: 'Hooray!',
                            message: 'Something awesome just happened!'
                        });
                    }
                }
            }
        });
    });

    // Custom bootbox dialog with form
    $('#bootbox_form').on('click', function() {
        bootbox.dialog({
            title: "This is a form in a modal.",
            message: '<div class="row">  ' +
                '<div class="col-md-12">' +
                    '<form class="form-horizontal">' +
                        '<div class="form-group">' +
                            '<label class="col-md-4 control-label">Name</label>' +
                            '<div class="col-md-8">' +
                                '<input id="name" name="name" type="text" placeholder="Your name" class="form-control">' +
                                '<span class="help-block">Here goes your name</span>' +
                            '</div>' +
                        '</div>' +
                        '<div class="form-group">' +
                            '<label class="col-md-4 control-label">How awesome is this?</label>' +
                            '<div class="col-md-8">' +
                                '<div class="radio">' +
                                    '<label>' +
                                        '<input type="radio" name="awesomeness" id="awesomeness-0" value="Really awesome" checked="checked">' +
                                        'Really awesomeness' +
                                    '</label>' +
                                '</div>' +
                                '<div class="radio">' +
                                    '<label>' +
                                        '<input type="radio" name="awesomeness" id="awesomeness-1" value="Super awesome">' +
                                        'Super awesome' +
                                    '</label>' +
                                '</div>' +
                            '</div>' +
                        '</div>' +
                    '</form>' +
                '</div>' +
            '</div>',
            buttons: {
                success: {
                    label: "Save",
                    className: "btn-success",
                    callback: function () {
                        var name = $('#name').val();
                        var answer = $("input[name='awesomeness']:checked").val()
                        bootbox.alert({
                            title: 'Hello ' + name + '!',
                            message: 'You have chosen <strong>' + answer + '</strong>.'
                        });
                    }
                }
            }
        });
    });


    // Modal callbacks
    // ------------------------------

    // onShow callback
    $('#modal_onshow').on('show.bs.modal', function() {
        alert('onShow callback fired.')
    });

    // onShown callback
    $('#modal_onshown').on('shown.bs.modal', function() {
        alert('onShown callback fired.')
    });

    // onHide callback
    $('#modal_onhide').on('hide.bs.modal', function() {
        alert('onHide callback fired.')
    });

    // onHidden callback
    $('#modal_onhidden').on('hidden.bs.modal', function() {
        alert('onHidden callback fired.')
    });



    // Sweet Alert extension
    // ------------------------------

    // Basic
    $('#sweet_basic').on('click', function() {
        swal({
            title: "Here's a message!",
            confirmButtonColor: "#2196F3"
        });
    });

    // With title
    $('#sweet_title_text').on('click', function() {
        swal({
            title: "Here's a message!",
            text: "It's pretty, isn't it?",
            confirmButtonColor: "#2196F3"
        });
    });

    // Auto closing
    $('#sweet_auto_closer').on('click', function() {
        swal({
            title: "Auto close alert!",
            text: "I will close in 2 seconds.",
            confirmButtonColor: "#2196F3",
            timer: 2000
        });
    });

    // HTML message
    $('#sweet_html').on('click', function() {
        swal({
            title: "HTML <small>small subtitle</small>",
            text: "A custom <span style='color:#F8BB86'>html<span> message.",
            html: true,
            confirmButtonColor: "#2196F3"
        });
    });

    // Prompt
    $('#sweet_prompt').on('click', function() {
        swal({
            title: "An input!",
            text: "Write something interesting:",
            type: "input",
            showCancelButton: true,
            confirmButtonColor: "#2196F3",
            closeOnConfirm: false,
            animation: "slide-from-top",
            inputPlaceholder: "Write something"
        },
        function(inputValue){
            if (inputValue === false) return false;
            if (inputValue === "") {
                swal.showInputError("You need to write something!");
                return false
            }
            swal({
                title: "Nice!",
                text: "You wrote: " + inputValue,
                type: "success",
                confirmButtonColor: "#2196F3"
            });
        });
    });

    // AJAX loader
    $('#sweet_loader').on('click', function() {
        swal({
            title: "Ajax request example",
            text: "Submit to run ajax request",
            type: "info",
            showCancelButton: true,
            closeOnConfirm: false,
            confirmButtonColor: "#2196F3",
            showLoaderOnConfirm: true
        },
        function() {
            setTimeout(function() {
                swal({
                    title: "Ajax request finished!",
                    confirmButtonColor: "#2196F3"
                });
            }, 2000);
        });
    });


    //
    // Contextual alerts
    //

    // Success alert
    $('#sweet_success').on('click', function() {
        swal({
            title: "Good job!",
            text: "You clicked the button!",
            confirmButtonColor: "#66BB6A",
            type: "success"
        });
    });

    // Error alert
    $('#sweet_error').on('click', function() {
        swal({
            title: "Oops...",
            text: "Something went wrong!",
            confirmButtonColor: "#EF5350",
            type: "error"
        });
    });

    // Warning alert
    $('#sweet_warning').on('click', function() {
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this imaginary file!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#FF7043",
            confirmButtonText: "Yes, delete it!"
        });
    });

    // Info alert
    $('#sweet_info').on('click', function() {
        swal({
            title: "For your information",
            text: "This is some sort of a custom alert",
            confirmButtonColor: "#2196F3",
            type: "info"
        });
    });

    // Alert combination
    $('#sweet_combine').on('click', function() {
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this imaginary file!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#EF5350",
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel pls!",
            closeOnConfirm: false,
            closeOnCancel: false
        },
        function(isConfirm){
            if (isConfirm) {
                swal({
                    title: "Deleted!",
                    text: "Your imaginary file has been deleted.",
                    confirmButtonColor: "#66BB6A",
                    type: "success"
                });
            }
            else {
                swal({
                    title: "Cancelled",
                    text: "Your imaginary file is safe :)",
                    confirmButtonColor: "#2196F3",
                    type: "error"
                });
            }
        });
    });
});
