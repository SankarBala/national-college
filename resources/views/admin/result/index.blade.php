@extends('admin.layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/toastr/toastr.min.css')}}">
@endpush

@section('content')

    <!-- /.card -->
    <div class="card">
        <!-- /.card-header -->
        <div class="card-body">
            <table id="report_table" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Result ID</th>
                        <th>Title</th>
                        <th>Status</th>
                        <th>Updated at</th>
                        <th class="float-right">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($results as $result)

                        <tr>
                            <td>{{ $result->id }}</td>
                            <td>{{ $result->title }}</td>
                            <td>{{ $result->status }}</td>
                            <td class="float-right">
                                @if ($result->attachment)
                                    <a class="btn btn-info" href="{{ asset('storage/' . $result->attachment) }}"
                                        target="_blank">
                                        View
                                    </a>
                                @endif
                                <a class="btn btn-warning" href="{{ route('admin.result.edit', $result) }}">
                                    Edit
                                </a>

                                <form method="post" action="{{ route('admin.result.destroy', $result) }}"
                                    style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <input class="btn btn-danger" type="submit" value="Delete" />
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
   
@endsection

@push('scripts')
@endpush
