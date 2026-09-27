<?php
require_once "src/services/ResearchService.php";

$allScheme = ResearchService::getAllSchemes();
$allScheme = isset($allScheme['list']) ? $allScheme['list'] : [];

$selectedPeriod = 1;
$selectedAmount = 3000;
if (isset($_GET['category']) && isset($_GET['period']) && isset($_GET['amount'])) {
    $category = $_GET['category'];
    $selectedAmount = isset($_GET['amount']) ? intval($_GET['amount']) : 3000;
    $selectedPeriod = isset($_GET['period']) ? intval($_GET['period']) : 1;

    $result  = ResearchService::getTopSystematicResearch($selectedAmount, $category, $selectedPeriod);
} else {
    $result  = ResearchService::getTopSystematicResearch();
}

$topSIPReturn = isset($result['list']) ? $result['list'] : [];

$amountOptions = [1000, 2000, 3000, 5000, 10000, 15000, 20000, 25000, 30000, 35000, 40000, 45000, 50000];



?>
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


    <!-- -------Services------ -->
    <section class="bg-light" id="mfResearch">
        <div class="container py-5">
            <div class="col-md-12">
                <div class="linner card border-0 mb-4">
                    <div class="card-body p-4">
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label class="bold-smaller">Select Category</label>
                                    <select id="sel_schemeCategories" class="form-select bg-light mt-2"
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
                            <div class="col-md-2 col-sm-3">
                                <div class="form-group">
                                    <label class="bold-smaller block">Select Period</label>
                                    <select id="sel_period" class="form-select  bg-light mt-2"
                                        data-width="100%">
                                        <?php for ($i = 1; $i <= 22; $i++): ?>
                                            <option value="<?= $i ?>" <?= $i === $selectedPeriod ? 'selected' : '' ?>>
                                                <?= $i ?> Year<?= $i > 1 ? 's' : '' ?></option>
                                        <?php endfor; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <div class="form-group">
                                    <label class="bold-smaller">Select Amount</label>
                                    <select id="sel_sip_amount" class="form-select  bg-light mt-2"
                                        data-width="100%">
                                        <?php foreach ($amountOptions as $amount): ?>
                                            <option value="<?= $amount ?>"
                                                <?= $amount === $selectedAmount ? 'selected' : '' ?>>
                                                <?= number_format($amount) ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2 justify-content-end align-self-end">
                                <div class="form-group">
                                    <label class="bold block hidden-xs">&nbsp;</label>
                                    <button class="btn btn-primary  mt-2" type="button"
                                        onclick="getData()">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="line-bottom"></div>

                </div>
                <div class="linner card border-0 mb-4">
                    <div class="card-body p-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table
                                        class="adv-table table table-striped table-bordered table-responsive mf-research-table"
                                        style="width:100%" id="schemeTable">
                                        <thead>
                                            <tr>
                                                <th>Scheme Name</th>
                                                <th width="15%">Launch Date</th>
                                                <th>AUM (Crore)</th>
                                                <th>Expense Ratio (%)</th>
                                                <th>Invested Amount</th>
                                                <th>Current Value</th>
                                                <th>Return&nbsp;(%)</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-nowrap">
                                            <?php foreach ($topSIPReturn as $item) : ?>
                                                <tr>
                                                    <td><a class="text-decoration-none"
                                                            href="/mutual-funds-research/fund-card?scheme=<?= htmlspecialchars($item['scheme_name']) ?>"><?= htmlspecialchars($item['scheme_name']) ?></a>
                                                    </td>
                                                    <td><?= htmlspecialchars($item['inception_date']) ?? '-' ?></td>
                                                    <td><?= number_format($item['scheme_assets'], 2) ?? '-' ?></td>
                                                    <td><?= number_format($item['ter'], 2) ?? '-' ?></td>
                                                    <td><?= number_format($item['current_cost'], 2) ?? '-' ?></td>
                                                    <td><?= number_format($item['current_value'], 2) ?? '-' ?></td>
                                                    <td><?= number_format($item['returns'], 2) ?? '-' ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
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
    <script>
        $(document).ready(function() {
            $('#schemeTable').DataTable();
        });

        function getData() {
            var category = $.trim($("#sel_schemeCategories").val());
            var period = $.trim($("#sel_period").val());
            var amount = $.trim($("#sel_sip_amount").val());

            top.location = "/mutual-funds-research/top-performing-systematic-investment-plan?category=" + category +
                "&period=" + period + "&amount=" + amount;
        }
    </script>
</body>



</html>