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


    <!-- ------- about us------ -->
    <section class="mt-0 py-5 about-section" data-aos="fade-down" data-aos-delay="100">
        <div class="container">
            <div class="row  justify-content-center align-items-center">
                <div class="col-lg-6 col-md-6 col-12 text-center">
                    <img src="../assets/images/about/piggy-green-one.png" class="img-fluid" width="400px">
                     
                </div>
                <div class="col-lg-6  col-md-6 col-12">
                    <h4>Welcome To</h4>
                    <h1 class="fw-bold hero-title " >
                         
                        <span class="secondary-highlight-text">SR Capital Service</span> 
                    </h1>
                   <p>SR Capital Service is a trusted financial supermarket dedicated to helping individuals and families build, manage, and protect their wealth.</p>
                     <p>With 20 years of experience since 2006, we have proudly served 500+ families, providing personalized financial solutions based on their goals and needs. Over the years, our commitment, transparency, and long-term relationships have helped many of our clients move closer to their financial dreams.</p>
                     <p>With SR Capital Service, we believe in building wealth today for a more secure tomorrow.</p>
                    
                </div>
                
              
               
                </div>
            </div>
            </div>
        </div>
    </section>

    


      

    

    

   

   

   



    <!-- ------- about us------ -->
    <?php include_once('src/views/layouts/footer.php') ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>



        document.addEventListener("DOMContentLoaded", function () {
            const counters = document.querySelectorAll(".counter-value");

            counters.forEach(counter => {
                const target = +counter.getAttribute("data-target");
                const suffix = counter.getAttribute("data-suffix") || "+"; // default suffix
                const duration = 2000; // total time (ms)
                const steps = 60; // frames of animation
                const increment = target / steps;
                let current = 0;

                function updateCounter() {
                    current += increment;
                    if (current >= target) {
                        counter.innerText = target.toLocaleString() + suffix; // formatted with commas
                    } else {
                        counter.innerText = Math.ceil(current).toLocaleString();
                        setTimeout(updateCounter, duration / steps); // smoother timing
                    }
                }

                updateCounter();
            });
        });




    </script>
</body>



</html>