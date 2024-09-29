<?php

namespace App\Http\Controllers\VideoCalling;


use App\Core\Request;
use App\Helpers\GetSiteAndVideoCallingDetails;
use App\Helpers\StoreVisitorInformation;

class InviteController {
    public function index($site, $videoCallingType)
    {
        $request = new Request();

        if(!$request->get('id')){
            abort(404);
        }

        $data = [
            'ip_address' => $request->ip(),
            'user_access_token' => $request->get('id'),
            'user_agent' => $request->user_agent(),
            'site' => $site,
            'video_calling_type' => $videoCallingType
        ];


        $response = StoreVisitorInformation::store($data);


        if(isset($response['response'])){
            $response = json_decode($response['response'], true);

            if(!$response['success']){
                abort(404);
            };
        }

        if(isset($response['success']) && $response['success']){
            $siteDetails = $response['site_details'];
            $videoCallingDetails = $response['video_calling_details'];
        }

        return $this->arrangeDataSendToView(
            'index',
            $site,
            $videoCallingType,
            $request->get('id'),
            $siteDetails ?? [],
            $videoCallingDetails ?? []
        );
    }

    public function loginPage($site, $videoCallingType)
    {
        $request = new Request();

        if(!$request->get('id')){
            abort(404);
        }

        $user_access_token = $request->get('id');

        return $this->arrangeDataSendToView(
            'login',
            $site,
            $videoCallingType,
            $user_access_token
        );
    }

    protected function arrangeDataSendToView(
        string $viewName,
        string $site,
        string $videoCallingType,
        string $user_access_token,
        array $siteDetails = [],
        array $videoCallingDetails = []
    )
    {
        if(empty($siteDetails) || empty($videoCallingDetails)){
            $data = GetSiteAndVideoCallingDetails::details($site, $videoCallingType, $user_access_token);

            $siteDetails = $data['site'];
            $videoCallingDetails = $data['videoCalling'];
        }


        return view('videoCalling/' . $viewName, [
            'site' => $siteDetails,
            'videoCalling' => $videoCallingDetails,
            'user_access_token' => $user_access_token
        ]);
    }
}
