<!DOCTYPE html>
<html lang="reactjs">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link href="<?= $favIcon ?>" rel="shortcut icon" type="image/png">

</head>

<body>

    <!-- --- main carusal--- -->
    <?php include_once('src/components/preLoader.php') ?>

    <?php include_once('src/views/layouts/navbar.php') ?>

    <!-- -------page header------ -->
    <?php require_once('src/components/pageHeader.php'); ?>
    <!-- -------page header------ -->


    <!-- -------policy------ -->
    <section class="bg-light" id="mfResearch">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="card mt-4 mb-4">
                        <div class="card-body p-4 p-lg-5">
                          	<div class="col-md-12">
                                <p>Scheme suggestions are made only after risk profiling, and only from schemes of AMCs with which we are empanelled. Our advice is incidental to distribution and is provided free of charge.</p>
                                <h4>How we shortlist schemes</h4>
                                <ul>
                                    <li>Scheme category is matched to the investor's risk category, goal and time horizon.</li>
                                    <li>Scheme information is taken from AMC-published documents (SID, SAI, KIM) and recognised research tools; consistency of performance, portfolio quality and fund management record are considered — never last-period returns alone.</li>
                                    <li>The Riskometer level of the scheme must fall within the investor's risk category.</li>
                                    <li>Regular Plans only; no scheme is suggested for the commission it pays.</li>
                                </ul>

                                <h4>Pre-order checks</h4>
                                <ul>
                                    <li>KYC, PAN, FATCA/CRS complete; payment from the investor's own bank account.</li>
                                    <li>Scheme risk, exit load and commission disclosure explained; investor's confirmation obtained.</li>
                                </ul>

                                <h4>Review</h4>
                                <ul>
                                    <li>Every portfolio is reviewed at least once a year against the recorded risk profile and goals; the Portfolio Review Letter records the outcome.</li>
                                    <li>Holdings at a higher Riskometer level than the investor's profile are intimated in writing with rebalance / re-profile / continue options.</li>
                                    <li>A scheme is re-examined when its category, fundamental attributes or Riskometer changes, on sustained underperformance versus its category, or on AMC/regulatory action. Past performance is not indicative of future returns. No return is assured or guaranteed.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- -------policy------ -->




    <?php include_once('src/views/layouts/footer.php') ?>

</body>



</html>