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
            'title' => 'STIKES Papua ~ Admin | Tambah Menu',
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

    public function orderUp($id)
    {
        $menu = $this->menusModel->find($id);
        $urutanSebelum = $menu['urutan'] - 1;

        if ($urutanSebelum == 0) {
            session()->setFlashdata('pesanError', 'Menu ini yang paling atas');

            return redirect()->to('/admin/menu');
        }

        $menuSebelum = $this->menusModel->where(['urutan' => $urutanSebelum])->first();

        $this->menusModel->save([
            'id' => $menuSebelum['id'],
            'urutan' => $menuSebelum['urutan'] + 1
        ]);

        $this->menusModel->save([
            'id' => $menu['id'],
            'urutan' => $menu['urutan'] - 1
        ]);

        session()->setFlashdata('pesan', 'Menu berhasil dinaikkan');

        return redirect()->to('/admin/menu');
    }

    public function orderDown($id)
    {
        $menu = $this->menusModel->find($id);
        $urutanSetelah = $menu['urutan'] + 1;
        $menuSetelah = $this->menusModel->where(['urutan' => $urutanSetelah])->first();

        if (!$menuSetelah) {
            session()->setFlashdata('pesanError', 'Menu ini yang paling bawah');

            return redirect()->to('/admin/menu');
        }

        $this->menusModel->save([
            'id' => $menuSetelah['id'],
            'urutan' => $menuSetelah['urutan'] - 1
        ]);

        $this->menusModel->save([
            'id' => $menu['id'],
            'urutan' => $menu['urutan'] + 1
        ]);

        session()->setFlashdata('pesan', 'Menu berhasil diturunkan');

        return redirect()->to('/admin/menu');
    }

    public function edit($slug)
    {
        $data = [
            'title' => 'STIKES Papua ~ Admin | Edit Menu',
            'menus' => $this->menusModel->getMenu(),
            'menu' => $this->menusModel->getMenu($slug),
            'validation' => \Config\Services::validation()
        ];

        return view('admin/menus/edit', $data);
    }

    public function update($id)
    {
        $menu = $this->menusModel->find($id);
        if ($menu['menu'] == $this->request->getVar('menu')) {
            $menuRule = 'required';
        } else {
            $menuRule = 'required|is_unique[menu.menu]';
        }
        if (!$this->validate([
            'menu' => [
                'rules' => $menuRule,
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
            return redirect()->to('/admin/menu/edit/' . $menu['slug'])->withInput();
        }

        $slug = url_title($this->request->getVar('menu'), '-', true);

        $this->menusModel->save([
            'id' => $id,
            'menu' => $this->request->getVar('menu'),
            'slug' => $slug,
            'link' => $this->request->getVar('link'),
            'type' => $this->request->getVar('type'),
            'parent' => $this->request->getVar('parent'),
            'icon' => $this->request->getVar('icon')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah');

        return redirect()->to('/admin/menu');
    }
}
