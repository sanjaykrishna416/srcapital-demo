<?php
require_once "src/services/ResearchService.php";
$Research = false;

// Securely fetch scheme name
$schemeName = filter_input(INPUT_GET, 'scheme');

if ($schemeName) {
    $schemeInfo = ResearchService::getSchemeInformation($schemeName);

    if (!empty($schemeInfo) && $schemeInfo['status'] == 200) {
        $Research = true;

        // Get Benchmark Code safely
        $benchMarkCode = $schemeInfo['scheme_benchmark_code'] ?? null;

        $categoryName = $schemeInfo['fundPerformanceOverviewAgainstBenchmarkAndCategoryResponse']['schemePerformancesCategory']['sector'] ?? '';
        $SchemeYearly['2013'] = $schemeInfo['fundPerformanceOverviewAgainstBenchmarkAndCategoryResponse']['schemePerformances']['returns_abs_2008'];
        $SchemeYearly['2014'] = $schemeInfo['fundPerformanceOverviewAgainstBenchmarkAndCategoryResponse']['schemePerformances']['returns_abs_2009'];
        $SchemeYearly['2015'] = $schemeInfo['fundPerformanceOverviewAgainstBenchmarkAndCategoryResponse']['schemePerformances']['returns_abs_2010'];
        $SchemeYearly['2016'] = $schemeInfo['fundPerformanceOverviewAgainstBenchmarkAndCategoryResponse']['schemePerformances']['returns_abs_2011'];
        $SchemeYearly['2017'] = $schemeInfo['fundPerformanceOverviewAgainstBenchmarkAndCategoryResponse']['schemePerformances']['returns_abs_2012'];
        $SchemeYearly['2018'] = $schemeInfo['fundPerformanceOverviewAgainstBenchmarkAndCategoryResponse']['schemePerformances']['returns_abs_2013'];
        $SchemeYearly['2019'] = $schemeInfo['fundPerformanceOverviewAgainstBenchmarkAndCategoryResponse']['schemePerformances']['returns_abs_2014'];
        $SchemeYearly['2020'] = $schemeInfo['fundPerformanceOverviewAgainstBenchmarkAndCategoryResponse']['schemePerformances']['returns_abs_2015'];
        $SchemeYearly['2021'] = $schemeInfo['fundPerformanceOverviewAgainstBenchmarkAndCategoryResponse']['schemePerformances']['returns_abs_2016'];
        $SchemeYearly['2022'] = $schemeInfo['fundPerformanceOverviewAgainstBenchmarkAndCategoryResponse']['schemePerformances']['returns_abs_ytd'];

        $benchMarkYearly['2013'] = $schemeInfo['fundPerformanceOverviewAgainstBenchmarkAndCategoryResponse']['schemePerformancesBenchmark']['returns_abs_2008'];
        $benchMarkYearly['2014'] = $schemeInfo['fundPerformanceOverviewAgainstBenchmarkAndCategoryResponse']['schemePerformancesBenchmark']['returns_abs_2009'];
        $benchMarkYearly['2015'] = $schemeInfo['fundPerformanceOverviewAgainstBenchmarkAndCategoryResponse']['schemePerformancesBenchmark']['returns_abs_2010'];
        $benchMarkYearly['2016'] = $schemeInfo['fundPerformanceOverviewAgainstBenchmarkAndCategoryResponse']['schemePerformancesBenchmark']['returns_abs_2011'];
        $benchMarkYearly['2017'] = $schemeInfo['fundPerformanceOverviewAgainstBenchmarkAndCategoryResponse']['schemePerformancesBenchmark']['returns_abs_2012'];
        $benchMarkYearly['2018'] = $schemeInfo['fundPerformanceOverviewAgainstBenchmarkAndCategoryResponse']['schemePerformancesBenchmark']['returns_abs_2013'];
        $benchMarkYearly['2019'] = $schemeInfo['fundPerformanceOverviewAgainstBenchmarkAndCategoryResponse']['schemePerformancesBenchmark']['returns_abs_2014'];
        $benchMarkYearly['2020'] = $schemeInfo['fundPerformanceOverviewAgainstBenchmarkAndCategoryResponse']['schemePerformancesBenchmark']['returns_abs_2015'];
        $benchMarkYearly['2021'] = $schemeInfo['fundPerformanceOverviewAgainstBenchmarkAndCategoryResponse']['schemePerformancesBenchmark']['returns_abs_2016'];
        $benchMarkYearly['2022'] = $schemeInfo['fundPerformanceOverviewAgainstBenchmarkAndCategoryResponse']['schemePerformancesBenchmark']['returns_abs_ytd'];

        $categoryYearly['2013'] = $schemeInfo['fundPerformanceOverviewAgainstBenchmarkAndCategoryResponse']['schemePerformancesCategory']['returns_abs_2008'];
        $categoryYearly['2014'] = $schemeInfo['fundPerformanceOverviewAgainstBenchmarkAndCategoryResponse']['schemePerformancesCategory']['returns_abs_2009'];
        $categoryYearly['2015'] = $schemeInfo['fundPerformanceOverviewAgainstBenchmarkAndCategoryResponse']['schemePerformancesCategory']['returns_abs_2010'];
        $categoryYearly['2016'] = $schemeInfo['fundPerformanceOverviewAgainstBenchmarkAndCategoryResponse']['schemePerformancesCategory']['returns_abs_2011'];
        $categoryYearly['2017'] = $schemeInfo['fundPerformanceOverviewAgainstBenchmarkAndCategoryResponse']['schemePerformancesCategory']['returns_abs_2012'];
        $categoryYearly['2018'] = $schemeInfo['fundPerformanceOverviewAgainstBenchmarkAndCategoryResponse']['schemePerformancesCategory']['returns_abs_2013'];
        $categoryYearly['2019'] = $schemeInfo['fundPerformanceOverviewAgainstBenchmarkAndCategoryResponse']['schemePerformancesCategory']['returns_abs_2014'];
        $categoryYearly['2020'] = $schemeInfo['fundPerformanceOverviewAgainstBenchmarkAndCategoryResponse']['schemePerformancesCategory']['returns_abs_2015'];
        $categoryYearly['2021'] = $schemeInfo['fundPerformanceOverviewAgainstBenchmarkAndCategoryResponse']['schemePerformancesCategory']['returns_abs_2016'];
        $categoryYearly['2022'] = $schemeInfo['fundPerformanceOverviewAgainstBenchmarkAndCategoryResponse']['schemePerformancesCategory']['returns_abs_ytd'];

        // Define years
        $years = range(2013, 2022);

        // Prepare data for JavaScript
        $schemeData = [];
        $benchmarkData = [];
        $categoryData = [];

        foreach ($years as $year) {
            $schemeData[] = $SchemeYearly[$year] ?? 0;  // Default to 0 if missing
            $benchmarkData[] = $benchMarkYearly[$year] ?? 0;
            $categoryData[] = $categoryYearly[$year] ?? 0;
        }

        // Convert arrays to JSON for JavaScript usage
        $yearsJson = json_encode($years);
        $schemeJson = json_encode($schemeData);
        $benchmarkJson = json_encode($benchmarkData);
        $categoryJson = json_encode($categoryData);


        $getSIPReturns = ResearchService::getSIPReturns();

        $getBenchMark = ResearchService::getBenchMarkData();
    }
}

