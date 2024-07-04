<!-- Libs JS -->
<script src="{{ asset('assets/dist/libs/apexcharts/dist/apexcharts.min.js?1684106062') }}" defer></script>
<script src="{{ asset('assets/dist/libs/jsvectormap/dist/js/jsvectormap.min.js?1684106062') }}" defer></script>
<script src="{{ asset('assets/dist/libs/jsvectormap/dist/maps/world.js?1684106062') }}" defer></script>
<script src="{{ asset('assets/dist/libs/jsvectormap/dist/maps/world-merc.js?1684106062') }}" defer></script>
<!-- Tabler Core -->
<script src="{{ asset('assets/dist/js/tabler.min.js?1684106062') }}" defer></script>
<script src="{{ asset('assets/dist/js/demo.min.js?1684106062') }}" defer></script>
<script src="{{ asset('assets/dist/libs/litepicker/dist/litepicker.js') }}" defer></script>
<script src="{{ asset('assets/dist/libs/fslightbox/index.js?1684106062') }}" defer></script>

<script src="{{ asset('assets/extentions/jquery-3.7.1.min.js') }}"></script>
<script src="{{ asset('assets/extentions/jquery.validate.min.js') }}"></script>

<link href="{{ asset('assets/extentions/xeditable/jquery-editable.css') }}" rel="stylesheet" />
<script src="{{ asset('assets/extentions/xeditable/jquery-editable-poshytip.min.js') }}"></script>

<!-- Datatables -->
<script src="{{ asset('assets/extentions/datatables/datatables.min.js') }}"></script>
<link href="{{ asset('assets/extentions/datatables/DataTables-1.13.4/css/dataTables.bootstrap5.css') }}"
    rel="stylesheet">
<link href="{{ asset('assets/extentions/datatables/Buttons-2.3.4/css/buttons.bootstrap5.min.css') }}" rel="stylesheet">
<script src="{{ asset('assets/extentions/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/extentions/datatables/DataTables-1.13.4/js/dataTables.bootstrap5.js') }}"></script>
<script src="{{ asset('assets/extentions/datatables/Buttons-2.3.4/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/extentions/datatables/Buttons-2.3.4/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/extentions/datatables/Buttons-2.3.4/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/extentions/datatables/Buttons-2.3.4/js/buttons.colVis.min.js') }}"></script>
<script src="{{ asset('assets/extentions/datatables/Buttons-2.3.4/js/buttons.bootstrap5.min.js') }}"></script>

<script src="{{ asset('assets/extentions/datatables/Select-1.6.0/js/dataTables.select.min.js') }}"></script>
<script src="{{ asset('assets/extentions/datatables/Select-1.6.0/js/select.dataTables.min.js') }}"></script>

<script src="{{ asset('assets/extentions/select2/js/select2.full.min.js') }}" defer></script>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<script src="{{ asset('assets/extentions/richtext/jquery.richtext.min.js') }}"></script>
<script src="{{ asset('assets/extentions/jquery.mask.js') }}"></script>

<script>
    // @formatter:off
    document.addEventListener("DOMContentLoaded", function() {
        window.ApexCharts && (new ApexCharts(document.getElementById('chart-revenue-bg'), {
            chart: {
                type: "area",
                fontFamily: 'inherit',
                height: 40.0,
                sparkline: {
                    enabled: true
                },
                animations: {
                    enabled: false
                },
            },
            dataLabels: {
                enabled: false,
            },
            fill: {
                opacity: .16,
                type: 'solid'
            },
            stroke: {
                width: 2,
                lineCap: "round",
                curve: "smooth",
            },
            series: [{
                name: "Profits",
                data: [37, 35, 44, 28, 36, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93,
                    53, 61, 27, 54, 43, 19, 46, 39, 62, 51, 35, 41, 67
                ]
            }],
            tooltip: {
                theme: 'dark'
            },
            grid: {
                strokeDashArray: 4,
            },
            xaxis: {
                labels: {
                    padding: 0,
                },
                tooltip: {
                    enabled: false
                },
                axisBorder: {
                    show: false,
                },
                type: 'datetime',
            },
            yaxis: {
                labels: {
                    padding: 4
                },
            },
            labels: [
                '2020-06-20', '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24',
                '2020-06-25', '2020-06-26', '2020-06-27', '2020-06-28', '2020-06-29',
                '2020-06-30', '2020-07-01', '2020-07-02', '2020-07-03', '2020-07-04',
                '2020-07-05', '2020-07-06', '2020-07-07', '2020-07-08', '2020-07-09',
                '2020-07-10', '2020-07-11', '2020-07-12', '2020-07-13', '2020-07-14',
                '2020-07-15', '2020-07-16', '2020-07-17', '2020-07-18', '2020-07-19'
            ],
            colors: [tabler.getColor("primary")],
            legend: {
                show: false,
            },
        })).render();
    });
    // @formatter:on
