<?php 
namespace App\Controllers;
use App\Models\UserModel;
use CodeIgniter\Controller;
use App\Models\CrudModel;


class UserCrud extends Controller
{
    // show users list
        public function index(){
           
                $Crud = new CrudModel();
                $datos = $Crud->listarNombres();
                $usersModel = new \App\Models\UsersModel();
                $loggedUserID = session()->get('loggedUser');
                $userInfo = $usersModel->find($loggedUserID);
                $mensaje = session('mensaje');
                $dato = [
                    "datos" => $datos,
                    "userInfo" => $userInfo,
                    "mensaje" => $mensaje,
                ];

                ///  datos de la vista
                $userModel = new UserModel();
                $data['users'] = $userModel->orderBy('id', 'DESC')->findAll();
                ////
            
                echo view('head');

            echo view('header',$dato);
                ///// aqui dato  abajo data
            echo view('user_view', $data);
            echo view('piedepagina',$dato);

        }

    // show add user form
    public function create(){
        return view('add_user');
    }
 
    // insert data into database
    public function store() {
        $userModel = new UserModel();
        $data = [
            'name' => $this->request->getVar('name'),
            'email'  => $this->request->getVar('email'),
        ];
        $userModel->insert($data);
        return $this->response->redirect(site_url('/users-list'));
    }

    // show single user
    public function singleUser($id = null){
        $userModel = new UserModel();
        $data['user_obj'] = $userModel->where('id', $id)->first();
        return view('edit_user', $data);
    }

    // update user data
    public function update(){
        $userModel = new UserModel();
        $id = $this->request->getVar('id');
        $data = [
            'name' => $this->request->getVar('name'),
            'email'  => $this->request->getVar('email'),
        ];
        $userModel->update($id, $data);
        return $this->response->redirect(site_url('/users-list'));
    }
 
    // delete user
    public function delete($id = null){
        $userModel = new UserModel();
        $data['user'] = $userModel->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/users-list'));
    }    
}