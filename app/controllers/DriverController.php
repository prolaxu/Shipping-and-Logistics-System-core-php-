<?php

namespace app\controllers;

use core\Tools\FileUpload;
use core\Tools\DB;

class DriverController extends Controller
{
    public function __construct()
    {
        $this->uploader = new FileUpload();
        $this->db = new DB();
        $this->errors = "";
    }
    public function index()
    {
        $drivers = $this->db->table('people')->whereDesc([
            'type' => 'driver'
        ])->get();
        $this->view('sections/driverinfo', [
            'drivers' => $drivers
        ]);
    }
    public function save($action)
    {
        try {
            $this->errors = "";
            $fields = [];
            $fields['name'] = $this->post_is_exist('name');
            $fields['email'] = $this->post_is_exist('email');
            $fields['dob'] = $this->post_is_exist('dob');
            $fields['phone'] = $this->post_is_exist('phone');
            $fields['city'] = $this->post_is_exist('city');
            $fields['zip'] = $this->post_is_exist('zip');
            if ($_FILES['profile_img']['name'] != "") {
                $fields['profile_img'] =  $this->uploader->upload($_FILES['profile_img'], "uploads/drivers/");
            }
            $fields['type'] = "driver";
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
    public function driverreport()
    {
        $this->view('sections/driverreport');
    }
    public function driverreportdetails()
    {
        $this->view('sections/driverreportdetails');
    }

    // Driver Information Table
    public function newdriver()
    {
        $this->save('add');
    }
    public function editdriver()
    {
        $this->save('update');
    }
    public function deletedriver()
    {
        try {
            $this->db->table('people')->delete($_POST['id']);
            echo "success,Record deleted successfully !";
        } catch (\Exception $e) {
            echo "danger," . $e->getMessage();
        }
    }
}
