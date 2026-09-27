<?php
require_once('src/services/CommonService.php');

if (isset($_GET['slug'])) {
    $slug = $_GET['slug'];
    $newsDetails = CommonService::newsDetails($slug);
}

// Check if the API response is valid
if (!isset($newsDetails) || empty($newsDetails) || !isset($newsDetails['full_content'])) {
    $newsError = true;
} else {
    $newsError = false;
}
?>

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


    <!-- -------Services------ -->

    <section id="serviceDetails" class="bg-light">
        <div class="container-fluid services py-5">
            <div class="container">
                <div class="pb-5 wow fadeIn" data-wow-delay=".3s"
                    style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="card bg-white mb-4" style="border:1px dashed var(--primary-color);">
                                <div class="card-body p-4">
                                    <article>
                                        <?php if (!$newsError): ?>
                                            <?= $newsDetails['full_content']; ?>
                                        <?php else: ?>
                                            <p class="text-center text-danger">Sorry, the news details are currently
                                                unavailable. Please try again later.</p>
                                        <?php endif; ?>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- -------Services------ -->




    <?php include_once('src/views/layouts/footer.php') ?>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let page = new URLSearchParams(window.location.search).get("page") || 1;
            fetchNews(parseInt(page));
        });

        window.addEventListener("popstate", function(event) {
            let page = new URLSearchParams(window.location.search).get("page") || 1;
            fetchNews(parseInt(page));
        });
    </script>
    
</body>



</html>