<?php

class APIService
{
    private static $apiBaseurl;
    private static $blogBaseurl;
    private static $blogKey;

    public static function init()
    {
        global $apiBaseurl; // Fetch global variable
        global $blogBaseurl; // Fetch global variable
        global $blogKey; // Fetch global variable
        self::$apiBaseurl = $apiBaseurl;
        self::$blogBaseurl = $blogBaseurl;
        self::$blogKey = $blogKey;
    }

    public static function apiCalling($endpoint, $params = [], $method = 'GET')
    {
        $params["key"] = $GLOBALS['apiKey'] ?? ''; // Ensure API key is included
        $fullUrl = $endpoint;
        $ch = curl_init();

        if ($method === 'POST') {
            curl_setopt($ch, CURLOPT_URL, $fullUrl);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));
            curl_setopt($ch, CURLOPT_HTTPHEADER, [
                "Content-Type: application/x-www-form-urlencoded"
            ]);
        } else {
            $fullUrl .= "?" . http_build_query($params);
            curl_setopt($ch, CURLOPT_URL, $fullUrl);
        }

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        $response = curl_exec($ch);
        $error = curl_error($ch);
        curl_close($ch);

        // If cURL failed, return error message safely
        if ($error) {
            return ["error" => "cURL Error: " . $error, "url" => $fullUrl];
        }

        $data = json_decode($response, true);

        // If decoding failed or status not 200
        if (!$data || !isset($data['status']) || $data['status'] != 200) {
            return [
                "error" => "API request failed",
                "status_code" => $data['status'] ?? 'unknown',
                "message" => $data['msg'] ?? 'No message',
                "raw_response" => $response
            ];
        }

        return $data;
    }


    public static function getBlogs($category = "All", $mode = "Growth", $pageid = "1", $period = "1y", $type = "Open")
    {
        // API Base URL
        $baseUrl = self::$blogBaseurl . '/getAllBlogs';

        // Query Parameters
        $params = [
            "category" => $category,
            "mode" => $mode,
            "pageid" => $pageid,
            "period" => $period,
            "type" => $type,
            "key" => self::$blogKey
        ];

        // Construct full URL with query parameters
        $fullUrl = $baseUrl . "?" . http_build_query($params);

        // Initialize cURL
        $ch = curl_init();

        curl_setopt_array($ch, [
            CURLOPT_URL => $fullUrl,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => [
                "Content-Type: application/json",
                "Accept: application/json"
            ]
        ]);

        // Execute request
        $response = curl_exec($ch);

        // Handle cURL errors
        if (curl_errno($ch)) {
            throw new Exception("cURL Error: " . curl_error($ch));
        }

        curl_close($ch);

        // Decode and return response
        return json_decode($response, true);
    }


    public static function getNews($category = "Mutual Fund", $pageid = "1")
    {
        return self::apiCalling(self::$apiBaseurl . '/getAllNews', [
            "category" => $category,
            "pageid" => $pageid
        ]);
    }

    public static function getLimitedBlogs($limit = 6)
    {
        // Fetch blogs from API
        $blogs = APIService::getBlogs();

        // Check if valid blog data exists
        if (!isset($blogs['status']) || $blogs['status'] !== 200 || !isset($blogs['list']) || !is_array($blogs['list']) || empty($blogs['list'])) {
            return []; // Return an empty array if no valid blogs exist
        }

        // Return only the first $limit blogs
        return array_slice($blogs['list'], 0, $limit);
    }


    public static function convertDate($date)
    {
        $formats = ['d-m-Y', 'Y-m-d', 'm/d/Y', 'd/m/Y']; // Common date formats

        foreach ($formats as $format) {
            $dateTime = DateTime::createFromFormat($format, $date);
            if ($dateTime) {
                return $dateTime->format('d-m-Y'); // Correct output format
            }
        }

        return "Invalid date format.";
    }

     public static function getLimitedNews($limit = 6)
    {
        // Fetch blogs from API
        $news = APIService::getNews($category = "Mutual Fund", $pageid = "1");

        // Check if valid blog data exists
        if (!isset($news['status']) || $news['status'] !== 200 || !isset($news['list']) || !is_array($news['list']) || empty($news['list'])) {
            return []; // Return an empty array if no valid blogs exist
        }

        // Return only the first $limit blogs
        return array_slice($news['list'], 0, $limit);
    }
}

APIService::init();
