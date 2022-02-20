<div class="data-table-area">
    <div class="container">
        <div class="row" style="margin-top: -2.5%">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="data-table-list">
                    <div class="basic-tb-hd">
                        <h2>Customer Information Table</h2>
                    </div>
                    <button style="margin-left: 94%; margin-top: -7%" type="button" class="btn btn-danger waves-effect btn-sm" data-toggle="modal" data-target="#add"><i class="fa fa-plus"></i> Add</button>
                    <div class="modal fade in" id="add" role="dialog">
                        <div class="modal-dialog modals-default">
                            <form onsubmit="event.preventDefault();submitForm(this,'customerinfo/newcustomer','customerinfo')" enctype="multipart/form-data">
                                {{ _csrf|raw }}
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">×</button>
                                    </div>
                                    <div class="modal-body">
                                        <h2 align="center">Add Customer</h2>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-element-list">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-4 col-sm- col-xs-4">
                                                        <div class="form-group ic-cmp-int">
                                                            <div class="form-ic-cmp">
                                                                <i class="fa fa-user"></i>
                                                            </div>
                                                            <div class="nk-int-st">
                                                                <input class="form-control" placeholder="Enter Customer Name" name="name" type="text" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-4 col-sm- col-xs-4">
                                                        <div class="form-group ic-cmp-int">
                                                            <div class="form-ic-cmp">
                                                                <i class="fa fa-map-marker"></i>
                                                            </div>
                                                            <div class="nk-int-st">
                                                                <input class="form-control" placeholder="Enter Customer Address" type="text" name="address" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-6 col-md-4 col-sm- col-xs-4">
                                                        <div class="form-group ic-cmp-int">
                                                            <div class="form-ic-cmp">
                                                                <i class="fa fa-envelope"></i>
                                                            </div>
                                                            <div class="nk-int-st">
                                                                <input class="form-control" placeholder="Enter Email Address" type="text" name="email" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-4 col-sm- col-xs-4">
                                                        <div class="form-group ic-cmp-int">
                                                            <div class="form-ic-cmp">
                                                                <i class="fa fa-phone"></i>
                                                            </div>
                                                            <div class="nk-int-st">
                                                                <input class="form-control" placeholder="Contact Number" type="text" name="phone" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-4 col-sm- col-xs-4">
                                                        <div class="form-group ic-cmp-int">
                                                            <div class="form-ic-cmp">
                                                                <i class="fa fa-map"></i>
                                                            </div>
                                                            <div class="nk-int-st">
                                                                <input class="form-control" placeholder="City" type="text" name="city" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm- col-xs-4">
                                                        <div class="form-group ic-cmp-int">
                                                            <div class="form-ic-cmp">
                                                                <i class="fa fa-code"></i>
                                                            </div>
                                                            <div class="nk-int-st">
                                                                <input class="form-control" placeholder="Zip Code" type="text" name="zip" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm- col-xs-4">
                                                        <div class="form-group ic-cmp-int">
                                                            <div class="form-ic-cmp">
                                                                <i class="fa fa-edit"></i>
                                                            </div>
                                                            <div class="nk-int-st">
                                                                <input class="form-control" placeholder="Remarks" type="text" name="remarks" required>
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
                                <th>Name</th>
                                <th>Address</th>
                                <th>City</th>
                                <th>Zip Code</th>
                                <th>Contact Number</th>
                                <th>Email Address</th>
                                <th>Remarks</th>
                                <th style="width: 9%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for customer in customers %}
                            <tr>
                                <td>{{customer.name}}</td>
                                <td>{{customer.address}}</td>
                                <td>{{customer.city}}</td>
                                <td><small>{{customer.zip}}</small></td>
                                <td><i>{{customer.phone}}</i></td>
                                <td>{{customer.email}}</td>
                                <td>{{customer.remarks}}</td>
                                <td>
                                    <button type="button" class="btn btn-info waves-effect btn-sm" data-toggle="modal" data-target="#edit-{{customer.id}}"><i class="fa fa-pencil"></i></button>
                                    <form method="post" onsubmit="event.preventDefault();submitForm(this,'customerinfo/deletecustomer','customerinfo')">
                                        {{ _csrf|raw }}
                                        <input type="hidden" name="id" value="{{ customer.id }}" style="display:none;">
                                        <button type="submit" class="btn btn-danger waves-effect btn-sm"><i class="fa fa-trash"></i></button>
                                    </form>
                                    <div class="modal fade in" id="edit-{{customer.id}}" role="dialog">
                                        <div class="modal-dialog modals-default">
                                            <form onsubmit="event.preventDefault();submitForm(this,'customerinfo/editcustomer','customerinfo')" enctype="multipart/form-data">
                                                {{ _csrf|raw }}
                                                <input type="hidden" name="id" value="{{ customer.id }}" style="display:none;">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">×</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h2 align="center">Edit Customer</h2>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="form-element-list">
                                                                <div class="row">
                                                                    <div class="col-lg-6 col-md-4 col-sm- col-xs-4">
                                                                        <div class="form-group ic-cmp-int">
                                                                            <div class="form-ic-cmp">
                                                                                <i class="fa fa-user"></i>
                                                                            </div>
                                                                            <div class="nk-int-st">
                                                                                <input class="form-control" placeholder="Enter Customer Name" name="name" type="text" value="{{customer.name}}" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-4 col-sm- col-xs-4">
                                                                        <div class="form-group ic-cmp-int">
                                                                            <div class="form-ic-cmp">
                                                                                <i class="fa fa-map-marker"></i>
                                                                            </div>
                                                                            <div class="nk-int-st">
                                                                                <input class="form-control" placeholder="Enter Customer Address" type="text" name="address" value="{{customer.address}}" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-lg-6 col-md-4 col-sm- col-xs-4">
                                                                        <div class="form-group ic-cmp-int">
                                                                            <div class="form-ic-cmp">
                                                                                <i class="fa fa-envelope"></i>
                                                                            </div>
                                                                            <div class="nk-int-st">
                                                                                <input class="form-control" placeholder="Enter Email Address" type="text" name="email" value="{{customer.email}}" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-4 col-sm- col-xs-4">
                                                                        <div class="form-group ic-cmp-int">
                                                                            <div class="form-ic-cmp">
                                                                                <i class="fa fa-phone"></i>
                                                                            </div>
                                                                            <div class="nk-int-st">
                                                                                <input class="form-control" placeholder="Contact Number" type="text" name="phone" value="{{customer.phone}}" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-4 col-md-4 col-sm- col-xs-4">
                                                                        <div class="form-group ic-cmp-int">
                                                                            <div class="form-ic-cmp">
                                                                                <i class="fa fa-map"></i>
                                                                            </div>
                                                                            <div class="nk-int-st">
                                                                                <input class="form-control" placeholder="City" type="text" name="city" value="{{customer.city}}" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-4 col-sm- col-xs-4">
                                                                        <div class="form-group ic-cmp-int">
                                                                            <div class="form-ic-cmp">
                                                                                <i class="fa fa-code"></i>
                                                                            </div>
                                                                            <div class="nk-int-st">
                                                                                <input class="form-control" placeholder="Zip Code" type="text" name="zip" value="{{customer.zip}}" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-4 col-sm- col-xs-4">
                                                                        <div class="form-group ic-cmp-int">
                                                                            <div class="form-ic-cmp">
                                                                                <i class="fa fa-edit"></i>
                                                                            </div>
                                                                            <div class="nk-int-st">
                                                                                <input class="form-control" placeholder="Remarks" type="text" name="remarks" value="{{customer.remarks}}" required>
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
                                <th>Name</th>
                                <th>Address</th>
                                <th>City</th>
                                <th>Zip Code</th>
                                <th>Contact Number</th>
                                <th>Email Address</th>
                                <th>Remarks</th>
                                <th></th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>