<?php

namespace App\Controllers;

use App\Models\M_User;

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

    public function regis()
    {
        $userData = new M_User();
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

        if (!$userData->insert($_POST)) {
            var_dump($userData->errors());
            exit;
        }
    }

    public function loginProcess()
    {
        $userData = new M_User();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $user = $userData->where('email', $email)->first();

        if ($user && password_verify($password, $user['password'])) {
            // Simpan data sesi
            session()->set([
                'email' => $user['email'],
                'role' => $user['role'],
                'logged_in' => true
            ]);

            // Redirect berdasarkan peran
            if ($user['role'] === 'admin') {
                return redirect()->to('/dashboard');
            } else {
                return redirect()->to('/payment');
            }
        } else {
            // Jika gagal, kembalikan ke halaman login
            session()->setFlashdata('error', 'Email atau password salah');
            return redirect()->back();
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
