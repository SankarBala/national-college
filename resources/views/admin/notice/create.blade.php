@extends('admin.layouts.app')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Notice Add</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Notice create</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content mb-2">
        <form action="{{ route('admin.notice.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                {{$errors}}
                <div class="col">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Notice</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputName">Notice title</label>
                                <input type="text" id="inputName" class="form-control" name="title"
                                    value="{{ old('title') }}" required>
                                {{-- @error('title')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror --}}
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">Notice Description</label>
                                <textarea id="inputDescription" class="form-control" rows="4"
                                    name="description"> {{ old('description') }} </textarea>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="inputStatus">Status</label>
                                        <select id="inputStatus" class="form-control custom-select" name="status">
                                            <option value="publish" checked>Published</option>
                                            <option value="draft">Draft</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="attachment">Attachment</label>
                                        <input id="attachment" class="form-control custom-select" type="file"
                                            name="attachment"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="row p-4">
                            <div class="col-12">
                                <a href="{{ route('admin.index') }}" class="btn btn-secondary">Cancel</a>
                                <input type="submit" value="Publish Notice" class="btn btn-success float-right">
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
