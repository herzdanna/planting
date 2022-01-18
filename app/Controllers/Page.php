<?php

namespace App\Controllers;

class Page extends BaseController
{

    /*******************************  TEMPLATE  ************************************/

    protected $header;
    protected $footer;

    public  function __construct(){
        $this->header = view('template/header');
        $this->footer = view('template/footer');
        $this->headerAdmin = view('admin/template/header');
        $this->footerAdmin = view('admin/template/footer');
    }
    /*******************************  SET TEMPLATE  ********************************/
    private function setHeader($data){
        return view('template/header',$data);
    }

    private function setHeaderAdmin($data){
        return view('admin/template/header',$data);
    }

    private function setTitle($key){
        $title = ['','Home','Work','About Us','Join Us','Our Stories','Donte', 'Resources','Legal Offices','Donate USA','Donate Canada'];
        return ['title' => $title[$key]];
    }

    private function setTitleAdmin($key){
        $title = ['','Administrator','Sliders','About Us','Join Us','Our Stories','Donte', 'Resources','Legal Offices','Donate USA','Donate Canada'];
        return ['title' => $title[$key]];
    }
    
    /*******************************  VIEWS  FRONT END ************************************/

    public function index()
    {
        $facebook_page_id           = '523646864415597';
        $facebook_app_secret        = '4261c10237190039535c5f0b1211b2a5';
        $facebook_app_id            = '426190352528999';
        $facebook_graph_version     = 'v12.0';

        $fb = new \Facebook\Facebook([
            'app_id' => $facebook_app_id,
            'app_secret' => $facebook_app_secret,
            'default_graph_version' => $facebook_graph_version
        ]);

        //$accessToken = "EAAGDniyRtmcBAMaOwgVcrbFm0nvF7cekfjRmnhBWZBA0NFZBXhGdnMlK9hl2NuZAPCuueiQ15DCfvZBVrCxknfX6gFLSg7DmDdJYdMJFA0wb7MW9NYz7ka3WxvtZBGlH1bziRwtWGFAymOy9tUSnabKGY1PYDGGeGXgn5DWjTIS2xKZCg5X8TVFCWZAkqeuBfgJPOZCINsB7VQlpndIT31r4";
        $accessToken = "426190352528999|hrlBDWS1CwP4guolWcyvb7PeKUs";
        try{
            $response = $fb->get( '/'.$facebook_page_id.'/posts?fields=full_picture,message,permalink_url&limit=8', $accessToken);
        }
        catch(Facebook\Exceptions\FacebookResponseException $e) {
            echo 'Graph returned an error: ' . $e->getMessage();
            exit;
        } catch(Facebook\Exceptions\FacebookSDKException $e) {
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
            exit;
        }

        $data = $response->getDecodedBody(); 

        return $this->setHeader($this->setTitle(1)).view('home',$data).$this->footer;
    }

    public function work(string $section = 'what')
    {
        return $this->setHeader(['title' => ucfirst($section)]).view($section).$this->footer;
    }

    public function about()
    {
        return $this->setHeader($this->setTitle(3)).view('aboutus').$this->footer;
    }

    public function join(){
        return $this->setHeader($this->setTitle(4)).view('joinus').$this->footer;
    }

    public function stories(){
        return $this->setHeader($this->setTitle(5)).view('ourstories').$this->footer;
    }

    public function donate(){
        return $this->setHeader($this->setTitle(6)).view('donate').$this->footer;
    }

    public function resources(){
        return $this->setHeader($this->setTitle(7)).view('resources').$this->footer;
    }

    public function legal(){
        return $this->setHeader($this->setTitle(8)).view('ouroffices').$this->footer;
    }

    public function donateUsa(){
        return $this->setHeader($this->setTitle(9)).view('donateusa').$this->footer;
    }

    public function donateCanada(){
        return $this->setHeader($this->setTitle(9)).view('donatecanada').$this->footer;
    }


    /*******************************  VIEWS  BACK END   ************************************/

    public function login(){
        return view('admin/login');
    }

    public function panel(){
        return $this->setHeaderAdmin($this->setTitleAdmin(1)).view('admin/template/menu').view('admin/panel').$this->footerAdmin;
    }

}
