<div class="data-table-area">
    <div class="container">
        <div class="row" style="margin-top: -2.5%">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="data-table-list">
                    <div class="basic-tb-hd">
                        <h2>Shipper Information Table</h2>
                    </div>
                    <button style="margin-left: 94%; margin-top: -7%" type="button" class="btn btn-danger waves-effect btn-sm" data-toggle="modal" data-target="#add"><i class="fa fa-plus"></i> Add</button>
                    <div class="modal fade in" id="add" role="dialog">
                        <div class="modal-dialog modals-default">
                            <form onsubmit="event.preventDefault();submitForm(this,'shipperinfo/newshipperinfo','shipperinfo')" enctype="multipart/form-data">
                                {{ _csrf|raw }}
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">×</button>
                                    </div>
                                    <div class="modal-body">
                                        <h2 align="center">Add Shipper</h2>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-element-list">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-4 col-sm- col-xs-4">
                                                        <div class="form-group ic-cmp-int">
                                                            <div class="form-ic-cmp">
                                                                <i class="fa fa-motorcycle"></i>
                                                            </div>
                                                            <div class="nk-int-st">
                                                                <input class="form-control" placeholder="Enter Shipper Name" name="name" type="text" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-4 col-sm- col-xs-4">
                                                        <div class="form-group ic-cmp-int">
                                                            <div class="form-ic-cmp">
                                                                <i class="fa fa-map-envelope"></i>
                                                            </div>
                                                            <div class="nk-int-st">
                                                                <input class="form-control" placeholder="Enter Email Address" name="email" type="email" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-6 col-md-4 col-sm- col-xs-4">
                                                        <div class="form-group ic-cmp-int">
                                                            <div class="form-ic-cmp">
                                                                <i class="fa fa-calendar"></i>
                                                            </div>
                                                            <div class="nk-int-st">
                                                                <p style="margin-top: -9%; font-size: 10px">Date of Birth.</p>
                                                                <input class="form-control" placeholder="Date of Birth" type="date" name="dob" style="margin-top: -10%" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-4 col-sm- col-xs-4" style="margin-top: .9%">
                                                        <div class="form-group ic-cmp-int">
                                                            <div class="form-ic-cmp">
                                                                <i class="fa fa-phone"></i>
                                                            </div>
                                                            <div class="nk-int-st">
                                                                <input class="form-control" placeholder="Contact Number" name="phone" type="number" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-4 col-sm- col-xs-4">
                                                        <div class="form-group ic-cmp-int">
                                                            <div class="form-ic-cmp">
                                                                <i class="fa fa-map"></i>
                                                            </div>
                                                            <div class="nk-int-st">
                                                                <input class="form-control" placeholder="City" name="city" type="text" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-4 col-sm- col-xs-4">
                                                        <div class="form-group ic-cmp-int">
                                                            <div class="form-ic-cmp">
                                                                <i class="fa fa-code"></i>
                                                            </div>
                                                            <div class="nk-int-st">
                                                                <input class="form-control" placeholder="Zip Code" name="zip" type="number" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-4 col-sm- col-xs-4" style="margin-left: 3%">
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="form-ic-cmp">
                                                                    <i class="fa fa-image"></i>
                                                                </div>
                                                                <div class="nk-int-st">
                                                                    <p style="margin-top: -5%; font-size: 10px">Select Profile Image.</p>
                                                                    <input style="margin-top: -7%" placeholder="" type="file" name="profile_img" required>
                                                                </div>
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
                                <th style="width:10%">Image</th>
                                <th>Name</th>
                                <th>Contact Number</th>
                                <th>Email Address</th>
                                <th>City</th>
                                <th>Zip Code</th>
                                <th>Date of Birth</th>
                                <th style="width: 9%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for Shipper in shippers %}
                            <tr>
                                <td><img src="{{ function.routePath(Shipper.profile_img)}}" width="40px" class="img-circle" alt="User Image"></td>
                                <td>{{ Shipper.name}}</td>
                                <td><i>{{ Shipper.phone}}</i></td>
                                <td>{{ Shipper.email}}</td>
                                <td>{{ Shipper.city}}</td>
                                <td><small>{{ Shipper.zip}}</small></td>
                                <td>{{ Shipper.dob }}</td>
                                <td style="display: flex;">
                                    <button type="button" class="btn btn-info waves-effect btn-sm" data-toggle="modal" data-target="#edit-{{Shipper.id}}"><i class="fa fa-pencil"></i></button>
                                    <form method="post" onsubmit="event.preventDefault();submitForm(this,'shipperinfo/deleteshipperinfo','shipperinfo')">
                                        {{ _csrf|raw }}
                                        <input type="hidden" name="id" value="{{ Shipper.id }}" style="display:none;">
                                        <button type="submit" class="btn btn-danger waves-effect btn-sm"><i class="fa fa-trash"></i></button>
                                    </form>
                                    <div class="modal fade in" id="edit-{{Shipper.id}}" role="dialog">
                                        <div class="modal-dialog modals-default">
                                            <form method="post" onsubmit="event.preventDefault();submitForm(this,'shipperinfo/editshipperinfo','shipperinfo')" enctype="multipart/form-data">
                                                {{ _csrf|raw }}
                                                <input type="hidden" name="id" value="{{ Shipper.id }}" style="display:none;">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">×</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h2 align="center">Edit Shipper</h2>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="form-element-list">
                                                                <div class="row">
                                                                    <div class="col-lg-6 col-md-4 col-sm- col-xs-4">
                                                                        <div class="form-group ic-cmp-int">
                                                                            <div class="form-ic-cmp">
                                                                                <i class="fa fa-motorcycle"></i>
                                                                            </div>
                                                                            <div class="nk-int-st">
                                                                                <input class="form-control" placeholder="Enter Shipper Name" name="name" type="text" value="{{ Shipper.name }}" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-4 col-sm- col-xs-4">
                                                                        <div class="form-group ic-cmp-int">
                                                                            <div class="form-ic-cmp">
                                                                                <i class="fa fa-map-envelope"></i>
                                                                            </div>
                                                                            <div class="nk-int-st">
                                                                                <input class="form-control" placeholder="Enter Email Address" name="email" type="email" value="{{ Shipper.email }}" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-lg-6 col-md-4 col-sm- col-xs-4">
                                                                        <div class="form-group ic-cmp-int">
                                                                            <div class="form-ic-cmp">
                                                                                <i class="fa fa-calendar"></i>
                                                                            </div>
                                                                            <div class="nk-int-st">
                                                                                <p style="margin-top: -9%; font-size: 10px">Date of Birth.</p>
                                                                                <input class="form-control" placeholder="Date of Birth" type="date" name="dob" value="{{ Shipper.dob }}" style="margin-top: -10%" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-4 col-sm- col-xs-4" style="margin-top: .9%">
                                                                        <div class="form-group ic-cmp-int">
                                                                            <div class="form-ic-cmp">
                                                                                <i class="fa fa-phone"></i>
                                                                            </div>
                                                                            <div class="nk-int-st">
                                                                                <input class="form-control" placeholder="Contact Number" name="phone" value="{{ Shipper.phone}}" type="number" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-6 col-md-4 col-sm- col-xs-4">
                                                                        <div class="form-group ic-cmp-int">
                                                                            <div class="form-ic-cmp">
                                                                                <i class="fa fa-map"></i>
                                                                            </div>
                                                                            <div class="nk-int-st">
                                                                                <input class="form-control" placeholder="City" name="city" value="{{ Shipper.city}}" type="text" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-4 col-sm- col-xs-4">
                                                                        <div class="form-group ic-cmp-int">
                                                                            <div class="form-ic-cmp">
                                                                                <i class="fa fa-code"></i>
                                                                            </div>
                                                                            <div class="nk-int-st">
                                                                                <input class="form-control" placeholder="Zip Code" name="zip" type="number" value="{{ Shipper.zip}}" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-lg-4 col-md-4 col-sm- col-xs-4" style="margin-left: 3%">
                                                                            <div class="form-group ic-cmp-int">
                                                                                <div class="form-ic-cmp">
                                                                                    <i class="fa fa-image"></i>
                                                                                </div>
                                                                                <div class="nk-int-st">
                                                                                    <p style="margin-top: -5%; font-size: 10px">Select Profile Image.</p>
                                                                                    <input type="hidden" name="old_profile_img" value="{{ Shipper.profile_img }}">
                                                                                    <input style="margin-top: -7%" placeholder="" type="file" name="profile_img" value="{{ Shipper.profile_img}}">
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
                                <th style="width:10%">Image</th>
                                <th>Name</th>
                                <th>Contact Number</th>
                                <th>Email Address</th>
                                <th>City</th>
                                <th>Zip Code</th>
                                <th>Date of Birth</th>
                                <th style="width: 9%"></th>
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