<?php 
namespace App\Models;
use CodeIgniter\Model;

class SeccionModel extends Model
{
    protected $table = 'seccion';

    protected $primaryKey = 'id';
    
    protected $allowedFields = ['nombre', 'codigo','control'];


}