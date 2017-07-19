<?php
App::uses('AppController', 'Controller');
require_once VENDOR_PATH . 'firebase/php-jwt/Authentication/JWT.php';
use FireBase\PhpJwt\Authentication\JWT;

class UsersController extends AppController {
    public function login() {
        if ($this->Auth->login()) {
            $user = $this->Auth->user();
            $token = JWT::encode($user, Configure::read('Security.salt'));

            $response = Configure::read('ApiResponse.Success');
            $response['data'] = compact('user', 'token');
            $this->buildApiResponseData($response);
        } else {
            $response = Configure::read('ApiResponse.Fail');
            $response['code'] = 401;
            $response['message'] = __('Unauthorized');
            $this->buildApiResponseData($response);
        }
    }
}