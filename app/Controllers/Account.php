<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\Restful\ResourceController;
use CodeIgniter\API\ResponseTrait;

class Account extends ResourceController
{
    private $tourist;
    public function __construct() {
        $this->tourist = new \App\Models\TouristAccount();
    }

    public function Register_Tourist()
    {
        $random = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstvwxyzABCDEFGHIJKLMNOPQRSTVWXYZ", 60)), 0, 20);
        $json = $this->request->getJSON();
        $data = [
            'username' => $json->username,
            'email' => $json->email,
            'password' => password_hash($json->password, PASSWORD_DEFAULT),
            'token' => sha1($random),
            'phone' => $json->phone,
            'address' => $json->address,
            'status' => 'UNVERIFIED'
        ];

        static $dup_email = false, $dup_phone = false, $dup_uname = false;

        $retrieve = $this->tourist->select('username, email, phone')->FindAll();
        
        foreach ($retrieve as $exist) {
            if ($data['username'] == $exist['username']) {
                $dup_uname = true;
                $message = 'A user already exists with that username.';
                return $this->failResourceExists($message);
            }
            else if ($data['email'] == $exist['email']) {
                $dup_email = true;
                $message = 'A user already exists with that email.';
                return $this->failResourceExists($message);
            }
            else if ($data['phone'] == $exist['phone']) {
                $dup_phone = true;
                $message = 'A user already exists with that phone.';
                return $this->failResourceExists($message);
            }
        }
        if (!$dup_email && !$dup_phone && !$dup_uname) {

            $r = $this->tourist->save($data);
            return $this->respond($r, 200);
        }

    }

}
