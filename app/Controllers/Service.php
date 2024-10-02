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

    public function pay_tv_services(): string
    {
        $data = [
            'title' => 'Pay TV Service'
        ];
        return view('frontend_pay_tv_services', $data);
    }


    public function high_speed_internet_access(): string
    {
        $data = [
            'title' => 'High Speed Internet Access'
        ];
        return view('frontend_high_speed_internet_access', $data);
    }

    public function vpn_services(): string
    {
        $data = [
            'title' => 'VPN Services'
        ];
        return view('frontend_vpn_services', $data);
    }

    public function data_center(): string
    {
        $data = [
            'title' => 'Data Center'
        ];
        return view('frontend_data_center', $data);
    }
}