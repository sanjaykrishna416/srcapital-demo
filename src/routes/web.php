

<?php

// Automatically detect the project base URL (Works locally & in production)
$scriptName = dirname($_SERVER['SCRIPT_NAME']);
$basePath = rtrim($scriptName, '/'); // Removes trailing slash
$requestUri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

// Remove base path from URI for correct routing
if (!empty($basePath) && strpos($requestUri, trim($basePath, '/')) === 0) {
    $requestUri = substr($requestUri, strlen($basePath));
}
$requestUri = trim($requestUri, '/'); // Final clean URI


// Define available static routes
$routes = [
    '' => 'home', // Default homepage
    'home' => 'home',
    'about' => 'about',
    'contact' => 'contact',
    'services' => 'service',
    'coming-soon' => 'coming-soon',
    'our-team' => 'our-team',
    'commission-disclosures' => 'commission-disclosures',
    'konda-finserv-web-link' => 'konda-finserv-web-link',
    'investor-grievance-redressal-policy' => 'investor-grievance-redressal-policy',
    'terms-and-conditions' => 'terms-and-conditions',
    'disclaimer' => 'disclaimer',
    'client-onboarding-and-kyc-policy' => 'client-onboarding-and-kyc-policy',
    'fund-selection-and-review-policy' => 'fund-selection-and-review-policy',
    'rights-and-obligations-of-investors' => 'rights-and-obligations-of-investors',
    'important-links' => 'important-links',


    // Blog & News
    'blogs' => 'article/blog',
    '10-common-mistakes-people-make-when-buying-insurance' => 'article/common-mistake',
    'How-to-Build-a-1-Crore-Portfolio-from-Zero' => 'article/how-to-build',
    'Why-Large-Cap-Funds-Should-Be-Part-of-Your-Core-Portfolio' => 'article/why-large-cap',
    'SIP-vs-Lumpsum-Which-Investment-Strategy-Is-Right-for-You' => 'article/sip-vs-lumpsum',
    'Planting-Dreams-Early' => 'article/Planting-Dreams-Early',
    'Succession-Planning-for-Family-Businesses-in-India' => 'article/Succession-Planning',
    
    'news' => 'article/news',
    

    // Mutual Funds Research
    'mutual-funds-research/top-performing-mutual-funds' => 'mf-research/mf-trailing-return',
    'mutual-funds-research/top-consistent-mutual-fund-performers' => 'mf-research/mf-consistent-return',
    'mutual-funds-research/mutual-fund-annual-returns' => 'mf-research/mf-annual-return',
    'mutual-funds-research/top-performing-systematic-investment-plan' => 'mf-research/mf-top-sip',
    'mutual-funds-research/mutual-fund-sip-investment-calculator' => 'mf-research/mf-sip-calculator',
    'mutual-funds-research/top-performing-lumpsum-funds' => 'mf-research/mf-lumpsum-return',

    // Tools & Calculators
    'tools-and-calculators/become-a-crorepati' => 'calculators/crorepati',
    'tools-and-calculators/systematic-investment-plan-calculator' => 'calculators/sip-return',
    'tools-and-calculators/retirement-planning-calculator' => 'calculators/retirement',
    'tools-and-calculators/mutual-fund-sip-calculator-step-up' => 'calculators/sip-step-up',
    'tools-and-calculators/lumpsum-target-calculator' => 'calculators/lumpsum-target',
    'tools-and-calculators/target-amount-sip-calculator' => 'calculators/target-amount-sip',

    //service
    'services/' => 'services/mutual-fund',
    'services/mutual-fund' => 'services/mutual-fund',
    'services/life-insurance' => 'services/life-insurance',
    'services/health-insurance' => 'services/health-insurance',
    'services/general-insurance' => 'services/general-insurance',
     'services/insurance' => 'services/insurance',
    'services/bonds' => 'services/corporate-bond',
    'services/sif' => 'services/sif',
    'services/sip' => 'services/sip',
     'services/ncds' => 'services/ncds',
     'services/goal-based-financial-planning' => 'services/goal-based-financial-planning',
     'services/Wealth-Management' => 'services/Portfolio-Review-and-Wealth-Management',
     'services/tax-saving-investments' => 'services/tax-saving-investments',
     'services/Retirement-and-children-future-planing' => 'services/Retirement-and-children-future-planing',
     'services/portfolio-tracking-and-investment-reporting' => 'services/portfolio-tracking-and-investment-reporting',
     'services/investor-education-and-market-updates' => 'services/investor-education-and-market-updates',
     'services/dedicated-customer-support' => 'services/dedicated-customer-support',
     'services/swp' => 'services/swp',
    'services/retirement-planning' => 'services/retirement-planning',

    // 'services/gold-silver-investments' => 'services/gold-silver-investments',
    // 'services/unlisted-equities' => 'services/unlisted-equities',
    'services/pms' => 'services/pms',
     'services/investment-Services' => 'services/investment-Services',
    'services/corporate-bond' => 'services/corporate-bond',
    'services/fixed-deposit' => 'services/fixed-deposit',
    'services/loan-service' => 'services/loan-service',
    'services/aif' => 'services/aif',
    'services/tax-planning' => 'services/taxation',
    'services/child-education' => 'services/child-education',
    'services/unlisted-share' => 'services/unlisted-share',
    //'services/gold-silver' => 'services/gold-silver',
    'services/demat-service' => 'services/demat-service',
    'services/investment-services' => 'services/investment-services',
    'services/financial-planning' => 'services/financial-planning',
    // 'services/unlisted-equities' => 'services/unlisted-equities',

    //help links
    'privacy-policy' => 'privacy-policy',

    //faq's
    'faq/mutual-funds' => 'faq/mutual-fund',
    'faq/nri-corner' => 'faq/nri-corner',
    'faq/financial-planning' => 'faq/financial-planning',
];



