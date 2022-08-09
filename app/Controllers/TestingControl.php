<?php

namespace App\Controllers;
use Dompdf\Dompdf;

class TestingControl extends BaseController
{
    public function index()
    {
        $request    = \Config\Services::request();
        $db      = \Config\Database::connect();
        $session = session();
        $session->get('username');
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

    public function generate()
    {
        $filename = date('y-m-d-H-i-s'). 'OrderTiket';

        // instantiate and use the dompdf class
        $dompdf = new Dompdf();

        // load HTML content
        $dompdf->loadHtml(view('Testing'));

        // (optional) setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // render html as PDF
        $dompdf->render();

        // output the generated pdf
        $dompdf->stream($filename);
    }
}
