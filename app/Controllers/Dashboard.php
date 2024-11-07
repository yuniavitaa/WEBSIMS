<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        return view('/templates/admin_dashboard');
    }
    
}
