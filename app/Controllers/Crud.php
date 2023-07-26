<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Crud extends BaseController
{
    protected $unissula;
    public function __construct()
    {
        $this->unissula = new MahasiswaModel();
    }
    public function index()
    {
        return view('crud/view');
    }
    public function tambah(){
        if (isset($_POST['nim'])) {

            // Menampung data input yang dikirim upload.php
            // ke variabel $nim
            $nim = $_POST['nim'];
            $nama = $_POST['nama'];
            $prodi = $_POST['prodi'];
            $universitas = $_POST['universitas'];
            $nomor_handphone = $_POST['nomor_handphone'];

            $upload = [
                'nim' => $nim,
                'nama' => $nama,
                'prodi' => $prodi,
                'universitas' => $universitas,
                'nomor_handphone' => $nomor_handphone
            ];

            $this->db->insert($upload);

            return redirect()->to(base_url('/crud'));
        }else{
            return view('crud/upload');
        }
    }
    public function edit()
    {
        return view('crud/edit');
    }
}