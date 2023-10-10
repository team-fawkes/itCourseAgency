<!-- OffCanvas Menu Start-->
<div class="sm_menu d-lg-none">
    <div class="offcanvas_menu">
        <div class="bars">
            <a class="btn" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                <img src="{{asset('front')}}/images/home/toggole_menu.png" alt="icon">
            </a>
        </div>
        <div class="logo">
            <a href="index.html">
                <img src="{{asset('front')}}/logo.png" alt="Logo">
            </a>
        </div>
    </div>

    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel" style="background: url({{asset('front')}}/images/home/offCanvasBg.png) no-repeat center; background-size: cover;">
        <div class="offcanvas-body">
            <div class="offcanvas-header justify-content-end">
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <ul class="justify-content-center flex-column text-center ms-auto mb-2 mb-lg-0 main_menu navbar-nav">
                <div class="mb-2">
                    <a href="https://justonestopsolution.com/">
                        <label class="form-switch">
                        <span class="form-slider round">
                           <p id="light-text">BN</p>
                           <p id="light-tex2">EN</p>
                        </span>
                        </label>
                    </a>
                </div>
                <li class="nav-item">
                    <a href="index.html" data-rr-ui-event-key="https://www.creativeitinstitute.com" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="about-us.html" data-rr-ui-event-key="https://www.creativeitinstitute.com/about-us" class="nav-link">About us</a>
                </li>
                <li class="nav-item">
                    <a href="success-story.html" data-rr-ui-event-key="https://www.creativeitinstitute.com/success-story" class="nav-link">Success story</a>
                </li>
                <li class="nav-item">
                    <a href="freelancing.html" data-rr-ui-event-key="https://www.creativeitinstitute.com/freelancing" class="nav-link">Freelancing</a>
                </li>
                <li class="nav-item">
                    <a href="contact-us.html" data-rr-ui-event-key="https://www.creativeitinstitute.com/contact-us" class="nav-link">Contact</a>
                </li>
                <div class="navbar_btn text-center nav-item">
                    <a href="our-courses.html">
                        <img src="{{asset('front')}}/images/home/Button-book.png" alt="icon">Browse Course<i class="fa fa-angle-down ps-2"></i></a>
                </div>
            </ul>
        </div>
    </div>
</div>
<!-- OffCanvas Menu End-->
