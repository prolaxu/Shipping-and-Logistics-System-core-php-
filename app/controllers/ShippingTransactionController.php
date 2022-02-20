<?php

namespace app\controllers;

use core\Tools\DB;

class ShippingTransactionController extends Controller
{
    public function __construct()
    {
        $this->db = new DB();
        $this->errors = "";
    }
    public function index()
    {
        $shippingtransactions = $this->db->table('shipping_transaction')->getDesc();
        $drivers = $this->db->table('people')->where([
            'type' => 'driver'
        ])->get();
        $customers = $this->db->table('people')->where([
            'type' => 'customer'
        ])->get();
        $shipers = $this->db->table('people')->where([
            'type' => 'shipper'
        ])->get();
        $this->view('sections/shippingtransaction', [
            'items' => $shippingtransactions,
            'drivers' => $drivers,
            'customers' => $customers,
            'shipers' => $shipers
        ]);
    }

    // Shipper Information Table
    public function save($action)
    {
        $this->crud_save(
            'shipping_transaction',
            $action,
            [
                'shipping_code',
                'customer_name',
                'shipping_details',
                'shipper_name',
                'pickup_date',
                'delivery_date',
                'driver_name',
                'contact_number',
                'drivers_free',
                'transation_amount',
                'status',
                'remarks'
            ],
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
        $this->crud_delete('shipping_transaction');
    }
}
