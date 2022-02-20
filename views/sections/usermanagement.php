<div class="data-table-area">
    <div class="container">
        <div class="row" style="margin-top: -2.5%">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="data-table-list">
                    <div class="basic-tb-hd">
                        <h2>User Management Table</h2>
                    </div>
                    <button style="margin-left: 94%; margin-top: -7%" type="button" class="btn btn-danger waves-effect btn-sm" data-toggle="modal" data-target="#add"><i class="fa fa-plus"></i> Add</button>
                    <div class="modal fade in" id="add" role="dialog">
                        <div class="modal-dialog modals-default">
                            <form method="post" onsubmit="event.preventDefault();submitForm(this,'usermanagement/save','usermanagement')">
                                {{ _csrf|raw }}
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">×</button>
                                    </div>
                                    <div class="modal-body">
                                        <h2 align="center">Add User</h2>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-element-list">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-4 col-sm- col-xs-4">
                                                        <div class="form-group ic-cmp-int">
                                                            <div class="form-ic-cmp">
                                                                <i class="fa fa-user"></i>
                                                            </div>
                                                            <div class="nk-int-st">
                                                                <input class="form-control" placeholder="Firstname          -        Middlename         -         Lastname" type="text" name="fullname" required>
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
                                                                <i class="fa fa-user"></i>
                                                            </div>
                                                            <div class="nk-int-st">
                                                                <input class="form-control" placeholder="Enter Contact Information" type="text" name="contact_number" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-4 col-sm- col-xs-4">
                                                        <div class="form-group ic-cmp-int">
                                                            <div class="form-ic-cmp">
                                                                <i class="fa fa-user"></i>
                                                            </div>
                                                            <div class="nk-int-st">
                                                                <input class="form-control" placeholder="Username" type="text" name="username" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-4 col-sm- col-xs-4">
                                                        <div class="form-group ic-cmp-int">
                                                            <div class="form-ic-cmp">
                                                                <i class="fa fa-lock"></i>
                                                            </div>
                                                            <div class="nk-int-st">
                                                                <input class="form-control" placeholder="Password" type="password" name="password" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-4 col-sm- col-xs-4">
                                                        <div class="nk-int-mk sl-dp-mn">
                                                            <h2>Account Type</h2>
                                                        </div>
                                                        <div class="bootstrap-select fm-cmp-mg">
                                                            <select class="selectpicker" name="account_type" required>
                                                                <option value="Encoder">Encoder</option>
                                                                <option value="Admin">Admin</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-4 col-sm- col-xs-4">
                                                        <div class="nk-int-mk sl-dp-mn">
                                                            <h2>Account Status</h2>
                                                        </div>
                                                        <div class="bootstrap-select fm-cmp-mg">
                                                            <select class="selectpicker" name="account_status" required>
                                                                <option value="Activated">Activated</option>
                                                                <option value="Deactivated">Deactivated</option>
                                                            </select>
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
                                <th>Complete Name</th>
                                <th>Email Address</th>
                                <th>Contact Information</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Account Type</th>
                                <th>Account Status</th>
                                <th style="width: 9%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for item in items %}
                            <tr>
                                <td>{{item.fullname }}</td>
                                <td>{{item.email}}</td>
                                <td>{{item.contact_number}}</td>
                                <td>{{item.username}}</td>
                                <td>************</td>
                                <td><button class="btn btn-defualt btn-xs">{{item.account_type}}</button></td>
                                <td><button class="btn btn-{% if item.account_status=='Activated' %}success{% else %}danger{% endif %} btn-xs">{{item.account_status}}!</button></td>
                                <td style="display:flex;">
                                    <button type="button" class="btn btn-info waves-effect btn-sm" data-toggle="modal" data-target="#edit-{{ item.id }}"><i class="fa fa-pencil"></i></button>
                                    <form method="post" onsubmit="event.preventDefault();submitForm(this,'usermanagement/delete','usermanagement')">
                                        {{ _csrf|raw }}
                                        <input type="hidden" name="id" value="{{ item.id }}" style="display:none;">
                                        <button type="submit" class="btn btn-danger waves-effect btn-sm"><i class="fa fa-trash"></i></button>
                                    </form>
                                    <div class="modal fade in" id="edit-{{ item.id }}" role="dialog">
                                        <div class="modal-dialog modals-default">
                                            <form method="post" onsubmit="event.preventDefault();submitForm(this,'usermanagement/edit','usermanagement')">
                                                {{ _csrf|raw }}
                                                <input type="hidden" name="id" value="{{ item.id }}" style="display:none;">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">×</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h2 align="center">Edit User</h2>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="form-element-list">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-4 col-sm- col-xs-4">
                                                                        <div class="form-group ic-cmp-int">
                                                                            <div class="form-ic-cmp">
                                                                                <i class="fa fa-user"></i>
                                                                            </div>
                                                                            <div class="nk-int-st">
                                                                                <input class="form-control" placeholder="Firstname          -        Middlename         -         Lastname" type="text" name="fullname" value="{{item.fullname}}" required>
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
                                                                                <input class="form-control" placeholder="Enter Email Address" type="text" name="email" value="{{ item.email }}" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-4 col-sm- col-xs-4">
                                                                        <div class="form-group ic-cmp-int">
                                                                            <div class="form-ic-cmp">
                                                                                <i class="fa fa-user"></i>
                                                                            </div>
                                                                            <div class="nk-int-st">
                                                                                <input class="form-control" placeholder="Enter Contact Information" type="text" name="contact_number" value="{{ item.contact_number }}" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-6 col-md-4 col-sm- col-xs-4">
                                                                        <div class="form-group ic-cmp-int">
                                                                            <div class="form-ic-cmp">
                                                                                <i class="fa fa-user"></i>
                                                                            </div>
                                                                            <div class="nk-int-st">
                                                                                <input class="form-control" placeholder="Username" type="text" name="username" value="{{ item.username }}" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-4 col-sm- col-xs-4">
                                                                        <div class="form-group ic-cmp-int">
                                                                            <div class="form-ic-cmp">
                                                                                <i class="fa fa-lock"></i>
                                                                            </div>
                                                                            <div class="nk-int-st">
                                                                                <input class="form-control" placeholder="Password" type="password" name="password">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-6 col-md-4 col-sm- col-xs-4">
                                                                        <div class="nk-int-mk sl-dp-mn">
                                                                            <h2>Account Type</h2>
                                                                        </div>
                                                                        <div class="bootstrap-select fm-cmp-mg">
                                                                            <select class="selectpicker" name="account_type" required>
                                                                                <option value="Encoder">Encoder</option>
                                                                                <option value="Admin">Admin</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-4 col-sm- col-xs-4">
                                                                        <div class="nk-int-mk sl-dp-mn">
                                                                            <h2>Account Status</h2>
                                                                        </div>
                                                                        <div class="bootstrap-select fm-cmp-mg">
                                                                            <select class="selectpicker" name="account_status" required>
                                                                                <option value="Activated">Activated</option>
                                                                                <option value="Deactivated">Deactivated</option>
                                                                            </select>
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
                                <th>Complete Name</th>
                                <th>Email Address</th>
                                <th>Contact Information</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Account Type</th>
                                <th>Account Status</th>
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