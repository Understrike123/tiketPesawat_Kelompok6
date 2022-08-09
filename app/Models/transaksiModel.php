<?php

namespace App\Models;

use CodeIgniter\Model;

class transaksiModel extends Model
{
    protected $table = 'transaksi';
    protected $allowedFields = ['id', 'id_account', 'id_metode_pembayaran','status_pembayaran'];
}
