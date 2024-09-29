<?php

namespace App\Http;

class Api
{
    private static function executeRequest($ch)
    {
        $response = curl_exec($ch);

        if ($response === false) {
            return ['error' => curl_error($ch)];
        }

        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $responseData = json_decode($response, true);

        if ($httpCode >= 200 && $httpCode < 300) {
            if (json_last_error() === JSON_ERROR_NONE) {
                return $responseData;
            } else {
                return ['error' => json_last_error_msg()];
            }
        } else {
            return [
                'http_error' => $httpCode,
                'response' => $response
            ];
        }
    }

    public static function post($url, $data)
    {
        $ch = curl_init($url);
        $jsonData = json_encode($data);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
            'Content-Length: ' . strlen($jsonData)
        ]);

        $result = self::executeRequest($ch);
        curl_close($ch);
        return $result;
    }

    public static function get($url, $queryParams = [])
    {
        $queryString = http_build_query($queryParams);
        $fullUrl = $queryString ? $url . '?' . $queryString : $url;

        $ch = curl_init($fullUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Accept: application/json'
        ]);

        $result = self::executeRequest($ch);
        curl_close($ch);
        return $result;
    }
}
