<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\MJadwal;

class Jadwal extends BaseController
{
    public function __construct(){
        $this->jadwal = new MJadwal();
    }

    public function index()
    {
        $keyword= $this->request->getPost('keyword');
        if($keyword){
            $model =  $this->jadwal->searchDataJadwal($keyword);
        }else{
            $model =  $this->jadwal;
        };

        $data = [
            'jadwal'        => $model->getJadwal()->paginate(10, 'jadwal'),
            'pager'         => $model->pager,
            'dosen'         => $model->getDosen()->getResult(),
            'matkul'        => $model->getMatkul()->getResult(),
            'breadcrumbs'   => "List Jadwal",
            'title'         => "List Jadwal | Jacky Quiz",
            'addNewButton'  => "Tambah Jadwal",
            'content'       => "pages/Jadwal"
        ];

        return view('components/componentsWrapper',$data);
    }

    public function newJadwal(){
        $session    = session();
        $model      = new MJadwal();
        
        $data = [
            'dosenJID'     => $this->request->getPost('dosenID'),
            'matKulJID'    => $this->request->getPost('matKulID'),
            'jadwalDay'    => $this->request->getPost('jadwalDay'),
            'jadwalDate'   => $this->request->getPost('jadwalDate'),
            'jadwalTime'   => $this->request->getPost('jadwalTime')
        ];

        $saveNewJadwal = $model->newJadwal($data);
        session()->setFlashData('message', 'Data Jadwal berhasil ditambahkan');
        return redirect()->to(base_url(). '/jadwal');
    }

    public function updateJadwal(){
        $session = session();
        $model = new MJadwal();
        $id = $this->request->getPost('jadwalID');

        $data = array(
            'dosenJID'     => $this->request->getPost('dosenID'),
            'matKulJID'    => $this->request->getPost('matKulID'),
            'jadwalDay'    => $this->request->getPost('jadwalDay'),
            'jadwalDate'   => $this->request->getPost('jadwalDate'),
            'jadwalTime'   => $this->request->getPost('jadwalTime')
        );

        $updateJadwal = $model->updateJadwal($data, $id);

        session()->setFlashData('message', 'Data Jadwal berhasil diperbarui');
        return redirect()->to(base_url(). '/jadwal');

    }

    public function deleteJadwal(){
        $session = session();
        $model = new MJadwal();
        $id = $this->request->getPost('jadwalID');
        
        $removeJadwal = $model->deleteJadwal($id);

        session()->setFlashData('message', 'Data Jadwal berhasil dihapus');
        return redirect()->to(base_url(). '/jadwal');
    }
}
