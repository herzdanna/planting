<?php

namespace App\Controllers;

use App\Models\NumberModel;
use App\Models\SliderModel;
use App\Models\storyModel;
use App\Models\UserModel;
use CodeIgniter\Controller;

class Admin extends Controller
{
    /**
     * @var string
     */
    private $footerAdmin;

    public function __construct()
    {
        $this->footerAdmin = view('admin/template/footer');

    }
    private function setHeaderAdmin($data){
        return view('admin/template/header',$data);
    }

    private function setTitleAdmin($key){
        $title = ['','Administrator','Users','Sliders','numbers-what','stories','Our Stories','Donate', 'Resources','Our Offices','Donate USA','Donate Canada'];
        return ['title' => $title[$key]];
    }

    public function dashboard()
    {
        return view("");
    }

    public function login(){
        return view('admin/login');
    }

    public function panel(){
        return $this->setHeaderAdmin($this->setTitleAdmin(1)).view('admin/template/menu').view('admin/panel').$this->footerAdmin;
    }

    public function user(){
        $data["users"] = (new UserModel)->findAll();
        return $this->setHeaderAdmin($this->setTitleAdmin(2))
            .view('admin/template/menu')
            .view('admin/user',$data)
            .$this->footerAdmin;
    }

    public function slider(){
        $data["sliders"] = (new SliderModel)->findAll();
        return $this->setHeaderAdmin($this->setTitleAdmin(3)).view('admin/template/menu').view('admin/slider',$data).$this->footerAdmin;
    }

    public function numberswhat(){
        $model = (new NumberModel);
        $data =[
            "numbers" => $model->getWhere(["page"=>"home"])->getResult("array"),
            "what" => $model->getWhere(["page"=>"what"])->getResult("array")
        ];
        return $this->setHeaderAdmin($this->setTitleAdmin(4)).view('admin/template/menu').view('admin/numberWhat',$data).$this->footerAdmin;
    }

    public function post (){
        $data = [
            "stories"=> (new storyModel)->findAll()
        ];
        return $this->setHeaderAdmin($this->setTitleAdmin(5)).view('admin/template/menu').view('admin/post',$data).$this->footerAdmin;
    }

}