// echo '<pre>';
// print_r($schemeInfo);
// die();



?>

<!DOCTYPE html>
<html lang="reactjs">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link href="<?= $favIcon ?>" rel="shortcut icon" type="image/png">

    <style>
        .form-group {
            position: relative;
        }

        /* Dropdown container */
        .fund-dropdown {
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            max-height: 250px;
            overflow-y: auto;
            z-index: 1000;
            display: none;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.15);
            padding: 5px 0;
        }

        /* List inside dropdown */
        .suggestions-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        /* Each item in dropdown */
        .suggestion-item {
            padding: 12px 15px;
            cursor: pointer;
            font-size: 14px;
            font-weight: 500;
            color: #333;
            transition: background 0.3s ease-in-out;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .suggestion-item strong {
            font-weight: 700;
            color: #007bff;
        }

        /* Hover effect */
        .suggestion-item:hover {
            background-color: var(--button-color);
        }

        /* Scrollbar customization */
        .fund-dropdown::-webkit-scrollbar {
            width: 6px;
        }

        .fund-dropdown::-webkit-scrollbar-thumb {
            background: #ccc;
            border-radius: 10px;
        }

        .fund-dropdown::-webkit-scrollbar-thumb:hover {
            background: #999;
        }

        .nested-table {
            display: none;
        }

        .highlight {
            background-color: #ffeb3b;
        }
    </style>
</head>

<body>
    <!-- <div id="spinner"
        class="position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div> -->

    <!-- --- main carusal--- -->
    <?php include_once('src/views/layouts/header.php') ?>
    <?php include_once('src/views/layouts/navbar.php') ?>

    <!-- -------page header------ -->

    <div class="container-fluid page-header">
        <div class="container text-center py-3">
            <?php if (!empty($schemeName)): ?>
                <h1 class="display-2 text-white  mb-4 animated slideInDown fs-3 fw-bold"><?= htmlspecialchars($schemeName) ?>
                </h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a class="text-decoration-none" href="/">Home</a></li>
                        <li class="breadcrumb-item"><a class="text-decoration-none"
                                href="?scheme=<?= htmlspecialchars($schemeName) ?>"><?= htmlspecialchars($schemeName) ?></a>
                        </li>
                    </ol>
                </nav>
            <?php else: ?>
                <h1 class="display-2 text-white mb-4 animated slideInDown fs-3">Scheme Not Found</h1>
            <?php endif; ?>
        </div>
    </div>

    <!-- -------page header------ -->


    <!-- -------Services------ -->
    <section class="bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel-container show">
                                <div class="panel-content">
                                    <div class="panel-tag">
                                        <div class="row mb-3">
                                            <div class="col-md-6">

                                                <?php $funds = htmlspecialchars($schemeName ?? '', ENT_QUOTES, 'UTF-8') ?>

                                                <div class="form-group">
                                                    <label class="bold-smaller">Search Any Scheme</label>
                                                    <input type="text" id="scheme_search" value="<?= $funds ?>"
                                                        name="scheme_search" class="form-control" data-width="100%">
                                                    <div class="fund-dropdown"></div>
                                                </div>

                                            </div>
                                            <div class="col-md-2 form-group">

                                                <!-- <div class="col-md-2 col-sm-2 marginTop25">
                                                    <a href="#"
                                                        class="btn btn-primary waves-effect waves-themed">Search</a>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                    if ($Research == true) {
                        ?>
                        <div class="row mb-4">
                            <div class="col-md-12">
                                <h4 class="mb-1 orange-dark-bg black fund-heading">
                                    <span class="bold-text"><?= $schemeInfo['scheme_name'] ?? 'N/A' ?></span><br>
                                    <span class="bold-text" style="font-size: 14px;">
                                        Fund Manager: <?= $schemeInfo['scheme_manager'] ?? 'N/A' ?> |
                                        Benchmark: <?= $schemeInfo['scheme_benchmark'] ?? 'N/A' ?> |
                                        Category: <?= $schemeInfo['scheme_category'] ?? 'N/A' ?>
                                    </span>
                                </h4>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-5" style="margin-top:10px;">
                                                <div class="row">
                                                    <div class="col-md-7 pr-0">
                                                        <span class="font-weight-bold" style="font-size: 20px;">
                                                            <i class="fa fa-inr"></i> <?= $schemeInfo['nav'] ?? 'N/A' ?>
                                                        </span>

                                                        <?php if (!empty($schemeInfo['nav_change']) && $schemeInfo['nav_change'] < 0): ?>
                                                            <span class="text-danger"
                                                                style="font-size: 14px; margin: 0px 10px;">
                                                                <i class="fa fa-long-arrow-down"></i> <i class="fa fa-inr"></i>
                                                                <?= $schemeInfo['nav_change'] ?? 'N/A' ?>
                                                                (<?= $schemeInfo['nav_change_percentage'] ?? '0' ?>%)
                                                            </span>
                                                        <?php else: ?>
                                                            <span class="text-success"
                                                                style="font-size: 14px; margin: 0px 10px;">
                                                                <i class="fa fa-long-arrow-up"></i> <i class="fa fa-inr"></i>
                                                                <?= $schemeInfo['nav_change'] ?? 'N/A' ?>
                                                                (<?= $schemeInfo['nav_change_percentage'] ?? '0' ?>%)
                                                            </span>
                                                        <?php endif; ?>

                                                        <p style="margin: 0px; font-size: 12px;">
                                                            Nav as on
                                                            <?= isset($schemeInfo['nav_date']) ? ResearchService::convertDate($schemeInfo['nav_date']) : 'N/A' ?>
                                                        </p>
                                                    </div>

                                                    <div class="col-md-5" style="border-left: 1px solid #ccc;">
                                                        <span class="font-weight-bold" style="font-size: 20px;">
                                                            <i class="fa fa-inr"></i>
                                                            <?= $schemeInfo['scheme_assets'] ?? 'N/A' ?>
                                                        </span>
                                                        <p style="margin: 0px; font-size: 12px;">
                                                            AUM as on
                                                            <?= isset($schemeInfo['scheme_asset_date']) ? ResearchService::convertDate($schemeInfo['scheme_asset_date']) : 'N/A' ?>
                                                        </p>
                                                    </div>
                                                </div>

                                                <div style="font-size: 12px; margin-top: 20px;">
                                                    Fund House:
                                                    <a data-toggle="tooltip" title="See all the funds of this AMC"
                                                        data-placement="right">
                                                        <?= $schemeInfo['scheme_company'] ?? 'N/A' ?>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="col-md-7 pl-0">
                                                <section class="hidden-sm-and-down col-lg-12 pb-0 pt-0">
                                                    <div class="hor-box row">
                                                        <div class="layout col fund-information m-1 justify-center">
                                                            <p class="font14 mb-0 mt-2"
                                                                style="background: #f3f3f3; margin: 0px !important;">Rtn (
                                                                Since Inception )</p>
                                                            <div class="layout row justify-center align-center">
                                                                <p class="text-success mb-0 font-weight-bold">
                                                                    <i class="fa fa-long-arrow-up"></i>
                                                                    <span id="returnSpan">
                                                                        <?= $schemeInfo['fundPerformanceOverviewAgainstBenchmarkAndCategoryResponse']['schemePerformances']['returns_cmp_inception'] ?? 'N/A' ?>
                                                                    </span>
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="layout col fund-information m-1 justify-center">
                                                            <p class="font14 mb-0 mt-2"
                                                                style="background: #f3f3f3; margin: 0px !important;">
                                                                Inception Date</p>
                                                            <div class="layout row justify-center align-center">
                                                                <p class="mb-0" style="font-size: 12px;">
                                                                    <?= isset($schemeInfo['schemeMapping']['scheme_inception_date']) ? ResearchService::convertDate($schemeInfo['schemeMapping']['scheme_inception_date']) : 'N/A' ?>
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="layout col fund-information m-1 justify-center">
                                                            <p class="font14 mb-0 mt-2"
                                                                style="background: #f3f3f3; margin: 0px !important;">Expense
                                                                Ratio</p>
                                                            <div class="layout row justify-center align-center">
                                                                <p class="mb-0" style="font-size: 12px;">
                                                                    <?= $schemeInfo['schemeMapping']['ter'] ?? 'N/A' ?>%
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="layout col fund-information m-1 justify-center"
                                                            style="width:100px;">
                                                            <p class="font14 mb-0 mt-2"
                                                                style="background: #f3f3f3; margin: 0px !important;">Fund
                                                                Status</p>
                                                            <div class="layout row justify-center align-center">
                                                                <p class="mb-0" style="font-size: 12px;">
                                                                    <?= $schemeInfo['schemeMapping']['open_or_closed'] ?? 'N/A' ?>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="hor-box row">
                                                        <?php
                                                        $fields = [
                                                            'minimum' => 'Min. Investment (Rs)',
                                                            'minimum_topup' => 'Min. Topup (Rs)',
                                                            'sip_minimum_amount' => 'Min. SIP Amount (Rs)',
                                                            'riskometer' => 'Risk Status'
                                                        ];
                                                        ?>

                                                        <?php foreach ($fields as $key => $label): ?>
                                                            <div class="layout col fund-information m-1 justify-center"
                                                                style="width:100px;">
                                                                <p class="font14 mb-0 mt-2"
                                                                    style="background: #f3f3f3; margin: 0px !important;">
                                                                    <?= $label ?>
                                                                </p>
                                                                <div class="layout row justify-center align-center">
                                                                    <p class="mb-0"
                                                                        style="font-size: 12px; <?= $key === 'riskometer' ? 'text-transform: capitalize;' : '' ?>">
                                                                        <?= $schemeInfo['schemeMapping'][$key] ?? 'N/A' ?>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        <?php endforeach; ?>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-12">
                                                <div>
                                                    <p class="font14 mb-1 ml-0 f-weight-400">
                                                        <span class="font-weight-bold">Investment Objective: </span>
                                                        <?= $schemeInfo['schemeMapping']['scheme_objective'] ?? 'N/A' ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-md-12">
                                                <div style="border: 1px solid #eee;">
                                                    <h6 style="background: #9aceff; color: #000; padding:10px;"
                                                        class="font-weight-bold m-0">
                                                        Returns (%)
                                                    </h6>
                                                    <div class="padding0 table-responsive">
                                                        <table class="table table-bordered"
                                                            style="border: none; margin: 0px;">
                                                            <thead>
                                                                <tr style="background: #ddd;">
                                                                    <th></th>
                                                                    <?php
                                                                    $periods = ["1 Mon", "3 Mon", "6 Mon", "1 Yr", "3 Yrs", "5 Yrs", "10 Yrs"];
                                                                    foreach ($periods as $period) {
                                                                        echo "<th class='text-right'>$period (%)</th>";
                                                                    }
                                                                    ?>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                // Define rows for different sections
                                                                $rows = [
                                                                    "Fund" => $schemeInfo['fundPerformanceOverviewAgainstBenchmarkAndCategoryResponse']['schemePerformances'] ?? [],
                                                                    "Benchmark - " . ($schemeInfo['fundPerformanceOverviewAgainstBenchmarkAndCategoryResponse']['schemePerformancesBenchmark']['benchmark_name'] ?? 'N/A') =>
                                                                        $schemeInfo['fundPerformanceOverviewAgainstBenchmarkAndCategoryResponse']['schemePerformancesBenchmark'] ?? [],
                                                                    "Category - " . ($schemeInfo['fundPerformanceOverviewAgainstBenchmarkAndCategoryResponse']['schemePerformancesCategory']['sector'] ?? 'N/A') =>
                                                                        $schemeInfo['fundPerformanceOverviewAgainstBenchmarkAndCategoryResponse']['schemePerformancesCategory'] ?? [],
                                                                    "Rank within Category" => $schemeInfo['fundPerformanceOverviewAgainstBenchmarkAndCategoryResponse']['schemePerformances'] ?? [],
                                                                    "Number of Funds within Category" => $schemeInfo['fundPerformanceOverviewAgainstBenchmarkAndCategoryResponse']['schemePerformances'] ?? []
                                                                ];

                                                                // Define keys for returns mapping
                                                                $returnKeys = ["returns_abs_1month", "returns_abs_3month", "returns_abs_6month", "returns_abs_1year", "returns_cmp_3year", "returns_cmp_5year", "returns_cmp_10year"];
                                                                $rankKeys = ["returns_abs_1month_rank", "returns_abs_3month_rank", "returns_abs_6month_rank", "returns_abs_1year_rank", "returns_cmp_3year_rank", "returns_cmp_5year_rank", "returns_cmp_10year_rank"];
                                                                $totalRankKeys = ["returns_abs_1month_totalrank", "returns_abs_3month_totalrank", "returns_abs_6month_totalrank", "returns_abs_1year_totalrank", "returns_cmp_3year_totalrank", "returns_cmp_5year_totalrank", "returns_cmp_10year_totalrank"];

                                                                // Generate table rows dynamically
                                                                $rowIndex = 0;
                                                                foreach ($rows as $title => $data) {
                                                                    echo "<tr><td class='green-lite-bg'>" . htmlspecialchars($title, ENT_QUOTES, 'UTF-8') . "</td>";

                                                                    // Choose appropriate keys
                                                                    $currentKeys = ($rowIndex == 3) ? $rankKeys : (($rowIndex == 4) ? $totalRankKeys : $returnKeys);

                                                                    foreach ($currentKeys as $index => $key) {
                                                                        $value = $data[$key] ?? 'N/A';
                                                                        $class = ($index % 2 == 0) ? 'orange-lite-bg' : 'green-lite-bg';
                                                                        echo "<td class='text-right $class'>" . htmlspecialchars($value, ENT_QUOTES, 'UTF-8') . "</td>";
                                                                    }

                                                                    echo "</tr>";
                                                                    $rowIndex++;
                                                                }
                                                                ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>


                                                <p class="mt-2"><b>Returns less than 1 year are in absolute and Returns
                                                        greater than 1 year period are compounded annualised (CAGR)</b></p>

                                                <div id="nav-movement-gth-div" class="mt-2" style="border: 1px solid #eee;">
                                                    <h6 style="background: #9aceff;color: #000; padding:10px;"
                                                        class="font-weight-bold">NAV Movement</h6>
                                                    <div id="filters">
                                                        <button onclick="updateChart('1m')">1m</button>
                                                        <button onclick="updateChart('3m')">3m</button>
                                                        <button onclick="updateChart('6m')">6m</button>
                                                        <button onclick="updateChart('YTD')">YTD</button>
                                                        <button onclick="updateChart('1y')">1y</button>
                                                        <button onclick="updateChart('2y')">2y</button>
                                                        <button onclick="updateChart('5y')">5y</button>
                                                        <button onclick="updateChart('10y')">10y</button>
                                                        <button onclick="updateChart('All')">All</button>
                                                    </div>
                                                    <div id="chart"></div>

                                                    <div id="navSpinner" class="hidden">Loading Data...</div>
                                                </div>

                                                <div class="row mt-2">
                                                    <div class="col-md-6">

                                                        <div style="border: 1px solid #eee;">
                                                            <h6 style="background: #9aceff;color: #000; padding:10px;"
                                                                class="font-weight-bold m-0">Equity Holdings (Top 10)</h6>
                                                            <div class="padding0 table-responsive full_holdings_data_2">
                                                                <table class="table table-bordered holdings_full_table"
                                                                    id="portfolioTable" style="border: none; margin:0px;">
                                                                    <thead>
                                                                        <tr style="background: #ddd;">
                                                                            <th>Company</th>
                                                                            <th class="text-right">Holdings (%)</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <!-- Show All Holdings Button -->
                                                            <div id="showAllHoldings" class="fullHoldingsAnchor"
                                                                style="cursor:pointer;text-align:right;color:blue;margin-top:5px; display:none;">
                                                                <span class="holdings_anchor_span paddingRight5">Show All
                                                                    Holdings</span>
                                                                <i class="fa fa-chevron-circle-down"></i>
                                                            </div>

                                                        </div>



                                                    </div>
                                                    <div class="col-md-6">

                                                        <div
                                                            style="border: 1px solid rgb(238, 238, 238); position: relative;">
                                                            <h6 style="background: #9aceff;color: #000; padding:10px;"
                                                                class="font-weight-bold">Sector Allocation (%)</h6>
                                                        </div>
                                                        <div id="sectorChart"></div>
                                                    </div>
                                                </div>

                                                <div class="row mt-2">
                                                    <div class="col-md-4">

                                                        <div style="border: 1px solid #eee;">
                                                            <h6 style="background: #9aceff;color: #000; padding:10px;"
                                                                class="font-weight-bold m-0">Asset Allocation</h6>
                                                            <div class="padding0 table-responsive">
                                                                <table class="table table-bordered"
                                                                    style="border: none; margin: 0px;"
                                                                    id="assetAllocationTable">
                                                                    <thead>
                                                                        <tr style="background: #ddd;font-weight: 600;">
                                                                            <th style="text-align: left;">Asset Class</th>
                                                                            <th style="text-align: right;">Allocation (%)
                                                                            </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>



                                                    </div>

                                                    <div class="col-md-4">

                                                        <div style="border: 1px solid #eee;">
                                                            <h6 style="background: #9aceff;color: #000; padding:10px;"
                                                                class="font-weight-bold m-0">Portfolio Behavior</h6>
                                                            <div class="padding0 table-responsive">
                                                                <table class="table table-bordered"
                                                                    style="border: none; margin: 0px;">
                                                                    <tbody>
                                                                        <?php
                                                                        $metrics = [
                                                                            "Mean" => "mean",
                                                                            "Sharpe Ratio" => "sharpratio",
                                                                            "Alpha" => "alpha",
                                                                            "Beta" => "beta",
                                                                            "Standard Deviation" => "standard_deviation",
                                                                            "Sortino" => "sortino_ratio",
                                                                            "Portfolio Turnover" => "portfolio_turnover_ratio"
                                                                        ];

                                                                        foreach ($metrics as $label => $key) {
                                                                            $value = $schemeInfo['schemeMapping'][$key] ?? 'N/A';
                                                                            echo "<tr><td class='green-lite-bg' style='text-align: left;'>$label</td>
                                                                                  <td class='orange-lite-bg' style='text-align: right;'>" . htmlspecialchars($value, ENT_QUOTES, 'UTF-8') . "</td></tr>";
                                                                        }
                                                                        ?>
                                                                    </tbody>
                                                                </table>

                                                            </div>
                                                        </div>



                                                    </div>

                                                    <div class="col-md-4">

                                                        <div
                                                            style="border: 1px solid rgb(238, 238, 238); position: relative;">
                                                            <h6 style="background: #9aceff;color: #000; padding:10px;"
                                                                class="font-weight-bold m-0">Market Cap Distribution</h6>
                                                        </div>
                                                        <div id="marketCapChart"></div>



                                                    </div>
                                                </div>

                                                <div id="yearly-performance-gth-div" class="mt-2"
                                                    style="border: 1px solid #eee;">
                                                    <h6 style="background: #9aceff;color: #000; padding:10px;"
                                                        class="font-weight-bold">Yearly Performance (%)</h6>
                                                    <div id="performanceChart"></div>
                                                </div>

                                                <div class="row mt-2">
                                                    <div class="col-md-9">
                                                        <div style="border: 1px solid #eee;">
                                                            <h6 style="background: #9aceff;color: #000; padding:10px;"
                                                                class="font-weight-bold m-0">Standard Performance</h6>
                                                            <div id="historical_returns_table_res"
                                                                class="padding0 table-responsive">
                                                                <table class="table table-bordered m-0">
                                                                    <thead>
                                                                        <tr style="background: #ddd;">
                                                                            <th style="text-align:center;"></th>
                                                                            <th colspan="2" style="text-align:center;">
                                                                                Scheme <br> <span
                                                                                    class="small"><?= htmlspecialchars($schemeInfo['schemeMapping']['scheme_amfi'] ?? 'N/A', ENT_QUOTES, 'UTF-8') ?></span>
                                                                            </th>
                                                                            <th colspan="2" style="text-align:center;">
                                                                                Benchmark<br> <span
                                                                                    class="small"><?= htmlspecialchars($schemeInfo['schemeMapping']['scheme_benchmark'] ?? 'N/A', ENT_QUOTES, 'UTF-8') ?></span>
                                                                            </th>
                                                                            <th colspan="2" style="text-align:center;">
                                                                                Category Average</th>
                                                                            <th colspan="2" style="text-align:center;">
                                                                                Additional Benchmark<br> <span
                                                                                    class="small"><?= htmlspecialchars($getBenchMark['benchmark_returns']['benchmark_name'] ?? 'N/A', ENT_QUOTES, 'UTF-8') ?></span>
                                                                            </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="font-weight-bold green-lite-bg">
                                                                                Period</td>
                                                                            <?php for ($i = 0; $i < 4; $i++): ?>
                                                                                <td
                                                                                    class="font-weight-bold orange-lite-bg text-right">
                                                                                    Returns</td>
                                                                                <td
                                                                                    class="font-weight-bold green-lite-bg text-right">
                                                                                    Value of <br><i class="fa fa-inr"></i>
                                                                                    10,000 invested</td>
                                                                            <?php endfor; ?>
                                                                        </tr>

                                                                        <?php
                                                                        $timePeriods = [
                                                                            "1 Year" => ["one_year_return", "returns_abs_1year"],
                                                                            "3 Year" => ["three_year_return", "returns_cmp_3year"],
                                                                            "5 Year" => ["five_year_return", "returns_cmp_5year"],
                                                                            "10 Year" => ["ten_year_return", "returns_cmp_10year"]
                                                                        ];

                                                                        foreach ($timePeriods as $label => $keys):
                                                                            $schemeKey = $keys[0];
                                                                            $benchmarkKey = $keys[1];
                                                                            ?>
                                                                            <tr>
                                                                                <td class="green-lite-bg">
                                                                                    <?= htmlspecialchars($label, ENT_QUOTES, 'UTF-8') ?>
                                                                                </td>
                                                                                <?php foreach ($schemeInfo['scheme_performance_list'] as $scheme): ?>
                                                                                    <td class="text-right orange-lite-bg">
                                                                                        <?= htmlspecialchars($scheme[$schemeKey] ?? 'N/A', ENT_QUOTES, 'UTF-8') ?>
                                                                                    </td>
                                                                                    <td class="text-right green-lite-bg">
                                                                                        <?= ResearchService::returnsCalculator(10000, intval($label), $scheme[$schemeKey] ?? 0) ?>
                                                                                    </td>
                                                                                <?php endforeach; ?>
                                                                                <td class="text-right orange-lite-bg">
                                                                                    <?= htmlspecialchars($getBenchMark['benchmark_returns'][$benchmarkKey] ?? 'N/A', ENT_QUOTES, 'UTF-8') ?>
                                                                                </td>
                                                                                <td class="text-right green-lite-bg">
                                                                                    <?= ResearchService::returnsCalculator(10000, intval($label), $getBenchMark['benchmark_returns'][$benchmarkKey] ?? 0) ?>
                                                                                </td>
                                                                            </tr>
                                                                        <?php endforeach; ?>
                                                                    </tbody>
                                                                </table>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div style="border: 1px solid #eee; height: 310px;">
                                                            <h6 style="background: #9aceff;color: #000; padding:10px;"
                                                                class="font-weight-bold">Riskometer</h6>
                                                            <div class="marginTop15 padding0 text-center">
                                                                <?php
                                                                $riskometer = strtolower(trim($schemeInfo['riskometer_value'] ?? 'default')); // Ensure lowercase and trim whitespace
                                                            
                                                                // Define risk levels and their corresponding image paths
                                                                $riskometerImages = [
                                                                    'low' => "/images/riskometer/low.png",
                                                                    'moderately low' => "/images/riskometer/low_to_moderate.png",
                                                                    'low to moderate' => "/images/riskometer/low_to_moderate.png",
                                                                    'moderate' => "/images/riskometer/moderate.png",
                                                                    'moderately high' => "/images/riskometer/moderately_high.png",
                                                                    'high' => "/images/riskometer/high.png",
                                                                    'very high' => "/images/riskometer/very_high.png"
                                                                ];

                                                                // Set image path based on risk level or use default
                                                                $imagePath = $riskometerImages[$riskometer] ?? "/images/riskometer/very_high.png";
                                                                ?>

                                                                <img class="w-75 mt-5"
                                                                    src="/assets<?= htmlspecialchars($imagePath, ENT_QUOTES, 'UTF-8') ?>"
                                                                    alt="Riskometer">
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mt-2" style="border: 1px solid #eee;">
                                                    <h6 style="background: #9aceff;color: #000; padding:10px;"
                                                        class="font-weight-bold m-0">SIP Returns (Monthly SIP of Rs. 10,000)
                                                    </h6>
                                                    <div class="padding0 table-responsive">
                                                        <table class="table table-bordered"
                                                            style="border: none; margin: 0px;">
                                                            <thead>
                                                                <tr style="background: #ddd;">
                                                                    <th class="text-center"></th>
                                                                    <th colspan="3" class="text-center">3 Year</th>
                                                                    <th colspan="3" class="text-center">5 Year</th>
                                                                    <th colspan="3" class="text-center">10 Year</th>
                                                                    <th colspan="3" class="text-center">15 Year</th>
                                                                </tr>
                                                                <tr style="background: #ddd;">
                                                                    <th style="border-top: 0px;">Scheme Name</th>
                                                                    <?php for ($i = 0; $i < 4; $i++): ?>
                                                                        <th style="border-top: 0px; text-align:right;">Invested
                                                                            Amt</th>
                                                                        <th style="border-top: 0px; text-align:right;">Current
                                                                            Value</th>
                                                                        <th style="border-top: 0px; text-align:right;">XIRR (%)
                                                                        </th>
                                                                    <?php endfor; ?>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <!-- Scheme Returns -->
                                                                <tr>
                                                                    <td><?= htmlspecialchars($getSIPReturns['list'][0]['scheme_name'] ?? '-') ?>
                                                                    </td>
                                                                    <td><?= htmlspecialchars($getSIPReturns['list'][0]['current_cost'] ?? '-') ?>
                                                                    </td>
                                                                    <td><?= htmlspecialchars($getSIPReturns['list'][0]['current_value'] ?? '-') ?>
                                                                    </td>
                                                                    <td><?= htmlspecialchars($getSIPReturns['list'][0]['returns'] ?? '-') ?>
                                                                    </td>
                                                                    <?php for ($i = 0; $i < 9; $i++): ?>
                                                                        <td></td>
                                                                    <?php endfor; ?>
                                                                </tr>

                                                                <!-- Benchmark Returns -->
                                                                <tr style="background: #e5f2dd;">
                                                                    <td><?= htmlspecialchars($getSIPReturns['benchmark_returns_list'][0]['scheme_name'] ?? '-') ?>
                                                                    </td>
                                                                    <?php foreach ($getSIPReturns['benchmark_returns_list'] as $benchmark): ?>
                                                                        <td><?= htmlspecialchars($benchmark['current_cost'] ?? '-') ?>
                                                                        </td>
                                                                        <td><?= htmlspecialchars($benchmark['current_value'] ?? '-') ?>
                                                                        </td>
                                                                        <td><?= htmlspecialchars($benchmark['returns'] ?? '-') ?>
                                                                        </td>
                                                                    <?php endforeach; ?>
                                                                </tr>

                                                                <!-- Category Returns -->
                                                                <tr style="background: #fff3d1;">
                                                                    <td><?= htmlspecialchars($getSIPReturns['category_returns_list'][0]['scheme_name'] ?? '-') ?>
                                                                    </td>
                                                                    <?php foreach ($getSIPReturns['category_returns_list'] as $category): ?>
                                                                        <td><?= htmlspecialchars($category['current_cost'] ?? '-') ?>
                                                                        </td>
                                                                        <td><?= htmlspecialchars($category['current_value'] ?? '-') ?>
                                                                        </td>
                                                                        <td><?= htmlspecialchars($category['returns'] ?? '-') ?>
                                                                        </td>
                                                                    <?php endforeach; ?>
                                                                </tr>
                                                            </tbody>
                                                        </table>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end card-->

                                <div class="panel mt-3">
                                    <div class="panel-container show">
                                        <div class="panel-content p-1">
                                            <p class="f-14 margintop5 paddingline">Returns less than 1 year are in absolute
                                                and greater than 1 year are compounded annualised (CAGR). SIP returns are
                                                shown in XIRR (%).</p>
                                            <p class="f-14 margintop5 paddingline">The Risk Level of any of the schemes must
                                                always be commensurate with the risk profile, investment objective or
                                                financial goals of the investor concerned. Mutual Fund Distributors (MFDs)
                                                or Registered Investment Advisors (RIAs) should take the risk profile and
                                                investment needs of individual investors into consideration and make
                                                scheme(s) or asset allocation recommendations accordingly.</p>
                                            <p class="f-14 margintop5 paddingline"><b>Mutual Fund investments are subject to
                                                    market risks, read all scheme related documents carefully.</b> Past
                                                performance may or may not be sustained in the future. Investors should
                                                always invest according to their risk appetite and consult with their mutual
                                                fund distributors or financial advisor before investing.</p>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <!-- -------Services------ -->
    <?php include_once('src/views/layouts/footer.php') ?>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
<script>
    $(document).ready(function () {
        // Caching frequently used elements
        const $navSpinner = $("#nav-movement-gth-spinner");
        const $fullHoldingsAnchor = $(".fullHoldingsAnchor");
        const $holdingsTableRows = $(".holdings_full_table tr:gt(10)");
        const $showAllBtn = $("#showAllHoldings");
        const $portfolioTable = $("#portfolioTable tbody");
        const $assetAllocationTable = $("#assetAllocationTable tbody");
        const $sectorChart = $("#sectorChart");
        const $marketCapChart = $("#marketCapChart");

        function holdingsAllocationClick() {
            const holdingsText = $(".holdings_anchor_span").text().trim();
            const isHidden = holdingsText === "Show All Holdings";

            $fullHoldingsAnchor.html(`
            <span class="holdings_anchor_span paddingRight5">
                ${isHidden ? "Hide All Holdings" : "Show All Holdings"}
            </span> 
            <i class="fa ${isHidden ? "fa-chevron-circle-up" : "fa-chevron-circle-down"}"></i>
        `);
            $holdingsTableRows.toggle(isHidden);
        }

        // Attach the click event programmatically
        $("#showAllHoldings").on("click", holdingsAllocationClick);



        // ✅ Declare schemeData & benchmarkData globally
        let schemeData = [];
        let benchmarkData = [];

        // Function to fetch NAV data
        function fetchNavData(schemeName, benchMarkCode) {
            $navSpinner.removeClass("hidden");

            const requestPayload = [
                { scheme_amfi_name: schemeName },
                { scheme_amfi_name: benchMarkCode }
            ];

            let requests = requestPayload.map(payload =>
                $.ajax({
                    url: "/api/getNav",
                    type: "POST",
                    data: JSON.stringify(payload),
                    contentType: "application/json",
                    dataType: "json"
                })
            );

            $.when(...requests)
                .done((navResponse, categoryResponse) => {
                    $navSpinner.addClass("hidden");

                    try {
                        const parsedNavData = JSON.parse(navResponse[0]?.msg || "[]");
                        const parsedCategoryData = JSON.parse(categoryResponse[0]?.msg || "[]");

                        if (!parsedNavData.length || !parsedCategoryData.length) {
                            console.warn("One or both datasets are empty!");
                            return;
                        }

                        let formatData = (data) =>
                            data.map((item) => ({
                                x: new Date(item[0]),  // Convert to Date object
                                y: parseFloat(item[1]), // Ensure numeric format
                                nav: parseFloat(item[1])
                            }));

                        // ✅ Store all data without filtering (fixes issue)
                        schemeData = formatData(parsedNavData);
                        benchmarkData = formatData(parsedCategoryData);

                        if (schemeData.length > 0 && benchmarkData.length > 0) {
                            let baseSchemeValue = schemeData[0].y;
                            let baseBenchmarkValue = benchmarkData[0].y;

                            schemeData = schemeData.map((point) => ({
                                x: point.x,
                                y: ((point.y / baseSchemeValue) * 100),
                                nav: point.nav
                            }));

                            benchmarkData = benchmarkData.map((point) => ({
                                x: point.x,
                                y: ((point.y / baseBenchmarkValue) * 100),
                                nav: point.nav
                            }));
                        }

                        // ✅ Default to 1-year data but allow full filtering
                        updateChart("1y");

                    } catch (error) {
                        console.error("Error parsing response:", error);
                    }
                })
                .fail((xhr, status, error) => console.error("Error fetching data:", error));
        }

        // ✅ Initialize Chart Configuration
        let chartOptions = {
            chart: {
                type: "line",
                height: 400,
                zoom: { enabled: false },
                toolbar: { show: false }
            },
            series: [
                { name: "Scheme", data: [] },
                { name: "Benchmark", data: [] }
            ],
            xaxis: {
                type: "datetime",
                title: { text: "Date" }
            },
            yaxis: {
                title: { text: "Percentage Change (%)" },
                labels: {
                    formatter: function (value) {
                        return value.toFixed(2) + "%";
                    }
                }
            },
            tooltip: {
                x: { format: "dddd, MMM dd, HH:mm" },
                y: {
                    formatter: function (value, { seriesIndex, dataPointIndex, w }) {
                        let actualNav = w.config.series[seriesIndex].data[dataPointIndex].nav;
                        let percentageChange = value.toFixed(2) + "%";
                        return `<strong>${actualNav.toFixed(2)}</strong> (${percentageChange})`;
                    }
                }
            },
            colors: ["#008FFB", "#00E396"],
            stroke: {
                curve: "smooth",
                width: 2
            }
        };

        // ✅ Render Chart
        let chart = new ApexCharts(document.querySelector("#chart"), chartOptions);
        chart.render();

        // ✅ Function to Update Chart Based on Filter
        window.updateChart = function (filter) {
            if (!schemeData.length || !benchmarkData.length) {
                console.warn("Data not available yet!");
                return;
            }

            let today = new Date();
            let startDate = null;

            switch (filter) {
                case "1m": startDate = new Date(today.setMonth(today.getMonth() - 1)); break;
                case "3m": startDate = new Date(today.setMonth(today.getMonth() - 3)); break;
                case "6m": startDate = new Date(today.setMonth(today.getMonth() - 6)); break;
                case "YTD": startDate = new Date(today.getFullYear(), 0, 1); break;
                case "1y": startDate = new Date(today.setFullYear(today.getFullYear() - 1)); break;
                case "2y": startDate = new Date(today.setFullYear(today.getFullYear() - 2)); break;
                case "5y": startDate = new Date(today.setFullYear(today.getFullYear() - 5)); break;
                case "10y": startDate = new Date(today.setFullYear(today.getFullYear() - 10)); break;
                case "All": startDate = null; break;
            }

            let filteredSchemeData = startDate
                ? schemeData.filter(point => point.x >= startDate)
                : schemeData;

            let filteredBenchmarkData = startDate
                ? benchmarkData.filter(point => point.x >= startDate)
                : benchmarkData;

            if (filteredSchemeData.length > 0 && filteredBenchmarkData.length > 0) {
                // ✅ Set base values dynamically based on the filter range
                let baseSchemeValue = filteredSchemeData[0].y;
                let baseBenchmarkValue = filteredBenchmarkData[0].y;

                filteredSchemeData = filteredSchemeData.map((point) => ({
                    x: point.x,
                    y: ((point.y / baseSchemeValue) * 100) - 100, // Start at 0%
                    nav: point.nav
                }));

                filteredBenchmarkData = filteredBenchmarkData.map((point) => ({
                    x: point.x,
                    y: ((point.y / baseBenchmarkValue) * 100) - 100, // Start at 0%
                    nav: point.nav
                }));
            }

            // ✅ Update chart with properly scaled values
            chart.updateSeries([
                { name: "<?= $schemeName ?>", data: filteredSchemeData },
                { name: "<?= $benchMarkCode ?>", data: filteredBenchmarkData }
            ]);
        };


        // ---------------------------------------

        function getPortfolio(schemeName) {
            $.ajax({
                url: "/api/getPortfolioResearch",
                type: "POST",
                data: JSON.stringify({
                    scheme_name: schemeName
                }),
                contentType: "application/json",
                dataType: "json"
            })
                .done(response => {
                    console.log(response);

                    let portfolioList = response?.schemePortfolioAnalysisResponse?.schemePortfolioList || [];
                    if (!portfolioList.length) return console.error("Invalid portfolio response format");

                    $portfolioTable.empty();
                    $showAllBtn.toggle(portfolioList.length > 10);

                    portfolioList.forEach((item, index) => {
                        $portfolioTable.append(`
                        <tr class="holding-row ${index >= 10 ? "hidden-row" : ""}" style="${index >= 10 ? "display:none" : ""}">
                            <td class="green-lite-bg">${item.instrument}</td>
                            <td class="text-right orange-lite-bg">${item.holdings.toFixed(2)}%</td>
                        </tr>
                    `);
                    });

                    let sectorData = response?.schemePortfolioAnalysisResponse?.sectorAllocationMap || {};
                    let sortedSectors = Object.entries(sectorData)
                        .sort(([, a], [, b]) => b - a)
                        .slice(0, 10);

                    let sectors = sortedSectors.map(([key]) => key);
                    let percentages = sortedSectors.map(([, value]) => parseFloat(value));

                    renderSectorAllocationChart(sectors, percentages);

                    let assetAllocation = response?.schemePortfolioAnalysisResponse?.assetAllocationMap || {};
                    $assetAllocationTable.empty();

                    Object.entries(assetAllocation).forEach(([category, value]) => {
                        $assetAllocationTable.append(`
                        <tr>
                            <td class="green-lite-bg">${category}</td>
                            <td class="orange-lite-bg text-right">${value.toFixed(2)}</td>
                        </tr>
                    `);
                    });
                })
                .fail(error => console.error("Error fetching portfolio:", error));
        }

        function renderSectorAllocationChart(sectors, percentages) {
            new ApexCharts($sectorChart[0], {
                series: [{
                    data: percentages
                }],
                chart: {
                    type: "bar",
                    height: 380
                },
                plotOptions: {
                    bar: {
                        barHeight: "100%",
                        distributed: true,
                        horizontal: true,
                        dataLabels: {
                            position: "bottom" // Keeps data label outside
                        }
                    }
                },
                colors: ["#33b2df", "#546E7A", "#d4526e", "#13d8aa", "#A5978B", "#2b908f", "#f9a3a4", "#90ee7e", "#f48024", "#69d2e7"],
                dataLabels: {
                    enabled: true,
                    textAnchor: "start",
                    style: {
                        colors: ["#000"] // Change to black for visibility
                    },
                    formatter: (val) => `${val}%` // Adds % after the number
                },
                stroke: {
                    width: 1,
                    colors: ["#fff"]
                },
                xaxis: {
                    categories: sectors
                }
            }).render();
        }

        function marketCap(amc) {
            $.ajax({
                url: "/api/getMarketCap",
                type: "POST",
                data: JSON.stringify({
                    scheme_amfi_common: amc
                }),
                contentType: "application/json",
                dataType: "json"
            })
                .done(response => {
                    let stocks = response?.stocksMap || {};
                    let values = ["Large Cap", "Mid Cap", "Small Cap", "Others"].map(cap => stocks[cap] || 0);

                    new ApexCharts($marketCapChart[0], {
                        series: [{
                            data: values
                        }],
                        chart: {
                            type: "bar",
                            height: 300
                        },
                        plotOptions: {
                            bar: {
                                distributed: true,
                                horizontal: true,
                                dataLabels: {
                                    position: "insideEnd"
                                }
                            }
                        },
                        colors: ["#33b2df", "#546E7A", "#d4526e", "#13d8aa"],
                        dataLabels: {
                            enabled: true,
                            textAnchor: "start",
                            style: {
                                colors: ["#000"] // Change to black for visibility
                            },
                            formatter: (val) => `${val}%` // Adds % after the number
                        },
                        stroke: {
                            width: 1,
                            colors: ["#fff"]
                        },
                        xaxis: {
                            categories: ["Large Cap", "Mid Cap", "Small Cap", "Others"]
                        },
                        title: {
                            text: undefined
                        }
                    }).render();
                })
                .fail(error => console.error("Error fetching market cap data:", error));
        }


        marketCap("<?= @$schemeInfo['schemeMapping']['scheme_amfi_common'] ?>");
        getPortfolio("<?= $schemeName ?>");

        fetchNavData("<?= $schemeName ?>", "<?= $benchMarkCode ?>").then(() => {
            document.querySelectorAll("#filters button").forEach(btn => btn.disabled = false);
        });
    });

    const years = <?php echo $yearsJson; ?>;
    const schemeData = <?php echo $schemeJson; ?>;
    const benchmarkData = <?php echo $benchmarkJson; ?>;
    const categoryData = <?php echo $categoryJson; ?>;

    var options = {
        chart: {
            type: 'bar',
            height: 400
        },
        series: [
            {
                name: "<?= $schemeName ?>",
                data: schemeData
            },
            {
                name: "<?= $benchMarkCode ?>",
                data: benchmarkData
            },
            {
                name: "<?= $categoryName ?>",
                data: categoryData
            }
        ],
        xaxis: {
            categories: years,
            title: { text: "Year" }
        },
        yaxis: {
            title: { text: "Performance (%)" }
        },
        colors: ["#28a745", "#007bff", "#ffc107"], // Green, Blue, Yellow
        legend: {
            position: "bottom"
        }
    };

    var yearlyChart = new ApexCharts(document.querySelector("#performanceChart"), options);
    yearlyChart.render();

    // ---------------------scheme search-----------------------------------
    $(document).ready(function () {
        $("#scheme_search").on("input", function () {
            let inputField = $(this);
            let inputVal = inputField.val().trim();
            let category = 'All';
            let resultContainer = inputField.siblings(".fund-dropdown");

            if (inputVal.length >= 3) {
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
                                    resultContainer.empty().hide(); // Hide suggestions after selection

                                    // REDIRECT after selection
                                    let selectedScheme = encodeURIComponent(item); // encode for URL safety
                                    window.location.href = "/mutual-funds-research/fund-card?scheme=" +selectedScheme;
                                });

                                ul.append(li);
                            });

                            resultContainer.append(ul).show(); // Ensure dropdown appears
                        } else {
                            resultContainer.hide(); // Hide dropdown if no results
                        }
                    })
                    .catch(error => console.error("Error fetching MF Scheme Search:", error));
            } else {
                resultContainer.empty().hide(); // Hide suggestions if input is less than 4 characters
            }
        });

        // Hide dropdown when clicking outside
        $(document).on("click", function (e) {
            if (!$(e.target).closest(".form-group").length) {
                $(".fund-dropdown").hide();
            }
        });
    });
</script>


</html>