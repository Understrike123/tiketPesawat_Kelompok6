<?php

namespace App\Controllers;

class Homepembatalan extends BaseController
{
    public function index()
    {
        return view('homePembatalan');
        
    }
    public function tampil(){
        //ambil data dari homepage Acc
        $request = \Config\Services::request();
        $db      = \Config\Database::connect();
        $builder = $db->table('account');
        $builder->select('*');
        $builder->join('transaksi', 'transaksi.id_account = account.id');
        $builder->join('transaksi_detail', 'transaksi_detail.id_transaksi = transaksi.id');
        $builder->join('harga', 'harga.id_harga = transaksi_detail.id_harga_harga');
        $builder->join('penerbangan', 'penerbangan.id = harga.id_penerbangan');
        $builder->where('username', $_POST['username']);
        $data = $builder->get()->getResult('array');
        
        return view('homePembatalan', $data);
        
    }
}