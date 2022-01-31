<?php

namespace App\Controllers;

use App\Models\SeccionModel;
use CodeIgniter\Controller;
use App\Models\CrudModel;


class SeccionCrud extends Controller
{
    // show seccion list
    public function index()
    {

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
        $seccionModel = new SeccionModel();
        $data['seccion'] = $seccionModel->orderBy('id', 'DESC')->findAll();
        ////

        echo view('head');

        echo view('header', $dato);
        ///// aqui dato  abajo data
        echo view('seccion_view', $data);
        echo view('piedepagina', $dato);
    }

    // show add user form
    public function create()
    {
        return view('add_seccion');
    }

    // insert data into database
    public function store()
    {
        $seccionModel = new SeccionModel();
        $data = [
            'nombre' => $this->request->getVar('nombre'),
            'codigo'  => $this->request->getVar('codigo'),
            'control' => $this->request->getVar('control'),

        ];
        $seccionModel->insert($data);
        return $this->response->redirect(site_url('/seccion-list'));
    }

    // show single user
    public function singleSeccion($id = null)
    {
        $seccionModel = new SeccionModel();
        $data['seccion_obj'] = $seccionModel->where('id', $id)->first();
        return view('edit_seccion', $data);
    }

    // update user data
    public function updateseccion()
    {
        $seccionModel = new SeccionModel();
        $id = $this->request->getVar('id');
        $data = [
            'nombre' => $this->request->getVar('nombre'),
            'codigo'  => $this->request->getVar('codigo'),
            'control'  => $this->request->getVar('control'),

        ];
        $seccionModel->update($id, $data);
        return $this->response->redirect(site_url('/seccion-list'));
    }

    // delete user
    public function deleteseccion($id = null)
    {
        $seccionModel = new SeccionModel();
        $data['seccion'] = $seccionModel->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/seccion-list'));
    }
}
