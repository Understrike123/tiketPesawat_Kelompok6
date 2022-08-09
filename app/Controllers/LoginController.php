<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class LoginController extends Controller
{
    public function index()
    {
        helper(['form']);
        echo view('login');
    }

    public function auth()
    {
        $session = session();
        $model = new UserModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $data = $model->where('username', $username)->first();

        if ($data) {
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if ($verify_pass) {
                $session_data = [
                    'id'         => $data['id'],
                    'nama_depan'  => $data['nama_depan'],
                    'nama_belakang' => $data['nama_belakang'],
                    'username'    => $data['username'],
                    'email'       => $data['email'],
                    'no_telepon'  => $data['no_telepon'],
                    'logged_in'   => TRUE
                ];
                $session->set($session_data);
                return redirect()->to(base_url() . '/HomeAccController');
            } else {
                $session->setFlashdata('msg', 'Wrong password');
                return redirect()->to(base_url() . '/LoginController');
            }
        } else {
            $session->setFlashdata('msg', 'Username not found');
            return redirect()->to(base_url() . '/LoginController');
        }
    }
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/Home');
    }
}