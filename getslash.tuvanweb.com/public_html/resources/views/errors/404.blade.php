@php SEO::setTitle(404); @endphp
@extends('frontend.master')
@section('main')
    <section class="error">
        <div class="container">
            <div class="content-error text-center">
                <div class="avarta-err"><img src="{{ __BASE_URL__ }}/images/404.jpg" class="img-fluid" alt=""></div>
                <h1>Oops! Page Not Found :(</h1>
                <div class="go-home"><a href="{{ url('/') }}" class="text-uppercase">reload</a></div>
            </div>
        </div>
    </section>
@stop
