@extends('layouts.front')
@section('meta')
    <title>{{$course->title}}</title>
    <meta name="title" content="{{$course->title}}">
    <meta name="description" content="">
@endsection
@section('content')

        <section id="profe_graphic_banner">
            <div class="pink_shape">
                <img class="img-fluid" src="{{asset('front')}}/images/course-landing/Pg_banner_shape2.png" alt="pink color victor shape">
            </div>
            <div class="white_dots"><img class="img-fluid" src="{{asset('front')}}/images/course-landing/Pg_banner_shape4.png" alt="white color dots victor">
            </div>
            <div class="yellow_shape">
                <img class="img-fluid" src="{{asset('front')}}/images/course-landing/Pg_banner_shape1.png" alt="Yellow color victor shape">
            </div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="pg_banner_text">
                            <h4>{{$course->tagline}}</h4>
                            <h1>{{$course->title}}</h1>
                            <ul>
                                <li>Duration<span>{{$course->duration}}</span></li>
                                <li>Lectures<span>{{$course->lectures}}</span></li>
                                <li>Projects<span>{{$course->projects}}</span></li>
                            </ul>
                            <div class="course_desc_article">
                                {!! $course->short_description !!}
                            </div>
                            <div class="pg_banner_btn"><a href="../contact-us/index.html" data-bs-toggle="modal" data-bs-target="#exampleModal">Admission</a><a href="../free-seminar/index.html">Join free seminar</a></div>
                            <div class="stars">
                                <p><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path fill="currentColor" d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z">
                                        </path>
                                    </svg><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path fill="currentColor" d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z">
                                        </path>
                                    </svg><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path fill="currentColor" d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z">
                                        </path>
                                    </svg><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path fill="currentColor" d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z">
                                        </path>
                                    </svg><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star-half-stroke" class="svg-inline--fa fa-star-half-stroke " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path fill="currentColor" d="M463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7zM288 376.4L288.1 376.3L399.7 435.9L378.4 309.6L469.2 219.8L343.8 201.4L288.1 86.85L288 87.14V376.4z">
                                        </path>
                                    </svg>6,800 Reviews<span>8,500 Student </span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 pg_banner_img_col">
                        <div class="pg_banner_img position-relative">
                            <a class="venobox" data-autoplay="true" data-vbtype="video" href="{{$course->video}}B8">
                                <img class="img-fluid w-100 video_thumb" src="{{asset('uploads/'.$course->image)}}" alt="{{$course->title}}">
                                <div class="overly_icon">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="play" class="svg-inline--fa fa-play " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                        <path fill="currentColor" d="M361 215C375.3 223.8 384 239.3 384 256C384 272.7 375.3 288.2 361 296.1L73.03 472.1C58.21 482 39.66 482.4 24.52 473.9C9.377 465.4 0 449.4 0 432V80C0 62.64 9.377 46.63 24.52 38.13C39.66 29.64 58.21 29.99 73.03 39.04L361 215z">
                                        </path>
                                    </svg>
                                </div>
                            </a>
                        </div>
                        <div class="yellow_dots_right">
                            <img src="{{asset('front')}}/images/course-landing/Pg_banner_shape3.png" alt="Yellow color dots">
                        </div>
                        <div class="yellow_dot_left">
                            <img src="{{asset('front')}}/images/course-landing/Pg_banner_shape3.png" alt="Yellow color dots">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="pg_course_overviwe">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="course_overviwe_text">
                            <h2>Course Overview</h2>
                            <div class="course_overview_article">
                                <p class="ql-align-justify">
                                    {!! $course->overview !!}
                                </p>
                            </div>
                        </div>
                        <div class="sm_device-show d-block d-sm-none">
                            <div class="pg_succsess_story">
                                <div class="heading">
                                    <h4><span>Success Story</span> <span><a href="{{route('success_story')}}">See More</a></span></h4>
                                </div>
                                <div class="pg_succsess_img_slider">
                                    <div class="carousel slide">
                                        <div class="carousel-indicators">
                                            <button type="button" data-bs-target="" aria-label="Slide 1" aria-current="true" class="active"></button>
                                            <button type="button" data-bs-target="" aria-label="Slide 2" aria-current="false" class=""></button>
                                            <button type="button" data-bs-target="" aria-label="Slide 3" aria-current="false" class=""></button>
                                            <button type="button" data-bs-target="" aria-label="Slide 4" aria-current="false" class=""></button>
                                        </div>
                                        <div class="carousel-inner">
                                            <div class="active carousel-item">
                                                <div class="modal_item_wrap">
                                                    <img class="img-fluid w-100" src="{{asset('uploads')}}/vi/pix2cWQQKqY/maxresdefault.jpg" alt="Success Story">
                                                    <div class="overly_icon">
                                                        <button class="modalvidwrap">
                                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="play" class="svg-inline--fa fa-play " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                                <path fill="currentColor" d="M361 215C375.3 223.8 384 239.3 384 256C384 272.7 375.3 288.2 361 296.1L73.03 472.1C58.21 482 39.66 482.4 24.52 473.9C9.377 465.4 0 449.4 0 432V80C0 62.64 9.377 46.63 24.52 38.13C39.66 29.64 58.21 29.99 73.03 39.04L361 215z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" carousel-item">
                                                <div class="modal_item_wrap">
                                                    <img class="img-fluid w-100" src="{{asset('front')}}/images/success_story/success_story1666326234.jpg" alt="Success Story">
                                                    <div class="overly_icon">
                                                        <button class="modalvidwrap">
                                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="play" class="svg-inline--fa fa-play " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                                <path fill="currentColor" d="M361 215C375.3 223.8 384 239.3 384 256C384 272.7 375.3 288.2 361 296.1L73.03 472.1C58.21 482 39.66 482.4 24.52 473.9C9.377 465.4 0 449.4 0 432V80C0 62.64 9.377 46.63 24.52 38.13C39.66 29.64 58.21 29.99 73.03 39.04L361 215z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" carousel-item">
                                                <div class="modal_item_wrap">
                                                    <img class="img-fluid w-100" src="{{asset('front')}}/images/success_story/success_story1662634037.jpg" alt="Success Story">
                                                    <div class="overly_icon">
                                                        <button class="modalvidwrap">
                                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="play" class="svg-inline--fa fa-play " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                                <path fill="currentColor" d="M361 215C375.3 223.8 384 239.3 384 256C384 272.7 375.3 288.2 361 296.1L73.03 472.1C58.21 482 39.66 482.4 24.52 473.9C9.377 465.4 0 449.4 0 432V80C0 62.64 9.377 46.63 24.52 38.13C39.66 29.64 58.21 29.99 73.03 39.04L361 215z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" carousel-item">
                                                <div class="modal_item_wrap">
                                                    <img class="img-fluid w-100" src="{{asset('uploads')}}/vi/6tGsQHTQBsQ/maxresdefault.jpg" alt="Success Story">
                                                    <div class="overly_icon">
                                                        <button class="modalvidwrap">
                                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="play" class="svg-inline--fa fa-play " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                                <path fill="currentColor" d="M361 215C375.3 223.8 384 239.3 384 256C384 272.7 375.3 288.2 361 296.1L73.03 472.1C58.21 482 39.66 482.4 24.52 473.9C9.377 465.4 0 449.4 0 432V80C0 62.64 9.377 46.63 24.52 38.13C39.66 29.64 58.21 29.99 73.03 39.04L361 215z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pg_wait">
                                <h3>Admission Is Going On</h3>
                                <p>Enroll now to any of our Offline (On- Campus) or Online (Live Class) courses as per your suitable time.</p>
                                <div class="join_offline">
                                    <h4>Course Fee Offline</h4>
                                    <p>BDT
                                        50,000

                                    </p><a href="../contact-us.html" data-bs-toggle="modal" data-bs-target="#exampleModal">Enroll Now</a>
                                </div>
                                <div class="join_offline">
                                    <h4>Course Fee Online</h4>
                                    <p> BDT
                                        20,000

                                    </p><a href="../contact-us.html" data-bs-toggle="modal" data-bs-target="#exampleModal">Enroll Now</a>
                                </div>
                                <div class="wait_btn text-center"><a href="../free-seminar.html">Free Seminar</a></div>
                            </div>
                        </div>
                        <div class="pgc_curriculum_wrap">
                            <div class="pgc_curriculum_header d-flex align-items-center justify-content-between">
                                <h3>Course Curriculum</h3>
                                <div class="nav nav-pills" role="tablist"></div>
                            </div>
                            <div class="tab-content">
                                <div role="tabpanel" id="left-tabs-example-tabpane-General" aria-labelledby="left-tabs-example-tab-General" class="fade pgc_curriculum tab-pane active show">
                                    <ul>
                                        <li style="position:unset">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="pgc_inner_text">
                                                        <ul>
                                                            <li>
                                          <span>
                                             <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect x="1" y="1" width="10" height="10" stroke="#D4D4D4" stroke-width="2"></rect>
                                             </svg>
                                          </span>
                                                                Niche Selection
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="pgc_inner_text">
                                                        <ul>
                                                            <li>
                                          <span>
                                             <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect x="1" y="1" width="10" height="10" stroke="#D4D4D4" stroke-width="2"></rect>
                                             </svg>
                                          </span>
                                                                Keyword Research (AdSense, Affiliate, Service)
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="pgc_inner_text">
                                                        <ul>
                                                            <li>
                                          <span>
                                             <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect x="1" y="1" width="10" height="10" stroke="#D4D4D4" stroke-width="2"></rect>
                                             </svg>
                                          </span>
                                                                Competitor Analysis &amp; Website Audit
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="pgc_inner_text">
                                                        <ul>
                                                            <li>
                                          <span>
                                             <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect x="1" y="1" width="10" height="10" stroke="#D4D4D4" stroke-width="2"></rect>
                                             </svg>
                                          </span>
                                                                On-Site Optimization
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="pgc_inner_text">
                                                        <ul>
                                                            <li>
                                          <span>
                                             <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect x="1" y="1" width="10" height="10" stroke="#D4D4D4" stroke-width="2"></rect>
                                             </svg>
                                          </span>
                                                                On-Page Optimization
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="pgc_inner_text">
                                                        <ul>
                                                            <li>
                                          <span>
                                             <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect x="1" y="1" width="10" height="10" stroke="#D4D4D4" stroke-width="2"></rect>
                                             </svg>
                                          </span>
                                                                Article Writing Strategy
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="pgc_inner_text">
                                                        <ul>
                                                            <li>
                                          <span>
                                             <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect x="1" y="1" width="10" height="10" stroke="#D4D4D4" stroke-width="2"></rect>
                                             </svg>
                                          </span>
                                                                Google Webmaster Tool &amp; Analytics
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="pgc_inner_text">
                                                        <ul>
                                                            <li>
                                          <span>
                                             <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect x="1" y="1" width="10" height="10" stroke="#D4D4D4" stroke-width="2"></rect>
                                             </svg>
                                          </span>
                                                                Off-Page SEO
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="pgc_inner_text">
                                                        <ul>
                                                            <li>
                                          <span>
                                             <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect x="1" y="1" width="10" height="10" stroke="#D4D4D4" stroke-width="2"></rect>
                                             </svg>
                                          </span>
                                                                Facebook Advanced Audience Targeting
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="pgc_inner_text">
                                                        <ul>
                                                            <li>
                                          <span>
                                             <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect x="1" y="1" width="10" height="10" stroke="#D4D4D4" stroke-width="2"></rect>
                                             </svg>
                                          </span>
                                                                Facebook Ads Quality Maintenance
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="pgc_inner_text">
                                                        <ul>
                                                            <li>
                                          <span>
                                             <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect x="1" y="1" width="10" height="10" stroke="#D4D4D4" stroke-width="2"></rect>
                                             </svg>
                                          </span>
                                                                Facebook Paid Campaign
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="pgc_inner_text">
                                                        <ul>
                                                            <li>
                                          <span>
                                             <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect x="1" y="1" width="10" height="10" stroke="#D4D4D4" stroke-width="2"></rect>
                                             </svg>
                                          </span>
                                                                Facebook Pixel &amp; Retargeting
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="pgc_inner_text">
                                                        <ul>
                                                            <li>
                                          <span>
                                             <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect x="1" y="1" width="10" height="10" stroke="#D4D4D4" stroke-width="2"></rect>
                                             </svg>
                                          </span>
                                                                YouTube Competitor Analysis
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="pgc_inner_text">
                                                        <ul>
                                                            <li>
                                          <span>
                                             <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect x="1" y="1" width="10" height="10" stroke="#D4D4D4" stroke-width="2"></rect>
                                             </svg>
                                          </span>
                                                                YouTube Channel &amp; Video Optimization
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="pgc_inner_text">
                                                        <ul>
                                                            <li>
                                          <span>
                                             <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect x="1" y="1" width="10" height="10" stroke="#D4D4D4" stroke-width="2"></rect>
                                             </svg>
                                          </span>
                                                                YouTube Monetization
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="pgc_inner_text">
                                                        <ul>
                                                            <li>
                                          <span>
                                             <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect x="1" y="1" width="10" height="10" stroke="#D4D4D4" stroke-width="2"></rect>
                                             </svg>
                                          </span>
                                                                LinkedIn Marketing
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="pgc_software">
                            <h3>Softwares You&#039;ll Learn</h3>
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <div class="pgc_item d-flex align-items-center">
                                        <div class="pgcs_icon">
                                            <img class="img-fluid w-100" src="{{asset('front')}}/images/option/option1662293093.png" alt="ahrefs">
                                        </div>
                                        <div class="pgcs_text">
                                            <p>ahrefs</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="pgc_item d-flex align-items-center">
                                        <div class="pgcs_icon">
                                            <img class="img-fluid w-100" src="{{asset('front')}}/images/option/option1662369013.png" alt="Agency Analytics">
                                        </div>
                                        <div class="pgcs_text">
                                            <p>Agency Analytics</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="pgc_item d-flex align-items-center">
                                        <div class="pgcs_icon">
                                            <img class="img-fluid w-100" src="{{asset('front')}}/images/option/option1662369085.png" alt="Google AdWords">
                                        </div>
                                        <div class="pgcs_text">
                                            <p>Google AdWords</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="pgc_item d-flex align-items-center">
                                        <div class="pgcs_icon">
                                            <img class="img-fluid w-100" src="{{asset('front')}}/images/option/option1662369246.png" alt="Moz">
                                        </div>
                                        <div class="pgcs_text">
                                            <p>Moz</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="pgc_item d-flex align-items-center">
                                        <div class="pgcs_icon">
                                            <img class="img-fluid w-100" src="{{asset('front')}}/images/option/option1662369352.png" alt="SE Ranking">
                                        </div>
                                        <div class="pgcs_text">
                                            <p>SE Ranking</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="pgc_item d-flex align-items-center">
                                        <div class="pgcs_icon">
                                            <img class="img-fluid w-100" src="{{asset('front')}}/images/option/option1662369365.png" alt="SEMrush">
                                        </div>
                                        <div class="pgcs_text">
                                            <p>SEMrush</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pgc_for_whom">
                            <h3>This Course is Designed for</h3>
                            <div class="row">
                                <div class="col-6">
                                    <div class="pgcf_whom_item">
                                        <div class="pgcf_whom_item_icon">
                                            <img class="img-fluid" src="{{asset('front')}}/images/option/option1662371418.png" alt="Anyone interested to learn freelancing">
                                        </div>
                                        <div class="pgcf_whom_item_text">
                                            <p>Anyone interested to learn freelancing</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="pgcf_whom_item">
                                        <div class="pgcf_whom_item_icon">
                                            <img class="img-fluid" src="{{asset('front')}}/images/option/option1662371439.png" alt="Job seekers">
                                        </div>
                                        <div class="pgcf_whom_item_text">
                                            <p>Job seekers</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="pgcf_whom_item">
                                        <div class="pgcf_whom_item_icon">
                                            <img class="img-fluid" src="{{asset('front')}}/images/option/option1662371456.png" alt="Students">
                                        </div>
                                        <div class="pgcf_whom_item_text">
                                            <p>Students</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="pgcf_whom_item">
                                        <div class="pgcf_whom_item_icon">
                                            <img class="img-fluid" src="{{asset('front')}}/images/option/option1662371472.png" alt="Homemakers">
                                        </div>
                                        <div class="pgcf_whom_item_text">
                                            <p>Homemakers</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="pgcf_whom_item">
                                        <div class="pgcf_whom_item_icon">
                                            <img class="img-fluid" src="{{asset('front')}}/images/option/option1662371522.png" alt="Immigrants">
                                        </div>
                                        <div class="pgcf_whom_item_text">
                                            <p>Immigrants</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="pgcf_whom_item">
                                        <div class="pgcf_whom_item_icon">
                                            <img class="img-fluid" src="{{asset('front')}}/images/option/option1663651346.png" alt="Anyone interested to learn Digital Marketing">
                                        </div>
                                        <div class="pgcf_whom_item_text">
                                            <p>Anyone interested to learn Digital Marketing</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pg_marketplace">
                            <h2>Career Opportunities</h2>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="marketplace_item">
                                        <div class="icon">
                                            <img src="{{asset('front')}}/images/option/option1662449119.png" alt="Creative IT Institute">
                                        </div>
                                        <div class="text">
                                            <div>
                                                <p><p><span style="background-color: transparent; color: rgb(0, 0, 0);">Most of the companies nowadays rely on their digital marketing department to boost product sales. In fact, the need for digital marketers is increasing globally to meet the rising demand of the customers. A professional digital marketing training course at our institute will set you apart from others in this competitive field. </span></p></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="marketplace_item">
                                        <div class="icon">
                                            <img src="{{asset('front')}}/images/option/option1662449132.png" alt="Creative IT Institute">
                                        </div>
                                        <div class="text">
                                            <div>
                                                <p><p><span style="background-color: transparent; color: rgb(0, 0, 0);">Many global marketplace including fiverr, upwork, legit offer marketing jobs regularly&nbsp; on their website. You can earn independently as a freelancer if you master the skills required to attract the potential customers. </span></p></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pg_job">
                            <h3> Open Job Positions</h3>
                            <div class="row g-0">
                                <div class="col-12 col-sm-6">
                                    <div class="job_item">
                                        <ul>
                                            <li>
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="9" cy="9" r="8" stroke="#FF7E31" stroke-width="2"></circle>
                                                </svg>Digital Marketing Specialist
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="job_item">
                                        <ul>
                                            <li>
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="9" cy="9" r="8" stroke="#FF7E31" stroke-width="2"></circle>
                                                </svg>Content Marketer
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="job_item">
                                        <ul>
                                            <li>
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="9" cy="9" r="8" stroke="#FF7E31" stroke-width="2"></circle>
                                                </svg>Web Content Writer
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="job_item">
                                        <ul>
                                            <li>
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="9" cy="9" r="8" stroke="#FF7E31" stroke-width="2"></circle>
                                                </svg>SEO Specialist
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="job_item">
                                        <ul>
                                            <li>
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="9" cy="9" r="8" stroke="#FF7E31" stroke-width="2"></circle>
                                                </svg>Online Marketing Specialist
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="job_item">
                                        <ul>
                                            <li>
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="9" cy="9" r="8" stroke="#FF7E31" stroke-width="2"></circle>
                                                </svg>Inbound Marketing Specialist
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="job_item">
                                        <ul>
                                            <li>
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="9" cy="9" r="8" stroke="#FF7E31" stroke-width="2"></circle>
                                                </svg>Search Engine Marketing Specialist
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="job_item">
                                        <ul>
                                            <li>
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="9" cy="9" r="8" stroke="#FF7E31" stroke-width="2"></circle>
                                                </svg>Social Media Manager
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pgs_facilitice">
                            <h3>Exclusive Solutions That Set Us Apart</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="pg_more_facilities_item pg_more_facilities_item_1">
                                        <img src="{{asset('front')}}/images/option/option1662372132.png" alt="Review Class">
                                        <h3>Review Class</h3>
                                        <div>
                                            <p><span style="background-color: transparent; color: rgb(0, 0, 0);">Do you face difficulty when you review the previous concepts? To ensure the best learning outcome, we arrange review classes that help our students overcome any problem in their skill development process. You will be able to understand the topics that you find complex under the close supervision of our skilled mentors. </span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="pg_more_facilities_item pg_more_facilities_item_1">
                                        <img src="{{asset('front')}}/images/option/option1662372155.png" alt="Lifetime Support">
                                        <h3>Lifetime Support</h3>
                                        <div>
                                            <p><span style="color: rgb(0, 0, 0); background-color: transparent;">Creative IT and its students share a lifetime bond. We strengthen our bond with you by providing lifelong support that helps you overcome any problem in your career path even after completing your course. Our expert support team ensures 24 hours service to all of our students. The personalized feedback that you receive from us, helps you grow, every day. </span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="pg_more_facilities_item pg_more_facilities_item_1">
                                        <img src="{{asset('front')}}/images/option/option1662372191.png" alt="Practice lab support">
                                        <h3>Practice lab support</h3>
                                        <div>
                                            <p class="ql-align-justify"><span style="background-color: transparent; color: rgb(0, 0, 0);">We offer our students practice lab support so that they can complete their courseworks feasibly at any time. The uninterrupted learning environment that we ensure, helps the student gather practical knowledge in an efficient manner.</span></p><p><br></p><p><br></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="pg_more_facilities_item pg_more_facilities_item_1">
                                        <img src="{{asset('front')}}/images/option/option1662372211.png" alt="Class Videos">
                                        <h3>Class Videos</h3>
                                        <div>
                                            <p><span style="background-color: transparent; color: rgb(0, 0, 0);">No need to worry if you miss a topic in the class. We record most of our classes so that students who miss a session can still get the information they need. They can watch the videos again and again until they understand the topic thoroughly. Our motto is to provide you a flexible learning experience to gradually improve your competence.</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="pg_more_facilities_item pg_more_facilities_item_1">
                                        <img src="{{asset('front')}}/images/option/option1662372262.png" alt="Career Placement Support">
                                        <h3>Career Placement Support</h3>
                                        <div>
                                            <p class="ql-align-justify"><span style="background-color: transparent; color: rgb(0, 0, 0);">Our career placement department is ready to help you find a lucrative job. We ensure your resume gets into the hands of the right hiring manager.&nbsp; So far this department has helped more than 16000 students to find jobs in competitive global platforms. Promising a better future, we have successfully raised the job placement rate to 66% in 2023. </span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="pg_more_facilities_item pg_more_facilities_item_1">
                                        <img src="{{asset('front')}}/images/option/option1665139532.png" alt="Virtual Internship">
                                        <h3>Virtual Internship</h3>
                                        <div>
                                            <p><span style="background-color: transparent; color: rgb(0, 0, 0);">Without in-hand experience, no one can be competent in any skill. Practical work experience is a must have for better career opportunities. CIT offers its students virtual internship opportunities, where they can work under the supervision of industry experts. The online internships qualify to be as effective as offline work experience. Hence, you can also complete our internship at our office.&nbsp; </span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <section id="student_feedback">
                            <div class="container">
                                <div class="col-12">
                                    <div class="section_heading sal-animate" data-sal="slide-up" data-sal-delay="300" data-sal-duration="800" data-sal-easing="ease">
                                        <h2>Comments</h2>
                                        <p>
                                            We think of each of our students as a member of our Creative IT family. Your valuable suggestions will push us to improve our services and move forward.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="feedback_1_slider">
                                        <div class="feedback_item">
                                            <iframe src="https://www.facebook.com/plugins/post.php?href=https://www.facebook.com/uzzolhossain95/posts/2381290495369931&amp;show_text=true&amp;appId=191181859164389" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" style="border: none; overflow: hidden; width: 100%; height: 100vh; padding-right: 1px;">
                                            </iframe>
                                        </div>
                                        <div class="feedback_item">
                                            <iframe src="https://www.facebook.com/plugins/post.php?href=https://www.facebook.com/sanaianajnin.nuri/posts/pfbid02Au8WYSwpCjHaJF2AmzrLuVkr9ddCsET1NswjMuPsVbk3U6skQwhoJjcBhcFUzdyzl&amp;show_text=true&amp;appId=191181859164389" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" style="border: none; overflow: hidden; width: 100%; height: 100vh; padding-right: 1px;">
                                            </iframe>
                                        </div>
                                        <div class="feedback_item">
                                            <iframe src="https://www.facebook.com/plugins/post.php?href=https://www.facebook.com/tanjilalom24/posts/755438205778085&amp;show_text=true&amp;appId=191181859164389" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" style="border: none; overflow: hidden; width: 100%; height: 100vh; padding-right: 1px;">
                                            </iframe>
                                        </div>
                                        <div class="feedback_item">
                                            <iframe src="https://www.facebook.com/plugins/post.php?href=https://www.facebook.com/rumel2345/posts/10228975502111112&amp;show_text=true&amp;appId=191181859164389" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" style="border: none; overflow: hidden; width: 100%; height: 100vh; padding-right: 1px;">
                                            </iframe>
                                        </div>
                                        <div class="feedback_item">
                                            <iframe src="https://www.facebook.com/plugins/post.php?href=https://www.facebook.com/shoaib.alamin.1/posts/602310437955496&amp;show_text=true&amp;appId=191181859164389" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" style="border: none; overflow: hidden; width: 100%; height: 100vh; padding-right: 1px;">
                                            </iframe>
                                        </div>
                                        <div class="feedback_item">
                                            <iframe src="https://www.facebook.com/plugins/post.php?href=https://www.facebook.com/anika.t.kashfi/posts/pfbid08sJ1QE8FmBTSzDPkJbVN4mjGyoJMBWZwsZDymm462Q5VvBUhr59MzLfC1zj5jZobl&amp;show_text=true&amp;appId=191181859164389" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" style="border: none; overflow: hidden; width: 100%; height: 100vh; padding-right: 1px;">
                                            </iframe>
                                        </div>
                                        <div class="feedback_item">
                                            <iframe src="https://www.facebook.com/plugins/post.php?href=https://www.facebook.com/thrana.me/posts/pfbid02erFAtrENvQsrcKZepV3vVagpL2jfL4yiiansLg1zQwrahW9te56Ufr5dmqGnRGNHl&amp;show_text=true&amp;appId=191181859164389" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" style="border: none; overflow: hidden; width: 100%; height: 100vh; padding-right: 1px;">
                                            </iframe>
                                        </div>
                                        <div class="feedback_item">
                                            <iframe src="https://www.facebook.com/plugins/post.php?href=https://www.facebook.com/shakil.siddik.79/posts/pfbid0w2ucSUMfNFyEKLFd8iPXitjWJktCVSKiEVWYBmeva3TAZnZKoHoByqa3Po6ui4Gfl&amp;show_text=true&amp;appId=191181859164389" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" style="border: none; overflow: hidden; width: 100%; height: 100vh; padding-right: 1px;">
                                            </iframe>
                                        </div>
                                        <div class="feedback_item">
                                            <iframe src="https://www.facebook.com/plugins/post.php?href=https://www.facebook.com/bijoy.bijoy.927543/posts/pfbid037fWLrH3wfsmSv75QGXhjPQEViVrbHC3aa5iWEaWWef83XXSGMD3Y9hpEWq1Hc3E2l&amp;show_text=true&amp;appId=191181859164389" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" style="border: none; overflow: hidden; width: 100%; height: 100vh; padding-right: 1px;">
                                            </iframe>
                                        </div>
                                        <div class="feedback_item">
                                            <iframe src="https://www.facebook.com/plugins/post.php?href=https://www.facebook.com/taposroy.dip/posts/pfbid07n4Wkt8kEoBbzuJuSL1sRcLGDBrCQRCAsLz5Cdjw7yvC16VPvtTCy88maW1stqcFl&amp;show_text=true&amp;appId=191181859164389" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" style="border: none; overflow: hidden; width: 100%; height: 100vh; padding-right: 1px;">
                                            </iframe>
                                        </div>
                                        <div class="feedback_item">
                                            <iframe src="https://www.facebook.com/plugins/post.php?href=https://www.facebook.com/taposroy.dip/posts/pfbid07n4Wkt8kEoBbzuJuSL1sRcLGDBrCQRCAsLz5Cdjw7yvC16VPvtTCy88maW1stqcFl&amp;show_text=true&amp;appId=191181859164389" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" style="border: none; overflow: hidden; width: 100%; height: 100vh; padding-right: 1px;">
                                            </iframe>
                                        </div>
                                        <div class="feedback_item">
                                            <iframe src="https://www.facebook.com/plugins/post.php?href=https://www.facebook.com/mahbub.suhan.94/posts/pfbid028P1PnWkTt9HFHcpcTwf8DhfYsvyBsAMhFcZLjkCD3Y2s4H9nMnGAgZQawwkH4HgPl&amp;show_text=true&amp;appId=191181859164389" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" style="border: none; overflow: hidden; width: 100%; height: 100vh; padding-right: 1px;">
                                            </iframe>
                                        </div>
                                        <div class="feedback_item">
                                            <iframe src="https://www.facebook.com/plugins/post.php?href=https://www.facebook.com/sanaianajnin.nuri/posts/pfbid02Au8WYSwpCjHaJF2AmzrLuVkr9ddCsET1NswjMuPsVbk3U6skQwhoJjcBhcFUzdyzl&amp;show_text=true&amp;appId=191181859164389" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" style="border: none; overflow: hidden; width: 100%; height: 100vh; padding-right: 1px;">
                                            </iframe>
                                        </div>
                                        <div class="feedback_item">
                                            <iframe src="https://www.facebook.com/plugins/post.php?href=https://www.facebook.com/turjo.prasad/posts/pfbid0vQkyJ9uAEh5juHtw1yXHZUgUdYMx1mCrRGZLGfJuqMQpQdtUCp8c3BEi5aGpKmSil&amp;show_text=true&amp;appId=191181859164389" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" style="border: none; overflow: hidden; width: 100%; height: 100vh; padding-right: 1px;">
                                            </iframe>
                                        </div>
                                        <div class="feedback_item">
                                            <iframe src="https://www.facebook.com/plugins/post.php?href=https://www.facebook.com/saadmahmudul02/posts/pfbid09AYotFNeShoKoHg4YoTfcfAqknAgxdXjGzLpdsM1umG2pCo6Dez231cpAAP7LfPNl&amp;show_text=true&amp;appId=191181859164389" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" style="border: none; overflow: hidden; width: 100%; height: 100vh; padding-right: 1px;">
                                            </iframe>
                                        </div>
                                        <div class="feedback_item">
                                            <iframe src="https://www.facebook.com/plugins/post.php?href=https://www.facebook.com/ibadul.islam/posts/pfbid0TwvKMrrYw3ovLAxnD28Yy1HBzwYKWhnU9WX2BZtNMPtMFT4eydNAMBRW4GssM2y2l&amp;show_text=true&amp;appId=191181859164389" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" style="border: none; overflow: hidden; width: 100%; height: 100vh; padding-right: 1px;">
                                            </iframe>
                                        </div>
                                        <div class="feedback_item">
                                            <iframe src="https://www.facebook.com/plugins/post.php?href=https://www.facebook.com/bipulsaha1010/posts/pfbid0isQiemVNRNWPogszAropvWgKjbVEnzCKotAHm35kbnEBNwhSPpbFQm2tCy2EABGtl&amp;show_text=true&amp;appId=191181859164389" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" style="border: none; overflow: hidden; width: 100%; height: 100vh; padding-right: 1px;">
                                            </iframe>
                                        </div>
                                        <div class="feedback_item">
                                            <iframe src="https://www.facebook.com/plugins/post.php?href=https://www.facebook.com/FazleRabby43/posts/pfbid02Eue1yAR6YHAb46NZaTdQJFfJjK7iQAwjUN9o462FiaSVi86kvGcVok8SU2rTrPpel&amp;show_text=true&amp;appId=191181859164389" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" style="border: none; overflow: hidden; width: 100%; height: 100vh; padding-right: 1px;">
                                            </iframe>
                                        </div>
                                        <div class="feedback_item">
                                            <iframe src="https://www.facebook.com/plugins/post.php?href=https://www.facebook.com/SifatKazi69/posts/pfbid02eXu4235LnxiEdShZzu86yQWTT2Coone5zAHGA4rmHHWPKoTRew9wYEdUj92KLPk4l&amp;show_text=true&amp;appId=191181859164389" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" style="border: none; overflow: hidden; width: 100%; height: 100vh; padding-right: 1px;">
                                            </iframe>
                                        </div>
                                        <div class="feedback_item">
                                            <iframe src="https://www.facebook.com/plugins/post.php?href=https://www.facebook.com/reazhossain0/posts/pfbid0p968ZGdemaNYwTtkZ8MDbHmbf1Dzt6eECuWeSihVGyY1RGSakHG7dRWqDPPPQjyhl&amp;show_text=true&amp;appId=191181859164389" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" style="border: none; overflow: hidden; width: 100%; height: 100vh; padding-right: 1px;">
                                            </iframe>
                                        </div>
                                        <div class="feedback_item">
                                            <iframe src="https://www.facebook.com/plugins/post.php?href=https://www.facebook.com/omor.tasfi.cu/posts/pfbid0rsZ31LkdqH1cEQQjJUnXtYr4BDd74FkeUPbJdkSNs8p4HLK8K8S2LgR8r1uf3j83l&amp;show_text=true&amp;appId=191181859164389" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" style="border: none; overflow: hidden; width: 100%; height: 100vh; padding-right: 1px;">
                                            </iframe>
                                        </div>
                                        <div class="feedback_item">
                                            <iframe src="https://www.facebook.com/plugins/post.php?href=https://www.facebook.com/shahinmunshi143/posts/pfbid021pdSureYDCPJ2W6XnEPwT4xKb3Uu4QV2H4ddsmktR7xAoVASTNVWzsVzURzZXEWJl&amp;show_text=true&amp;appId=191181859164389" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" style="border: none; overflow: hidden; width: 100%; height: 100vh; padding-right: 1px;">
                                            </iframe>
                                        </div>
                                        <div class="feedback_item">
                                            <iframe src="https://www.facebook.com/plugins/post.php?href=https://www.facebook.com/gdruma66/posts/pfbid02CmU3ijHLzBd4mJtebwdQvDYahBufYPnficUF7rLKGtnQUSMToCfhR8ZzuixPgbLfl&amp;show_text=true&amp;appId=191181859164389" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" style="border: none; overflow: hidden; width: 100%; height: 100vh; padding-right: 1px;">
                                            </iframe>
                                        </div>
                                        <div class="feedback_item">
                                            <iframe src="https://www.facebook.com/plugins/post.php?href=https://www.facebook.com/Ashrafioishii/posts/pfbid0AdBn85et6DtnZw3qTDyMsrCy53VEkKdtbmUbAkbodXLK3YCnKMB1WCRqLpUWd4FKl&amp;show_text=true&amp;appId=191181859164389" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" style="border: none; overflow: hidden; width: 100%; height: 100vh; padding-right: 1px;">
                                            </iframe>
                                        </div>
                                        <div class="feedback_item">
                                            <iframe src="https://www.facebook.com/plugins/post.php?href=https://www.facebook.com/shaon.sarker.9699/posts/pfbid02Ex3NPd28y11jqurH4XcsPniYfohyGeT1GxyaeCRzorcns2GnaMnPaXDZ1LpvZ9Yfl&amp;show_text=true&amp;appId=191181859164389" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" style="border: none; overflow: hidden; width: 100%; height: 100vh; padding-right: 1px;">
                                            </iframe>
                                        </div>
                                        <div class="feedback_item">
                                            <iframe src="https://www.facebook.com/plugins/post.php?href=https://www.facebook.com/krhaubs/posts/pfbid02uzQPTjhFn8tM24cUjf4rbkdWmrNZo8CqViuPhdsfa3Q2xUFmDGRkaR1fVnboNdg1l&amp;show_text=true&amp;appId=191181859164389" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" style="border: none; overflow: hidden; width: 100%; height: 100vh; padding-right: 1px;">
                                            </iframe>
                                        </div>
                                        <div class="feedback_item">
                                            <iframe src="https://www.facebook.com/plugins/post.php?href=https://www.facebook.com/sujonuxi/posts/pfbid02eii8v6o2hewRVWjqP2bGivjJWLspBu1pNn7ZA8KgAP2skq3MwGmKkGG81Got9epNl&amp;show_text=true&amp;appId=191181859164389" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" style="border: none; overflow: hidden; width: 100%; height: 100vh; padding-right: 1px;">
                                            </iframe>
                                        </div>
                                        <div class="feedback_item">
                                            <iframe src="https://www.facebook.com/plugins/post.php?href=https://www.facebook.com/EmdadAhmed003/posts/pfbid0dTsJ49HWuqMKHxst3FAGBU4Hxa3oY8ShTAeDeP97vhbCZaAwikEMpYNoWQ8Us6UFl&amp;show_text=true&amp;appId=191181859164389" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" style="border: none; overflow: hidden; width: 100%; height: 100vh; padding-right: 1px;">
                                            </iframe>
                                        </div>
                                        <div class="feedback_item">
                                            <iframe src="https://www.facebook.com/plugins/post.php?href=https://www.facebook.com/brooooken/posts/pfbid033M645ZSivEA6pYqHd1XkjyuVxEjHU1NNJqf7KfXeH5N6cd6WXADv4owJbA66h94ml&amp;show_text=true&amp;appId=191181859164389" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" style="border: none; overflow: hidden; width: 100%; height: 100vh; padding-right: 1px;">
                                            </iframe>
                                        </div>
                                        <div class="feedback_item">
                                            <iframe src="https://www.facebook.com/plugins/post.php?href=https://www.facebook.com/farzana.y.mitu/posts/pfbid0267QhWJJ3CNBov6Bar72T6LNS7YJhBBTHkw5jKdvSmsLPgseGkmGoEiUFWqqD3wZml&amp;show_text=true&amp;appId=191181859164389" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" style="border: none; overflow: hidden; width: 100%; height: 100vh; padding-right: 1px;">
                                            </iframe>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-12 mt-5">
                                    <div class="recommends text-center">
                                        <h4>225k
                                            <img src="{{asset('front')}}/images/home/Recommends.png" alt="icon"> <span>Recommends</span>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div id="sidebar" class="col-lg-5 d-none d-sm-block">
                        <div class="pg_succsess_story">
                            <div class="heading">
                                <h4><span>Success Story</span> <span><a href="../success-story.html">See More</a></span></h4>
                            </div>
                            <div class="pg_succsess_img_slider">
                                <div class="pg_slide_item position-relative">
                                    <a class="venobox" data-autoplay="true" data-vbtype="video" href="https://youtu.be/pix2cWQQKqY">
                                        <img class="img-fluid w-100" src="{{asset('uploads')}}/vi/pix2cWQQKqY/maxresdefault.jpg" alt="Success Story">
                                        <div class="overly_icon">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="play" class="svg-inline--fa fa-play " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                <path fill="currentColor" d="M361 215C375.3 223.8 384 239.3 384 256C384 272.7 375.3 288.2 361 296.1L73.03 472.1C58.21 482 39.66 482.4 24.52 473.9C9.377 465.4 0 449.4 0 432V80C0 62.64 9.377 46.63 24.52 38.13C39.66 29.64 58.21 29.99 73.03 39.04L361 215z">
                                                </path>
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                                <div class="pg_slide_item position-relative">
                                    <a class="venobox" data-autoplay="true" data-vbtype="video" href="https://youtu.be/16Fi41hAOn4">
                                        <img class="img-fluid w-100" src="{{asset('front')}}/images/success_story/success_story1666326234.jpg" alt="Success Story">
                                        <div class="overly_icon">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="play" class="svg-inline--fa fa-play " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                <path fill="currentColor" d="M361 215C375.3 223.8 384 239.3 384 256C384 272.7 375.3 288.2 361 296.1L73.03 472.1C58.21 482 39.66 482.4 24.52 473.9C9.377 465.4 0 449.4 0 432V80C0 62.64 9.377 46.63 24.52 38.13C39.66 29.64 58.21 29.99 73.03 39.04L361 215z">
                                                </path>
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                                <div class="pg_slide_item position-relative">
                                    <a class="venobox" data-autoplay="true" data-vbtype="video" href="https://youtu.be/hYveLPTc3B8">
                                        <img class="img-fluid w-100" src="{{asset('front')}}/images/success_story/success_story1662634037.jpg" alt="Success Story">
                                        <div class="overly_icon">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="play" class="svg-inline--fa fa-play " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                <path fill="currentColor" d="M361 215C375.3 223.8 384 239.3 384 256C384 272.7 375.3 288.2 361 296.1L73.03 472.1C58.21 482 39.66 482.4 24.52 473.9C9.377 465.4 0 449.4 0 432V80C0 62.64 9.377 46.63 24.52 38.13C39.66 29.64 58.21 29.99 73.03 39.04L361 215z">
                                                </path>
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                                <div class="pg_slide_item position-relative">
                                    <a class="venobox" data-autoplay="true" data-vbtype="video" href="https://youtu.be/6tGsQHTQBsQ">
                                        <img class="img-fluid w-100" src="{{asset('uploads')}}/vi/6tGsQHTQBsQ/maxresdefault.jpg" alt="Success Story">
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
                        <div class="pg_wait_wrap ">
                            <div class="pg_wait">
                                <h3>Admission Is Going On</h3>
                                <p>Enroll now to any of our Offline (On- Campus) or Online (Live Class) courses as per your suitable time.</p>
                                <div class="join_offline_main">
                                    <div class="join_offline">
                                        <h4>Course Fee Offline</h4>
                                        <p>BDT {{$course->offline_fee}}</p>
                                        <a href="{{route('contact')}}" data-bs-toggle="modal" data-bs-target="#exampleModal">Enroll Now</a>
                                    </div>
                                    <div class="join_offline">
                                        <h4>Course Fee Online</h4>
                                        <p>BDT {{$course->online_fee}}

                                        </p><a href="{{route('contact')}}" data-bs-toggle="modal" data-bs-target="#exampleModal">Enroll Now</a>
                                    </div>
                                </div>
                                <div class="wait_btn text-center"><a href="{{route('free_seminar')}}">Free Seminar</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="btn-close" style="float: right;" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="all_content_model last_modal text-center">
                            <img src="../logo.png" alt="logo">
                            <h5>Give valid information </h5>
                            <span class="d-block application id_num">
                  After fill-up form our team contact you
                 </span>
                            <hr>
                            <div class="row">
                                <div class="col-xl-6 col-lg-8 m-auto">
                                    <div class="form-data text-start ">
                                        <form action="https://www.creativeitinstitute.com/admission/data/store" method="post">
                                            <input type="hidden" name="_token" value="V2p48QnQMSGM5oPuka7lq1jjA92WZYTsVvW1Ribh">                           <div class="form-group mb-4">
                                                <label for="name">
                                                    Write Your Name

                                                    *</label>
                                                <input type="text" id="name" name="name" required class="form-control">
                                            </div>
                                            <div class="form-group mb-4">
                                                <label for="phone">
                                                    Phone Number

                                                    *</label>
                                                <input type="number" id="phone" name="phone" required class="form-control">
                                            </div>
                                            <div class="form-group mb-4">
                                                <label for="email">
                                                    Write Your E-mail

                                                </label>
                                                <input type="email" id="email" name="email" class="form-control">
                                            </div>
                                            <div class="form-group mb-4">
                                                <label for="interested_course">
                                                    Your wanted Course
                                                    *</label>
                                                <select name="interested_course" class="form-control" required>
                                                    <option value="">-----Select Option----</option>
                                                    <option value="1" >Professional Graphic Design</option>
                                                    <option value="2" >Motion Graphics</option>
                                                    <option value="3" >UX/UI Design</option>
                                                    <option value="4" >Digital Image Editing</option>
                                                    <option value="5" >Adobe Photoshop</option>
                                                    <option value="6" >Adobe Illustrator</option>
                                                    <option value="7" selected>Digital Marketing Course</option>
                                                    <option value="9" >Web Development</option>
                                                    <option value="10" >MERN Stack Development</option>
                                                    <option value="11" >App Development With Kotlin</option>
                                                    <option value="12" >Python Django</option>
                                                    <option value="13" >Python Machine Learning</option>
                                                    <option value="14" >Ethical Hacking</option>
                                                    <option value="15" >Professional 3D Animation</option>
                                                    <option value="16" >Interior and Exterior Design</option>
                                                    <option value="17" >3D Product Modeling</option>
                                                    <option value="18" >3D Floor Plan</option>
                                                    <option value="19" >Affiliate Marketing</option>
                                                    <option value="20" >Google AdSense</option>
                                                    <option value="21" >Content Writing</option>
                                                    <option value="22" >Search Engine Optimization</option>
                                                    <option value="23" >Social Media Marketing</option>
                                                    <option value="24" >Professional Video Editing</option>
                                                    <option value="25" >CISCO CCNA &amp; MTCNA</option>
                                                    <option value="26" >Spoken English</option>
                                                    <option value="27" >Business English</option>
                                                    <option value="28" >Amazon Web Service</option>
                                                    <option value="29" >CompTIA Network+</option>
                                                    <option value="30" >MikroTik Training</option>
                                                    <option value="31" >Blockchain Technology</option>
                                                    <option value="32" >Front-End Development with React</option>
                                                </select>
                                            </div>
                                            <div class="form-group mb-4 mt-3">
                                                <label for="education">
                                                    Take Your Course
                                                    *</label>
                                                <div class="education mt-2">
                                                    <p> <input type="radio" value="OFFLINE" name="course_type" class="radio_style" id="secondary"><label for="secondary">
                                                            OFFLINE
                                                        </label></p>
                                                    <p> <input type="radio" value="ONLINE" name="course_type" class="radio_style" id="Higher_Secondary"> <label for="Higher_Secondary">
                                                            ONLINE
                                                        </label></p>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn submit-btn submit-button">
                                                Submit
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModalSuccess" tabindex="-1" aria-labelledby="exampleModalSuccessLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="btn-close" style="float: right;" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="all_content_model last_modal text-center">
                            <img src="../logo.png" alt="logo">
                            <h5>অভিনন্দন!</h5>
                            <p>রেজিস্ট্রেশনটি সফলভাবে সম্পন্ন হয়েছে।</p>
                            <span class="d-block application id_num">শীঘ্রই আমাদের প্রতিনিধি আপনার সাথে যোগাযোগ করবেন।</span>
                            <span class="d-block application id_num">আরো জানুন আমাদের ফেসবুক পেইজে</span>
                            <a class="link_facebook btn submit-btn submit-button" target="_blank" href="https://www.facebook.com/CreativeITInstitute">
                                <i class="fa fa-facebook-square" style="margin-right: 3px;"></i> ফেসবুক পেইজ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
