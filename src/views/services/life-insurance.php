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
       
        <p class="text-desgin mt-3">Life insurance is financial product that provides the policy holder
            financial protection in the event of an unfortunate death. Anyone who is working and has
            dependents like children, spouse, retired parents etc needs life insurance because an
            untimely death will deprive the family of income and cause financial distress. If you have
            debt e.g. home loan, car loan etc, then life insurance becomes an even more critical
            financial need.</p>
        <h5 class="">How does life insurance plan work?</h5>
        <p class="text-desgin mb-3">A life insurance policy will provide your dependents financial
            protection over a certain period of time (the policy term) in the event of an unfortunate
            death. The amount of financial protection is known as sum assured or cover; sum assured is
            the amount your dependents will get in the event of an unfortunate death during the policy
            term.</p>
        <h5 class="">How much cover should you buy?</h5>
        <p class="text-desgin mb-3">It depends on your income and the needs of your family. The income
            from your life insurance cover should be able to meet the needs of your dependents for a
            long period of time or at least till the time, when your dependents themselves become
            financially independent e.g. your children start working. Additionally, if you have debt
            e.g. personal loan, home loan etc your cover should be large enough to repay those loans in
            the event of an unfortunate death. A common rule of thumb is that your life insurance sum
            assured (cover) should be at least 10 to 12 times of your annual income.</p>
        <h5 class="">What is the cost of a life insurance policy?</h5>
        <p class="text-desgin mb-3">The cost of an insurance policy is known as premium. The insurance
            premium is payable annual (or other intervals like monthly, quarterly etc) throughout the
            policy term or a shorter period, as specified in the policy document. There are also single
            premium policies, where the entire premium is paid up front. Since the entire premium is up
            front (lump sum), the insurer will provide you a discount on the premium. The insurance
            premium will depend on a number of factors, the most important of which are the sum assured,
            your age, pre-existing medical conditions (e.g. diabetes, hypertension etc), lifestyle
            habits (e.g. smoking), additional riders e.g. accident, critical illness etc.</p>
        <h5 class="">Different types of life insurance plans</h5>
        <p class="text-desgin mb-3">There are broadly three types of life insurance plans:-</p>
        <h6 class="">Term life insurance:</h6>
        <p class="text-desgin mb-3">Term life insurance provides life cover to the policy holder over
            the policy term. Term plans are pure protection plans; there are no survival benefits in
            term plans. For example, if you bought an Rs 1 crore term plan for a policy term of 20
            years, your dependents will get the sum assured i.e. Rs 1 crore in the event of an
            unfortunate death. However, you will not get any maturity benefits, if you survive the
            policy term. The premiums of term plans are much lower than premiums of other types of life
            insurance plans.</p>
        <h6 class="">Traditional life insurance plans:</h6>
        <p class="text-desgin mb-3">The main difference between traditional life insurance plan and
            term plan is survival benefits. In a traditional life insurance plan, you will get the sum
            assured if you survive the policy term. In addition to the sum assured purchased by you, you
            will also get guaranteed additions to the sum assured every year, after the completion of a
            specified number of policy years. You will also get reversionary bonuses at the discretion
            of the insurer. Traditional life insurance plans are insurance cum investment plans, where
            you get the life insurance cover in the event of an unfortunate death and also returns on
            your investment (premiums) at the end of the policy term, if you survive the policy term.
        </p>
        <h6 class="">Unit Linked Insurance Plans:</h6>
        <p class="text-desgin mb-3">Unit linked insurance plans (ULIPs) are insurance cum investment
            plans. The main difference between ULIPs and traditional life insurance plans is that ULIPs
            are market linked investments. In ULIPs a portion of your premium is used to provide you
            life insurance cover, while a portion of your premium is invested in market securities like
            stocks, bonds etc. You can think of ULIP as a combined Term Life Insurance Plan and Mutual
            Fund. Since ULIPs are subject to market risks, you can even make a loss in ULIP. However,
            ULIPs also have the potential of giving much higher returns than traditional life insurance
            plans. There are different types of ULIPs with different risk profiles. We help you select a plan according to your risk appetite.</p>

        </div>





    <!-- -------life-insurance service ------ -->



    
    <?php include_once('src/views/layouts/footer.php') ?>

</body>



</html>