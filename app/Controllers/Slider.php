<?php

namespace App\Controllers;

use App\Models\SliderModel;
use CodeIgniter\HTTP\Files\UploadedFile;

class Slider extends \CodeIgniter\Controller
{

    protected $model;
    public function __construct()
    {
        $this->model = new SliderModel();

    }


    public function update($field)
    {

        $valid = $this->validate([
            "id"=>"required",
            "value"=>"required"
            ]);
        if($valid){
            if(!is_null($this->request->getFile("slider"))){

                $routeImg = $this->saveFile($this->request->getFile("slider"));
                $success = $this->model->update($this->request->getPost("id"),[$field=>$routeImg]);
                $return = ["success"=>$success];
            }else{
                $success = $this->model->update($this->request->getPost("id"),[$field=>$this->request->getPost("value")]);
                $return = ["success"=>$success];
            }

        }else{
            $this->response->setStatusCode(400);
            $return = ["success"=>"false","message"=>"Bad request"];
        }
        return $this->response->setJSON($return);
    }
    private function saveFile(UploadedFile $file): string
    {
        $newName = $file->getRandomName();
        $path = "/assets/img/home/";
        $file->move(FCPATH.$path,$newName);

        return $path.$newName;


    }

}