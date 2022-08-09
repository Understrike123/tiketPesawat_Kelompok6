<?php

namespace App\Models;

use CodeIgniter\Model;

class maskapaiModel extends Model
{
    protected $table = 'maskapai';
    protected $allowedFields = ['id', 'nama', 'lambang'];
}
