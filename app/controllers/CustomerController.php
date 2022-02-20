<?php

namespace app\controllers;

use core\Tools\FileUpload;
use core\Tools\DB;

class CustomerController extends Controller
{

    public function __construct()
    {
        $this->uploader = new FileUpload();
        $this->db = new DB();
        $this->errors = "";
    }
    public function index()
    {
        $customers = $this->db->table('people')->whereDesc([
            'type' => 'customer'
        ])->get();
        $this->view('sections/customerinfo', [
            'customers' => $customers
        ]);
    }
    public function save($action)
    {
        try {
            $this->errors = "";
            $fields = [];
            $fields['name'] = $this->post_is_exist('name');
            $fields['email'] = $this->post_is_exist('email');
            $fields['phone'] = $this->post_is_exist('phone');
            $fields['city'] = $this->post_is_exist('city');
            $fields['zip'] = $this->post_is_exist('zip');
            $fields['remarks'] = $this->post_is_exist('remarks');
            $fields['address'] = $this->post_is_exist('address');
            $fields['profile_img'] = "defaults/profile.jpg";
            $fields['type'] = "customer";
            if ($this->errors == "") {
                if ($action == "add") {
                    $this->db->table('people')->insert($fields);
                    echo "success,Record added successfully !";
                } else {
                    $this->db->table('people')->update($_POST['id'], $fields);
                    echo "success,Record updated successfully !";
                }
            } else {
                echo "danger,$this->errors";
            }
        } catch (\Exception $e) {
            // echo "danger,Failed to $action record !";
            echo "danger," . $e->getMessage();
        }
    }

    // Driver Information Table
    public function newcustomer()
    {
        // echo "danger,Failed to add record !";
        $this->save('add');
    }
    public function editcustomer()
    {
        $this->save('update');
    }
    public function deletecustomer()
    {
        try {
            $this->db->table('people')->delete($_POST['id']);
            echo "success,Record deleted successfully !";
        } catch (\Exception $e) {
            echo "danger," . $e->getMessage();
        }
    }
}
