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
                 <p>NCDs are long-term debt instruments issued by corporations to raise capital from the public. Unlike convertible debentures, NCDs do not have the option to convert into equity shares. They have a fixed interest rate and a specific tenure, providing investors with regular interest income until maturity.</p>
            </div>
        </div>

     
    


       
        </div>
    
       
    <!-- -------life-insurance service ------ -->



    
    <?php include_once('src/views/layouts/footer.php') ?>

</body>



</html>