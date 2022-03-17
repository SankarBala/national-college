@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid py-2">


        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Settings</h3>
            </div>
            <div class="card-body">
                <form action="{{route('admin.setting.store')}}" method="post" enctype="multipart/form">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Site Name</label>
                                <input type="text" class="form-control" value="{{option('brand')}}" name="brand">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tagline</label>
                                <input type="text" class="form-control" value="{{option('tagline')}}" name="tagline">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" class="form-control" value="{{option('phone')}}" name="phone">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" value="{{option('email')}}" name="email">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" class="form-control" value="{{option('address')}}" name="address">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>&nbsp;</label>
                                <input type="submit" class="form-control btn btn-success" value="Update">
                            </div>
                        </div>
                    </div>

                </form>

            </div>
            <!-- /.card-body -->
        </div>
    </div>
@endsection
