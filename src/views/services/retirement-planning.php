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
    <div class="container py-5">
        <div class="row ">
            <h4 class="">Retirement Planning</h4>
            <p class="text-desgin">The plan and action of accumulating a certain corpus by the time you
                are of retirement age is known as retirement planning. It is a plan for living the
                choice of life you have dreamt for your silver years. This essentially means that you
                need to plan for a steady source of income for yourself at the time that you retire from
                your active career.</p>
            <h5 class="">Why should you plan for retirement?</h5>
            <p class="text-desgin">Planning for retirement is a very important financial decision you
                should make if you want to live a stress free independent life when your steady income
                from your job or work stops.</p>
            <p class="text-desgin">Your expenses that you incur today will not be the same when you
                retire, as with inflation, cost of living and all other expenses will only grow.
                Therefore your plan has to not only save for your retirement but also to invest in such
                a way that the future cost of living can be taken care of. For this, you need to start
                planning for your retirement as soon as possible, even if you find the retirement to be
                a remote happening.</p>
            <h5 class="">Steps of retirement planning</h5>
            <p class="text-desgin">The first step to plan your retirement is to decide what kind of life
                you see for yourself in your retirement. Do you want to live a quiet life in the
                countryside growing your own vegetables, or would you want to live in a community with
                like minded people. Would you like to spend time reading books, or travelling the world?
                The type of life you want to live will decide how much money you would need to save up
                for those days.</p>
            <p class="text-desgin">The next step is to take stock of your assets. Your value of your
                existing assets will make up some of your retirement corpus. The rest of the corpus
                needs to be built over the time you have left till your retirement.</p>
            <p class="text-desgin">A very important consideration while planning for your retirement is
                to take a look at how much time you still have till the time your retirement sets in. As
                a rule of thumb, the longer you have for your investment till your retirement, the
                larger the corpus you can build, helping you to come closer to your dream life. The
                investments you plan will have to be done with respect to the time left as well as your
                risk appetite.</p>
            <p class="text-desgin">The next step is to plan the investment avenues that can help you
                reach your goals. You can take your pick from a variety of options like, ETFs, NPS or
                mutual funds that may offer you the growth of equity or the assurance of debt. You may
                also consider investing in some good stocks for added returns.</p>
        </div>
    </div>
    <!-- -------life-insurance service ------ -->


    <?php require_once('src/views/layouts/callus.php'); ?>

    <?php include_once('src/views/layouts/footer.php') ?>

</body>



</html>