@extends('layout')

@section('header')
@include('site.header')
@endsection

@section('article')
@if(isset($article))
<div class="article">
    <div class="font-weight-bold" style="color:#7C8598"> 
        <div class="float-left">{{ $article->author }}</div>
        <div class="float-right"> {{ $article->published_at }}</div>
    </div>
    <div class="text-justify mt-5">
        {!! $article_content !!}
    </div>    
</div>
@endif
@endsection

@section('footer')
@include('site.footer')
@endsection