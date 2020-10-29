@extends('admin.layout')
@section('content')

            <div class="row">
                <div class="col-lg-12">
                    @if (session('error'))
                        <div class="alert alert-danger" role="alert">
                            <strong>{{ session('error') }}</strong>
                        </div>
                    @endif

                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            <strong>{{ session('success') }}</strong>
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-body order-list">
                            <h4 class="header-title mt-0 mb-3">Products List</h4>
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead class="thead-light">
                                    <tr>
                                        <th class="border-top-0">Name</th>
                                        <th class="border-top-0">Amount</th>
                                        <th class="border-top-0">Status</th>
                                        <th class="border-top-0">Type</th>
                                        <th class="border-top-0">Cost Price</th>
                                        <th class="border-top-0">Action</th>
                                    </tr>
                                    <!--end tr-->
                                    </thead>
                                    <tbody>
                                    @foreach($data as $dat)
                                    <tr>
                                        <td>{{$dat->name}}</td>
                                        <td>{{$dat->amount}}</td>
                                        <td>
                                            @if($dat->status==1)
                                                Active
                                            @else
                                                Deactivated
                                            @endif
                                        </td>
                                        <td>{{$dat->product_type}}</td>
                                        <td>{{$dat->cost}}</td>
                                        <td>
                                        <a href="/editproduct/{{$dat->id}}" class="btn btn-success"><i class="fa fa-edit"></i> </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    <!--end tr-->
                                    </tbody>
                                </table>
                                <!--end table-->
                                {{$data->links()}}
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
