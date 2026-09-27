<!DOCTYPE html>
<html lang="reactjs">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link href="<?= $favIcon ?>" rel="shortcut icon" type="image/png">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <style>
        .owl-carousel .owl-item img {
            display: block;
            width: 25% !important;
            margin: 0 auto 10px auto;
            /* centers image horizontally and keeps 10px bottom margin */
        }
    </style>

</head>

<body>


    <?php include_once('src/components/preLoader.php') ?>
    <?php include_once('src/views/layouts/navbar.php') ?>

    <!-- -------page header------ -->
    <?php require_once('src/components/pageHeader.php'); ?>
    <!-- -------page header------ -->



    <section class="py-md-3 py-3 mb-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12 col-12 text-center mt-md-5 mt-3 mb-4">
                    <h2 class="fw-bold">Our <span class="secondary-highlight-text">Founder</span></h2>
                </div>
                <div class="col-lg-4 col-md-12 text-center mt-md-4 mt-3">
                    <img class="clientimg img-fluid" src="/assets/images/about/founder.jpeg" alt="client Image">
                    <h4 class="mt-4" style="font-weight:600; color: var(--primary-color);">Mr. Ashish Kumar Modi</h4>
                    <h6 class="mt-2 text-dark fw-bold" style="font-weight:600;">
                        Founder, <span class="primary-highlight-text">WEALTH</span>
                        <span class="secondary-highlight-text">BUILDERS</span> INVESTMENT SERVICES
                    </h6>
                </div>
                <div class="col-lg-8 col-md-12 mt-md-4 mt-4">
                    <p class="text-desgin">Welcome to Wealth Builders Investment Services, where financial expertise
                        meets a commitment to
                        excellence.</p>

                    <p class="text-desgin">I am <strong>Ashish Kumar Modi</strong>, Founder of Wealth Builders
                        Investment Services, bringing
                        with me over two decades of enriching experience in the financial industry.</p>

                    <p class="text-desgin">My professional journey includes pivotal roles at reputed institutions such
                        as <strong>Anand
                            Rathi</strong> and <strong>Emami Ltd.</strong>, which not only deepened my understanding of
                        wealth management but also strengthened my passion for crafting tailored financial solutions for
                        diverse client needs.</p>

                    <p class="text-desgin">Academically, I hold a <strong>Bachelor’s degree in Commerce (B.
                            Com)</strong>, a
                        <strong>Master’s in Marketing (M.S. Marketing)</strong>, and am a <strong>Chartered Financial
                            Analyst (CFA)</strong>. In addition, I hold multiple <strong>NISM certifications</strong> in
                        Wealth Management, Derivatives, and other financial domains—ensuring that my knowledge remains
                        sharp and relevant in an ever-evolving market.
                    </p>

                    <p class="text-desgin">At Wealth Builders, we are guided by the values of integrity, transparency,
                        and excellence. Our
                        mission is to empower individuals and businesses to navigate the complexities of wealth
                        management with clarity and confidence—offering personalized solutions aligned with their unique
                        financial aspirations

                </div>
            </div>
        </div>
    </section>



   



    <!-- ------- about us------ -->
    <?php include_once('src/views/layouts/footer.php') ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>



       




    </script>
</body>



</html>