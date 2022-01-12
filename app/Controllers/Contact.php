<?php

namespace App\Controllers;

class Contact extends BaseController
{

    /*******************************  PROCESS EMAIL CONTACT  ************************************/


    public function index()
    {
        $name = $this->request->getPost('name');
        $mail    = $this->request->getPost('mail');
        $subject = $this->request->getPost('subject');
        $message = $this->request->getPost('message');

        $email = \Config\Services::email();

        $email->setFrom($mail, 'Plantando Semillas');
        $email->setTo('gerber.zirion@gmail.com');
        $email->setSubject($subject);
        $email->setMessage($message);



        if($email->send()){
            echo 'success';
        }else{
            echo 'error';
        }

    }


}
