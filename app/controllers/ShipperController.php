<?php

namespace app\controllers;

use core\Tools\FileUpload;
use core\Tools\DB;

class ShipperController extends Controller
{
    public function __construct()
    {
        $this->uploader = new FileUpload();
        $this->db = new DB();
        $this->errors = "";
    }

    public function index()
    {
        $shippers = $this->db->table('people')->whereDesc([
            'type' => 'shipper'
        ])->get();
        $this->view('sections/shipperinfo', [
            'shippers' => $shippers
        ]);
    }
    public function shippingtransaction()
    {
        $this->view('sections/shippingtransaction');
    }
    public function shippingstatus()
    {
        $counts = [
            'toship' => $this->db->table('shipping_transaction')->countWhere([
                'status' => 'To Ship'
            ]),
            'delivered' => $this->db->table('shipping_transaction')->countWhere([
                'status' => 'Delivered'
            ]),
            'cancelled' => $this->db->table('shipping_transaction')->countWhere([
                'status' => 'Cancelled'
            ])
        ];
        $this->view('sections/shippingstatus', [
            'counts' => $counts
        ]);
    }

    // Shipper Information Table
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
            $fields['type'] = "shipper";
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
    public function newshipperinfo()
    {
        $this->save('add');
    }
    public function editshipperinfo()
    {
        $this->save('update');
    }
    public function deleteshipperinfo()
    {
        try {
            $this->db->table('people')->delete($_POST['id']);
            echo "success,Record deleted successfully !";
        } catch (\Exception $e) {
            echo "danger," . $e->getMessage();
        }
    }
}
