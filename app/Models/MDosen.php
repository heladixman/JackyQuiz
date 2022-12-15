<?php

namespace App\Models;
use CodeIgniter\Model;

class MDosen extends Model
{
    protected $table = 'dosen';

    public function getDosen($id = false){
        if ($id === false){
            return $this->table('dosen')->orderBy('dosenID', 'DESC')->get();
        }else{
            return $this->table('dosen')->where('dosenID', $id)->get()->getRowArray();
        }
    }

    public function getMatkul(){
        $query = $this->db->table('matkul');
        return $query->get();
    }

    public function newDosen($data){
        $query = $this->db->table('dosen')->insert($data);
        return $query;
    }

    public function updateDosen($data, $id){
        $query = $this->db->table('dosen')->update($data, array('dosenID' => $id));
        return $query;
    }

    public function deleteDosen($id){
        $query = $this->db->table('dosen')->delete(array('dosenID' => $id));
        return $query;
    }
    
    public function searchDataDosen($keyword){
        return $this->table('dosen')->like('dosenName', $keyword)->orLike('dosenAddress', $keyword)->orLike('dosenSex', $keyword)->orLike('dosenCode', $keyword)->orLike('dosenPhone', $keyword);
    }
}
