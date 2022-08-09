<?php

namespace App\Controllers;
use App\Models\transaksiModel;
use App\Models\transaksidetailModel;

class MetodebayarControl extends BaseController
{
    public function index()
    {
        
        $db      = \Config\Database::connect();
        $builder = $db->table('metode_pembayaran');
        $query   = $builder->get();  // Produces: SELECT * FROM mytable
        return view('MetodePembayaran.php');
    }
    
    //fungsi random id
    public function RandomString()
    {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randstring = '';
        for ($i = 0; $i < 5; $i++) {
            $randstring = $randstring.$characters[rand(0, strlen($characters))];
        }
        return $randstring;
    }

    //fungsi random id
    public function RandomIDdetail()
    {
        $characters = '0123456789'; 
        $randstring = '';
        for ($i = 0; $i < 7; $i++) {
            $randstring = $randstring.$characters[rand(0, strlen($characters))];
        }
        return $randstring;
    }

    public function Show()
    {
        //inserttransaksiModel
        $session = session();
        $request = \Config\Services::request();
        $db      = \Config\Database::connect();
        $model=new transaksiModel();
        $builder1 = $db->table('transaksi');
        helper(['form']);
        $data1 = [
            'id'                  => $this->RandomString(),
            'id_account'          => $session->get('id'),
            'id_metode_pembayaran'=>'BCA',
            'status_pembayaran'   =>'Pending',
        ];
        $builder1->select('*');
        $builder1->insert($data1);

        //INSERT detailtransaksi
        $model=new transaksidetailModel();
        $builder2 = $db->table('transaksi_detail');
        helper(['form']);
        $data2 = [
            'idtransaksidetail'     => $this->RandomIDdetail(),
            'id_transaksi'          => $data1['id'],
            'id_harga_harga'        => $_POST['id_harga'],
            'kelompok_penumpang'    =>'Dewasa',
            'title'                 => $this->request->getVar('titel'),
            'nama_penumpang'        => $this->request->getVar('nama_lengkap'),
            'NIK'                   => $this->request->getVar('nik'),
            'No_telepon'            => $this->request->getVar('noTelepon'),
        ];
        $builder2->select('*');
        $builder2->insert($data2);

        
        //Bawa Data dari page order
        $builder = $db->table('transaksi');
        $builder->select('*');
        $builder->join('transaksi_detail', 'transaksi_detail.id_transaksi = transaksi.id');
        $builder->join('harga', 'harga.id_harga = transaksi_detail.id_harga_harga');
        $builder->join('penerbangan', 'harga.id_penerbangan = penerbangan.id');
        $builder->where('id_harga', $_POST['id_harga']);
        $query = $builder->get()->getResult('array');
        $data['tampil'] = $query;
        return view('MetodePembayaran', $data);
    }
}
