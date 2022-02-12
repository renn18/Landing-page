<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function login()
    {
        return view('page/login');
    }
}
