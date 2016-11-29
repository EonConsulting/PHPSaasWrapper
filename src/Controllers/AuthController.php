<?php
/**
 * Created by PhpStorm.
 * User: vamoose
 * Date: 2016/11/28
 * Time: 1:28 PM
 */

namespace EONConsulting\PHPSaasWrapper\src\Controllers;


use App\Http\Controllers\Controller;
use EONConsulting\PHPSaasWrapper\src\Factories\AdapterFactory;
use EONConsulting\PHPSaasWrapper\src\OAuth\OAuthEnum;
use EONConsulting\PHPSaasWrapper\src\OAuth\OAuthFactory;
use Guzzle\Http\Client;

class AuthController extends Controller {

    public function auth() {
        $client = new Client;

        $factory = new OAuthFactory(new AdapterFactory);
        $service = $factory->make(OAuthEnum::UDACITY);

        $service->setClient($client);

        return redirect($service->getUserByToken());
    }

    public function callback() {

    }

}