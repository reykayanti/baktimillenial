<?php

namespace App\Models;

use CodeIgniter\Model;

class Mblog extends Model
{
    public function tampilBlog(){
        $query= $this->db->query("SELECT * FROM blog");
        return $query; 
    }
    public function deleteBlog($id_program){

        $query = $this->db->table('blog')->delete(array('id_program' => $id_program));
        return $query;
    } 
}

