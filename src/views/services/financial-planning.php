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
                <p class="text-design">Effective wealth creation begins with a well-defined financial plan. Our financial planning services take a holistic approach, helping clients align their investments with life's important milestones. Whether your goals involve retirement planning, children's education, wealth preservation, tax-efficient investing, or estate planning, we develop comprehensive financial roadmaps designed to help you achieve lasting financial security.</p>
            </div>
        </div>
       
       
    </div>

    <!-- -------life-insurance service ------ -->



    <?//php require_once('src/views/layouts/callus.php'); ?>
    <?php include_once('src/views/layouts/footer.php') ?>

</body>



</html>