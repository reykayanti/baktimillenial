<?php

namespace App\Controllers;

class Cblog extends BaseController
{
    public function index()
    {
        return view('admin/v_blog_admin.php');
    }
}
