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


    <!-- -------policy------ -->
    <section class="bg-light" id="mfResearch">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="card mt-4 mb-4">
                        <div class="card-body p-4 p-lg-5">
                          	<div class="col-md-12">
                                <p>Konda Finserv Private Limited maintains a simple, time-bound process for resolving investor complaints. Every complaint is recorded in our Complaints Register with a unique reference number.</p>
                                <h4 class="text-danger">COMPLAINT FORM DOWNLOAD - <a href="/assets/images/Investor_Complaint_Form.pdf">CLICK HERE</a></h4>

                                <h5>How to complain</h5>
                                <p>Write to Mr. Ravinder Konda at kondafinserv@gmail.com, call +91-9391000958, or visit our office at Flat 204, 1-1-508/1/B, Sri Balaji Indraprastha Apts, Gandhi Nagar, Bakaram, Hyderabad-500080, Telangana. You may also use the Investor Complaint Form on this website.</p>
                                
                                <h5>Timelines</h5>
                                <ul>
                                    <li>Acknowledgement with reference number: within 3 working days.</li>
                                    <li>Resolution with explanation and corrective action: within 15 working days.</li>
                                    <li>Records of complaints are preserved as per SEBI/AMFI norms.</li>
                                </ul>

                                <h5>Escalation levels</h5>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Level</th>
                                                <th>Escalate To</th>
                                                <th>When</th>
                                                <th>Contact / Portal</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>L1</td>
                                                <td>Konda Finserv Private Limited</td>
                                                <td>First point of contact. Ack 3 working days; resolve 15 working days.</td>
                                                <td>Mr. Ravinder Konda │ kondafinserv@gmail.com │ +91-9391000958</td>
                                            </tr>
                                            <tr>
                                                <td>L2</td>
                                                <td>Concerned AMC / RTA</td>
                                                <td>If not resolved at L1 within 15 working days.</td>
                                                <td>AMC Investor Relations — details on the AMC website</td>
                                            </tr>
                                            <tr>
                                                <td>L3</td>
                                                <td>SEBI SCORES</td>
                                                <td>If not resolved at L2.</td>
                                                <td>https://scores.sebi.gov.in/</td>
                                            </tr>
                                            <tr>
                                                <td>L4</td>
                                                <td>SMART ODR</td>
                                                <td>If unresolved after SCORES, or for online conciliation / arbitration.</td>
                                                <td>https://smartodr.in/</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <p>For PMS-related grievances, investors may also approach the concerned SEBI-registered Portfolio Manager, and thereafter SCORES / SMART ODR.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- -------policy------ -->




    <?php include_once('src/views/layouts/footer.php') ?>

</body>



</html>