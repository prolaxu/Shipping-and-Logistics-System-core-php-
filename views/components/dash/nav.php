    <!-- Main Menu area start-->
    <div class="main-menu-area mg-tb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                        <li class="active" onclick="load('dashboard')">
                            <a data-toggle="tab" href="#dashboard"><i class="fa fa-home"></i>Dashboard</a>
                        </li>
                        <li><a data-toggle="tab" href="#info"><i class="fa fa-list-alt"></i>Information</a>
                        </li>
                        <li onclick="load('shippingtransaction')"><a data-toggle="tab" href="#shippingtransaction"><i class="fa fa-edit"></i>Shipping Transaction</a>
                        </li>
                        <li onclick="load('usermanagement')"><a data-toggle="tab" href="#usermanagement"><i class="fa fa-user-secret"></i>User Management</a>
                        </li>
                        <li><a data-toggle="tab" href="#driver"><i class="fa fa-motorcycle"></i>Driver</a>
                        </li>
                        <li onclick="load('shippingstatus')"><a data-toggle="tab" href="#shippingstatus"><i class="fa fa-heart"></i>Shipping Transaction Status</a>
                        </li>
                    </ul>
                    <div class="tab-content custom-menu-content">
                        <div id="dashboard" class="tab-pane notika-tab-menu-bg animated flipInX"></div>
                        <div id="info" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li onclick="load('driverinfo')"><a>Driver</a>
                                </li>
                                <li onclick="load('customerinfo')"><a>Customer</a>
                                </li>
                                <li onclick="load('shipperinfo')"><a>Shipper</a>
                                </li>
                                <li onclick="load('vehicleinfo')"><a>Vehicle</a>
                                </li>
                            </ul>
                        </div>
                        <div id="shippingtransaction" class="tab-pane notika-tab-menu-bg animated flipInX"></div>
                        <div id="usermanagement" class="tab-pane notika-tab-menu-bg animated flipInX"></div>
                        <div id="driver" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li onclick="load('driverreport')"><a>Accomplishment Report</a>
                                </li>
                                <li onclick="load('driverreportdetails')"><a>Accomplishment Report Details</a>
                                </li>

                            </ul>
                        </div>
                        <div id="shippingstatus" class="tab-pane notika-tab-menu-bg animated flipInX"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Menu area End-->