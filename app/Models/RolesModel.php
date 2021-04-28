<?php

namespace App\Models;

use CodeIgniter\Model;

class RolesModel extends Model
{
    protected $table = 'role';
    protected $useTimestamps = true;
    protected $allowedFields = ['role'];
}
