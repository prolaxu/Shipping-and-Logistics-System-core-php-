<div class="data-table-area">
    <div class="container">
        <div class="row" style="margin-top: -2.5%">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="data-table-list">
                    <div class="basic-tb-hd">
                        <h2>Shipping Transaction Table</h2>
                    </div>
                    <button style="margin-left: 94%; margin-top: -7%" type="button" class="btn btn-danger waves-effect btn-sm" data-toggle="modal" data-target="#add"><i class="fa fa-plus"></i> Add</button>
                    <div class="modal fade in" id="add" role="dialog">
                        <div class="modal-dialog modals-default">
                            <form onsubmit="event.preventDefault();submitForm(this,'shippingtransaction/save','shippingtransaction')" enctype="multipart/form-data">
                                {{ _csrf|raw }}
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">×</button>
                                    </div>
                                    <div class="modal-body">
                                        <h2 align="center">Add Transaction</h2>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-element-list">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-4 col-sm- col-xs-4">
                                                        <div class="form-group ic-cmp-int">
                                                            <div class="form-ic-cmp">
                                                                <i class="fa fa-code"></i>
                                                            </div>
                                                            <div class="nk-int-st">
                                                                <input class="form-control" placeholder="Shipping Code" type="text" name="shipping_code" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-4 col-sm- col-xs-4">
                                                        <div class="form-group ic-cmp-int">
                                                            <div class="form-ic-cmp">
                                                                <i class="fa fa-user"></i>
                                                            </div>
                                                            Customer
                                                            <div class="nk-int-st">
                                                                <select class="selectpicker" name="customer_name" required>
                                                                    {%  for customer in customers %}
                                                                    <option value="{{ customer.id }}">{{ customer.name }}</option>
                                                                    {% endfor %}
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-4 col-sm- col-xs-4">
                                                        <div class="form-group ic-cmp-int">
                                                            <div class="form-ic-cmp">
                                                                <i class="fa fa-list-alt"></i>
                                                            </div>
                                                            <div class="nk-int-st">
                                                                <input class="form-control" placeholder="Shipping Details" type="text" name="shipping_details" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-4 col-sm- col-xs-4">
                                                        <div class="form-group ic-cmp-int">
                                                            <div class="form-ic-cmp">
                                                                <i class="fa fa-user"></i>
                                                            </div>
                                                            Shipper
                                                            <div class="nk-int-st">
                                                                <select class="selectpicker" name="shipper_name" required>
                                                                    {%  for shiper in shipers %}
                                                                    <option value="{{ shiper.id }}">{{ shiper.name }}</option>
                                                                    {% endfor %}
                                                                </select>
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
                                                                <p style="margin-top: -9%; font-size: 10px">Pickup Date.</p>
                                                                <input class="form-control" placeholder="" type="date" style="margin-top: -10%" name="pickup_date" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-4 col-sm- col-xs-4">
                                                        <div class="form-group ic-cmp-int">
                                                            <div class="form-ic-cmp">
                                                                <i class="fa fa-calendar"></i>
                                                            </div>
                                                            <div class="nk-int-st">
                                                                <p style="margin-top: -9%; font-size: 10px">Delivery Date.</p>
                                                                <input class="form-control" placeholder="" type="date" style="margin-top: -10%" name="delivery_date" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-5 col-md-4 col-sm- col-xs-4">
                                                        <div class="form-group ic-cmp-int">
                                                            <div class="form-ic-cmp">
                                                                <i class="fa fa-motorcycle"></i>
                                                            </div>
                                                            Driver
                                                            <div class="nk-int-st">
                                                                <select class="selectpicker" name="driver_name" required>
                                                                    {%  for driver in drivers %}
                                                                    <option value="{{ driver.id }}">{{ driver.name }}</option>
                                                                    {% endfor %}
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm- col-xs-4">
                                                        <div class="form-group ic-cmp-int">
                                                            <div class="form-ic-cmp">
                                                                <i class="fa fa-phone"></i>
                                                            </div>
                                                            <div class="nk-int-st">
                                                                <input class="form-control" placeholder="Contact" type="text" name="contact_number" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-sm- col-xs-4">
                                                        <div class="form-group ic-cmp-int">

                                                            <div class="nk-int-st">
                                                                <p style="margin-top: -18%; font-size: 10px">Driver's Fee.</p>
                                                                <input class="form-control" placeholder="00.00" type="number" style="margin-top: -24%" name="drivers_free" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-4 col-sm- col-xs-4">
                                                        <div class="form-group ic-cmp-int">
                                                            <div class="form-ic-cmp">
                                                                <i class="fa fa-money"></i>
                                                            </div>
                                                            <div class="nk-int-st">
                                                                <p style="margin-top: -18%; font-size: 10px">Transaction Amt.</p>
                                                                <input class="form-control" placeholder="00.00" type="number" style="margin-top: -24%" name="transation_amount" required>
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
                                                    <div class="col-lg-4 col-md-4 col-sm- col-xs-4">
                                                        <div class="bootstrap-select fm-cmp-mg">
                                                            <select class="selectpicker" name="status" required>
                                                                <option value="To Ship">To Ship</option>
                                                                <option value="Delivered">Delivered</option>
                                                                <option value="Cancelled">Cancelled</option>
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
                                <th>Shipping Code</th>
                                <th>Customer Name</th>
                                <th>Shipping Details</th>
                                <th>Shipper Name</th>
                                <th>Pickup Date</th>
                                <th>Delivery Date</th>
                                <th>Driver Name</th>
                                <th>Contact</th>
                                <th>Fee</th>
                                <th>Transaction Amount</th>
                                <th>Status</th>
                                <th>Remarks</th>
                                <th style="width: 13%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for item in items %}
                            <tr>
                                <td>{{ item.shipping_code }}</td>
                                <td>{{ function.db().table('people').find(item.customer_name)['name'] }}</td>
                                <td>{{ item.shipping_details }}</td>
                                <td>{{ function.db().table('people').find(item.shipper_name)['name'] }}</td>
                                <td>{{ item.pickup_date }}</td>
                                <td>{{ item.delivery_date }}</td>
                                <td>{{ function.db().table('people').find(item.driver_name)['name'] }}</td>
                                <td>{{ item.contact_number }}</td>
                                <td><b style="color: blue"><i>{{ item.drivers_free }}</i></b></td>
                                <td><b style="color: blue"><i><u>{{ item.transation_amount }}</u></i></b></td>
                                <td><button class="btn btn-success btn-xs">{{ item.status }}</button></td>
                                <td>{{ item.remarks }}</td>
                                <td style="display:flex;">
                                    <button type="button" class="btn btn-info waves-effect btn-sm" data-toggle="modal" data-target="#edit-{{ item.id }}"><i class="fa fa-pencil"></i></button>
                                    <form method="post" onsubmit="event.preventDefault();submitForm(this,'shippingtransaction/delete','shippingtransaction')">
                                        {{ _csrf|raw }}
                                        <input type="hidden" name="id" value="{{ item.id }}" style="display:none;">
                                        <button type="submit" class="btn btn-danger waves-effect btn-sm"><i class="fa fa-trash"></i></button>
                                    </form>
                                    <div class="modal fade in" id="edit-{{ item.id }}" role="dialog">
                                        <div class="modal-dialog modals-default">
                                            <form onsubmit="event.preventDefault();submitForm(this,'shippingtransaction/edit','shippingtransaction')" enctype="multipart/form-data">
                                                {{ _csrf|raw }}
                                                <input type="hidden" name="id" value="{{ item.id }}" style="display:none;">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">×</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h2 align="center">Edit Transaction</h2>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="form-element-list">
                                                                <div class="row">
                                                                    <div class="col-lg-6 col-md-4 col-sm- col-xs-4">
                                                                        <div class="form-group ic-cmp-int">
                                                                            <div class="form-ic-cmp">
                                                                                <i class="fa fa-code"></i>
                                                                            </div>
                                                                            <div class="nk-int-st">
                                                                                <input class="form-control" placeholder="Shipping Code" type="text" name="shipping_code" value="{{ item.shipping_code }}" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-4 col-sm- col-xs-4">
                                                                        <div class="form-group ic-cmp-int">
                                                                            <div class="form-ic-cmp">
                                                                                <i class="fa fa-user"></i>
                                                                            </div>
                                                                            Customer
                                                                            <div class="nk-int-st">
                                                                                <select class="selectpicker" name="customer_name" required>
                                                                                    {%  for customer in customers %}
                                                                                    <option value="{{ customer.id }}" {% if item.customer_name==customer.id %} selected {%endif%}>{{ customer.name }}</option>
                                                                                    {% endfor %}
                                                                                </select>
                                                                            </div>

                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-6 col-md-4 col-sm- col-xs-4">
                                                                        <div class="form-group ic-cmp-int">
                                                                            <div class="form-ic-cmp">
                                                                                <i class="fa fa-list-alt"></i>
                                                                            </div>
                                                                            <div class="nk-int-st">
                                                                                <input class="form-control" placeholder="Shipping Details" type="text" name="shipping_details" value="{{ item.shipping_details }}" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-4 col-sm- col-xs-4">
                                                                        <div class="form-group ic-cmp-int">
                                                                            <div class="form-ic-cmp">
                                                                                <i class="fa fa-user"></i>
                                                                            </div>
                                                                            Shipper
                                                                            <div class="nk-int-st">
                                                                                <select class="selectpicker" name="shipper_name" required>
                                                                                    {%  for shiper in shipers %}
                                                                                    <option value="{{ shiper.id }}" {% if item.shipper_name==shiper.id %} selected {%endif%}>{{ shiper.name }}</option>
                                                                                    {% endfor %}
                                                                                </select>
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
                                                                                <p style="margin-top: -9%; font-size: 10px">Pickup Date.</p>
                                                                                <input class="form-control" placeholder="" type="date" style="margin-top: -10%" name="pickup_date" value="{{ item.pickup_date }}" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-4 col-sm- col-xs-4">
                                                                        <div class="form-group ic-cmp-int">
                                                                            <div class="form-ic-cmp">
                                                                                <i class="fa fa-calendar"></i>
                                                                            </div>
                                                                            <div class="nk-int-st">
                                                                                <p style="margin-top: -9%; font-size: 10px">Delivery Date.</p>
                                                                                <input class="form-control" placeholder="" type="date" style="margin-top: -10%" name="delivery_date" value="{{ item.delivery_date }}" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-5 col-md-4 col-sm- col-xs-4">
                                                                        <div class="form-group ic-cmp-int">
                                                                            <div class="form-ic-cmp">
                                                                                <i class="fa fa-motorcycle"></i>
                                                                            </div>
                                                                            Driver
                                                                            <div class="nk-int-st">
                                                                                <select class="selectpicker" name="driver_name" required>
                                                                                    {%  for  driver in drivers %}
                                                                                    <option value="{{ driver.id }}" {% if item.driver_name==driver.id %} selected {%endif%}>{{ driver.name }}</option>
                                                                                    {% endfor %}
                                                                                </select>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-4 col-sm- col-xs-4">
                                                                        <div class="form-group ic-cmp-int">
                                                                            <div class="form-ic-cmp">
                                                                                <i class="fa fa-phone"></i>
                                                                            </div>
                                                                            <div class="nk-int-st">
                                                                                <input class="form-control" placeholder="Contact" type="text" name="contact_number" value="{{ item.contact_number }}" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3 col-md-4 col-sm- col-xs-4">
                                                                        <div class="form-group ic-cmp-int">

                                                                            <div class="nk-int-st">
                                                                                <p style="margin-top: -18%; font-size: 10px">Driver's Fee.</p>
                                                                                <input class="form-control" placeholder="00.00" type="number" style="margin-top: -24%" name="drivers_free" value="{{ item.drivers_free }}" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-4 col-md-4 col-sm- col-xs-4">
                                                                        <div class="form-group ic-cmp-int">
                                                                            <div class="form-ic-cmp">
                                                                                <i class="fa fa-money"></i>
                                                                            </div>
                                                                            <div class="nk-int-st">
                                                                                <p style="margin-top: -18%; font-size: 10px">Transaction Amt.</p>
                                                                                <input class="form-control" placeholder="00.00" type="number" style="margin-top: -24%" name="transation_amount" value="{{ item.transation_amount }}" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-4 col-sm- col-xs-4">
                                                                        <div class="form-group ic-cmp-int">
                                                                            <div class="form-ic-cmp">
                                                                                <i class="fa fa-edit"></i>
                                                                            </div>
                                                                            <div class="nk-int-st">
                                                                                <input class="form-control" placeholder="Remarks" type="text" name="remarks" value="{{ item.remarks }}" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-4 col-sm- col-xs-4">
                                                                        <div class="bootstrap-select fm-cmp-mg">
                                                                            <select class="selectpicker" name="status" required>
                                                                                <option value="To Ship" {% if item.status=="To Ship"%} selected {% endif %}>To Ship</option>
                                                                                <option value="Delivered" {% if item.status=="Delivered"%} selected {% endif %}>Delivered</option>
                                                                                <option value="Cancelled" {% if item.status=="Cancelled"%} selected {% endif %}>Cancelled</option>
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
                                <th>Shipping Code</th>
                                <th>Customer Name</th>
                                <th>Shipping Details</th>
                                <th>Name</th>
                                <th>Pickup Date</th>
                                <th>Delivery Date</th>
                                <th>Driver Name</th>
                                <th>Contact</th>
                                <th>Fee</th>
                                <th>Transaction Amount</th>
                                <th>Status</th>
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