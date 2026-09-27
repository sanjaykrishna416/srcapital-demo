<!DOCTYPE html>
<html lang="reactjs">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="<?= $favIcon ?>" rel="shortcut icon" type="image/png">

    <title><?= $title ?></title>
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
        <div class="row p-5">
            <div class="col-sm-12 col-md-4">
                <?php include_once('src/components/serviceList.php') ?>
            </div>
            <div class="col-md-8">
                   <div class="card p-2 single-service" style="border-top: 5px solid var(--primary-color);">
                    <h3 class="">Tax Planning Service</h3>
                    <div class="card-body">
                        <p class="just-content">Planning For Tax Saving Investments Efficiently & Filing Income Tax
                            Return . ITR represents an individual's income and the taxes that are to be paid on that
                            income during the financial year starting on 1st April till 31st Mar </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- -------life-insurance service ------ -->



    <?php require_once('src/views/layouts/callus.php'); ?>
    <?php include_once('src/views/layouts/footer.php') ?>

</body>



</html>