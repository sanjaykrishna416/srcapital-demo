<!DOCTYPE html>
<html lang="reactjs">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="<?= $favIcon ?>" rel="shortcut icon" type="image/png">

    <title><?= $title ?></title>
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
           
            <div class="col-md-12">
                 
                    
                    <h4 class="fw-600">Motor Insurance</h4>
                    <p class="text_justify">Motor insurance is a mandatory requirement if have a car, motorcycle or
                        scooter. You will have to pay a fine and have your vehicle registration certificate (RC) or
                        driving license (DL) confiscated by the police, if you are driving without a valid motor
                        insurance or a motor insurance policy that has expired.</p>
                    <p class="text_justify">There are two types of motor insurance - third party insurance and
                        comprehensive insurance. Third party insurance is mandatory for all vehicle owners in India.
                        Third-party insurance will cover your liability towards damages incurred by the third party in
                        case an accident happens with your vehicle. It won't cover damages to your vehicle.
                        Comprehensive motor insurance provides your vehicle complete end-to-end protection against
                        damage caused by accidents or natural disasters like floods etc.</p>
                    <p class="text_justify">Motor insurance premium depends on the price of the car (in case of a brand
                        new car) or the Insurance Declared Value (IDV) of a car that has completed more than 1 year.
                        Motor insurance is usually valid for a year; you must renew or get a new motor insurance policy
                        before expiry of your current motor insurance. Some motor insurance policies can cover you for
                        multiple years.</p>

                    <p class="text_justify"><i class="fa fa-check-circle mr-10" aria-hidden="true"></i><b> Travel
                            insurance: </b>Travel insurance provides financial protection against possible losses that
                        you may suffer when you are travelling by air, especially in overseas travel. It covers you
                        against financial losses due to loss of baggage, trip cancellation, and flight delays. Some
                        travel insurances also cover medical expenses that you may have to incur while travelling.</p>

                    <p class="text_justify"><i class="fa fa-check-circle mr-10" aria-hidden="true"></i><b> Home
                            insurance: </b>As the name suggests, home insurance provides financial protection against
                        damages caused to your home and its contents (furniture, home appliances etc) due to man-made
                        (e.g. fire) or natural disasters (e.g. flood, earthquake etc).</p>


                    
                
            </div>
        </div>

              </div>
    <!-- -------life-insurance service ------ -->



    
    <?php include_once('src/views/layouts/footer.php') ?>

</body>



</html>