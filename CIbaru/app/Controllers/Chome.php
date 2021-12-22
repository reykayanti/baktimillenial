<?php

namespace App\Controllers;

class Chome extends BaseController
{
    public function index()
    {
        return view('frontend/v_template_front.php');
    }
}
