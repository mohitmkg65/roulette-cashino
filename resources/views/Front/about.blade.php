@section('meta-header')
@section('title', !empty($metadata->meta_title) ? $metadata->meta_title : '')
@section('meta_description', !empty($metadata->meta_description) ? $metadata->meta_description : '')
@section('meta_keywords', !empty($metadata->meta_keyword) ? $metadata->meta_keyword : '')
@include ("Front.includes.header")

</div>

<style>
    .border-primary {
        --bs-border-opacity: 1;
        border-color: #f65d00 !important;
    }
</style>

<div class="top-banner top-banner-contact">
    <div class="container hero-top-padding">
        <div class="row">
            <div class="col-12">
                <!-- <h2 class="mb-4">Blogs</h2>
                <span class="pt-3">Home &nbsp; > &nbsp; Blogs</span> -->

                <div class="blogs-heading mb-5">
                    <div class="blogs-content about-content-top text-center">
                        <div class="heading-top heading-top-blogs">
                            ABOUT US
                        </div>
                        <div class="heading mt-2">
                            Powerful agency for corporate business
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- about section -->

<div class="container section-padding about-page">
    <div class="row">
        <div class="col-5">
            <div class="img-group">
                <div class="img-right">
                    <img src="{{URL::asset('front/images/about-rightimg.png')}}" class="hero-img" alt="">
                </div>
                <div class="img-left">
                    <img src="{{URL::asset('front/images/about-leftimg.png')}}" class="hero-img" alt="">
                </div>

            </div>
        </div>
        <div class="col-7">
            <div class="about-content">
                <div class="heading-top">
                    WHO WE ARE
                </div>
                <div class="heading">
                    We love solving problems & creating solutions
                </div>

                <div class="para">
                    <p class="paragraph">
                        We are a team of experienced and passionate IT professionals who love solving problems and creating solutions. We have over 30 years of combined experience in the IT industry, working with clients across various sectors such as hospitality, finance, education, and healthcare. We understand the challenges and opportunities that servicebased industries face in the digital age, and we are committed to helping them achieve their goals and vision. <br>
                        We believe that technology is a powerful tool that can enhance and transform the way people work and communicate. We also believe that technology should serve people, not the other way around. That's why we design and develop custom solutions that are tailored to the specific needs and preferences of our clients and their end-users. We don't just provide generic solutions; we create unique experiences that fit the context and culture of each organisation.
                        <br>
                        We also know that technology alone is not enough to ensure success. It takes careful planning, coordination, and execution to deliver high-quality projects on time and within budget. That's why we offer professional project management services that cover every aspect of the project lifecycle, from initiation to closure.
                        <br>
                        We work closely with our clients to define the scope, objectives, and deliverables of each project, and we manage the resources, risks, and stakeholders effectively and efficiently. We communicate clearly and regularly with our clients and their teams, ensuring that everyone is on the same page and aligned with the project vision.
                    </p>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- about section end -->

<!-- team section  -->

<!-- Team 1 - Bootstrap Brain Component -->
<section class="bg-dark py-3 py-md-5 py-xl-8">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">


                <div class="blogs-heading mb-5">
                    <div class="blogs-content our-team-content text-center">

                        <div class="heading mt-2">
                            Our Team
                        </div>
                        <p class="text-secondary mb-5 text-center lead fs-4 text-white">We are a group of innovative, experienced, and proficient teams. You will love to collaborate with us.</p>
                    </div>
                    <hr class="w-50 mx-auto mb-5 mb-xl-9 border-secondary-subtle">


                </div>
            </div>
        </div>
    </div>

    <div class="container overflow-hidden">
        <div class="row gy-4 gy-lg-0 gx-xxl-5 teams-card">
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card border-0 border-bottom border-primary shadow-sm overflow-hidden">
                    <div class="card-body p-0">
                        <figure class="m-0 p-0">
                            <img class="img-fluid" loading="lazy" src="{{URL::asset('front/images/team-img-2.webp')}}" alt="Flora Nyra">
                            <figcaption class="m-0 p-4">
                                <h4 class="mb-1">Flora Nyra</h4>
                                <p class="text-secondary mb-0">Product Manager</p>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card border-0 border-bottom border-primary shadow-sm overflow-hidden">
                    <div class="card-body p-0">
                        <figure class="m-0 p-0">
                            <img class="img-fluid" loading="lazy" src="{{URL::asset('front/images/team-img-1.webp')}}" alt="Evander Mac">
                            <figcaption class="m-0 p-4">
                                <h4 class="mb-1">Evander Mac</h4>
                                <p class="text-secondary mb-0">Art Director</p>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card border-0 border-bottom border-primary shadow-sm overflow-hidden">
                    <div class="card-body p-0">
                        <figure class="m-0 p-0">
                            <img class="img-fluid" loading="lazy" src="{{URL::asset('front/images/team-img-3.webp')}}" alt="Taytum Elia">
                            <figcaption class="m-0 p-4">
                                <h4 class="mb-1">Taytum Elia</h4>
                                <p class="text-secondary mb-0">Investment Planner</p>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card border-0 border-bottom border-primary shadow-sm overflow-hidden">
                    <div class="card-body p-0">
                        <figure class="m-0 p-0">
                            <img class="img-fluid" loading="lazy" src="{{URL::asset('front/images/team-img-4.webp')}}" alt="Wylder Elio">
                            <figcaption class="m-0 p-4">
                                <h4 class="mb-1">Wylder Elio</h4>
                                <p class="text-secondary mb-0">Financial Analyst</p>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- team section end -->

