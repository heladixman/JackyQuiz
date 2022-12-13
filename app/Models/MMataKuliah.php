<?php

namespace App\Models;
use CodeIgniter\Model;

class MMataKuliah extends Model
{
    protected $table = "matkul";

    public function getMatKul($id = false){
        if ($id === false){
            return $this->table('matkul')->orderBy('matKulID', 'DESC')->get();
        }else{
            return $this->table('matkul')->where('matKulID', $id)->get()->getRowArray();
        }
    }

    public function newMatKul($data){
        $query = $this->db->table('matkul')->insert($data);
        return $query;
    }

    public function updateMatKul($data, $id){
        $query = $this->db->table('matkul')->update($data, array('matKulID' => $id));
        return $query;
    }

    public function deleteMatKul($id){
        $query = $this->db->table('matkul')->delete(array('matKulID' => $id));
        return $query;

    }

    public function searchDataMatKul($keyword){
        return $this->table('matkul')->like('matKulName', $keyword)->orLike('matKulCode', $keyword);
    }
}

?>
