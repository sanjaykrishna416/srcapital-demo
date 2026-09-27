<?php
header("Access-Control-Allow-Origin: *"); // Allow API access from any domain
header("Content-Type: application/json");

require_once "src/services/APIService.php";

class APIController
{
    private $apiService;

    public function __construct()
    {
        $this->apiService = new APIService();
    }

    public function handleRequest()
    {
        if ($_SERVER["REQUEST_METHOD"] !== "GET") {
            echo json_encode(["error" => "Invalid request method"]);
            return;
        }

        $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $segments = explode('/', trim($path, '/'));
        $type = $segments[1] ?? '';  // Assuming the second segment is the "type"
        $response = match ($type) {
            "blogs" => $this->fetchBlogs(),
            "news" => $this->fetchNews(),
            default => ["error" => "Invalid endpoint"]
        };

        echo json_encode($response);
    }

    private function fetchBlogs()
    {
        return $this->apiService->getBlogs(
            $_GET['category'] ?? "All",
            $_GET['mode'] ?? "Growth",
            $_GET['pageid'] ?? "1",
            $_GET['period'] ?? "1y",
            $_GET['dataType'] ?? "Open"
        );
    }

    private function fetchNews()
    {
        return $this->apiService->getNews(
            $_GET['category'] ?? "Mutual Fund",
            $_GET['pageid'] ?? "1"
        );
    }
}

$controller = new APIController();
$controller->handleRequest();
