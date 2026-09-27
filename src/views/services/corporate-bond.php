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
        <div class="row">
          
                <h5 class="mb-2 ">What are bonds?</h5>
                <p class="text-desgin">Bonds are fixed income instruments which pay fixed rate of interest
                    at regular intervals and the principal amount on maturity. Bonds as an asset class are
                    very popular in the developed economies. However, the bond market in India has
                    historically been relatively small. In more recent times, with Bank FD interest rates
                    declining, bonds are gaining a lot of popularity among retail and HNI investors.</p>
                <h5 class="pt-3">How do bonds work?</h5>
                <p class="text-desgin">You can buy bonds both from the primary market (at the time when the
                    bond is issued) or from the secondary market (stock exchanges). You need to have Demat
                    accounts to invest in bonds in secondary market. If you buy in the primary issue, you
                    will get the bond at face value. In the secondary market, the bonds will be priced
                    either at premium or discount to the face value based on prevailing interest rates. The
                    bond will make periodic interest payments to you based on the coupon rate. On maturity
                    you will get the face value of the bond. You can also sell the bond before maturity in
                    the secondary market at prevailing market price.</p>
                <h5 class="pt-3">Key terms to understand in bond investing</h5>
                <p class="text-desgin"><i
                        class="fa fa-check-circle mr-10 highlight-text highlight-text highlight-text highlight-text highlight-text highlight-text"
                        aria-hidden="true"></i><span style="font-weight:600; color:black">Secured /
                        unsecured :</span> Under this
                    service, the choice as well as the timings of the investment decisions is solely lies
                    with the Portfolio Manager.</p>
                <p class="text-desgin"><i
                        class="fa fa-check-circle mr-10 highlight-text highlight-text highlight-text highlight-text highlight-text highlight-text"
                        aria-hidden="true"></i><span style="font-weight:600; color:black">Face Value
                        :</span> The bonds are issued at
                    face value. Face value is the amount that will be paid to you upon maturity of the bond.
                    Coupon or interest paid by the bond is on face value. Bonds may trade at premium or
                    discount to the face value. In other words, if you are buying the bond in secondary
                    market (i.e. stock exchanges), then the price at which you buy will be higher or lower
                    than the face value.</p>
                <p class="text-desgin"><i
                        class="fa fa-check-circle mr-10 highlight-text highlight-text highlight-text highlight-text highlight-text highlight-text"
                        aria-hidden="true"></i><span style="font-weight:600; color:black">Coupon Rate :
                    </span>This is the rate of
                    interest that will be paid to you on a periodic basis. For example, if face value of a
                    bond is Rs 1,000 and the coupon rate is 8%, then you will get Rs 80 as interest every
                    year</p>
                <p class="text-desgin"><i
                        class="fa fa-check-circle mr-10 highlight-text highlight-text highlight-text highlight-text highlight-text highlight-text"
                        aria-hidden="true"></i><span style="font-weight:600; color:black">Frequency of
                        coupon payments :</span> This
                    refers to the intervals at which coupon payments will be made e.g. half yearly, annual
                    etc.</p>
                <p class="text-desgin"><i
                        class="fa fa-check-circle mr-10 highlight-text highlight-text highlight-text highlight-text highlight-text highlight-text"
                        aria-hidden="true"></i><span style="font-weight:600; color:black">Redemption date
                        :</span> This refers to the
                    date when the bond will mature. You will get the face value of the bond, along with
                    accrued interest (if any) on the redemption date..</p>
                <p class="text-desgin"><i
                        class="fa fa-check-circle mr-10 highlight-text highlight-text highlight-text highlight-text highlight-text highlight-text"
                        aria-hidden="true"></i><span style="font-weight:600; color:black">Accrued Interest
                        :</span> Accrued interest is
                    the interest accrued by the seller from the last coupon payment date till the date on
                    which the bond is sold. Since the buyer will get the full years interest on the next
                    coupon date, the accrued interest is included in the bonds quoted price. The bonds price
                    including the accrued interest is known as the dirty price. The clean price of the bond
                    = Dirty price - accrued interest.</p>
                <p class="text-desgin"><i
                        class="fa fa-check-circle mr-10 highlight-text highlight-text highlight-text highlight-text highlight-text highlight-text"
                        aria-hidden="true"></i><span style="font-weight:600; color:black">Yield to maturity
                        :</span> YTM of a fixed
                    income instrument is the return on investment (assuming interest payments are
                    re-invested at the same rate) if you hold the instrument till its maturity. When
                    calculating yields, both interest payments (coupons) and principal payment (face value)
                    on maturity must be taken into consideration. Higher the YTM, higher the returns. YTM.
                </p>
                <p class="text-desgin"><i
                        class="fa fa-check-circle mr-10 highlight-text highlight-text highlight-text highlight-text highlight-text highlight-text"
                        aria-hidden="true"></i><span style="font-weight:600; color:black">Duration
                        :</span>Duration refers to the
                    interest rate risk of a bond. There are two types of durations - Macaulay Duration and
                    Modified Duration. Macaulay and Modified Durations are closely related. Macaulay
                    duration is the weighted average term to maturity of the cash flows from a fixed income
                    security. In simplistic terms, Macaulay Duration is the weighted average number of years
                    an investor must maintain a position in a fixed income instrument until the present
                    value of the fixed income instruments cash flows equals the amount paid for the
                    instrument. Duration and maturity are related - longer the maturity, longer is the
                    duration. It is important for you to know that duration is directly related to the
                    interest rate sensitivity of a bond. Higher the duration, higher is the bonds
                    sensitivity to interest changes. Modified duration is simply the percentage change in
                    price due to the percentage change in interest rate.</p>
                <p class="text-desgin"><i
                        class="fa fa-check-circle mr-10 highlight-text highlight-text highlight-text highlight-text highlight-text highlight-text"
                        aria-hidden="true"></i><span style="font-weight:600; color:black">Bond rating
                        :</span>Bonds are rated by credit
                    rating agencies like CRISIL and ICRA. Higher the credit rating lower is the credit risk.
                    You should know that bo nds with lower ratings will have higher YTMs but the risk is
                    also higher. You should make informed investment decisions.</p>
                <h5 class="pt-3">Different types of bonds</h5>
                <p class="text-desgin"><i
                        class="fa fa-check-circle mr-10 highlight-text highlight-text highlight-text highlight-text highlight-text highlight-text"
                        aria-hidden="true"></i><span style="font-weight:600; color:black">Corporate Bonds -
                    </span>These are secured
                    bonds issued by companies</p>
                <p class="text-desgin"><i
                        class="fa fa-check-circle mr-10 highlight-text highlight-text highlight-text highlight-text highlight-text highlight-text"
                        aria-hidden="true"></i><span style="font-weight:600; color:black">Sovereign Gold
                        Bonds (SGBs) -</span>These are
                    gold bonds (backed by gold) issued by RBI on behalf of the Government</p>
                <p class="text-desgin"><i
                        class="fa fa-check-circle mr-10 highlight-text highlight-text highlight-text highlight-text highlight-text highlight-text"
                        aria-hidden="true"></i><span style="font-weight:600; color:black">Government
                        Securities (G-Secs) - </span>These
                    are Government bonds issued by RBI on behalf of the Government of India. These bonds
                    have sovereign guarantee</p>
                <p class="text-desgin"><i
                        class="fa fa-check-circle mr-10 highlight-text highlight-text highlight-text highlight-text highlight-text highlight-text"
                        aria-hidden="true"></i><span style="font-weight:600; color:black"> Non convertible
                        debentures (NCDs) -
                    </span>These are unsecured bonds issued by companies</p>
                <p class="text-desgin"><i
                        class="fa fa-check-circle mr-10 highlight-text highlight-text highlight-text highlight-text highlight-text highlight-text"
                        aria-hidden="true"></i><span style="font-weight:600; color:black">Capital Gains
                        Bonds - </span>You can save
                    capital gains tax arising out sale of capital assets e.g. property etc by investing in
                    capital gains bonds u/s 54EC.</p>
                <h5 class="pt-3">How to invest in bonds?</h5>
                <p class="text-desgin">You can invest in bonds through your stockbroker, just like stocks.
                    You need to have demat and trading accounts. Contact your stockbroker if you want to
                    know more about investing in bonds.</p>
        </div>
         
    </div>
    <!-- -------life-insurance service ------ -->



    
    <?php include_once('src/views/layouts/footer.php') ?>

</body>



</html>