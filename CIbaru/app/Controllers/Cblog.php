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
		$validation = $this->validate([
			'cover' => 'uploaded[cover]|mime_in[cover,image/jpg,image/JPG,image/jpeg,image/gif,image/png]|max_size[cover,10000]'
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

		// {
		// 	$id_program = url_title($this->request->getVar('judul'), '-', true);
		// 	$this->modelBlog->save([
		// 		'id' => $id_program,
		// 		'judul' => $this->request->getVar('judul'),
		// 		'deskripsi' => $this->request->getVar('deskripsi'),
		// 		'status' => $this->request->getVar('status'),
		// 		'cover' => $this->request->getVar('cover')
		// 	]);

		// 	session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

		// 	return redirect()->to('/Cblog');
		// }

		//ini baru ke 2
		// $id_program		= $this->request->getPost('id_program');
		// $judul	= $this->request->getPost('judul');
		// $cover	= $this->request->getPost('cover');
		// $deskripsi		= $this->request->getPost('deskripsi');
		// $status	= $this->request->getPost('status');

		// $data = [
		// 	'judul'		=> $judul,
		// 	'cover'		=> $cover,
		// 	'deskripsi'	=> $deskripsi,
		// 	'status' => $status,
		// ];

		// $result = $this->modelBlog->update($id_program, $data);
		// if ($result) {
		// 	echo "User details are updated successfully.";
		// } else {
		// 	echo "Something went wrong";
		// }

		//iniiii keberapa
		//sebelumnya DENNN
		// $id_program = $this->request->getVar('id_program');
		// $data = [
		// 	'id_program' => $this->request->getVar('id_program'),
		// 	'judul'  => $this->request->getVar('judul'),
		// 	'cover'  => $this->request->getVar('cover'),
		// 	'deskripsi'  => $this->request->getVar('deskripsi'),
		// 	'status'  => $this->request->getVar('status'),
		// ];
		// $this->modelBlog->update($id_program, $data);
		// return redirect()->to('/Cblog');

		$id_program = $this->input->post('id_program');
		$judul = $this->input->post('judul');
		$cover = $this->input->post('cover');
		$deskripsi = $this->input->post('deskripsi');
		$status = $this->input->post('status');

		$data = array(
			'judul' => $judul,
			'cover' => $cover,
			'deskripsi' => $deskripsi,
			'status' => $status,
		);

		$where = array(
			'id_program' => $id_program
		);

		$this->Mblog->update_data($where, $data, 'blog');
		// redirect('/admin/update');
		return redirect()->to('/Cblog');
	}
}
