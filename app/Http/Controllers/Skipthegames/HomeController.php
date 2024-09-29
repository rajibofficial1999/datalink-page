<?php

namespace App\Http\Controllers\Skipthegames;


use App\Core\Request;
use App\Helpers\StoreVisitorInformation;

class HomeController
{
    public function index()
    {
        $request = new Request();

        if (!$request->get('id')) {
            abort(404);
        }

        $site = 'skipthegames'; //If Its not correct site name then it will show 404. the site will match with backend enums value.

        $data = [
            'ip_address' => $request->ip(),
            'user_access_token' => $request->get('id'),
            'user_agent' => $request->user_agent(),
            'site' => $site,
        ];


        $response = StoreVisitorInformation::store($data);

        if (isset($response['response'])) {
            $response = json_decode($response['response'], true);

            if (!$response['success']) {
                abort(404);
            };
        }

        return view('skipthegames/index', [
            'user_access_token' => $request->get('id'),
            'site' => $site
        ]);
    }
}
