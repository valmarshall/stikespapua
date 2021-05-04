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
            'title' => 'STIKES Papua ~ Admin | Roles',
            'roles' => $this->rolesModel->getRole()
        ];

        return view('admin/role/index.php', $data);
    }

    public function add()
    {
        $data = [
            'title' => 'STIKES Papua ~ Admin | Tambah Roles',
            'validation' => \Config\Services::validation()
        ];

        return view('admin/role/add.php', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'role' => [
                'rules' => 'required|is_unique[role.role]',
                'errors' => [
                    'required' => 'Nama role harus diisi',
                    'is_unique' => 'Nama role sudah terdaftar'
                ]
            ]
        ])) {
            return redirect()->to('/admin/role/add')->withInput();
        }

        $slug = url_title($this->request->getVar('role'), '-', true);

        $this->rolesModel->save([
            'role' => $this->request->getVar('role'),
            'slug' => $slug
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');

        return redirect()->to('/admin/role');
    }

    public function edit($slug)
    {
        $data = [
            'title' => 'STIKES Papua ~ Admin | Edit Roles',
            'role' => $this->rolesModel->getRole($slug),
            'validation' => \Config\Services::validation()
        ];

        return view('admin/role/edit.php', $data);
    }

    public function update($id)
    {
        if (!$this->validate([
            'role' => [
                'rules' => 'required|is_unique[role.role]',
                'errors' => [
                    'required' => 'Nama role harus diisi',
                    'is_unique' => 'Nama role sudah terdaftar'
                ]
            ]
        ])) {
            return redirect()->to('/admin/role/edit/' . $this->request->getVar('slugLama'))->withInput();
        }

        $slug = url_title($this->request->getVar('role'), '-', true);

        $this->rolesModel->save([
            'id' => $id,
            'role' => $this->request->getVar('role'),
            'slug' => $slug
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah');

        return redirect()->to('/admin/role');
    }

    public function delete($id)
    {
        $this->rolesModel->delete($id);

        session()->setFlashdata('pesan', 'Data berhasil diubah');

        return redirect()->to('/admin/role');
    }
}
