@section('meta-header')
@section('title', !empty($metadata->meta_title) ? $metadata->meta_title : '')
@section('meta_description', !empty($metadata->meta_description) ? $metadata->meta_description : '')
@section('meta_keywords', !empty($metadata->meta_keyword) ? $metadata->meta_keyword : '')
@include ("Front.includes.header")
</div>

<div class="top-banner top-banner-contact">
    <div class="container hero-top-padding">
        <div class="row">
            <div class="col-12">
                <!-- <h2 class="mb-4">Blogs</h2>
                <span class="pt-3">Home &nbsp; > &nbsp; Blogs</span> -->

                <div class="blogs-heading mb-5">
                    <div class="blogs-content contact-content-top text-center">
                        <div class="heading-top heading-top-blogs">
                            Contact Form
                        </div>
                        <div class="heading mt-2">
                            Feel free to reach via <br> contact us form
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- contact cards -->




<div class="container section-padding contact-cards pb-0">
    <div class="row">

        <div class="col-6">
            <div class="about-content">
                <div class="heading-top">
                    How can help you?
                </div>
                <div class="heading">
                    Have a project in mind? <br> Get in touch!
                </div>

            </div>
        </div>
        <div class="col-5">
            <div class="para">
                <p class="paragraph">
                    We're here to help and answer any question you might have. We look forward to hearing from you. Any need help you please contact us or meet to office with coffee.

                </p>
            </div>
        </div>

    </div>

    <div class="contact-small-cards section-padding pb-0">
        <div class="row">
            <div class="col-3">
                <div class="mb-5 text-center text-sm-start">
                    <span class="d-block text-white border-bottom border-2 pb-3 mb-3">
                        <i class="fa-solid fa-location-dot pe-2"></i>
                        Office Location
                    </span>
                    <div class="last-paragraph-no-margin">
                        <p>8 Bluff Road, Kenepuru,<br> Porirua, 5022. Australia</p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="mb-5 text-center text-sm-start">
                    <span class="d-block text-white border-bottom border-2 pb-3 mb-3">
                        <i class="fa-solid fa-envelope pe-2"></i>
                        Send a message
                    </span>
                    <div class="last-paragraph-no-margin">
                        <a href="mailto:info@eightytech.nz">info@eightytech.nz</a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="mb-5 text-center text-sm-start">
                    <span class="d-block text-white border-bottom border-2 pb-3 mb-3">
                        <i class="fa-solid fa-phone pe-2"></i>
                        Call us directly
                    </span>
                    <div class="last-paragraph-no-margin">
                        <a href="callto:+6421875514">+64 (0) 21875514</a>

                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="mb-5 text-center text-sm-start">
                    <span class="d-block text-white border-bottom border-2 pb-3 mb-3">
                        <i class="fa-solid fa-people-group pe-2"></i>
                        Join our team
                    </span>
                    <div class="last-paragraph-no-margin">
                        <a href="mailto:sales@eightytech.nz">sales@eightytech.nz</a> <br><a href="mailto:hr@eightytech.nz">hr@eightytech.nz</a>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- contact cards end -->

<!-- contact start -->
@include ("Front.includes.contact-form")

<div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3004.579607010605!2d174.83337608685252!3d-41.14370235765717!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d3f538cdccc94f1%3A0x5091a7a321d2fc57!2s8%20Bluff%20Road%2C%20Kenepuru%2C%20Porirua%205022%2C%20New%20Zealand!5e0!3m2!1sen!2sin!4v1744097131036!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

</div>


<!-- contact end -->

@include ("Front.includes.footer")

<script>
    $(".contact .nav-link").addClass("active");
</script>