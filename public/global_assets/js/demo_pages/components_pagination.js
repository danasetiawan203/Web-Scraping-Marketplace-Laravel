/* ------------------------------------------------------------------------------
*
*  # Pagination component
*
*  Demo JS code for components_pagination.html page
*
* ---------------------------------------------------------------------------- */

document.addEventListener('DOMContentLoaded', function() {


    // TWBS dynamic pagination
    // ------------------------------

    // Basic
    $('.twbs-default').twbsPagination({
        totalPages: 35,
        visiblePages: 4,
        prev: 'Prev',
        first: null,
        last: null,
        onPageClick: function (event, page) {
            $('.twbs-content-default').text('Page ' + page);
        }
    });

    // Flat style
    $('.twbs-flat').twbsPagination({
        totalPages: 35,
        visiblePages: 4,
        prev: 'Prev',
        first: null,
        last: null,
        onPageClick: function (event, page) {
            $('.twbs-content-flat').text('Page ' + page);
        }
    });

    // Separated style
    $('.twbs-separated').twbsPagination({
        totalPages: 35,
        visiblePages: 4,
        prev: 'Prev',
        first: null,
        last: null,
        onPageClick: function (event, page) {
            $('.twbs-content-separated').text('Page ' + page);
        }
    });

    // Custom button text
    $('.twbs-prev-next').twbsPagination({
        totalPages: 35,
        visiblePages: 4,
        prev: '&#8672;',
        next: '&#8674;',
        first: '&#8676;',
        last: '&#8677;',
        onPageClick: function (event, page) {
            $('.twbs-content-prev-next').text('Page ' + page);
        }
    });

    // Custom start page
    $('.twbs-page-start').twbsPagination({
        totalPages: 35,
        visiblePages: 4,
        startPage: 3,
        prev: 'Prev',
        first: null,
        last: null,
        onPageClick: function (event, page) {
            $('.twbs-content-page-start').text('Page ' + page);
        }
    });

    // Set number of visible pages
    $('.twbs-visible-pages').twbsPagination({
        totalPages: 35,
        visiblePages: 4,
        prev: '&larr;',
        next: '&rarr;',
        first: null,
        last: null,
        onPageClick: function (event, page) {
            $('.twbs-content-visible-pages').text('Page ' + page);
        }
    });



    // Date paginator
    // ------------------------------

    // Basic
    $('.datepaginator-default').datepaginator({
        itemWidth: 70,
        navItemWidth: 28
    });

    // Days format
    $('.datepaginator-days-format').datepaginator({
        itemWidth: 70,
        navItemWidth: 28,
        text: 'dddd<br/>Do'
    });

    // Hide calendar
    $('.datepaginator-calendar').datepaginator({
        itemWidth: 70,
        navItemWidth: 28,
        showCalendar: false
    });

    // Highlight selected date
    $('.datepaginator-highlight-selected').datepaginator({
        itemWidth: 70,
        navItemWidth: 28,
        highlightSelectedDate: false
    });

    // Highlight today's date
    $('.datepaginator-highlight-today').datepaginator({
        itemWidth: 70,
        navItemWidth: 28,
        highlightToday: false
    });

    // Custom item width
    $('.datepaginator-item-width').datepaginator({
        itemWidth: 50,
        navItemWidth: 28
    });

});