</script>
<script>
    // @formatter:off
    document.addEventListener("DOMContentLoaded", function() {
        window.ApexCharts && (new ApexCharts(document.getElementById('chart-new-clients'), {
            chart: {
                type: "line",
                fontFamily: 'inherit',
                height: 40.0,
                sparkline: {
                    enabled: true
                },
                animations: {
                    enabled: false
                },
            },
            fill: {
                opacity: 1,
            },
            stroke: {
                width: [2, 1],
                dashArray: [0, 3],
                lineCap: "round",
                curve: "smooth",
            },
            series: [{
                name: "May",
                data: [37, 35, 44, 28, 36, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93,
                    53, 61, 27, 54, 43, 4, 46, 39, 62, 51, 35, 41, 67
                ]
            }, {
                name: "April",
                data: [93, 54, 51, 24, 35, 35, 31, 67, 19, 43, 28, 36, 62, 61, 27, 39, 35,
                    41, 27, 35, 51, 46, 62, 37, 44, 53, 41, 65, 39, 37
                ]
            }],
            tooltip: {
                theme: 'dark'
            },
            grid: {
                strokeDashArray: 4,
            },
            xaxis: {
                labels: {
                    padding: 0,
                },
                tooltip: {
                    enabled: false
                },
                type: 'datetime',
            },
            yaxis: {
                labels: {
                    padding: 4
                },
            },
            labels: [
                '2020-06-20', '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24',
                '2020-06-25', '2020-06-26', '2020-06-27', '2020-06-28', '2020-06-29',
                '2020-06-30', '2020-07-01', '2020-07-02', '2020-07-03', '2020-07-04',
                '2020-07-05', '2020-07-06', '2020-07-07', '2020-07-08', '2020-07-09',
                '2020-07-10', '2020-07-11', '2020-07-12', '2020-07-13', '2020-07-14',
                '2020-07-15', '2020-07-16', '2020-07-17', '2020-07-18', '2020-07-19'
            ],
            colors: [tabler.getColor("primary"), tabler.getColor("gray-600")],
            legend: {
                show: false,
            },
        })).render();
    });
    // @formatter:on
</script>
<script>
    // @formatter:off
    document.addEventListener("DOMContentLoaded", function() {
        window.ApexCharts && (new ApexCharts(document.getElementById('chart-active-users'), {
            chart: {
                type: "bar",
                fontFamily: 'inherit',
                height: 40.0,
                sparkline: {
                    enabled: true
                },
                animations: {
                    enabled: false
                },
            },
            plotOptions: {
                bar: {
                    columnWidth: '50%',
                }
            },
            dataLabels: {
                enabled: false,
            },
            fill: {
                opacity: 1,
            },
            series: [{
                name: "Profits",
                data: [37, 35, 44, 28, 36, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93,
                    53, 61, 27, 54, 43, 19, 46, 39, 62, 51, 35, 41, 67
                ]
            }],
            tooltip: {
                theme: 'dark'
            },
            grid: {
                strokeDashArray: 4,
            },
            xaxis: {
                labels: {
                    padding: 0,
                },
                tooltip: {
                    enabled: false
                },
                axisBorder: {
                    show: false,
                },
                type: 'datetime',
            },
            yaxis: {
                labels: {
                    padding: 4
                },
            },
            labels: [
                '2020-06-20', '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24',
                '2020-06-25', '2020-06-26', '2020-06-27', '2020-06-28', '2020-06-29',
                '2020-06-30', '2020-07-01', '2020-07-02', '2020-07-03', '2020-07-04',
                '2020-07-05', '2020-07-06', '2020-07-07', '2020-07-08', '2020-07-09',
                '2020-07-10', '2020-07-11', '2020-07-12', '2020-07-13', '2020-07-14',
                '2020-07-15', '2020-07-16', '2020-07-17', '2020-07-18', '2020-07-19'
            ],
            colors: [tabler.getColor("primary")],
            legend: {
                show: false,
            },
        })).render();
    });
    // @formatter:on
