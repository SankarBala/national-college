@extends('admin.layouts.app')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Notice Edit</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Notice Edit </li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content mb-2">
        <form action="{{ route('admin.notice.update', $notice->id) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="row">
                <div class="col">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Notice</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputName">Notice title</label>
                                <input type="text" id="inputName" class="form-control" name="title"
                                    value="{{ $notice->title }}" required>
                                {{-- @error('title')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror --}}
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">Notice Description</label>
                                <textarea id="inputDescription" class="form-control" rows="4"
                                    name="description"> {{ $notice->description }} </textarea>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="inputStatus">Status</label>
                                        <select id="inputStatus" class="form-control custom-select" name="status">
                                            <option value="publish" {{ $notice->status == 'publish' ? 'selected' : '' }}>
                                                Published</option>
                                            <option value="draft" {{ $notice->status == 'draft' ? 'selected' : '' }}>
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
                                                    href="{{ asset('storage/' . $notice->attachment) }}" target="_blank">
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
