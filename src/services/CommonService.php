<?php

include_once('src/services/APIService.php');

class CommonService
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


    public static function newsDetails($slug)
    {
        return APIService::apiCalling(self::$apiBaseurl . '/getNewsByTitle', ['title' => self::convertUrlFormat($slug)]);
    }

    public static function blogsDetails($id)
    {
        // API Base URL
        $baseUrl = self::$blogBaseurl . '/getBlogByIdWebsite';

        // Query Parameters
        $params = [
            "id" => $id,
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
    public static function convertSchemeCategoryFormat($url)
    {
        return urldecode(str_replace(" ", "%20", $url));
    }



    public static function convertUrlFormat($url)
    {
        return urldecode(str_replace("-", "+", $url));
    }
}

CommonService::init();
