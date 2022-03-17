@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Achivement</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Achivements</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content mb-2">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Achivement</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="report_table" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Attachment</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($achivements as $achivement)
                                    <tr>
                                        <td>{{ $achivement->title }}</td>
                                        <td>{{ $achivement->description }}</td>
                                        <td>{{ $achivement->status }}</td>
                                        <td>
                                            @if ($achivement->attachment)
                                                <a href="{{ asset('storage/' . $achivement->attachment) }}"
                                                    target="_blank">
                                                    <img src="{{ asset('storage/' . $achivement->attachment) }}"
                                                        width="100">
                                                </a>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.achivement.edit', $achivement) }}"
                                                class="btn btn-primary btn-sm my-2">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="{{ route('admin.achivement.destroy', $achivement) }}"
                                                method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm my-2">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
    </section>
    <!-- /.content -->
@endsection
