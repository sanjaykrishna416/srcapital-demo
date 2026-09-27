<!-- Bootstrap CSS via CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">


<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">



<link rel="stylesheet" href="<?= $GLOBALS['cssPath'] ?>root.css">
<link rel="stylesheet" href="<?= $GLOBALS['cssPath'] ?>style.css">
<link rel="stylesheet" href="<?= $GLOBALS['cssPath'] ?>custom.css">

<!-- <header class="top-header d-none d-lg-block">
    <div class="container d-flex justify-content-between align-items-center">
        <p class="mb-0 fw-bold">
            <i class="bi bi-clock text-white me-2"></i> Opening Hours: Monday - Saturday : 10:00 AM to 9:00 PM
        </p>
        <div class="contact-info">
            <i class="bi bi-telephone text-white"></i><a
                href="tel:<?= $companyMobileNumber ?>"><?= $companyMobileNumber ?></a> |
            <i class="bi bi-envelope text-white"></i><a
                href="mailto:<?= $companyEmail ?>"><?= $companyEmail ?></a>
        </div>
    </div>
</header> -->


<!-- Navbar -->
<nav class="navbar navbar-expand-lg  bg-white">
    <div class="container d-flex justify-content-between align-items-center">
        <!-- Logo -->
        <div class="navbar-brand text-center">
            <a href="/">
                <img src="<?= $logoPath ?>" width="100px;">
            </a>
            <!-- <figcaption class="text-center text-muted mt-0 mb-0" style="font-size: 11px;">AMFI Registered Mutual Fund Distributor
            </figcaption> -->
        </div>

        <!-- Navbar Toggler (for mobile view) -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Links -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="/">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="/about">About Us</a>
                </li>

               <!-- <li class="nav-item">
                    <a class="nav-link active" href="/services">Services</a>
                </li>-->
                 <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="serviceDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Service
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="serviceDropdown">
                        <li><a class="dropdown-item" href="/services/mutual-fund">Mutual Fund</a></li>
                        <li><a class="dropdown-item" href="/services/life-insurance">Life Insurance</a></li>
                        <li><a class="dropdown-item" href="/services/general-insurance">General Insurance</a></li>
                        <li><a class="dropdown-item" href="/services/investment-Services">Investment Planning</a></li>
                        <li><a class="dropdown-item" href="/services/Wealth-Management">Wealth management</a></li>
                        <li><a class="dropdown-item" href="/services/bonds"> Bonds</a></li>
                        <li><a class="dropdown-item" href="/services/ncds"> NCD's</a></li>
                        <li><a class="dropdown-item" href="/services/aif">AIF</a></li>
                        <li><a class="dropdown-item" href="/services/health-insurance">Health Insurance (Mediclaims)</a></li>
                        
                       <!--  <li><a class="dropdown-item" href="/services/aif">AIF</a></li>
                        <li><a class="dropdown-item" href="/services/life-insurance">Life Insurance</a></li>
                        <li><a class="dropdown-item" href="/services/health-insurance">Health Insurance</a></li>
                        <li><a class="dropdown-item" href="/services/corporate-bond">Corporate Bond</a></li>
                        <li><a class="dropdown-item" href="/services/retirement-planning">Retirement Planning</a></li>
                        <li><a class="dropdown-item" href="/services/child-education">Child Education</a></li>
                        <li><a class="dropdown-item" href="/services/loan-service">Loan Service</a></li>
                        <li><a class="dropdown-item" href="/services/unlisted-share">Unlisted Share & IPO</a></li>
                        <li><a class="dropdown-item" href="/services/gold-silver">Gold & Silver Investement</a></li>-->
                    </ul>
                </li> 
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="mfResearchDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        MF Research
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="mfResearchDropdown">
                        <li><a class="dropdown-item" href="/mutual-funds-research/top-performing-mutual-funds">Mutual
                                Fund Trailing Return</a></li>
                        <li><a class="dropdown-item"
                                href="/mutual-funds-research/top-consistent-mutual-fund-performers">Top Consistent
                                Mutual Fund</a></li>
                        <li><a class="dropdown-item" href="/mutual-funds-research/mutual-fund-annual-returns">Mutual
                                Fund Annual
                                Returns</a></li>
                        <li><a class="dropdown-item"
                                href="/mutual-funds-research/top-pe rforming-systematic-investment-plan">Top Performing
                                SIP Plan</a></li>

                        <li><a class="dropdown-item"
                                href="/mutual-funds-research/mutual-fund-sip-investment-calculator">Mutual Fund SIP
                                Calculator</a></li>
                        <li><a class="dropdown-item" href="/mutual-funds-research/top-performing-lumpsum-funds">Mutual
                                Fund Lumpsum
                                Return</a></li>
                    </ul>
                </li> -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="calculatorsDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Calculators
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="calculatorsDropdown">
                        <li><a class="dropdown-item" href="/tools-and-calculators/become-a-crorepati">Become A
                                Crorepati</a></li>
                        <li><a class="dropdown-item"
                                href="/tools-and-calculators/systematic-investment-plan-calculator">SIP Return
                                Calculator</a></li>
                        <li><a class="dropdown-item"
                                href="/tools-and-calculators/retirement-planning-calculator">Retirement Planning
                                Calculator</a></li>
                        <li><a class="dropdown-item"
                                href="/tools-and-calculators/mutual-fund-sip-calculator-step-up">SIP Calculator Step Up</a></li>
                        <li><a class="dropdown-item" href="/tools-and-calculators/lumpsum-target-calculator">Lumpsum
                                Target Calculator</a></li>
                        <li><a class="dropdown-item" href="/tools-and-calculators/target-amount-sip-calculator">Target
                                Amount SIP Calculator</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/blogs">Blogs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact Us</a>
                </li>
                <li class="nav-item d-flex gap-2 justify-content-center mt-lg-0 mt-md-2 mt-3">
                    <a class="text-decoration-none" href="#" target="_blank">
                        <button class=" btn-login">
                            <i class="bi bi-person"></i> SignUp
                        </button>
                    </a>
                    <a class="text-decoration-none" href="#" target="_blank">
                        <button class=" btn-login">
                            <i class="bi bi-person"></i> Login
                        </button>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>



<script>
    document.addEventListener("DOMContentLoaded", function () {
        window.addEventListener("scroll", function () {
            let navbar = document.querySelector(".navbar");
            if (window.scrollY > 50) {
                navbar.classList.add("shadow");
            } else {
                navbar.classList.remove("shadow");
            }
        });
    });
</script>