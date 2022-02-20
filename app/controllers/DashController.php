<?php

namespace app\controllers;

use  core\Tools\DB;

class DashController extends Controller
{
    public function __construct()
    {
        $this->db = new DB();
        $this->is_admin();
    }
    public function index()
    {

        $this->view('pages/dashboard', [
            'counts' => $this->counts()
        ]);
    }
    public function sparkline_bar($table, $type = null)
    {
        $bar = "";
        $date = @$table->last()->created_at ?? new \DateTime();
        for ($i = 12; $i >= 1; $i--) {
            $date->modify("-$i day");
            $query = [
                'created_at' => $date->format("Y-m-d H:i:s")
            ];
            // dd(isset($type));
            $type ? $query = array_merge($query, [
                'type' => $type
            ]) : null;
            $c = $table->countWhere($query);
            $bar .= $c .  ",";
        }
        return substr($bar, 0, -1);
    }
    public function is_admin()
    {
        if (!isset($_SESSION['user']) && $_SESSION['user']['account_type'] != 'admin') {
            request()->redirect('/login');
        }
    }
    public function dash()
    {
        $this->view('sections/dashboard', [
            'counts' => $this->counts()
        ]);
    }
    public function counts()
    {
        $people = $this->db->table('people');
        $transactions = $this->db->table('shipping_transaction');
        $vehicles = $this->db->table('vehicals');
        $counts = [
            'customers' => [
                'count' => $people->countWhere([
                    'type' => 'customer'
                ]),
                'bar' => $this->sparkline_bar($people, 'customer')
            ],
            'drivers' => [
                'count' => $people->countWhere([
                    'type' => 'driver'
                ]),
                'bar' => $this->sparkline_bar($people, 'driver')
            ],
            'vehicles' => [
                'count' => $vehicles->count(),
                'bar' => $this->sparkline_bar($people, 'vehicle')
            ],
            'transactions' => [
                'count' => $transactions->count(),
                'bar' => $this->sparkline_bar($transactions)
            ]
        ];
        return $counts;
    }
}
