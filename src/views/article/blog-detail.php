<?php
require_once('src/services/CommonService.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $blogsDetails = CommonService::blogsDetails($id);
    if (!isset($blogsDetails) || empty($blogsDetails) || !isset($blogsDetails['title']) || !isset($blogsDetails['content'])) {
        $blogError = true;
    } else {
        $blogError = false;
    }
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

    <div class="container-fluid page-header">
        <div class="container text-center py-4" >
            <h1 class="text-white mb-4 animated slideInDown fs-3">
                <?= !$blogError ? htmlspecialchars($blogsDetails['title']) : "Blog Not Found"; ?>
            </h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-decoration-none" href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a class="text-decoration-none"
                            href="/blogs">Blogs</a></li>
                    <?php if (!$blogError): ?>
                        <li class="breadcrumb-item"><a class="text-decoration-none"
                                href="<?= htmlspecialchars($blogsDetails['id']); ?>">
                                <?= htmlspecialchars($blogsDetails['title']); ?>
                            </a></li>
                    <?php endif; ?>
                </ol>
            </nav>
        </div>
    </div>
    <!-- -------page header------ -->

    <!-- -------Services------ -->
    <section id="serviceDetails" class="bg-light">
        <div class="container-fluid services py-5">
            <div class="container">
                <div class="pb-5 wow fadeIn" data-wow-delay=".3s"
                    style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="card bg-white border-0 mb-4">
                                <div class="card-body p-4" style="border:1px dashed var(--primary-color);">
                                    <article>
                                        <?php if (!$blogError): ?>
                                            <?= $blogsDetails['content']; ?>
                                        <?php else: ?>
                                            <p class="text-center text-danger">Sorry, the blog details are currently
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