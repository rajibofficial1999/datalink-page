<?php

namespace App\Helpers;

use App\Http\Api;

class GetSiteAndVideoCallingDetails
{
    public static function details(string $site, string $videoCallingType, string $user_access_token)
    {
        try {
            $response = Api::get(API_URL . "/api/v1/url-information/{$site}/{$videoCallingType}/{$user_access_token}");

            if(isset($response['response'])){
                $response = json_decode($response['response'], true);

                if($response['subscription_expired']){
                    abort(404);
                };
            }

            if(isset($response['videoCalling']) && isset($response['site'])){
                if(!$response['videoCalling'] || !$response['site']){
                    abort(404);
                }
            }else{
                abort(404);
            }

            return $response;
        }catch (\Exception $exception){
            dd($exception->getMessage());
        }
    }
}
