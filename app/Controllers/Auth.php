<?php

namespace App\Controllers;
use App\Libraries\Hash;

class Auth extends BaseController
{
    public function __construct()
    {
        helper(['url', 'form']);
    }
    public function index()
    {
        return view('auth/login');
    }
    public function register()
    {
        return view('/auth/register');
    }
    public function save()
    {
       
        $validation = $this->validate([
            'usuario' => [
                'rules' => 'required|is_unique[t_usuario.usuario]',
                'errors' => [
                    'required' => 'Se requiere escriba su nombre',
                    'is_unique'=> '¡Este Usuario ya existe!'
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[5]|max_length[12]',
                'errors' => [
                    'required' => 'Se requiere coloque una Contraseña',
                    'min_length' => 'La Contraseña debe tener mínimo 5 caracteres',
                    'max_length' => 'La Contraseña debe tener máximo 12 caracteres'
                ]
            ],
            'cpassword' => [
                'rules' => 'required|min_length[5]|max_length[12]|matches[password]',
                'errors' => [
                    'required' => 'Se requiere coloque la Confirmación de contraseña',
                    'min_length' => 'La Confirmación de contraseña debe tener mínimo 5 caracteres',
                    'max_length' => 'La Confirmación de contraseña debe tener máximo 12 caracteres',
                    'matches' => 'Ambas contraseñas deben ser idénticas'
                ]
            ],
        ]);

        if (!$validation) {
            return view('auth/register', ['validation' => $this->validator]);
            
        } else {
            // registraremos el usuario
            $usuario =$this->request->getGetPost('usuario');
            $type =$this->request->getGetPost('type');
            $password =$this->request->getGetPost('password');

            $values = [
                'usuario'=>$usuario,
                'password'=>Hash::make($password),
                'type'=>$type
            ];
 
            $usersModel = new \App\Models\UsersModel();
            $query = $usersModel->insert($values);
            if (!$query) {
                return redirect()->back()->with('fail', 'Algo Salió mal');
                // return redirect()->to('register')->with('falla', 'Algo Salió mal');

            }else {
                // return redirect()->to('auth/register')->with('success', 'Registro agregado');
                $last_id = $usersModel->getInsertID(); //este es el ultimo id
                session()->set('loggedUser', $last_id);
                return redirect()->to('/dashboard');
            }
        }
    }

    function check(){
        // echo 'Chequeando el proceso de ingreso';
        $validation = $this->validate([
            'usuario'=>[
                'rules'=>'required|is_not_unique[t_usuario.usuario]',
                'errors'=>[
                    'required'=>'El nombre del Usuario es requerido',
                    'is_not_unique'=> 'Este Usuario no está registrado en el sistema '
                ]
                ],
            'password'=>[
                'rules'=>'required|min_length[5]|max_length[12]',
                'errors'=>[
                    'required'=> 'La Contraseña es requerida',
                    'min_length' => 'La Contraseña debe tener mínimo 5 caracteres',
                    'max_length' => 'La Contraseña debe tener máximo 12 caracteres',

                ]
            ]
        ]);
        if (!$validation) {
            return view('auth/login',['validation'=>$this->validator]);
        }else {
            // echo 'formulario validado';
            $usuario = $this->request->getPost('usuario');
            $password = $this->request->getPost('password');
            $usersModels = new \App\Models\UsersModel();
            $user_info = $usersModels->where('usuario', $usuario)->first();
            $check_password = Hash::check($password,$user_info['password']);

            if (!$check_password) {
                session()->setFlashdata('fail','Contraseña incorrecta');
                return redirect()->to('/auth')->withInput();
            }else {
                $user_id = $user_info['id_usuario'];
                session()->set('loggedUser', $user_id);
                
            }
        
            return redirect()->to('/dashboard')->withInput();

        }
    }
    
    function logout(){
        if(session()->has('loggedUser')){
            session()->remove('loggedUser');
            return redirect()->to('/auth?access=out')->with('fail', '¡Ha salido del sistema!');
        }
    }
}
