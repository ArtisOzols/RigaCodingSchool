@extends('layouts.main')

@section('title', 'MAILOS - Jaunumi')

@section('bodyTag')
    class="bg-gray"
@endsection

@section('content')
<div class="kontakti-bg mx-2 mx-md-5">
    <h1 class="title text-center text-md-left">Jaunākie raksti</h1>
    <div class="mt-5 px-md-5 px-3">
        <div class="row d-flex justify-content-center mb-5">
            <div class="col-12 col-md-9 px-0 raksta-bg pb-md-0">
                    <a href="/jaunumi/{{$onePost[0]->id}}" class="d-block pb-3">
                        <div class="d-flex justify-content-center jaunākā-raksta-h">
                            <img src="{{$onePost[0]->img}}" alt="Raksta attēls" class="raksti-img">
                        </div>
                        <div class="px-4">
                            <h2 class="red h4 text-center pt-3">{{$onePost[0]->title}}</h2>
                            {!!$onePost[0]->excert_short!!}
                            <span class="time">{{$onePost[0]->created_at->diffForHumans()}}</span>
                        </div>
                    </a>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            @foreach($restOfPosts as $postItem) 
                <div class="col-12 col-md-5 col-lg-3 raksta-bg raksta-min-h mb-5 mx-md-3 pt-3">
                    <a href="/jaunumi/{{$postItem->id}}" class="d-block pb-3">
                        <div class="d-flex justify-content-center h-40">
                            <img src="{{$postItem->img}}" alt="Raksta attēls" class="raksti-img">
                        </div>
                        <h2 class="red h4 text-center pt-3">{{$postItem->title}}</h2>
                        {!!$postItem->excert_short!!}
                        <span class="time">{{$postItem->created_at->diffForHumans()}}</span>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection