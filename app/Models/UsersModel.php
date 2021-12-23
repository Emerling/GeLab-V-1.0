<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = 't_usuario';
    protected $primaryKey = 'id_usuario';
    protected $allowedFields = ['usuario', 'password','type'];
}

?>