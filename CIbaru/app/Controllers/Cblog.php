<?php

namespace App\Controllers;

use App\Models\Mblog;

class Cblog extends BaseController
{

	public function __construct()
	{
		$this->modelBlog = new Mblog();
	}

	public function index()
	{
		$model = new Mblog();
		$x['data']  = $model->tampilBlog()->getResultArray();
		return view('admin/blog/v_blog_admin', $x);
	}

	public function create(){
		return view('admin/blog/tambahblog');
	}

	public function save(){
		$this->modelBlog->save([
			'judul' => $this->request->getVar('judul'),
			'deskripsi' => $this->request->getVar('deskripsi'),
			'status' => $this->request->getVar('status'),
			'cover' => $this->request->getVar('cover'),
		]);

		return redirect()->to('/Cblog');
	}
}
