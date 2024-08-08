<?php

namespace App\Controllers;

class Service extends BaseController
{
    public function service(): string
    {
        $data = [
            'title' => 'Service'
        ];
        return view('frontend_services', $data);
    }
}