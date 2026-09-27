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

        

        <h5 class="pt-3">When should we take medi-claim policy?</h5>
        <p class="mb-3 text-desgin">Cost of quality healthcare in India has been sky-rocketing for the
            past decade or so. Hospitalization for a serious health condition can set you back by Rs 5
            to 10 lakhs, depending on the severity of the condition and treatment options. Health
            insurance provides insurance cover for comprehensive hospitalization expenses related to
            accident and illness. It typically covers the following expenses:-</p>
        <ul>
            <li>Room, boarding expenses of the hospital bed</li>
            <li>Fees charged by physician, surgeon, anesthetist and other specialists</li>
            <li>Cost of medical procedures e.g. surgery, dialysis etc.</li>
            <li>Cost of medicines, medical equipments, consumables etc.</li>
            <li>Tests and procedures like X Ray, ECG, MRI, anesthesia etc</li>
        </ul>
        <p class="mb-3 text-desgin">Some health insurance policies may also cover pre hospitalization medical expenses
            e.g. tests, diagnosis etc, up to the limit of your health insurance cover (sum insured). If your health
            insurance sum insured is Rs 5 lakhs and your hospital bill is Rs 6 lakhs, the health insurance company will
            pay Rs 5 lakhs and you will have to pay Rs 1 lakh.</p>
        <p class="mb-3 text-desgin">Health insurance claims can be cashless or on a reimbursed basis. In a cashless
            claim, you do not have pay from your pocket. Your medical bills are settled directly by the insurance
            company to the hospital. In reimbursement, you have to settle the hospital bills and claim reimbursement
            from the insurer after submitting the bills. Obviously, cashless claims are much more convenient but for
            cashless claims you have to go to a hospital which is in the hospital network of the insurance company.</p>
        <p class="mb-3 text-desgin">Your health insurance premium will depend on the sum insured (amount of health
            insurance cover), your age / age of your family members (in case of a family floater plan), pre-existing
            medical conditions, the policy features you opt for e.g. what illnesses / procedures are covered,
            exclusions, type of room you are entitled to (single, sharing basis, deluxe etc), co-pay (what percentage of
            the expenses e.g. 20% you will have to pay in the event of an hospitalization) etc. There many points to
            consider when buying health insurance or Mediclaim. We recommend the right health insurance product for you based on your needs.</p>

       
        </div>
    
       
    <!-- -------life-insurance service ------ -->



    
    <?php include_once('src/views/layouts/footer.php') ?>

</body>



</html>