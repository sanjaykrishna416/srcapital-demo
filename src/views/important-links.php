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
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Institution / Purpose</th>
                                                <th>Link</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>SEBI</td>
                                                <td><a href="https://www.sebi.gov.in/">https://www.sebi.gov.in/</a></td>
                                            </tr>
                                            <tr>
                                                <td>SEBI SCORES (complaints)</td>
                                                <td><a href="https://scores.sebi.gov.in/">https://scores.sebi.gov.in/</a></td>
                                            </tr>
                                            <tr>
                                                <td>SMART ODR (online dispute resolution)</td>
                                                <td><a href="https://smartodr.in/">https://smartodr.in/</a></td>
                                            </tr>
                                            <tr>
                                                <td>AMFI</td>
                                                <td><a href="https://www.amfiindia.com/">https://www.amfiindia.com/</a></td>
                                            </tr>
                                            <tr>
                                                <td>SID/SAI/KIM</td>
                                                <td><a href="https://www.sebi.gov.in/filings/mutual-funds.html">https://www.sebi.gov.in/filings/mutual-funds.html</a></td>
                                            </tr>
                                            <tr>
                                                <td>AMFI - Locate / verify a Distributor</td>
                                                <td><a href="https://www.amfiindia.com/locate-your-nearest-mutual-fund-distributor">https://www.amfiindia.com/locate-your-nearest-mutual-fund-distributor</a></td>
                                            </tr>
                                            <tr>
                                                <td>APMI (PMS industry body)</td>
                                                <td><a href="https://www.apmiindia.org/">https://www.apmiindia.org/</a></td>
                                            </tr>
                                            <tr>
                                                <td>CAMS (RTA)</td>
                                                <td><a href="https://www.camsonline.com/">https://www.camsonline.com/</a></td>
                                            </tr>
                                            <tr>
                                                <td>KFin Technologies (RTA)</td>
                                                <td><a href="https://www.kfintech.com/">https://www.kfintech.com/</a></td>
                                            </tr>
                                            <tr>
                                                <td>CKYC Registry (CERSAI)</td>
                                                <td><a href="https://www.ckycindia.in/">https://www.ckycindia.in/</a></td>
                                            </tr>
                                            <tr>
                                                <td>MF Utilities</td>
                                                <td><a href="https://www.mfuindia.com/">https://www.mfuindia.com/</a></td>
                                            </tr>
                                            <tr>
                                                <td>BSE STAR MF</td>
                                                <td><a href="https://www.bsestarmf.in/">https://www.bsestarmf.in/</a></td>
                                            </tr>
                                            <tr>
                                                <td>NSE MF Invest Platform</td>
                                                <td><a href="https://www.nsemfinvest.com/">https://www.nsemfinvest.com/</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
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