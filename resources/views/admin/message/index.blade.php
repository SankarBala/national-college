@extends('admin.layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/toastr/toastr.min.css') }}">
@endpush

@section('content')

    <!-- /.card -->
    <div class="card">
        <!-- /.card-header -->
        <div class="card-body">
            <table id="report_table" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Sent</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($messages as $message)
                        <tr>
                            <td>{{ $message->name }}</td>
                            <td>{{ $message->phone }}</td>
                            <td>{{ $message->email }}</td>
                            <td>{{ $message->message }}</td>
                            <td>{{ $message->created_at->format('d-M-y h:m A') }}</td>
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
    <!-- DataTables  & Plugins -->
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('plugins/toastr/toastr.min.js') }}"></script>

    <!-- Page specific script -->
    <script>
        $(function() {
            $("#report_table").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": [
                    // "copy",
                    // "csv", 
                    // "excel", 
                    // "pdf", 
                    // "print", 
                    // "colvis"
                ]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });

        @isset($success)
            toastr.success('{{ $success }}');
        @endisset
    </script>
@endpush
