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

    public function service_item(): string
    {
        $data = [
            'title' => 'Service_Item'
        ];
        return view('frontend_service_item', $data);
    }
}