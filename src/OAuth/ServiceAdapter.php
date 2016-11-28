<?php
/**
 * Created by PhpStorm.
 * User: vamoose
 * Date: 2016/11/28
 * Time: 1:39 PM
 */

namespace EONConsulting\PHPSaasWrapper\src\OAuth;


interface ServiceAdapter {

    public function getAuthorizeUrl();
    public function getUserByCode($code);

}