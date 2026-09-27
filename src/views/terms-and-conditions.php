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
                                <p>Welcome to the website of Konda Finserv Private Limited. By using this website you agree to these Terms & Conditions. Please read them together with our Privacy Policy and Disclaimer.</p>
                                <p>About us. We are an AMFI Registered Mutual Fund Distributor (ARN-277134) and an APMI Registered PMS Distributor (APRN-04080). We are not a SEBI Registered Investment Adviser, Portfolio Manager, Stock Broker or Research Analyst. Any advice we provide is incidental to the distribution of mutual funds and is provided free of charge.</p>
                                <p>Nature of content. All content on this website is for general information of investors only. It is not investment advice, an offer, or a solicitation to buy or sell any scheme. Scheme-related information is based on documents published by the respective AMCs, which prevail in case of any difference.</p>
                                <p>No guaranteed returns. Returns on mutual fund and PMS investments are not assured or guaranteed. Past performance is not indicative of future results. Any illustration on this website assumes a rate of not more than 12% per annum and is for education only.</p>
                                <p>Investment process. Investments are accepted only after completion of KYC, FATCA/CRS declaration and risk profiling. Transactions are executed through BSE STAR MF, NSE MF Invest Platform or MF Utilities. Payments are accepted only from the investor's own registered bank account; third-party payments are not accepted.</p>
                                <p>Commission. We deal in Regular Plans and earn trail commission from AMCs, included in the Base Expense Ratio (BER) of the scheme. Our AMC-wise commission disclosure is available on this website and at our office.</p>
                                <p>Use of website. You agree not to misuse this website, attempt unauthorised access, or copy content for commercial use without permission. Content, logo and brand marks belong to Konda Finserv Private Limited.</p>
                                <p>Third-party links. Links to AMC, SEBI, AMFI and other external websites are provided for convenience. We are not responsible for their content or availability.</p>
                                <p>Limitation of liability. We are not liable for any loss arising from use of this website, market movements, connectivity failures, or actions of AMCs, RTAs, platforms or regulators, except to the extent required by law.</p>
                                <p>Grievance. Complaints may be raised to Mr. Ravinder Konda at kondafinserv@gmail.com / +91-9391000958, and escalated to the concerned AMC/RTA, SEBI SCORES <a href="https://scores.sebi.gov.in/">(https://scores.sebi.gov.in/)</a>  and SMART ODR <a href="https://smartodr.in/">(https://smartodr.in/).</a></p>
                                <p>Governing law and jurisdiction. These terms are governed by Indian law. Courts at Hyderabad, Telangana shall have exclusive jurisdiction.</p>
                                <p>Changes. We may modify these Terms at any time; continued use of the website means acceptance of the updated Terms.</p>
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