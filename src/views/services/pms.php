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


    <!-- -------life-insurance service ------ -->
    <div class="container py-5">
        <h4 class="">Portfolio Management Services</h4>
        <p class="text-desgin mt-3">Portfolio Management Services or PMS, is a service offered by
            the Portfolio Manager or an asset management company, is an investment portfolio in stocks,
            fixed income, debt, cash and other securities, managed by a professional fund manager that
            can potentially be tailored to meet specific investment objectives. Unlike mutual funds,
            where investors own units of the mutual fund scheme, in a PMS, the investors own individual
            securities. Although the portfolio managers may oversee hundreds of portfolios, your account
            may be unique.</p>
        <h5 class="pt-3">Types of PMS</h5>
        <h6 class="pt-3">Discretionary PMS:</h6>
        <p class="text-desgin">Under this service, the choice as well as the timings of the
            investment decisions is solely lies with the Portfolio Manager.</p>
        <h6 class="pt-3">Non-Discretionary:</h6>
        <p class="text-desgin">Under this service, while the portfolio manager will suggest
            only the investment ideas, the investor will decide the investment timings and decisions
            regarding the portfolio. However the execution of the trades is done by the PMS portfolio
            manager.</p>
        <!-- <h6 class="pt-3">Advisory</h6>
        <p class="text-desgin">Under this service, while the PMS portfolio manager only
            suggests the investment ideas, the decision as well as the execution of the investment
            decisions rest solely with the Investors.</p> -->
        <h5 class="pt-3">Benefits of a PMS</h5>
        <h6 class="pt-3">Professional Management</h6>
        <p class="text-desgin">The PMS Service provides professional management of stock
            portfolios with the main objective of delivering long-term performance while minimising
            risk.</p>
        <h6 class="pt-3">Continuous Monitoring</h6>
        <p class="text-desgin">The PMS fund manager, constantly monitors the portfolio and
            periodic changes are made by him/her to optimise the performance.</p>
        <h6 class="pt-3">Flexibility</h6>
        <p class="text-desgin">The Portfolio Manager has fair amount of flexibility in terms of
            holding cash, for example, it can keep the cash holding even up to 100% depending upon
            his./her understanding of the market conditions. The portfolio manager can create a
            reasonable concentration in the investor portfolios by investing disproportionate amounts in
            favour of foreseeable opportunities in the market situation.</p>
        <h6 class="pt-3">Risk Control</h6>
        <p class="text-desgin">The research team of the PMS Service, provides real time
            information to support the fund management team and thus control the risk.</p>
        <h6 class="pt-3">Ease of Operation</h6>
        <p class="text-desgin">Portfolio Management Service provides the clients with a
            customised service and takes care of all the administrative aspects and provides periodic
            portfolio reporting. It discloses the overall status of the portfolio, holdings and
            performance on a daily basis. For this, the PMS Service provides a login ID and password for
            the investor to check his/her PMS details.</p>
        <!-- <h6 class="pt-3">Custom made Advice</h6> -->
        <!-- <p class="text-desgin">For select clients, the PMS provider gives the benefit of tailor
            made investment advice designed to achieve investors various financial goals.</p> -->
    </div>

    <!-- -------life-insurance service ------ -->



    <?//php require_once('src/views/layouts/callus.php'); ?>
    <?php include_once('src/views/layouts/footer.php') ?>

</body>



</html>