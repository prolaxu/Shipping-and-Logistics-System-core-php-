<div class="data-table-area">
    <div class="container">
        <div class="row" style="margin-top: -2.5%">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="data-table-list">
                    <div class="basic-tb-hd">
                        <h2>Vehicle Information Table</h2>
                    </div>
                    <button style="margin-left: 94%; margin-top: -7%" type="button" class="btn btn-danger waves-effect btn-sm" data-toggle="modal" data-target="#add"><i class="fa fa-plus"></i> Add</button>
                    <div class="modal fade in" id="add" role="dialog">
                        <div class="modal-dialog modals-default">
                            <form onsubmit="event.preventDefault();submitForm(this,'vehicleinfo/newvehicleinfo','vehicleinfo')" enctype="multipart/form-data">
                                {{ _csrf|raw }}
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">×</button>
                                    </div>
                                    <div class="modal-body">
                                        <h2 align="center">Add Vehicle</h2>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-element-list">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-4 col-sm- col-xs-4">
                                                        <div class="form-group ic-cmp-int">
                                                            <div class="form-ic-cmp">
                                                                <i class="fa fa-user"></i>
                                                            </div>
                                                            <div class="nk-int-st">
                                                                <input class="form-control" placeholder="Enter Owner Name" type="text" name="owner_name" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-4 col-sm- col-xs-4">
                                                        <div class="form-group ic-cmp-int">
                                                            <div class="form-ic-cmp">
                                                                <i class="fa fa-motorcycle"></i>
                                                            </div>
                                                            <div class="nk-int-st">
                                                                <input class="form-control" placeholder="Enter Vehicle Type" type="text" name="vehicale_type" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-6 col-md-4 col-sm- col-xs-4">
                                                        <div class="form-group ic-cmp-int">
                                                            <div class="form-ic-cmp">
                                                                <i class="fa fa-motorcycle"></i>
                                                            </div>
                                                            <div class="nk-int-st">
                                                                <input class="form-control" placeholder="Enter Fuel Type" type="text" name="fuel_type" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-4 col-sm- col-xs-4">
                                                        <div class="form-group ic-cmp-int">
                                                            <div class="form-ic-cmp">
                                                                <i class="fa fa-motorcycle"></i>
                                                            </div>
                                                            <div class="nk-int-st">
                                                                <input class="form-control" placeholder="Plate Number" type="text" name="plate_number" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-4 col-sm- col-xs-4">
                                                        <div class="form-group ic-cmp-int">
                                                            <div class="form-ic-cmp">
                                                                <i class="fa fa-balance-scale"></i>
                                                            </div>
                                                            <div class="nk-int-st">
                                                                <input class="form-control" placeholder="Weight" type="text" name="weight" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm- col-xs-4">
                                                        <div class="form-group ic-cmp-int">
                                                            <div class="form-ic-cmp">
                                                                <i class="fa fa-"></i>
                                                            </div>
                                                            <div class="nk-int-st">
                                                                <input class="form-control" placeholder="Mileage" type="text" name="mileage" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5 col-md-4 col-sm- col-xs-4" style="margin-left: -6%">
                                                        <div class="form-group ic-cmp-int">
                                                            <div class="form-ic-cmp">
                                                                <i class="fa fa-calendar"></i>
                                                            </div>
                                                            <div class="nk-int-st">
                                                                <p style="margin-top: -9%; font-size: 10px">Plate Expiry.</p>
                                                                <input class="form-control" placeholder="" type="date" style="margin-top: -10%" name="plate_expiry" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-4 col-sm- col-xs-4">
                                                        <div class="form-group ic-cmp-int">
                                                            <div class="form-ic-cmp">
                                                                <i class="fa fa-calendar"></i>
                                                            </div>
                                                            <div class="nk-int-st">
                                                                <p style="margin-top: -9%; font-size: 10px">Last Inspection Date</p>
                                                                <input class="form-control" placeholder="" type="date" style="margin-top: -10%" name="last_inspection" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal" style="margin-right: 72%">Close</button>
                                        <button type="submit" class="btn btn-danger waves-effect">Save</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table id="data-table-basic" class="table table-striped">
                        <thead>
                            <tr>
                                <th>Owner Name</th>
                                <th>Vehicle Type</th>
                                <th>Fuel Type</th>
                                <th>Plate Number</th>
                                <th>Plate Expiry</th>
                                <th>Weight</th>
                                <th>Mileage</th>
                                <th>Last Inspection</th>
                                <th style="width: 9%"></th>
                            </tr>
                        </thead>

                        <tbody>
                            {% for  vehicle in vehicles%}
                            <tr>
                                <td>{{ vehicle.owner_name }}</td>
                                <td><b style="color: blue">{{ vehicle.vehicale_type }}</b></td>
                                <td>{{ vehicle.fuel_type }}</td>
                                <td><small>{{ vehicle.plate_number }}</small></td>
                                <td><i>{{ vehicle.plate_expiry }}</i></td>
                                <td>{{ vehicle.weight }}</td>
                                <td>{{ vehicle.mileage }}</td>
                                <td>{{ vehicle.last_inspection }}</td>
                                <td style="display:flex;">
                                    <button type="button" class="btn btn-info waves-effect btn-sm" data-toggle="modal" data-target="#edit-{{ vehicle.id }}"><i class="fa fa-pencil"></i></button>
                                    <form method="post" onsubmit="event.preventDefault();submitForm(this,'vehicleinfo/deletevehicleinfo','vehicleinfo')">
                                        {{ _csrf|raw }}
                                        <input type="hidden" name="id" value="{{ vehicle.id }}" style="display:none;">
                                        <button type="submit" class="btn btn-danger waves-effect btn-sm"><i class="fa fa-trash"></i></button>
                                    </form>
                                    <div class="modal fade in" id="edit-{{ vehicle.id }}" role="dialog">
                                        <div class="modal-dialog modals-default">
                                            <form onsubmit="event.preventDefault();submitForm(this,'vehicleinfo/editvehicleinfo','vehicleinfo')" enctype="multipart/form-data" method="post">
                                                {{ _csrf|raw }}
                                                <input type="hidden" name="id" value="{{ vehicle.id }}" style="display:none;">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">×</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h2 align="center">Edit Vehicle</h2>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="form-element-list">
                                                                <div class="row">
                                                                    <div class="col-lg-6 col-md-4 col-sm- col-xs-4">
                                                                        <div class="form-group ic-cmp-int">
                                                                            <div class="form-ic-cmp">
                                                                                <i class="fa fa-user"></i>
                                                                            </div>
                                                                            <div class="nk-int-st">
                                                                                <input class="form-control" placeholder="Enter Owner Name" type="text" name="owner_name" value="{{ vehicle.owner_name }}" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-4 col-sm- col-xs-4">
                                                                        <div class="form-group ic-cmp-int">
                                                                            <div class="form-ic-cmp">
                                                                                <i class="fa fa-motorcycle"></i>
                                                                            </div>
                                                                            <div class="nk-int-st">
                                                                                <input class="form-control" placeholder="Enter Vehicle Type" type="text" name="vehicale_type" value="{{ vehicle.vehicale_type }}" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-lg-6 col-md-4 col-sm- col-xs-4">
                                                                        <div class="form-group ic-cmp-int">
                                                                            <div class="form-ic-cmp">
                                                                                <i class="fa fa-motorcycle"></i>
                                                                            </div>
                                                                            <div class="nk-int-st">
                                                                                <input class="form-control" placeholder="Enter Fuel Type" type="text" name="fuel_type" value="{{ vehicle.fuel_type }}" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-4 col-sm- col-xs-4">
                                                                        <div class="form-group ic-cmp-int">
                                                                            <div class="form-ic-cmp">
                                                                                <i class="fa fa-motorcycle"></i>
                                                                            </div>
                                                                            <div class="nk-int-st">
                                                                                <input class="form-control" placeholder="Plate Number" type="text" name="plate_number" value="{{ vehicle.plate_number }}" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-3 col-md-4 col-sm- col-xs-4">
                                                                        <div class="form-group ic-cmp-int">
                                                                            <div class="form-ic-cmp">
                                                                                <i class="fa fa-balance-scale"></i>
                                                                            </div>
                                                                            <div class="nk-int-st">
                                                                                <input class="form-control" placeholder="Weight" type="text" name="weight" value="{{ vehicle.weight }}" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-4 col-sm- col-xs-4">
                                                                        <div class="form-group ic-cmp-int">
                                                                            <div class="form-ic-cmp">
                                                                                <i class="fa fa-"></i>
                                                                            </div>
                                                                            <div class="nk-int-st">
                                                                                <input class="form-control" placeholder="Mileage" type="text" name="mileage" value="{{ vehicle.mileage }}" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-5 col-md-4 col-sm- col-xs-4" style="margin-left: -6%">
                                                                        <div class="form-group ic-cmp-int">
                                                                            <div class="form-ic-cmp">
                                                                                <i class="fa fa-calendar"></i>
                                                                            </div>
                                                                            <div class="nk-int-st">
                                                                                <p style="margin-top: -9%; font-size: 10px">Plate Expiry.</p>
                                                                                <input class="form-control" placeholder="" type="date" style="margin-top: -10%" name="plate_expiry" value="{{ vehicle.plate_expiry }}" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-4 col-md-4 col-sm- col-xs-4">
                                                                        <div class="form-group ic-cmp-int">
                                                                            <div class="form-ic-cmp">
                                                                                <i class="fa fa-calendar"></i>
                                                                            </div>
                                                                            <div class="nk-int-st">
                                                                                <p style="margin-top: -9%; font-size: 10px">Last Inspection Date</p>
                                                                                <input class="form-control" placeholder="" type="date" style="margin-top: -10%" name="last_inspection" value="{{ vehicle.last_inspection }}" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal" style="margin-right: 72%">Close</button>
                                                        <button type="submit" class="btn btn-danger waves-effect">Save</button>
                                                    </div>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            {% endfor %}

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Owner Name</th>
                                <th>Vehicle Type</th>
                                <th>Fuel Type</th>
                                <th>Plate Number</th>
                                <th>Plate Expiry</th>
                                <th>Weight</th>
                                <th>Mileage</th>
                                <th>Last Inspection</th>
                                <th></th>
                            </tr>
                        </tfoot>
                    </table>
                    <div class="modal fade in" id="edit" role="dialog">
                        <div class="modal-dialog modals-default">
                            <form>
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">×</button>
                                    </div>
                                    <div class="modal-body">
                                        <h2 align="center">Edit Vehicle</h2>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-element-list">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-4 col-sm- col-xs-4">
                                                        <div class="form-group ic-cmp-int">
                                                            <div class="form-ic-cmp">
                                                                <i class="fa fa-user"></i>
                                                            </div>
                                                            <div class="nk-int-st">
                                                                <input class="form-control" placeholder="Enter Owner Name" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-4 col-sm- col-xs-4">
                                                        <div class="form-group ic-cmp-int">
                                                            <div class="form-ic-cmp">
                                                                <i class="fa fa-motorcycle"></i>
                                                            </div>
                                                            <div class="nk-int-st">
                                                                <input class="form-control" placeholder="Enter Vehicle Type" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-6 col-md-4 col-sm- col-xs-4">
                                                        <div class="form-group ic-cmp-int">
                                                            <div class="form-ic-cmp">
                                                                <i class="fa fa-motorcycle"></i>
                                                            </div>
                                                            <div class="nk-int-st">
                                                                <input class="form-control" placeholder="Enter Fuel Type" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-4 col-sm- col-xs-4">
                                                        <div class="form-group ic-cmp-int">
                                                            <div class="form-ic-cmp">
                                                                <i class="fa fa-motorcycle"></i>
                                                            </div>
                                                            <div class="nk-int-st">
                                                                <input class="form-control" placeholder="Plate Number" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-4 col-sm- col-xs-4">
                                                        <div class="form-group ic-cmp-int">
                                                            <div class="form-ic-cmp">
                                                                <i class="fa fa-balance-scale"></i>
                                                            </div>
                                                            <div class="nk-int-st">
                                                                <input class="form-control" placeholder="Weight" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm- col-xs-4">
                                                        <div class="form-group ic-cmp-int">
                                                            <div class="form-ic-cmp">
                                                                <i class="fa fa-"></i>
                                                            </div>
                                                            <div class="nk-int-st">
                                                                <input class="form-control" placeholder="Mileage" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5 col-md-4 col-sm- col-xs-4" style="margin-left: -6%">
                                                        <div class="form-group ic-cmp-int">
                                                            <div class="form-ic-cmp">
                                                                <i class="fa fa-calendar"></i>
                                                            </div>
                                                            <div class="nk-int-st">
                                                                <p style="margin-top: -9%; font-size: 10px">Plate Expiry.</p>
                                                                <input class="form-control" placeholder="" type="date" style="margin-top: -10%">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-4 col-sm- col-xs-4">
                                                        <div class="form-group ic-cmp-int">
                                                            <div class="form-ic-cmp">
                                                                <i class="fa fa-calendar"></i>
                                                            </div>
                                                            <div class="nk-int-st">
                                                                <p style="margin-top: -9%; font-size: 10px">Last Inspection Date</p>
                                                                <input class="form-control" placeholder="" type="date" style="margin-top: -10%">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal" style="margin-right: 72%">Close</button>
                                        <button type="submit" class="btn btn-danger waves-effect">Save</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>