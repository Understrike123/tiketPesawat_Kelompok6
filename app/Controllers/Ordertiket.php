<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\penerbanganModel;
use App\Models\pesawatModel;
use App\Models\maskapaiModel;

class Ordertiket extends Controller
{
    public function index()
    { 
        
        return view('pages/order');
    }
}
