<?php

namespace App\Models;

use CodeIgniter\Model;

class BandaraModel extends Model
{
    protected $table = 'bandara';
    protected $allowedFields = ['kode_bandara', 'nama', 'kota'];
}
