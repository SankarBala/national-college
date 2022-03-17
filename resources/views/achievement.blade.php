@extends("layouts.app")

@section('content')
    <section class="breadcrumbs overlay">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Our Achivements</h2>
                    <ul class="bread-list">
                        <li><a href="{{ route('index') }}">Home<i class="far fa-angle-right"></i></a></li>
                        <li><a href="{{ route('achievements') }}">Achivements<i class="far fa-angle-right"></i></a></li>
                        <li class="active"><a href="#">{{ $achivement->id }}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <section class="faq page section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4 class="text-center">{{ $achivement->title }}</h4>
                </div>
                <img src="{{ asset('storage/' . $achivement->attachment) }}" width="100%" />
                <p class="text-justify my-5 py-5">{{ $achivement->description }}</p>
            </div>
        </div>
    </section>
@endsection
