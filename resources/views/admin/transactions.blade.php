@extends('admin.layout')
@section('content')

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body order-list">
                            <h4 class="header-title mt-0 mb-3">Transactions List</h4>
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead class="thead-light">
                                    <tr>
                                        <th class="border-top-0">Description</th>
                                        <th class="border-top-0">Payment Reference</th>
                                        <th class="border-top-0">Price</th>
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
                                        <td>{{$buy->price}}</td>
                                        <td>{{$buy->ipaddress}}</td>
                                        <td>{{$buy->device}}</td>
                                        <td>{{$buy->date}}</td>
                                    </tr>
                                    @endforeach
                                    <!--end tr-->
                                    </tbody>
                                </table>
                                <!--end table-->
                                {{$buys->links()}}
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
