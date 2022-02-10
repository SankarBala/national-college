@extends("layouts.app")

@section('content')

    <section class="breadcrumbs overlay">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>404 Error</h2>
                    <ul class="bread-list">
                        <li><a href="index-2.html">Home<i class="far fa-angle-right"></i></a></li>
                        <li class="active"><a href="#">404 Error</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <section class="error-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">

                    <div class="error-inner">
                        <h2>4<span>0</span>4</h2>
                        <h4>Oops! Page Not Found.</h4>
                        <p class="mt-2">The page you are looking for not found may be the page not exist or
                            removed.</p>
                        <form class="search-form">
                            <input placeholder="Search Here..." type="text">
                            <button class="btn" type="submit"><i class="far fa-search"></i></button>
                        </form>
                        <div class="button">
                            <a href="index-2.html" class="btn">Go Back Home</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection
