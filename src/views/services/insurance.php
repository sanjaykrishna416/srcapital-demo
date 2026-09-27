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
        <h4 class="">Life Insurance</h4>
        <p class="text-desgin mt-3">"Life insurance isn't just a financial product-it is a promise to your family. It guarantees that whether you are there or not, your loved ones can continue living with dignity, pay off liabilities, support your children's education, and achieve their goals without financial stress."</p>
        <ul>
            <li>Income Replacement: Ensure your family maintains their lifestyle and meets ongoing living expenses.</li>
            <li>Debt & Liability Protection: Cover outstanding home loans, personal loans, or business debts.</li>
            <li>Goal Continuity: Safeguard your children's higher education and future milestones.</li>
            <li>Tax-Efficient Security: Benefit from tax savings while building a robust safety net.</li>
        </ul>
        <h4 class="">Medical & Health Insurance</h4>
        <p class="text-desgin mb-3">"A sudden medical emergency shouldn't derail years of financial planning and investment. Medical insurance provides immediate access to quality healthcare, cash-free hospitalizations, and specialized treatments so you can focus on recovery rather than medical bills."</p>
        <ul>
            <li>Comprehensive Care: Inpatient coverage, pre/post-hospitalization expenses, and daycare procedures.</li>
            <li>Cashless Hospitalization: Seamless admission and treatment across top hospital networks.</li>
            <li>Family Floater Plans: One comprehensive policy to cover your entire family under a single sum insured.</li>
            
        </ul>

       
        <div class="mt-5 mb-5 text-center">
            <h3>Our <span class="primary-highlight-text">Life Insurance</span> & <span class="primary-highlight-text">Health Insurance</span>  Partner</h6>
                 <a class="text-decoration-none"  target="_blank"
                    href="">
                    <img src="/assets/images/about/aditya-life.jpg" alt="Health Life Insurance" class=" img-fluid">
                </a>   
            
            <a class="text-decoration-none"  target="_blank"
                    href="">
                    <img src="/assets/images/about/aditya-logo.jpg" alt="Health Life Insurance" class=" img-fluid">
                </a>
                
                
        </div>


    </div>


    <!-- -------life-insurance service ------ -->



     
    <?php include_once('src/views/layouts/footer.php') ?>

</body>



</html>