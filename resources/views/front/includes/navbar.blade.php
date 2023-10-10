<nav id="navbar" class="d-none d-lg-block  navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a href="{{route('home')}}" data-sal="zoom-in" data-sal-delay="300" data-sal-duration="800" data-sal-easing="ease" class="navbar-brand sal-animate">
            <img src="{{asset('front')}}/logo.png" style="max-height: 52px" alt="Logo">
        </a>
        <div class="navbar-collapse collapse">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 main_menu navbar-nav">
                <li class="nav-item sal-animate" data-sal="slide-right" data-sal-delay="300" data-sal-duration="800" data-sal-easing="ease">
                    <a href="{{route('home')}}" data-rr-ui-event-key="https://www.creativeitinstitute.com" class="nav-link">Home</a>
                </li>
                <li class="nav-item sal-animate" data-sal="slide-right" data-sal-delay="300" data-sal-duration="800" data-sal-easing="ease">
                    <a href="{{route('about')}}" data-rr-ui-event-key="https://www.creativeitinstitute.com/about-us" class="nav-link">About us</a>
                </li>
                <li class="nav-item sal-animate" data-sal="slide-right" data-sal-delay="300" data-sal-duration="800" data-sal-easing="ease">
                    <a href="{{route('success_story')}}" data-rr-ui-event-key="https://www.creativeitinstitute.com/success-story" class="nav-link">Success story</a>
                </li>
                <li class="nav-item sal-animate" data-sal="slide-right" data-sal-delay="300" data-sal-duration="800" data-sal-easing="ease">
                    <a href="{{route('freelancing')}}" data-rr-ui-event-key="https://www.creativeitinstitute.com/freelancing" class="nav-link">Freelancing</a>
                </li>
                <li class="nav-item sal-animate" data-sal="slide-right" data-sal-delay="300" data-sal-duration="800" data-sal-easing="ease">
                    <a href="{{route('contact')}}" data-rr-ui-event-key="https://www.creativeitinstitute.com/contact-us" class="nav-link">Contact</a>
                </li>
                <div class="navbar_btn nav-item">
                    <a data-sal="flip-up" data-sal-delay="300" data-sal-duration="800" data-sal-easing="ease" href="{{route('our_courses')}}" class="sal-animate"><img src="{{asset('front')}}/book.png" alt="icon"><span style="margin-right:0.5rem">Browse Course</span><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-down" class="svg-inline--fa fa-angle-down " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                            <path fill="currentColor" d="M192 384c-8.188 0-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L192 306.8l137.4-137.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-160 160C208.4 380.9 200.2 384 192 384z"></path>
                        </svg></a>
                </div>
            </ul>
        </div>
    </div>
</nav>
