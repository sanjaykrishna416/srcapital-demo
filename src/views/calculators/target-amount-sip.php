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


    <!-- --- lumpum target calculator----- -->

    <section class="bg-light" id="toolaAndCalculators">
        <div class="container py-5">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-7">
                        <div class="row calculator">
                            <div class="linner col-sm-12 my-3 row-eq-height">
                                <div class="card card-body p-4 pb-0 hover-top shadow-only-hover">

                                    <p class="m-0 pb-2">
                                        Target Amount (Rs)
                                    </p>

                                    <p class="m-0">
                                        <input type="text" class="form-control mb-3" oninput="formatINR(this)"
                                            value="1,00,00,000" id="amount" maxlength="15">
                                    </p>

                                    <!-- Slider Section -->
                                    <div class="slider slider-horizontal">
                                        <div id="amount_slider" style="margin:0px;"></div>

                                    </div>

                                    <div class="steps">
                                        <span style="left: 0%;" class="tick">|<br>
                                            <span class="marker">1 Crore</span>
                                        </span>
                                        <span style="left: 21%;" class="tick">|<br>
                                            <span class="marker">5 Crores</span>
                                        </span>
                                        <span style="left: 47%;" class="tick">|<br>
                                            <span class="marker">10 Crores</span>
                                        </span>
                                        <span style="left: 72.50%;" class="tick">|<br>
                                            <span class="marker">15 Crores</span>
                                        </span>
                                        <span style="left: 100%;" class="tick">|<br>
                                            <span class="marker">20 Crores</span>
                                        </span>
                                    </div>

                                    <p></p>
                                </div>
                                <div class="line-bottom"></div>

                            </div>

                            <div class="linner col-sm-12 my-3 row-eq-height">
                                <div class="card card-body p-4 pb-0 hover-top shadow-only-hover">
                                    <p class="m-0 pb-2">
                                        Investment Period (in years)
                                    </p>


                                    <p class="m-0">
                                        <input type="text" class="form-control mb-3" value="30" id="years"
                                            maxlength="3">
                                    </p>

                                    <!-- Slider Section -->
                                    <div class="slider slider-horizontal">
                                        <div id="years_slider" style="margin:0px;"></div>

                                    </div>
                                    <div class="steps" id="loantermsteps">
                                        <span style="left: 0%;" class="tick">|<br>
                                            <span class="marker">10</span></span><span style="left: 16.66%;"
                                            class="tick">|<br>
                                            <span class="marker">25</span></span><span style="left: 44.44%;"
                                            class="tick">|<br>
                                            <span class="marker">50</span></span><span style="left: 71.22%;"
                                            class="tick">|<br>
                                            <span class="marker">75</span></span><span style="left: 100%;"
                                            class="tick">|<br>
                                            <span class="marker">100</span></span>
                                    </div>
                                    <p></p>
                                </div>
                                <div class="line-bottom"></div>

                            </div>


                            <div class="linner col-sm-12 my-3 row-eq-height">
                                <div class="card card-body p-4 pb-0 hover-top shadow-only-hover">
                                    <p class="m-0 pb-2">
                                        The expected rate of inflation over the years (% per annum)
                                    </p>


                                    <p class="m-0">
                                        <input type="text" class="form-control mb-3" value="5" id="inc_rate"
                                            maxlength="4">
                                    </p>

                                    <!-- Slider Section -->
                                    <div class="slider slider-horizontal">
                                        <div id="inc_rate_slider" style="margin:0px;"></div>

                                    </div>
                                    <div class="steps">
                                        <div style="left: 0%;" class="tick">|<br> <span class="marker">0</span></div>
                                        <div style="left: 25%;" class="tick">|<br> <span class="marker">2.5</span></div>
                                        <div style="left: 50%;" class="tick">|<br> <span class="marker">5.0</span></div>
                                        <div style="left: 74%;" class="tick">|<br> <span class="marker">7.5</span></div>
                                        <div style="left: 100%;" class="tick">|<br> <span class="marker">10.0</span>
                                        </div>
                                    </div>
                                    <p></p>
                                </div>
                                <div class="line-bottom"></div>

                            </div>


                            <div class="linner col-sm-12 my-3 row-eq-height">
                                <div class="card card-body p-4 pb-0 hover-top shadow-only-hover">
                                    <p class="m-0 pb-2">
                                        What rate of return would you expect your SIP investment to generate (% per
                                        annum)
                                    </p>

                                    <p class="m-0">
                                        <input type="text" class="form-control mb-3" value="12" id="interest"
                                            maxlength="4">
                                    </p>

                                    <!-- Slider Section -->
                                    <div class="slider slider-horizontal">
                                        <div id="interest_slider" style="margin:0px;"></div>

                                    </div>
                                    <div class="steps">
                                        <span style="left: 0%;" class="tick">|<br>
                                            <span class="marker">0</span></span><span style="left: 10%;"
                                            class="tick">|<br>
                                            <span class="marker">2.5</span></span><span style="left: 20%;"
                                            class="tick">|<br>
                                            <span class="marker">5</span></span><span style="left: 30%;"
                                            class="tick">|<br>
                                            <span class="marker">7.5</span></span><span style="left: 40%;"
                                            class="tick">|<br>
                                            <span class="marker">10</span></span><span style="left: 50%;"
                                            class="tick">|<br>
                                            <span class="marker">12.5</span></span><span style="left: 60%;"
                                            class="tick">|<br>
                                            <span class="marker">15</span></span><span style="left: 70%;"
                                            class="tick">|<br>
                                            <span class="marker">17.5</span></span><span style="left: 80%;"
                                            class="tick">|<br>
                                            <span class="marker">20</span></span><span style="left: 90%;"
                                            class="tick">|<br>
                                            <span class="marker">22.5</span></span><span style="left: 100%;"
                                            class="tick">|<br>
                                            <span class="marker">25</span></span>
                                    </div>
                                    <p></p>
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
                                        data-highcharts-chart="1" style="overflow: hidden;">
                                        <div id="highcharts-screen-reader-region-before-1" style="position: relative;"
                                            aria-hidden="false">
                                            <div aria-hidden="false"
                                                style="position: absolute; width: 1px; height: 1px; overflow: hidden; white-space: nowrap; clip: rect(1px, 1px, 1px, 1px); margin-top: -3px; opacity: 0.01;">
                                                <h6>Break-up of Total Payment</h6>
                                                <div>Pie chart with 2 slices.</div>
                                            </div>
                                        </div>
                                        <div id="pie-chart-container" style="width:100%; height:300px;"></div>
                                    </div>
                                </div>
                                <div class="line-bottom"></div>
                            </div>
                        </div>

                        <div class="linner card text-center">
                            <div class="card-body p-3">
                                <div class="row">
                                    <span class="text-muted p mb-3">Monthly SIP investment required</span>
                                    <p class="h6 text-sm mt-0 mb-0  d-lg-block">₹ <span id="res_monthly_savings"></span>
                                        ( <span id="res_years"></span>
                                        years you need to save )</p>
                                </div>
                            </div>
                            <div class="line-bottom"></div>
                        </div>

                        <div class="linner card text-center mt-3">
                            <div class="card-body p-3">
                                <div class="row">
                                    <span class="text-muted p mb-3">Number of years you need to save</span>
                                    <p class="h6 text-sm mt-0 mb-0  d-lg-block"><span class="text-theme-primary"
                                            id="res_years_1"></span> Years</p>
                                </div>
                            </div>
                            <div class="line-bottom"></div>
                        </div>

                        <div class="linner card text-center mt-3">
                            <div class="card-body p-3">
                                <div class="row">
                                    <span class="p mb-3 text-muted">Your targeted Amount (Inflation
                                        adjusted)</span>
                                    <p class="h6 text-sm mt-0 mb-0  d-lg-block">₹ <span class="text-theme-primary"
                                            id="res_target_wealth"></span></p>
                                </div>
                            </div>
                            <div class="line-bottom"></div>
                        </div>

                        <div class="linner card text-center mt-3">
                            <div class="card-body p-3">
                                <div class="row">
                                    <span class="text-muted p mb-3">Total Amount Invested through SIP in <span
                                            id="res_years"></span> years</span>
                                    <p class="h6 text-sm mt-0 mb-0  d-lg-block">₹ <span class="text-theme-primary"
                                            id="res_invested_amount"></span></p>
                                </div>
                            </div>
                            <div class="line-bottom"></div>
                        </div>

                        <div class="linner card text-center mt-3">
                            <div class="card-body p-3">
                                <div class="row">
                                    <span class="p mb-3 text-muted">Total Growth Amount</span>
                                    <p class="h6 text-sm mt-0 mb-0  d-lg-block">₹ <span class="text-theme-primary"
                                            id="res_earning_amount"></span></p>
                                </div>
                            </div>
                            <div class="line-bottom"></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- --- lumpum target calculator----- -->



    <?php include_once('src/views/layouts/footer.php') ?>
    <script src="https://code.highcharts.com/highcharts.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const sliders = [{
                id: "amount",
                min: 10000000,
                max: 200000000,
                step: 1000,
                initialValue: 10000000,
                format: true
            },
            {
                id: "years",
                min: 10,
                max: 100,
                step: 1,
                initialValue: 30,
                format: false
            },
            {
                id: "inc_rate",
                min: 0,
                max: 10,
                step: 0.1,
                initialValue: 12.5,
                format: false
            },
            {
                id: "interest",
                min: 0,
                max: 25,
                step: 0.1,
                initialValue: 10,
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
                    let val = parseFloat(input.value.replace(/[^\d.]/g, "")) || min;
                    val = Math.round(val / step) * step;
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
                    amount: document.getElementById("amount").value.replace(/,/g, ""),
                    years: document.getElementById("years").value,
                    interest: document.getElementById("interest").value,
                    inc_rate: document.getElementById("inc_rate").value
                };

                fetch("/api/getSIPTargetCalculator", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "Accept": "application/json"
                    },
                    body: JSON.stringify(params)
                })
                    .then(response => response.json())
                    .then(data => {
                        // console.log(data);
                        if (data.error) {
                            console.error("API Error:", data.error);
                        } else {
                            updateChart(data.invested_amount, data.growth_amount);
                            updateUiValues(data);
                        }
                    })
                    .catch(error => console.error("Error calling API:", error));
            }

            function initializeChart() {
                let container = document.getElementById("pie-chart-container");

                chart = Highcharts.chart("pie-chart-container", {
                    chart: {
                        type: "pie"
                    },
                    title: {
                        text: "Investment Breakdown"
                    },
                    tooltip: {
                        pointFormat: "{series.name}: <b>{point.percentage:.1f}%</b>"
                    },
                    plotOptions: {
                        pie: {
                            cursor: "pointer",
                            dataLabels: {
                                enabled: false,
                                format: "{point.name}: {point.percentage:.1f}%"
                            }
                        }
                    },
                    series: [{
                        name: "Share",
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
                document.getElementById("res_monthly_savings").innerText = new Intl.NumberFormat("en-IN").format(
                    data.sip_amount);
                document.getElementById("res_years_1").innerText = new Intl.NumberFormat("en-IN").format(data
                    .period);
                document.getElementById("res_years").innerText = new Intl.NumberFormat("en-IN").format(data.period);
                document.getElementById("res_target_wealth").innerText = new Intl.NumberFormat("en-IN").format(data
                    .target_wealth);
                document.getElementById("res_invested_amount").innerText = new Intl.NumberFormat("en-IN").format(
                    data.invested_amount);
                document.getElementById("res_earning_amount").innerText = new Intl.NumberFormat("en-IN").format(data
                    .growth_amount);
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