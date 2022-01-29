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
                        <th>Event ID</th>
                        <th>Title</th>
                        <th>Event Time</th>
                        <th class="float-right">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($events as $notice)

                        <tr>
                            <td>{{ $notice->id }}</td>
                            <td>{{ $notice->title }}</td>
                            <td>{{ $notice->startTime }} - {{ $notice->endTime}}</td>
                            <td class="float-right">
                                @if ($notice->attachment)
                                    <a class="btn btn-info" href="{{ asset('storage/' . $notice->attachment) }}"
                                        target="_blank">
                                        View
                                    </a>
                                @endif
                                <a class="btn btn-warning" href="{{ route('admin.event.edit', $notice->id) }}">
                                    Edit
                                </a>

                                <form method="post" action="{{ route('admin.event.destroy', $notice) }}"
                                    style="display: inline;">
                                    {{-- @csrf --}}
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
    <!-- DataTables  & Plugins -->
    <script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('plugins/jszip/jszip.min.js')}}"></script>
    <script src="{{asset('plugins/pdfmake/pdfmake.min.js')}}"></script>
    <script src="{{asset('plugins/pdfmake/vfs_fonts.js')}}"></script>
    <script src="{{asset('plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
    <script src="{{asset('plugins/toastr/toastr.min.js')}}"></script>

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
