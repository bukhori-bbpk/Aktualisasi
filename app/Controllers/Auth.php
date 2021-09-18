<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Login | Uji Profisiensi BBPK'
        ];
        echo view('auth/login', $data);
    }
    public function register()
    {
        $data = [
            'title' => 'Pendaftaran Akun | Uji Profisiensi BBPK'
        ];
        echo view('auth/register', $data);
    }
}
