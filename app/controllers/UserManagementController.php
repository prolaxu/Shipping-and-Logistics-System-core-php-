<?php

namespace app\controllers;

use core\Tools\DB;

class UserManagementController extends Controller
{
    public function __construct()
    {
        $this->db = new DB();
        $this->errors = "";
    }
    public function index()
    {
        $items = $this->db->table('users')->getDesc();
        $this->view('sections/usermanagement', [
            'items' => $items
        ]);
    }

    // Shipper Information Table
    public function save($action)
    {
        $this->crud_save(
            'users',
            $action,
            [
                'fullname',
                'contact_number',
                'email',
                'username',
                'account_type',
                'account_status'
            ],
            $_POST['password'] ?
                [
                    'password' => password_hash($_POST['password'], PASSWORD_DEFAULT)
                ] : []
        );
    }
    // new
    public function new()
    {
        $this->save('add');
    }
    // edit
    public function edit()
    {
        $this->save('update');
    }
    // delete
    public function delete()
    {
        $this->crud_delete('users');
    }
}
