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
    <div class="container py-5 p-5">
        <div class="row">
            <div class="col-lg-12">
              
                        <div class="single-service">
                            
                            <h4 class="mb-2">What is mutual fund?</h4>
                            <p class="just-content">Mutual funds are financial instruments which invest in a portfolio
                                of securities. These securities may be stocks, bonds, money market instruments, gold,
                                silver and real estate investment trusts (REITs) etc. You can buy units of mutual funds;
                                each unit represents a certain percentage of the mutual fund scheme portfolio. Mutual
                                funds are managed by professional fund managers who manage the schemes according to the
                                investment objectives of the schemes.</p>
                            <h4 class="pt-3">How to invest in mutual funds?</h4>
                            <p class="just-content">When an asset management company (AMC) house launches a new mutual
                                fund scheme, it invites subscriptions from the public in the New Fund Offer (NFO). In
                                the NFO period, investors are allotted units at par value (usually Rs 10). If you
                                invested Rs 10,000 in a mutual fund scheme during the NFO period, you would be allotted
                                1,000 units. You need to be KYC compliant to invest in mutual funds. Your financial
                                advisor can help you fulfil KYC requirements. Along with KYC documents, you need to
                                provide bank details to invest in mutual funds. Investors can invest in mutual funds
                                only from their own bank accounts.</p>
                            <p class="just-content">At the end of the NFO period, the money pooled from all the
                                investors are invested in a diversified portfolio of securities according to the
                                scheme's mandate. After the NFO, investors can buy units of open ended schemes from the
                                AMC at prevailing Net Asset Values (NAV). You can also redeem open ended mutual fund
                                schemes at any time at prevailing NAVs. The redemption proceeds will be credited to your
                                bank account on T+3 for equity funds. Investors should note that for redemptions within
                                a certain period of time from investment exit loads may apply.</p>
                            <h4 class="pt-3">Different types of mutual funds</h4>
                            <p class="just-content">There are three broad categories of mutual funds:-</p>
                            <h6 class="pt-3">Equity funds:</h6>
                            <p class="just-content">These mutual fund schemes invest in equity and equity related
                                securities. Equity funds have sub-categories based on the market cap segments, where the
                                scheme may primarily invest in e.g. large cap, large and midcap, midcap, small cap,
                                multicap, flexicap etc. The primary investment objective of equity funds is capital
                                appreciation.</p>
                            <h6 class="pt-3">Debt funds:</h6>
                            <p class="just-content">These mutual funds schemes invest in debt and money market
                                instruments. Debt funds have sub-categories based on the maturity profiles of the
                                underlying debt or money market instruments e.g. overnight, liquid, ultra-short
                                duration, low duration, short duration, medium duration, long duration etc. The primary
                                investment objective of equity funds is capital appreciation.</p>
                            <h6 class="pt-3">Hybrid funds:</h6>
                            <p class="just-content">These funds invest in both equity and debt securities. They may also
                                invest in other classes like gold, REITs, InvITs etc. The primary investment objective
                                of hybrid funds is asset allocation. Different types of hybrid funds include aggressive
                                hybrid funds, conservative hybrid funds, balanced advantage funds, equity savings etc.
                            </p>
                            <p class="just-content mt-5">Different fund categories and sub-categories have different
                                risk profiles. Mutual funds provide investment solutions for a wide spectrum of risk
                                appetites and investment needs. Your financial advisor can help you select the right
                                investment option for you.</p>

                            <h4 class="mb-2 pt-3">Taxation of mutual funds</h4>
                            <p class="text-justify">Mutual funds, whose average equity allocation (i.e. where underlying assets are equity and equity related securities) is 65% or more, are treated as equity funds from tax perspective. These include all equity funds and also several hybrid fund categories. Short term capital gains (investment holding period of less than 12 months) in equity funds are taxed at 20%. Long term capital gains (investment holding period of more than 12 months) in equity funds are tax free up to Rs 125,000 in a financial year and taxed at 12.5% thereafter.</p>
                            <p class="text-justify">With regards to Debt funds, short term capital gains (investment holding period of less than 36 months) in non-equity funds are taxed as per the income tax rate of the investor. Long term capital gains (investment holding period of more than 36 months) in non-equity funds are taxed at 20% after allowing for indexation for investments made prior to 1st April 2023. However, following the Amendment to Finance Bill 2023, the indexation benefit on debt mutual funds has been withdrawn. Debt funds will now be taxed at investor's tax slab rate. These changes bring taxation of debt and debt oriented mutual funds at par with fixed deposits for investments made from 1st April 2023 onward.</p>
                            <p class="text-justify">Other mutual funds including schemes with equity allocation between 35 - 65% and schemes of asset classes other then equity and debt, e.g. commodities, international etc have long term capital gains taxation holding period of 2 years. Short term capital gains are taxed at investor's tax slab rate, while long term capital gains are taxed at 12.5% (no indexation).</p>
                            <p class="text-justify">Investments in mutual fund Equity Linked Savings Schemes (ELSS) up to Rs 150,000 in a financial year qualify for deductions under Section 80C of The Income Tax Act 1961.</p>
             </div>
            </div>
        </div>
       
       
    </div>

    <!-- -------life-insurance service ------ -->



   <?php //require_once('src/views/layouts/callus.php'); ?>
    <?php include_once('src/views/layouts/footer.php') ?>

</body>



</html>