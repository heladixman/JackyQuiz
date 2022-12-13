<?php

namespace App\Models;
use CodeIgniter\Model;

class MDosen extends Model
{
    protected $table = 'dosen';

    public function getDosen($id = false){
        if ($id === false){
            $builder = $this->table('dosen')->select('*');
            return $builder;
        }else{
            return $this->table('dosen')->where('id',$id)->get()->getRowArray();
        }
    }

    public function newDosen($data){
        $query = $this->db->table('dosen')->insert($data);
        return $query;
    }

    public function updateDosen($data, $id){
        $query = $this->db->table('dosen')->update($data, array('mahasiswaID' => $id));
        return $query;
    }

    public function deleteDosen($id){
        $query = $this->db->table('dosen')->delete(array('mahasiswaID' => $id));
        return $query;
    }
    
    public function searchDataDosen($keyword){
        return $this->table('dosen')->like('userName', $keyword)->orLike('userAddress', $keyword)->orLike('Jurusan', $keyword)->orLike('userSex', $keyword)->orLike('userCode', $keyword)->orLike('userPhone', $keyword);
    }
}