</script>
<script>
    // @formatter:off
    document.addEventListener("DOMContentLoaded", function() {
        window.ApexCharts && (new ApexCharts(document.getElementById('chart-mentions'), {
            chart: {
                type: "bar",
                fontFamily: 'inherit',
                height: 240,
                parentHeightOffset: 0,
                toolbar: {
                    show: false,
                },
                animations: {
                    enabled: false
                },
                stacked: true,
            },
            plotOptions: {
                bar: {
                    columnWidth: '50%',
                }
            },
            dataLabels: {
                enabled: false,
            },
            fill: {
                opacity: 1,
            },
            series: [{
                name: "Web",
                data: [1, 0, 0, 0, 0, 1, 1, 0, 0, 0, 2, 12, 5, 8, 22, 6, 8, 6, 4, 1, 8, 24,
                    29, 51, 40, 47, 23, 26, 50, 26, 41, 22, 46, 47, 81, 46, 6
                ]
            }, {
                name: "Social",
                data: [2, 5, 4, 3, 3, 1, 4, 7, 5, 1, 2, 5, 3, 2, 6, 7, 7, 1, 5, 5, 2, 12, 4,
                    6, 18, 3, 5, 2, 13, 15, 20, 47, 18, 15, 11, 10, 0
                ]
            }, {
                name: "Other",
                data: [2, 9, 1, 7, 8, 3, 6, 5, 5, 4, 6, 4, 1, 9, 3, 6, 7, 5, 2, 8, 4, 9, 1,
                    2, 6, 7, 5, 1, 8, 3, 2, 3, 4, 9, 7, 1, 6
                ]
            }],
            tooltip: {
                theme: 'dark'
            },
            grid: {
                padding: {
                    top: -20,
                    right: 0,
                    left: -4,
                    bottom: -4
                },
                strokeDashArray: 4,
                xaxis: {
                    lines: {
                        show: true
                    }
                },
            },
            xaxis: {
                labels: {
                    padding: 0,
                },
                tooltip: {
                    enabled: false
                },
                axisBorder: {
                    show: false,
                },
                type: 'datetime',
            },
            yaxis: {
                labels: {
                    padding: 4
                },
            },
            labels: [
                '2020-06-20', '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24',
                '2020-06-25', '2020-06-26', '2020-06-27', '2020-06-28', '2020-06-29',
                '2020-06-30', '2020-07-01', '2020-07-02', '2020-07-03', '2020-07-04',
                '2020-07-05', '2020-07-06', '2020-07-07', '2020-07-08', '2020-07-09',
                '2020-07-10', '2020-07-11', '2020-07-12', '2020-07-13', '2020-07-14',
                '2020-07-15', '2020-07-16', '2020-07-17', '2020-07-18', '2020-07-19',
                '2020-07-20', '2020-07-21', '2020-07-22', '2020-07-23', '2020-07-24',
                '2020-07-25', '2020-07-26'
            ],
            colors: [tabler.getColor("primary"), tabler.getColor("primary", 0.8), tabler.getColor(
                "green", 0.8)],
            legend: {
                show: false,
            },
        })).render();
    });
    // @formatter:on
</script>
