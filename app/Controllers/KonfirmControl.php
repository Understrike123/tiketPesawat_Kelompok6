<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\transaksiModel;
use App\Models\transaksidetailModel;
use App\Models\maskapaiModel;

class KonfirmCOntrol extends Controller
{
    public function delete()
    { 
        //REFUND
        //Hapus data transaksi  
        $db      = \Config\Database::connect();
        $model= new transaksiModel;
        $builder = $db->table('transaksi_detail');
        $builder->select('*');
        $builder->where('transaksi_detail.id_transaksi', $_POST['transaksi']);
        $builder->where('id_transaksi', $_POST['transaksi']);
        $builder->delete();    
        
        //Hapus data transaksi
        $builder = $db->table('transaksi');
        $builder->select('*');
        $builder->where('transaksi.id', $_POST['transaksi']);
        $builder->delete();  
        
        $request = \Config\Services::request();
        $db      = \Config\Database::connect();
        $session = session();
        $username=$session->get('username');
        $builder = $db->table('account');
        $builder->select('*');
        $builder->join('transaksi', 'transaksi.id_account = account.id');
        $builder->join('transaksi_detail', 'transaksi_detail.id_transaksi = transaksi.id');
        $builder->join('harga', 'harga.id_harga = transaksi_detail.id_harga_harga');
        $builder->join('penerbangan', 'penerbangan.id = harga.id_penerbangan');
        $builder->where('username', $username);
        $data = $builder->get()->getResult('array');

        return view('Homepembatalan',$data);
    }
}
