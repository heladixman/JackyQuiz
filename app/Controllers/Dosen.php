<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\MDosen;

class Dosen extends BaseController
{
    public function __construct(){
        $this->dosen = new MDosen();
    }

    public function index()
    {
        $keyword= $this->request->getPost('keyword');
        if($keyword){
            $model =  $this->dosen->searchDataDosen($keyword);
        }else{
            $model =  $this->dosen;
        };

        $data = [
            'dosen'         => $model->getDosen()->getResult(),
            'pager'         => $model->pager,
            'matkul'        => $model->getMatkul()->getResult(),
            'breadcrumbs'   => "List Dosen",
            'title'         => "List Dosen | Jacky Quiz",
            'addNewButton'  => "Tambah Dosen",
            'content'       => "pages/Dosen"
        ];

        return view('components/componentsWrapper',$data);
    }

    public function newDosen(){
        $session    = session();
        $model      = new MDosen();
        
        $data = [
            'dosenCode'      => $this->request->getPost('dosenCode'),
            'dosenName'      => $this->request->getPost('dosenName'),
            'dosenSex'       => $this->request->getPost('dosenSex'),
            'dosenPhone'     => $this->request->getPost('dosenPhone'),
            'dosenAddress'   => $this->request->getPost('dosenAddress')
        ];

        $saveNewMahasiswa = $model->newDosen($data);
        session()->setFlashData('message', 'Data Dosen berhasil ditambahkan');
        return redirect()->to(base_url(). '/dosen');
    }

    public function updateDosen(){
        $session = session();
        $model = new MDosen();
        $id = $this->request->getPost('dosenID');

        $data = array(
            'dosenCode'      => $this->request->getPost('dosenCode'),
            'dosenName'      => $this->request->getPost('dosenName'),
            'dosenSex'       => $this->request->getPost('dosenSex'),
            'dosenPhone'     => $this->request->getPost('dosenPhone'),
            'dosenAddress'   => $this->request->getPost('dosenAddress')
        );

        $updateMahasiswa = $model->updateDosen($data, $id);

        session()->setFlashData('message', 'Data Dosen berhasil diperbarui');
        return redirect()->to(base_url(). '/dosen');

    }

    public function deleteDosen(){
        $session = session();
        $model = new MDosen();
        $id = $this->request->getPost('dosenID');
        
        $removeMahasiswa = $model->deleteDosen($id);

        session()->setFlashData('message', 'Data Dosen berhasil dihapus');
        return redirect()->to(base_url(). '/dosen');
    }
}
