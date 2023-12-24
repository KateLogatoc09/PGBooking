<?php

namespace App\Controllers;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use CodeIgniter\Restful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Controllers\BaseController;

class Mailing extends ResourceController
{
    private $sub;

    public function __construct() {
        $this->sub = new \App\Models\Subscription();
    }
    public function query()
    {
        $mail = $this->request->getVar('email');
        $name = $this->request->getVar('name');
        $sub = $this->request->getVar('subject');
        $message = $this->request->getVar('message');

        $email = new PHPMailer();
        $email->IsSMTP();
        $email->SMTPAuth = false;
        $email->Host = "mailpit";
        $email->Port = 1025;
        $email->setFrom($mail, $name);
        $email->isHTML(false);

        $email->addAddress('cs_pgbooking@sample.com'); 
        $email->Subject = $sub;
        $email->Body = $message;

        $test = $email->send();
        if($test) {
            return $this->respond(['msg' => 'okay'], 200);
        } else {
            return $this->respond(['msg' => 'Unable to send a message at the moment. Please try again later.'], 200);
        }
    }

    public function newsletter() {
        $email = new PHPMailer();
        $email->IsSMTP();
        $email->SMTPAuth = false;
        $email->Host = "mailpit";
        $email->Port = 1025;
        $email->setFrom('from@example.com', 'Mailer');
        $email->isHTML(true);

        $mail = $this->request->getVar('email');

        $email->addAddress($mail); 
        $email->Subject = 'Newsletter';
        $email->Body = 'Thank you for subscribing.';

        $check = $this->sub->where('email', $mail)->First();

        if($check) {
            return $this->respond(['msg'=> 'Duplicate Email.'], 200);
        } else {
            $test = $email->send();
            $save = $this->sub->save(['email' => $mail, 'status' => 'ACTIVE']);
            if($test && $save) {
                return $this->respond(['msg'=> 'okay.'], 200);
            } else {
                return $this->respond(['msg'=> 'Cannot fulfil your request at the moment.'], 200);
            }
        }
    }
}
