<?php

namespace App\Controllers;

use App\Models\CrudModel;
use CodeIgniter\Database\MySQLi\Result;

class Crud extends BaseController
{
    public $db;

    public function __construct()
    {
        helper(['url', 'form']);
        $this->db = \Config\Database::connect();
    }
    public function index()
    {
        $Crud = new CrudModel();
        $datos = $Crud->listarNombres();
        $usersModel = new \App\Models\UsersModel();
        $loggedUserID = session()->get('loggedUser');
        $userInfo = $usersModel->find($loggedUserID);
        $mensaje = session('mensaje');
        $data = [
            "datos" => $datos,
            "userInfo" => $userInfo,
            "mensaje" => $mensaje,
        ];
        // $datos1['nombre'] = 'David Rondón';
       
        echo view('head',$data);
        echo view('header',$data);
        echo view('usuarios/listado',$data);
        echo view('piedepagina',$data);
        // return view('usuarios/listado', $data);
    }

    public function crear()
    {
        // nunca imprimio print_r($_POST);

        $datos = [
            "usuario" => $_POST['usuario'],
            "type" => $_POST['type'],
            "password" => $_POST['password']

        ];
        $Crud = new CrudModel();
        $Crud->insertar($datos);
        $respuesta = $Crud->insertar($datos);

        if ($respuesta > 0) {
            return redirect()->to(base_url() . '/crud')->with('mensaje', '1');
        } else {
            return redirect()->to(base_url() . '/crud')->with('mensaje', '0');
        }
    }
    public function actualizar()
    {
        $datos = [
            "id_usuario" => $_POST['id_usuario'],
            "usuario" => $_POST['usuario'],
            "type" => $_POST['type'],
            "password" => $_POST['password']
        ];
        $id_usuario = $_POST['id_usuario'];

        $Crud = new CrudModel();

        $respuesta = $Crud->actualizar($datos, $id_usuario);

        if ($respuesta) {
            return redirect()->to(base_url() . '/crud')->with('mensaje', '2');
        } else {
            return redirect()->to(base_url() . '/crud')->with('mensaje', '3');
        }
    }
    public function obtenerNombre($id_usuario)
    {
        $data = ["id_usuario" => $id_usuario];
        $Crud = new CrudModel();
        $respuesta = $Crud->obtenerNombre($data);
        $datos = ["datos" => $respuesta];
        return view('usuarios/actualizar', $datos);
    }
    public function eliminar($id_usuario)
    {
    }
    public function get_datatables(){
        $valor_buscado= $this->request->getGet('search')['value'];

        $table_map =[
            0=> 'id_usuario',
            1=> 'usuario',
            2=> 'password',
            3=> 'type',
            4=> 'activo'

        ];
        $sql_count= "SELECT count(id_usuario) as total FROM t_usuario";
        $sql_data= "SELECT * FROM t_usuario";
        $condition="";

        if(!empty($valor_buscado)) {
            foreach ($table_map as $key => $val) {
                if ($table_map[$key]=='id_usuario') {
                    $condition ="WHERE ".$val." LIKE '%".$valor_buscado."%'";

                }else {
                    $condition = " OR ".$val." LIKE ".$valor_buscado."";
                }
               
            }
        }
        $sql_count = $sql_count . $condition;
        $sql_data = $sql_data . $condition;
        $total_count= $this->db->query($sql_count)->getRow();
        $sql_data = "ORDER BY".$table_map[$this->request->getGet('order')[0]['column']]." | asc | desc LIMIT 0 | X";    

    }
   
}
