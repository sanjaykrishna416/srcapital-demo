<?php
require_once "src/services/ResearchService.php";

$allScheme = ResearchService::getAllSchemes();
$allScheme = isset($allScheme['list']) ? $allScheme['list'] : [];

// Get current date
$currentDate = date('Y-m-d');
// Get current date

// Default values if GET parameters are not set
$oneDayBefore = date('Y-m-d', strtotime('-1 day', strtotime($currentDate)));
$oneYearAgo = date('Y-m-d', strtotime('-1 year', strtotime($oneDayBefore)));
$oneYearAgo = date('Y-m-d', strtotime('+1 month', strtotime($oneYearAgo)));

// Check GET parameters and use them if available
$funds = isset($_GET['fund']) ? explode(',', urldecode($_GET['fund'])) : ["HDFC Multi Cap Fund - Growth Option"];
$category = isset($_GET['category']) ? urldecode($_GET['category']) : "Equity: Multi Cap";
$installmentAmount = isset($_GET['amount']) ? intval($_GET['amount']) : 3000;
$frequency = isset($_GET['frequency']) ? $_GET['frequency'] : "Monthly";
$startDate = isset($_GET['startdate']) ? $_GET['startdate'] : $oneYearAgo;
$endDate = isset($_GET['enddate']) ? $_GET['enddate'] : $oneDayBefore;

// Call the API with either GET values or default values
$result = ResearchService::getSIPReturnCal(implode(',', $funds), $category, $installmentAmount, $startDate, $endDate, $frequency);

if (isset($result['status']) && $result['status'] == 200) {
    // Store the valid data
    $validData = $result;
} else {
    // API error handling (optional logging or default values)
    $validData = null;
}
?>

