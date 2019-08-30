/* ------------------------------------------------------------------------------
*
*  # Set fallback language
*
*  Demo JS code for internationalization_fallback.html page
*
* ---------------------------------------------------------------------------- */

document.addEventListener('DOMContentLoaded', function() {


    // Use noty.js for alerting current language
    var alertLang = function(lang) {
        new Noty({
            text: '<span class="text-uppercase">"' + lang + '"</span>' + ' locale is missing. Loading fallback language.',
            type: 'error',
            theme: 'limitless',
            layout: 'topRight',
            timeout: 2500
        }).show();
    }


    // Configuration
    // -------------------------

    // Define main elements
    var $switchContainer = $('.language-switch'),
        englishLangClass = '.english',
        spanishLangClass = '.spanish',
        italianLangClass = '.italian',
        $localizationElement = $('body');

    // Add options
    i18next.use(i18nextXHRBackend).use(i18nextBrowserLanguageDetector).init({
        backend: {
            loadPath: '../../../../global_assets/locales/{{lng}}.json'
        },
        load: 'languageOnly',
        debug: true,
        fallbackLng: 'en'
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

        // English
        if(i18next.language === "en") {

            // Set active class
            $(englishLangClass).parent().addClass('active');

            // Change language in dropdown
            $switchContainer.children('.dropdown-toggle').html(
                $switchContainer.find(englishLangClass).html() + ' <span class="caret" />'
            ).children('img').addClass('position-left');
        }

        // Spanish
        else if(i18next.language === "es") {

            // Show error notification
            alertLang(i18next.language);

            // Set active class
            $(spanishLangClass).parent().addClass('active');

            // Change language in dropdown
            $switchContainer.children('.dropdown-toggle').html(
                $switchContainer.find(spanishLangClass).html() + ' <span class="caret" />'
            ).children('img').addClass('position-left');
        }

        // Italian
        else if(i18next.language === "it") {

            // Show error notification
            alertLang(i18next.language);

            // Set active class
            $(italianLangClass).parent().addClass('active');

            // Change language in dropdown
            $switchContainer.children('.dropdown-toggle').html(
                $switchContainer.find(italianLangClass).html() + ' <span class="caret" />'
            ).children('img').addClass('position-left');
        }

        else {

            // Change language
            i18next.changeLanguage('en');

            // When changed, run translation again
            i18next.on('languageChanged', function() {
                $localizationElement.localize();
            });
            
            // Set active class
            $(englishLangClass).parent().addClass('active');

            // Change language in dropdown
            $switchContainer.children('.dropdown-toggle').html(
                $switchContainer.find(englishLangClass).html() + ' <span class="caret" />'
            ).children('img').addClass('position-left');
        }
    });

});
