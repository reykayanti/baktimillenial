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
		// if (!$this->validate([
		// 	'judul' => 'required|is_unique[blog.judul]'
		// ])) {
		// 	return redirect()->to('/Cblog');
		// }
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
		return redirect()->to('/Cblog');
	}
}
