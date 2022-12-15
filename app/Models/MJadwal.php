<?php

namespace App\Models;
use CodeIgniter\Model;

class MJadwal extends Model
{
    protected $table = 'jadwal';

    public function getDosen(){
        $query = $this->db->table('dosen');
        return $query->get();
    }

    public function getMatkul(){
        $query = $this->db->table('matkul');
        return $query->get();
    }

    public function getJadwal($id = false){
        if ($id === false){
            $builder = $this->table('jadwal')->select('*');
            $builder->join('dosen', 'dosenID = dosenJID', 'left');
            $builder->join('matkul', 'matKulID = matkulJID', 'left');
            return $builder;
        }else{
            return $this->table('jadwal')->where('jadwalID',$id)->get()->getRowArray();
        }
    }

    public function newJadwal($data){
        $query = $this->db->table('jadwal')->insert($data);
        return $query;
    }

    public function updateJadwal($data, $id){
        $query = $this->db->table('jadwal')->update($data, array('jadwalID' => $id));
        return $query;
    }

    public function deleteJadwal($id){
        $query = $this->db->table('jadwal')->delete(array('jadwalID' => $id));
        return $query;
    }
    
    public function searchDataJadwal($keyword){
        return $this->table('jadwal')->like('dosenName', $keyword)->orLike('dosenAddress', $keyword)->orLike('dosenSex', $keyword)->orLike('dosenCode', $keyword)->orLike('dosenPhone', $keyword);
    }
}
