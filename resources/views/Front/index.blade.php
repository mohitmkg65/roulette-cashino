@section('meta-header')
@section('title', !empty($metadata->meta_title) ? $metadata->meta_title : '')
@section('meta_description', !empty($metadata->meta_description) ? $metadata->meta_description : '')
@section('meta_keywords', !empty($metadata->meta_keyword) ? $metadata->meta_keyword : '')
@include ("Front.includes.header")
@include ("Front.includes.social-sidebar")


</div>
<!-- hero start -->

<style>
    
/* Secondary Vertical Navbar */
.vertical-navbar {
    position: absolute;
    left: -108px;
    width: 121px;
    z-index: 999;
    height: 360px;
    top: 125px;
}

.vertical-navbar ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
}

.vertical-navbar ul li {
    display: block;
    margin: 95px 6px 0px 36px;
    transform: rotate(270deg);
    width: 100px;
}

/* Fix vertical text issue */
.vertical-navbar ul li a {
    text-decoration: none;
    color: white;
    font-size: 13px;
    padding: 0px 55px;
    /* display: inline-block; */
    transition: 0.3s ease-in-out;
}


.vertical-navbar ul li a:hover {
    color: var(--primary-color);
}

/* Main Content */
.content {
    margin-left: 220px;
    /* Adjust margin to accommodate sidebar */
    padding: 20px;
    margin-top: 80px;
    /* Prevent content from being hidden under navbar */
}

