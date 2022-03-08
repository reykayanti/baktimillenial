<?php

namespace App\Models;

use CodeIgniter\Model;

class Mblog extends Model
{
    protected $table = 'blog'; //nama tablenya
    protected $useTimestamps = true; //biar tanggal created_at dan updated_at nya otomatis keisi tanpa ditulis
    protected $allowedFields = ['judul', 'deskripsi', 'status', 'cover']; //yang boleh diisi

    public function tampilBlog(){
        $query= $this->db->query("SELECT * FROM blog");
        return $query; 
    }
    public function deleteBlog($id_program){

        $query = $this->db->table('blog')->delete(array('id_program' => $id_program));
        return $query;
    } 
}

