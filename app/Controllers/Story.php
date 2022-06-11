<?php

namespace App\Controllers;

use App\Models\storyModel;
use CodeIgniter\HTTP\Files\UploadedFile;

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
            "title_en"=>"required",
            "description_en"=>"required",
            "title_es"=>"required",
            "description_es"=>"required"
            ]);
        if($isValidForm){
            if(!is_null($this->request->getFile("banner"))){
                $routeImg = $this->saveFile($this->request->getFile("banner"));
            }

            $insert = $this->request->getPost();
            $insert["created_by"] = session()->get("credentials")["id"];
            $insert["routeImg"] = $routeImg;
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
    private function saveFile(UploadedFile $file): string
    {
        $newName = $file->getRandomName();
        $path = "/assets/img/stories/";
        $file->move(FCPATH.$path,$newName);

        return $path.$newName;


    }



}