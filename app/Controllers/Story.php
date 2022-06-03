<?php

namespace App\Controllers;

use App\Models\storyModel;

class Story extends \CodeIgniter\Controller
{
    protected $story;
    public function __construct()
    {
        $this->story = new storyModel();


    }

    /**
     * @throws \ReflectionException
     */
    public function create()
    {
        $isValidForm = $this->validate([
            "banner"=>"required",
            "title_en"=>"required",
            "description_en"=>"required",
            "title_es"=>"required",
            "description_es"=>"required"
            ]);
        if($isValidForm){
            $insert = $this->request->getPost();
            $insert["created_by"] = session()->get("credentials")["id"];
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
    public function read($id= null,$limit= 0,$search = null)
    {
        $this->story->find($story);
        return $this->response->setJSON([]);

    }
    public function getStoriesToWeb(){

    }
    public function getAll()
    {
        return $this->story->findAll();
    }
    public function update()
    {

        $data = $this->request->getPost();
        $valid = $this->validate([
            "id_story"=>"required",
            "field"=>"required",
            "value"=>"required"
        ]);
        if($valid){
            $this->story->update($data["id_story"],[$data["field"]=>$data["value"]]);
        }

    }
    public function delete()
    {
        return $this->story->delete($this->request->getPost("id_story"));

    }



}