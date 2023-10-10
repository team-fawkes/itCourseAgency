@extends('layouts.front')
@section('meta')
    <title>{{$department->name}}</title>
    <meta name="title" content="{{$department->name}}">
    <meta name="description" content="">
@endsection
@section('content')
    <section id="admission" class="mt-5 pt-5 pb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section_heading course_cat_heading mb-5">
                        <h1>{{$department->name}}</h1>
                        <p>{{$department->description}}</p>
                    </div>
                </div>
                @foreach(getDepartmentCourse($department->id) as $course)
                @include('front.includes.course_item')
                @endforeach
            </div>
        </div>
    </section>
@endsection
