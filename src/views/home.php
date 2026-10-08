<?php include_once('src/services/APIService.php');
$blogList = APIService::getLimitedBlogs(3);
$newsList = APIService::getLimitedNews(5);


?>

<!DOCTYPE html>
<html lang="reactjs">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?= $title ?></title>
    <link href="<?= $favIcon ?>" rel="shortcut icon" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <style>


    </style>
</head>

<body>
    <?php include_once('src/components/preLoader.php') ?>

    <!-- --- main carusal--- -->

    <?php include_once('src/views/layouts/navbar.php') ?>




    <section class="py-5">

    <div class="container" >
        <div class="row align-items-center justify-content-center" >
            <div class="col-lg-10 text-center">
                <h1  class=" fw-bold display-5 section-title  " >
				      There are as many types of mutual funds as each of
				      <span class="sliding-text-container">
				        <span class="sliding-text-inner">
				          <span class="text-blue">your financial goals.</span>
				          <span class="text-blue" style="margin-right:110px;">your dream.&nbsp;&nbsp;&nbsp;&nbsp;</span>
				          <span class="text-blue">your future plans.</span>
				        </span>
				      </span>
				    </h1>
				    <p class="side-title">
				      Your individual financial goals can be achieved by the appropriate mutual fund investment. We help you choose the best mutual funds that will help you reach your goals.
				    </p>
                  <div class="showcase">
            <div class="bottom-box"></div>
            <div class="preview-card">
                <div id="carouselId" class="carousel slide pointer-event" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-label="First slide" aria-current="true"></li>
                        <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide" class=""></li>
                        <li data-bs-target="#carouselId" data-bs-slide-to="2" aria-label="Third slide" class=""></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img src="../assets/images/child-hero-edu.jpg" class="img-fluid" alt="First slide">
                            <div class="carousel-caption">
                                <div class="carousel-content">
                                    <h2 class="display-3 animated fadeInDown text-white">⁠We help you Grow  <br> Your Wealth.</h2>
                                    <p>Mutual Funds have Investment Solution from 1 day to many years.</br> We suggest you schemes based on your Investment Needs and Goals.</p>
                                    <a href="/services/mutual-fund" class="me-2"><button type="button" class="px-4 px-sm-3 btn  carousel-content-btn1 animated fadeInDown mb-2">Read More</button></a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="../assets/images/about/financial-hero.jpeg" class="img-fluid" alt="Second slide">
                            <div class="carousel-caption ">
                                <div class=" carousel-content">
                                    <h2 class="display-3 mb-4 animated fadeInDown text-white">Secure Your Future with Trusted <br> Financial Planning</h2>
                                    <p>We simplify investing so you can build a stable portfolio and  secure long-term </br> financial freedom  for your loved ones.</p>
                                    <a href="/contact" class="me-2"><button type="button" class="px-4 px-sm-3 btn  carousel-content-btn1 animated fadeInDown mb-2">Read More</button></a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="../assets/images/about/herofinancial-planing.jpeg" class="img-fluid" alt="Third slide">
                            <div class="carousel-caption">
                                <div class=" carousel-content">
                                    <h2 class="display-3 animated fadeInDown text-white">Starting your Investment Plan is <br> core to Reaching your Goals</h2>
                                    <p>We help you plan your existing and new investments in such a way that you are <br> able to reach  your Financial Goals.</p>
                                    <a href="/faq/financial-planning" class="me-2"><button type="button" class="px-4 px-sm-3 btn  carousel-content-btn1 animated fadeInDown mb-2">Read More</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>    
            </div>
           
        </div>
    </div>

    </section>



    <!-- ------- about us------ -->
    <section class="mt-0 mb-5 about-section" data-aos="fade-down" data-aos-delay="100">
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
                   <p>SR Capital Service is a trusted financial supermarket dedicated to helping individuals and families build, manage, and protect their wealth.....</p>
                    <!-- <p>With 20+ years of experience in the financial services industry, we have been helping individuals and families make informed investment decisions and build long-term wealth through disciplined financial planning.</p> -->
                    <a class="btn-primary" href="/about" >Read More</a>
                </div>
                
              
               
                </div>
            </div>
            </div>
        </div>
    </section>



    <section class="services-section py-5">
  <div class="container">

    <!-- Heading -->
    <div class="text-center mb-5">
      <div class="d-flex align-items-center justify-content-center gap-2 mb-2">
        <i class="bi bi-graph-up-arrow"></i>
        <span class="text-uppercase small fw-semibold text-muted" style="letter-spacing:1px;">Our Services</span>
      </div>
      <h2 class="fw-bold display-6 mx-auto" style="max-width:650px;">
        Your Goals are Our Priority
      </h2>
    </div>

    <!-- Cards -->
    <div class="row g-4">

      <!-- Card 1 -->
      <div class="col-md-6 col-lg-4">
        <div class="card service-card h-100 border-0 shadow-sm p-3">
          <div class="position-relative mb-3">
            <div class="service-img-wrap">
              <img src="../assets/images/services/home-services/mutualfundimg.jpeg" class="img-fluid rounded-3 service-img" alt="Venture Deal Structuring">
            </div>
            
          </div>
          <div class="card-body p-0">
            <h5 class="fw-bold mb-2">Mutual Fund</h5>
            <p class="text-muted small mb-3">
             Mutual funds are financial instruments which invest in a portfolio of securities. These securities...
            </p>
            <a href="/services/mutual-fund" class="fw-semibold text-dark text-decoration-none read-more-link">
              Read More <i class="bi bi-arrow-up-right"></i>
            </a>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-md-6 col-lg-4">
        <div class="card service-card h-100 border-0 shadow-sm p-3">
          <div class="position-relative mb-3">
            <div class="service-img-wrap">
              <img src="../assets/images/services/insurance.jpg" class="img-fluid rounded-3 service-img" alt="VC Investment Strategy">
            </div>
           
          </div>
          <div class="card-body p-0">
            <h5 class="fw-bold mb-2">Life Insurance</h5>
            <p class="text-muted small mb-3">
              Life insurance is financial product that provides the policy holder financial protection in the event..
            </p>
            <a href="/services/life-insurance" class="fw-semibold text-dark text-decoration-none read-more-link">
              Read More <i class="bi bi-arrow-up-right"></i>
            </a>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-md-6 col-lg-4">
        <div class="card service-card h-100 border-0 shadow-sm p-3">
          <div class="position-relative mb-3">
            <div class="service-img-wrap">
              <img src="../assets/images/services/investment.jpg" class="img-fluid rounded-3 service-img" alt="Preparation and Launch">
            </div>
            
          </div>
          <div class="card-body p-0">
            <h5 class="fw-bold mb-2">Investment Services</h5>
            <p class="text-muted small mb-3">
              The full investment services we offer is specifically designed to meet your Investment needs..
            </p>
            <a href="/services/investment-Services" class="fw-semibold text-dark text-decoration-none read-more-link">
              Read More <i class="bi bi-arrow-up-right"></i>
            </a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


