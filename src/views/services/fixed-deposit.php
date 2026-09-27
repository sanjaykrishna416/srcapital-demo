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
    <div class="container mt-5">
        <h4 class="">Fixed Deposit</h4>
        <p class="text-desgin">Fixed deposits has traditionally been and still is the most popular
            investment option in India. As per RBI's report on household savings, 56% of household
            financial assets are invested in Bank FDs. Corporate Fixed Deposits are term deposits like
            bank FDs. They offer fixed rate of interest and principal amount on maturity. However,
            instead of banks, corporate FDs are offered by non banking financial companies (NBFCs).
            Corporate FDs are very popular among informed investors since offer higher returns compared
            to bank FDs.</p>
        <h5 class="pt-3">Bank FD versus Corporate FD</h5>
        <h6 class="pt-3">Rate of return:</h6>
        <p class="text-desgin">Interest rates of corporate FDs are usually higher than interest rates
            of banks FDs. For example current 3 - 5 year FD interest in SBI is 6.1%, whereas Bajaj
            Finance is offering 7% interest rate on 3 - 4 year FD. Interest rates of corporate FDs vary
            from one company to another depending on the credit rating of the company. We will discuss
            about credit ratings later.</p>
        <h6 class="pt-3">Tenure:</h6>
        <p class="text-desgin">The tenure for bank FDs range from 7 days to 10 years. The tenure for
            corporate FDs range from 12 months to maximum 4 - 6 years. If you want to invest for very
            long tenure e.g. 8 to 10 years, then bank FD will be the only term deposit option for you.
            However, for shorter tenures you may consider corporate FDs.</p>
        <h6 class="pt-3">Lock-in period:</h6>
        <p class="text-desgin">There is no lock-in period in bank FDs. Corporate FDs may have lock-in
            period. Usually lock-in period for corporate FDs is 3 months; you cannot make any withdrawal
            prior to the completion of the lock-in period. However, not all corporate FDs may have
            lock-in periods.</p>
        <h6 class="pt-3">Premature withdrawals:</h6>
        <p class="text-desgin">Premature withdrawals are allowed in both bank and corporate FDs.
            However, penalties may apply for premature withdrawals may be applicable for both bank and
            corporate FDs. If you want the flexibility of making premature withdrawals, then bank FDs
            will be the more favourable option for two reasons (a) no lock-in period (higher liquidity)
            and (b) lesser premature withdrawal penalty. While bank FDs may offer more flexibility for
            premature withdrawals, you should weigh this as a trade-off against higher returns offered
            by corporate FDs.</p>
        <h6 class="pt-3">Taxation:</h6>
        <p class="text-desgin">Taxation of bank FDs and corporate FDs is the same. The interest paid by
            the FD is added to your income and taxed as per your income tax slab.</p>
        <h5 class="pt-3">Points to consider for investing in corporate FDs</h5>
        <h6 class="pt-3">Interest rate:</h6>
        <p class="text-desgin">Different NBFCs offer different interest rates on their FDs. You should
            compare different FDs and make informed investment decisions. However, you should also take
            credit risk into consideration.</p>
        <h6 class="pt-3">Credit risk:</h6>
        <p class="text-desgin">Credit risk refers to the NBFC's failure of meeting interest and / or
            principal payment obligations, exposing the investor to potential loss of income and / or
            capital. You should consider the credit rating of the instrument and make informed
            investment decisions.</p>
        <h6 class="pt-3">Tenures:</h6>
        <p class="text-desgin">Corporate FDs may offer different interest rates for different tenures;
            interest rates are usually higher for longer tenures. You should decide as per investment
            needs.</p>
        <h6 class="pt-3">Mode of interest pay-out:</h6>
        <p class="text-desgin">Corporate FDs offer both periodic (non cumulative) and cumulative
            interest pay-out. In periodic interest payout, the interest will be paid to monthly,
            quarterly, half yearly or yearly; the rate of interest will differ for different pay-out
            intervals. In cumulative interest pay-out the interest is re-invested and you get the
            benefits of compound interest. You should decide on cumulative or non cumulative interest
            depending on your investment needs.</p>

        <h5 class="pt-3">What are bonds?</h5>
        <p class="text-desgin">Bonds are fixed income instruments which pay fixed rate of interest at
            regular intervals and the principal amount on maturity. Bonds as an asset class are very
            popular in the developed economies. However, the bond market in India has historically been
            relatively small. In more recent times, with Bank FD interest rates declining, bonds are
            gaining a lot of popularity among retail and HNI investors.</p>

        <h5 class="pt-3">How do bonds work?</h5>
        <p class="text-desgin">You can buy bonds both from the primary market (at the time when the
            bond is issued) or from the secondary market (stock exchanges). You need to have Demat
            accounts to invest in bonds in secondary market. If you buy in the primary issue, you will
            get the bond at face value. In the secondary market, the bonds will be priced either at
            premium or discount to the face value based on prevailing interest rates. The bond will make
            periodic interest payments to you based on the coupon rate. On maturity you will get the
            face value of the bond. You can also sell the bond before maturity in the secondary market
            at prevailing market price.</p>
        

    <!-- -------life-insurance service ------ -->


    <?php require_once('src/views/layouts/callus.php'); ?>

    <?php include_once('src/views/layouts/footer.php') ?>

</body>



</html>