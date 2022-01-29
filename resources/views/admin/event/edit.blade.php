@extends('admin.layouts.app')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Event Add</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Event create</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content mb-2">
        <form action="{{ route('admin.event.update', $event) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Event</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputName">Event title</label>
                                <input type="text" id="inputName" class="form-control" name="title"
                                    value="{{ $event->title }}" required>
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">Event Description</label>
                                <textarea id="inputDescription" class="form-control" rows="4"
                                    name="description"> {{ $event->description }} </textarea>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <!-- Date and time range -->
                                    <div class="form-group">
                                        <label>Event time</label>

                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="far fa-clock"></i></span>
                                            </div>
                                            <input name="eventTimeRange" type="text" class="form-control float-right"
                                                id="eventRange">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <!-- /.form group -->
                                </div>


                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="attachment">Change Event Picture</label>

                                        <div class="row">
                                            <div class="col-9">
                                                <input id="attachment" class="form-control custom-select" type="file"
                                                    name="attachment" accept="image/*">
                                            </div>
                                            @isset($event->event_picture)
                                                <div class="col-3">
                                                    <a class="btn btn-info px-5"
                                                        href="{{ asset('storage/' . $event->event_picture) }}"
                                                        target="_blank">
                                                        View
                                                    </a>
                                                </div>
                                            @endisset
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="row p-4">
                            <div class="col-12">
                                <a href="{{ route('admin.index') }}" class="btn btn-secondary">Cancel</a>
                                <input type="submit" value="Update event" class="btn btn-success float-right">
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


@push('styles')
    <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>

    <script>
        $(function() {
            $('#eventRange').daterangepicker({
                timePicker: true,
                timePickerIncrement: 15,
                locale: {
                    format: 'DD/MM/YYYY hh:mm A'
                },
                minDate: '{{ date('d-m-Y') }}',
                maxDate: '{{ date('d-m-Y', strtotime('+1 year')) }}',
                startDate: '{{ $event->startTime}}',
                endDate: '{{ $event->endTime }}'
            })
        });
    </script>
@endpush
