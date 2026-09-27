<!DOCTYPE html>
<html lang="reactjs">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link href="<?= $favIcon ?>" rel="shortcut icon" type="image/png">

</head>

<body>



    <?php include_once('src/components/preLoader.php') ?>
    <?php include_once('src/views/layouts/navbar.php') ?>

    <!-- -------page header------ -->
    <?php require_once('src/components/pageHeader.php'); ?>
    <!-- -------page header------ -->


    <section class="bg-light" id="toolaAndCalculators">
        <div class="container py-5">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-7">
                        <div class="row calculator">
                            <div class="linner col-sm-12 my-3 row-eq-height">
                                <div class="card card-body p-4 pb-0 hover-top shadow-only-hover">

                                    <p class="m-0 pb-2">
                                        How much you can invest through monthly SIP? (Rs)
                                    </p>

                                    <p class="m-0">
                                        <input type="text" class="form-control mb-3" oninput="formatINR(this)"
                                            value="25,000" id="sip_amount" maxlength="9">
                                    </p>

                                    <!-- Slider Section -->
                                    <div class="slider slider-horizontal">
                                        <div id="sip_amount_slider" style="margin:0px;"></div>

                                    </div>

                                    <!-- Steps / Milestones -->
                                    <div class="steps">
                                        <span style="left: 0%;" class="tick">|<br><span class="marker">0</span></span>
                                        <span style="left: 25%;" class="tick">|<br><span
                                                class="marker">25k</span></span>
                                        <span style="left: 50%;" class="tick">|<br><span
                                                class="marker">50k</span></span>
                                        <span style="left: 74%;" class="tick">|<br><span
                                                class="marker">75k</span></span>
                                        <span style="left: 100%;" class="tick">|<br><span
                                                class="marker">1Lakh</span></span>
                                    </div>

                                </div>
                                <div class="line-bottom"></div>
                            </div>

                            <div class="linner col-sm-12 my-3 row-eq-height">
                                <div class="card card-body p-4 pb-0 hover-top shadow-only-hover">
                                    <p class="m-0 pb-2">
                                        How many months will you continue the SIP?
                                    </p>

                                    <!-- Current Age Slider Section -->
                                    <p class="m-0">
                                        <input type="text" class="form-control mb-3" value="120" id="months"
                                            maxlength="3">
                                    </p>

                                    <!-- Slider Section -->
                                    <div class="slider slider-horizontal">
                                        <div id="months_slider" style="margin:0px;"></div>

                                    </div>

                                    <!-- Steps / Milestones -->
                                    <div class="steps" id="loantermsteps">
                                        <span style="left: 0%;" class="tick">|<br>
                                            <span class="marker">0</span></span><span style="left: 16.66%;"
                                            class="tick">|<br>
                                            <span class="marker">75</span></span><span style="left: 33.33%;"
                                            class="tick">|<br>
                                            <span class="marker">150</span></span><span style="left: 50%;"
                                            class="tick">|<br>
                                            <span class="marker">225</span></span><span style="left: 66%;"
                                            class="tick">|<br>
                                            <span class="marker">300</span></span><span style="left: 82%;"
                                            class="tick">|<br>
                                            <span class="marker">375</span></span><span style="left: 100%;"
                                            class="tick">|<br>
                                            <span class="marker">450</span></span>
                                    </div>
                                </div>
                                <div class="line-bottom"></div>
                            </div>


                            <div class="linner col-sm-12 my-3 row-eq-height">
                                <div class="card card-body p-4 pb-0 hover-top shadow-only-hover">
                                    <p class="m-0 pb-2">
                                        What rate of return do you expect? (% per annum)
                                    </p>

                                    <!-- Retirement Age Slider Section -->
                                    <p class="m-0">
                                        <input type="text" class="form-control mb-3" value="12" id="rate_of_return"
                                            maxlength="4">
                                    </p>

                                    <!-- Slider Section -->
                                    <div class="slider slider-horizontal">
                                        <div id="rate_of_return_slider" style="margin:0px;"></div>
                                    </div>

                                    <!-- Steps / Milestones -->
                                    <div class="steps">
                                        <span style="left: 0%;" class="tick">|<br>
                                            <span class="marker">5</span></span><span style="left: 16.66%;"
                                            class="tick">|<br>
                                            <span class="marker">7.5</span></span><span style="left: 33.33%;"
                                            class="tick">|<br>
                                            <span class="marker">10</span></span><span style="left: 50%;"
                                            class="tick">|<br>
                                            <span class="marker">12.5</span></span><span style="left: 66%;"
                                            class="tick">|<br>
                                            <span class="marker">15</span></span><span style="left: 82%;"
                                            class="tick">|<br>
                                            <span class="marker">17.5</span></span><span style="left: 100%;"
                                            class="tick">|<br>
                                            <span class="marker">20</span></span>
                                    </div>
                                </div>
                                <div class="line-bottom"></div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-5 my-3">
                        <div class="row pb-4">
                            <div class="linner col-sm-12">
                                <div class="card card-body p-4 pb-0 hover-top shadow-only-hover">
                                    <div id="emipiechart" aria-hidden="false" role="region"
                                        aria-label="Break-up of Total Payment. Highcharts interactive chart."
                                        data-highcharts-chart="3" style="overflow: hidden;">
                                        <div id="highcharts-screen-reader-region-before-3" style="position: relative;"
                                            aria-hidden="false">
                                            <div aria-hidden="false"
                                                style="position: absolute; width: 1px; height: 1px; overflow: hidden; white-space: nowrap; clip: rect(1px, 1px, 1px, 1px); margin-top: -3px; opacity: 0.01;">
                                                <h6>Break-up of Total Payment</h6>
                                                <div>Pie chart with 2 slices.</div>
                                            </div>
                                            <div id="pie-chart-container" style="width:100%; height:300px;"></div>

                                        </div>
                                    </div>
                                </div>
                                <div class="line-bottom"></div>
                            </div>
                        </div>


                        <div class="linner card text-center">
                            <div class="card-body p-3">
                                <div class="row">
                                    <span class="text-muted p mb-3">Total SIP Amount Invested</span>
                                    <p class="h6 text-sm mt-0 mb-0  d-lg-block">₹ <span id="total_invested"></span></p>
                                </div>
                            </div>
                            <div class="line-bottom"></div>
                        </div>

                        <div class="linner card text-center mt-3">
                            <div class="card-body p-3">
                                <div class="row">
                                    <span class="text-muted p mb-3">Total Growth years</span>
                                    <p class="h6 text-sm mt-0 mb-0  d-lg-block">₹ <span class="text-theme-primary"
                                            id="total_growth"></span></p>
                                </div>
                            </div>
                            <div class="line-bottom"></div>
                        </div>

                        <div class="linner card text-center mt-3">
                            <div class="card-body p-3">
                                <div class="row">
                                    <span class="p mb-3 text-muted">Total Future Value</span>
                                    <p class="h6 text-sm mt-0 mb-0  d-lg-block">₹ <span class="text-theme-primary"
                                            id="future_value"></span></p>
                                </div>
                            </div>
                            <div class="line-bottom"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <?php include_once('src/views/layouts/footer.php') ?>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const sliders = [{
                id: "sip_amount",
                min: 0,
                max: 100000,
                step: 1000,
                initialValue: 25000,
                format: true
            },
            {
                id: "months",
                min: 0,
                max: 450,
                step: 1,
                initialValue: 120,
                format: false
            },
            {
                id: "rate_of_return",
                min: 5,
                max: 20,
                step: 0.1,
                initialValue: 12.5,
                format: false
            }
            ];

            let apiTimeout;

            sliders.forEach(setupSlider);

            function setupSlider({
                id,
                min,
                max,
                step,
                initialValue,
                format
            }) {
                let input = document.getElementById(id);
                let container = document.getElementById(`${id}_slider`);

                if (!container || !input) {
                    console.error(`Slider container or input not found for: ${id}`);
                    return;
                }

                // Create Range Input with Slider Fill Effect
                container.innerHTML = `
            <input type="range" id="${id}_range" min="${min}" max="${max}" step="${step}" value="${initialValue}" class="slider-track">
        `;
                let rangeInput = document.getElementById(`${id}_range`);

                function formatCurrency(value) {
                    return new Intl.NumberFormat("en-IN").format(value);
                }

                function triggerApiWithDelay() {
                    clearTimeout(apiTimeout);
                    apiTimeout = setTimeout(callApiAndUpdateCharts, 200);
                }

                function updateSliderStyle(value) {
                    let percent = ((value - min) / (max - min)) * 100;
                    rangeInput.style.setProperty("--progress", `${percent}%`);
                }

                function syncInputWithSlider() {
                    let val = parseFloat(rangeInput.value);
                    input.value = format ? formatCurrency(val) : val;
                    updateSliderStyle(val);
                    triggerApiWithDelay();
                }

                function syncSliderWithInput() {
                    let val = parseFloat(input.value.replace(/,/g, "")) || min;
                    val = Math.max(min, Math.min(max, val));
                    rangeInput.value = val;
                    updateSliderStyle(val);
                    triggerApiWithDelay();
                }

                input.addEventListener("input", syncSliderWithInput);
                input.addEventListener("change", syncSliderWithInput);
                rangeInput.addEventListener("input", syncInputWithSlider);

                syncSliderWithInput();
            }


            function callApiAndUpdateCharts() {
                let params = {
                    sip_amount: document.getElementById("sip_amount").value.replace(/,/g, ""),
                    months: document.getElementById("months").value,
                    rate_of_return: document.getElementById("rate_of_return").value
                };


                fetch("/api/getSIPCal", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "Accept": "application/json"
                    },
                    body: JSON.stringify(params)
                })
                    .then(response => response.json())
                    .then(data => {
                        if (data.error) {
                            console.error("API Error:", data.error);
                        } else {
                            updateChart(data.invested_amount, data.growth_value);
                            updateUiValues(data);
                        }
                    })
                    .catch(error => console.error("Error calling API:", error));
            }

            function initializeChart() {
                let container = document.getElementById("pie-chart-container");


                chart = Highcharts.chart('pie-chart-container', {
                    chart: {
                        type: 'pie'
                    },
                    title: {
                        text: 'Investment Breakdown'
                    },
                    tooltip: {
                        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                    },
                    plotOptions: {
                        pie: {
                            cursor: 'pointer',
                            dataLabels: {
                                enabled: false,
                                format: '{point.name}: {point.percentage:.1f}%'
                            }
                        }
                    },
                    series: [{
                        name: 'Share',
                        colorByPoint: true,
                        data: []
                    }],
                    credits: {
                        enabled: false
                    }
                });

                initialLoad = false;
            }

            function updateChart(investedAmount, totalEarnings) {
                const investedColor = getComputedStyle(document.documentElement).getPropertyValue('--secondary-color').trim();
                const earningsColor = getComputedStyle(document.documentElement).getPropertyValue('--primary-color').trim();
                let chartContainer = document.getElementById("pie-chart-container");
                let total = investedAmount + totalEarnings;

                Highcharts.chart("pie-chart-container", {
                    chart: {
                        type: "pie",
                        backgroundColor: null
                    },
                    title: {
                        text: ""
                    },
                    tooltip: {
                        pointFormatter: function () {
                            let percentage = ((this.y / total) * 100).toFixed(1);
                            return `<b>${this.name}</b>: ${percentage}%`;
                        }
                    },
                    plotOptions: {
                        pie: {
                            allowPointSelect: true,
                            cursor: "pointer",
                            dataLabels: {
                                enabled: false
                            },
                            showInLegend: true
                        }
                    },
                    series: [{
                        name: "Breakdown",
                        colorByPoint: true,
                        data: [{
                            name: "Invested Amount",
                            y: investedAmount,
                            color: investedColor
                        },
                        {
                            name: "Total Earnings",
                            y: totalEarnings,
                            color: earningsColor
                        }
                        ]
                    }],
                    legend: {
                        align: "center",
                        verticalAlign: "bottom",
                        layout: "horizontal",
                        borderWidth: 1,
                        itemMarginTop: 5,
                        itemMarginBottom: 5,
                        itemStyle: {
                            fontSize: "13px",
                            fontWeight: "bold",
                            color: "#333333"
                        }
                    },
                    credits: {
                        enabled: false
                    }
                });
            }

            function updateUiValues(data) {
                document.getElementById("total_invested").innerText = new Intl.NumberFormat("en-IN").format(data
                    .invested_amount);
                document.getElementById("total_growth").innerText = new Intl.NumberFormat("en-IN").format(data
                    .growth_value);
                document.getElementById("future_value").innerText = new Intl.NumberFormat("en-IN").format(data
                    .maturity_amount);
            }

            initializeChart();
        });

        function formatINR(input) {
            let value = input.value.replace(/,/g, '').replace(/[^\d]/g, '');
            if (value) {
                let x = value.split('.');
                let lastThree = x[0].substring(x[0].length - 3);
                let otherNumbers = x[0].substring(0, x[0].length - 3);
                if (otherNumbers !== '') {
                    lastThree = ',' + lastThree;
                }
                let result = otherNumbers.replace(/\B(?=(\d{2})+(?!\d))/g, ",") + lastThree;
                if (x.length > 1) {
                    result += '.' + x[1];
                }
                input.value = result;
            }
        }
    </script>
</body>



</html>