<?php

namespace app\controllers;

use core\Tools\DB;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->db = new DB();
        // $this->middleware('guest');
    }
    public function login()
    {

        if (isset($_POST['submit'])) {
            $user = $this->db->table('users')->where(
                [
                    'email' => $_POST['email']
                ]
            )->first();
            if ($user) {
                if (password_verify($_POST['password'], $user['password'])) {
                    $_SESSION['user'] = $user;
                    return request()->redirect('/');
                } else {
                    setError('password', 'Password is incorrect.');
                }
            } else {
                setError('email', 'User not found.');
            }
        }
        $this->view('pages/login');
    }
    public function logout()
    {
        session_destroy();
        return request()->redirect('/login');
    }
}
