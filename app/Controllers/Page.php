<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function login()
    {
        return view('page/login');
    }
}
