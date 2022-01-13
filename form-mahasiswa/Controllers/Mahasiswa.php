<?php

namespace App\Controllers;

use App\Models\M_Mahasiswa;

class Mahasiswa extends BaseController
{
    public function table()
    {
        $mahasiswa = new M_Mahasiswa();
        $data = [
            'showData' => $mahasiswa->showData()->getResult()
        ];

        return view('V_MahasiswaTable', $data);
    }

    public function form()
    {
        helper('form');
        echo view('V_MahasiswaForm');
    }

    public function crud()
    {
        $mahasiswa = new M_Mahasiswa();
        $data = [
            'showData' => $mahasiswa->showData()->getResult()
        ];

        echo view('V_MahasiswaCRUD', $data);
    }

    public function delete()
    {
        $uri = service('uri');
        $nim = $uri->getSegment('3');

        $mahasiswa = new M_Mahasiswa();

        $mahasiswa->deleteMahasiswa($nim);

        return redirect()->to('/crud');
    }

    public function edit()
    {
        $uri = service('uri');
        $nim = $uri->getSegment('3');

        helper('form');

        $mahasiswa = new M_Mahasiswa();

        $dataEdit = $mahasiswa->dataEdit($nim);

        if (count($dataEdit->getResult()) > 0) {
            $row = $dataEdit->getRow();
            $data = [
                'nim' => $nim,
                'nama' => $row->nama,
                'jenis_kelamin' => $row->jenis_kelamin,
                'tempat_lahir' => $row->tempat_lahir,
                'tanggal_lahir' => $row->tanggal_lahir,
                'alamat' => $row->alamat,
                'email' => $row->email,
                'nomor_hp' => $row->nomor_hp,
            ];

            echo view('V_MahasiswaForm', $data);
        }
    }

    public function saveData()
    {
        $data = [
            'nim' => $this->request->getPost('nim'),
            'nama' => $this->request->getPost('nama'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'tempat_lahir' => $this->request->getPost('tempat_lahir'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'alamat' => $this->request->getPost('alamat'),
            'email' => $this->request->getPost('email'),
            'nomor_hp' => $this->request->getPost('nomor_hp'),
        ];

        $mahasiswa = new M_Mahasiswa();

        $save = $mahasiswa->saveData($data);

        if ($save) {
            return redirect()->to('/table');
        } else {
            return redirect()->to('/form');
        }
    }
}
