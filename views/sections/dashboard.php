<!-- Start Status area -->
<div class="notika-status-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                    <div class="website-traffic-ctn">
                        <h2><span class="counter">{{ counts.customers.count }}</span></h2>
                        <p>Total Customers</p>
                    </div>
                    <div class="sparkline-bar-stats1">{{ counts.customers.bar }}</div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                    <div class="website-traffic-ctn">
                        <h2><span class="counter">{{ counts.drivers.count }}</span></h2>
                        <p>Total Drivers</p>
                    </div>
                    <div class="sparkline-bar-stats2">{{ counts.drivers.bar }}</div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                    <div class="website-traffic-ctn">
                        <h2><span class="counter">{{ counts.vehicles.count }}</span></h2>
                        <p>Total Vehicles</p>
                    </div>
                    <div class="sparkline-bar-stats3">{{ counts.vehicles.bar }}</div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                    <div class="website-traffic-ctn">
                        <h2><span class="counter">{{ counts.transactions.count }}</span></h2>
                        <p>Total Shipping Transactions</p>
                    </div>
                    <div class="sparkline-bar-stats4">{{ counts.transactions.bar }}</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="chartContainer" style="height: 390px; width: 100%;"></div>