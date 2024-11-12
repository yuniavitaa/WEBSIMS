<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        echo view ("/templates/admin_header");
        echo view ("/templates/admin_footer");
        echo view ("/templates/admin_dashboard");
    }
    
}
