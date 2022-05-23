<?php

namespace App\Controllers;

use App\Models\storyModel;

class Story extends \CodeIgniter\Controller
{
    protected $story;
    public function __construct()
    {
        $this->story = new storyModel();
        if($this->request->isAJAX()){

        }

    }

    /**
     * @throws \ReflectionException
     */
    public function create()
    {
        $isValidForm = $this->validate([
            "title_en"=>"required",
            "description_en"=>"required",
            "title_es"=>"required",
            "description_es"=>"required"
            ]);
        if($isValidForm){
            $insert = $this->request->getPost();
            $insert["created_by"] = session()->get("id_user")??0;
            try {
                $inserted = $this->story->insert($insert);
                $response = ["success"=>true,"message"=>"inserted ${inserted} "];
            } catch (\ReflectionException $e) {
                $response = ["success"=>false,"message"=>"No se pudo insertar"];
                $this->response->setStatusCode(400);

            }

        }else{
            $this->response->setStatusCode(400);
            $response =["success"=>false,"message"=>"Verifique sus  datos"];

        }
        return $this->response->setJSON($response);

    }
    public function read($type,$search)
    {

    }
    public function edit()
    {

    }
    public function delete()
    {

    }

}