@extends("layouts.app")

@section('content')
    <section class="breadcrumbs overlay">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Our Achivements</h2>
                    <ul class="bread-list">
                        <li><a href="index-2.html">Home<i class="far fa-angle-right"></i></a></li>
                        <li class="active"><a href="#">Achivements</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <section class="faq page section">
        <div class="container">
            <div class="row">

                @foreach ($achievements as $achivement)
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <p class="card-title" style="font-size:14px; height: 50px;">{{ $achivement->title }}</p>
                            </div>
                            <div class="card-body">
                                <a href="{{ route('achievement', $achivement) }}">
                                    <img src="{{ asset('storage/' . $achivement->attachment) }}" width="100%"
                                        style="height: 300px;" />
                                </a>
                                <hr />
                                <p class="text-justify" style="font-size:14px; height: 100px;">{{ Str::words($achivement->description, 20) }}</p>
                            </div>
                            <div class="card-footer d-flex justify-content-between">
                                <p class="mt-2">{{$achivement->created_at->format('Y-m-d h:m A') }}</p>
                                <a href="{{ route('achievement', $achivement) }}" class="btn btn-info">View</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
@endsection
