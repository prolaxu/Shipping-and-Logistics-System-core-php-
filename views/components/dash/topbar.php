    <!-- Start Header Top Area -->
    <div class="header-top-area" style="background-color: #d9534f; ">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="logo-area">
                        <a href="#"><strong><i class="fa fa-laptop" style="color:white; font-size: 24px;"> Shipping and Logistics System</i></strong> </a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="header-top-menu">
                        <ul class="nav navbar-nav notika-top-nav">

                            <li style="margin-left: 70%" class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-support"></i></span></a>
                                <div role="menu" class="dropdown-menu message-dd task-dd animated zoomIn">
                                    <div class="hd-mg-tt">
                                        <h2><i class="notika-icon notika-support"></i> Emanuel Sensya</h2>
                                    </div>
                                    <div class="hd-message-info hd-task-info">
                                        <form action="{{function.routePath('/logout')}}" method="post">
                                            {{ _csrf|raw }}
                                            <button class="btn btn-danger btn-sm" style="width: 100%" type="submit"><i class="fa fa-sign-out"></i>Log out</button>
                                        </form>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top Area -->