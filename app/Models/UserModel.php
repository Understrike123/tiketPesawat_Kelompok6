<?php
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model{
    protected $table='account';
    
    protected $useTimestamps = true;
    protected $allowedFields=['id','nama_depan','nama_belakang','username','password','email','no_telepon','foto_profile'];
}