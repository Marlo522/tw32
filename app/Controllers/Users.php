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
}
?>