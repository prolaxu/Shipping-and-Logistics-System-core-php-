<?php

namespace app\controllers;

use core\Tools\BaseController;

class Controller extends BaseController
{
    public function post_is_exist($param)
    {
        if (isset($_POST[$param])) {
            return $_POST[$param];
        } else {
            $this->errors .= "$param is required";
            return null;
        }
    }
    // Dynemic crud Save in database table
    public function crud_save($table, $action, $allowed = [], $staticfields = null)
    {
        try {
            $this->errors = "";
            $fields = [];
            foreach ($allowed as $key) {
                $fields[$key] = $this->post_is_exist($key);
            }
            if ($staticfields != null) {
                foreach ($staticfields as $key => $value) {
                    $fields[$key] = $value;
                }
            }
            if ($this->errors == "") {
                if ($action == "add") {
                    $this->db->table($table)->insert($fields);
                    echo "success,Record added successfully !";
                } else {
                    $this->db->table($table)->update($_POST['id'], $fields);
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
    // Dynemic crud delete in database table
    public function crud_delete($table)
    {
        try {
            $this->db->table($table)->delete($_POST['id']);
            echo "success,Record deleted successfully !";
        } catch (\Exception $e) {
            echo "danger," . $e->getMessage();
        }
    }
}
