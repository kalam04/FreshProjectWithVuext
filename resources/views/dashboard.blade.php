@extends('admin.master')


@section('main-content')

    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">


            <div class="content-body">

                <div class="section-body">



                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="card">
                                <div class="card-body no-padding ">
                                    <div class="alert alert-callout alert-info no-margin twitter-bg ">
                                        <!--<strong class="pull-right text-success text-lg">0,38% <i class="md md-trending-up"></i></strong>-->
                                        <strong class="text-xl ng-binding"></strong><br>
                                        <span class="opacity-75">Today's Sale Value</span>
                                        <div class="stick-bottom-left-right ">
                                            <div class="height-2 sparkline-revenue" data-line-color="#bdc1c1"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 ">
                            <div class="card">
                                <div class="card-body no-padding">
                                    <div class="alert alert-callout alert-warning no-margin blue-bg ">
                                        <!--<strong class="pull-right text-warning text-lg">0,01% <i class="md md-swap-vert"></i></strong>-->
                                        <strong class="text-xl ng-binding"></strong><br>
                                        <span class="opacity-75">Last 7 days Sale Value</span>
                                        <div class="stick-bottom-right">
                                            <div class="height-1 sparkline-visits" data-bar-color="#e5e6e6"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="card">
                                <div class="card-body no-padding">
                                    <div class="alert alert-callout alert-danger no-margin brown-bg ">
                                        <!--<strong class="pull-right text-danger text-lg">0,18% <i class="md md-trending-down"></i></strong>-->
                                        <strong class="text-xl ng-binding"></strong><br>
                                        <span class="opacity-75">Current Month Sale Value</span>
                                        <div class="stick-bottom-left-right">
                                            <div class="progress progress-hairline no-margin">
                                                <div class="progress-bar progress-bar-danger" style="width:100%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="card">
                                <div class="card-body no-padding">
                                    <div class="alert alert-callout alert-success no-margin lime-bg ">
                                        <h1 class="pull-right text-success"><i class="md md-timer"></i></h1>
                                        <strong class="text-xl ng-binding"></strong><br>
                                        <span class="opacity-75">Last Month Sale Value</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card ">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card-head">
                                            <header>Last 7 Days Sale</header>
                                        </div >
                                        <div class="col-md-12">
                                            <div id="piechart"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end .card -->
                        </div>
                        <div class="col-md-6">
                            <div class="card ">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card-head">
                                            <header>Category Wise Sale</header>
                                        </div>
                                        <div class="col-md-12">
                                            <div id="piechart2"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card ">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card-head">
                                            <header>Best Sell Product</header>
                                        </div>
                                        <div id="productwise"></div>
                                    </div>
                                </div>
                            </div>
                            <!--end .card -->
                        </div>
                        <div class="col-md-6">
                            <div class="card ">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card-head">
                                            <header>Lowest Sell Product</header>
                                        </div>
                                        <div id="productwiselowtohigh"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="card ">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card-head">
                                            <header>This Year Sale</header>
                                        </div>
                                        <div id="monthlySale"></div>
                                    </div>
                                </div>
                            </div>
                            <!--end .card -->
                        </div>

                    </div>


                </div>



            </div>
        </div>
    </div>

@endsection

@push('script')




