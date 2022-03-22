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
		// <<<<<<< HEAD
		// if (!$this->validate([
		// 	'judul' => 'required|is_unique[blog.judul]'
		// ])) {
		// 	return redirect()->to('/Cblog');
		// }
		// =======

		$validation = $this->validate([
			'cover' => 'uploaded[cover]|mime_in[cover,image/jpg,image/jpeg,image/gif,image/png]|max_size[cover,4096]'
		]);

		if ($validation == FALSE) {
			$this->modelBlog->save([
				'judul' => $this->request->getVar('judul'),
				'deskripsi' => $this->request->getVar('deskripsi'),
				'status' => $this->request->getVar('status')
			]);
		} else {
			$upload = $this->request->getFile('cover');
			$upload->move('image');

			$this->modelBlog->save([
				'judul' => $this->request->getVar('judul'),
				'deskripsi' => $this->request->getVar('deskripsi'),
				'status' => $this->request->getVar('status'),
				'cover' =>  $upload->getName()
			]);
		}

		return redirect()->to('/Cblog');
	}

	public function delete($id_program)
	{
		$this->modelBlog->delete($id_program);
		return redirect()->to('/Cblog');
	}

	public function edit()
	{
	}
}
