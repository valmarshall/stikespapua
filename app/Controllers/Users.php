<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'STIKES Papua ~ Admin | User'
        ];

        return view('admin/user/index.php', $data);
    }

    public function add()
    {
        $data = [
            'title' => 'STIKES Papua ~ Admin | Tambah User'
        ];

        return view('admin/user/add.php', $data);
    }
}
