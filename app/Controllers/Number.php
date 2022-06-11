<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\NumberModel;

class Number extends BaseController
{
    protected $model;
    public function __construct(){
        $this->model = new NumberModel();
    }

    /**
     * @throws \ReflectionException
     */
    public function update()
    {
        $id = $this->request->getPost("id");
        $field = $this->request->getPost("field");
        $value = $this->request->getPost("value");
        try {
            $success = $this->model->update($id,[$field=>$value]);
        }catch (\ReflectionException $e){
            $success = false;
        }
        return $this->response->setJSON(["success"=>$success]);


    }
}
