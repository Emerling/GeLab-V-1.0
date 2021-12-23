<?php namespace App\Models;

use CodeIgniter\Model; 

class CrudModel extends Model{
    protected $table = 't_usuario';
    protected $primaryKey = 'id_usuario';
    protected $allowedFields = ['usuario', 'password','type'];
    
    public function listarNombres(){
        $Nombres = $this->db->query("SELECT * FROM t_usuario");
        return $Nombres->getResult();
    }

    public function obtenerNombre($data){
          $Nombres = $this->db->table('t_usuario');
          $Nombres->where($data);
          return $Nombres->get()->getResultArray();

    }
      

    public function insertar($datos){
        $Nombres = $this->db->table('t_usuario');
        $Nombres->insert($datos);

        return $this->db->insertID();
    }
    public function actualizar($data,$id_usuario){
        $Nombres = $this->db->table('t_usuario');
        $Nombres->set($data);
        $Nombres->where('id_usuario',$id_usuario);
        return $Nombres->update();


    }

}