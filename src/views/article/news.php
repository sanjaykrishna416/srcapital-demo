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
    <?php require_once('src/components/pageHeader.php'); ?>

    <!-- -------page header------ -->


    <!-- --- news section----- -->
    <div class="container-fluid blog py-5 mb-5">
        <div class="container">

            <div class="row g-5 justify-content-center" id="newsList">

            </div>
            <!-- Pagination Container -->
            <div id="pagination" class="mt-4"></div>
        </div>
    </div>
    <!-- --- news section----- -->



    <?php include_once('src/views/layouts/footer.php') ?>
    <script src="/assets/js/script.js"></script>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        fetchNews(1, "all");
    });
    </script>
</body>



</html>