.vertical-navbar::after {
    content: '';
    position: absolute;
    bottom: -5px;
    right: 1px;
    width: 404px;
    height: 1.5px;
    background: linear-gradient(270deg, rgba(255, 255, 255, 0) 0%, #FFFFFF 66.56%);
    /* transform: scaleX(0); */
    transform: rotate(90deg);
    transform-origin: bottom right;
    transition: transform 0.3s ease-in-out;
}

/* vertical navbar end */

</style>

<div class="container hero-top-padding">
    <div class="hero-text-content">
        <h6>Smart Tech <span>Solutions</span></h6>
    </div>
    <div class="row">
        <div class="col-7">
            <img src="{{URL::asset('front/images/hero-img.png')}}" class="hero-img" alt="">
        </div>
        <div class="col-5">
            <div class="hero-content">
                <div class="heading-top">
                    WELCOME TO OUR COMPANY
                </div>
                <div class="banner-heading">
                    Innovative Software, Built to Scale
                </div>
                <div class="para">
                    <p class="text-white">From enterprise applications to custom solutions,
                        we develop robust software tailored to your business needs.</p>
                </div>
                <div class="hero-btn">
                    <button class="btn"> Get A Free Quote <img src="{{URL::asset('front/images/btn-arrow.svg')}}"
                            class="btn-arrow" alt=""></button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- hero end -->

<!-- about section -->

<div class="container section-padding">
    <div class="row">
        <div class="col-7">
            <div class="about-content">
                <div class="heading-top">
                    ABOUT OUR COMPANY
                </div>
                <div class="heading">
                    Elevate Your Business with Top-Notch Services
                </div>
                <div class="heading-mini">Empowering businesses through technology is at the core of what we do.
                </div>
                <div class="para">
                    <p class="paragraph">
                        At 80 Tech Solutions, we are dedicated to empowering service-based
                        industries with cutting-edge technology solutions, including custom software
                        development, process automation, robotics, AI, and expert project management. Our goal
                        is to seamlessly integrate innovation and expertise to optimize your operations and
                        drive your business forward.
                        We work closely with organizations and their teams to gain deep insights into their
                        service delivery challenges. This allows us to design and implement highly customized,
                        efficient workflows that eliminate barriers and enhance service interactions, ensuring a
                        smoother, more impactful customer experience.</p>
                </div>
                <div class="about-cards mb-3">
                    <div class="row">
                        <div class="col-6">
                            <div class="card-main">
                                <img src="{{URL::asset('front/images/expert-innovation.svg')}}" alt="">
                                <h5>Expert Innovative Design Professionals</h5>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card-main">
                                <img src="{{URL::asset('front/images/deliver-industry.svg')}}" alt="">
                                <h5>Deliver Industry-Leading Service to Clients</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-btn">
                    <button class="btn"> Get A Free Quote<img src="{{URL::asset('front/images/btn-arrow.svg')}}"
                            class="btn-arrow" alt=""></button>
                </div>
            </div>
        </div>
        <div class="col-5">
            <div class="img-group">
                <div class="img-right">
                    <img src="{{URL::asset('front/images/about-rightimg.png')}}" class="hero-img" alt="">
                </div>
                <div class="img-left">
                    <img src="{{URL::asset('front/images/about-leftimg.png')}}" class="hero-img" alt="">
                </div>
                <div class="text-group bg-vector-about">
                    <div class="text-center">
                        <h3>25 +</h3>
                        <span class="text-white">
                            Years of <br>Industry Experience
                        </span>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- about section end -->

<!-- services start -->
<div class="service-section-background">

    <div class="container section-padding">

        <div class="blogs-heading">
            <div class="blogs-content text-center service-content">
                <div class="heading-top heading-top-blogs">
                    OUR SERVICES
                </div>
                <div class="heading mt-2">
                    Tailored Services for Your Needs
                </div>
            </div>
        </div>
        <div class="service-cards pt-5">

            <div class="swiper mySwiperservices">
                <div class="swiper-wrapper swiper-wrapper-padding-bottom">
                    <div class="swiper-slide">
                        <div class="service-card card">
                            <div class="card-body">
                                <h5 class="card-title">Software Development</h5>
                                <p class="card-text mt-4">From enterprise applications to custom solutions, we
                                    develop
                                    robust software tailored to your business needs.
                                </p>
                            </div>
                            <img src="{{URL::asset('front/images/service-1.png')}}" class="card-img-bottom" alt="...">
                            <div class="service-btn">
                                <a href="javascript:;" class="know-more-btn">Know More <img class="ps-2"
                                        src="{{URL::asset('front/images/btn-arrow.svg')}}" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service-card card">
                            <div class="card-body">
                                <h5 class="card-title">App Development</h5>
                                <p class="card-text mt-4">We design and develop high-performance mobile and web
                                    applications that engage users and drive results.
                                </p>
                            </div>
                            <img src="{{URL::asset('front/images/service-2.png')}}" class="card-img-bottom" alt="...">
                            <div class="service-btn">
                                <a href="javascript:;" class="know-more-btn">Know More <img class="ps-2"
                                        src="{{URL::asset('front/images/btn-arrow.svg')}}" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service-card card">
                            <div class="card-body">
                                <h5 class="card-title">Website Development</h5>
                                <p class="card-text mt-4">Build a stunning, high-performance website that
                                    reflects your brand and drives business growth.
                                </p>
                            </div>
                            <img src="{{URL::asset('front/images/service-3.png')}}" class="card-img-bottom" alt="...">
                            <div class="service-btn">
                                <a href="javascript:;" class="know-more-btn">Know More <img class="ps-2"
                                        src="{{URL::asset('front/images/btn-arrow.svg')}}" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service-card card">
                            <div class="card-body">
                                <h5 class="card-title">AI
                                    Services</h5>
                                <p class="card-text mt-4">Build a stunning, high-performance website that
                                    reflects your brand and drives business growth.
                                </p>
                            </div>
                            <img src="{{URL::asset('front/images/service-4.png')}}" class="card-img-bottom" alt="...">
                            <div class="service-btn">
                                <a href="javascript:;" class="know-more-btn">Know More <img class="ps-2"
                                        src="{{URL::asset('front/images/btn-arrow.svg')}}" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service-card card">
                            <div class="card-body">
                                <h5 class="card-title"> IoT
                                    Solutions</h5>
                                <p class="card-text mt-4">Transform your business with IoT-powered automation,
                                    real-time insights, and connected devices.
                                </p>
                            </div>
                            <img src="{{URL::asset('front/images/service-5.png')}}" class="card-img-bottom" alt="...">
                            <div class="service-btn">
                                <a href="javascript:;" class="know-more-btn">Know More <img class="ps-2"
                                        src="{{URL::asset('front/images/btn-arrow.svg')}}" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service-card card">
                            <div class="card-body">
                                <h5 class="card-title">
                                    PM & IT
                                    Consultancy</h5>
                                <p class="card-text mt-4">Navigate digital transformation with expert project
                                    management and IT consultancy services tailored to your goals.
                                </p>
                            </div>
                            <img src="{{URL::asset('front/images/service-6.png')}}" class="card-img-bottom" alt="...">
                            <div class="service-btn">
                                <a href="javascript:;" class="know-more-btn">Know More <img class="ps-2"
                                        src="{{URL::asset('front/images/btn-arrow.svg')}}" alt=""></a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="swiper-pagination"></div>
            </div>



        </div>

    </div>
</div>

<!-- services end -->

<!-- technology start -->

<div class="container section-padding">

    <div class="blogs-heading">
        <div class="blogs-content technology-content text-center">
            <div class="heading-top heading-top-blogs heading-top-technology">
                TECHNOLOGY STACK
            </div>
            <div class="heading mt-2">
                We build scalable software, AI, and IoT solutions.
            </div>
        </div>
    </div>

    <div class="technology pt-5">
        <div class="next-prev-btn">
            <div class="prev-btn swiper-button-prev-tech"><img src="{{URL::asset('front/images/left-arrow.svg')}}" alt="">
            </div>
            <div class="next-btn swiper-button-next-tech"><img src="{{URL::asset('front/images/right-arrow.svg')}}" alt="">
            </div>
        </div>
        <div class="swiper mySwipertechnology">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="technology card">
                        <div class="technology-card-body card-body">
                            <div class="card-body-top">
                                <h3>01</h3>
                                <h5 class="card-title">Software Development</h5>
                            </div>
                            <div class="card-body-bottom pt-5">
                                <div class="tech-images">
                                    <img src="{{URL::asset('front/images/laravel-logo.svg')}}" alt="">
                                    <img src="{{URL::asset('front/images/Nodejs-logo.svg')}}" alt="">
                                    <img src="{{URL::asset('front/images/python-logo.svg')}}" alt="">
                                    <img src="{{URL::asset('front/images/codeigniter-logo.svg')}}" alt="">
                                    <img src="{{URL::asset('front/images/Mysql-logo.svg')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="swiper-slide">
                    <div class="technology card">
                        <div class="technology-card-body card-body">
                            <div class="card-body-top">
                                <h3>02</h3>
                                <h5 class="card-title">Software Development</h5>
                            </div>
                            <div class="card-body-bottom pt-5">
                                <div class="tech-images">
                                    <img src="{{URL::asset('front/images/laravel-logo.svg')}}" alt="">
                                    <img src="{{URL::asset('front/images/Nodejs-logo.svg')}}" alt="">
                                    <img src="{{URL::asset('front/images/python-logo.svg')}}" alt="">
                                    <img src="{{URL::asset('front/images/codeigniter-logo.svg')}}" alt="">
                                    <img src="{{URL::asset('front/images/Mysql-logo.svg')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>

        <!-- <div class="row">
                    <div class="col-12">
                        <div class="technology card">
                            <div class="technology-card-body card-body">
                                <div class="card-body-top">
                                    <h3>01</h3>
                                    <h5 class="card-title">Software Development</h5>
                                </div>
                                <div class="card-body-bottom pt-5">
                                    <div class="tech-images">
                                        <img src="./assets/images/laravel-logo.svg" alt="">
                                        <img src="./assets/images/Nodejs-logo.svg" alt="">
                                        <img src="./assets/images/python-logo.svg" alt="">
                                        <img src="./assets/images/codeigniter-logo.svg" alt="">
                                        <img src="./assets/images/Mysql-logo.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div> -->
    </div>

</div>

<!-- technology end -->

<!-- why choose us start -->


<div class="container section-padding">

    <div class="blogs-heading">
        <div class="blogs-content why-choose-us-content text-center">
            <div class="heading-top heading-top-blogs">
                WHY CHOOSE US
            </div>
            <div class="heading mt-2">
                Why We’re Your Best Choice?
            </div>
        </div>
    </div>
    <div class="why-choose-us pt-5">

        <div class="row">
            <div class="col-12">


                <div class="accordion" id="accordionExample">
                    <div class="accordion-item active">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                We provide customized software development services.
                                <div class="accor-button icon-toggle icon-closed">01</div>
                                <div class="accor-button icon-toggle icon-open">-</div>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                At 80 Tech Solutions, we specialize in creating custom software solutions
                                tailored to the unique needs of your business. Our expert team will work closely
                                with you to develop innovative software that drives efficiency and growth.
                            </div>
                        </div>
                    </div>

                    <!-- Accordion Item 2 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Experience seamless operations
                                <div class="accor-button icon-toggle icon-closed">02</div>
                                <div class="accor-button icon-toggle icon-open">-</div>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                At 80 Tech Solutions, we specialize in creating custom software solutions
                                tailored to the unique needs of your business. Our expert team will work closely
                                with you to develop innovative software that drives efficiency and growth.
                            </div>
                        </div>
                    </div>

                    <!-- Accordion Item 3 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false"
                                aria-controls="collapseThree">
                                Successful execution of projects
                                <div class="accor-button icon-toggle icon-closed">03</div>
                                <div class="accor-button icon-toggle icon-open">-</div>
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                At 80 Tech Solutions, we specialize in creating custom software solutions
                                tailored to the unique needs of your business. Our expert team will work closely
                                with you to develop innovative software that drives efficiency and growth.
                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>

</div>

<!-- why choose us end -->


<!-- recent projects section -->
<div class="recent-project-section">
    <div class="container section-padding ">
        <div class="row">
            <div class="col-12">
                <div class=" blogs-content recent-project recent-project-content-bg-text">
                    <div class="heading-top">
                        RECENT WORKS GALLERY
                    </div>
                    <div class="d-flex justify-content-between">

                        <div class="heading">
                            Explore Our Recent Projects
                        </div>
                        <div class="next-prev-btn">
                            <div class="prev-btn swiper-button-prev"><img src="{{URL::asset('front/images/left-arrow.svg')}}"
                                    alt=""></div>
                            <div class="next-btn swiper-button-next"><img src="{{URL::asset('front/images/right-arrow.svg')}}"
                                    alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="swiper mySwiperworks">
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <img src="{{URL::asset('front/images/portfolio1.png')}}" alt="">
                <div class="project-content">
                    <div class="left-side">
                        <span>CREATIVE MEDIA PVT.LTD</span>
                        <h3 class="mt-2">Website Design</h3>
                    </div>
                    <div class="right-side">
                        <button class="btn btn-explore-more"> Explore More <img
                                src="{{URL::asset('front/images/btn-arrow.svg')}}" class="btn-arrow" alt=""></button>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="{{URL::asset('front/images/portfolio2.png')}}" alt="">
                <div class="project-content">
                    <div class="left-side">
                        <span>DENERA TECH PVT.LTD</span>
                        <h3 class="mt-2">Website Design</h3>
                    </div>
                    <div class="right-side">
                        <button class="btn btn-explore-more"> Explore More <img
                                src="{{URL::asset('front/images/btn-arrow.svg')}}" class="btn-arrow" alt=""></button>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="{{URL::asset('front/images/portfolio3.png')}}" alt="">
                <div class="project-content">
                    <div class="left-side">
                        <span>LINERS CREATION PVT.LTD</span>
                        <h3 class="mt-2">Mobile App Design</h3>
                    </div>
                    <div class="right-side">
                        <button class="btn btn-explore-more"> Explore More <img
                                src="{{URL::asset('front/images/btn-arrow.svg')}}" class="btn-arrow" alt=""></button>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="{{URL::asset('front/images/portfolio4.png')}}" alt="">
                <div class="project-content">
                    <div class="left-side">
                        <span>QUBE Technologies</span>
                        <h3 class="mt-2">Mobile App Design</h3>
                    </div>
                    <div class="right-side">
                        <button class="btn btn-explore-more"> Explore More <img
                                src="{{URL::asset('front/images/btn-arrow.svg')}}" class="btn-arrow" alt=""></button>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="{{URL::asset('front/images/portfolio5.png')}}" alt="">
                <div class="project-content">
                    <div class="left-side">
                        <span>AGEIS Hotel</span>
                        <h3 class="mt-2">Website App Design</h3>
                    </div>
                    <div class="right-side">
                        <button class="btn btn-explore-more"> Explore More <img
                                src="{{URL::asset('front/images/btn-arrow.svg')}}" class="btn-arrow" alt=""></button>
                    </div>
                </div>
            </div>


        </div>
        <!-- <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div> -->
    </div>
    <div class="container section-padding">
        <div class="row">
            <div class="col-12">
                <div class="recent-project-content">
                    <div class="recent-project-heading">
                        Empowering businesses through <br>
                        technology is at the core of what we do.
                    </div>

                    <div class="row">
                        <div class="col-3">
                            <div class="recent-project-counter">
                                <div class="number-counter" data-count="25" data-suffix="+">
                                    0+
                                </div>
                                <div class="counter-text">
                                    Years of Industry Experience
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="recent-project-counter">
                                <div class="number-counter" data-count="47">
                                    0
                                </div>
                                <div class="counter-text">
                                    Awards Wins
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="recent-project-counter">
                                <div class="number-counter" data-count="1" data-suffix="K+">
                                    0K+
                                </div>
                                <div class="counter-text">
                                    Projects
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="recent-project-counter">
                                <div class="number-counter" data-count="3" data-suffix="K">
                                    0K
                                </div>
                                <div class="counter-text">
                                    Happy Clients
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- recent projects section end -->


<!-- blogs start -->
<div class="blog-section-main bg-blog-blob">
    <div class="container section-padding">

        <div class="blogs-heading">
            <div class="blogs-content text-center">
                <div class="heading-top heading-top-blogs">
                    BLOGS & NEWS
                </div>
                <div class="heading mt-2">
                    Expert Opinions, Industry <br>
                    News & More
                </div>
            </div>
        </div>
        <div class="blog-cards pt-4">
            <div class="view-all-btn">
                <a href="{{ url('blogs') }}">VIEW ALL &nbsp; <img src="{{URL::asset('front/images/right-arrow.svg')}}" alt=""></a>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="blog-card card text-bg-dark rounded-0">
                        <div class="overlay"></div>
                        <img src="{{URL::asset('front/images/blog-img-1.png')}}" class="card-img rounded-0" alt="...">
                        <div class="card-img-overlay">
                            <span class="blogs-small-label">DESIGN</span>
                            <h5 class="card-title"><a href="" class="text-white text-decoration-none">The Future
                                    of
                                    UI/UX: Trends Shaping Digital Experiences</a></h5>
                            <div class="card-date-auther">
                                <div class="blog-date">
                                    <img src="{{URL::asset('front/images/time-blog.svg')}}" alt="">
                                    <p>17 April, 2025</p>
                                </div>
                                <div class="blog-auther">
                                    <img src="{{URL::asset('front/images/person-blog.svg')}}" alt="">
                                    <p>David Johnson</p>
                                </div>
                            </div>
                        </div>
                        <div class="blog-btn-main">
                            <a href="{{ url('blog-details') }}">
                                <div class="blog-btn">
                                    <svg class="arrow-right" width="14" height="9" viewBox="0 0 14 9"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 1L7 7.02705L13 1" stroke="white" stroke-width="1.6" />
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="blog-card card text-bg-dark rounded-0">
                        <div class="overlay"></div>
                        <img src="{{URL::asset('front/images/blog-img-2.png')}}" class="card-img rounded-0" alt="...">
                        <div class="card-img-overlay">
                            <span class="blogs-small-label">WEB SOLUTION</span>
                            <h5 class="card-title"><a href="" class="text-white text-decoration-none">How Custom
                                    Software Can Accelerate Business Growth</a></h5>
                            <div class="card-date-auther">
                                <div class="blog-date">
                                    <img src="{{URL::asset('front/images/time-blog.svg')}}" alt="">
                                    <p>15 April, 2025</p>
                                </div>
                                <div class="blog-auther">
                                    <img src="{{URL::asset('front/images/person-blog.svg')}}" alt="">
                                    <p>Graham Nikelton</p>
                                </div>
                            </div>
                        </div>
                        <div class="blog-btn-main">
                            <a href="{{ url('blog-details') }}">
                                <div class="blog-btn">
                                    <svg class="arrow-right" width="14" height="9" viewBox="0 0 14 9"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 1L7 7.02705L13 1" stroke="white" stroke-width="1.6" />
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="blog-card card text-bg-dark rounded-0">
                        <div class="overlay"></div>
                        <img src="{{URL::asset('front/images/blog-img-3.png')}}" class="card-img rounded-0" alt="...">
                        <div class="card-img-overlay">
                            <span class="blogs-small-label">AI SOLUTION</span>
                            <h5 class="card-title"><a href="" class="text-white text-decoration-none">AI &
                                    Automation: Transforming the Software Industry</a></h5>
                            <div class="card-date-auther">
                                <div class="blog-date">
                                    <img src="{{URL::asset('front/images/time-blog.svg')}}" alt="">
                                    <p>12 April, 2025</p>
                                </div>
                                <div class="blog-auther">
                                    <img src="{{URL::asset('front/images/person-blog.svg')}}" alt="">
                                    <p>David Johnson</p>
                                </div>
                            </div>
                        </div>
                        <div class="blog-btn-main">
                            <a href="{{ url('blog-details') }}">
                                <div class="blog-btn">
                                    <svg class="arrow-right" width="14" height="9" viewBox="0 0 14 9"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 1L7 7.02705L13 1" stroke="white" stroke-width="1.6" />
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
<!-- blogs end -->

<!-- contact start -->
@include ("Front.includes.contact-form")

<!-- contact end -->

@include ("Front.includes.footer")
<script>
     $(".home .nav-link").addClass("active");
</script>