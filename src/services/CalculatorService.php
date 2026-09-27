<?php

include_once('src/services/APIService.php');

class CalculatorService
{
    private static $apiBaseurl;

    public static function init()
    {
        global $apiBaseurl; // Fetch global variable
        self::$apiBaseurl = $apiBaseurl;
    }

    public function crorepatiCalculator($currentAge = 30, $expectedReturn = 12, $inflationRate = 5, $retirementAge = 60, $savingsAmount = 2500000, $wealthAmount = 50000000)
    {
        $params = [
            'current_age' => $currentAge,
            'expected_return' => $expectedReturn,
            'inflation_rate' => $inflationRate,
            'retirement_age' => $retirementAge,
            'savings_amount' => $savingsAmount,
            'wealth_amount' => $wealthAmount
        ];
        return APIService::apiCalling(self::$apiBaseurl . "/calc/getCrorepatiResult", $params);
    }

    public function SIPCalculator($sipAmount = 25000, $rate = 12, $period = 5)
    {
        $params = [
            'period' => $period,
            'sip_amount' => $sipAmount,
            'interest_rate' => $rate
        ];
        return APIService::apiCalling(self::$apiBaseurl . "/calc/getSIPCalcResult", $params);
    }

    public function StepUpSIPCalculator($sipAmount = 25000, $rate = 12, $period = 5, $sipStepUpValue = 10)
    {
        $params = [
            'period' => $period,
            'sip_amount' => $sipAmount,
            'interest_rate' => $rate,
            'sip_stepup_value' => $sipStepUpValue
        ];
        return APIService::apiCalling(self::$apiBaseurl . "/calc/getSIPCalcStepUpResult", $params);
    }

    public function LumpsumTargetCalculator($targetAmount = 5000000, $expectedReturn = 12, $period = 3)
    {
        $params = [
            'target_amount' => $targetAmount,
            'years' => $period,
            'expected_return' => $expectedReturn,
             'key'              => $GLOBALS['apiKey']
        ];

         $baseUrl = self::$apiBaseurl . "/calc/getLumpsumTargetCalcResult";
        $fullUrl = $baseUrl . '?' . http_build_query($params);
      //  echo $fullUrl;
        return APIService::apiCalling($fullUrl, [], 'POST');
       
    }

    public function SIPTargetCalculator($expectedReturn = 12, $inflationRate = 5, $period = 30, $wealthAmount = 2500000)
    {
        $params = [
            'expected_return' => $expectedReturn,
            'inflation_rate' => $inflationRate,
            'period' => $period,
            'wealth_amount' => $wealthAmount
        ];
        return APIService::apiCalling(self::$apiBaseurl . "/calc/getTargetAmountSIPCalcResult", $params);
    }
}

CalculatorService::init();