// Check for API Routes
$apiRoutes = [
    'api/blogs' => 'APIController',
    'api/news' => 'APIController',
    'api/getCrorepatiCal' => 'CalculatorController',
    'api/getSIPCal' => 'CalculatorController',
    'api/getRetirementPlan' => 'CalculatorController',
    'api/getStepUpSIPCal' => 'CalculatorController',
    'api/getSIPTargetCalculator' => 'CalculatorController',
    'api/getLumpsumTargetCal' => 'CalculatorController',
    'api/getAllSchemes' => 'ResearchController',
    'api/getTrailingReturn' => 'ResearchController',
    'api/getTopConsistentReturn' => 'ResearchController',
    'api/getAnnualReturn' => 'ResearchController',
    'api/getTopSystematicResearch' => 'ResearchController',
    'api/getPortfolio' => 'ResearchController',
    'api/getNav' => 'ResearchController',
    'api/getMarketCap' => 'ResearchController',
    'api/getSIPReturn' => 'ResearchController',
    'api/getMFSchemeSearch' => 'ResearchController',
    'api/getPortfolioResearch' => 'ResearchController',
];

// Prevent Directory Traversal (Security Measure)
$requestUri = str_replace(['..', './', '//'], '', $requestUri);

// Handle static routes
if (isset($routes[$requestUri])) {
    $filePath = __DIR__ . '/../views/' . $routes[$requestUri] . '.php';
    if (file_exists($filePath)) {
        require $filePath;
        exit;
    }
}

// Handle API routes
if (isset($apiRoutes[$requestUri])) {
    $apiPath = __DIR__ . '/../controllers/' . $apiRoutes[$requestUri] . '.php';
    if (file_exists($apiPath)) {
        require $apiPath;
        exit;
    }
}

// Dynamic routing for News
if (preg_match('/^(news)\/(.+)$/', $requestUri, $matches)) {
    $_GET['slug'] = $matches[2]; // Store the slug as a GET parameter
    $filePath = __DIR__ . '/../views/article/news-detail.php';
    if (file_exists($filePath)) {
        require $filePath;
        exit;
    }
}
// Dynamic routing for Blogs
if (preg_match('/^(blogs)\/(.+)$/', $requestUri, $matches)) {
    $_GET['id'] = $matches[2]; // Store the slug as a GET parameter
    $filePath = __DIR__ . '/../views/article/blog-detail.php';
    if (file_exists($filePath)) {
        require $filePath;
        exit;
    }
}
// Dynamic routing for Mutual Fund Research (Corrected)

if (preg_match('/^(mutual-funds-research\/fund-card)$/', $requestUri, $matches)) {
    if (isset($_GET['scheme'])) {
        $scheme = $_GET['scheme'];
        $scheme = preg_replace('/[^a-zA-Z0-9\-]/', '', $scheme);
        $filePath = __DIR__ . '/../views/mf-research/fund-card.php';
        if (file_exists($filePath)) {
            require $filePath;
            exit;
        }
    }
}

// ... (Your other routing code)

// Handle 404 - Page Not Found
http_response_code(404);
require __DIR__ . '/../views/404.php';
exit;
