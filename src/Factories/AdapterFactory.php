<?php
/**
 * Created by PhpStorm.
 * User: vamoose
 * Date: 2016/11/28
 * Time: 11:11 AM
 */

namespace EONConsulting\PHPSaasWrapper\src\Factories;


use EONConsulting\PHPSaasWrapper\src\OAuth\OAuthEnum;
use EONConsulting\PHPSaasWrapper\src\OAuth\Services\Facebook;

class AdapterFactory {

    /**
     * @param $config -> Of type CONFIG
     * @return
     */
    public function make(OAuthEnum $config) {
        switch ($config) {
            case OAuthEnum::FACEBOOK:
                return new Facebook;
        }
    }

}