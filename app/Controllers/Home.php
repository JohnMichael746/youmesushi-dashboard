<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('templates/header')
            . view('templates/sidebar')
            . view('templates/topbar')
            . view('templates/breadcrumbbar')
            . view('home/index')
            . view('templates/footer');
    }
}
