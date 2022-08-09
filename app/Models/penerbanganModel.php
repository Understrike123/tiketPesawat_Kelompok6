<?php

namespace App\Models;

use CodeIgniter\Model;


class penerbanganModel extends Model
{
    protected $table = 'penerbangan';
    protected $useTimestamps = true;
    protected $allowedFields = ['id', 'id_pesawat', 'waktu_berangkat', 'waktu_sampai', 'kode_bandara_asal', 'kode_bandara_tujuan', 'status_penerbangan'];

    public function cariPenerbangan($kode_bandara_asal,$kode_bandara_tujuan,$waktu_berangkat,$kelas){
        
        $result=$this->db
        ->table('maskapai')
        ->select('*')
        ->join('pesawat', 'maskapai.id = pesawat.id_maskapai')
        ->join('penerbangan', 'pesawat.id = penerbangan.id_pesawat')
        ->join('harga', 'harga.id_penerbangan = penerbangan.id')
        ->where(['kode_bandara_asal'=>$kode_bandara_asal,'kode_bandara_tujuan'=>$kode_bandara_tujuan,'kelas'=>$kelas,'DATE(waktu_berangkat)'=>date('Y-m-d', strtotime($waktu_berangkat))])
        ->get()
        ->getResult('array');
        return($result);
    }   

    
}