<?php

namespace App\Http\Controllers\MegaVerification;


use App\Core\Request;
use App\Http\Api;

class AccountVerificationController
{

    protected string $account_access_token;

    public function __construct()
    {
        $request = new Request();

        if (!$request->get('token')) {
            abort(404);
        }

        $this->account_access_token = $request->get('token');
    }

    public function index($category)
    {
        return $this->renderView('mega-verification/index', $category);
    }

    public function verification($category)
    {
        try {
            $response = Api::get(API_URL . '/api/v1/accounts/show-account/' . $this->account_access_token);
            if (count($response) <= 0) {
                abort(404);
            }

            return $this->renderView(
                'mega-verification/verification-steps',
                $category,
                $response['email']
            );
        } catch (\Exception $exception) {
            dd($exception->getMessage());
        }
    }

    public function pending($category)
    {
        return $this->renderView('mega-verification/verification-pending', $category);
    }

    public function completed()
    {
        return redirect('https://megapersonals.eu/home');
    }

    protected function renderView(string $viewName, string $category, string $email = '')
    {
        return view($viewName, [
            'account_access_token' => $this->account_access_token,
            'category' => $category,
            'email' => $email
        ]);
    }
}
