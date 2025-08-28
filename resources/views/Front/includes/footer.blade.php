<!-- footer -->
<div class="footer-container-bg-color">

    <div class="container ">
        <div class="footer-section">

            <div class="row text-white">
                <div class="col-md-5 pb-4 pb-md-0">
                    <div class="footer-content">
                        <img src="{{URL::asset('front/images/Logo.svg')}}" alt="">
                        <div class="pt-4">
                            <p class="p-0">At 80 Tech Solutions, we help service-based industries streamline
                                operations with
                                custom
                                software, automation, AI, and expert project management. We collaborate with
                                teams
                                to
                                understand challenges and deploy innovative, robust workflow solutions. Our goal
                                is
                                to
                                eliminate barriers and enhance service interactions through cutting-edge
                                technology.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-6 pb-4 pb-md-0">
                    <div class="links ps-4">
                        <h4>Important Links</h4>
                        <ul class="mt-4">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('about') }}">About Us</a></li>
                            <li><a href="{{ url('blogs') }}">Blogs</a></li>
                            <li><a href="{{ url('contact') }}">Talk To Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-6 pb-4 pb-md-0">
                    <div class="services-list ps-4">
                        <h4>Our Services</h4>
                        <ul class="mt-4">
                            <li><a href="">Software Development</a></li>
                            <li><a href="">App Development</a></li>
                            <li><a href="">Website Development</a></li>
                            <li><a href="">AI Services</a></li>
                            <li><a href="">IoT Solutions</a></li>
                            <li><a href="">PM & IT Consultancy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="connect ps-4">
                        <h4>Connect With Us</h4>
                        <ul class="mt-4">
                            <li class="pb-3">
                                <div class="footer-social-icons">
                                    <img src="{{URL::asset('front/images/facebook.svg')}}" alt="">
                                    <img src="{{URL::asset('front/images/twitter.svg')}}" alt="">
                                    <img src="{{URL::asset('front/images/linkedin.svg')}}" alt="">
                                    <img src="{{URL::asset('front/images/insta.svg')}}" alt="">
                                </div>
                            </li>
                            <li><a href="callto:+64021875514"><img class="pe-3"
                                        src="{{URL::asset('front/images/footer-phone.svg')}}" alt="">+64 (0) 21875514</a></li>
                            <li><a href="mailto:info@eightytech.nz"><img class="pe-3"
                                        src="{{URL::asset('front/images/footer-mail.svg')}}" alt="">info@eightytech.nz</a></li>

                        </ul>
                    </div>

                </div>
            </div>
            <div class="row footer-bottom pt-3">
                <div class="col-md-6 copyright-text text-center text-md-start">
                    <p>Copyright © 2025 80 Tech Solutions, All rights reserved. </p>
                </div>
                <div class="col-md-6">
                    <div class="text-md-end text-center privacy-condition text-white">
                        <a href="{{ url('privacy-policy') }}">Privacy & Cookie Policy</a> &nbsp; | &nbsp; <a
                            href="{{ url('terms-conditions') }}">Terms of
                            Services</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- footer end -->

</div>



<script>
    document.addEventListener("DOMContentLoaded", function() {
        const accordionButtons = document.querySelectorAll(".accordion-button");

        accordionButtons.forEach(button => {
            button.addEventListener("click", function() {
                const accordionItem = this.closest(".accordion-item");

                // Remove active class from all items
                document.querySelectorAll(".accordion-item").forEach(item => {
                    item.classList.remove("active");
                });

                // Add active class if the accordion is open
                if (this.getAttribute("aria-expanded") === "true") {
                    accordionItem.classList.add("active");
                }
            });
        });
    });
</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="{{URL::asset('front/script/function.js')}}"></script>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiperworks", {
        slidesPerView: "1.4",
        centeredSlides: true,
        spaceBetween: 10,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });


    var swiper = new Swiper(".mySwipertechnology", {
        slidesPerView: "1",
        centeredSlides: true,
        spaceBetween: 10,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next-tech",
            prevEl: ".swiper-button-prev-tech",
        },
    });


    var swiper = new Swiper(".mySwiperservices", {
        slidesPerView: "4",
        spaceBetween: 0,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },


    });
</script>
</body>

</html>