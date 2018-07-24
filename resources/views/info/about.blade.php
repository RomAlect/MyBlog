@extends('layout')

@section('header')
@include('site.header')
@endsection

@section('article')
<div class="article">
{!! $about !!}
</div>
@endsection

@section('footer')
@include('site.footer')
@endsection