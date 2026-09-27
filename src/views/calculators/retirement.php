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
                <div class="col-md-12">
                    <div class="row">
                        <div class="text-end mb-2">
                            <!-- <button id="downloadBtn" class="btn btn-primary">
                                Download <i class="fa-solid fa-cloud-arrow-down"></i>
                            </button> -->
                        </div>
                        <div class="col-md-7">
                            <div class="row calculator">
                                <div class="linner col-sm-12 my-3 row-eq-height">
                                    <div class="card card-body px-4 pb-0 hover-top shadow-only-hover">
                                        <p class="m-0 pb-2">
                                            Amount you want to have for your retirement (Rs)
                                        </p>

                                        <p class="m-0">
                                            <input type="text" class="form-control mb-3" value="50,00,000"
                                                oninput="formatINR(this)" id="amount" maxlength="15">
                                        </p>

                                        <!-- Slider Section -->
                                        <div class="slider slider-horizontal">
                                            <div id="amount_slider" style="margin:0px;"></div>

                                        </div>
                                        <div class="steps" id="loanamountsteps">
                                            <span style="left: 0%;" class="tick">|<br>
                                                <span class="marker">50 Lakh</span></span><span style="left: 16.1%;"
                                                class="tick">|<br>
                                                <span class="marker">2 Crore</span></span><span style="left: 36.49%;"
                                                class="tick">|<br>
                                                <span class="marker">4 Crore</span></span><span style="left: 57.64%;"
                                                class="tick">|<br>
                                                <span class="marker">6 Crore</span></span><span style="left: 77.64%;"
                                                class="tick">|<br>
                                                <span class="marker">8 Crore</span></span><span style="left: 100%;"
                                                class="tick">|<br>
                                                <span class="marker">10 Crore</span></span>
                                        </div>
                                    </div>
                                    <div class="line-bottom"></div>
                                </div>
                                <div class="linner col-sm-12 my-3 row-eq-height">
                                    <div class="card card-body px-4 pb-0 hover-top shadow-only-hover">
                                        <p class="m-0 pb-2">
                                            Your age today (in years)
                                        </p>

                                        <p class="m-0">
                                            <input type="text" class="form-control mb-3" value="30" id="age"
                                                maxlength="3">
                                        </p>

                                        <!-- Slider Section -->
                                        <div class="slider slider-horizontal">
                                            <div id="age_slider" style="margin:0px;"></div>

                                        </div>
                                        <div class="steps" id="loantermsteps">
                                            <span style="left: 0%;" class="tick">|<br>
                                                <span class="marker">10</span></span><span style="left: 16.66%;"
                                                class="tick">|<br>
                                                <span class="marker">25</span></span><span style="left: 44.44%;"
                                                class="tick">|<br>
                                                <span class="marker">50</span></span><span style="left: 71%;"
                                                class="tick">|<br>
                                                <span class="marker">75</span></span><span style="left: 100%;"
                                                class="tick">|<br>
                                                <span class="marker">100</span></span>
                                        </div>
                                    </div>
                                    <div class="line-bottom"></div>
                                </div>
                                <div class="linner col-sm-12 my-3 row-eq-height">
                                    <div class="card card-body px-4 pb-0 hover-top shadow-only-hover">
                                        <p class="m-0 pb-2">
                                            Age you plan to retire (in years)
                                        </p>

                                        <p class="m-0">
                                            <input type="text" class="form-control mb-3" value="60" id="retire_age"
                                                maxlength="3">
                                        </p>

                                        <!-- Slider Section -->
                                        <div class="slider slider-horizontal">
                                            <div id="retire_age_slider" style="margin:0px;"></div>

                                        </div>
                                        <div class="steps" id="loantermsteps">
                                            <span style="left: 0%;" class="tick">|<br>
                                                <span class="marker">10</span></span><span style="left: 16.66%;"
                                                class="tick">|<br>
                                                <span class="marker">25</span></span><span style="left: 44.44%;"
                                                class="tick">|<br>
                                                <span class="marker">50</span></span><span style="left: 71%;"
                                                class="tick">|<br>
                                                <span class="marker">75</span></span><span style="left: 100%;"
                                                class="tick">|<br>
                                                <span class="marker">100</span></span>
                                        </div>
                                    </div>
                                    <div class="line-bottom"></div>
                                </div>
                                <div class="linner col-sm-12 my-3 row-eq-height">
                                    <div class="card card-body px-4 pb-0 hover-top shadow-only-hover">
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
                                            <span style="left: 0%;" class="tick">|<br>
                                                <span class="marker">5</span></span><span style="left: 25%;"
                                                class="tick">|<br>
                                                <span class="marker">7.5</span></span><span style="left: 50%;"
                                                class="tick">|<br>
                                                <span class="marker">10</span></span><span style="left: 73.33%;"
                                                class="tick">|<br>
                                                <span class="marker">12.5</span></span><span style="left: 100%;"
                                                class="tick">|<br>
                                                <span class="marker">15</span></span>
                                        </div>
                                    </div>
                                    <div class="line-bottom"></div>
                                </div>
                                <div class="linner col-sm-12 my-3 row-eq-height">
                                    <div class="card card-body px-4 pb-0 hover-top shadow-only-hover">
                                        <p class="m-0 pb-2">
                                            The expected rate of return on your investments (% per annum)
                                        </p>


                                        <p class="m-0">
                                            <input type="text" class="form-control mb-3" value="12.5" id="interest"
                                                maxlength="4">
                                        </p>

                                        <!-- Slider Section -->
                                        <div class="slider slider-horizontal">
                                            <div id="interest_slider" style="margin:0px;"></div>
                                        </div>


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
                                                <span class="marker">15</span></span><span style="left: 81.33%;"
                                                class="tick">|<br>
                                                <span class="marker">17.5</span></span><span style="left: 100%;"
                                                class="tick">|<br>
                                                <span class="marker">20</span></span>
                                        </div>
                                    </div>
                                    <div class="line-bottom"></div>
                                </div>

                                <div class="linner col-sm-12 my-3 row-eq-height">
                                    <div class="card card-body px-4 pb-0 hover-top shadow-only-hover">
                                        <p class="m-0 pb-2">
                                            Your Current savings (Rs)
                                        </p>
                                        <p class="m-0">
                                            <input type="text" class="form-control mb-3" value="1,00,000"
                                                id="savings_amount" oninput="checkAmount()" oninput="formatINR(this)"
                                                maxlength="15">
                                        </p>

                                        <!-- Slider Section -->
                                        <div class="slider slider-horizontal">
                                            <div id="savings_amount_slider" style="margin:0px;"></div>
                                        </div>

                                        <div class="steps" id="loanamountsteps">
                                            <span style="left: 0%;" class="tick">|<br>
                                                <span class="marker">1 Lakh</span>
                                            </span>
                                            <span style="left: 19.12%;" class="tick">|<br>
                                                <span class="marker">2 Crore</span>
                                            </span>
                                            <span style="left: 39.50%;" class="tick">|<br>
                                                <span class="marker">4 Crore</span>
                                            </span>
                                            <span style="left: 59.50%;" class="tick">|<br>
                                                <span class="marker">6 Crore</span>
                                            </span>
                                            <span style="left: 78.50%;" class="tick">|<br>
                                                <span class="marker">8 Crore</span>
                                            </span>
                                            <span style="left: 100%;" class="tick">|<br>
                                                <span class="marker">10 Crore</span>
                                            </span>
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
                                        <div id="emipiechart" data-highcharts-chart="0" aria-hidden="false"
                                            role="region"
                                            aria-label="Break-up of Total Payment. Highcharts interactive chart."
                                            style="overflow: hidden;">
                                            <div id="highcharts-screen-reader-region-before-0"
                                                style="position: relative;" aria-hidden="false">
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
                                        <span class="text-muted p mb-3">Monthly SIP Amount</span>
                                        <p class="h6 text-sm mt-0 mb-0  d-lg-block">₹ <span
                                                id="res_monthly_savings"></span></p>
                                    </div>
                                </div>
                                <div class="line-bottom"></div>
                            </div>

                            <div class="linner card text-center mt-3">
                                <div class="card-body p-3">
                                    <div class="row">
                                        <span class="text-muted p mb-3">Total Amount Invested through SIP in 30
                                            years</span>
                                        <p class="h6 text-sm mt-0 mb-0  d-lg-block">₹ <span class="text-theme-primary"
                                                id="res_amount_invest"></span></p>
                                    </div>
                                </div>
                                <div class="line-bottom"></div>
                            </div>

                            <div class="linner card text-center mt-3">
                                <div class="card-body p-3">
                                    <div class="row">
                                        <span class="text-muted p mb-3">Total Growth Amount</span>
                                        <p class="h6 text-sm mt-0 mb-0  d-lg-block">₹ <span class="text-theme-primary"
                                                id="res_total_earnings"></span></p>
                                    </div>
                                </div>
                                <div class="line-bottom"></div>
                            </div>

                            <div class="linner card text-center mt-3">
                                <div class="card-body p-3">
                                    <div class="row">
                                        <span class="text-muted p mb-3">Retirement Amount <br><span
                                                style="font-size:0.7rem;">(Inflation adjusted)</span></span>
                                        <p class="h6 text-sm mt-0 mb-0  d-lg-block">₹ <span class="text-theme-primary"
                                                id="res_retire_amount"></span></p>
                                    </div>
                                </div>
                                <div class="line-bottom"></div>
                            </div>

                            <div class="linner card text-center mt-3">
                                <div class="card-body p-3">
                                    <div class="row">
                                        <span class="text-muted p mb-3">Growth of your Savings <br><span
                                                style="font-size:0.7rem;">(<span id="res_rate_return"></span>%
                                                per annum)</span></span>
                                        <p class="h6 text-sm mt-0 mb-0  d-lg-block">₹ <span class="text-theme-primary"
                                                id="res_current_savings"></span></p>
                                    </div>
                                </div>
                                <div class="line-bottom"></div>
                            </div>

                            <div class="linner card text-center mt-3">
                                <div class="card-body p-3">
                                    <div class="row">
                                        <span class="text-muted p mb-3">Final Targeted Amount <br><span
                                                style="font-size:0.7rem;">(Minus growth of your
                                                savings)</span></span>
                                        <p class="h6 text-sm mt-0 mb-0  d-lg-block">₹ <span class="text-theme-primary"
                                                id="res_target_amount"></span></p>
                                    </div>
                                </div>
                                <div class="line-bottom"></div>
                            </div>

                            <div class="linner card text-center mt-3">
                                <div class="card-body p-3">
                                    <div class="row">
                                        <span class="text-muted p mb-3">Number of years you need to save</span>
                                        <p class="h6 text-sm mt-0 mb-0  d-lg-block"><span class="text-theme-primary"
                                                id="res_years"></span> Years</p>
                                    </div>
                                </div>
                                <div class="line-bottom"></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <?php include_once('src/views/layouts/footer.php') ?>
    <script src="https://code.highcharts.com/highcharts.js"></script>

    <script>

        function validateAgeRange() {
            const age = parseInt(document.getElementById("age").value, 10);
            const retireAge = parseInt(document.getElementById("retire_age").value, 10);
            
        }


        let pdf_answer_parm = {};
        let pdf_question_parm = {}
        document.addEventListener("DOMContentLoaded", function () {
            const sliders = [{
                id: "amount",
                min: 5000000,
                max: 100000000,
                step: 500000,
                initialValue: 50000000,
                format: true
            },
            {
                id: "age",
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
                min: 5,
                max: 15,
                step: 0.1,
                initialValue: 5,
                format: false
            },
            {
                id: "interest",
                min: 5,
                max: 20,
                step: 0.1,
                initialValue: 12.5,
                format: false
            },
            {
                id: "savings_amount",
                min: 100000,       // 1 Lakh
                max: 100000000,    // 10 Crore
                step: 10000,
                initialValue: 100000,  // start at 1 Lakh
                format: true
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
                    validateAgeRange()

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
                    amount: document.getElementById("amount").value.replace(/,/g, ""),
                    age: document.getElementById("age").value,
                    retire_age: document.getElementById("retire_age").value,
                    inc_rate: document.getElementById("inc_rate").value,
                    interest: document.getElementById("interest").value,
                    savings_amount: document.getElementById("savings_amount").value.replace(/,/g, "")
                };
                pdf_question_parm = params

                fetch("/api/getRetirementPlan", {
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
                            updateChart(data.total_earnings, data.invested_amount);
                            updateUiValues(data);
                            pdf_answer_parm = data

                        }
                    })
                    .catch(error => console.error("Error calling API:", error));
            }

            function initializeChart() {
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
                document.getElementById("res_amount_invest").innerText = formatCurrency(data.invested_amount);
                document.getElementById("res_total_earnings").innerText = formatCurrency(data.total_earnings);
                document.getElementById("res_retire_amount").innerText = formatCurrency(data.target_wealth);
                document.getElementById("res_current_savings").innerText = formatCurrency(data.target_savings);
                document.getElementById("res_target_amount").innerText = formatCurrency(data.target_amount);
                document.getElementById("res_rate_return").innerText = data.expected_return + "%";
            }

            function formatCurrency(value) {
                return new Intl.NumberFormat("en-IN").format(value);
            }

            initializeChart();
        });






        function syncInputWithSlider() {
            let val = parseFloat(rangeInput.value);
            input.value = format ? formatCurrency(val) : val;
            updateSliderStyle(val);
            triggerApiWithDelay();

            // ✅ Add this:
            if (id === 'savings_amount' || id === 'amount') {
                checkAmount();
            }
        }

        function syncSliderWithInput() {
            let val = parseFloat(input.value.replace(/,/g, "")) || min;
            val = Math.max(min, Math.min(max, val));
            rangeInput.value = val;
            updateSliderStyle(val);
            triggerApiWithDelay();

            // ✅ Add this:
            if (id === 'savings_amount' || id === 'amount') {
                checkAmount();
            }
        }
        function checkAmount() {
            var amount = parseFloat(document.getElementById('amount').value.replace(/,/g, '')) || 0;
            var savingsAmount = parseFloat(document.getElementById('savings_amount').value.replace(/,/g, '')) || 0;
            if (savingsAmount > amount) {
                alert('❌ savings Amount is not less than retirement amount.');
            }
        }

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