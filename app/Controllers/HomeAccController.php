<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\UserModel;

class HomeAccController extends Controller
{
    public function index()
    {
        //ambil data profil
        $session = session();
        $model = new UserModel();
        $account = $model->findAll();
        $nama_depan = $session->get('nama_depan');
        $nama_belakang = $session->get('nama_belakang');
        $nama_lengkap = $nama_depan . ' ' . $nama_belakang;
        $username = $session->get('username');
        $data = [

            'account' => $account,
            'username' => $username,
            'nama_lengkap' => $nama_lengkap

        ];
        return view('HomeAcc', $data);
    }
    public function profile()
    {
        //ambil data ke profil
        $session = session();
        $model = new UserModel();
        $nama_depan = $session->get('nama_depan');
        $nama_belakang = $session->get('nama_belakang');
        $nama_lengkap = $nama_depan . ' ' . $nama_belakang;
        $data = [
            'nama_lengkap' => $nama_lengkap

        ];
        return view('/profile.php',$data);
    }
}
