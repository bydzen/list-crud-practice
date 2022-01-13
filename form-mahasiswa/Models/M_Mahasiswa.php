<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Mahasiswa extends Model
{
    function __construct()
    {
        $this->db = db_connect();
    }

    function showData()
    {
        return $this->db->table('mahasiswa')->get();
    }

    function saveData($data)
    {
        return $this->db->table('mahasiswa')->insert($data);
    }

    function deleteMahasiswa($nim)
    {
        $this->db->table('mahasiswa')->delete(['nim' => $nim]);
    }

    function dataEdit($nim)
    {
        return $this->db->table('mahasiswa')->getWhere(['nim' => $nim]);
    }
}
