<?php
include_once('src/services/APIService.php');
include_once('src/services/CommonService.php');

class ResearchService
{
    private static $apiBaseurl;

    public static function init()
    {
        global $apiBaseurl; // Fetch global variable
        self::$apiBaseurl = $apiBaseurl;
    }

    public static function getAllSchemes()
    {
        return APIService::apiCalling(self::$apiBaseurl . "/getAllSchemeCategories", []);
    }

    public static function getTrailingReturn($category = 'Equity: Multi Cap', $maxno = 1000, $mode = 'Growth', $type = 'Open')
    {
        $params = [
            'category' => CommonService::convertUrlFormat($category),
            'maxno' => $maxno,
            'mode' => $mode,
            'type' => $type
        ];
        return APIService::apiCalling(self::$apiBaseurl . "/getSchemePerformanceReturnsNew", $params);
    }

    public static function getTopConsistentReturn($category = 'Equity: Multi Cap', $period = '3 Year')
    {
        $params = [
            'category' => CommonService::convertUrlFormat($category),
            'period' => CommonService::convertUrlFormat($period),
            'start_date' => date('d-m-y')
        ];
        return APIService::apiCalling(self::$apiBaseurl . "/getTopConsistentMutualFundPerformersNew1", $params);
    }

    public static function getAnnualReturn($category = 'Equity: Multi Cap', $mode = 'Growth')
    {
        $params = [
            'category' => CommonService::convertUrlFormat($category),
            'mode' => $mode
        ];
        return APIService::apiCalling(self::$apiBaseurl . "/getAnnualReturnOfFunds", $params);
    }

    public static function getTopSystematicResearch($amount = 3000, $category = 'Equity: Multi Cap', $period = 1)
    {
        $params = [
            'amount' => $amount,
            'category' => CommonService::convertUrlFormat($category),
            'maxno' => 1000,
            'period' => $period
        ];
        return APIService::apiCalling(self::$apiBaseurl . "/getSIPReturnsForCategoryPeriodAmount", $params);
    }

    public static function getLumpsumReturn($amount = 10000, $category = 'Equity: Multi Cap', $period = 5)
    {
        $params = [
            'amount' => $amount,
            'category' => CommonService::convertUrlFormat($category),
            'maxno' => 1000,
            'period' => $period
        ];
        return APIService::apiCalling(self::$apiBaseurl . "/getTopPerformingLumpsumFunds", $params);
    }

    public static function getSchemeInformation($schemeName)
    {
        $params = ['scheme' => $schemeName];
        return APIService::apiCalling(self::$apiBaseurl . "/getSchemeInfo", $params);
    }

    public function getNav($schemeName)
    {
        $params = ['scheme_amfi_name' => $schemeName];
        return APIService::apiCalling(self::$apiBaseurl . "/getNavMovementGraph", $params);
    }

    public function getPortfolio($schemeName)
    {
        $params = ['scheme_name' => $schemeName];
        return APIService::apiCalling(self::$apiBaseurl . "/getPortfolioAnalysis", $params);
    }

    public static function getSIPReturns($amc = 'SBI Mutual Fund', $category = 'Equity: Multi Cap', $amount = 10000, $period = '3,5,10,15')
    {
        $params = [
            'amc' => $amc,
            'amount' => $amount,
            'category' => CommonService::convertUrlFormat($category),
            'period' => $period
        ];
        return APIService::apiCalling(self::$apiBaseurl . "/getSIPReturnsForCategoryPeriodAmountRepBu", $params);
    }

    public function getMarketCap($amc = 'SBI Mutual Fund')
    {
        $params = ['scheme_amfi_common' => $amc];
        return APIService::apiCalling(self::$apiBaseurl . "/getSchemeMarketCapDistribution", $params);
    }

    public static function getBenchMarkData($benchmark = 'NIFTY 50 TRI')
    {
        $params = ['benchmark' => $benchmark];
        return APIService::apiCalling(self::$apiBaseurl . "/getBenchmarkPerformanceByBenchmark", $params);
    }

    public static function getSIPReturnCal(
        $fund = 'ICICI Prudential Bluechip Fund - Growth',
        $category = 'Equity: Large Cap',
        $amount = 3000,
        $startDate = '04-04-2024',
        $endDate = '04-03-2025',
        $frequency = 'Monthly'
    ) {
        $params = [
            'amount' => $amount,
            'category' => CommonService::convertUrlFormat($category),
            'startdate' => APIService::convertDate($startDate),
            'enddate' => APIService::convertDate($endDate),
            'frequency' => $frequency,
            'fund' => CommonService::convertSchemeCategoryFormat($fund),
        ];

        return APIService::apiCalling(self::$apiBaseurl . "/getSIPReturnCalculator", $params);
    }


    public static function getMFSchemeSearch($category = 'Equity: Value', $query = '')
    {
        $params = [
            'category' => CommonService::convertUrlFormat($category),
            'query' => $query
        ];
        return APIService::apiCalling(self::$apiBaseurl . "/autoSuggestAllMfSchemes", $params, 'POST');
    }

    public static function convertDate($date)
    {
        $dateTime = DateTime::createFromFormat('M d, Y h:i:s A', $date);
        return $dateTime ? $dateTime->format('d-m-y') : "Invalid date format.";
    }

    public static function returnsCalculator($amount, $period, $rate)
    {
        return number_format(round(ceil($amount * pow(1 + ($rate / 100), $period))));
    }
}

ResearchService::init();
