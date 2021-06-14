<?php

namespace App\Controllers;

use App\Models\RolesModel;
use App\Models\UsersModel;

class AdminUsers extends BaseController
{
    protected $usersModel;
    protected $rolesModel;

    public function __construct()
    {
        $this->usersModel = new UsersModel();
        $this->rolesModel = new RolesModel();
    }

    public function index()
    {
        $data = [
            'title' => 'STIKES Papua ~ Admin | User',
            'users' => $this->usersModel->getUser(),
            'roles' => $this->rolesModel->getRole()
        ];

        return view('admin/user/index.php', $data);
    }

    public function add()
    {
        $data = [
            'title' => 'STIKES Papua ~ Admin | Tambah User',
            'roles' => $this->rolesModel->getRole(),
            'validation' => \Config\Services::validation()
        ];

        return view('admin/user/add.php', $data);
    }

    public function save()
    {
        $password = $this->request->getVar('password');
        if ($password) {
            if (!$this->validate([
                'nama' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Nama harus diisi'
                    ]
                ],
                'username' => [
                    'rules' => 'required|is_unique[user.username]',
                    'errors' => [
                        'required' => 'Username harus diisi',
                        'is_unique' => 'Username sudah terdaftar'
                    ]
                ],
                'role' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Role harus dipilih'
                    ]
                ],
                'email' => [
                    'rules' => 'required|valid_email',
                    'errors' => [
                        'required' => 'Email harus diisi',
                        'valid_email' => 'Email tidak valid'
                    ]
                ],
                'hp' => [
                    'rules' => 'required|numeric',
                    'errors' => [
                        'required' => 'Nomor HP harus diisi',
                        'numeric' => 'Data yang anda masukkan bukan angka'
                    ]
                ],
                'password' => [
                    'rules' => 'alpha_numeric|min_length[6]',
                    'errors' => [
                        'alpha_numeric' => 'Password hanya mengandung alfabet dan nomor',
                        'min_length' => 'Minimal 6 karakter'
                    ]
                ],
                'repassword' => [
                    'rules' => 'matches[password]',
                    'errors' => [
                        'matches' => 'Re-Password tidak sesuai dengan Password'
                    ]
                ]
            ])) {
                return redirect()->to('/admin/user/add')->withInput();
            }
        } else {
            if (!$this->validate([
                'nama' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Nama harus diisi'
                    ]
                ],
                'username' => [
                    'rules' => 'required|is_unique[user.username]',
                    'errors' => [
                        'required' => 'Username harus diisi',
                        'is_unique' => 'Username sudah terdaftar'
                    ]
                ],
                'role' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Role harus dipilih'
                    ]
                ],
                'email' => [
                    'rules' => 'required|valid_email',
                    'errors' => [
                        'required' => 'Email harus diisi',
                        'valid_email' => 'Email tidak valid'
                    ]
                ],
                'hp' => [
                    'rules' => 'required|numeric',
                    'errors' => [
                        'required' => 'Nomor HP harus diisi',
                        'numeric' => 'Data yang anda masukkan bukan angka'
                    ]
                ],
            ])) {
                return redirect()->to('/admin/user/add')->withInput();
            }
        }

        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

        $this->usersModel->save([
            'id_role' => $this->request->getVar('role'),
            'username' => $this->request->getVar('username'),
            'password' => $passwordHash,
            'nama' => $this->request->getVar('nama'),
            'email' => $this->request->getVar('email'),
            'nohp' => $this->request->getVar('hp'),
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');

        return redirect()->to('/admin/user');
    }

    public function edit($username)
    {
        $data = [
            'title' => 'STIKES Papua ~ Admin | Edit User',
            'roles' => $this->rolesModel->getRole(),
            'user' => $this->usersModel->getUser($username),
            'validation' => \Config\Services::validation()
        ];

        return view('admin/user/edit.php', $data);
    }

    public function update($id)
    {
        $password = $this->request->getVar('password');
        $usernameLama = $this->request->getVar('usernameLama');
        $username = $this->request->getVar('username');
        if ($username == $usernameLama) {
            $ruleUsername = 'required';
        } else {
            $ruleUsername = 'required|is_unique[user.username]';
        }
        if ($password) {
            if (!$this->validate([
                'nama' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Nama harus diisi'
                    ]
                ],
                'username' => [
                    'rules' => $ruleUsername,
                    'errors' => [
                        'required' => 'Username harus diisi',
                        'is_unique' => 'Username sudah terdaftar'
                    ]
                ],
                'role' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Role harus dipilih'
                    ]
                ],
                'email' => [
                    'rules' => 'required|valid_email',
                    'errors' => [
                        'required' => 'Email harus diisi',
                        'valid_email' => 'Email tidak valid'
                    ]
                ],
                'hp' => [
                    'rules' => 'required|numeric',
                    'errors' => [
                        'required' => 'Nomor HP harus diisi',
                        'numeric' => 'Data yang anda masukkan bukan angka'
                    ]
                ],
                'password' => [
                    'rules' => 'alpha_numeric|min_length[6]',
                    'errors' => [
                        'alpha_numeric' => 'Password hanya mengandung alfabet dan nomor',
                        'min_length' => 'Minimal 6 karakter'
                    ]
                ],
                'repassword' => [
                    'rules' => 'matches[password]',
                    'errors' => [
                        'matches' => 'Re-Password tidak sesuai dengan Password'
                    ]
                ]
            ])) {
                return redirect()->to('/admin/user/edit/' . $usernameLama)->withInput();
            }
        } else {
            if (!$this->validate([
                'nama' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Nama harus diisi'
                    ]
                ],
                'username' => [
                    'rules' => $ruleUsername,
                    'errors' => [
                        'required' => 'Username harus diisi',
                        'is_unique' => 'Username sudah terdaftar'
                    ]
                ],
                'role' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Role harus dipilih'
                    ]
                ],
                'email' => [
                    'rules' => 'required|valid_email',
                    'errors' => [
                        'required' => 'Email harus diisi',
                        'valid_email' => 'Email tidak valid'
                    ]
                ],
                'hp' => [
                    'rules' => 'required|numeric',
                    'errors' => [
                        'required' => 'Nomor HP harus diisi',
                        'numeric' => 'Data yang anda masukkan bukan angka'
                    ]
                ],
            ])) {
                return redirect()->to('/admin/user/edit/' . $usernameLama)->withInput();
            }
        }

        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

        $this->usersModel->save([
            'id' => $id,
            'id_role' => $this->request->getVar('role'),
            'username' => $this->request->getVar('username'),
            'password' => $passwordHash,
            'nama' => $this->request->getVar('nama'),
            'email' => $this->request->getVar('email'),
            'nohp' => $this->request->getVar('hp'),
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');

        return redirect()->to('/admin/user');
    }

    public function delete($id)
    {
        $this->usersModel->delete($id);

        session()->setFlashdata('pesan', 'Data berhasil diubah');

        return redirect()->to('/admin/user');
    }
}
