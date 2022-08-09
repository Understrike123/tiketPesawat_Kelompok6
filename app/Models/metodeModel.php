<?php

namespace App\Models;

use CodeIgniter\Model;

class metodeModel extends Model
{
    protected $table = 'metode_pembayaran';
    protected $useTimestamps = true;
    protected $allowedFields = ['id', 'jenis_pembayaran', 'metode'];
}