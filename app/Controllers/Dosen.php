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
            $model =  $this->dosen->searchDataMhs($keyword);
        }else{
            $model =  $this->dosen;
        };

        $data = [
            'dosen'     => $model->getDosen()->paginate(10, 'dosen'),
            'pager'         => $model->pager,
            'breadcrumbs'   => "List Dosen",
            'title'         => "List Dosen | Hela Quiz",
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
        $id = $this->request->getPost('Mid');

        $data = array(
            'userCode'      => $this->request->getPost('userCode'),
            'userName'      => $this->request->getPost('Mname'),
            'Mjurusan'      => $this->request->getPost('jurusan'),
            'userSex'       => $this->request->getPost('jenisKelamin'),
            'userPhone'     => $this->request->getPost('userPhone'),
            'userAddress'   => $this->request->getPost('userAddress')
        );

        $updateMahasiswa = $model->updateDosen($data, $id);

        session()->setFlashData('message', 'Data Dosen berhasil diperbarui');
        return redirect()->to(base_url(). '/dosen');

    }

    public function deleteDosen(){
        $session = session();
        $model = new MDosen();
        $id = $this->request->getPost('idMahasiswa');
        
        $removeMahasiswa = $model-> deleteDosen($id);

        session()->setFlashData('message', 'Data Dosen berhasil dihapus');
        return redirect()->to(base_url(). '/dosen');
    }
}
