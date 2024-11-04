<?php 

namespace App\Controllers;
use App\Models\M_USer;

class User extends BaseController 
{
    public function login()
    {
        $data = [
            'title' => 'Form Login',
            'tampil' => 'frontend_login',
        ];
        echo view('templates/wrapper', $data);
    }

    public function register()
    {
        $data = [
            'title' => 'Form Register',
            'tampil' => 'frontend_register',
        ];
        echo view('templates/wrapper', $data);
    }

    public function regis(){
        $userData = new M_User();

        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

        if (!$userData->insert($_POST)) {
            // Jika insert gagal, tampilkan pesan error
            var_dump($userData->errors());
            exit;
        }


    }
}