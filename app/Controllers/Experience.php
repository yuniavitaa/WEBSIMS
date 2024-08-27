<?php

namespace App\Controllers;

class Experience extends BaseController
{
    public function experience(): string
    {
        $data = [
            'title' => 'Experience'
        ];
        return view('frontend_experience', $data);
    }
}