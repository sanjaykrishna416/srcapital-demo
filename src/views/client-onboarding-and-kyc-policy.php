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
                                <p>Every investor is onboarded through the same eight steps, in the same order. No investment is accepted until steps 1 to 6 are complete.</p>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Step</th>
                                                <th>Stage</th>
                                                <th>What is done</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1.</td>
                                                <td>Introduction</td>
                                                <td>We explain who we are (MFD + PMS Distributor), what we do, and how we earn (trail commission in BER).</td>
                                            </tr>
                                            <tr>
                                                <td>2.</td>
                                                <td>KYC</td>
                                                <td>PAN and officially valid documents collected. KYC done or validated through KRA/CKYC. In-person verification recorded where Aadhaar OTP route is not used.</td>
                                            </tr>
                                            <tr>
                                                <td>3.</td>
                                                <td>FATCA / CRS</td>
                                                <td>Tax residency self-certification obtained from every investor. For non-individual investors, Ultimate Beneficial Owner declaration is also obtained.</td>
                                            </tr>
                                            <tr>
                                                <td>4.</td>
                                                <td>Risk profiling</td>
                                                <td>Risk profiling questionnaire completed and the risk category communicated to the investor in writing before the first investment.</td>
                                            </tr>
                                            <tr>
                                                <td>5.</td>
                                                <td>Bank & nominee</td>
                                                <td>Investor's own bank account registered for payments and payouts. Nomination registered or opt-out recorded as per SEBI requirement.</td>
                                            </tr>
                                            <tr>
                                                <td>6.</td>
                                                <td>Disclosures</td>
                                                <td>Commission disclosure, scheme risk level and grievance process explained. Welcome letter issued.</td>
                                            </tr>
                                            <tr>
                                                <td>7.</td>
                                                <td>Execution</td>
                                                <td>Transactions executed through BSE STAR MF / MF Utilities and recorded in our transaction register.</td>
                                            </tr>
                                            <tr>
                                                <td>8.</td>
                                                <td>Records</td>
                                                <td>All onboarding documents preserved as per PMLA and SEBI/AMFI retention norms.</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <h4>Rules we never break</h4>
                                <ul>
                                    <li>No investment without completed KYC, PAN and FATCA/CRS.</li>
                                    <li>No cash. No third-party payments - only the investor's own registered bank account.</li>
                                    <li>Risk profiling always precedes the first investment.</li>
                                    <li>We never ask for, or accept, an investor's OTP or password.</li>
                                    <li>Personal data is handled strictly as per our Privacy Policy (DPDPA, 2023).</li>
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