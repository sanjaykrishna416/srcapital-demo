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
            <div class="col-lg-12 col-md-12">
                <p class="text-desgin mt-3">Alternative Investment Funds provide sophisticated investors with opportunities beyond traditional asset classes. Through carefully evaluated Category I, II, and III AIFs, we offer access to alternative investment strategies including private equity, venture capital, structured credit, and other specialized opportunities that can enhance portfolio diversification and long-term return potential.</p>
            </div>
        </div>
      
        
      
    </div>

    <!-- -------life-insurance service ------ -->



    <?//php require_once('src/views/layouts/callus.php'); ?>
    <?php include_once('src/views/layouts/footer.php') ?>

</body>



</html>