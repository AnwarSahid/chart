<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chart</title>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>


    <!-- from cdn -->
    <script src="//unpkg.com/alpinejs" defer></script>
    <nav class="z-0 relative" x-data="{ open: false, menu: false, lokasi: false }">
        <div class="relative z-10 bg-indigo-300 shadow">
            <div class="max-w-7xl mx-auto px-2 sm:px-4 lg:px-8">
                <div class="relative flex items-center justify-between h-16">
                    <div class="flex items-center px-2 lg:px-0">
                        <a class="flex-shrink-0" href="#">
                            <div class="flex">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6 block lg:hidden h-12 w-16">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 002.25-2.25V6a2.25 2.25 0 00-2.25-2.25H6A2.25 2.25 0 003.75 6v2.25A2.25 2.25 0 006 10.5zm0 9.75h2.25A2.25 2.25 0 0010.5 18v-2.25a2.25 2.25 0 00-2.25-2.25H6a2.25 2.25 0 00-2.25 2.25V18A2.25 2.25 0 006 20.25zm9.75-9.75H18a2.25 2.25 0 002.25-2.25V6A2.25 2.25 0 0018 3.75h-2.25A2.25 2.25 0 0013.5 6v2.25a2.25 2.25 0 002.25 2.25z" />
                                </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor"
                                    class="w-6 h-6 hidden lg:block h-12 w-auto">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 002.25-2.25V6a2.25 2.25 0 00-2.25-2.25H6A2.25 2.25 0 003.75 6v2.25A2.25 2.25 0 006 10.5zm0 9.75h2.25A2.25 2.25 0 0010.5 18v-2.25a2.25 2.25 0 00-2.25-2.25H6a2.25 2.25 0 00-2.25 2.25V18A2.25 2.25 0 006 20.25zm9.75-9.75H18a2.25 2.25 0 002.25-2.25V6A2.25 2.25 0 0018 3.75h-2.25A2.25 2.25 0 0013.5 6v2.25a2.25 2.25 0 002.25 2.25z" />
                                </svg>

                                <div
                                    class=" flex w-full text-lg font-semibold justify-center items-center text-gray-800">
                                    Data
                                    Sensor</div>
                            </div>
                        </a>
                        <div class="hidden lg:block lg:ml-2">
                            <div class="flex">

                                <a href="#"
                                    class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-gray-800 font-semibold hover:bg-indigo-500 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 ">
                                    Chart </a>

                            </div>
                        </div>
                    </div>

                    <div class="flex lg:hidden">
                        <button @click="menu=!menu"
                            class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:bg-gray-700 focus:text-white transition duration-150 ease-in-out"
                            aria-label="Main menu" aria-expanded="false">
                            <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                            <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div x-show="menu" class="block md:hidden">
                <div class="px-2 pt-2 pb-3">

                    <a href="#"
                        class="mt-1 block px-3 py-2 rounded-md text-white font-semibold font-medium hover:bg-yellow-500 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">Chart
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <div class="mt-20 w-full  ">
        <div class="flex w-full justify-center">
            <div id="chart" class="w-full lg:w-1/3 justify-center">
            </div>
        </div>

        <div class="flex w-full justify-center">
            <div id="chart2" class="xl:w-1/2 justify-center items-center">
            </div>
        </div>
        <div class="flex w-full justify-center">
            <div id="chart3" class="xl:w-1/3 justify-center items-center">
            </div>
        </div>

    </div>


</body>

<script>
    var options = {
        chart: {
            type: 'line'
        },
        series: [{
            name: 'Sensor 1',
            data: [30, 40, 45, 50, 49, 60, 70, 91, 125, 100, 201, 11]
        }, {
            name: 'Sensor 2',
            data: [10, 20, 35, 40, 49, 50, 30, 11, 5, 19, 189, 32]
        }],
        markers: {
            size: 5,
        },
        xaxis: {
            categories: ['Januari', 'February', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September',
                'Oktober', 'November', 'Desember'
            ]
        },
        legend: {
            horizontalAlign: 'left',
            position: 'top',
        }
    }
    var chart = new ApexCharts(document.querySelector("#chart"), options);
    chart.render();





    // var options2 = {
    //   chart: {
    //     type: "donut"
    //   },
    //   dataLabels: {
    //      enabled: false
    //   },
    //   plotOptions: {
    //     pie: {
    //       donut: {
    //         labels: {
    //           show: true,
    //            name: {
    //           show: true,
    //           color: '#dfsda',

    //         },
    //         value: {
    //           show: true
    //         },
    //           total: {
    //           show: true,
    //           label: 'Total'
    //         }
    //         }
    //       }
    //     }
    //   },
    //   series: [30,40,45,50,49,60,70,91,125,100,201,11],
    //   labels: ['januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
    // };

    // var chart2 = new ApexCharts(document.querySelector("#chart2"), options2);

    // chart2.render();

    var options1 = {
        chart: {
            height: 280,
            type: "radialBar",
        },
        series: [70],
        colors: ["#20E647"],
        plotOptions: {
            radialBar: {
                startAngle: -135,
                endAngle: 135,
                track: {
                    background: '#333',
                    startAngle: -135,
                    endAngle: 135,
                },
                dataLabels: {
                    name: {
                        show: true,
                    },
                    value: {
                        fontSize: "30px",
                        show: true
                    }
                }
            }
        },
        fill: {
            type: "gradient",
            gradient: {
                shade: "dark",
                type: "horizontal",
                gradientToColors: ["#87D4F9"],
                stops: [0, 100]
            }
        },
        stroke: {
            lineCap: "butt"
        },
        labels: ["Sensor"]
    };

    new ApexCharts(document.querySelector("#chart2"), options1).render();


    var options = {
        chart: {
            height: 280,
            type: "radialBar",
        },

        series: [67],
        colors: ["#20E647"],
        plotOptions: {
            radialBar: {
                hollow: {
                    margin: 0,
                    size: "70%",
                    background: "#293450"
                },
                track: {
                    dropShadow: {
                        enabled: true,
                        top: 2,
                        left: 0,
                        blur: 4,
                        opacity: 0.15
                    }
                },
                dataLabels: {
                    name: {
                        offsetY: -10,
                        color: "#fff",
                        fontSize: "13px"
                    },
                    value: {
                        color: "#fff",
                        fontSize: "30px",
                        show: true
                    }
                }
            }
        },
        fill: {
            type: "gradient",
            gradient: {
                shade: "dark",
                type: "vertical",
                gradientToColors: ["#87D4F9"],
                stops: [0, 100]
            }
        },
        stroke: {
            lineCap: "round"
        },
        labels: ["Sensor"]
    };

    var chart = new ApexCharts(document.querySelector("#chart3"), options);

    chart.render();
</script>

</html>
