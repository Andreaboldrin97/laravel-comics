@extends('layout.main')

@section('page','comics')

@section('content')
<main class="bg-dark">
    <div class="hero_series position-relative">
        <img src="../assets/img/jumbotron.jpg" alt="">
        <div class="px-5 position-absolute bottom-0 start-0 container-btn-series">
            <span class="btn-series px-4 py-2 mx-4"><a class="text-white" href="">CURRENT SERIES</a></span>
        </div>
    </div>
    <div class="text-white px-5 py-5 container-fluid">
        <div class="px-5 row">


        </div>
        <div class="text-white text-center  mt-3">
            <span class="btn-load-more px-5 py-2">LOAD MORE</span>
        </div>
    </div>
</main>
@endsection