<?php

namespace App\Controllers;

class Blog extends BaseController
{
    public function blog_item(): string
    {
        $data = [
            'title' => 'Blog_Item'
        ];
        return view('frontend_blog_item', $data);
    }
}