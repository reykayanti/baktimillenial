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
		session()->setFlashdata('pesan', 'Data berhasil ditambahkan');
		return redirect()->to('/Cblog');
	}

	public function edit($id_program)
	{
		$blog = $this->modelBlog->where(['id_program' => $id_program])->first();

		$data = [
			'validation' => \Config\Services::validation(),
			'blog' => $blog
		];
		return view('admin/blog/editblog', $data);
	}

	public function update($id_program)
	{
		// $blogLama = $this->modelBlog->getBlog($this->request->getVar('slug'));
		// if ($blogLama['judul'] == $this->request->getVar('judul')) {
		// 	$rule_judul = 'required';
		// } else {
		// 	$rule_judul = 'required|is_unique[blog.judul]';
		// }

		// if ($this->validate([
		// 	'judul' => [
		// 		'rules' => $rule_judul,
		// 		'errors' => [
		// 			'required' => '{field} blog harus diisi',
		// 			'is_unique' => '{field} blog sudah terdaftar'
		// 		]
		// 	]
		// ])) {
		// 	$validation = \Config\Services::validation();
		// 	return redirect()->to('/blog/edit/' . $this->request->getVar('blog'))->withInput()->with('validation', $validation);
		// }

		// $blog = url_title($this->request->getVar('judul'), '-', true);
		// $this->modelBlog->save([
		// 	'id' => $id_program,
		// 	'judul' => $this->request->getVar('judul'),
		// 	'deskripsi' => $this->request->getVar('deskripsi'),
		// 	'status' => $this->request->getVar('status'),
		// 	'cover' => $this->request->getVar('cover')
		// ]);

		// session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

		// return redirect()->to('/Cblog');

		// iniii baruuu

		{
			$id_program = url_title($this->request->getVar('judul'), '-', true);
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
}
