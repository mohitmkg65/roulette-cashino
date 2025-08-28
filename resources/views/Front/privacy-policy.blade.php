@section('meta-header')
@section('title', !empty($metadata->meta_title) ? $metadata->meta_title : '')
@section('meta_description', !empty($metadata->meta_description) ? $metadata->meta_description : '')
@section('meta_keywords', !empty($metadata->meta_keyword) ? $metadata->meta_keyword : '')
@include ("Front.includes.header")
</div>

<div class="top-banner top-banner-blog-details blog-details-page">
    <div class="container hero-top-padding">
        <div class="row">
            <div class="col-12">
                <div class="blogs-heading mb-5 d-flex justify-content-center">
                    <div class="text-center">

                        <div class="heading mt-2">
                            Privacy Policy
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- about section -->

<div class="container section-padding">
    <div class="row privacy-policy">
        <div class="col-12">
            <div class="blog-page-content">
                <h1 class="pp-page-heading">
                    Privacy And Our Clients
                </h1>

                <p class="paragraph">
                    Protecting the privacy and confidentiality of those we help is essential in preserving dignity and providing respectful assistance.
                    <br>
                    We collect only personal information that is necessary for our work. This would include name, address, contact details, a statement of financial position including details of income/outgo and assets/liabilities. We also obtain background information about the nature of the client's need and any other information that could be pertinent to the application for assistance.
                    <br>
                    We never disclose this personal information to third parties without consent unless we are required to do so by law. Nor do we publish identifiable personal information in publications or on our website without consent, unless required to do so by law.
                </p>

            </div>
            <div class="blog-page-content">
                <h1 class="pp-page-heading">
                    How We Use Personal Information

                </h1>

                <p class="paragraph">
                    Personal information is collected and used only with the client consent so that We can provide the best possible assistance within our capacity. It is used for the following specific purposes:
                </p>
                <ul class="list-item">
                    <li>
                        <p>Assessing eligibility for assistance</p>
                    </li>
                    <li>
                        <p>Assessing the nature and extent of the clients need</p>
                    </li>
                    <li>
                        <p>Establishing the authenticity of the application</p>
                    </li>
                    <li>
                        <p>Making informed decisions in relation to individual grants</p>
                    </li>
                    <li>
                        <p>For internal reporting purposes</p>
                    </li>
                    <li>
                        <p>To plan our future programs</p>
                    </li>
                    <li>
                        <p>Consent is always obtained before using personal information for any purpose that would require the disclosure of that information outside the organization in circumstances that could identify the client.</p>
                    </li>
                </ul>
                <p class="paragraph">
                    Consent is always obtained before using personal information for any purpose that would require the disclosure of that information outside the organization in circumstances that could identify the client.
                </p>

            </div>
            <div class="blog-page-content">
                <h1 class="pp-page-heading">
                    Disclosure
                </h1>

                <p class="paragraph">
                    In some instances, particularly when we are trying to raise funds, we may use case studies to describe and communicate the nature of the work we do. Where this occurs, the cases have been de-personalized so that identification of the clients is impossible.
                </p>

            </div>
            <div class="blog-page-content">
                <h1 class="pp-page-heading">
                    Protection Of Personal Information
                </h1>
                <p class="paragraph">
                    We take all reasonable means to ensure that all personal information collected is protected from misuse, unauthorized access, modification or disclosure. All communications made via our website are secure.
                </p>
            </div>
            <div class="blog-page-content">
                <h1 class="pp-page-heading">
                    Further Information

                </h1>
                <p class="paragraph">
                    For further information about how we manage personal information, to request copies of your personal information held by us, or to make a complaint about the handling of your personal information, please call us on email us at <a href="" class="text-white">helpdesk@email.com.</a>
                </p>
            </div>
            <div class="blog-page-content">

                <h5 class="text-white">
                    You may also contact us to correct any details in your personal information that we hold.

                </h5>
            </div>

        </div>
    </div>



</div>

<!-- about section end -->


<!-- contact start -->
@include ("Front.includes.contact-form")

<!-- contact end -->

@include ("Front.includes.footer")
