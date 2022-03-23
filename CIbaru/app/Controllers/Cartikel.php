<?php

namespace App\Controllers;
use App\Models\Mblog;

class Cartikel extends BaseController
{
    protected $modelBlog;
    
    public function __construct()
	{
		$this->modelBlog = new Mblog();        
	}

    public function artikel()
    {
        $blog = $this->modelBlog->findAll();
        $blog = [
            'blog'    => $blog
        ];
        return view('frontend/v_artikel.php', $blog);
    }
}
