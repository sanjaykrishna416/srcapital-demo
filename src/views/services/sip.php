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
              
                        <div class="single-service">
                            
                            <h4 class="mb-2">What is SIP?</h4>
                            <p class="just-content">An investor commits to invest a specific amount for a continuous period at regular intervals, this ensures that he gets more units when prices are lower and fewer units when prices are high, this works on the principle of rupee cost averaging when invested at different levels and automatically participate in the swing of the market.</p>
                            <h4 class="pt-3">Advantages of Systematic Investment Plan:</h4>
                            <p class="just-content">Power of Compounding, To avail the benefit of power of compounding one has to start early and invest regularly, a delayed investment will lead to greater financial burden to meet the required goals, at early stage a less investment needed where as more investment is needed at a later stage to accumulate the same planned corpus.</p>
                           
                            <h4 class="pt-3">Rupee-Cost averaging:</h4>
                            <ol>
								<li>It means averaging the cost price of your investments.</li>
								<li>SIP helps in averaging the cost as equal amount is invested regularly every month at different NAVs. SIP works well in a volatile market as in the months where markets are down you get more number of units as the NAV is down and when the markets are up you get less number of units. But over all the prices gets averaged out.</li>
								<li>Let us see how: Say you make your first investment of Rs 1,000 at a NAV of Rs 10. In this case, the units acquired will be 100 (1,000/10). You make the next investment of Rs 1,000 at a NAV of Rs 12. Units acquired now will be 83.33333 (1,000/12). Now also suppose that you make the third investment of Rs 1,000 at a NAV of Rs 9 and the units acquired will be 111.1111 (1,000/9).</li>
								<li>The average purchase cost works out to Rs 10.19 (3,000/294.4444).</li>
							</ol>
                            <h4 class="pt-3">Convenience:</h4>
                            <p class="just-content">It is very easy to start an SIP, you need to plan your saving wisely and keep aside some amount of money every month for investing in funds, investment can be done either by post dated cheques or through ECS instructions in specific fund house scheme, its always better to start at an early age with small amount and increase the same from time to time. If you have not invested yet, start now without any delay, waiting for the right time to invest can lead to missed opportunity, a Systematic Investment Plan (SIP) is a smart way to achieve your various financial goals and ensures you with the required corpus which was initially planned for the specific requirement.</p>
                            <ol>
								<li>One can take the benefit of SIP only, when you choose the right schemes and be faithful and continue to stick to it, without any deviations.</li>
								<li>SIP investment in well diversified and good performing scheme that can provide financial solutions to your long term goals like child education, marriage and your retirement.</li>
								<li>An investment of Rs.2000 every month for the next 15 years at 15% return per annum can fetch you Rs.12,32,731 at the end of 15th year (solution for your child education).</li>
								<li>An investment of Rs.3768 every month in the next 20 years @ 15% return per annum can fetch Rs.50 lakhs at the end of 20th year. This could be the solution for your retirement.</li>
							</ol> 
                          
             </div>
            </div>
        </div>
       
       
    </div>

    <!-- -------life-insurance service ------ -->



   <?php //require_once('src/views/layouts/callus.php'); ?>
    <?php include_once('src/views/layouts/footer.php') ?>

</body>



</html>