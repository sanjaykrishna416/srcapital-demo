<?php
require_once "src/services/ResearchService.php";

$allScheme = ResearchService::getAllSchemes();
$allScheme = isset($allScheme['list']) ? $allScheme['list'] : [];

if (isset($_GET['category'])) {
    $category = $_GET['category'];
    $trailingReturn = ResearchService::getTrailingReturn($category);
} else {
    $trailingReturn = ResearchService::getTrailingReturn($category = 'Equity: Multi Cap');
}



?>
<!DOCTYPE html>
<html lang="reactjs">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link href="<?= $favIcon ?>" rel="shortcut icon" type="image/png">

    <style>

    </style>
</head>

<body>

    <?php include_once('src/components/preLoader.php') ?>
    <?php include_once('src/views/layouts/navbar.php') ?>

    <!-- -------page header------ -->

    <?php require_once('src/components/pageHeader.php'); ?>

    <!-- -------page header------ -->


    <!-- -------Services------ -->
    <section class="bg-light" id="mfResearch">
        <div class="container py-5">
            <div class="col-md-12">
                <div class="linner card border-0 mb-4">
                    <div class="card-body p-4">
                        <div class="row">
                            <div class="col-md-3 col-sm-3">
                                <div class="form-group">
                                    <label class="no-bold">Select Category</label>
                                    <select id="sel_schemeCategories"
                                        class="form-control form-select bg-light">
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
                            <div class="col-md-3 col-sm-3 mt-4">
                                <div class="form-group">
                                    <select id="sel_period" class="form-select bg-light"
                                        onchange=onChangePeriod()>
                                        <option value="ytd">YTD</option>
                                        <option value="1w">1 Week</option>
                                        <option value="1m">1 Month</option>
                                        <option value="3m">3 Month</option>
                                        <option value="6m">6 Month</option>
                                        <option selected value="1y">1 Year</option>
                                        <option value="3y">3 Years</option>
                                        <option value="5y">5 Years</option>
                                        <option value="10y">10 Years</option>
                                        <option value="since_inception">Since Inception</option>
                                    </select>

                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <div class="form-group ">
                                    <label class="no-bold">&nbsp;</label><br>
                                    <button class="btn btn-primary text-white"  type="button"
                                        id="submitBtn" onclick="getData()">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="line-bottom"></div>
                </div>
                <div class="linner card border-0 mb-4">
                    <div class="card-body p-4">
                        <div class="row" id="table-area">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table
                                        class="adv-table table table-striped table-bordered table-responsive mf-research-table"
                                        style="width:100%" id="schemeTable">
                                        <thead>
                                            <th>Scheme Name</th>
                                            <th>Launch Date</th>
                                            <th>AUM (Crore)</th>
                                            <th>Expense Ratio (%)</th>
                                            <th class="shortTermHeader hidden">1-Week Ret(%)</th>
                                            <th class="shortTermHeader hidden">1-Month Ret(%)</th>
                                            <th class="shortTermHeader hidden">3-Months Ret(%)</th>
                                            <th class="shortTermHeader hidden">6-Months Ret(%)</th>
                                            <th class="shortTermHeader hidden">YTD Ret(%)</th>
                                            <th class="longTermHeader">1-Yr Ret(%)</th>
                                            <th class="longTermHeader">3-Yrs Ret(%)</th>
                                            <th class="longTermHeader">5-Yrs Ret(%)</th>
                                            <th class="longTermHeader">10-Yrs Ret(%)</th>
                                            <th class="longTermHeader">Since Inception Ret(%)</th>
                                        </thead>

                                        <tbody class="text-nowrap">
                                            <?php
                                            if (isset($trailingReturn['list'])) {
                                                foreach ($trailingReturn['list'] as $item): ?>
                                                    <tr>
                                                        <td><a class="text-decoration-none"
                                                                href="/mutual-funds-research/fund-card?scheme=<?= htmlspecialchars($item['scheme_amfi_url']) ?>"><?= htmlspecialchars($item['scheme_amfi_short_name']) ?></a>
                                                        </td>
                                                        <td><?= ResearchService::convertDate($item['inception_date']) ?? '-' ?>
                                                        </td>
                                                        <td><?= number_format($item['scheme_assets'], 2) ?? '-' ?></td>
                                                        <td><?= number_format($item['ter'], 2) ?? '-' ?></td>
                                                        <td class="hidden shortTermHeader">
                                                            <?= number_format($item['returns_abs_7days'], 2) ?? '-' ?>
                                                        </td>
                                                        <td class="hidden shortTermHeader">
                                                            <?= number_format($item['returns_abs_1month'], 2) ?? '-' ?>
                                                        </td>
                                                        <td class="hidden shortTermHeader">
                                                            <?= number_format($item['returns_abs_3month'], 2) ?? '-' ?>
                                                        </td>
                                                        <td class="hidden shortTermHeader">
                                                            <?= number_format($item['returns_abs_6month'], 2) ?? '-' ?>
                                                        </td>
                                                        <td class="hidden shortTermHeader">
                                                            <?= number_format($item['returns_abs_ytd'], 2) ?? '-' ?>
                                                        </td>
                                                        <td class="longTermHeader">
                                                            <?= number_format($item['returns_abs_1year'], 2) ?? '-' ?>
                                                        </td>
                                                        <td class="longTermHeader">
                                                            <?= number_format($item['returns_cmp_3year'], 2) ?? '-' ?>
                                                        </td>
                                                        <td class="longTermHeader">
                                                            <?= number_format($item['returns_cmp_5year'], 2) ?? '-' ?>
                                                        </td>
                                                        <td class="longTermHeader">
                                                            <?= number_format($item['returns_cmp_10year'], 2) ?? '-' ?>
                                                        </td>
                                                        <td class="longTermHeader">
                                                            <?= number_format($item['returns_cmp_inception'], 2) ?? '-' ?>
                                                        </td>
                                                    </tr>
                                                <?php endforeach;
                                            }
                                            ?>
                                        </tbody>
                                        <tfoot class="text-nowrap">
                                            <?php
                                            if (isset($trailingReturn['category_returns'])) {
                                                ?>
                                                <tr style="background-color: #e0f7fa; font-weight: bold;">
                                                    <td>Category Average</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td class="shortTermHeader hidden">
                                                        <?= number_format($trailingReturn['category_returns']['returns_abs_7days'], 2) ?? '-' ?>%
                                                    </td>
                                                    <td class="shortTermHeader hidden">
                                                        <?= number_format($trailingReturn['category_returns']['returns_abs_1month'], 2) ?? '-' ?>%
                                                    </td>
                                                    <td class="shortTermHeader hidden">
                                                        <?= number_format($trailingReturn['category_returns']['returns_abs_3month'], 2) ?? '-' ?>%
                                                    </td>
                                                    <td class="shortTermHeader hidden">
                                                        <?= number_format($trailingReturn['category_returns']['returns_abs_6month'], 2) ?? '-' ?>%
                                                    </td>
                                                    <td class="shortTermHeader hidden">
                                                        <?= number_format($trailingReturn['category_returns']['returns_abs_ytd'], 2) ?? '-' ?>%
                                                    </td>
                                                    <td class="longTermHeader">
                                                        <?= number_format($trailingReturn['category_returns']['returns_abs_1year'], 2) ?? '-' ?>%
                                                    </td>
                                                    <td class="longTermHeader">
                                                        <?= number_format($trailingReturn['category_returns']['returns_cmp_3year'], 2) ?? '-' ?>%
                                                    </td>
                                                    <td class="longTermHeader">
                                                        <?= number_format($trailingReturn['category_returns']['returns_cmp_5year'], 2) ?? '-' ?>%
                                                    </td>
                                                    <td class="longTermHeader">
                                                        <?= number_format($trailingReturn['category_returns']['returns_cmp_10year'], 2) ?? '-' ?>%
                                                    </td>
                                                    <td class="longTermHeader">
                                                        <?= number_format($trailingReturn['category_returns']['returns_cmp_inception'], 2) ?? '-' ?>%
                                                    </td>
                                                </tr>
                                                <?php
                                            }
                                            ?>
                                            <?php
                                            if (isset($trailingReturn['benchmark_returns'])) {
                                                ?>
                                                <tr style="background-color: #e0f7fa; font-weight: bold;">
                                                    <td><?= htmlspecialchars($trailingReturn['benchmark_returns']['benchmark_name']) ?? '-' ?>
                                                    </td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td class="shortTermHeader hidden">
                                                        <?= number_format($trailingReturn['benchmark_returns']['returns_abs_7days'], 2) ?? '-' ?>%
                                                    </td>
                                                    <td class="shortTermHeader hidden">
                                                        <?= number_format($trailingReturn['benchmark_returns']['returns_abs_1month'], 2) ?? '-' ?>%
                                                    </td>
                                                    <td class="shortTermHeader hidden">
                                                        <?= number_format($trailingReturn['benchmark_returns']['returns_abs_3month'], 2) ?? '-' ?>%
                                                    </td>
                                                    <td class="shortTermHeader hidden">
                                                        <?= number_format($trailingReturn['benchmark_returns']['returns_abs_6month'], 2) ?? '-' ?>%
                                                    </td>
                                                    <td class="shortTermHeader hidden">
                                                        <?= number_format($trailingReturn['benchmark_returns']['returns_abs_ytd'], 2) ?? '-' ?>%
                                                    </td>
                                                    <td class="longTermHeader">
                                                        <?= number_format($trailingReturn['benchmark_returns']['returns_abs_1year'], 2) ?? '-' ?>%
                                                    </td>
                                                    <td class="longTermHeader">
                                                        <?= number_format($trailingReturn['benchmark_returns']['returns_cmp_3year'], 2) ?? '-' ?>%
                                                    </td>
                                                    <td class="longTermHeader">
                                                        <?= number_format($trailingReturn['benchmark_returns']['returns_cmp_5year'], 2) ?? '-' ?>%
                                                    </td>
                                                    <td class="longTermHeader">
                                                        <?= number_format($trailingReturn['benchmark_returns']['returns_cmp_10year'], 2) ?? '-' ?>%
                                                    </td>
                                                    <td class="longTermHeader">
                                                        <?= number_format($trailingReturn['benchmark_returns']['returns_cmp_inception'], 2) ?? '-' ?>%
                                                    </td>
                                                </tr>
                                                <?php
                                            }
                                            ?>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="line-bottom"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- -------Services------ -->




    <?php include_once('src/views/layouts/footer.php') ?>
    <script src="/assets/js/script.js"></script>


    <script>
        $(document).ready(function () {
            $('#schemeTable').DataTable();
        });

        function getData() {
            var category = $.trim($("#sel_schemeCategories").val());
            var period = $.trim($("#sel_period").val());
            top.location = "/mutual-funds-research/top-performing-mutual-funds?category=" + category;
        }

        function onChangePeriod() {
            const selectedSchemeCategory = document.getElementById('sel_period').value;
            if (selectedSchemeCategory == '1w' || selectedSchemeCategory == '1m' || selectedSchemeCategory == '3m' ||
                selectedSchemeCategory == '6m' || selectedSchemeCategory == 'ytd') {
                $(".longTermHeader").addClass('hidden');
                $(".shortTermHeader").removeClass('hidden');
            } else {
                $(".shortTermHeader").addClass('hidden');
                $(".longTermHeader").removeClass('hidden');
            }


        }
    </script>
</body>


</html>