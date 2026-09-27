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
                                <p>Konda Finserv Private Limited is an AMFI Registered Mutual Fund Distributor (ARN-277134) and APMI Registered PMS Distributor (APRN-04080). We are not a SEBI Registered Investment Adviser. Advice, if any, is incidental to distribution and provided free of charge.</p>
                                <ul>
                                    <li>Mutual Fund investments are subject to market risks. Read all scheme related documents carefully before investing.</li>
                                    <li>Investments in securities market are subject to market risks. Read all the related documents carefully before investing.</li>
                                    <li>Past performance is not indicative of future returns. No scheme offers assured or guaranteed returns or capital protection. NAVs can go up or down.</li>
                                    <li>PMS investments carry concentration risk, liquidity risk and potential loss of capital. Minimum investment Rs. 50 lakh as per SEBI regulations. We are a PMS Distributor — not the Portfolio Manager. Read the PMS Disclosure Document carefully before investing.</li>
                                    <li>Scheme information on this website is based on AMC-published documents (SID, SAI, KIM), which prevail in case of any difference.</li>
                                    <li>Any calculator or illustration on this website assumes a rate not exceeding 12% per annum and is for investor education only; it is not a promise of returns.</li>
                                    <li>We deal in Regular Plans and earn trail commission from AMCs, included in the BER of the scheme. Investors also have the option to invest directly with AMCs in Direct Plans without routing through a distributor; such investments do not carry distributor commission.</li>
                                    <li>Payments are accepted only from the investor's own registered bank account. We never ask for your OTP or password.</li>
                                </ul>
                                <p>For any clarification, contact Mr. Ravinder Konda at kondafinserv@gmail.com / +91-9391000958.</p>
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