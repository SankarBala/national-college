@extends('layouts.app')

@push('styles')
@endpush

@section('content')
    <section class="py-4">
        <div class="container">

            <div class="col">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h6 class="card-title">{{ $notice->title }}</h6>

                    </div>

                    @isset($notice->description)
                        <div class="card-body p-3">
                            <div class="mailbox-read-message">
                                <p>{{ $notice->description }}</p>
                            </div>
                        </div>
                    @endisset

                    <div class="card-footer">
                        <div class="row">
                            <div class="col-6">
                                @isset($notice->attachment)
                                    <a href="{{ asset('storage/' . $notice->attachment) }}"
                                        class="btn btn-default btn-sm float-left" download> <i class="fas fa-download"></i>
                                        Download</a>
                                @endisset

                            </div>
                            <div class="col-6 float-right">
                                <p>Updated: {{ $notice->updated_at->format('Y-m-d h:m A') }}</p>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
@endpush
