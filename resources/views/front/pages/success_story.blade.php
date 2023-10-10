@extends('layouts.front')
@section('meta')
    <title>Success Story of Creative IT Institute Students</title>
    <meta name="title" content="Professional IT Training Institute in Bangladesh - Creative IT">
    <meta name="description" content="Develop your professional skills through CIT We provide Graphic Design, Digital Marketing, Web Design Development, 3d Animation, etc Call 880 1624 666 000">
@endsection
@section('content')
    <section id="our_facilities">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="navbar_btn text-center d-md-none"><a href="our-courses.html">
                            Browse Course<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-down" class="svg-inline--fa fa-angle-down " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                <path fill="currentColor" d="M192 384c-8.188 0-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L192 306.8l137.4-137.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-160 160C208.4 380.9 200.2 384 192 384z">
                                </path>
                            </svg>
                        </a></div>
                    <div class="facilities_heading all_courses">
                        <h1>Success Stories</h1>
                        <div>
                            <p>The bright presence of our students in the marketplace inspires us, motivates us to engage more people with our vision to make a better future. During the last 14 years, hundreds of thousands people learned and grew their expertise with us. Bringing economic stability to their own life, many students created job opportunities for others. We always appreciate this wonderful journey of our keen learners.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="success_story">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="success_tabs">
                        <ul class="success_menu nav nav-tabs" role="tablist">
                            @php $active = 'active' @endphp
                            @foreach(getDepartments() as $department)
                                <li class="nav-item" role="presentation">
                                    <button type="button" id="case-{{$department->slug}}-placement-tab" role="tab" data-bs-toggle="tab" data-bs-target="#case-{{$department->slug}}-placement" aria-controls="case-{{$department->slug}}-placement" class="nav-link {{$active}}" aria-selected="true">
                                        {{$department->name}}</button>
                                </li>
                                @php $active = '' @endphp
                            @endforeach
                        </ul>
                        <div class="tab-content">
                            @php $active = 'active' @endphp
                            @foreach(getDepartments() as $department)
                                <div role="tabpanel" id="case-{{$department->slug}}-placement" aria-labelledby="case-{{$department->slug}}-placement-tab" class="tab-pane {{$active}}">
                                    <div>
                                        <div class="col-12" id="graphics">
                                            <div class="row success_body g-4">
                                                @foreach(getDepartmentCourse($department->id) as $course)
                                                <div class="col-md-6">
                                                    <div class="success_item" style="margin-bottom: 0px;">
                                                        <div class="modal_item_wrap">
                                                            <div class="modal_item_in">
                                                                <a class="venobox" data-autoplay="true" data-vbtype="video" href="https://youtu.be/N6O9u1TyV8o">
                                                                    <img class="img-fluid video_thumb w-100" src="{{asset('uploads')}}/vi/N6O9u1TyV8o/maxresdefault.jpg" alt="দক্ষতা ও ক্যারিয়ার প্লেসমেন্টের সহায়তা থাকলে কাজ করার সুযোগ অনেক বেশি">
                                                                    <div class="overly_icon">
                                                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="play" class="svg-inline--fa fa-play " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                                            <path fill="currentColor" d="M361 215C375.3 223.8 384 239.3 384 256C384 272.7 375.3 288.2 361 296.1L73.03 472.1C58.21 482 39.66 482.4 24.52 473.9C9.377 465.4 0 449.4 0 432V80C0 62.64 9.377 46.63 24.52 38.13C39.66 29.64 58.21 29.99 73.03 39.04L361 215z">
                                                                            </path>
                                                                        </svg>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <script>
                                                    $(document).ready(function() {
                                                        $('.venobox').venobox();
                                                    });
                                                </script>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Livewire Component wire-end:ARgI8lGzudP4NuII23l0 -->                  </div>
                                @php $active = '' @endphp
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 ss_pagination d-none d-md-block">
                    <nav aria-label="Page navigation example"></nav>
                </div>
            </div>
        </div>
    </section>
    <section id="courseslide">
        <div class="container populer_courses">
            <div class="row">
                <div class="col-12">
                    <div class="section_heading">
                        <h2>Popular Courses</h2>
                        <p></p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="course_mix_btn">
                        <button class="course_single_btn"><span>All Course </span></button>
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
