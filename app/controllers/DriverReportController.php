<?php

namespace app\controllers;

use core\Tools\DB;

class DriverReportController extends Controller
{
    public function __construct()
    {
        $this->db = new DB();
        $this->errors = "";
    }
    public function reports()
    {
        $items = $this->db->table('shipping_transaction')->whereDesc([
            'status' => 'Delivered'
        ])->get();
        $this->view('sections/driverreport', [
            'items' => $items
        ]);
    }
    public function driverreportdetails()
    {
        $items = $this->db->table('shipping_transaction')->whereDesc([
            'status' => 'Delivered'
        ])->get();
        $this->view('sections/driverreportdetails', [
            'items' => $items
        ]);
    }
}
