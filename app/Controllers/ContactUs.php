<?php

namespace App\Controllers;

class ContactUs extends BaseController
{
    public function contact_us(): string
    {
        $data = [
            'title' => 'ContactUs'
        ];
        return view('frontend_contact_us', $data);
    }
}