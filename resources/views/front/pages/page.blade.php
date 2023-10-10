@extends('layouts.front')
@section('meta')
    <title>{{$title}}</title>
    <meta name="title" content="{{$meta_title}}">
    <meta name="description" content="{{$meta_description}}">
@endsection
@section('content')
    <div class="py-5">
    </div>
    <h2 class="text-center my-2 pt-5 pb-2">{{$title}}</h2>
    <div class="container mb-5 pb-5">
        {!! $content !!}
    </div>
@endsection
