<!DOCTYPE html>
<html lang="reactjs">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link href="<?= $favIcon ?>" rel="shortcut icon" type="image/png">

</head>

<body>



    <?php include_once('src/components/preLoader.php') ?>
    <?php include_once('src/views/layouts/navbar.php') ?>

    <!-- -------page header------ -->
    <div class="container text-center mt-4 mb-4">
        <h1>404 Page Not Found</h1>
    </div>
    <!-- -------page header------ -->




    <?php include_once('src/views/layouts/footer.php') ?>

</body>



</html>