<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'Dashboard',
            'page' => 'admin_dashboard',
        ];
        return view('/templates/admin_dashboard', $data);
    }
    
}
