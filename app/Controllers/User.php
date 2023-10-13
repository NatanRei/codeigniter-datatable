<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class User extends BaseController
{
    private UserModel $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        $users = $this->userModel->orderBy('id', 'DESC');
        $search = $this->request->getVar('search');

        if (!empty($search)) {
            $users->like('name', $search);
            $users->orLike('email', $search);
            $users->orLike('phone', $search);
        }

        $data = view('users', [
            'users' => $users->paginate(10),
            'pager' => $this->userModel->pager
        ]);
        return $this->layout('Usuários - CI4', $data);
    }

    public function create()
    {
        $data = view('form');
        return $this->layout('Crie um usuário', $data);
    }

    public function store() 
    {
        if ($this->userModel->save($this->request->getPost())) {
            return $this->viewMessage('Usuário salvo com sucesso');
        }
        echo 'Falha ao salvar usuário, tente novamente';
        return;
    }

    public function edit($id)
    {
        $user = $this->userModel->find($id);
        $data = view('form', [
                'user' => $user
            ]);
        return $this->layout('Edite ' . $user["name"], $data);
    }

    public function delete($id) 
    {
        if ($this->userModel->delete($id)) {
            return $this->viewMessage('Usuário excluido com Sucesso');
        }
        echo 'Falha ao excluir usuário, tente novamente';
        return;
    }
}
