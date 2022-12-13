<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\MMataKuliah;

class Matakuliah extends BaseController
{
    public function __construct(){
        $this->matakuliah = new MMataKuliah();
    }

    public function index(){
        // $model = new MMataKuliah();

        $keyword = $this->request->getPost('keyword');
        if($keyword){
            $model = $this->matakuliah->searchDataMatKul($keyword);
        }else{
            $model = $this->matakuliah;
        };
        
        $data = [
            'mataKuliah'    => $model->getMatKul()->getResult(),
            'breadcrumbs'   => "List Mata Kuliah",
            'title'         => "List Mata Kuliah | Jacky Quiz",
            'addNewButton'  => "Tambah Mata Kuliah",
            'content'       => 'pages/MataKuliah'
        ];

        return view('components/componentsWrapper',$data);
    }

    public function newMatKul(){
        $session = session();

        //save data
        $data = [
            'matKulCode' => $this->request->getPost('codeMatKul'),
            'matKulName' => $this->request->getPost('NameMatKul'),
        ];

        $saveNewRecordJurusan = $this->matakuliah->newMatKul($data);

        session()->setFlashData('message', 'Data berhasil diinput');
        return redirect()->to(base_url(). '/matakuliah');
    }

    public function updateMatKul(){
        $model = new MMataKuliah();
        $id = $this->request->getPost('matKulID');
        $data = array(
            'matKulCode' => $this->request->getPost('matKulCode'),
            'matKulName' => $this->request->getPost('matKulName'),
        );

        $model->updateMatKul($data, $id);
        session()->setFlashData('message', 'Data berhasil diperbarui');
        return redirect()->to(base_url(). '/matakuliah');
    }

    public function deleteMatKul(){
        $model = new MMataKuliah();
        $id = $this->request->getPost('matKulID');
        $model->deleteMatKul($id);

        session()->setFlashdata('message', 'Data berhasil Dihapus!');
        return redirect()->to('/matakuliah');
    }
}
