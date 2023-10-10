@extends('layouts.front')
@section('meta')
    <title>Professional IT Training Courses &amp; Certification - Creative IT Institute</title>
    <meta name="title" content="Professional IT Training Institute in Bangladesh - Creative IT">
    <meta name="description" content="Develop your professional skills through CIT We provide Graphic Design, Digital Marketing, Web Design Development, 3d Animation, etc Call 880 1624 666 000">
@endsection
@section('content')
    <section id="instructors_teachers" class="free_seminer_schedule">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="facilities_heading">
                        <h1>Courses</h1>
                        <div class="dtails">
                            <p><span style="font-weight: 400;">We offer all the trendy courses that are in demand in the global market. In addition, you are getting lab facilities where high-end computers with the required configuration are ready to facilitate your learning. After class, you can practice the topic in our labs to grow your skills. The courses are designed to make you confident throughout the learning journey with Creative IT.</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="training_department">
        <div class="container">
            <div class="training_department_main">
                @foreach(getDepartments() as $department)
                <a data-sal="slide-left" data-sal-delay="0" data-sal-duration="900" data-sal-easing="ease" href="{{route('department',['slug'=>$department->slug])}}" class="sal-animate" style="border: 0px;">
                    <div class="training_department_item" style="box-shadow: rgba(0, 0, 0, 0.06) 5px 5px 60px; border-radius: 20px;">
                        <div class="couse_icon"><img src="{{asset('uploads/'.$department->image)}}" alt="{{$department->name}}"></div>
                        <div class="couse_text">
                            <h3>{{$department->name}}</h3>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </section>
    <section id="admission">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_heading">
                        <h2 id="course_head">Admission Is Going On</h2>
                        <p>We have designed our course list with the demanding skills in the local and global market. From the list, you can pick any online or offline course according to your preference.</p>
                    </div>
                </div>
                @foreach(getDepartments() as $department)
                    @if(getDepartmentCourse($department->id)->count()>0)
                        <div class="col-12">
                            <div class="course_heading">
                                <h3>{{$department->name}}a</h3>
                            </div>
                        </div>
                        @foreach(getDepartmentCourse($department->id) as $course)
                            @include('front.includes.course_item',$course)
                        @endforeach
                    @endif
                @endforeach
            </div>
        </div>
    </section>
    <section id="student_feedback">
        <div class="container">
            <div class="col-12">
                <div class="section_heading sal-animate" data-sal="slide-up" data-sal-delay="300" data-sal-duration="800" data-sal-easing="ease">
                    <h2>Comments</h2>
                    <p>Students are members of the Creative IT family. So, any constructive feedback from students motivates us to improve and move forward.</p>
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
            <div class="col-12">
                <div class="recommends text-center">
                    <h4>225k
                        <!-- --> <img src="comment_icon.png" alt="icon"> <span>Recommends</span>
                    </h4>
                </div>
            </div>
        </div>
    </section>
@endsection
