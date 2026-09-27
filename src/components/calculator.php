<!-- -------page header------ -->


<div class="row calculator">
    <div class="col-md-5">
        <!-- SIP Amount -->
        <div class="form-group text-start" style="font-size:14px;">
            <label for="sip_amount" class="form-label" >
                How much you can invest through monthly SIP? (Rs)
            </label>
            <div class="d-flex align-items-center justify-content-between" style="gap: 10px;">
                <div style="flex: 1;">
                    <div id="sip_amount_slider"></div>
                </div>
                <input type="text" class="form-control" oninput="formatINR(this)" value="25,000" id="sip_amount"
                    maxlength="9" style="width: 120px;">
            </div>

        </div>
        <!-- Months -->
        <div class="form-group mt-4 text-start" style="font-size:14px;">
            <label for="months" class="form-label ">
                How many months will you continue the SIP?
            </label>
            <div class="d-flex align-items-center justify-content-between" style="gap: 10px;">
                <div style="flex: 1;">
                    <div id="months_slider"></div>
                </div>
                <input type="text" class="form-control" oninput="formatINR(this)" value="120" id="months" maxlength="3"
                    style="width: 120px;">
            </div>
        </div>

        <!-- Rate of Return -->
        <div class="form-group mt-4 text-start" style="font-size:14px;">
            <label for="rate_of_return" class="form-label ">
                What rate of return do you expect? (% per annum)
            </label>
            <div class="d-flex align-items-center justify-content-between" style="gap: 10px;">
                <div style="flex: 1;">
                    <div id="rate_of_return_slider"></div>
                </div>
                <input type="text" class="form-control" oninput="formatINR(this)" value="12" id="rate_of_return"
                    maxlength="4" style="width: 120px;">
            </div>
        </div>

    </div>


    <div class="col-md-7">
        <div id="pie-chart-container" style="width:100%; height:300px;"></div>
    </div>
</div>

<div class="row mt-5">
    <div class="col-md-4 col-sm-12 mb-3">
        <div class="result-card p-3 text-center">
            <div class="result-label">Total SIP Amount Invested</div>
            <div class="result-value">₹ <span id="total_invested"></span></div>
        </div>
    </div>

    <div class="col-md-4 col-sm-12 mb-3">
        <div class="result-card p-3 text-center">
            <div class="result-label">Total Growth Years</div>
            <div class="result-value highlight">₹ <span id="total_growth"></span></div>
        </div>
    </div>

    <div class="col-md-4 col-sm-12 mb-3">
        <div class="result-card p-3 text-center">
            <div class="result-label">Total Future Value</div>
            <div class="result-value highlight">₹ <span id="future_value"></span></div>
        </div>
    </div>

</div>


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
                <input type="range" id="${id}_range" min="${min}" max="${max}" step="${step}" value="${initialValue}" class="slider-track">`;
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
                        innerSize: '60%', // <-- This makes it a donut chart
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
                    }]
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