<section class="stats-section py-5">

    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-4">
               <h1 class="fw-bold hero-title display-5" >
                         
                      Our  <span class="secondary-highlight-text"> Achievements </span> 
                    </h1>
                  <p>Celebrating the milestones, experiences, and success stories that shape our journey and inspire us to keep moving forward.</p>  
            </div>
            <div class="col-lg-6">
                  <div class="stats-wrapper">

            <!-- First Circle -->
            <div class="stat-circle">

                <div class="stat-number">
                    500+
                </div>

                <div class="stat-title">
                    Happy Client<br>
                    Relationships
                </div>

            </div>

            <!-- Second Circle -->
            <div class="stat-circle">

                <div class="stat-number">
                    500+
                </div>

                <div class="stat-title">
                    Happy Families<br>
                    Experiences
                </div>

            </div>

        </div>   
            </div>
        </div>
       

    </div>

</section>




    

    <!-- download app -->
    <section class="py-5" data-aos="fade-down" data-aos-delay="100">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class=" col-lg-6 col-md-6 text-center mb-3">
                    <img class="img-fluid" src="../assets/images/about/mobile-app.png"  >
                </div>
                <div class="col-lg-6 col-md-6 ">
                    <h1 class="hero-title">Download<span class="secondary-highlight-text"> Our Apps</span></h1>
                    <p class="mb-6 lh-base text-desgin mb-50">The financial world is evolving rapidly with technology
                        bringing services to your fingertips. Introducing the SR Capital  - your gateway to smarter
                        investing and staying ahead of the curve.</p>
                    <div class="row  py-2" id="mobileappimg">
                        <!-- Google Play -->
                        <div class="col-lg-4 col-md-6 col-sm-6 mt-md-0 mt-3">
                            <a target="_blank" href="https://play.google.com/store/apps/details?id=com.srcapital.newapp"
                                class="text-decoration-none text-dark" target="_blank">
                                <img src="../assets/images/about/playstore.png" alt="Google Play" class="img-fluid mb-2"
                                    >
                             
                            </a>
                        </div>

                        <!-- App Store -->
                        <!-- <div class="col-lg-4 col-md-6 col-sm-6  mt-md-0 mt-3 mb-3 mb-md-0">
                            <a target="_blank" href="https://apps.apple.com/sg/app/themfbox/id1594370380"
                                class="text-decoration-none text-dark" target="_blank">
                                <img src="../assets/images/about/ios-gold.png" alt="App Store" class="img-fluid mb-2"
                                    >
                               
                            </a>
                        </div> -->
                    </div>

                </div>

            </div>
        </div>
    </section>


  <!-- -------calculator chart section------ -->
    <!-- ------ calculation -- -->

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <h2 class="fw-bold  mb-2 hero-title">SIP <span class="secondary-highlight-text">Calculator</span>
                    </h2>
                    <p class="text-design mb-4 ">Plan your investments and see how your money can grow over time with
                        our SIP calculator.</p>

                    <div class="mb-4 mt-5">
                        <label for="sipamount" class="form-label">Monthly Investment Amount (₹)</label>
                        <div class="position-relative">
                            <input type="text" class="form-control" id="sipamount" maxlength="6" value="25000">
                            <div class="input-icon position-absolute top-50 end-0 translate-middle-y pe-3">
                                <i class="fas fa-rupee-sign"></i>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="sipmonth" class="form-label">Investment Period (Years)</label>
                        <div class="position-relative">
                            <select class="form-select" id="sipmonth">
                                <option value="36">3</option>
                                <option value="60">5</option>
                                <option value="120">10</option>
                                <option value="180">15</option>
                                <option value="240" selected>20</option>
                                <option value="360">30</option>
                                <option value="600">50</option>
                            </select>
                            <div class="input-icon position-absolute top-50 end-0 translate-middle-y pe-3">
                                <i class="fas fa-calendar-alt"></i>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="sipinterest" class="form-label">Expected Annual Return (%)</label>
                        <div class="position-relative">
                            <select class="form-select" id="sipinterest">
                                <option value="8">8</option>
                                <option value="12" selected>12</option>
                                <option value="15">15</option>
                                <option value="18">18</option>
                            </select>
                            <div class="input-icon position-absolute top-50 end-0 translate-middle-y pe-3">
                                <i class="fas fa-percentage"></i>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6 col-md-12 col-sm-12 mt-4">
                    <div class="results-card text-center ">
                        <h3> <span class="primary-highlight-text mb-5">Your Investment Growth</span></h3>
                        <div id="chart"></div>
                        <div class="row pt-3">
                            <div class="col-md-4 col-sm-12 mb-3">
                                <div class="stat-card">
                                    <div class="stat-title"> Amount</div>
                                    ₹ <span class="stat-value" id="invested-amount">₹ 0</span>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12 mb-3">
                                <div class="stat-card">
                                    <div class="stat-title">Period</div>
                                    <span class="stat-value" id="investment-period">0</span><span class="stat-unit">
                                        Years</span>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12 mb-3">
                                <div class="stat-card">
                                    <div class="stat-title">Amount</div>
                                    ₹ <span class="stat-value" id="maturity-amount">₹ 0</span>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ------ calculation -- -->
    <!-- ---- calculator chart section---- -->



   <section class="py-5 bg-light">
        <div class="container py-5">
            <div class="text-center">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="fw-bold hero-title secondary-highlight-text">Testimonials</h2>
                    </div>
                </div>
            </div>
              

             <div class="row mt-4">
                <div class="col-md-12 ">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="item">
                            <div class="testimonial-card">
                             
                                          <img style="width:100px" class="mb-3 img-fluid" src="../assets/images/testimonial/tansilk.jpeg"  >
                                        <h6 class="user-name">TAN SILK </h6>
                                        <small class="user-role">Retired administrative officer </small>
                                    
                                     
                                <hr> 
                                <p class="testimonial-text">
                                    "I have been investing with SR Capital Mutual Fund Services since I started working, and I’m truly grateful to have discovered their services early in my investment journey. Their thorough assessment before investing helped me understand my risk appetite and the importance of staying ahead of inflation to achieve meaningful, real growth in my investments."  
                                </p>


                                <!-- <button class="btn btn-sm btn-primary mt-auto" data-user="Jhon David"
                                    data-role="Jhon David" data-full="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since 1966, when designers at Letraset and James Mosley, the librarian at St Bride Printing Library in London, took a 1914 Cicero translation and scrambled it to make dummy text for Letraset's Body Type sheets."  

                                    data-bs-toggle="modal"
                                    data-bs-target="#testimonialModal">
                                    Read More
                                </button> -->

                            </div>
                        </div> 
                      <div class="item">
                            <div class="testimonial-card">
                             
                                          <img style="width:100px" class="mb-3 img-fluid" src="/assets/images/testimonial/user.jpg"  >
                                        <h6 class="user-name">Jhon David </h6>
                                        <small class="user-role">USA</small>
                                    
                                     
                                <hr> 
                                <p class="testimonial-text">
                                    "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since 1966, when designers at Letraset and James Mosley, the librarian at St Bride Printing Library in London, took a 1914 Cicero translation and scrambled it to make dummy text for Letraset's Body Type sheets."  
                                </p>

