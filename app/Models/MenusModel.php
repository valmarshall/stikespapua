<?php

namespace App\Models;

use CodeIgniter\Model;

class MenusModel extends Model
{
    protected $table = 'menu';
    protected $useTimestamps = true;
    protected $allowedFields = ['menu', 'slug', 'link', 'type', 'parent', 'urutan', 'icon'];

    public function getMenu($slug = false)
    {
        if ($slug == false) {
            return $this->orderBy('urutan', 'ASC')->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
