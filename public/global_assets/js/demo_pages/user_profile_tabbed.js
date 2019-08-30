/* ------------------------------------------------------------------------------
*
*  # Tabbed user profile
*
*  Demo JS code for tabbed user profile page
*
* ---------------------------------------------------------------------------- */

document.addEventListener('DOMContentLoaded', function() {


    // Charts
    // ------------------------------

    // Define elements
    var weekly_statistics_element = document.getElementById('sales');
    var balance_statistics_element = document.getElementById('visits');
    var available_hours_element = document.getElementById('plans');

    // Weekly statistics chart config
    if (weekly_statistics_element) {

        // Initialize chart
        var weekly_statistics = echarts.init(weekly_statistics_element);


        //
        // Chart config
        //

        // Options
        weekly_statistics.setOption({

            // Define colors
            color: ['#2ec7c9','#5ab1ef','#b6a2de',],

            // Global text styles
            textStyle: {
                fontFamily: 'Roboto, Arial, Verdana, sans-serif',
                fontSize: 13
            },

            // Chart animation duration
            animationDuration: 750,

            // Setup grid
            grid: {
                left: 0,
                right: 10,
                top: 35,
                bottom: 0,
                containLabel: true
            },

            // Add legend
            legend: {
                data: ['Profit', 'Expenses', 'Income'],
                itemHeight: 8,
                itemGap: 20,
                textStyle: {
                    padding: [0, 5]
                }
            },

            // Add tooltip
            tooltip: {
                trigger: 'axis',
                backgroundColor: 'rgba(0,0,0,0.75)',
                padding: [10, 15],
                textStyle: {
                    fontSize: 13,
                    fontFamily: 'Roboto, sans-serif'
                },
                axisPointer: {
                    type: 'shadow',
                    shadowStyle: {
                        color: 'rgba(0,0,0,0.025)'
                    }
                }
            },

            // Horizontal axis
            xAxis: [{
                type: 'value',
                axisLabel: {
                    color: '#333'
                },
                axisLine: {
                    lineStyle: {
                        color: '#999'
                    }
                },
                splitLine: {
                    show: true,
                    lineStyle: {
                        color: '#eee',
                        type: 'dashed'
                    }
                }
            }],

            // Vertical axis
            yAxis: [{
                type: 'category',
                data: ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'],
                axisTick: {
                    show: false
                },
                axisLabel: {
                    color: '#333'
                },
                axisLine: {
                    lineStyle: {
                        color: '#999'
                    }
                },
                splitLine: {
                    show: true,
                    lineStyle: {
                        color: ['#eee']
                    }
                },
                splitArea: {
                    show: true,
                    areaStyle: {
                        color: ['rgba(250,250,250,0.1)', 'rgba(0,0,0,0.015)']
                    }
                }
            }],

            // Add series
            series: [
                {
                    name: 'Profit',
                    type: 'bar',
                    barWidth: 26,
                    itemStyle: {
                        normal: {
                            label: {
                                show: true,
                                position: 'inside',
                                textStyle: {
                                    fontSize: 12
                                }
                            }
                        }
                    },
                    data: [200, 170, 240, 244, 200, 220, 210]
                },
                {
                    name: 'Income',
                    type: 'bar',
                    stack: 'Total',
                    barWidth: 5,
                    itemStyle: {
                        normal: {
                            label: {
                                show: true,
                                position: 'right',
                                textStyle: {
                                    fontSize: 12
                                }
                            }
                        }
                    },
                    data: [320, 302, 341, 374, 390, 450, 420]
                },
                {
                    name: 'Expenses',
                    type: 'bar',
                    stack: 'Total',
                    itemStyle: {
                        normal: {
                            label: {
                                show: true,
                                position: 'left',
                                textStyle: {
                                    fontSize: 12
                                }
                            }
                        }
                    },
                    data: [-120, -132, -101, -134, -190, -230, -210]
                }
            ]
        });
    }

    // Balance chart
    if (balance_statistics_element) {

        // Initialize chart
        var balance_statistics = echarts.init(balance_statistics_element);


        //
        // Chart config
        //

        // Common styles
        var labelRight = {
            normal: {
                color: '#FF7043',
                label: {
                    position: 'right'
                }
            }
        };

        // Options
        balance_statistics.setOption({

            // Global text styles
            textStyle: {
                fontFamily: 'Roboto, Arial, Verdana, sans-serif',
                fontSize: 13
            },

            // Chart animation duration
            animationDuration: 750,

            // Setup grid
            grid: {
                left: 0,
                right: 10,
                top: 30,
                bottom: 0,
                containLabel: true
            },

            // Add legend
            legend: {
                data: ['Income', 'Outcome'],
                itemHeight: 8,
                itemGap: 20,
                textStyle: {
                    padding: [0, 5]
                }
            },

            // Add tooltip
            tooltip: {
                trigger: 'axis',
                backgroundColor: 'rgba(0,0,0,0.75)',
                padding: [10, 15],
                textStyle: {
                    fontSize: 13,
                    fontFamily: 'Roboto, sans-serif'
                },
                axisPointer: {
                    type: 'shadow',
                    shadowStyle: {
                        color: 'rgba(0,0,0,0.025)'
                    }
                }
            },

            // Horizontal axis
            xAxis: [{
                type: 'value',
                axisLabel: {
                    color: '#333'
                },
                axisLine: {
                    lineStyle: {
                        color: '#999'
                    }
                },
                splitLine: {
                    show: true,
                    lineStyle: {
                        color: '#eee',
                        type: 'dashed'
                    }
                }
            }],

            // Vertical axis
            yAxis: [{
                type: 'category',
                data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                axisLabel: {
                    color: '#333'
                },
                axisLine: {
                    lineStyle: {
                        color: '#999'
                    }
                },
                splitLine: {
                    show: true,
                    lineStyle: {
                        color: ['#eee']
                    }
                },
                splitArea: {
                    show: true,
                    areaStyle: {
                        color: ['rgba(250,250,250,0.1)', 'rgba(0,0,0,0.015)']
                    }
                }
            }],

            // Add series
            series: [
                {
                    name: 'Income',
                    type: 'bar',
                    barCategoryGap: '50%',
                    label: {
                        normal: {
                            textStyle: {
                                color: '#682d19'
                            },
                            position: 'left',
                            show: false,
                            formatter: '{b}',
                            height: 30
                        }
                    },
                    itemStyle: {
                        normal: {
                            color: '#6bca6f',
                            barBorderRadius: 3
                        }
                    },
                    data: [190, 122, 160, 240, 110, 180, 280]
                },
                {
                    name: 'Outcome',
                    type: 'line',
                    smooth: true,
                    symbolSize: 7,
                    silent: true,
                    data: [120, 180, 30, 137, 90, 230, 120],
                    itemStyle: {
                        normal: {
                            color: '#2f4553',
                            borderWidth: 2
                        }
                    }
                }
            ]
        });
    }

    // Basic columns chart
    if (available_hours_element) {

        // Initialize chart
        var available_hours = echarts.init(available_hours_element);


        //
        // Chart config
        //

        // Options
        available_hours.setOption({

            // Define colors
            color: ['#2ec7c9','#b6a2de','#5ab1ef','#ffb980','#d87a80'],

            // Global text styles
            textStyle: {
                fontFamily: 'Roboto, Arial, Verdana, sans-serif',
                fontSize: 13
            },

            // Chart animation duration
            animationDuration: 750,

            // Setup grid
            grid: {
                left: 0,
                right: 10,
                top: 30,
                bottom: 0,
                containLabel: true
            },

            // Add legend
            legend: {
                data: ['Booked hours', 'Available hours'],
                itemHeight: 8,
                itemGap: 20,
                textStyle: {
                    padding: [0, 5]
                }
            },

            // Add tooltip
            tooltip: {
                trigger: 'axis',
                backgroundColor: 'rgba(0,0,0,0.75)',
                padding: [10, 15],
                axisPointer: {
                    type: 'shadow',
                    shadowStyle: {
                        color: 'rgba(0,0,0,0.025)'
                    }
                },
                textStyle: {
                    fontSize: 13,
                    fontFamily: 'Roboto, sans-serif'
                }
            },

            // Horizontal axis
            xAxis: [{
                type: 'category',
                data : ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
                axisLabel: {
                    color: '#333'
                },
                axisLine: {
                    lineStyle: {
                        color: '#999'
                    }
                },
                splitLine: {
                    show: true,
                    lineStyle: {
                        color: '#eee',
                        type: 'dashed'
                    }
                }
            }],

            // Vertical axis
            yAxis: [{
                type: 'value',
                axisLabel: {
                    color: '#333'
                },
                axisLine: {
                    lineStyle: {
                        color: '#999'
                    }
                },
                splitLine: {
                    lineStyle: {
                        color: '#eee'
                    }
                },
                splitArea: {
                    show: true,
                    areaStyle: {
                        color: ['rgba(250,250,250,0.1)', 'rgba(0,0,0,0.01)']
                    }
                }
            }],

            // Add series
            series: [
                {
                    name: 'Booked hours',
                    type: 'bar',
                    data: [4, 8, 6, 4, 7, 5, 9],
                    itemStyle: {
                        normal: {
                            color: '#B0BEC5',
                            label: {
                                show: true,
                                position: 'top',
                                textStyle: {
                                    fontWeight: 500
                                }
                            }
                        }
                    }
                },
                {
                    name: 'Available hours',
                    type: 'bar',
                    data: [6, 2, 4, 6, 3, 5, 1],
                    itemStyle: {
                        normal: {
                            color: '#29B6F6',
                            label: {
                                show: true,
                                position: 'top',
                                textStyle: {
                                    fontWeight: 500
                                }
                            }
                        }
                    }
                }
            ]
        });
    }


    //
    // Resize charts
    //

    // Resize function
    var triggerChartResize = function() {
        weekly_statistics_element && weekly_statistics.resize();
        balance_statistics_element && balance_statistics.resize();
        available_hours_element && available_hours.resize();
    };

    // On sidebar width change
    $(document).on('click', '.sidebar-control', function() {
        setTimeout(function () {
            triggerChartResize();
        }, 0);
    });

    // On window resize
    var resizeCharts;
    window.onresize = function () {
        clearTimeout(resizeCharts);
        resizeCharts = setTimeout(function () {
            triggerChartResize();
        }, 200);
    };

    // Resize charts when hidden element becomes visible
    $('[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        triggerChartResize();
    });



    // Form components
    // ------------------------------

    // Select2 selects
    $('.select').select2({
        minimumResultsForSearch: Infinity
    });


    // Styled file input
    $(".file-styled").uniform({
        fileButtonClass: 'action btn bg-warning'
    });


    // Styled checkboxes, radios
    $(".styled").uniform();



    // Schedule
    // ------------------------------

    // Add events
    var eventsColors = [
        {
            title: 'All Day Event',
            start: '2014-11-01',
            color: '#EF5350'
        },
        {
            title: 'Long Event',
            start: '2014-11-07',
            end: '2014-11-10',
            color: '#26A69A'
        },
        {
            id: 999,
            title: 'Repeating Event',
            start: '2014-11-09T16:00:00',
            color: '#26A69A'
        },
        {
            id: 999,
            title: 'Repeating Event',
            start: '2014-11-16T16:00:00',
            color: '#5C6BC0'
        },
        {
            title: 'Conference',
            start: '2014-11-11',
            end: '2014-11-13',
            color: '#546E7A'
        },
        {
            title: 'Meeting',
            start: '2014-11-12T10:30:00',
            end: '2014-11-12T12:30:00',
            color: '#546E7A'
        },
        {
            title: 'Lunch',
            start: '2014-11-12T12:00:00',
            color: '#546E7A'
        },
        {
            title: 'Meeting',
            start: '2014-11-12T14:30:00',
            color: '#546E7A'
        },
        {
            title: 'Happy Hour',
            start: '2014-11-12T17:30:00',
            color: '#546E7A'
        },
        {
            title: 'Dinner',
            start: '2014-11-12T20:00:00',
            color: '#546E7A'
        },
        {
            title: 'Birthday Party',
            start: '2014-11-13T07:00:00',
            color: '#546E7A'
        },
        {
            title: 'Click for Google',
            url: 'http://google.com/',
            start: '2014-11-28',
            color: '#FF7043'
        }
    ];


    // Initialize calendar with options
    $('.schedule').fullCalendar({
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
        },
        defaultDate: '2014-11-12',
        editable: true,
        events: eventsColors
    });


    // Render in hidden elements
    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        $('.schedule').fullCalendar('render');
    });



    // Link row
    // ------------------------------

    // Initialize Row link plugin
    $('tbody.rowlink').rowlink();



    // Custom code
    // ------------------------------

    // Highlight row when checkbox is checked
    $('.table-inbox').find('tr > td:first-child').find('input[type=checkbox]').on('change', function() {
        if($(this).is(':checked')) {
            $(this).parents('tr').addClass('warning');
        }
        else {
            $(this).parents('tr').removeClass('warning');
        }
    });

    // Grab first letter and insert to the icon
    $(".table tr").each(function (i) {

        // Title
        var $title = $(this).find('.letter-icon-title'),
            letter = $title.eq(0).text().charAt(0).toUpperCase();

        // Icon
        var $icon = $(this).find('.letter-icon');
            $icon.eq(0).text(letter);
    });

});
