<?php

namespace App\Models;

use CodeIgniter\Model;

class transaksidetailModel extends Model
{
    protected $table = 'transaksi_detail';
    protected $allowedFields = ['idtransaksidetail', 'id_transaksi', 'id_harga', 'kelompok_penumpang', 'title', 'nama_penumpang', 'tanggal_lahir'];

    
}
