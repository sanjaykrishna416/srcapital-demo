<?php

// Automatically detect the base URL (Works on localhost & production)
$host = $_SERVER['HTTP_HOST']; // localhost:8000
$baseFolder = ''; // Change this if your project is inside a subfolder
$protocol = ((isset($protocol = isset($_SERVER['HTTPS']) ? "https://" : "http://";SERVER['HTTPS']) && $protocol = isset($_SERVER['HTTPS']) ? "https://" : "http://";SERVER['HTTPS'] !== 'off') || (isset($protocol = isset($_SERVER['HTTPS']) ? "https://" : "http://";SERVER['HTTP_X_FORWARDED_PROTO']) && $protocol = isset($_SERVER['HTTPS']) ? "https://" : "http://";SERVER['HTTP_X_FORWARDED_PROTO'] === 'https')) ? "https://" : "http://";
$GLOBALS['baseURL'] = $protocol . $host . '/' . $baseFolder;

// Define asset paths
$GLOBALS['assetPath'] = $GLOBALS['baseURL'] . "assets/";
$GLOBALS['imagePath'] = $GLOBALS['assetPath'] . "images/";
$GLOBALS['cssPath'] = $GLOBALS['assetPath'] . "css/";
$GLOBALS['jsPath'] = $GLOBALS['assetPath'] . "js/";

$GLOBALS['title'] = "SR Capital Service.";
$GLOBALS['logoPath'] = $assetPath . 'images/logo/sr-capital-logo.png';
$GLOBALS['favIcon'] = $assetPath . 'images/logo/sr-capital-logo.png';



$GLOBALS['companyEmail'] = 'srcap26@gmail.com';
$GLOBALS['companyMobileNumber'] = '+91 97892 15598';
$GLOBALS['companyMobileNumber2'] = ' ';
$GLOBALS['companyMobileNumber3'] = '';
$GLOBALS['companyName'] = 'SR Capital Service';
$GLOBALS['companyAddress'] = ' No. 20, Kavalan Street, Upstairs Thuglife,  Kanchipuram – 631501';
$GLOBALS['companyAddress1'] = '';

$GLOBALS['porject_url'] = "/api";
$GLOBALS['apiBaseurl'] = "https://mfapi.advisorkhoj.com";
$GLOBALS['blogBaseurl'] = "https://mfportfolio.in/api";
$GLOBALS['apiKey'] = "752b972b-1c0b-40e1-adb9-1d3344663fbe";
$GLOBALS['blogKey'] = "6edfe7d5-c527-4998-bed6-7f7286a0e0e9";
