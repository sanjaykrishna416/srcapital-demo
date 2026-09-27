<?php
header("Access-Control-Allow-Origin: *"); // Allow API access from any domain
header("Content-Type: application/json");

require_once "src/services/CalculatorService.php";

class CalculatorController
{
    private $calculatorService;

    public function __construct()
    {
        $this->calculatorService = new CalculatorService();
    }

    public function handleRequest()
    {


        $jsonData = file_get_contents("php://input");
        $data = json_decode($jsonData, true);
        $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $segments = explode('/', trim($path, '/'));
        $type = $segments[1] ?? '';  // Assuming the second segment is the "type"

        $response = match ($type) {
            "getCrorepatiCal" => $this->calculatorService->crorepatiCalculator(
                $data['current_age'],
                $data['expected_return'],
                $data['inflation_rate'],
                $data['retirement_age'],
                $data['savings_amount'],
                $data['wealth_amount']
            ),
            "getSIPCal" => $this->calculatorService->SIPCalculator(
                $data['sip_amount'],
                $data['rate_of_return'],
                $data['months']
            ),
            "getRetirementPlan" => $this->calculatorService->crorepatiCalculator(
                $data['age'],
                $data['interest'],
                $data['inc_rate'],
                $data['retire_age'],
                $data['savings_amount'],
                $data['amount']
            ),
            "getStepUpSIPCal" => $this->calculatorService->StepUpSIPCalculator(
                $data['sip_amount'],
                $data['rate_of_return'],
                $data['months'],
                $data['sipstepup']
            ),
            "getLumpsumTargetCal" => $this->calculatorService->LumpsumTargetCalculator(
                $data['amount'],
                $data['interest'],
                $data['years']
            ),
            "getSIPTargetCalculator" => $this->calculatorService->SIPTargetCalculator(
                $data['interest'],
                $data['inc_rate'],
                $data['years'],
                $data['amount']
            ),
            default => ["error" => "Invalid endpoint"]
        };

        echo json_encode($response);
    }
}

$controller = new CalculatorController();
$controller->handleRequest();
