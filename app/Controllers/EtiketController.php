<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\transaksiModel;

class EtiketController extends Controller
{
    public function index()
    {
        echo view('/Etiket.php');
    }
    public function Show(){
        
        
        //Update data setelah metode pembayaran
        $request = \Config\Services::request();
        $db      = \Config\Database::connect();
        $session = session();
        $model=new transaksiModel();
        $builder1 = $db->table('transaksi');
        helper(['form']);
        $data1 = [
            'id_account'          =>$session->get('id'),
            'id_metode_pembayaran'=>$_POST['metodebayar'],
            'status_pembayaran'   =>'Pembayaran berhasil',
        ];
        $builder1->select('*');
        $builder1->update($data1);

        //bawa data dari page metodepembayaran
        $builder = $db->table('transaksi');
        $builder->select('*');
        $builder->join('transaksi_detail', 'transaksi_detail.id_transaksi = transaksi.id');
        $builder->join('harga', 'harga.id_harga = transaksi_detail.id_harga_harga');
        $builder->join('penerbangan', 'harga.id_penerbangan = penerbangan.id');
        $builder->join('pesawat','pesawat.id=penerbangan.id_pesawat');
        $builder->join('maskapai','maskapai.id=pesawat.id_maskapai');
        $builder->where('id_harga', $_POST['id_harga']);
        $query = $builder->get()->getResult('array');
        $data['tampil'] = $query;
        
        return view('Etiket', $data);
    }
}