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

        <div class="col-lg-12">
				<img src="../assets/images/blog/largecap-funds/large_cap_funds_core_portfolio_premium_page-0001.jpg">
				<img src="../assets/images/blog/largecap-funds/large_cap_funds_core_portfolio_premium_page-0002.jpg">
				<img src="../assets/images/blog/largecap-funds/large_cap_funds_core_portfolio_premium_page-0003.jpg">
				<img src="../assets/images/blog/largecap-funds/large_cap_funds_core_portfolio_premium_page-0004.jpg">
			</div>
    </div>
     
     


       
        </div>
    
       
    <!-- -------life-insurance service ------ -->



    
    <?php include_once('src/views/layouts/footer.php') ?>

</body>



</html>