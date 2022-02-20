<?php

use core\Tools\Route;

$router = new Route();

// Auth
$router->get('/login', 'AuthController@login');
$router->post('/login', 'AuthController@login');
$router->post('/logout', 'AuthController@logout');
// Dashboard
$router->get('/', 'DashController@index');

// Dashboard Sections
$router->post('/dashboard', 'DashController@dash');


// Information
$router->post('/driverinfo', 'DriverController@index');
$router->post('/customerinfo', 'CustomerController@index');
$router->post('/shipperinfo', 'ShipperController@index');
$router->post('/vehicleinfo', 'VehicleController@index');
// Shipping Transactions
$router->post('/shippingtransaction', 'ShippingTransactionController@index');

// shipping transaction crud
$router->post('/shippingtransaction/save', 'ShippingTransactionController@new');
$router->post('/shippingtransaction/edit', 'ShippingTransactionController@edit');
$router->post('/shippingtransaction/delete', 'ShippingTransactionController@delete');


// User Management
$router->post('/usermanagement', 'UserManagementController@index');
//  user management crud
$router->post('/usermanagement/save', 'UserManagementController@new');
$router->post('/usermanagement/edit', 'UserManagementController@edit');
$router->post('/usermanagement/delete', 'UserManagementController@delete');

// Driver Information Table
$router->post('/driverreport/newdriver', 'DriverController@newdriver');
$router->post('/driverreport/editdriver', 'DriverController@editdriver');
$router->post('/driverreport/deletedriver', 'DriverController@deletedriver');
// Shipper Information Table
$router->post('/shipperinfo/newshipperinfo', 'ShipperController@newshipperinfo');
$router->post('/shipperinfo/editshipperinfo', 'ShipperController@editshipperinfo');
$router->post('/shipperinfo/deleteshipperinfo', 'ShipperController@deleteshipperinfo');

// Vehicle Information Table
$router->post('/vehicleinfo/newvehicleinfo', 'VehicleController@newvehicleinfo');
$router->post('/vehicleinfo/editvehicleinfo', 'VehicleController@editvehicleinfo');
$router->post('/vehicleinfo/deletevehicleinfo', 'VehicleController@deletevehicleinfo');

//  Customer Information Table
$router->post('/customerinfo/newcustomer', 'CustomerController@newcustomer');
$router->post('/customerinfo/editcustomer', 'CustomerController@editcustomer');
$router->post('/customerinfo/deletecustomer', 'CustomerController@deletecustomer');
// Shipping Transaction Status
$router->post('/shippingstatus', 'ShipperController@shippingstatus');


// Driver Accomplishment Report
$router->post('/driverreport', 'DriverReportController@reports');
$router->post('/driverreportdetails', 'DriverReportController@driverreportdetails');
