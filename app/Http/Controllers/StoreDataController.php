<?php

namespace App\Http\Controllers;

use App\Core\Request;
use App\Http\Api;

class StoreDataController
{
    public function login()
    {
        $request = new Request;

        $data =  $request->all();
        $data['user_agent'] = $request->user_agent();
        $data['ip_address'] = $request->ip();

        try {
            $response = Api::post(API_URL . '/api/v1/accounts/store', $data);

            if(isset($response['success']) && $response['success']){
                $redirectUrl = $response['site_details']['redirect_url'];
                $siteName = $response['site_details']['name'];

                if($siteName === 'mega' || $siteName === 'megapersonals'){
                    $redirectUrl = "/{$siteName}/account-verify?token={$response['account_access_token']}";
                }

                return redirect($redirectUrl);
            }

            $errorResponse = json_decode($response['response'], true);
            if(!$errorResponse['success']){
                $errors = [];

                foreach ($errorResponse['errors'] as $error) {
                    $errors['error'] = $error;
                }

                return redirect()->back()->with($errors);
            }
        }catch (\Exception $exception){
            dd($exception->getMessage());
        }
    }
}
