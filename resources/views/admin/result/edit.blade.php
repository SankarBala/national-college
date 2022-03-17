@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Result Edit</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Result edit</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content mb-2">
        <form action="{{ route('admin.result.update', $result) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="row">
                <div class="col">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Result</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputName">Result title</label>
                                <input type="text" id="inputName" class="form-control" name="title"
                                    value="{{ $result->title }}" required />
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">Class</label>
                                <input type="text" id="inputClass" class="form-control" name="class"
                                    value="{{ $result->class}}" required />
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="inputStatus">Status</label>
                                        <select id="inputStatus" class="form-control custom-select" name="status">
                                            <option value="published" {{ $result->status == 'published' ? 'selected' : '' }}>
                                                Published</option>
                                            <option value="draft" {{ $result->status == 'draft' ? 'selected' : '' }}>
                                                Draft
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="attachment">Change Attachment</label>

                                        <div class="row">
                                            <div class="col-9">
                                                <input id="attachment" class="form-control custom-select" type="file"
                                                    name="attachment" />
                                            </div>
                                            <div class="col-3">
                                                <a class="btn btn-info px-5"
                                                    href="{{ asset('storage/' . $result->attachment) }}" target="_blank">
                                                    View
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="row p-4">
                            <div class="col-12">
                                <a href="{{ route('admin.index') }}" class="btn btn-secondary">Cancel</a>
                                <input type="submit" value="Update Result" class="btn btn-success float-right">
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
