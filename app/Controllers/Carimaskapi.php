<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\penerbanganModel;



class Carimaskapi extends Controller
{
    public function index()
    {
        echo view('pages/caritiket');
    }
    public function cari()
    {
        $this->request = \Config\Services::request();
        $session = session();
        $arrival = $this->request->getVar('arrival', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $depart = $this->request->getVar('departure', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $waktu_mulai = $this->request->getVar('tanggalberangkat', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $kelas = $this->request->getVar('kelas', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $model = new penerbanganModel;
        $data = $model->cariPenerbangan($depart, $arrival, $waktu_mulai, $kelas);
        return view('pages/order', $data);
    }
    
}