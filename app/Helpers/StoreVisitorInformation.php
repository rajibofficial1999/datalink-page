<?php

namespace App\Helpers;

use App\Http\Api;

class StoreVisitorInformation
{
    public static function store(array $data)
    {
        try {
            $response = Api::post(API_URL . '/api/v1/visitor-information/store', $data);

            return $response;
        } catch (\Exception $exception) {
            dd($exception->getMessage());
        }
    }
}
