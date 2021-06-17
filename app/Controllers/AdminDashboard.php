<?php

namespace App\Controllers;

use App\Models\MenusModel;

class AdminDashboard extends BaseController
{
    protected $menusModel;

    public function __construct()
    {
        $this->menusModel = new MenusModel();
    }
    
    public function index()
    {
        $data = [
            'title' => 'STIKES Papua ~ Admin | Dashboard',
            'menus' => $this->menusModel->getMenu(),
        ];

        return view('admin/dashboard.php', $data);
    }
}
