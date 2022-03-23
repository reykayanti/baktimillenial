<?php

namespace App\Controllers;

use App\Models\Mblog;
use App\Controllers\BaseController;

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

		// >>>>>>> c1e21dee4b82f6d0b00a68672b0c33f15148c26f
		$this->modelBlog->save([
			'judul' => $this->request->getVar('judul'),
			'deskripsi' => $this->request->getVar('deskripsi'),
			'status' => $this->request->getVar('status'),
			'cover' => $this->request->getVar('cover'),
		]);

		return redirect()->to('/Cblog');
	}

	public function delete($id_program)
	{
		$this->modelBlog->delete($id_program);
		session()->setFlashdata('pesan', 'Data berhasil ditambahkan');
		return redirect()->to('/Cblog');
	}

	public function edit($id_program)
	{
		$data = [
			'validation' => \Config\Services::validation(),
			'blog' => $this->modelBlog->getPost($id_program)
		];
		return view('admin/blog/editblog', $data);
	}

	public function update($id_program)
	{
		// $blog = url_title($this->request->getVar('judul'), '-', true);
		$this->modelBlog->save([
			'id' => $id_program,
			'judul' => $this->request->getVar('judul'),
			'deskripsi' => $this->request->getVar('deskripsi'),
			'status' => $this->request->getVar('status'),
			'cover' => $this->request->getVar('cover')
		]);

		session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

		return redirect()->to('/Cblog');
	}
}
