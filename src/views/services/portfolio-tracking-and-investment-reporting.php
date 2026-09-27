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
                            
                            
                            <p class="just-content">Keeping track of your investments is essential for making informed financial decisions and achieving your long-term goals. Our Portfolio Tracking & Investment Reports service provides a clear and comprehensive view of your investments, helping you monitor performance, evaluate portfolio health, and stay aligned with your financial objectives.</p>
                            <h4 class="pt-3">Track Your Investments in One Place</h4>
                            <p class="just-content">Managing multiple investments across mutual funds, equities, bonds, and other financial instruments can be challenging. Our portfolio tracking solution consolidates your investments into a single dashboard, giving you a complete overview of your holdings, current value, gains or losses, and overall portfolio performance.</p>
                            <h4 class="pt-3">Comprehensive Investment Reports</h4>
                            <p class="just-content">Receive detailed and easy-to-understand investment reports that provide insights into your portfolio's performance over different time periods. Our reports include investment summaries, asset allocation, returns analysis, sector exposure, and transaction history, enabling you to make better investment decisions.</p>
                            <h4 class="pt-3">Performance Monitoring</h4>
                            <p class="just-content">Regular performance monitoring helps you understand how your investments are performing against benchmarks and financial goals. We analyze portfolio returns, identify underperforming investments, and highlight opportunities to improve your investment strategy.</p>
                            <h4 class="pt-3">Asset Allocation Analysis</h4>
                            <p class="just-content">A well-diversified portfolio is key to managing investment risk. Our reports provide a detailed breakdown of your asset allocation across equity, debt, hybrid funds, gold, and other asset classes, helping you maintain the right balance based on your risk profile.</p>
                            <h4 class="pt-3">Gain/Loss & Capital Appreciation Reports</h4>
                            <p class="just-content">Monitor your realized and unrealized gains, track capital appreciation, and understand how your investments have grown over time. Detailed gain/loss reports provide greater transparency and help with financial planning.</p>
                            <h4 class="pt-3">Goal-Based Investment Tracking</h4>
                             <p class="just-content">Track the progress of your financial goals such as retirement planning, children's education, home purchase, or wealth creation. Our reporting helps you evaluate whether your current investments are on track to achieve your desired outcomes.</p>
                              <h4 class="pt-3">Tax & Transaction Reports</h4>  
                              <p class="just-content"><p class="just-content">Track the progress of your financial goals such as retirement planning, children's education, home purchase, or wealth creation. Our reporting helps you evaluate whether your current investments are on track to achieve your desired outcomes.</p></p>


                            
             </div>
            </div>
        </div>
       
       
    </div>

    <!-- -------life-insurance service ------ -->



   <?php //require_once('src/views/layouts/callus.php'); ?>
    <?php include_once('src/views/layouts/footer.php') ?>

</body>



</html>