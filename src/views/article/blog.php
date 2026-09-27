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


    <!-- -------blog section------ -->
    <section>
        <div class="container-fluid blog py-5 ">
            <div class="container">
               <div class="row" id="blogcard">
								<div class="col-md-4">
											<a href="/10-common-mistakes-people-make-when-buying-insurance">
						                  	<div class="card">
												<div class="card-body">
													<img class="img-fluid mb-3" src="../assets/images/blog/life-vs-general.png">
													<h5 class="mt-2">10 Common Mistakes People Make When Buying...</h5>
												</div>
												
											</div>
											</a>
						            </div>
							   <div class="col-md-4">
								<a href="/How-to-Build-a-1-Crore-Portfolio-from-Zero">
			                  	<div class="card">
									<div class="card-body">
										<img class="img-fluid mb-2" src="../assets/images/blog/amount.png">
										<h5 class="mt-2">How to Build a 1 Crore Portfolio from Zero ...</h5>
									</div>
									
								</div>
								</a>
			            </div>
						<div class="col-md-4">
							<a href="/Why-Large-Cap-Funds-Should-Be-Part-of-Your-Core-Portfolio">
			              	<div class="card">
								<div class="card-body">
									<img class="img-fluid mb-20" src="../assets/images/blog/how-to-choose-a-financial-advisor.jpeg">
									<h5 class="mt-2"> Why Large Cap Funds Should Be Part of Your Core Portfolio ...</h5>
								</div>
								
							</div>
							</a>
			        	</div>
						
			            
			          </div>
					<div class="row pt-30" id="blogcard">
						<div class="col-md-4">
							<a href="/SIP-vs-Lumpsum-Which-Investment-Strategy-Is-Right-for-You">
								<div class="card">
									<div class="card-body">
										<img class="img-fluid mb-2" src="../assets/images/blog/large-cap.png">
										<h5 class="mt-2">SIP vs Lumpsum : Which Investment Strategy Is Right...</h5>
									</div>
					
								</div>
							</a>
						</div>
						<div class="col-md-4">
							<a href="/Planting-Dreams-Early">
								<div class="card">
									<div class="card-body">
										<img class="img-fluid mb-4" src="../assets/images/blog/children-image.png">
										<h4 class="mt-2">Planting Dreams Early ...</h4>
									</div>
					
								</div>
							</a>
						</div>
						<div class="col-md-4">
							<a href="/Succession-Planning-for-Family-Businesses-in-India">
								<div class="card">
									<div class="card-body">
										<img class="img-fluid mb-2" src="../assets/images/blog/planning-family.png">
										<h4 class="mt-2">Succession Planning for Family Businesses in  ...</h4>
									</div>
					
								</div>
							</a>
						</div>
					
					
					</div>
					 <!-- Pagination Container -->
                <div id="pagination" class="mt-4"></div>
            </div>
        </div>
    </section>
    <!-- ---- blog section---- -->




    <?php include_once('src/views/layouts/footer.php') ?>
    <script src="assets/js/script.js"></script>

   

</body>



</html>