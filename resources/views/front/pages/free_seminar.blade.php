@extends('layouts.front')
@section('meta')
    <title></title>
    <meta name="title" content="">
    <meta name="description" content="">
@endsection
@section('content')
    <section id="instructors_teachers" class="free_seminer_schedule">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="facilities_heading ">
                        <h1>Free Seminar Schedule</h1>
                        <div class="dtails">
                            <p><span style="font-weight: 400;">Can’t decide which course you want to enroll into? Want to know more about the career opportunities or the facilities we provide? We are here to answer all your queries every week.  We organize course-based seminars where the mentors give an overview of the course and discuss the job prospects. Join the seminars to choose the course that best fits your interest.</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="seminar">
        <div class="container seminar seminer_schedule">
            <div class="seminar_desp">
                <ul class="nav nav-pills mb-3 tab_seminar" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link" href="free-seminar/1.html">Head Office</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="free-seminar/3.html">Uttara Branch</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="free-seminar/4.html">Online</a>
                    </li>
                </ul>
                <hr>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="seminar_content">
                        <ul>
                            <li>
                                <div class="date">06<span>Oct , 23</span></div>
                                <div class="text_main">
                                    <div class="text">
                                        <h4>3D Animation</h4>
                                        <p>Creative IT Head Office,   Time: 04:00 PM</p>
                                    </div>
                                    <div class="join_btn"><a href="register-for-free-seminar/15.html">জয়েন</a></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="courseslide">
        <div class="container populer_courses" style="background: transparent">
            <div class="row">
                <div class="col-12">
                    <div class="section_heading">
                        <h2>Admission Is Going on</h2>
                        <p>Enroll to any online or offline course now, take one step ahead towards a competent career.</p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="course_mix_btn">
                        <button class="course_single_btn"><span>All Course</span></button>
                        @foreach(getDepartments() as $department)
                            <button class="course_single_btn"><span>{{$department->name}}</span></button>
                        @endforeach
                    </div>
                </div>
                <!-- Tab Body -->
                <div class="course_body_slider">
                    @include('front.includes.course_category_item',['id'=>0])
                    @foreach(getDepartments() as $department)
                        @include('front.includes.course_category_item',['id'=>$department->id])
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
