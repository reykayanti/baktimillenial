<?php

namespace App\Controllers;

use App\Models\Mblog;
use App\Controllers\BaseController;

class Cdetailartikel extends BaseController
{
    protected $modelBlog;

    public function __construct()
    {
        $this->modelBlog = new Mblog();
    }
    public function index()
    {
        $blog = $this->modelBlog->findAll();
        $blog = [
            'blog'    => $blog
        ];
        return view('frontend/v_detailartikel.php', $blog);
    }

    public function detail($id_program)
    {
        $id = $this->request->getVar('id_program');
        $data = [
            'id_program' => $this->request->getVar('id_program'),
            'judul'  => $this->request->getVar('judul'),
            'cover'  => $this->request->getVar('cover'),
            'deskripsi'  => $this->request->getVar('deskripsi'),
            'status'  => $this->request->getVar('status'),
        ];
        $this->modelBlog->detail($id_program, $data);
        return redirect()->to('/Cdetailartikel');
    }
}
