<?php
/**
 * Created by PhpStorm.
 * User: vamoose
 * Date: 2016/11/29
 * Time: 7:58 AM
 */

namespace EONConsulting\PHPSaasWrapper\src\OAuth\Services;


use EONConsulting\PHPSaasWrapper\src\OAuth\Service;

class Udacity extends Service {

    public function getAuthorizeUrl() {
//        return "https://www.facebook.com/dialog/oauth?client_id=994353767267416&redirect_uri=http://eon.dev/_eon_authenticate/callback&scope=email,public_profile";
        return '';
    }

    public function getUserByCode($code) {
//        $token = $this->getAccessTokenFromCode($code);
//
//        return $this->normalizeUser($this->getUserByToken($token));
        return '';
    }

    protected function getAccessTokenFromCode($code) {
        return '';
//        $response = $this->client->request('GET', 'https://graph.facebook.com/v2.3/oauth/access_token', [
//            'query' => [
//                'client_id' => '994353767267416',
//                'client_secret' => 'b052197806a975a532d520cf0028d8fb',
//                'redirect_uri' => 'http://eon.dev/_eon_authenticate/callback',
//                'code' => $code,
//            ]
//        ])->getBody();
//
//        return json_decode($response)->access_token;
    }

    protected function getUserByToken($token) {
        $response = $this->client->request('GET', 'https://www.udacity.com/public-api/v0/courses', [
//            'query' => [
//                'access_token' => $token,
//                'fields' => 'id,name,email,picture'
//            ],
        ])->getBody();

        return json_decode($response);
    }

    protected function normalizeUser($user) {
//        return (object) [
//            'id' => $user->id,
//            'name' => $user->name,
//            'email' => $user->email,
//            'photo' => $user->picture->data->url,
//        ];
    }

}