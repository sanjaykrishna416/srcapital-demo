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


        <h4 class="">Loan Service</h2>
        <h6 class="mb-2 mt-3">Loans</h6>
        <p class="text-desgin">A wide variety of loan products are available to suit different needs,
            short term, medium term and long term needs of customers.</p>
        <h6 class="pt-3">Home loan</h6>
        <p class="text-desgin"> Home loan is long term product to finance the purchase of property. You
            have to make a down payment (percentage of the purchase consideration) and the lender will
            provide rest of the funds. For under construction properties, the home loan can also be
            construction linked. You have to make loan re-payments in equal monthly instalments (EMI).
            In home loan, the property will be lien with the lender.</p>
        <h6 class="pt-3">Vehicle loan</h6>
        <p class="text-desgin">Vehicle loan is a medium term product to finance the purchase of a
            vehicle e.g. two wheeler, four wheeler etc. You have to make minimum down payment
            (percentage of the vehicle price) and the lender will provide rest of the funds. You have to
            make loan re-payments in equal monthly instalments (EMI). In vehicle loan, the vehicle will
            be lien with the lender.</p>
        <h6 class="pt-3">Personal loan</h6>
        <p class="text-desgin">This is an unsecured loan for certain short term tenure. Loan approval
            will depend on your credit history. There are two types of personal repayments. The most
            popular repayment is in equal monthly instalments (EMI). Some lenders may allow bullet
            repayment, whereby you will have to pay the interest every month and the principal at the
            end of the tenure.</p>
        <h6 class="mb-2 pt-3">Business Loan</h6>
        <p class="text-desgin">Our expert handles paperwork for quick loan processing. We assist through
            each step, aiding with all documents and processes. Choose from a wide bank/NBFC selection
            for the best deal.</p>
        <h6 class="mb-2 pt-3">Loan against property</h6>
        <p class="text-desgin">Like gold loans, you can also get loan against your property
            (residential or commercial). The loan amount to be disbursed is calculated as percentage of
            the property value. Your property documents will be lien with the lender. Loan against
            property can be medium or long term loans. You have to make loan re-payments in equal
            monthly instalments (EMI).</p>
    </div>

    <!-- -------life-insurance service ------ -->


    <?php require_once('src/views/layouts/callus.php'); ?>

    <?php include_once('src/views/layouts/footer.php') ?>

</body>



</html>