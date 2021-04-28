<?php

namespace App\Controllers;

class Roles extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'STIKES Papua ~ Admin | Roles'
        ];

        return view('admin/role/index.php', $data);
    }

    public function add()
    {
        $data = [
            'title' => 'STIKES Papua ~ Admin | Tambah Roles'
        ];

        return view('admin/role/add.php', $data);
    }
}
