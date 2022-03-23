<?php

namespace App\Controllers;
use App\Models\Mblog;

class Chome extends BaseController
{
    protected $modelBlog;
    

    public function __construct()
	{
		$this->modelBlog = new Mblog();        
	}

    public function index()
    {
        
        return view('frontend/v_home.php');
    }

    public function login()
    {
        return view('frontend/v_login');
    }

}
