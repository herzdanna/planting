<?php

namespace App\Controllers;
use MailchimpMarketing\ApiClient;

class Page extends BaseController
{

    /*******************************  TEMPLATE  ************************************/

    protected $header;

    public  function __construct(){
        $this->header = view('template/header');
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
        $title = ['','Home','Work','About Us','Join Us','Our Stories','Donate', 'Resources','Our Offices','Donate USA','Donate Canada','Blog','Privacy Policies'];
        return ['title' => $title[$key]];
    }

    private function setTitleAdmin($key){
        $title = ['','Administrator','Sliders','About Us','Join Us','Our Stories','Donate', 'Resources','Our Offices','Donate USA','Donate Canada'];
        return ['title' => $title[$key]];
    }
    private function setFooter(Array $data = []){
        return view("template/footer");
    }
    
    /*******************************  VIEWS  FRONT END ************************************/

    public function index()
    {
        /*$facebook_page_id           = '523646864415597';
        $facebook_app_secret        = '4261c10237190039535c5f0b1211b2a5';
        $facebook_app_id            = '426190352528999';
        $facebook_graph_version     = 'v12.0';

        $fb = new \Facebook\Facebook([
            'app_id' => $facebook_app_id,
            'app_secret' => $facebook_app_secret,
            'default_graph_version' => $facebook_graph_version
        ]);

        $accessToken = "EAAGDniyRtmcBAE9ezXKihjIDTzrORttUZBAZCiymuHLHKPayjpRPOkSexOh3QpRJGJny9azHOwutgSmtnvIgfSnMm0TGZA0sgxRHzhZAcbELOY9fuZCrtoKUKFxJqXOPISVZC8v7mznI4lXePRmBL78nq48PRq1mbn2mhDkC5yusDBsJIFKYkdqBejmYx12ZAyhZCyvUOeSQ7S9iszVg32PI";
        //$accessToken = "426190352528999|hrlBDWS1CwP4guolWcyvb7PeKUs";
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

        $data = $response->getDecodedBody(); */

        return $this->setHeader($this->setTitle(1)).view('home').$this->setFooter();
    }

    public function work(string $section = 'what')
    {
        if($section == 'what' || $section == 'where'){
            return $this->setHeader(['title' => ucfirst($section)]).view($section).view('currentPrograms').$this->setFooter();
        }else{
            return $this->setHeader(['title' => ucfirst($section)]).view($section).$this->setFooter();
        }
    }

    public function about()
    {
        return $this->setHeader($this->setTitle(3)).view('aboutus').$this->setFooter();
    }

    public function join(){
        return $this->setHeader($this->setTitle(4)).view('joinus').$this->setFooter();
    }

    public function stories(){
        return $this->setHeader($this->setTitle(5)).view('ourstories').$this->setFooter();
    }
    public function blog(){
        return $this->setHeader($this->setTitle(11)).view('blog').$this->setFooter();
    }

    public function donate(){
        return $this->setHeader($this->setTitle(6)).view('donate').$this->setFooter();
    }

    public function resources(){
        return $this->setHeader($this->setTitle(7)).view('resources').$this->setFooter();
    }

    public function legal(){
        return $this->setHeader($this->setTitle(8)).view('ouroffices').$this->setFooter();
    }

    public function donateUsa(){
        return $this->setHeader($this->setTitle(9)).view('donateusa').$this->setFooter();
    }

    public function donateCanada(){
        return $this->setHeader($this->setTitle(9)).view('donatecanada').$this->setFooter();
    }

    public function privacyPolicies(){
        return $this->setHeader($this->setTitle(12)).view('privacyPolicies').$this->setFooter();
    }

    public function mailchimp(){
        $subscribeMail  = $this->request->getPost('subscribeMail');

        if($subscribeMail == ""){
            echo "ingrese un correo para suscribirse";
        }else{
            $list_id = 'bab30fccdb';
            $apiKey = '113fc9ea41471f5076d28043a89ac72b-us17';
            $prefix ='us17';
            $mailChimp = new ApiClient();
            $params =[
                "apiKey" => $apiKey,
                "server"=> $prefix
            ];
           
            $mailChimp->setConfig($params);

            $response = $mailChimp->lists->addListMember($list_id, [
                "email_address" => $subscribeMail,
                "status" => "subscribed",
            ]);

            if(isset($response->id)){
                return $this->response->setJSON(["success" => TRUE]);
            }
            return $this->response->setJSON(["success" => FALSE]);

        }
    }


    /*******************************  VIEWS  BACK END   ************************************/

    public function login(){
        return view('admin/login');
    }

    public function panel(){
        return $this->setHeaderAdmin($this->setTitleAdmin(1)).view('admin/template/menu').view('admin/panel').$this->footerAdmin;
    }

}
