<?php

namespace App\Models;

use CodeIgniter\Model;

class pesawatModel extends Model
{
    protected $table = 'pesawat';
    protected $allowedFields = ['id', 'kode_pesawat', 'jenis_pesawat','id_maskapai'];
}
