<div class="data-table-area">
    <div class="container">
        <div class="row" style="margin-top: -2.5%">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="data-table-list">
                    <div class="basic-tb-hd">
                        <h2>Driver Accomplishment Report Table</h2>
                        <div style="margin-left: 35%; margin-top: -3%">
                            <form>
                                <label>Date From :</label> <input type="date" name="datefrom">
                                <label>Date To :</label> <input type="date" name="dateto">
                                <button type="submit" class="btn btn-info btn-sm"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>



                    <div class="table-responsive">
                        <table id="data-table-basic" class="table table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 70%">Name</th>
                                    <th>Total Amount</th>

                                </tr>
                            </thead>
                            <tbody>
                                {% for item in items %}
                                <tr>
                                    <td>{{ function.db().table('people').find(item.driver_name)['name'] }}</td>
                                    <td><b style="color: blue"><i>Rs.{{ item.drivers_free}}/-</i></b></td>
                                </tr>
                                {% endfor %}

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Total Amount</th>

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
                                            <h2 align="center">Edit Driver Accomplishment</h2>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-element-list">

                                                    <div class="row">
                                                        <div class="col-lg-7 col-md-4 col-sm- col-xs-4">
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="form-ic-cmp">
                                                                    <i class="fa fa-edit"></i>
                                                                </div>
                                                                <div class="nk-int-st">
                                                                    <input class="form-control" placeholder="Enter Name" type="text">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-5 col-md-4 col-sm- col-xs-4">
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="form-ic-cmp">
                                                                    <i class="fa fa-money"></i>
                                                                </div>
                                                                <div class="nk-int-st">
                                                                    <p style="margin-top: -20%; font-size: 10px">Total Amount(Driver's Fee).</p>
                                                                    <input class="form-control" placeholder="00.00" type="number" style="margin-top: -12%">
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