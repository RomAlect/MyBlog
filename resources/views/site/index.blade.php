@extends('layout')

@section('header')
@include('site.header')
@endsection

@section('categories')
<ul class="nav nav-tabs mt-3" id="myTab" role="tablist">
    @foreach($categories as $k => $category)
    <li class="nav-item">
        <a class="nav-link {{($tab == $category) ? 'active' : '' }}" id="{{$category}}-tab" data-toggle="tab" href="#{{$category}}" 
           role="tab" aria-controls="{{$category}}" aria-selected="true">{{ucfirst($category)}}</a>
    </li>
    @endforeach    
</ul>
<div class="tab-content" id="myTabContent">
    @foreach($categories as $k => $category)
    <div class="tab-pane fade show {{ ($tab == $category) ? 'active' : '' }}" id="{{$category}}" role="tabpanel" aria-labelledby="{{$category}}-tab">
        @if(isset($articles))
        @foreach($articles[$category] as $article)
        @include('site.abstract')
        @endforeach
        @endif
    </div>
    @endforeach
</div>
@endsection

@section('footer')
@include('site.footer')
@endsection

