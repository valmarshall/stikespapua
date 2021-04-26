<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'STIKES Papua ~ Admin | User'
        ];

        return view('admin/user.php', $data);
    }
}
