<?php
header("Access-Control-Allow-Origin: *"); // Allow API access from any domain
header("Content-Type: application/json");

require_once "src/services/ResearchService.php";

class ResearchController
{
    private $researchService;

    public function __construct()
    {
        $this->researchService = new ResearchService();
    }

    public function handleRequest()
    {


        $jsonData = file_get_contents("php://input");
        $data = json_decode($jsonData, true);
        $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $segments = explode('/', trim($path, '/'));
        $type = $segments[1] ?? '';  // Assuming the second segment is the "type"


        $response = match ($type) {
            "getAllSchemes" => $this->researchService->getAllSchemes(),
            "getTrailingReturn" => $this->researchService->getTrailingReturn($data['category'], $data['maxno'], $data['mode'], $data['type']),
            "getTopConsistentReturn" => $this->researchService->getTopConsistentReturn($data['category'], $data['period']),
            "getAnnualReturn" => $this->researchService->getAnnualReturn($data['category'], $data['mode']),
            "getTopSystematicResearch" => $this->researchService->getTopSystematicResearch($data['amount'], $data['category'], $data['maxno'], $data['period']),
            "getPortfolio" => $this->researchService->getPortfolio($data['scheme_name']),
            "getNav" => $this->researchService->getNav($data['scheme_amfi_name']),
            "getMarketCap" => $this->researchService->getMarketCap($data['scheme_amfi_common']),
            "getSIPReturn" => $this->researchService->getSIPReturnCal($data['fund'], $data['frequency'], $data['enddate'], $data['startdate'], $data['category'], $data['amount']),
            "getMFSchemeSearch" => $this->researchService->getMFSchemeSearch($data['category'], $data['query']),
            "getPortfolioResearch" => $this->researchService->getPortfolio($data['scheme_name']),
            default => ["error" => "Invalid endpoint"]
        };

        echo json_encode(value: $response);
    }
}

$controller = new ResearchController();
$controller->handleRequest();
