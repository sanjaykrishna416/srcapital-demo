<?php
require_once "src/services/ResearchService.php";


$allScheme = ResearchService::getAllSchemes();
$allScheme = isset($allScheme['list']) ? $allScheme['list'] : [];
if (isset($_GET['category'])) {
    $category = $_GET['category'];
    $result = ResearchService::getTopConsistentReturn($category);
} else {
    $category = 'Equity: Multi Cap';
    $result = ResearchService::getTopConsistentReturn($category);
}

$consistentReturn = isset($result['list1']) ? $result['list1'] : [];



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
                            <div class="col-lg-4 mt-2">
                                <div class="form-group">
                                    <label class="no-bold">Select Category</label>
                                    <select id="sel_schemeCategories" class="form-select mt-2 bg-light"
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

                            <div class="col-md-3 col-sm-2 col-xs-12 justify-content-end align-self-end mt-2">
                                <div class="form-group">
                                    <label class="bold block hidden-xs">&nbsp;</label>
                                    <button class="btn btn-primary  px-4 py-2 text-white" type="button"
                                        onclick="getData()">Submit</button>
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
                                        class="adv-table table table-striped table-bordered table-responsive mf-research-table display"
                                        style="width:100%" id="schemeTable">
                                        <thead>
                                            <tr>
                                                <th>Scheme Name</th>
                                                <th>Launch Date</th>
                                                <th>AUM (Crore)</th>
                                                <th>Expense Ratio (%)</th>
                                                <th>1-Yr Ret (%)</th>
                                                <th>3-Yrs Ret (%)</th>
                                                <th>5-Yrs Ret (%)</th>
                                                <th>10-Yrs Ret (%)</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-nowrap">
                                            <?php foreach ($consistentReturn as $item) : ?>
                                                <tr>
                                                    <td><a class="text-decoration-none"
                                                            href="/mutual-funds-research/fund-card?scheme=<?= htmlspecialchars($item['scheme_name']) ?>"><?= htmlspecialchars($item['scheme_name']) ?></a>
                                                    </td>
                                                    <td><?= htmlspecialchars($item['scheme_inception_date']) ?? '-' ?></td>
                                                    <td><?= number_format($item['scheme_assets'], 2) ?? '-' ?></td>
                                                    <td><?= number_format($item['expense_ratio'], 2) ?? '-' ?></td>
                                                    <td><?= number_format($item['one_yr_return'], 2) ?? '-' ?>%</td>
                                                    <td><?= number_format($item['three_yr_return'], 2) ?? '-' ?>%</td>
                                                    <td><?= number_format($item['five_yr_return'], 2) ?? '-' ?>%</td>
                                                    <td><?= number_format($item['ten_yr_return'], 2) ?? '-' ?>%</td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-12 table-responsive text-justify">
                                <p class="font-11" style="font-size: 0.9rem;">Most consistent funds have been chosen
                                    based on average rolling returns and consistency with which funds have beaten
                                    category average returns. We have ranked schemes based on these two parameters using
                                    our proprietary algorithm and are showing the most consistent schemes for each
                                    category. Note that we have ranked schemes which have performance track records of
                                    at least 5 years (consistency cannot be measured unless a scheme has sufficiently
                                    long track record covering multiple market cycles e.g. bull market, bear market,
                                    sideways market etc). Also note that, schemes whose AUMs have not yet reached Rs 500
                                    crores have been excluded from ranking.</p>
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
            var category = $("#sel_schemeCategories").val();

            var flag = false;

            if (category == null || category == "") {
                alert("Please select category");
                return false;
            }

            top.location = "/mutual-funds-research/top-consistent-mutual-fund-performers?category=" + category;
        }
    </script>

</body>



</html>