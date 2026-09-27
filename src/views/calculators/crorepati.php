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

    <div id="toastContainer" class="position-fixed top-0 end-0 p-3" style="z-index: 9999;"></div>

    <section class="bg-light" id="toolaAndCalculators">
        <div class="container py-5">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-7">
                        <div class="row calculator">
                            <div class="linner col-sm-12 my-3 row-eq-height">
                                <div class="card card-body p-4 pb-0 hover-top shadow-only-hover">
                                    <p class="m-0 pb-2">
                                        How many Crores (at current value) you would need to consider yourself wealthy
                                        (Rs)
                                    </p>

                                    <p class="m-0">
                                        <input type="text" class="form-control mb-3" value="5,00,00,000"
                                            oninput="formatINR(this)" id="amount" maxlength="12">
                                    </p>

                                    <!-- Slider Section -->
                                    <div class="slider slider-horizontal">
                                        <div id="amount_slider" style="margin:0px;"></div>
                                    </div>

                                    <!-- Steps / Milestones -->
                                    <div class="steps">
                                        <span style="left: 0%;" class="tick">|<br><span class="marker">1
                                                Cr</span></span>
                                        <span style="left: 21.05%;" class="tick">|<br><span class="marker">5
                                                Cr</span></span>
                                        <span style="left: 47.36%;" class="tick">|<br><span class="marker">10
                                                Cr</span></span>
                                        <span style="left: 72.68%;" class="tick">|<br><span class="marker">15
                                                Cr</span></span>
                                        <span style="left: 100%;" class="tick">|<br><span class="marker">20
                                                Cr</span></span>
                                    </div>
                                </div>
                                <div class="line-bottom"></div>
                            </div>

                            <div class="linner col-sm-12 my-3 row-eq-height">
                                <div class="card card-body p-4 pb-0 hover-top shadow-only-hover">
                                    <p class="m-0 pb-2">
                                        Your current age (in years)
                                    </p>

                                    <!-- Current Age Slider Section -->
                                    <p class="m-0">
                                        <input type="text" class="form-control mb-3" value="30" id="current_age"
                                            maxlength="3">
                                    </p>

                                    <!-- Slider Section -->
                                    <div class="slider slider-horizontal">
                                        <div id="current_age_slider" style="margin:0px;"></div>
                                    </div>

                                    <!-- Steps / Milestones -->
                                    <div class="steps">
                                        <span style="left: 0%;" class="tick">|<br><span class="marker">10</span></span>
                                        <span style="left: 16.66%;" class="tick">|<br><span
                                                class="marker">25</span></span>
                                        <span style="left: 44.44%;" class="tick">|<br><span
                                                class="marker">50</span></span>
                                        <span style="left: 71.22%;" class="tick">|<br><span
                                                class="marker">75</span></span>
                                        <span style="left: 100%;" class="tick">|<br><span
                                                class="marker">100</span></span>
                                    </div>
                                </div>
                                <div class="line-bottom"></div>

                            </div>


                            <div class="linner col-sm-12 my-3 row-eq-height">
                                <div class="card card-body p-4 pb-0 hover-top shadow-only-hover">
                                    <p class="m-0 pb-2">
                                        The age when you want to become a Crorepati (in years)
                                    </p>

                                    <!-- Retirement Age Slider Section -->
                                    <p class="m-0">
                                        <input type="text" class="form-control mb-3" value="60" id="retire_age"
                                            maxlength="3">
                                    </p>

                                    <!-- Slider Section -->
                                    <div class="slider slider-horizontal">
                                        <div id="retire_age_slider" style="margin:0px;"></div>
                                    </div>

                                    <!-- Steps / Milestones -->
                                    <div class="steps">
                                        <span style="left: 0%;" class="tick">|<br><span class="marker">10</span></span>
                                        <span style="left: 16.66%;" class="tick">|<br><span
                                                class="marker">25</span></span>
                                        <span style="left: 44.44%;" class="tick">|<br><span
                                                class="marker">50</span></span>
                                        <span style="left: 71.22%;" class="tick">|<br><span
                                                class="marker">75</span></span>
                                        <span style="left: 100%;" class="tick">|<br><span
                                                class="marker">100</span></span>
                                    </div>
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

                                    <!-- Steps / Milestones -->
                                    <div class="steps">
                                        <span style="left: 0%;" class="tick">|<br><span class="marker">0</span></span>
                                        <span style="left: 25%;" class="tick">|<br><span
                                                class="marker">2.5</span></span>
                                        <span style="left: 49%;" class="tick">|<br><span
                                                class="marker">5.0</span></span>
                                        <span style="left: 74%;" class="tick">|<br><span
                                                class="marker">7.5</span></span>
                                        <span style="left: 100%;" class="tick">|<br><span
                                                class="marker">10</span></span>
                                    </div>

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

                                    <!-- Steps / Milestones -->
                                    <div class="steps">
                                        <span style="left: 0%;" class="tick">|<br><span class="marker">5</span></span>
                                        <span style="left: 16.66%;" class="tick">|<br><span
                                                class="marker">7.5</span></span>
                                        <span style="left: 33.33%;" class="tick">|<br><span
                                                class="marker">10</span></span>
                                        <span style="left: 49%;" class="tick">|<br><span
                                                class="marker">12.5</span></span>
                                        <span style="left: 66%;" class="tick">|<br><span class="marker">15</span></span>
                                        <span style="left: 82%;" class="tick">|<br><span
                                                class="marker">17.5</span></span>
                                        <span style="left: 100%;" class="tick">|<br><span
                                                class="marker">20</span></span>
                                    </div>

                                </div>
                                <div class="line-bottom"></div>

                            </div>
                            <div class="linner col-sm-12 my-3 row-eq-height">
                                <div class="card card-body p-4 pb-0 hover-top shadow-only-hover">
                                    <p class="m-0 pb-2">
                                        How much savings you have now (Rs)
                                    </p>
                                    <p class="m-0">
                                        <input type="text" class="form-control mb-3" value="25,00,000"
                                            id="savings_amount" maxlength="12">
                                    </p>

                                   
                                    <div class="slider slider-horizontal">
                                        <div id="savings_amount_slider" style="margin:0px;"></div>

                                    </div>
                                   
                                    <div class="steps">
                                        <span style="left: 0%;" class="tick">|<br><span class="marker">0</span></span>
                                        <span style="left: 25%;" class="tick">|<br><span
                                                class="marker">25L</span></span>
                                        <span style="left: 50%;" class="tick">|<br><span
                                                class="marker">50L</span></span>
                                        <span style="left: 74%;" class="tick">|<br><span
                                                class="marker">75L</span></span>
                                        <span style="left: 100%;" class="tick">|<br><span class="marker">1
                                                Crore</span></span>
                                    </div>
                                </div>
                                <div class="line-bottom"></div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 my-3">
                        <div class="row pb-4">
                            <div class="linner col-sm-12">
                                <div class=" card card-body p-4 pb-0 hover-top shadow-only-hover">
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
                                            <div id="chart-container" style="width:100%; height:300px;"></div>

                                        </div>
                                    </div>
                                </div>
                                <div class="line-bottom"></div>
                            </div>
                        </div>
                        <div class="linner card text-center">
                            <div class="card-body p-3">
                                <div class="row">
                                    <span class="text-muted p mb-3">Monthly SIP Amount</span>
                                    <p class="h6 text-sm mt-0 mb-0  d-lg-block text-design">₹ <span
                                            id="res_monthly_savings"></span>
                                        ( <span id="res_years"></span>
                                        years you need to save )</p>
                                </div>
                            </div>
                            <div class="line-bottom"></div>
                        </div>

                        <div class="linner card text-center mt-3">
                            <div class="card-body p-3">
                                <div class="row">
                                    <span class="text-muted p mb-3">Total Amount Invested through SIP in <span
                                            id="res_years_1"></span> years</span>
                                    <p class="h6 text-sm mt-0 mb-0  d-lg-block text-design">₹ <span
                                            class="text-theme-primary" id="res_invested_amount"></span></p>
                                </div>
                            </div>
                            <div class="line-bottom"></div>
                        </div>

                        <div class="linner card text-center mt-3">
                            <div class="card-body p-3">
                                <div class="row">
                                    <span class="p mb-3 text-muted">Total Growth Amount</span>
                                    <p class="h6 text-sm mt-0 mb-0  d-lg-block text-design">₹ <span
                                            class="text-theme-primary" id="res_earning_amount"></span></p>
                                </div>
                            </div>
                            <div class="line-bottom"></div>
                        </div>

                        <div class="linner card text-center mt-3">
                            <div class="card-body p-3">
                                <div class="row">
                                    <span class="text-muted p mb-3">Your targeted Wealth Amount (Inflation
                                        adjusted)</span>
                                    <p class="h6 text-sm mt-0 mb-0  d-lg-block text-design">₹ <span
                                            class="text-theme-primary" id="res_target_wealth"></span></p>
                                </div>
                            </div>
                            <div class="line-bottom"></div>
                        </div>

                        <div class="linner card text-center mt-3">
                            <div class="card-body p-3">
                                <div class="row">
                                    <span class="p mb-3 text-muted">Growth of your Savings Amount (<span
                                            id="res_rate_return">12</span>per annum)</span>
                                    <p class="h6 text-sm mt-0 mb-0  d-lg-block text-design">₹ <span
                                            class="text-theme-primary" id="res_target_savings"></span></p>
                                </div>
                            </div>
                            <div class="line-bottom"></div>
                        </div>

                        <div class="linner card text-center mt-3">
                            <div class="card-body p-3">
                                <div class="row">
                                    <span class="text-muted p mb-3">Final Targeted Amount (Minus growth of your
                                        savings)</span>
                                    <p class="h6 text-sm mt-0 mb-0  d-lg-block text-design">₹ <span
                                            class="text-theme-primary" id="res_target_amount"></span></p>
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
        let pdf_answer_parm = {};
        let pdf_question_parm = {}
        document.addEventListener("DOMContentLoaded", function () {
            const sliders = [{
                id: "amount",
                min: 10000000,
                max: 200000000,
                step: 1000000,
                initialValue: 50000000,
                format: true
            },
            {
                id: "current_age",
                min: 10,
                max: 100,
                step: 1,
                initialValue: 30,
                format: false
            },
            {
                id: "retire_age",
                min: 10,
                max: 100,
                step: 1,
                initialValue: 60,
                format: false
            },
            {
                id: "inc_rate",
                min: 0,
                max: 10,
                step: 0.1,
                initialValue: 5,
                format: false
            },
            {
                id: "interest",
                min: 5,
                max: 20,
                step: 0.1,
                initialValue: 12,
                format: false
            },
            {
                id: "savings_amount",
                min: 0,
                max: 10000000,
                step: 100000,
                initialValue: 2500000,
                format: true
            }
            ];

            let apiTimeout;
            let isFirstLoad = true; // Prevent multiple API calls on first load

            sliders.forEach(slider => setupSlider(slider));

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

                container.innerHTML =
                    `<input type="range" id="${id}_range" min="${min}" max="${max}" step="${step}" value="${initialValue}" class="slider-track">`;
                let rangeInput = document.getElementById(`${id}_range`);

                function formatCurrency(value) {
                    return new Intl.NumberFormat("en-IN").format(value);
                }

                function triggerApiWithDelay() {
                    if (isFirstLoad) return; // Prevent API call on first load
                    clearTimeout(apiTimeout);
                    apiTimeout = setTimeout(callApiAndUpdateChart, 500);
                }

                function updateSliderStyle(value) {
                    let percent = ((value - min) / (max - min)) * 100;
                    rangeInput.style.setProperty("--progress", `${percent}%`);
                }

                function updateInputFromSlider() {
                    let val = parseFloat(rangeInput.value);
                    input.value = format ? formatCurrency(val) : val;
                    updateSliderStyle(val);
                    triggerApiWithDelay();
                }

                function updateSliderFromInput() {
                    let val = parseFloat(input.value.replace(/,/g, "")) || min;
                    val = Math.max(min, Math.min(max, val));
                    rangeInput.value = val;
                    updateSliderStyle(val);
                    triggerApiWithDelay();
                }

                input.addEventListener("input", updateSliderFromInput);
                input.addEventListener("change", updateSliderFromInput);
                rangeInput.addEventListener("input", updateInputFromSlider);

                updateSliderFromInput();
            }

            function callApiAndUpdateChart() {
                let params = {
                    current_age: document.getElementById("current_age").value,
                    expected_return: document.getElementById("interest").value,
                    inflation_rate: document.getElementById("inc_rate").value,
                    retirement_age: document.getElementById("retire_age").value,
                    savings_amount: document.getElementById("savings_amount").value.replace(/,/g, ""),
                    wealth_amount: document.getElementById("amount").value.replace(/,/g, "")
                };

                pdf_question_parm = params

                fetch("/api/getCrorepatiCal", {
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
                            updateChart(data.invested_amount, data.total_earnings);
                            updateUiValues(data);
                            pdf_answer_parm = data

                        }
                    })
                    .catch(error => console.error("Error calling API:", error));
            }

            function initializeChart() {
                chart = Highcharts.chart('chart-container', {
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
                                enabled: true,
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

                callApiAndUpdateChart(); // First call

                setTimeout(() => {
                    isFirstLoad = false;
                }, 500); // Allow API calls after first load
            }

            function updateChart(investedAmount, totalEarnings) {
                if (chart) {
                    // Get CSS variables
                    const investedColor = getComputedStyle(document.documentElement).getPropertyValue('--secondary-color').trim();
                    const earningsColor = getComputedStyle(document.documentElement).getPropertyValue('--primary-color').trim();

                    chart.series[0].setData([
                        {
                            name: "Invested Amount",
                            y: investedAmount,
                            color: investedColor
                        },
                        {
                            name: "Total Earnings",
                            y: totalEarnings,
                            color: earningsColor
                        }
                    ]);
                }
            }


            function updateUiValues(data) {
                document.getElementById("res_monthly_savings").innerText = formatCurrency(data.monthly_savings);
                document.getElementById("res_years").innerText = data.years;
                document.getElementById("res_years_1").innerText = data.years;
                document.getElementById("res_invested_amount").innerText = formatCurrency(data.invested_amount);
                document.getElementById("res_earning_amount").innerText = formatCurrency(data.total_earnings);
                document.getElementById("res_target_wealth").innerText = formatCurrency(data.target_wealth);
                document.getElementById("res_target_savings").innerText = formatCurrency(data.target_savings);
                document.getElementById("res_target_amount").innerText = formatCurrency(data.target_amount);
                document.getElementById("res_rate_return").innerText = data.expected_return + "%";
            }

            function formatCurrency(value) {
                return new Intl.NumberFormat("en-IN").format(value);
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