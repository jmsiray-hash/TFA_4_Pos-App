<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('pages/home', [
            'title' => 'Home',
        ]);
    }

    public function about(): string
    {
        return view('pages/about', [
            'title' => 'About Us',
        ]);
    }
}
