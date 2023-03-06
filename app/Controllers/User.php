<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class User extends BaseController
{

    public function __construct()
    {
        helper('form');
    }

    public function index()
    {
        $model = new UserModel();
        $data = [
            'users' => $model->findAll(),
        ];
        return view('crud', $data);
    }
    public function store()
    {
        $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        
        $userModel = new UserModel();
        $userModel->insert([
            'name' => $name,
            'email' => $email,
            
        ]);

        return redirect()->to('/crud');
    }


    public function edit($id)
    {
        $model = new UserModel();
        $data['user'] = $model->find($id);
        
        echo view('edit', $data);
    }

    public function update($id)
    {
        
        
        $userModel = new UserModel();
        $userModel->update($id, $this->request->getPost());

        // Tampilkan pesan sukses
        session()->setFlashdata('success', 'Data berhasil diupdate');
        return redirect()->to('/crud');
    }

    public function delete($id)
    {
        $model = new UserModel();
        $model->delete($id);
        return redirect()->to('/crud');

    }


}
