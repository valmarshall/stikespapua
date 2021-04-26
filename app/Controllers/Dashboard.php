<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'STIKES Papua ~ Admin | Dashboard'
        ];

        return view('admin/dashboard.php', $data);
    }
}
