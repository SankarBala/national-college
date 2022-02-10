@extends('admin.layouts.app')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Teacher enroll</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Teacher add</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content mb-2">
        <form action="{{ route('admin.teacher.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">


                <div class="col">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Teacher</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputId">Teacher ID</label>
                                <input type="number" id="inputId" class="form-control" name="teacher_id"
                                    value="{{ old('teacher_id') }}" placeholder="If available" />
                                @error('teacher_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputName">Teacher name</label>
                                <input type="text" id="inputName" class="form-control" name="name"
                                    value="{{ old('name') }}" />
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputPhone">Teacher phone</label>
                                <input type="text" id="inputPhone" class="form-control" name="phone"
                                    value="{{ old('phone') }}" />
                                @error('phone')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputEmail">Teacher email</label>
                                <input type="email" id="inputEmail" class="form-control" name="email"
                                    value="{{ old('email') }}" />
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>


                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="inputName">Teacher Designation</label>
                                        <input type="text" id="inputName" class="form-control" name="designation"
                                            value="{{ old('designation') }}" />
                                        @error('designation')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="photo">Photo</label>
                                        <input id="photo" class="form-control custom-select" type="file" name="photo"
                                            accept="image/*" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="row p-4">
                            <div class="col-12">
                                <a href="{{ route('admin.index') }}" class="btn btn-secondary">Cancel</a>
                                <input type="submit" value="Save teacher info" class="btn btn-success float-right">
                            </div>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </form>
    </section>
    <!-- /.content -->

@endsection
