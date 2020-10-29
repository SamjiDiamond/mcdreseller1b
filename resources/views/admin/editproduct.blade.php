@extends('admin.layout')
@section('content')

    <div class="row">
        <div class="col-lg-12 col-xl-9 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mt-0 mb-3">Edit Product</h4>
                    <div class="">
                        <form method="POST" action="/editproduct" class="form-horizontal form-material mb-0">
                            @csrf
                            <input type="hidden" name="id" value="{{$data->id}}" class="form-control">

                    <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" placeholder="Name" value="{{$data->name}}" class="form-control"></div>
                            <div class="form-group">
                                <label>Selling Price</label>
                                <input type="amount" name="amount" placeholder="amount" value="{{$data->amount}}" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Cost Price</label>
                                <input type="amount" disabled placeholder="amount" value="{{$data->cost}}" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Status</label>
                                    <select class="form-control" name="status">
                                        <option value="1" @if($data->status==1) Selected @endif>Activate</option>
                                        <option value="0" @if($data->status==0) Selected @endif>De-activate</option>
                                    </select>
                            </div>

                            <div class="form-group"><button class="btn btn-gradient-primary btn-sm px-4 mt-3 float-right mb-0">Update Profile</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--end col-->
    </div>
    <!--end row-->
@stop
