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
                                <h4>Your rights</h4>
                                <ul>
                                    <li>To receive a copy of your risk profile result and know how it was arrived at.</li>
                                    <li>To know the trail commission we earn from AMCs (included in the BER) before you invest.</li>
                                    <li>To invest directly with AMCs in Direct Plans without routing through a distributor.</li>
                                    <li>To receive scheme documents (SID, SAI, KIM) and have risks explained before investing.</li>
                                    <li>To receive the Consolidated Account Statement (CAS) showing holdings and commission.</li>
                                    <li>To update KYC, bank, nominee and contact details at any time.</li>
                                    <li>To complain and receive acknowledgement within 3 working days and resolution within 15 working days, with escalation to the AMC/RTA, SEBI SCORES and SMART ODR.</li>
                                    <li>To access, correct or seek erasure of your personal data as per the DPDPA, 2023.</li>
                                </ul>

                                <h4>Your obligations</h4>
                                <ul>
                                    <li>Provide true, complete KYC, FATCA/CRS and bank details, and keep them updated.</li>
                                    <li>Complete risk profiling honestly and inform us when your circumstances change.</li>
                                    <li>Read scheme documents before investing; the final investment decision is yours.</li>
                                    <li>Pay only from your own registered bank account; never share OTP or password.</li>
                                    <li>Review your CAS and portfolio statements and report discrepancies promptly.</li>
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