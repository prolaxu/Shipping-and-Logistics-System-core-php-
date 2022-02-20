<?php

namespace app\controllers;

use core\Tools\FileUpload;
use core\Tools\DB;

class VehicleController extends Controller
{
    public function __construct()
    {
        $this->uploader = new FileUpload();
        $this->db = new DB();
        $this->errors = "";
    }

    public function index()
    {
        $vehicles = $this->db->table('vehicals')->getDesc();
        $this->view('sections/vehicle', [
            'vehicles' => $vehicles
        ]);
    }

    // Shipper Information Table
    public function save($action)
    {
        try {
            $this->errors = "";
            $fields = [];
            $fields['owner_name'] = $this->post_is_exist('owner_name');
            $fields['vehicale_type'] = $this->post_is_exist('vehicale_type');
            $fields['fuel_type'] = $this->post_is_exist('fuel_type');
            $fields['plate_number'] = $this->post_is_exist('plate_number');
            $fields['weight'] = $this->post_is_exist('weight');
            $fields['mileage'] = $this->post_is_exist('mileage');
            $fields['plate_expiry'] = $this->post_is_exist('plate_expiry');
            $fields['last_inspection'] = $this->post_is_exist('last_inspection');
            if ($this->errors == "") {
                if ($action == "add") {
                    $this->db->table('vehicals')->insert($fields);
                    echo "success,Record added successfully !";
                } else {
                    $this->db->table('vehicals')->update($_POST['id'], $fields);
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
    public function newvehicleinfo()
    {
        $this->save('add');
    }
    public function editvehicleinfo()
    {
        $this->save('update');
    }
    public function deletevehicleinfo()
    {
        try {
            $this->db->table('vehicals')->delete($_POST['id']);
            echo "success,Record deleted successfully !";
        } catch (\Exception $e) {
            echo "danger," . $e->getMessage();
        }
    }
}