<!-- 
                                <button class="btn btn-sm btn-primary mt-auto" data-user="Jhon David"
                                    data-role="Jhon David" data-full="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since 1966, when designers at Letraset and James Mosley, the librarian at St Bride Printing Library in London, took a 1914 Cicero translation and scrambled it to make dummy text for Letraset's Body Type sheets."  

                                    data-bs-toggle="modal"
                                    data-bs-target="#testimonialModal">
                                    Read More
                                </button> -->

                            </div>
                        </div> 
                       <div class="item">
                            <div class="testimonial-card">
                             
                                          <img style="width:100px" class="mb-3 img-fluid" src="/assets/images/testimonial/user.jpg"  >
                                        <h6 class="user-name">Jhon David </h6>
                                        <small class="user-role">USA</small>
                                    
                                     
                                <hr> 
                                <p class="testimonial-text">
                                    "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since 1966, when designers at Letraset and James Mosley, the librarian at St Bride Printing Library in London, took a 1914 Cicero translation and scrambled it to make dummy text for Letraset's Body Type sheets."  
                                </p>

<!-- 
                                <button class="btn btn-sm btn-primary mt-auto" data-user="Jhon David"
                                    data-role="Jhon David" data-full="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since 1966, when designers at Letraset and James Mosley, the librarian at St Bride Printing Library in London, took a 1914 Cicero translation and scrambled it to make dummy text for Letraset's Body Type sheets."  

                                    data-bs-toggle="modal"
                                    data-bs-target="#testimonialModal">
                                    Read More
                                </button> -->

                            </div>
                        </div> 

                    <div class="item">
                            <div class="testimonial-card">
                             
                                          <img style="width:100px" class="mb-3 img-fluid" src="/assets/images/testimonial/user.jpg"  >
                                        <h6 class="user-name">Jhon David </h6>
                                        <small class="user-role">USA</small>
                                    
                                     
                                <hr> 
                                <p class="testimonial-text">
                                    "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since 1966, when designers at Letraset and James Mosley, the librarian at St Bride Printing Library in London, took a 1914 Cicero translation and scrambled it to make dummy text for Letraset's Body Type sheets."  
                                </p>

