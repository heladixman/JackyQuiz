<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // return view('welcome_message');
        $data = [
            'title' => 'Dashboard | Jacky Quiz',
            'breadcrumbs'   => "Dashboard",
            'content' => 'pages/dashboard'
        ];
        echo view('components/componentsWrapper', $data);
    }
}