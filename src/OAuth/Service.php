<?php
/**
 * Created by PhpStorm.
 * User: vamoose
 * Date: 2016/11/28
 * Time: 1:24 PM
 */

namespace EONConsulting\PHPSaasWrapper\src\OAuth;


use Guzzle\Http\Client;

class Service implements ServiceAdapter {

    protected $client;

    public function __construct(Client $client = null) {
        $this->client = $client;
    }

    public function authorizeUrl() {
        return $this->getAuthorizeUrl();
    }

    public function getUser($code) {
        return $this->getUserByCode($code);
    }

    public function getAuthorizeUrl() {
        return '';
    }

    public function getUserByCode($code) {
        return [];
    }

    public function setClient($client) {
        $this->client = $client;
    }

}