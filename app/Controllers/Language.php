<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Language extends BaseController
{
    public function index()
    {
        $session = session();
        $locale = $this->request->getLocale();
        $session->remove("lang");
        $session->set("lang",$locale);
        $url = $this->request->getHeaderLine("referer");
        return redirect()->to($url);
        //
    }
}
