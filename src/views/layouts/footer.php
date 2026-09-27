<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

<!-- <a href="https://wa.me/919758546200?text=Hi%20can%20I%20get%20more%20information" class="whatsapp-btn" target="_blank"
  aria-label="Chat on WhatsApp">
  <img src="/assets/images/whatsapp.png" alt="WhatsApp" />
</a> -->

<footer id="footer" class="footer" data-bg-img="/assets/images/footer-bg.png"
  style="background-image: url(/assets/images/footer-bg.png ); background-position: initial !important; background-size: initial !important; background-repeat: initial !important; background-attachment: initial !important; background-origin: initial !important; background-clip: initial !important; background-color: #080808 !important;">
  <div class="container p-4">
    <div class="row p-2">
      <div class="col-lg-4 col-sm-12 col-md-6">
        <div class="widget dark">
          <h4 class="widget-title text-white">Contact Info</h4>
          <ul class="list-unstyled mt-2">
            <p>
              <i class="bi bi-geo-alt primary-highlight-text"></i>
              <span class="text-white fw-bold">Address : <?= $companyAddress ?></span>
            </p>
            <p>
              <i class="bi bi-telephone primary-highlight-text"></i>
              <a class="primary-highlight-text fw-bold text-decoration-none" href="tel: <?= $companyMobileNumber ?>">
                Mobile: <?= $companyMobileNumber ?>
              </a>
            </p>
            <p>
              <i class="bi bi-envelope primary-highlight-text"></i>
              <a class="primary-highlight-text fw-bold text-decoration-none" href="mailto:<?= $companyEmail ?>">
                Email: <?= $companyEmail ?>
              </a>
            </p>
           
           
          </ul>
          <div class="col-md-12  my-3">
   
    <a target="_blank" href="#" class="mx-2">
      <i class="bi bi-facebook fs-3"></i>
    </a>
   
    <a target="_blank" href="#" class="mx-2">
      <i class="bi bi-instagram fs-3"></i>
    </a>
      <a target="_blank" href="#" class="mx-2">
      <i class="bi bi-linkedin fs-3"></i>
    </a> 
     <a target="_blank" href="#" class="mx-2">
      <i class="bi bi-whatsapp fs-3"></i>
    </a> 
  </div>


        </div>
      </div>

     
      <div class="col-lg-3 col-sm-12 col-md-6  mt-4 mt-md-0">
        <div class="widget dark">
          <h4 class="widget-title text-white">Our Offerings</h4>
          <ul class="list angle-double-right list-border">
            <li><a class="text-decoration-none" href="/about">About Us</a></li>
            <li><a class="text-decoration-none" href="/services/mutual-fund">Our Services</a></li>
            <li><a class="text-decoration-none" href="/contact">Contact Us</a></li>
           
             
            <!-- <li><a class="text-decoration-none" href="/news">News</a></li> -->
            
          </ul>
        </div>
      </div>
       <div class="col-lg-3 col-sm-12 col-md-6 mt-4 mt-md-0">
        <div class="widget dark">
          <h4 class="widget-title text-white">Useful Links</h4>
          <ul class="list angle-double-right list-border">
             <li><a class="text-decoration-none" href="/tools-and-calculators/systematic-investment-plan-calculator">Calculators</a></li>
            <li><a class="text-decoration-none" href="/blogs">Blogs</a></li> 
            <li><a class="text-decoration-none" href="/privacy-policy">Privacy Policy</a></li>
            <!-- <li><a class="text-decoration-none" href="/terms-and-conditions">Terms and Conditions</a></li>
            <li><a class="text-decoration-none" href="/disclaimer">Disclaimer</a></li> -->
            <!-- <li><a class="text-decoration-none" href="/investor-grievance-redressal-policy">Investor Grievance Redressal Policy</a></li>
            <li><a class="text-decoration-none" href="/client-onboarding-and-kyc-policy">Client Onboarding & Kyc Policy</a></li>
            <li><a class="text-decoration-none" href="/fund-selection-and-review-policy">Fund Selection & Review Policy</a></li>
            <li><a class="text-decoration-none" href="/rights-and-obligations-of-investors">Rights & Obligations Of Investors</a></li>
            <li><a class="text-decoration-none" href="/important-links">Important Links</a></li> -->
            <!-- <li><a class="text-decoration-none" href="/konda-finserv-web-link">Konda Finserv Web Link </a></li> -->
              <!-- <li><a class="text-decoration-none" href="/commission-disclosures">Commission Disclosure</a></li> -->
          </ul>
        </div>
      </div>
      <div class="col-lg-2 col-sm-12 col-md-6  mt-4 mt-md-0">
        <div class="widget dark">
          <h4 class="widget-title text-white">FAQs</h4>
          <ul class="list angle-double-right list-border">
            <li><a class="text-decoration-none" href="/faq/mutual-funds">Mutual Fund FAQ's</a></li>
            <li><a class="text-decoration-none" href="/faq/nri-corner">NRI Corner FAQ's</a></li>
            <!-- <li><a class="text-decoration-none" href="/faq/financial-planning">Financial Planning</a></li> -->
          </ul>
        </div>
      </div>
    </div>

    <div class="row mt-4">
      <div class="col-md-12">
        <div class="row text-white">
          <div class="col-md-12 mx-auto">
            <div class="col-md-12">
              <p class="fw-bold text-center text-white">AMFI registered ARN SR Capital Service ARN No - XXXXX  | Valid From - dd-mm-yyyy | Valid Till - dd-mm-yyyy</p>
              

           
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>



  <div class="footer-bottom">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-4 text-center text-md-start">
          <p class="text-white mb-0">©2026 <?= $companyName ?>. Brand - All Rights Reserved
          </p>
        </div>
        <div class="col-md-5 text-center"><p class="text-white mb-0">  <a href="https://smartodr.in/">SMART ODR</a> | <a href="https://www.amfiindia.com/uploads/AMFI_Master_Cicular_for_MF_Ds_3c7f5ee44f.pdf">Code of conduct </a> | <a href="https://www.sebi.gov.in/filings/mutual-funds.html">SID/SAI/KIM</a> | <a href="https://www.amfiindia.com/online-center/download-factsheets">Factsheet</a> | <a href="https://www.amfiindia.com/risk-parameters">Risk Stress Test</a> </p></div>
        <div class="col-md-3 text-center text-md-end">
          <p class="text-white mb-0">Designed & Developed by
            <a href="#" class="primary-highlight-text text-decoration-none">
              Active Life Tech
            </a>
          </p>
        </div>
      </div>
    </div>
  </div>



</footer>

<script>
  AOS.init({
    duration: 1000, // animation duration in ms
    easing: 'ease-in-out', // easing function
    once: true, // whether animation should happen only once
  });
</script>