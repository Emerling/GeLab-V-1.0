<?php

namespace App\Controllers;


class Dashboard extends BaseController
{
    public function index()
    {
        $usersModel = new \App\Models\UsersModel();
        $loggedUserID = session()->get('loggedUser');
        $userInfo = $usersModel->find($loggedUserID);
        $data = [
            'title' => 'Administración',
            'userInfo' => $userInfo
        ];

        echo view('head',$data);
        echo view('header',$data);
        echo view('body',$data);
        echo view('piedepagina',$data);

        // return view('dashboard/index', $data);
    }
 
    public function profile()
    {
        $usersModel = new \App\Models\UsersModel();
        $loggedUserID = session()->get('loggedUser');
        $userInfo = $usersModel->find($loggedUserID);
        $data = [
            'title' => 'Detalles',
            'userInfo' => $userInfo
        ];
        return view('dashboard/profile', $data);
    }
    

    
}
