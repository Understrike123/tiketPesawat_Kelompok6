<?php

namespace App\Controllers;

class Refund extends BaseController
{
    public function gotrefund()
    {
        //ambil data refund
        $request = \Config\Services::request();
        $db      = \Config\Database::connect();
        $builder = $db->table('account');
        $builder->select('*');
        $builder->join('transaksi', 'transaksi.id_account = account.id');
        $builder->join('transaksi_detail', 'transaksi_detail.id_transaksi = transaksi.id');
        $builder->join('harga', 'harga.id_harga = transaksi_detail.id_harga_harga');
        $builder->join('penerbangan', 'penerbangan.id = harga.id_penerbangan');
        $builder->join('pesawat','pesawat.id=penerbangan.id_pesawat');
        $builder->join('maskapai','maskapai.id=pesawat.id_maskapai');
        $builder->where('id_transaksi', $_POST['id_transaksi']);
        $query = $builder->get()->getResult('array');
        $data['tampil'] = $query;
        return view('refund.php',$data);
    }
}