<!-- Philosophy cards -->

<div class="container section-padding  pb-0">
    <div class="row">

        <div class="col-8">
            <div class="about-content">
                <div class="heading-top">
                    OUR PHILOSOPHY
                </div>
                <div class="heading">
                    Exceptional experiences through innovation and design.
                </div>

            </div>
        </div>
        <div class="col-5">
            <div class="para">

            </div>
        </div>

    </div>


    <div class="about-small-cards section-padding">
        <div class="row row-cols-1 row-cols-lg-5 row-cols-md-2 row-cols-sm-2">
            <div class="col">
                <div class="card-client">
                    <div class="user-picture">
                        <i class="fa-solid fa-handshake-angle feature-icon"></i>
                    </div>
                    <p class="name-client"> At 80 Tech Solutions, we don't just build software. we build relationships.
                    </p>
                </div>
            </div>
            <div class="col">
                <div class="card-client">
                    <div class="user-picture">
                        <i class="fa-solid fa-award feature-icon"></i>
                    </div>
                    <p class="name-client">We value trust, collaboration, and excellence in everything we do.
                    </p>
                </div>
            </div>
            <div class="col">
                <div class="card-client">
                    <div class="user-picture">
                        <i class="fa-solid fa-handshake-simple feature-icon"></i>
                    </div>
                    <p class="name-client">We are not just a vendor. we are a partner.
                    </p>
                </div>
            </div>
            <div class="col">
                <div class="card-client">
                    <div class="user-picture">
                        <i class="fa-solid fa-lightbulb feature-icon"></i>

                    </div>
                    <p class="name-client">We are not just a service provider, we are a solution provider.
                    </p>
                </div>
            </div>
            <div class="col">
                <div class="card-client">
                    <div class="user-picture">
                        <i class="fa-solid fa-building feature-icon"></i>
                    </div>
                    <p class="name-client">We are not just a tech company, we are a people company.
                    </p>
                </div>
            </div>


        </div>
    </div>

</div>

<!-- Philosophy cards end -->

<!-- Why choose Us -->

<div class="container section-padding  pb-0">
    <div class="row">

        <div class="col-6">

            <div class="mb-5">
                <div class="heading-top mb-3">
                    80 TECH SOLUTIONS
                </div>
                <div class="heading mb-3">
                    Why Choose Us ?
                </div>

            </div>

            <div class="accordion accordion-flush about-why-choose" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed text-white d-flex justify-content-between" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseOne" aria-expanded="false"
                            aria-controls="flush-collapseOne">
                            We Specialize in Creating Custom Software
                            <img src="{{URL::asset('front/images/arrow-down.svg')}}" class="top-arrow" alt="Arrow" />
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">At 80 Tech Solutions, we specialize in creating custom software solutions tailored to the unique needs of your business. Our expert team will work closely with you to develop innovative software that drives efficiency and growth.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed text-white d-flex justify-content-between" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseTwo" aria-expanded="false"
                            aria-controls="flush-collapseTwo">
                            Experience Seamless Operations
                            <img src="{{URL::asset('front/images/arrow-down.svg')}}" class="top-arrow" alt="Arrow" />

                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body text-white">Experience seamless operations and increased productivity with our advanced process automation services. We help businesses automate repetitive tasks, streamline workflows, and optimize business processes for maximum efficiency. </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed text-white d-flex justify-content-between" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseThree" aria-expanded="false"
                            aria-controls="flush-collapseThree">
                            Succesful Execution of Projects
                            <img src="{{URL::asset('front/images/arrow-down.svg')}}" class="top-arrow" alt="Arrow" />

                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body"> Let our experienced project management professionals take the lead in ensuring the successful execution of your technology projects. From planning to implementation, we provide expert guidance and oversight to deliver exceptional results.</div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed text-white d-flex justify-content-between" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseFour" aria-expanded="false"
                            aria-controls="flush-collapseFour">
                            Perfect Blend Of Technology and Talent
                            <img src="{{URL::asset('front/images/arrow-down.svg')}}" class="top-arrow" alt="Arrow" />
                        </button>
                    </h2>
                    <div id="flush-collapseFour" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body"> Discover the perfect blend of technology and talent with 80 Tech Solutions. We combine cutting-edge technological solutions with the expertise of our skilled professionals to elevate your business to new heights.</div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed text-white d-flex justify-content-between" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseFive" aria-expanded="false"
                            aria-controls="flush-collapseFive">
                            Our commitment to your Success
                            <img src="{{URL::asset('front/images/arrow-down.svg')}}" class="top-arrow" alt="Arrow" />

                        </button>
                    </h2>
                    <div id="flush-collapseFive" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Our commitment to your success goes beyond implementation. Count on us for continuous support, maintenance, and optimization of your technology solutions to keep your business at the forefront of innovation.</div>
                    </div>
                </div>
            </div>

        </div>
        <!--left container end-->
        <div class="col-6 m-auto">
            <div id="carouselExampleDark" class="carousel carousel-dark slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="{{URL::asset('front/images/service-1.png')}}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">

                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="{{URL::asset('front/images/service-2.png')}}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">

                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{URL::asset('front/images/service-3.png')}}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">

                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Why choose Us end -->


<!-- contact start -->
@include ("Front.includes.contact-form")

<!-- contact end -->

@include ("Front.includes.footer")

<script>
    $(".about .nav-link").addClass("active");
</script>