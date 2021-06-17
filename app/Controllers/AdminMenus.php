<?php

namespace App\Controllers;

use App\Models\MenusModel;

class AdminMenus extends BaseController
{
    protected $menusModel;

    public function __construct()
    {
        $this->menusModel = new MenusModel();
    }

    public function index()
    {
        $data = [
            'title' => 'STIKES Papua ~ Admin | Menus',
            'menus' => $this->menusModel->getMenu()
        ];

        return view('admin/menus/index', $data);
    }

    public function add()
    {
        $data = [
            'title' => 'STIKES Papua ~ Admin | Menus',
            'menus' => $this->menusModel->getMenu(),
            'validation' => \Config\Services::validation()
        ];

        return view('admin/menus/add', $data);
    }

    public function save()
    {
        $menus = $this->menusModel->orderBy('urutan', 'DESC')->first();
        if ($menus == null) {
            $order = 1;
        } else {
            $order = $menus['urutan'] + 1;
        }
        if (!$this->validate([
            'menu' => [
                'rules' => 'required|is_unique[menu.menu]',
                'errors' => [
                    'required' => 'Nama menu harus diisi',
                    'is_unique' => 'Nama menu sudah ada'
                ]
            ],
            'link' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Link menu harus diisi'
                ]
            ],
            'type' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tipe menu harus dipilih'
                ]
            ],
            'icon' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Icon menu harus diisi'
                ]
            ],
        ])) {
            return redirect()->to('/admin/menu/add')->withInput();
        }

        $slug = url_title($this->request->getVar('menu'), '-', true);

        $this->menusModel->save([
            'menu' => $this->request->getVar('menu'),
            'slug' => $slug,
            'link' => $this->request->getVar('link'),
            'type' => $this->request->getVar('type'),
            'parent' => $this->request->getVar('parent'),
            'urutan' => $order,
            'icon' => $this->request->getVar('icon')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');

        return redirect()->to('/admin/menu');
    }
}
