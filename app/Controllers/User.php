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
        $valid = $this->validate([
            "email"=>"required",
            "password"=>"required"]);
        $user= $this->request->getPost();
        $available = $this->availableUser($user);
        if($valid && $available){
            $user["password"] = $this->setPassword($user["password"]);
            $user["created_by"] = session()->get("credentials")["id"];
            try{
                $return= ["success"=>true,"message"=> $this->user->insert($user)];
            }
            catch (\ReflectionException $e) {
                $this->response->setStatusCode(400);
                $return = ["success" => false, "message" => $e];

            }
        }else{
            $return = ["success"=>false, "message"=>"Ya existe el usuario"];
        }
        return $this->response->setJSON($return);






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
        $valid =$this->validate([
            "email"=>"required",
            "password"=>"required"
        ]);

        $user  = $this->user->getWhere(["email"=>$this->request->getPost("email")])->getResult("array")[0];

        if(!password_verify($this->request->getPost("password"),$user["password"] )){
            return $this->response->setStatusCode(400)->setJSON(["success"=>false,"message"=>"Verifique credenciales"]);
        }
        session()->set("credentials",$user);
        return $this->response
        ->setJSON(["success"=>true,"user"=>session("credentials")]);
    }
    public function logout()
    {
        session()->destroy();
        return redirect()->to("login");
    }

    /**
     * @param string $password
     * @return string
     */
    private function setPassword($password): string
    {
        return password_hash($password,PASSWORD_DEFAULT);
    }

    /**
     * @param array $user
     * @return bool
     */
    private function availableUser($user): bool
    {
        $available = true;
        $found = $this->user->getWhere(["email  "=>$user["email"]])->getResult("array");
        if(count($found)>0){
            $available = false;
        }
        return $available;
    }

}