<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'Dashboard',
            'page' => 'dashboard',
            'menu' => 'dashboard',
            'submenu' => '',
        ];
        return view('/templates/admin_dashboard', $data);
    }
    
}
