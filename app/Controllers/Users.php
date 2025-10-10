<?php
namespace App\Controllers;

class Users extends BaseController {
    public function index() {
        $usermodel = model('Users_model');
        $data = array(
            'title' => 'Users List',
            'users' => $usermodel->findAll()
        );

        return view('include\head_view', $data)
            .view('include\nav_view')
            .view('userslist_view', $data)
            .view('include\foot_view');
    }
    public function add() {
        $data = array(
            'title' => 'Add User',
        );

        return view('include\head_view', $data)
            .view('include\nav_view')
            .view('adduser_view')
            .view('include\foot_view');
    }
    public function insert(){
        $usermodel = model('Users_model');
        
        $data = array(
            'username' => $this->request->getPost('username'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_BCRYPT),
            'fullname' => $this->request->getPost('fullname'),
            'email' => $this->request->getPost('email'),
        );

        $usermodel->insert($data);

        return redirect()->to('users');
}
}