@section('meta-header')
@section('title', !empty($metadata->meta_title) ? $metadata->meta_title : '')
@section('meta_description', !empty($metadata->meta_description) ? $metadata->meta_description : '')
@section('meta_keywords', !empty($metadata->meta_keyword) ? $metadata->meta_keyword : '')
@include ("Front.includes.header")
</div>

<style>
    .blog-card {
        margin-bottom: 20px;
    }
</style>

<div class="top-banner top-banner-blogs">
    <div class="container hero-top-padding">
        <div class="row">
            <div class="col-12">
                <!-- <h2 class="mb-4">Blogs</h2>
                <span class="pt-3">Home &nbsp; > &nbsp; Blogs</span> -->

                <div class="blogs-heading mb-5">
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
            </div>
        </div>
    </div>
</div>



<!-- blogs start -->
<div class="blog-section-main bg-blog-blob">
    <div class="container section-padding">

        <!-- <div class="blogs-heading mb-5">
            <div class="blogs-content text-center">
                <div class="heading-top heading-top-blogs">
                    BLOGS & NEWS
                </div>
                <div class="heading mt-2">
                    Expert Opinions, Industry <br>
                    News & More
                </div>
            </div>
        </div> -->
        <div class="blog-cards pt-4">

            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="blog-card card text-bg-dark rounded-0">
                        <div class="overlay"></div>
                        <img src="{{URL::asset('front/images/blog-img-1.png')}}" class="card-img rounded-0" alt="...">
                        <div class="card-img-overlay">
                            <span class="blogs-small-label">DESIGN</span>
                            <h5 class="card-title"><a href="{{ url('blog-details') }}" class="text-white text-decoration-none">The Future
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
                <div class="col-md-6 col-lg-4">
                    <div class="blog-card card text-bg-dark rounded-0">
                        <div class="overlay"></div>
                        <img src="{{URL::asset('front/images/blog-img-2.png')}}" class="card-img rounded-0" alt="...">
                        <div class="card-img-overlay">
                            <span class="blogs-small-label">WEB SOLUTION</span>
                            <h5 class="card-title"><a href="{{ url('blog-details') }}" class="text-white text-decoration-none">How Custom
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
                <div class="col-md-6 col-lg-4">
                    <div class="blog-card card text-bg-dark rounded-0">
                        <div class="overlay"></div>
                        <img src="{{URL::asset('front/images/blog-img-3.png')}}" class="card-img rounded-0" alt="...">
                        <div class="card-img-overlay">
                            <span class="blogs-small-label">AI SOLUTION</span>
                            <h5 class="card-title"><a href="{{ url('blog-details') }}" class="text-white text-decoration-none">AI &
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
                <div class="col-md-6 col-lg-4">
                    <div class="blog-card card text-bg-dark rounded-0">
                        <div class="overlay"></div>
                        <img src="{{URL::asset('front/images/blog-img-2.png')}}" class="card-img rounded-0" alt="...">
                        <div class="card-img-overlay">
                            <span class="blogs-small-label">WEB SOLUTION</span>
                            <h5 class="card-title"><a href="{{ url('blog-details') }}" class="text-white text-decoration-none">How Custom
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
                <div class="col-md-6 col-lg-4">
                    <div class="blog-card card text-bg-dark rounded-0">
                        <div class="overlay"></div>
                        <img src="{{URL::asset('front/images/blog-img-3.png')}}" class="card-img rounded-0" alt="...">
                        <div class="card-img-overlay">
                            <span class="blogs-small-label">AI SOLUTION</span>
                            <h5 class="card-title"><a href="{{ url('blog-details') }}" class="text-white text-decoration-none">AI &
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
                <div class="col-md-6 col-lg-4">
                    <div class="blog-card card text-bg-dark rounded-0">
                        <div class="overlay"></div>
                        <img src="{{URL::asset('front/images/blog-img-1.png')}}" class="card-img rounded-0" alt="...">
                        <div class="card-img-overlay">
                            <span class="blogs-small-label">DESIGN</span>
                            <h5 class="card-title"><a href="{{ url('blog-details') }}" class="text-white text-decoration-none">The Future
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
    $(".blogs .nav-link").addClass("active");
</script>