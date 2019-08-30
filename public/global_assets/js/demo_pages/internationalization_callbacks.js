/* ------------------------------------------------------------------------------
*
*  # i18next callbacks
*
*  Demo JS code for internationalization_callbacks.html page
*
* ---------------------------------------------------------------------------- */

document.addEventListener('DOMContentLoaded', function() {


    // Use noty.js for alerting current language
    var alertMessage = function(message) {
        new Noty({
            text: message,
            type: 'info',
            theme: 'limitless',
            layout: 'topRight',
            timeout: 2500,
            killer: true
        }).show();
    }


    // Configuration
    // -------------------------

    // Define main elements
    var $switchContainer = $('.language-switch'),
        englishLangClass = '.english',
        russianLangClass = '.russian',
        ukrainianLangClass = '.ukrainian',
        $localizationElement = $('body');

    // Add options
    i18next.use(i18nextXHRBackend).use(i18nextBrowserLanguageDetector).init({
        backend: {
            loadPath: '../../../../global_assets/locales/{{lng}}.json'
        },
        debug: true,
        fallbackLng: false
    },
    function (err, t) {
        
        // Initialize library
        jqueryI18next.init(i18next, $);

        // Initialize translation
        $localizationElement.localize();
    });


    // Change languages in dropdown
    // -------------------------

    // Do stuff when i18Next is initialized
    i18next.on('initialized', function() {

        // Notification
        alertMessage('i18Next has been initialized. <br> The following language has beed detected: ' + '<span class="font-weight-semibold text-uppercase">' + i18next.language + '</span>');

        // English
        if(i18next.language === "en") {

            // Set active class
            $(englishLangClass).parent().addClass('active');

            // Change language in dropdown
            $switchContainer.children('.dropdown-toggle').html(
                $switchContainer.find(englishLangClass).html() + ' <span class="caret" />'
            ).children('img').addClass('position-left');
        }

        // Russian
        if(i18next.language === "ru") {

            // Set active class
            $(russianLangClass).parent().addClass('active');

            // Change language in dropdown
            $switchContainer.children('.dropdown-toggle').html(
                $switchContainer.find(russianLangClass).html() + ' <span class="caret" />'
            ).children('img').addClass('position-left');
        }

        // Ukrainian
        if(i18next.language === "ua") {

            // Set active class
            $(ukrainianLangClass).parent().addClass('active');

            // Change language in dropdown
            $switchContainer.children('.dropdown-toggle').html(
                $switchContainer.find(ukrainianLangClass).html() + ' <span class="caret" />'
            ).children('img').addClass('position-left');
        }
    });


    // Change languages in navbar
    // -------------------------

    // English
    $(englishLangClass).on('click', function () {

        // Change language
        i18next.changeLanguage('en');

        // When changed, run translation again
        i18next.on('languageChanged', function() {

            // Localize
            $localizationElement.localize();

            // Notification
            alertMessage('Language has been changed to: ' + '<span class="font-weight-semibold text-uppercase">' + i18next.language + '</span>');
        });

        // Change lang in dropdown
        $switchContainer.children('.dropdown-toggle').html(
            $(englishLangClass).html() + ' <span class="caret" />'
        ).children('img').addClass('position-left');

        // Set active class
        $switchContainer.find('.active').removeClass('active');
        $(englishLangClass).parent().addClass('active');
    });

    // Russian
    $(russianLangClass).on('click', function () {

        // Change language
        i18next.changeLanguage('ru');

        // When changed, run translation again
        i18next.on('languageChanged', function() {

            // Localize
            $localizationElement.localize();

            // Notification
            alertMessage('Language has been changed to: ' + '<span class="font-weight-semibold text-uppercase">' + i18next.language + '</span>');
        });

        // Change lang in dropdown
        $switchContainer.children('.dropdown-toggle').html(
            $(russianLangClass).html() + ' <span class="caret" />'
        ).children('img').addClass('position-left');
        
        // Set active class
        $switchContainer.find('.active').removeClass('active');
        $(russianLangClass).parent().addClass('active');
    });

    // Ukrainian
    $(ukrainianLangClass).on('click', function () {

        // Change language
        i18next.changeLanguage('ua');

        // When changed, run translation again
        i18next.on('languageChanged', function() {

            // Localize
            $localizationElement.localize();

            // Notification
            alertMessage('Language has been changed to: ' + '<span class="font-weight-semibold text-uppercase">' + i18next.language + '</span>');
        });

        // Change lang in dropdown
        $switchContainer.children('.dropdown-toggle').html(
            $(ukrainianLangClass).html() + ' <span class="caret" />'
        ).children('img').addClass('position-left');
        
        // Set active class
        $switchContainer.find('.active').removeClass('active');
        $(ukrainianLangClass).parent().addClass('active');
    });

});
