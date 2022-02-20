<div class="data-table-area">
    <div class="container">
        <div class="row" style="margin-top: -2.5%">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="data-table-list">
                    <div class="basic-tb-hd">
                        <h2>Driver Accomplishment Report Details Table</h2>

                    </div>

                    <div class="table-responsive">
                        <table id="data-table-basic" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Shipping Code</th>
                                    <th>Driver's Fee</th>
                                    <th>Customer Name</th>
                                    <th>Date Delivered</th>

                                </tr>
                            </thead>
                            <tbody>
                                {% for item in items %}
                                <tr>
                                    <td><small>{{ item.shipping_code }}</small></td>
                                    <td><b style="color: blue"><i>Rs.{{ item.drivers_free }}/-</i></b></td>
                                    <td>{{ function.db().table('people').find(item.customer_name)['name'] }}</td>
                                    <td>{{ item.delivery_date }}</td>
                                </tr>
                                {% endfor %}
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Shipping Code</th>
                                    <th>Driver's Fee</th>
                                    <th>Customer Name</th>
                                    <th>Date Delivered</th>

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