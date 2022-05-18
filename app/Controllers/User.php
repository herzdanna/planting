<?php

namespace App\Controllers;

use App\Models\UserModel;

class User extends \CodeIgniter\Controller
{
    private $user;
    public function __construct()
    {
        $this->user = new UserModel();

    }
    public function create()
    {

        if(!$this->validate())
        $user= $this->request->getPost();
        try{

           return $this->response->setJSON( $this->user->insert($user));
        }
        catch (\ReflectionException $e) {
            return $this->response->setStatusCode(400)->setJSON(["success" => false, "message" => $e]);
        }


    }
    public function update()
    {

    }
    public function read()
    {

    }
    public function delete()
    {

    }
    public function login()
    {
        if ($this->request->isAJAX()) {
            "nada";
        }

        $user  = $this->user->getWhere(["email"=>$this->request->getPost("email")])->getResult("array")[0];

        if(!password_verify($this->request->getPost("password"),$user["password"] )){
            return $this->response->setStatusCode(400)->setJSON(["success"=>false,"message"=>"Verifique credenciales"]);
        }
        session()->set("credentials",$user);
        return $this->response
        ->setJSON(["success"=>true,"user"=>session("credentials")]);
    }

}