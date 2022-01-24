@extends('layouts.main')
@section('title')
    {!!$post->title!!}
@endsection
@section('linkBeginning', '../')
@section('head')
    <link rel="stylesheet" href="./../css/owl.carousel.css">
    <link rel="stylesheet" href="./../css/owl.theme.default.css">
@endsection

@section('bodyTag')
    class="bg-gray"
@endsection

@section('content') 
    {!!$post->body!!}
      
<div class="mx-md-5 px-md-5">
    <div class="kontakti-bg">
        <h1 class="text-center red h3 py-4">CITI RAKSTI</h1>
            <section>
                <div class="brand-carousel owl-carousel container citi-raksti-size position-relative px-5">
                @foreach($posts as $item) 
                    @if($item->id != $post->id) 
                    <div class="single-logo partneri-box">
                        <a href="/jaunumi/{{$item->id}}" class="h-40">
                            <div class="d-flex justify-content-center">
                                <img src="./.{{$item->img}}" alt="Raksta attēls" class="citi-raksti-img">
                            </div>
                            <h2 class="red h5 text-center pt-3">{{$item->title}}</h2>
                        </a>
                    </div>
                    @endif
                @endforeach
                </div>
            </section>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    {!!$post->scripts!!})
    <script src="./../js/jquery-3.2.1.min.js"></script>
    <script src="./../Js/owl.carousel.min.js"></script>
@endsection