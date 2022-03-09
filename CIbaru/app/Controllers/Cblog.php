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

	public function create()
	{
		return view('admin/blog/tambahblog');
	}

	public function save()
	{

		$validation = $this->validate([
			'cover' => 'uploaded[cover]|mime_in[cover,image/jpg,image/jpeg,image/gif,image/png]|max_size[cover,4096]'
		]);

		if ($validation == FALSE) {
			$data = array(
				'judul' => $this->request->getPost('judul'),
				'deskripsi'   => $this->request->getPost('deskripsi'),
				'status'   => $this->request->getPost('status'),
			);
		} else {
			$upload = $this->request->getFile('cover');
			$upload->move(WRITEPATH . '../public/image/');

			$data = array(
				'judul' => $this->request->getPost('judul'),
				'deskripsi'    => $this->request->getPost('deskripsi'),
				'status'  => $this->request->getPost('status'),
				'cover'             => $upload->getName(),
			);
		}

		$this->modelBlog->save([
			'judul' => $this->request->getVar('judul'),
			'deskripsi' => $this->request->getVar('deskripsi'),
			'status' => $this->request->getVar('status'),
			'cover' => $this->request->getVar('cover'),
		]);

		return redirect()->to('/Cblog');
	}
}