<!-- 
                                <button class="btn btn-sm btn-primary mt-auto" data-user="Jhon David"
                                    data-role="Jhon David" data-full="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since 1966, when designers at Letraset and James Mosley, the librarian at St Bride Printing Library in London, took a 1914 Cicero translation and scrambled it to make dummy text for Letraset's Body Type sheets."  

                                    data-bs-toggle="modal"
                                    data-bs-target="#testimonialModal">
                                    Read More
                                </button> -->

                            </div>
                        </div> 
                        



                    </div>
                </div>
            </div> 
        </div>
    </section> 

    <!-- ------- about us------ -->

     <section class="expert pb-5" data-aos="fade-down" data-aos-delay="100">
    <div class="container ">
        <div class=" text-center">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="fw-bold hero-title py-3">Latest <span class="secondary-highlight-text">Blogs</span></h1>
                </div>
            </div>
        </div>
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

    </div>
</section> 
<!-- --- blog section----- -->




    


   


    <!-- ----partner---------- -->
    <!-- <div class="row text-center mb-5 mt-5">
        <div class="text-center">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="fw-bold">Our <span class="secondary-highlight-text">Partners</span></h2>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="slide_vertical_wrap " style="height:400px;">
                <div class="infiniteslide_wrap">
                    <div class="infiniteslide_wrap" style="overflow: hidden;height: 300px;">
                        <ul class="slide_vertical mb-10" data-style="infiniteslide16775885016091e8c"
                            style="display: flex; flex-flow: column nowrap; align-items: center; animation: 36.0683s linear 0s infinite normal none running infiniteslide16775885016091e8c;">
                            <picture style="flex: 0 0 auto; display: block;">
                                <img src="assets/images/client_logos_new.png" class="img-fluid" alt="a cute kitten">
                            </picture>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- ----partner---------- -->


    <!-- ----Call to action---------- -->

    <!-- <section>

        <div class="container">
            <div class="col-md-12 mx-auto mt-5">
                <div class="card border-0 mb-4 top-bar"
                    style="background: linear-gradient(135deg, #2c3e50 0%,rgb(35, 64, 127) 100%);">
                    <div class="card-body p-4">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h5 class="text-white mb-0">For more details, contact our team</h5>
                            </div>
                            <div class="col-md-4 text-end">
                                <a href="http://wa.me/917845777483"
                                    class="btn btn-primary  px-4 py-2 rounded-pill fw-bold" target="_blank">
                                    Contact Us
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- ----Call to action---------- -->


    <div class="modal fade" id="testimonialModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="testimonialUser"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body" id="testimonialContent"></div>
                <div class="modal-footer">
                    <small class="text-muted" id="testimonialRole"></small>
                </div>
            </div>
        </div>
    </div>



    <?php include_once('src/views/layouts/footer.php') ?>
    <script src="assets/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>

        document.addEventListener('DOMContentLoaded', function () {
            const testimonialModal = document.getElementById('testimonialModal');
            testimonialModal.addEventListener('show.bs.modal', function (event) {
                let button = event.relatedTarget;
                let user = button.getAttribute('data-user');
                let role = button.getAttribute('data-role');
                let fullText = button.getAttribute('data-full');

                testimonialModal.querySelector('#testimonialUser').textContent = user;
                testimonialModal.querySelector('#testimonialRole').textContent = role;
                testimonialModal.querySelector('#testimonialContent').textContent = fullText;
            });
        });

        $(document).ready(function () {



            $(".blog-carousel").owlCarousel({
                loop: true,
                margin: 15,
                nav: true,
                dots: true,
                autoplay: true,
                autoplayTimeout: 3000,
                smartSpeed: 800,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {  /* Adjusted breakpoint for better tablet view */
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            });
        });

        $(".testimonial-carousel").owlCarousel({
            loop: true,
            margin: 15,
            nav: true,
            dots: true,
            autoplay: true,
            autoplayTimeout: 5000,
            smartSpeed: 600,
            responsive: {
                0: {
                    items: 1
                },

                1000: {
                    items: 2
                }
            }
        });

        $(".news-carousel").owlCarousel({
            loop: true,
            margin: 15,
            nav: true,
            dots: true,
            autoplay: true,
            autoplayTimeout: 3000,
            smartSpeed: 800,
            responsive: {
                0: {
                    items: 1
                },
                600: {  /* Adjusted breakpoint for better tablet view */
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        });

    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var myCarousel = new bootstrap.Carousel(document.querySelector("#carouselId"), {
                interval: 5000, // Auto slide every 5 seconds (5000ms)
                ride: "carousel",
                pause: "hover", // Pause on hover
                wrap: true // Infinite loop
            });
        });

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




        document.addEventListener("DOMContentLoaded", function () {
            // Get input elements
            const sipAmountInput = document.getElementById("sipamount");
            const sipMonthInput = document.getElementById("sipmonth");
            const sipInterestInput = document.getElementById("sipinterest");

            // Function to fetch and update SIP data
            function fetchSIPData() {
                const sipAmount = parseInt(sipAmountInput.value.replace(/,/g, '')) || 25000;
                const sipPeriod = parseInt(sipMonthInput.value) || 240; // Months
                const sipInterest = parseInt(sipInterestInput.value) || 12;

                const requestData = {
                    sip_amount: sipAmount,
                    months: sipPeriod,
                    rate_of_return: sipInterest
                };

                fetch("/api/getSIPCal", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json"
                    },
                    body: JSON.stringify(requestData)
                })
                    .then(response => response.json())
                    .then(data => {
                        // Extract data from API response
                        const investedAmount = data.invested_amount;
                        const maturityAmount = data.maturity_amount;
                        const periodYears = data.period / 12; // Convert months to years

                        // Update UI values
                        document.getElementById("invested-amount").textContent = investedAmount
                            .toLocaleString();
                        document.getElementById("investment-period").textContent = periodYears;
                        document.getElementById("maturity-amount").textContent = maturityAmount
                            .toLocaleString();

                        // Prepare data for the chart
                        const years = [];
                        const investedData = [];
                        const maturityData = [];

                        for (let i = 1; i <= periodYears; i++) {
                            years.push(2024 + i); // Start from 2024
                            investedData.push(investedAmount * (i /
                                periodYears)); // Simulated incremental growth
                            maturityData.push(maturityAmount * (i / periodYears));
                        }

                        // Update the chart dynamically
                        renderSIPChart(investedAmount, maturityAmount);
                    })
                    .catch(error => console.error("Error fetching SIP data:", error));
            }

            // Function to render chart
            function renderSIPChart(investedAmount, maturityAmount) {
                const options = {
                    chart: {
                        type: 'pie',
                        height: 250,
                        toolbar: {
                            show: false
                        }
                    },
                    series: [investedAmount, maturityAmount],
                    labels: ['SIP Investment', 'Total SIP Value'],
                    colors: ['#FF9A00', '#71BA3D'],
                    legend: {
                        position: 'top',
                        horizontalAlign: 'center',
                    },
                    tooltip: {
                        y: {
                            formatter: value => "Rs. " + value.toLocaleString()
                        }
                    },
                };

                document.getElementById("chart").innerHTML = "";
                var chart = new ApexCharts(document.getElementById("chart"), options);
                chart.render();
            }



            // Attach event listeners for real-time updates
            sipAmountInput.addEventListener("input", fetchSIPData);
            sipMonthInput.addEventListener("change", fetchSIPData);
            sipInterestInput.addEventListener("change", fetchSIPData);

            // Initial Fetch on Page Load
            fetchSIPData();
        });
    </script>


</body>



</html>