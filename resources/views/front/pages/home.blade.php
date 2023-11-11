@extends('layouts.front')
@section('meta')
    <title>Professional IT Training Institute in Bangladesh - Creative IT</title>
    <meta name="title" content="Professional IT Training Institute in Bangladesh - Creative IT">
    <meta name="description" content="Develop your professional skills through CIT We provide Graphic Design, Digital Marketing, Web Design Development, 3d Animation, etc Call 880 1624 666 000">
@endsection
@section('content')
    <section id="banner" class="home_banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="banner_text">
                        <h5 data-sal="slide-left" data-sal-delay="200" data-sal-duration="700" data-sal-easing="ease" class="sal-animate"><span><img src="{{asset('front')}}/images/home/Check.png" alt="icon"></span>Unleash Your Potential</h5>
                        <img src="{{asset('front')}}/banner_background/shape.png" alt="victor_dot" class="dot_shape_banner">
                        <h1 data-sal="zoom-in" data-sal-delay="200" data-sal-duration="700" data-sal-easing="ease" class="sal-animate">Become an IT Pro &amp; Rule the <span>Digital World</span></h1>
                        <p>With a vision to turn manpower into {{asset('front')}}, Creative IT Institute is ready to enhance your learning experience with skilled mentors and updated curriculum. Pick your desired course from more than 30 trendy options.</p>
                        <a target="_blank" href="{{route('our_courses')}}" class="browse_btn sal-animate" data-sal="slide-left" data-sal-delay="300" data-sal-duration="800" data-sal-easing="ease">
                            <span><img src="{{asset('front')}}/book.png" alt="icon"></span>Browse Course
                        </a>
                        <a target="_blank" href="{{route('our_courses')}}" class="d-inline-block d-sm-none" data-sal="slide-left" data-sal-delay="300" data-sal-duration="800" data-sal-easing="ease">
                            <span><img src="{{asset('front')}}/book.png" alt="icon"></span>Browse Course<span class="ms-2 angle"><i class="fa fa-angle-down"></i></span>
                        </a>
                        <a target="_blank" class="join_btn sal-animate" href="{{route('free_seminar')}}l" data-sal="slide-right" data-sal-delay="300" data-sal-duration="800" data-sal-easing="ease">
                            <span><img src="{{asset('front')}}/book.png" alt="icon"></span>Join free seminar
                        </a>
                        <ul>
                            <li>
                                <img src="{{asset('front')}}/iso.png" alt="logo">
                                <p>One of the best ISO certified  IT<span> Training Institutes in Bangladesh</span></p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="banner_img">
                        <a class="venobox" data-autoplay="true" data-vbtype="video" href="https://youtu.be/GogcDtMpgMc">
                            <img class="img-fluid homebanner-thumb video_thumb sal-animate" src="{{asset('uploads')}}/images/banner1667976882.jpg" alt="Home Banner| Icon" data-sal="zoom-in" data-sal-delay="200" data-sal-duration="700" data-sal-easing="ease">
                            <div class="banner_img_overly">
                                <div class="overly_icon">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="play" class="svg-inline--fa fa-play " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                        <path fill="currentColor" d="M361 215C375.3 223.8 384 239.3 384 256C384 272.7 375.3 288.2 361 296.1L73.03 472.1C58.21 482 39.66 482.4 24.52 473.9C9.377 465.4 0 449.4 0 432V80C0 62.64 9.377 46.63 24.52 38.13C39.66 29.64 58.21 29.99 73.03 39.04L361 215z"></path>
                                    </svg>
                                </div>
                                <div class="overly_text">
                                    <h4></h4>
                                </div>
                            </div>
                        </a>
                        <div class="plus"><img class="img-fluid" src="{{asset('front')}}/banner_background/shape-2.png" alt="Victor plus"></div>
                        <div class="dot_2"><img class="img-fluid" src="{{asset('front')}}/banner_background/shape-3.png" alt="victor dot"></div>
                        <div class="dot_3"><img class="img-fluid" src="{{asset('front')}}/banner_background/shape-4.png" alt="victor dot"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="course_department">
        <div class="container sal-animate" data-sal="slide-up" data-sal-delay="500" data-sal-duration="800" data-sal-easing="ease">
            <div class="course_slider_top">
                @foreach(getDepartments() as $department)
                @include('front.includes.department_slider_item', $department)
                @endforeach
            </div>
        </div>
    </section>
    <section id="courseslide">
        <div class="container populer_courses">
            <div class="row">
                <div class="col-12">
                    <div class="section_heading">
                        <h2>Popular Courses</h2>
                        <p>We have designed our courses with the most demanding professional skills. The knowledge, experience, and expertise gained through the program will ensure your desired job in the global market. From the list below you can enroll to any online or offline courses at any time.</p>
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
                <div class="course_body_slider">
                        @include('front.includes.course_category_item',['id'=>0])
                    @foreach(getDepartments() as $department)
                        @include('front.includes.course_category_item',['id'=>$department->id])
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <section id="info">
        <div class="container">
            <div class="row">
                <div class="col-12 d-none d-sm-block">
                    <div class="story_text_slider">
                        <div class="counte_item counte_item1">
                            <h4>18000+</h4>
                            <h3>Got Career Placement.</h3>
                            <p><p><span style="background-color: transparent; color: rgb(0, 0, 0);">Our job placement department has helped more than 16,000 skilled students to find jobs in competitive global markets. Promising a better future, we have successfully raised the job placement rate to 66% by providing continuous career support to the learners.</span></p></p>
                        </div>
                        <div class="counte_item counte_item2">
                            <h4>91%</h4>
                            <h3>Success Ratio</h3>
                            <p><p><span style="color: rgb(0, 0, 0); background-color: transparent;">Excelling at work needs hands-on experience. The practical approach towards problems puts our students ahead of any other competitors in global job markets. All the courses are structured considering the job prospects to make you well-prepared for a bright career. </span></p></p>
                        </div>
                        <div class="counte_item counte_item3">
                            <h4>28000+</h4>
                            <h3>Works As Expert Freelancer</h3>
                            <p><p>After course completion, a significant number of our students find jobs in multiple sectors. Many of the devoted students start working in the IT domain before completing the courses. Earning dollars from the global marketplace, they become self-reliant and contribute to the progress of our country.</p></p>
                        </div>
                        <div class="counte_item counte_item3">
                            <h4>60000+</h4>
                            <h3>Students Choose Creative IT</h3>
                            <p><p><span style="background-color: transparent; color: rgb(0, 0, 0);">Creative IT has become a trusted training institute for not only Bangladeshi residents but also living abroad. More than 60,000 passionate learners are working in different markets after completing courses from our institute.</span></p></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 d-block d-sm-none">
                    <div class="counte_item counte_item1 counte_item_xsm">
                        <h4>18000+</h4>
                        <h3>Got Career Placement.</h3>
                        <p><p><span style="background-color: transparent; color: rgb(0, 0, 0);">Our job placement department has helped more than 16,000 skilled students to find jobs in competitive global markets. Promising a better future, we have successfully raised the job placement rate to 66% by providing continuous career support to the learners.</span></p></p>
                    </div>
                    <div class="counte_item counte_item2 counte_item_xsm">
                        <h4>91%</h4>
                        <h3>Success Ratio</h3>
                        <p><p><span style="color: rgb(0, 0, 0); background-color: transparent;">Excelling at work needs hands-on experience. The practical approach towards problems puts our students ahead of any other competitors in global job markets. All the courses are structured considering the job prospects to make you-well prepared for a bright career. </span></p></p>
                    </div>
                    <div class="counte_item counte_item3 counte_item_xsm">
                        <h4>28000+</h4>
                        <h3>Works As Expert Freelancer</h3>
                        <p><p>After course completion, a significant number of our students find jobs in multiple sectors. Many of the devoted students start working in the IT domain before completing the courses. Earning dollars from the global marketplace, they become self-reliant and contribute to the progress of our country.</p></p>
                    </div>
                    <div class="counte_item counte_item3 counte_item_xsm">
                        <h4>60000+</h4>
                        <h3>Students Choose Creative IT</h3>
                        <p><p><span style="background-color: transparent; color: rgb(0, 0, 0);">Creative IT has become a trusted training institute for not only Bangladeshi residents but also living abroad. More than 60,000 passionate learners are working in different markets after completing courses from our institute.</span></p></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="student_success">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 sal-animate" data-sal="slide-up" data-sal-delay="300" data-sal-duration="800" data-sal-easing="ease">
                    <div class="section_heading">
                        <h2>Success Stories</h2>
                        <p>The presence of our students in the ever expanding IT industry motivates us, drives us to guide more people towards a sustainable future.</p>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="success_item" style="margin-bottom:0">
                        <div class="modal_item_wrap">
                            <a class="modal_item_in venobox modalvidwrap" data-autoplay="true" data-vbtype="video" href="https://youtu.be/LhwQDNOscXs">
                                <img class="img-fluid video_thumb w-100" src="{{asset('uploads')}}/images/success_story/success_story1666326111.jpg" alt="Success Story">
                                <div class="overly_icon">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="play" class="svg-inline--fa fa-play " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                        <path fill="currentColor" d="M361 215C375.3 223.8 384 239.3 384 256C384 272.7 375.3 288.2 361 296.1L73.03 472.1C58.21 482 39.66 482.4 24.52 473.9C9.377 465.4 0 449.4 0 432V80C0 62.64 9.377 46.63 24.52 38.13C39.66 29.64 58.21 29.99 73.03 39.04L361 215z"></path>
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="success_item" style="margin-bottom:0">
                        <div class="modal_item_wrap">
                            <a class="modal_item_in venobox modalvidwrap" data-autoplay="true" data-vbtype="video" href="https://youtu.be/-96Xco4IYGI">
                                <img class="img-fluid video_thumb w-100" src="{{asset('uploads')}}/images/success_story/success_story1666326261.jpg" alt="Success Story">
                                <div class="overly_icon">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="play" class="svg-inline--fa fa-play " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                        <path fill="currentColor" d="M361 215C375.3 223.8 384 239.3 384 256C384 272.7 375.3 288.2 361 296.1L73.03 472.1C58.21 482 39.66 482.4 24.52 473.9C9.377 465.4 0 449.4 0 432V80C0 62.64 9.377 46.63 24.52 38.13C39.66 29.64 58.21 29.99 73.03 39.04L361 215z"></path>
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="success_item" style="margin-bottom:0">
                        <div class="modal_item_wrap">
                            <a class="modal_item_in venobox modalvidwrap" data-autoplay="true" data-vbtype="video" href="https://youtu.be/16Fi41hAOn4">
                                <img class="img-fluid video_thumb w-100" src="{{asset('uploads')}}/images/success_story/success_story1666326234.jpg" alt="Success Story">
                                <div class="overly_icon">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="play" class="svg-inline--fa fa-play " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                        <path fill="currentColor" d="M361 215C375.3 223.8 384 239.3 384 256C384 272.7 375.3 288.2 361 296.1L73.03 472.1C58.21 482 39.66 482.4 24.52 473.9C9.377 465.4 0 449.4 0 432V80C0 62.64 9.377 46.63 24.52 38.13C39.66 29.64 58.21 29.99 73.03 39.04L361 215z"></path>
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="success_item" style="margin-bottom:0">
                        <div class="modal_item_wrap">
                            <a class="modal_item_in venobox modalvidwrap" data-autoplay="true" data-vbtype="video" href="https://youtu.be/7HPCI4BL5iY">
                                <img class="img-fluid video_thumb w-100" src="{{asset('uploads')}}/images/success_story/success_story1666326188.jpg" alt="Success Story">
                                <div class="overly_icon">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="play" class="svg-inline--fa fa-play " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                        <path fill="currentColor" d="M361 215C375.3 223.8 384 239.3 384 256C384 272.7 375.3 288.2 361 296.1L73.03 472.1C58.21 482 39.66 482.4 24.52 473.9C9.377 465.4 0 449.4 0 432V80C0 62.64 9.377 46.63 24.52 38.13C39.66 29.64 58.21 29.99 73.03 39.04L361 215z"></path>
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="more_facilities_btn text-center"><a data-sal="flip-up" data-sal-delay="500" data-sal-duration="800" data-sal-easing="ease" href="success-story.html" class="sal-animate">See More</a></div>
                </div>
            </div>
        </div>
    </section>
    <section id="more_facilities">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section_heading sal-animate" data-sal="slide-up" data-sal-delay="300" data-sal-duration="800" data-sal-easing="ease">
                        <h2>Exclusive Solutions that Set Us Apart</h2>
                        <p>Our aim is to make your learning experience the best possible by providing you with additional facilities that will help you to grow without bounds.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="more_facilities_item more_facilities_item_1 sal-animate" style="background-color:#FDF3FD" data-sal="flip-left" data-sal-delay="300" data-sal-duration="800" data-sal-easing="ease">
                        <img src="{{asset('uploads')}}/images/option/option1662372155.png" alt="Lifetime Support">
                        <h3>Lifetime Support</h3>
                        <div>
                            <p><p><span style="color: rgb(0, 0, 0); background-color: transparent;">Creative IT and its students share a lifetime bond. We strengthen our bond with you by providing lifelong support that helps you overcome any problem in your career path even after completing your course. Our expert support team ensures 24 hours service to all of our students. The personalized feedback that you receive from us, helps you grow, every day. </span></p></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="more_facilities_item more_facilities_item_1 sal-animate" style="background-color:#FDF3FD" data-sal="flip-left" data-sal-delay="300" data-sal-duration="800" data-sal-easing="ease">
                        <img src="{{asset('uploads')}}/images/option/option1662372262.png" alt="Career Placement Support">
                        <h3>Career Placement Support</h3>
                        <div>
                            <p><p class="ql-align-justify"><span style="background-color: transparent; color: rgb(0, 0, 0);">Our career placement department is ready to help you find a lucrative job. We ensure your resume gets into the hands of the right hiring manager.&nbsp; So far this department has helped more than 16000 students to find jobs in competitive global platforms. Promising a better future, we have successfully raised the job placement rate to 66% in 2023. </span></p></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="more_facilities_item more_facilities_item_1 sal-animate" style="background-color:#FDF3FD" data-sal="flip-left" data-sal-delay="300" data-sal-duration="800" data-sal-easing="ease">
                        <img src="{{asset('uploads')}}/images/option/option1662372211.png" alt="Class Videos">
                        <h3>Class Videos</h3>
                        <div>
                            <p><p><span style="background-color: transparent; color: rgb(0, 0, 0);">No need to worry if you miss a topic in the class. We record most of our classes so that students who miss a session can still get the information they need. They can watch the videos again and again until they understand the topic thoroughly. Our motto is to provide you a flexible learning experience to gradually improve your competence.</span></p></p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="more_facilities_btn text-center"><a data-sal="flip-up" data-sal-delay="500" data-sal-duration="800" data-sal-easing="ease" href="our-facilities.html" class="sal-animate">Our Facility</a></div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section id="student_feedback"><div class="container"><div class="col-12"><div class="section_heading sal-animate" data-sal="slide-up" data-sal-delay="300" data-sal-duration="800" data-sal-easing="ease"><h2>Comments</h2><p>Students are members of the Creative IT family. So, any constructive feedback from students motivates us to improve and move forward.</p></div></div><div class="col-12"><div class="feedback_1_slider">  <div class="feedback_item"><iframe src="https://www.facebook.com/plugins/post.php?href=https://www.facebook.com/uzzolhossain95/posts/2381290495369931&amp;show_text=true&amp;appId=191181859164389" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" style="border: none; overflow: hidden; width: 100%; height: 100vh; padding-right: 1px;"></iframe></div>  <div class="feedback_item"><iframe src="https://www.facebook.com/plugins/post.php?href=https://www.facebook.com/sanaianajnin.nuri/posts/pfbid02Au8WYSwpCjHaJF2AmzrLuVkr9ddCsET1NswjMuPsVbk3U6skQwhoJjcBhcFUzdyzl&amp;show_text=true&amp;appId=191181859164389" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" style="border: none; overflow: hidden; width: 100%; height: 100vh; padding-right: 1px;"></iframe></div>  <div class="feedback_item"><iframe src="https://www.facebook.com/plugins/post.php?href=https://www.facebook.com/tanjilalom24/posts/755438205778085&amp;show_text=true&amp;appId=191181859164389" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" style="border: none; overflow: hidden; width: 100%; height: 100vh; padding-right: 1px;"></iframe></div>  <div class="feedback_item"><iframe src="https://www.facebook.com/plugins/post.php?href=https://www.facebook.com/rumel2345/posts/10228975502111112&amp;show_text=true&amp;appId=191181859164389" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" style="border: none; overflow: hidden; width: 100%; height: 100vh; padding-right: 1px;"></iframe></div>  <div class="feedback_item"><iframe src="https://www.facebook.com/plugins/post.php?href=https://www.facebook.com/shoaib.alamin.1/posts/602310437955496&amp;show_text=true&amp;appId=191181859164389" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" style="border: none; overflow: hidden; width: 100%; height: 100vh; padding-right: 1px;"></iframe></div>  <div class="feedback_item"><iframe src="https://www.facebook.com/plugins/post.php?href=https://www.facebook.com/anika.t.kashfi/posts/pfbid08sJ1QE8FmBTSzDPkJbVN4mjGyoJMBWZwsZDymm462Q5VvBUhr59MzLfC1zj5jZobl&amp;show_text=true&amp;appId=191181859164389" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" style="border: none; overflow: hidden; width: 100%; height: 100vh; padding-right: 1px;"></iframe></div>  <div class="feedback_item"><iframe src="https://www.facebook.com/plugins/post.php?href=https://www.facebook.com/thrana.me/posts/pfbid02erFAtrENvQsrcKZepV3vVagpL2jfL4yiiansLg1zQwrahW9te56Ufr5dmqGnRGNHl&amp;show_text=true&amp;appId=191181859164389" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" style="border: none; overflow: hidden; width: 100%; height: 100vh; padding-right: 1px;"></iframe></div>  <div class="feedback_item"><iframe src="https://www.facebook.com/plugins/post.php?href=https://www.facebook.com/shakil.siddik.79/posts/pfbid0w2ucSUMfNFyEKLFd8iPXitjWJktCVSKiEVWYBmeva3TAZnZKoHoByqa3Po6ui4Gfl&amp;show_text=true&amp;appId=191181859164389" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" style="border: none; overflow: hidden; width: 100%; height: 100vh; padding-right: 1px;"></iframe></div>  <div class="feedback_item"><iframe src="https://www.facebook.com/plugins/post.php?href=https://www.facebook.com/bijoy.bijoy.927543/posts/pfbid037fWLrH3wfsmSv75QGXhjPQEViVrbHC3aa5iWEaWWef83XXSGMD3Y9hpEWq1Hc3E2l&amp;show_text=true&amp;appId=191181859164389" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" style="border: none; overflow: hidden; width: 100%; height: 100vh; padding-right: 1px;"></iframe></div>  <div class="feedback_item"><iframe src="https://www.facebook.com/plugins/post.php?href=https://www.facebook.com/taposroy.dip/posts/pfbid07n4Wkt8kEoBbzuJuSL1sRcLGDBrCQRCAsLz5Cdjw7yvC16VPvtTCy88maW1stqcFl&amp;show_text=true&amp;appId=191181859164389" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" style="border: none; overflow: hidden; width: 100%; height: 100vh; padding-right: 1px;"></iframe></div>  <div class="feedback_item"><iframe src="https://www.facebook.com/plugins/post.php?href=https://www.facebook.com/taposroy.dip/posts/pfbid07n4Wkt8kEoBbzuJuSL1sRcLGDBrCQRCAsLz5Cdjw7yvC16VPvtTCy88maW1stqcFl&amp;show_text=true&amp;appId=191181859164389" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" style="border: none; overflow: hidden; width: 100%; height: 100vh; padding-right: 1px;"></iframe></div>  <div class="feedback_item"><iframe src="https://www.facebook.com/plugins/post.php?href=https://www.facebook.com/mahbub.suhan.94/posts/pfbid028P1PnWkTt9HFHcpcTwf8DhfYsvyBsAMhFcZLjkCD3Y2s4H9nMnGAgZQawwkH4HgPl&amp;show_text=true&amp;appId=191181859164389" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" style="border: none; overflow: hidden; width: 100%; height: 100vh; padding-right: 1px;"></iframe></div>  <div class="feedback_item"><iframe src="https://www.facebook.com/plugins/post.php?href=https://www.facebook.com/sanaianajnin.nuri/posts/pfbid02Au8WYSwpCjHaJF2AmzrLuVkr9ddCsET1NswjMuPsVbk3U6skQwhoJjcBhcFUzdyzl&amp;show_text=true&amp;appId=191181859164389" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" style="border: none; overflow: hidden; width: 100%; height: 100vh; padding-right: 1px;"></iframe></div>  <div class="feedback_item"><iframe src="https://www.facebook.com/plugins/post.php?href=https://www.facebook.com/turjo.prasad/posts/pfbid0vQkyJ9uAEh5juHtw1yXHZUgUdYMx1mCrRGZLGfJuqMQpQdtUCp8c3BEi5aGpKmSil&amp;show_text=true&amp;appId=191181859164389" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" style="border: none; overflow: hidden; width: 100%; height: 100vh; padding-right: 1px;"></iframe></div>  <div class="feedback_item"><iframe src="https://www.facebook.com/plugins/post.php?href=https://www.facebook.com/saadmahmudul02/posts/pfbid09AYotFNeShoKoHg4YoTfcfAqknAgxdXjGzLpdsM1umG2pCo6Dez231cpAAP7LfPNl&amp;show_text=true&amp;appId=191181859164389" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" style="border: none; overflow: hidden; width: 100%; height: 100vh; padding-right: 1px;"></iframe></div>  <div class="feedback_item"><iframe src="https://www.facebook.com/plugins/post.php?href=https://www.facebook.com/ibadul.islam/posts/pfbid0TwvKMrrYw3ovLAxnD28Yy1HBzwYKWhnU9WX2BZtNMPtMFT4eydNAMBRW4GssM2y2l&amp;show_text=true&amp;appId=191181859164389" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" style="border: none; overflow: hidden; width: 100%; height: 100vh; padding-right: 1px;"></iframe></div>  <div class="feedback_item"><iframe src="https://www.facebook.com/plugins/post.php?href=https://www.facebook.com/bipulsaha1010/posts/pfbid0isQiemVNRNWPogszAropvWgKjbVEnzCKotAHm35kbnEBNwhSPpbFQm2tCy2EABGtl&amp;show_text=true&amp;appId=191181859164389" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" style="border: none; overflow: hidden; width: 100%; height: 100vh; padding-right: 1px;"></iframe></div>  <div class="feedback_item"><iframe src="https://www.facebook.com/plugins/post.php?href=https://www.facebook.com/FazleRabby43/posts/pfbid02Eue1yAR6YHAb46NZaTdQJFfJjK7iQAwjUN9o462FiaSVi86kvGcVok8SU2rTrPpel&amp;show_text=true&amp;appId=191181859164389" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" style="border: none; overflow: hidden; width: 100%; height: 100vh; padding-right: 1px;"></iframe></div>  <div class="feedback_item"><iframe src="https://www.facebook.com/plugins/post.php?href=https://www.facebook.com/SifatKazi69/posts/pfbid02eXu4235LnxiEdShZzu86yQWTT2Coone5zAHGA4rmHHWPKoTRew9wYEdUj92KLPk4l&amp;show_text=true&amp;appId=191181859164389" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" style="border: none; overflow: hidden; width: 100%; height: 100vh; padding-right: 1px;"></iframe></div>  <div class="feedback_item"><iframe src="https://www.facebook.com/plugins/post.php?href=https://www.facebook.com/reazhossain0/posts/pfbid0p968ZGdemaNYwTtkZ8MDbHmbf1Dzt6eECuWeSihVGyY1RGSakHG7dRWqDPPPQjyhl&amp;show_text=true&amp;appId=191181859164389" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" style="border: none; overflow: hidden; width: 100%; height: 100vh; padding-right: 1px;"></iframe></div>  <div class="feedback_item"><iframe src="https://www.facebook.com/plugins/post.php?href=https://www.facebook.com/omor.tasfi.cu/posts/pfbid0rsZ31LkdqH1cEQQjJUnXtYr4BDd74FkeUPbJdkSNs8p4HLK8K8S2LgR8r1uf3j83l&amp;show_text=true&amp;appId=191181859164389" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" style="border: none; overflow: hidden; width: 100%; height: 100vh; padding-right: 1px;"></iframe></div>  <div class="feedback_item"><iframe src="https://www.facebook.com/plugins/post.php?href=https://www.facebook.com/shahinmunshi143/posts/pfbid021pdSureYDCPJ2W6XnEPwT4xKb3Uu4QV2H4ddsmktR7xAoVASTNVWzsVzURzZXEWJl&amp;show_text=true&amp;appId=191181859164389" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" style="border: none; overflow: hidden; width: 100%; height: 100vh; padding-right: 1px;"></iframe></div>  <div class="feedback_item"><iframe src="https://www.facebook.com/plugins/post.php?href=https://www.facebook.com/gdruma66/posts/pfbid02CmU3ijHLzBd4mJtebwdQvDYahBufYPnficUF7rLKGtnQUSMToCfhR8ZzuixPgbLfl&amp;show_text=true&amp;appId=191181859164389" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" style="border: none; overflow: hidden; width: 100%; height: 100vh; padding-right: 1px;"></iframe></div>  <div class="feedback_item"><iframe src="https://www.facebook.com/plugins/post.php?href=https://www.facebook.com/Ashrafioishii/posts/pfbid0AdBn85et6DtnZw3qTDyMsrCy53VEkKdtbmUbAkbodXLK3YCnKMB1WCRqLpUWd4FKl&amp;show_text=true&amp;appId=191181859164389" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" style="border: none; overflow: hidden; width: 100%; height: 100vh; padding-right: 1px;"></iframe></div>  <div class="feedback_item"><iframe src="https://www.facebook.com/plugins/post.php?href=https://www.facebook.com/shaon.sarker.9699/posts/pfbid02Ex3NPd28y11jqurH4XcsPniYfohyGeT1GxyaeCRzorcns2GnaMnPaXDZ1LpvZ9Yfl&amp;show_text=true&amp;appId=191181859164389" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" style="border: none; overflow: hidden; width: 100%; height: 100vh; padding-right: 1px;"></iframe></div>  <div class="feedback_item"><iframe src="https://www.facebook.com/plugins/post.php?href=https://www.facebook.com/krhaubs/posts/pfbid02uzQPTjhFn8tM24cUjf4rbkdWmrNZo8CqViuPhdsfa3Q2xUFmDGRkaR1fVnboNdg1l&amp;show_text=true&amp;appId=191181859164389" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" style="border: none; overflow: hidden; width: 100%; height: 100vh; padding-right: 1px;"></iframe></div>  <div class="feedback_item"><iframe src="https://www.facebook.com/plugins/post.php?href=https://www.facebook.com/sujonuxi/posts/pfbid02eii8v6o2hewRVWjqP2bGivjJWLspBu1pNn7ZA8KgAP2skq3MwGmKkGG81Got9epNl&amp;show_text=true&amp;appId=191181859164389" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" style="border: none; overflow: hidden; width: 100%; height: 100vh; padding-right: 1px;"></iframe></div>  <div class="feedback_item"><iframe src="https://www.facebook.com/plugins/post.php?href=https://www.facebook.com/EmdadAhmed003/posts/pfbid0dTsJ49HWuqMKHxst3FAGBU4Hxa3oY8ShTAeDeP97vhbCZaAwikEMpYNoWQ8Us6UFl&amp;show_text=true&amp;appId=191181859164389" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" style="border: none; overflow: hidden; width: 100%; height: 100vh; padding-right: 1px;"></iframe></div>  <div class="feedback_item"><iframe src="https://www.facebook.com/plugins/post.php?href=https://www.facebook.com/brooooken/posts/pfbid033M645ZSivEA6pYqHd1XkjyuVxEjHU1NNJqf7KfXeH5N6cd6WXADv4owJbA66h94ml&amp;show_text=true&amp;appId=191181859164389" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" style="border: none; overflow: hidden; width: 100%; height: 100vh; padding-right: 1px;"></iframe></div>  <div class="feedback_item"><iframe src="https://www.facebook.com/plugins/post.php?href=https://www.facebook.com/farzana.y.mitu/posts/pfbid0267QhWJJ3CNBov6Bar72T6LNS7YJhBBTHkw5jKdvSmsLPgseGkmGoEiUFWqqD3wZml&amp;show_text=true&amp;appId=191181859164389" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" style="border: none; overflow: hidden; width: 100%; height: 100vh; padding-right: 1px;"></iframe></div>  </div></div><div class="col-12"><div class="recommends text-center"><h4>225k <img src="https://www.creativeitinstitute.com/comment_icon.png" alt="icon"> <span>Recommends</span></h4></div></div></div></section> -->
    <section id="virtual">
        <div class="container">
            <div class="virtual">
                <span><iframe src="https://www.google.com/maps/embed?pb=!4v1666870219936!6m8!1m7!1sCAoSLEFGMVFpcE9RMUItUTFuaGxiU2lQR2dKcHhPeEVKeVE1OXN2MG1pM3hCREVo!2m2!1d23.74137159799416!2d90.38255926717535!3f177.0570796078249!4f4.773503236874745!5f0.5159516133744646" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></span>
                <div class="virtual_text">
                    <h6>Virtual Tour</h6>
                    <p>Enroll to any online or offline course now, take one step ahead towards a competent career</p>
                </div>
            </div>
            @foreach(getDepartments() as $department)
                @if(getDepartmentCourse($department->id)->count()>0)
                <div class="col-12">
                    <div class="course_heading">
                        <h3>{{$department->name}}</h3>
                    </div>
                </div>
                <div class="course_items_display">
                    <div class="row">
                        @foreach(getDepartmentCourse($department->id) as $course)
                            @include('front.includes.course_item',$course)
                        @endforeach
                    </div>
                </div>
                    @endif
            @endforeach
        </div>
        </div>
    </section>
    <section id="seminar">
        <div class="container seminar">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="seminar_content sal-animate" data-sal="slide-left" data-sal-delay="500" data-sal-duration="800" data-sal-easing="ease">
                        <h2>Join Our Free Seminars</h2>
                        <p>Need guidelines to choose a suitable course? Join our free seminars to consult with our experts, they will guide you to pick the course that matches your interest and discuss the career prospects.
                        <ul>
                        </ul>
                        <div class="seminar_btn">
                            <a data-sal="flip-up" data-sal-delay="600" data-sal-duration="800" data-sal-easing="ease" href="{{route('free_seminar')}}" class="sal-animate">Free Seminar Schedule  </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="free_seminar_img">
                        <img class="img-fluid w-100 sal-animate" src="{{asset('uploads')}}/images/home/seminar_default.jpg" alt="Creative IT Institute" data-sal="slide-right" data-sal-delay="600" data-sal-duration="1000" data-sal-easing="ease">
                        <div class="seminar_dots"><img class="img-fluid" src="{{asset('front')}}/banner_background/shape-5.png" alt="victor dots"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="practical_project">
        <div class="container practical_project">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6">
                    <div class="practical_project_img sal-animate" data-sal="slide-down" data-sal-delay="500" data-sal-duration="900" data-sal-easing="ease">
                        <img class="img-fluid w-100" src="{{asset('uploads')}}/images/featured/featured_text_one_image1662023354.png" alt="Providing project-based classes is our specialty" alt="Practical-Project">
                        <div class="prectical_dots"><img src="{{asset('front')}}/banner_background/shape-6.png" alt="victor-dots"></div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 col-md-6">
                    <div class="practical_project_text sal-animate" data-sal="slide-up" data-sal-delay="500" data-sal-duration="800" data-sal-easing="ease">
                        <h2>Providing project-based classes is our specialty</h2>
                        <div>
                            <p>We believe in skills gained through practical projects. A great number of people struggle to start their career in the tech field for only having conceptual knowledge. Creative IT makes sure to provide hands-on training to prepare you for job markets. Our course module contains projects that are designed to track your progress. During the course, you will be able to make a portfolio yourself to showcase your practical skills to the potential employers.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="glory">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="glory_text sal-animate" data-sal="slide-left" data-sal-delay="500" data-sal-duration="800" data-sal-easing="ease">
                        <h5>Successfully 14 Year&#039;s</h5>
                        <h2>World-Renowned IT Expert Making Organization</h2>
                        <div>
                            <p>Creative IT has been working with a vision to create IT experts for the past 14 years. In a fast pacing world, where every sector relies on technology,  you need to develop IT skills to secure a better future. With the utmost dedication, we have been able to make more than 50,000 IT experts who are currently working in different sectors.</p>
                        </div>
                        <div class="glory_btn sal-animate" data-sal="flip-right" data-sal-delay="500" data-sal-duration="800" data-sal-easing="ease">
                            <a href="{{route('our_courses')}}">Browse Course</a>
                            <a href="{{route('about')}}">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="glory_img sal-animate" data-sal="slide-right" data-sal-delay="600" data-sal-duration="1000" data-sal-easing="ease"><img class="img-fluid cit_radius" src="{{asset('uploads')}}/images/featured/02_default.jpg" alt="Computer Lab"></div>
                </div>
            </div>
        </div>
    </section>
    <section id="couter_up">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="counter_up_item ">
                        <h5><span class="counter" data-count="54600"></span>+</h5>
                        <p>Successful Students</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="counter_up_item ">
                        <h5><span class="counter" data-count="28000"></span>+</h5>
                        <p>Expert Freelancers</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="counter_up_item ">
                        <h5><span class="counter" data-count="18000"></span>+</h5>
                        <p>Skilled Job Holders</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="counter_up_item ">
                        <h5><span class="counter" data-count="500"></span>+</h5>
                        <p>Industry Expert</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="counter_up_item ">
                        <h5><span class="counter" data-count="91"></span>%</h5>
                        <p>Success Ratio</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="counter_up_item ">
                        <h5><span class="counter" data-count="700"></span>+</h5>
                        <p>Companies</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="company">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="company_heading">
                        <h2 data-sal="slide-left" data-sal-delay="200" data-sal-duration="800" data-sal-easing="ease" class="sal-animate">700+ Companies Are Connected to Us</h2>
                    </div>
                </div>
                <div class="col-12 sal-animate" data-sal="slide-up" data-sal-delay="300" data-sal-duration="900" data-sal-easing="ease">
                    <div class="company_menu">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation"><a class="nav-link company_nav_tab active" data-bs-target="#data_id_1" data-bs-toggle="tab" aria-selected="true"> Working with </a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link company_nav_tab " data-bs-target="#data_id_2" data-bs-toggle="tab" aria-selected="false"> Members of </a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link company_nav_tab " data-bs-target="#data_id_3" data-bs-toggle="tab" aria-selected="false"> Our Concerns </a></li>
                        </ul>
                    </div>
                    <div class="company_body tab-content" id="myTabContent">
                        <div class="company_item tab-pane fade show active" id="data_id_1" role="tabpanel">
                            <ul>
                                <li><img src="{{asset('uploads')}}/images/cit_partner/1_partner_logo_1663044423.png" width="150%" alt="CIT Partner 1"></li>
                                <li><img src="{{asset('uploads')}}/images/cit_partner/2_partner_logo_1663044423.png" width="150%" alt="CIT Partner 2"></li>
                                <li><img src="{{asset('uploads')}}/images/cit_partner/3_partner_logo_1663044423.png" width="150%" alt="CIT Partner 3"></li>
                                <li><img src="{{asset('uploads')}}/images/cit_partner/4_partner_logo_1663044423.png" width="150%" alt="CIT Partner 4"></li>
                                <li><img src="{{asset('uploads')}}/images/cit_partner/5_partner_logo_1663044423.png" width="150%" alt="CIT Partner 5"></li>
                            </ul>
                        </div>
                        <div class="company_item tab-pane fade " id="data_id_2" role="tabpanel">
                            <ul>
                                <li><img src="{{asset('uploads')}}/images/cit_partner/1_partner_logo_1663044599.png" width="150%" alt="CIT Partner 1"></li>
                                <li><img src="{{asset('uploads')}}/images/cit_partner/2_partner_logo_1663044599.png" width="150%" alt="CIT Partner 2"></li>
                                <li><img src="{{asset('uploads')}}/images/cit_partner/3_partner_logo_1663044599.png" width="150%" alt="CIT Partner 3"></li>
                                <li><img src="{{asset('uploads')}}/images/cit_partner/4_partner_logo_1663044599.png" width="150%" alt="CIT Partner 4"></li>
                                <li><img src="{{asset('uploads')}}/images/cit_partner/5_partner_logo_1663044599.png" width="150%" alt="CIT Partner 5"></li>
                                <li><img src="{{asset('uploads')}}/images/cit_partner/6_partner_logo_1663044599.png" width="150%" alt="CIT Partner 6"></li>
                            </ul>
                        </div>
                        <div class="company_item tab-pane fade " id="data_id_3" role="tabpanel">
                            <ul>
                                <li><img src="{{asset('uploads')}}/images/cit_partner/2_partner_logo_1663044837.png" width="150%" alt="CIT Partner 1"></li>
                                <li><img src="{{asset('uploads')}}/images/cit_partner/3_partner_logo_1663044837.png" width="150%" alt="CIT Partner 2"></li>
                                <li><img src="{{asset('uploads')}}/images/cit_partner/4_partner_logo_1663044837.png" width="150%" alt="CIT Partner 3"></li>
                                <li><img src="{{asset('uploads')}}/images/cit_partner/5_partner_logo_1663044837.png" width="150%" alt="CIT Partner 4"></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
