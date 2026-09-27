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
                            
                            <h4 class="mb-2">What is Systematic Withdrawal Plan?</h4>
                            <p class="just-content">Smart investment solution for cash flow needs and wealth creation. In a normal SWP, generally investors can withdraw a fixed amount at a fixed frequency from their investments. However, we can try another innovative way of doing SWP You can call it SWP with Annual increase. The concept is that you can decide to increase the SWP amount annually by a certain percentage / or by increasing the fixed amount. This helps you get higher regular cash flow which helps you keep pace with the increasing inflation. But most of the AMCs do not provide this facility through a standard product. Therefore, if you want to use this innovative option, you should give SWP mandate annually by increasing the amount to the extent you want.</p>
                            <h4 class="pt-3">Which Are the Best Mutual Funds for SWP Based Performance?</h4>
                            <p class="just-content">However, whether you want to opt for a normal SWP or SWP with annual increase, the key is to select the good performing funds. Best SWP in Mutual Fund research tool helps you in that. Here we have back tested the SWP results of all the schemes in a category and picked the best SWP funds basis the returns generated in the selected period post withdrawal of the SWP amount. You can check the best SWP Funds by selecting the scheme category that you want to invest in and start SWP, select from and to period and provide the lump sum and fixed withdrawal amounts along with the SWP frequency. You will see the results with scheme names in order of highest to lowest returns. This helps you know which scheme/s did well in the past in the category chosen by you. However, investors should note that past performance of mutual funds are no guarantee or assurance for future returns.</p>
                           
                           
                          
             </div>
            </div>
        </div>
       
       
    </div>

    <!-- -------life-insurance service ------ -->



   <?php //require_once('src/views/layouts/callus.php'); ?>
    <?php include_once('src/views/layouts/footer.php') ?>

</body>



</html>