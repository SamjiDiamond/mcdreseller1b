@extends('admin.layout')
@section('content')
            <div class="row">
                <div class="col-lg-4">
                    <div class="card card-eco">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-8">
                                    <h4 class="title-text mt-0">Transaction Today</h4>
                                    <h3 class="font-weight-semibold mb-1">{{$tdbuys}}</h3>
                                </div>
                                <!--end col-->
                                <div class="col-4 text-center align-self-center">
                                    <!-- <span class="card-eco-icon">👳🏻</span> --> <i class="dripicons-cart card-eco-icon align-self-center"></i>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                            <div class="bg-pattern"></div>
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
                <!--end col-->
                <div class="col-lg-4">
                    <div class="card card-eco">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-8">
                                    <h4 class="title-text mt-0">Attempt Today</h4>
                                    <h3 class="font-weight-semibold mb-1">{{$tdattempts}}</h3>

                                </div>
                                <!--end col-->
                                <div class="col-4 text-center align-self-center">
                                    <!-- <span class="card-eco-icon">🛒</span> --> <i class="dripicons-cart card-eco-icon align-self-center"></i>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                            <div class="bg-pattern"></div>
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
                <!--end col-->
                <div class="col-lg-4">
                    <div class="card card-eco">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-8">
                                    <h4 class="title-text mt-0">Total Trasactions</h4>
                                    <h3 class="font-weight-semibold mb-1">{{$tbuys}}</h3>
                                </div>
                                <!--end col-->
                                <div class="col-4 text-center align-self-center">
                                    <!-- <span class="card-eco-icon">🎲</span> --> <i class="dripicons-cart card-eco-icon align-self-center"></i>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                            <div class="bg-pattern"></div>
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
                <!--end col-->
{{--                <div class="col-lg-3">--}}
{{--                    <div class="card card-eco">--}}
{{--                        <div class="card-body">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-8">--}}
{{--                                    <h4 class="title-text mt-0">Revenue</h4>--}}
{{--                                    <h3 class="font-weight-semibold mb-1">$1590</h3>--}}
{{--                                </div>--}}
{{--                                <!--end col-->--}}
{{--                                <div class="col-4 text-center align-self-center">--}}
{{--                                    <!-- <span class="card-eco-icon">💰</span> --> <i class="dripicons-wallet card-eco-icon align-self-center"></i>--}}
{{--                                </div>--}}
{{--                                <!--end col-->--}}
{{--                            </div>--}}
{{--                            <!--end row-->--}}
{{--                            <div class="bg-pattern"></div>--}}
{{--                        </div>--}}
{{--                        <!--end card-body-->--}}
{{--                    </div>--}}
{{--                    <!--end card-->--}}
{{--                </div>--}}
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body order-list">
                            <h4 class="header-title mt-0 mb-3">Recent Transactions</h4>
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead class="thead-light">
                                    <tr>
                                        <th class="border-top-0">Description</th>
                                        <th class="border-top-0">Payment Reference</th>
{{--                                        <th class="border-top-0">Transaction Reference</th>--}}
                                        <th class="border-top-0">Ip Address</th>
                                        <th class="border-top-0">Device</th>
                                        <th class="border-top-0">Date</th>
                                    </tr>
                                    <!--end tr-->
                                    </thead>
                                    <tbody>
                                    @foreach($buys as $buy)
                                    <tr>
                                        <td>{{$buy->response}}</td>
                                        <td>{{$buy->payment_ref}}</td>
{{--                                        <td>{{$buy->ref}}</td>--}}
                                        <td>{{$buy->ipaddress}}</td>
                                        <td>{{$buy->device}}</td>
                                        <td>{{$buy->date}}</td>
                                    </tr>
                                    @endforeach
                                    <!--end tr-->
                                    </tbody>
                                </table>
                                <!--end table-->
                            </div>
                            <!--end /div-->
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
                <!--end col-->
            </div>
@stop
