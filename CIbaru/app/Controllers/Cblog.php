<?php

namespace App\Controllers;

use App\Models\Mblog;

class Cblog extends BaseController
{

	public function index()
	{
		$model = new Mblog();
		$x['data']  = $model->tampilBlog()->getResultArray();
		return view('admin/blog/v_blog_admin', $x);
	}

	public function tambahDataBlog()
	{

		if ($this->request->getMethod() == 'post') {
			$data = [
				"id_program"    => $this->request->getPost('id_program'),
				"id_user"    => $this->request->getPost('id_user'),
				"judul"    => $this->request->getPost('judul'),
				"cover"    => $this->request->getPost('cover'),
				"deskripsi"    => $this->request->getPost('deskripsi'),
				"status"    => $this->request->getPost('status'),
			];

			$Mblog = new \App\Models\Mblog();
			if ($Mblog->insert($data)) {
				session()->setFlashdata('success', 'Data berhasil disimpan');
				return redirect()->to('admin/v_blog_admin');
			}
		}
		return view('admin/blog/tambahblog');
	}

	// public function hapus($id_program){
	//         $model = new Mblog();
	//         $model->deleteBlog($id_blog);
	//         return redirect()->to('/Cblog');
	//     }

}
