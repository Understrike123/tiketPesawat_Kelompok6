<?php

namespace App\Models;

use CodeIgniter\Model;

class hargaModel extends Model
{
    protected $table = 'harga';
    protected $allowedFields = ['id', 'id_penerbangan', 'kelas','harga','kapasitas'];
}