<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link href="<?= $favIcon ?>" rel="shortcut icon" type="image/png">

    <style>
        .suggestions-container {
            position: absolute;
            background: white;
            border: 1px solid #ccc;
            border-radius: 5px;
            max-width: 100%;
            max-height: 150px;
            overflow-y: auto;
            z-index: 1000;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }


        .suggestions-list {
            list-style: none;
            padding: 0;
            margin: 0;

        }

        .suggestion-item {
            padding: 10px;
            cursor: pointer;
            max-width: 100%;

        }

        .suggestion-item:hover {
            background-color: #f0f0f0;
        }

        .fund-wrapper {
            position: relative;
            display: flex;
            align-items: center;
        }


        .remove-btn {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: red;
            font-size: 16px;
        }

        .fund-dropdown {
            top: 100%;
            position: absolute;
            background: white;
            width: 100%;
            max-height: 200px;
            overflow-y: auto;
            z-index: 1000;
            display: none;
            border-radius: 5px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <div id="toastContainer" class="position-fixed top-0 end-0 p-3" style="z-index: 1050;"></div>

    <!-- <div id="spinner"
        class="position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div> -->

    <!-- --- main carusal--- -->
    <?php include_once('src/views/layouts/navbar.php') ?>

    <!-- -------page header------ -->

    <?php require_once('src/components/pageHeader.php'); ?>

    <!-- -------page header------ -->


    <!-- -------Services------ -->
    <section class="bg-light" id="mfResearch">
        <div class="container py-5">
            <div class="col-md-12">
                <div class="card border-0 mb-4">
                    <div class="card-body p-4">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="bold-smaller">Select Category</label>
                                    <select id="sel_schemeCategories" class="form-select mt-2  bg-light"
                                        data-width="100%">
                                        <?php
                                        $preselected = $category ?? "Equity: Multi Cap";
                                        foreach ($allScheme as $category) {
                                            $selected = ($category === $preselected) ? "selected" : "";
                                            echo "<option value='$category' $selected>$category</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group funds-container" id="funds-container">
                                    <?php foreach ($funds as $index => $fund): ?>
                                        <div class="fund-input fund-container mt-2" id="fund-<?php echo $index + 1; ?>">
                                            <label>Fund <?php echo $index + 1; ?></label>
                                            <div class="fund-wrapper" style="position: relative;">
                                                <input type="text" class="form-control mt-2 fund-field  bg-light"
                                                    placeholder="Enter fund name" name="fund[]"
                                                    value="<?php echo htmlspecialchars($fund); ?>" />

                                                <?php if ($index > 0): ?>
                                                    <!-- Remove button only for additional funds -->
                                                    <span class="remove-btn"
                                                        onclick="removeFund(<?php echo $index + 1; ?>)">❌</span>
                                                <?php endif; ?>

                                                <div class="fund-dropdown"></div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>

                                    <!-- Add Fund Button -->
                                    <span id="add-fund-btn" class="btn btn-secondary mt-2">+ Add another fund (upto
                                        4)</span>
                                </div>

                            </div>
                            <div class="col-md-2 col-sm-6 mt-3">
                                <div class="form-group">
                                    <label class="bold-smaller block">Installment Amount</label>
                                    <input type="text" class="form-control mt-2  bg-light" value="3000"
                                        oninput="this.value = this.value.replace(/[^0-9]/g, '')" name="installed_amount"
                                        id="installed_amount" maxlength="7">
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-6 mt-3">
                                <div class="form-group">
                                    <label class="bold-smaller block">Select Frequency</label>
                                    <select type="text" class="form-select mt-2  bg-light" name="frequency"
                                        id="frequency">
                                        <option value='Monthly' selected>Monthly</option>
                                        <option value='Fortnightly'>Fortnightly</option>
                                        <option value='Quarterly'>Quarterly</option>
                                    </select>

                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6 mt-3">
                                <div class="form-group">
                                    <label class="bold-smaller block">Start Date</label>
                                    <input type="date" class="form-control mt-2 bg-light"
                                        value="<?= $startDate ?>" name="start_date" id="start_date" maxlength="7">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 mt-3">
                                <div class="form-group">
                                    <label class="bold-smaller block">End Date</label>
                                    <input type="date" class="form-control mt-2  bg-light"
                                        value="<?= $endDate ?>" name="end_date" id="end_date" maxlength="7">
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2 mt-2 justify-content-end align-self-end">
                                <div class="form-group">
                                    <label class="bold block hidden-xs">&nbsp;</label>
                                    <button class="btn btn-primary" type="button"
                                        onclick="getData()">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-0 mb-4">
                    <div class="card-body p-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table
                                        class="adv-table table table-striped table-bordered table-responsive mf-research-table"
                                        style="width:100%" id="schemeTable">
                                        <thead>
                                            <tr>
                                                <th>Fund Name</th>
                                                <th>Launch Date</th>
                                                <th>Nav Date</th>
                                                <th>Nav</th>
                                                <th>Units</th>
                                                <th>No of Installments</th>
                                                <th>Investment Amount</th>
                                                <th>SIP Value as <?= $currentDate ?></th>
                                                <th>SIP Value as on</th>
                                                <th>XIRR (%) as on</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-nowrap">
                                            <?php
                                            if (isset($validData['list'])) {
                                                foreach ($validData['list'] as $item): ?>
                                                    <tr class="text-center">
                                                        <td><a class="text-decoration-none"
                                                                href="/mutual-funds-research/fund-card?scheme=<?= htmlspecialchars($item['scheme']) ?>"><?= htmlspecialchars($item['scheme']) ?></a>
                                                        </td>
                                                        <td><?= $item['inception_date'] ?? '-' ?></td>
                                                        <td><?= $item['nav_date'] ?? '-' ?></td>
                                                        <td><?= $item['nav'] ?? '-' ?></td>
                                                        <td><?= $item['units'] ?? '-' ?></td>
                                                        <td><?= $item['no_of_installment'] ?? '-' ?></td>
                                                        <td><?= $item['invested_amount'] ?? '-' ?></td>
                                                        <td><?= $item['current_value'] ?? '-' ?></td>
                                                        <td><?= $item['current_value'] ?? '-' ?></td>
                                                        <td><?= $item['returns'] ?? '-' ?></td>
                                                    </tr>
                                                <?php endforeach;
                                            } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="col-md-12 table-responsive mt-4">
                                <h6>Cash Flow</h6>

                                <div class="row">
                                    <?php
                                    if (isset($validData['list']) && is_array($validData['list'])) {
                                        $fundCount = count($validData['list']); // Get the total number of funds
                                    
                                        // Determine Bootstrap column class based on the number of funds
                                        $colClass = "col-md-12"; // Default for 1 fund
                                        if ($fundCount == 2) {
                                            $colClass = "col-md-6";
                                        } elseif ($fundCount == 3) {
                                            $colClass = "col-md-4";
                                        } elseif ($fundCount >= 4) {
                                            $colClass = "col-md-3";
                                        }

                                        foreach ($validData['list'] as $fund) {
                                            if (isset($fund['sip_list']) && is_array($fund['sip_list'])) { ?>
                                                <div class="<?= $colClass ?> col-12">
                                                    <h6 class="mt-3 text-center"><?= htmlspecialchars($fund['scheme']) ?></h6>
                                                    <table class="table table-striped table-bordered" style="width:100%"
                                                        id="schemeTable">
                                                        <thead>
                                                            <tr class="text-center">
                                                                <th>Nav Date</th>
                                                                <th>Nav</th>
                                                                <th>Units</th>
                                                                <th>Cumulative Units</th>
                                                                <th>Cumulative Invested Amount</th>
                                                                <th>Market Value</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php foreach ($fund['sip_list'] as $sip): ?>
                                                                <tr class="text-center">
                                                                    <td><?= $sip['nav_date'] ?></td>
                                                                    <td><?= $sip['nav'] ?></td>
                                                                    <td><?= $sip['units'] ?></td>
                                                                    <td><?= $sip['cumulative_units'] ?></td>
                                                                    <td><?= $sip['cumulative_invested_amount'] ?></td>
                                                                    <td><?= number_format($sip['current_value'], 2) ?></td>
                                                                </tr>
                                                            <?php endforeach; ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            <?php }
                                        }
                                    } ?>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- -------Services------ -->




    <?php include_once('src/views/layouts/footer.php') ?>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            let today = new Date();
            today.setDate(today.getDate() - 1); // Move back one day to get yesterday
            let yesterday = today.toISOString().split("T")[0]; // Format as YYYY-MM-DD
            document.getElementById("end_date").setAttribute("max", yesterday); // Set max attribute to yesterday
        });

        $(document).ready(function () {
            let fundCount = 1; // Track current number of funds
            const maxFunds = 4;

            // ✅ Attach event listener for fund input fields using event delegation
            $("#funds-container").on("input", ".fund-field", function () {
                let inputField = $(this);
                let inputVal = inputField.val();
                let category = $("#sel_schemeCategories").find(":selected").val();
                let resultContainer = inputField.siblings(".fund-dropdown");

                if (inputVal.length > 4) {
                    fetch("/api/getMFSchemeSearch", {
                        method: "POST",
                        headers: { "Content-Type": "application/json" },
                        body: JSON.stringify({ category: category, query: inputVal })
                    })
                        .then(response => response.json())
                        .then(data => {
                            resultContainer.empty(); // Clear previous suggestions

                            if (data.list && data.list.length > 0) {
                                let ul = $("<ul>").addClass("suggestions-list");

                                data.list.forEach(item => {
                                    let li = $("<li>").addClass("suggestion-item").text(item);

                                    li.on("click", function () {
                                        inputField.val(item);
                                        resultContainer.empty(); // Clear suggestions after selection
                                    });

                                    ul.append(li);
                                });

                                resultContainer.append(ul).show(); // Ensure dropdown appears
                            }
                        })
                        .catch(error => console.error("Error fetching MF Scheme Search:", error));
                } else {
                    resultContainer.empty().hide(); // Hide suggestions if input is not 4 characters
                }
            });

            // ✅ Ensure dropdown works for the first predefined input
            $(".fund-field").each(function () {
                if (!$(this).closest(".fund-wrapper").find(".fund-dropdown").length) {
                    $(this).after('<div class="fund-dropdown"></div>');
                }
            });

            // ✅ Add fund dynamically
            $("#add-fund-btn").click(function () {
                let existingFunds = $(".fund-container").length;

                if (existingFunds >= maxFunds) {
                    showToast("You can only add up to 4 funds.", "danger");
                    return;
                }

                let lastFundInput = $(".fund-field").last();
                if (lastFundInput.val().trim() === "") {
                    showToast("Please fill in the previous fund before adding a new one.", "danger");
                    return;
                }

                fundCount++;
                let newFund = $(`
            <div class="fund-container mt-2" id="fund-${fundCount}">
                <span class="fund-label">Fund ${fundCount}</span>
                <div class="fund-wrapper" style="position: relative;">
                    <input type="text" class="form-control fund-field  bg-light" placeholder="Enter Fund ${fundCount}" name="fund[]">
                    <span class="remove-btn" onclick="removeFund(${fundCount})">❌</span>
                     <div class="fund-dropdown"></div>
                </div>
            </div>
        `);
                $("#funds-container").append(newFund);
                updateFundNumbers();
            });

            // ✅ Remove fund input and reorder funds properly
            window.removeFund = function (id) {
                $("#fund-" + id).remove();
                updateFundNumbers();
            };

            // ✅ Renumber all funds correctly and prevent exceeding max funds
            function updateFundNumbers() {
                let funds = $(".fund-container");

                funds.each(function (index) {
                    let newNumber = index + 1;
                    $(this).attr("id", "fund-" + newNumber); // Update ID
                    $(this).find(".fund-label").text("Fund " + newNumber); // Update label
                    $(this).find(".fund-field").attr("placeholder", "Enter Fund " + newNumber); // Update placeholder
                    $(this).find(".fund-field").attr("name", "fund-" + newNumber); // Update name
                    $(this).find(".remove-btn").attr("onclick", "removeFund(" + newNumber + ")"); // Update remove button function
                });

                fundCount = funds.length; // Update the count correctly

                // ✅ Hide add button if max funds reached
                if (fundCount >= maxFunds) {
                    $("#add-fund-btn").hide();
                } else {
                    $("#add-fund-btn").show();
                }

                moveAddButton();
            }

            function moveAddButton() {
                $("#add-fund-btn").appendTo("#funds-container");
            }
        });



        $("#sel_schemeCategories").change(function () {
            $(".fund-field").val('');
        })


        function getData() {
            var category = $.trim($("#sel_schemeCategories").val());
            var amount = $.trim($("#installed_amount").val());
            var startdate = $.trim($("#start_date").val());
            var enddate = $.trim($("#end_date").val());
            var frequency = $.trim($("#frequency").val());

            // Collect all fund values
            var fundArray = [];
            $(".fund-field").each(function () {
                var fundValue = $.trim($(this).val());
                if (fundValue) {
                    fundArray.push(fundValue);
                }
            });

            var funds = fundArray.join(","); // Convert array to comma-separated string

            if (!category || !funds || !amount || isNaN(amount) || amount <= 0 || !startdate || !enddate || !frequency) {
                showToast("Please fill all fields.", "danger");
                return;
            }

            top.location = "/mutual-funds-research/mutual-fund-sip-investment-calculator?category=" + encodeURIComponent(category) +
                "&fund=" + encodeURIComponent(funds) +
                "&amount=" + encodeURIComponent(amount) +
                "&frequency=" + encodeURIComponent(frequency) +
                "&startdate=" + encodeURIComponent(startdate) +
                "&enddate=" + encodeURIComponent(enddate);
        }



    </script>
</body>



</html>