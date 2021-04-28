<?php

namespace App\Controllers;

use App\Models\RolesModel;

class Roles extends BaseController
{
    protected $rolesModel;

    public function __construct()
    {
        $this->rolesModel = new RolesModel();
    }

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

    public function save()
    {
        $this->rolesModel->save([
            'role' => $this->request->getVar('role')
        ]);

        echo "berhasil";
    }
}
