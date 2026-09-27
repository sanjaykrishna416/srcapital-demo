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
    <?//php require_once('src/components/pageHeader.php'); ?>

    <!-- -------page header------ -->


    <!-- -------Services------ -->
    <section class=" mb-5 about-section" data-aos="fade-down" data-aos-delay="100">
        <div class="container py-5">
         <div class="row">
            <div class="col-lg-12 col-md-12">
                  <h1 class="fw-bold hero-title "> Our <span class="secondary-highlight-text"> Services </span></h1>  
                <p class="text-design">
                    At Konda Finserv Pvt. Ltd, we offer comprehensive mutual fund distribution and financial planning services designed to help you achieve your financial goals.
                </p>
               
            </div>
         </div>   

  
    <div class="row  align-items-center justify-content-center pt-3">

        <!-- Card 1 -->
        <div class="col-lg-4 col-md-6">
            <a style="text-decoration:none;" href="/services/mutual-fund">
            <div class="card feature-card-first">
                <div class="card-body">
                     <div class="feature-icon">
                    <i class="bi bi-layers-fill"></i>
                </div>

                <h4 class="feature-title">
                    Mutual Fund Investments
                </h4>

                <p class="feature-text">
                    Mutual funds are financial instruments which invest in a ...
                </p>

                </div>

               

            </div>
            </a>
        </div>

        <!-- Card 2 -->
        <div class="col-lg-4 col-md-6">
            <a style="text-decoration:none;" href="/services/sip">
            <div class="card feature-card-second">
                <div class="card-body">
                      <div class="feature-icon">
                    <i class="bi bi-layers-fill"></i>
                </div>

                <h4 class="feature-title">
                    Systematic Investment Plans
                </h4>

                <p class="feature-text">
                    An investor commits to invest a specific amount...
                </p>


                </div>
              
            </div>
        </a>
        </div>

        <!-- Card 3 -->
        <div class="col-lg-4 col-md-6">
            <a style="text-decoration:none;" href="/services/goal-based-financial-planning">
            <div class="card feature-card-third">
                <div class="card-body">
                       <div class="feature-icon">
                    <i class="bi bi-layers-fill"></i>
                </div>

                <h4 class="feature-title">
                    Goal-Based Financial Planning
                </h4>

                <p class="feature-text">
                   Goal-based planning is a financial planning approach...
                </p>

                </div>
             

            </div>
        </div>
    </a>
    </div>

      <div class="row  align-items-center justify-content-center pt-3">

       <!-- Card 3 -->
        <div class="col-lg-4 col-md-6">
            <a style="text-decoration:none;" href="/services/Portfolio-Review-and-Wealth-Management">
            <div class="card feature-card-third">
                <div class="card-body">
                      <div class="feature-icon">
                    <i class="bi bi-layers-fill"></i>
                </div>

                <h4 class="feature-title">
                    Portfolio Review & Wealth Management
                </h4>

                <p class="feature-text">
                    A successful investment journey requires more than...
                </p>

                </div>
              

            </div>
            </a>
        </div>

        <!-- Card 1 -->
        <div class="col-lg-4 col-md-6">
            <a style="text-decoration:none;" href="/services/tax-saving-investments">
            <div class="card feature-card-first">
                <div class="card-body">
                     <div class="feature-icon">
                    <i class="bi bi-layers-fill"></i>
                </div>

                <h4 class="feature-title">
                   Tax Saving Investments (ELSS)
                </h4>

                <p class="feature-text">
                    Planning For Tax Saving Investments Efficiently & Filing...

                </div>
               

            </div>
            </a>
        </div>

        <!-- Card 2 -->
        <div class="col-lg-4 col-md-6">
            <a style="text-decoration:none;" href="/services/Retirement-and-children-future-planing">
            <div class="card feature-card-second">
                <div class="card-body">
                      <div class="feature-icon">
                    <i class="bi bi-layers-fill"></i>
                </div>

                <h4 class="feature-title">
                    Retirement & Children’s Future Planning
                </h4>

                <p class="feature-text">
                    The plan and action of accumulating ...
                </p>

                </div>
              

            </div>
        </a>
        </div>

       

    </div>
      <div class="row  align-items-center justify-content-center pt-3">

      

        <!-- Card 2 -->
        <div class="col-lg-4 col-md-6">
            <a style="text-decoration:none;" href="/services/swp">
            <div class="card feature-card-second">
                <div class="card-body">
                    <div class="feature-icon">
                    <i class="bi bi-layers-fill"></i>
                </div>

                    <h4 class="feature-title">
                        Systematic Withdrawal Plans
                    </h4>

                    <p class="feature-text">
                        Smart investment solution for cash flow needs and wealth...
                    </p> 
                </div>
               

            </div>
        </a>
        </div>

        <!-- Card 3 -->
        <div class="col-lg-4 col-md-6">
            <a style="text-decoration:none;" href="/services/portfolio-tracking-and-investment-reporting">
            <div class="card feature-card-third">
                <div class="card-body">
                      <div class="feature-icon">
                    <i class="bi bi-layers-fill"></i>
                </div>

                <h4 class="feature-title">
                    Portfolio Tracking & Investment Reports
                </h4>

                <p class="feature-text">
                    Keeping track of your investments is essential for...
                </p>   
                </div>
               

            </div>
            </a>
        </div>
          <!-- Card 1 -->
        <div class="col-lg-4 col-md-6">
            <a style="text-decoration:none;" href="/services/investor-education-and-market-updates">
            <div class="card feature-card-first">
                <div class="card-body">
                    <div class="feature-icon">
                    <i class="bi bi-layers-fill"></i>
                </div>

                <h4 class="feature-title">
                    Investor Education & Market Updates
                </h4>

                <p class="feature-text">
                    Making informed investment decisions starts with the...
                </p>
                </div>
                

            </div>
            </a>
        </div>

    </div>


    <div class="row  align-items-center justify-content-center pt-3">
         <div class="col-lg-4 col-md-6">
            <a style="text-decoration:none;" href="/services/dedicated-customer-support">
            <div class="card feature-card-second">
                <div class="card-body">
                    <div class="feature-icon">
                    <i class="bi bi-layers-fill"></i>
                </div>

                <h4 class="feature-title">
                    Dedicated Customer Support
                </h4>

                <p class="feature-text">
                   Exceptional customer support is an essential part...
                </p>
                </div>
                

            </div>
            </a>
        </div>
   

    </div>

</div>
     </section>




    <?php include_once('src/views/layouts/footer.php') ?>

</body>



</html>